<?php
/**
 * Classe responsavel pela comunicacao com ACBrNFeMonitor.
 * 
 * Nesta classe e possivel abrir uma conexao socket com a 
 * maquina onde o ACBrNFeMonitor esta instalado, fechar
 * a conexao e enviar comandos para o ACBrMonitor. 
 *
 * @name ACBrNFeMonitor
 * @version 0.0.5
 * @author Eduardo Malherbi <emalherbi@gmail.com>
 *   
 */
error_reporting(E_ALL);

/* Allow the script to hang around waiting for connections. */
set_time_limit(0);

/* Turn on implicit output flushing so we see what we're getting
 * as it comes in. */
// ob_implicit_flush();

defined('DS') 
	|| define('DS', DIRECTORY_SEPARATOR);
	
defined('ROOT') 
	|| define('ROOT', realpath(dirname(__FILE__)));

require_once( ROOT . DS . 'acbr' . DS . 'socket' . DS . "ClientSocket.php");

class ACBrNFeMonitor {

	private $ip;
	private $port;
	private $socket;
	
	public function __construct($ip, $port) {
		$this->ip = $ip;
		$this->port = $port;
		
		$this->socket = new ClientSocket();
		$this->open();
	}
	
	public function open() {
		try {
			$this->socket->open($this->ip, $this->port);
		} 
		catch (Exception $e) {
			echo $e->getMessage();

			return false;
		}		
	}
	
	public function close() {
		$this->socket->close();
	}

	public function execute( $command, $debug=false ) {
		try {
			$crlf = chr(13).chr(10).chr(46).chr(13).chr(10);
			$r = $this->socket->sendandrecive( $command . $crlf );
			
			$r = str_replace('', '', $r);
			$r = trim( $r );
			
			$pos = strpos($r, 'OK:');
			$okk = "";
			if ( $pos !== false ) {
				$okk = substr($r, ($pos+4)); 
			}
			$pos = strpos($r, 'ERRO:');
			$err = "";
			if ( $pos !== false ) {
				$err = substr($r, ($pos+6)); 
			}

			$arr = array();
			$arr['OK'  ] = $okk;
			$arr['ERRO'] = $err;

			if ( $debug == true ) {
				echo '<pre>';
				echo print_r( $r ); 
				echo '</pre>';
				exit;
			}
						
			return $arr;
		} 
		catch (Exception $e) {
			echo $e->getMessage();

			return false;
		}
	}	
	
	public function formatReturn($r) {
		$r = explode("\n", $r); 
		$r = array_map('trim', $r);
		
		$key = "";
		$return = array();
		foreach( $r as $values ) {
			$pos1 = strpos($values, '[');
			$pos2 = strpos($values, ']');
			if ( $pos1 !== false && $pos2 !== false ) {
				if ( strpos($values, 'nRec') === false ) {
					$key = substr($values, $pos1, $pos2);
					$key = str_replace("[", "", $key);
					$key = str_replace("]", "", $key);
				}
			}
			$pos3 = strpos($values, '=');
			if ( $pos3 !== false ) {
				list($k, $v) = explode('=', $values);						
				$return['OK'][$key][$k] = $v;
			}					
		}
		return $return;
	}	
	
	public function saveFile($pathWeb, $str) {
        $file = fopen($pathWeb, "a+");
        
        fwrite($file, $str);
        fwrite($file, "\r\n");

        fclose($file);
	}		
}