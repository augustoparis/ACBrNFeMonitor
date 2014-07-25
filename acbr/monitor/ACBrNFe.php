<?php
/**
 * Classe responsavel pela envio de comandos NFe ao ACBrNFeMonitor.
 *
 * REFERENCIAS:
 * 
 * http://acbr.sourceforge.net/drupal/?q=node/40
 * http://anfm.blogspot.com.br/2010/02/comandos-do-acbrnfemonitor.html
 * 
 * @name ACBrNFe
 * @version 0.0.5
 * @author Eduardo Malherbi <emalherbi@gmail.com>
 *   
 */ 
defined('DS') 
	|| define('DS', DIRECTORY_SEPARATOR);
	
defined('ROOT') 
	|| define('ROOT', realpath(dirname(__FILE__)));

require_once(ROOT . DS . 'acbr' . DS . 'monitor' . DS . "ACBrNFeMonitor.php");

class ACBrNFe {

	public $debug;
	private $monitor; 
	private $pathAcbrNFE;
	private $pathAcbrCAN;
	private $pathAcbrINU;
	private $pathAcbrPDF;
	private $pathWebNFE;
	private $pathWebCAN;
	private $pathWebINU;
	private $pathWebPDF;
	
	public function __construct($ip, $port) {
		$this->debug = false;
		$this->monitor = new ACBrNFeMonitor($ip, $port);
		
		$this->pathAcbrNFE = "C:" . DS . "ACBrNFeMonitor" . DS . "web" . DS . "nfe" . DS; 
		$this->pathAcbrCAN = "C:" . DS . "ACBrNFeMonitor" . DS . "web" . DS . "can" . DS; 
		$this->pathAcbrINU = "C:" . DS . "ACBrNFeMonitor" . DS . "web" . DS . "inu" . DS;
		$this->pathAcbrPDF = "C:" . DS . "ACBrNFeMonitor" . DS . "web" . DS . "pdf" . DS;
		
		$this->pathWebNFE = "web" . DS . "nfe" . DS; 
		$this->pathWebCAN = "web" . DS . "can" . DS; 
		$this->pathWebINU = "web" . DS . "inu" . DS; 
		$this->pathWebPDF = "web" . DS . "pdf" . DS; 
	}
	
 	/**
	 * @return string 
	 */			
	public function saveToFile($pathWeb) {
		$nome = basename($pathWeb);
		$conteudo = file_get_contents($pathWeb);

		$pathAcbr = $this->pathAcbrNFE . $nome;
		$arr = $this->monitor->execute( 'NFE.SAVETOFILE("'.$pathAcbr.'","'.$conteudo.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return $pathAcbr;
		}
		
		return $arr['ERRO'];
	}		
	
 	/**
	 * @return string 
	 */			
	public function loadFromFile($pathAcbr, $pathWeb, $seg=60) {
		$arr = $this->monitor->execute( 'NFE.LOADFROMFILE("'.$pathAcbr.'","'.$seg.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
			$this->monitor->saveFile($pathWeb, $arr['OK']);
			return $pathWeb;
		}
		
		return $arr['ERRO'];
	}		
	
 	/**
	 * @return mixed boolean ou string com o erro 
	 */	
	public function ativo() {
		$arr = $this->monitor->execute( 'NFE.ATIVO', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return true;
		}
		
		return $arr['ERRO'];
	}
	
 	/**
	 * @return mixed array ou string com o erro 
	 */	
	public function statusServico() {
		$arr = $this->monitor->execute( 'NFE.STATUSSERVICO', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return $this->monitor->formatReturn( $arr['OK'] );
		}
		
		return $arr['ERRO'];		
	}
	
	/**
	 * @return mixed boolean ou string com o erro  
	 */	
	public function assinarNFe($chave) {
		$pathAcbr = $this->pathAcbrNFE . $chave . ".xml";
		
		$arr = $this->monitor->execute( 'NFE.ASSINARNFE("'.$pathAcbr.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return true;
		}
		
		return $arr['ERRO'];		
	}	
	
 	/**
	 * @return mixed boolean ou string com o erro 
	 */		
	public function validarNFe($chave) {
		$pathAcbr = $this->pathAcbrNFE . $chave . ".xml";
				
		$arr = $this->monitor->execute( 'NFE.VALIDARNFE("'.$pathAcbr.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return true;
		}
		
		return $arr['ERRO'];
	}		

 	/**
	 * @return mixed array ou string com o erro 
	 */	
	public function consultarNFe($chave) {
		$arr = $this->monitor->execute( 'NFE.CONSULTARNFE("'.$chave.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return $this->monitor->formatReturn( $arr['OK'] );
		}
		
		return $arr['ERRO'];			
	}
	
 	/**
	 * @return mixed array ou string com o erro 
	 */		
	public function cancelarNFe($chave, $justificativa='') {
		$arr = $this->monitor->execute( 'NFE.CANCELARNFE("'.$chave.'","'.$justificativa.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return $this->monitor->formatReturn( $arr['OK'] );
		}
		
		return $arr['ERRO'];		
	}	

 	/**
	 * @return mixed boolean ou string com o erro 
	 */		
	public function imprimirDanfePDF($chave) {
		$pathAcbr = $this->pathAcbrNFE . $chave . ".xml";
		
		$arr = $this->monitor->execute( 'NFE.IMPRIMIRDANFEPDF("'.$pathAcbr.'")', $this->debug );
		if ( empty($arr['ERRO']) ) {
				
			$pathAcbr = $this->pathAcbrPDF . $chave . ".pdf";
			$pathWeb  = $this->pathWebPDF  . $chave . ".pdf";

			$this->loadFromFile($pathAcbr, $pathWeb);
			return true;
		}
		
		return $arr['ERRO'];		
	}	

 	/**
	 * @return mixed array ou string com o erro 
	 */		
	public function inutilizarNFe($cnpj, $justificativa, $serie, $numInicial, $numFinal, $modelo='55', $ano='') {
		$ano = ( $ano == '' ) ? date('y') : $ano;
		$arr = $this->monitor->execute('NFE.INUTILIZARNFE("'.$cnpj.'","'.$justificativa.'",'.$ano.','.$modelo.','.$serie.','.$numInicial.','.$numFinal.')', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return $this->monitor->formatReturn( $arr['OK'] );
		}
		
		return $arr['ERRO'];			
	}	
	
 	/**
	 * @return mixed array ou string com o erro 
	 */		
	public function enviarNFe($chave, $lote, $assinar=1, $imprimir=0) {
		$pathAcbr = $this->pathAcbrNFE . $chave . ".xml";
		$arr = $this->monitor->execute( 'NFE.ENVIARNFE("'.$pathAcbr.'",'.$lote.','.$assinar.','.$imprimir.')', $this->debug );
		
		if ( empty($arr['ERRO']) ) {
			return $this->monitor->formatReturn( $arr['OK'] );
		}
		
		return $arr['ERRO'];	
	}	
	
 	/**
	 * @return mixed boolean ou string com o erro
	 */		
	public function enviarEmail($para, $chave, $danfe=1) {
		$pathAcbr = $this->pathAcbrNFE . $chave . ".xml";
		$arr = $this->monitor->execute( 'NFE.ENVIAREMAIL("'.$para.'","'.$pathAcbr.'",'.$danfe.')', $this->debug );
		if ( empty($arr['ERRO']) ) {
			return true;
		}
		
		return $arr['ERRO'];				
	}			
}