<?php
	
$PastaInterna="ProjetoMVC/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");



if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ 
	define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); 

} 

else{ 
	define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}"); 
}


// diretório específicos para acesso do servidor
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/js/");


define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");
?>
   
