<?php

defined('DS') 
	|| define('DS', DIRECTORY_SEPARATOR);

defined('ROOT') 
	|| define('ROOT', realpath(dirname(__FILE__)));

require_once(ROOT . DS . 'acbr' . DS . 'monitor' . DS . "ACBrNFe.php");

$nfe = new ACBrNFe('192.168.1.1', 3436);
// $nfe->debug = true;

/**
 * SAVE TO FILE
 * 
 */
// $pathWeb = "web" . DS . "nfe" . DS . "99999999999999999999999999999999999999999999.xml";
// $saveToFile = $nfe->saveToFile($pathWeb);
// echo '<pre>';
// echo print_r( $saveToFile );
// echo '</pre>';

/**
 * LOAD FROM FILE
 * 
 */
// $pathAcbr = "C:" . DS . "ACBrNFeMonitor" . DS . "web" . DS . "nfe" . DS . '99999999999999999999999999999999999999999999.xml';
// $pathWeb = "web" . DS . "nfe" . DS . "99999999999999999999999999999999999999999999.xml";
// $loadFromFile = $nfe->loadFromFile($pathAcbr, $pathWeb);
// echo '<pre>';
// echo print_r( $loadFromFile );
// echo '</pre>';

/**
 * ATIVO
 * 
 */
//$ativo = $nfe->ativo();
//echo '<pre>';
//echo print_r( $ativo );
//echo '</pre>';

/**
 * STATUS SERVICO
 * 
 */
$statusServico = $nfe->statusServico();
echo '<pre>';
echo print_r( $statusServico );
echo '</pre>';

/**
 * ASSINAR NFE
 * 
 */
//$assinarNFe = $nfe->assinarNFe('99999999999999999999999999999999999999999999');
//echo '<pre>';
//echo print_r( $assinarNFe );
//echo '</pre>';

/**
 * VALIDAR NFE
 * 
 */ 
// $validarNFe = $nfe->validarNFe( '99999999999999999999999999999999999999999999' );
// echo '<pre>';
// echo print_r( $validarNFe );
// echo '</pre>';

/**
 * CONSULTAR NFE
 * 
 */  
// $consultarNFe = $nfe->consultarNFe('99999999999999999999999999999999999999999999');
// echo '<pre>';
// echo print_r( $consultarNFe );
// echo '</pre>';

/**
 * CANCELAR NFE
 * 
 */
// $cancelarNFe = $nfe->cancelarNFe('99999999999999999999999999999999999999999999', 'Teste de cancelamento utilizando ACBrMonitor');
// echo '<pre>';
// echo print_r( $cancelarNFe );
// echo '</pre>';

/**
 * IMPRIMIR DANFE PDF
 * 
 */  
//$imprimirDanfePDF = $nfe->imprimirDanfePDF("99999999999999999999999999999999999999999999");
//echo '<pre>';
//echo print_r( $imprimirDanfePDF );
//echo '</pre>';

/**
 * INUTILIZAR NFE
 * 
 */  
// VERIFICAR A NFE    
//$inutilizarNFe = $nfe->inutilizarNFe('99999999999999', 'Teste de inutilizacao', 5, 18, 18);
//echo '<pre>';
//echo print_r( $inutilizarNFe );
//echo '</pre>';

/**
 * ENVIAR NFE
 * 
 */  
// $enviarNFe = $nfe->enviarNFe('99999999999999999999999999999999999999999999', '198');
// echo '<pre>';
// echo print_r( $enviarNFe );
// echo '</pre>';

/**
 * ENVIAR EMAIL NFE
 * 
 */  
// $enviarEmail = $nfe->enviarEmail('seu@email.com.br', '99999999999999999999999999999999999999999999');
// echo '<pre>';
// echo print_r( $enviarEmail );
// echo '</pre>';