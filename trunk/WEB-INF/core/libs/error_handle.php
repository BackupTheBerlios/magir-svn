<?php
/*
 * Created on Jan 24, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
/*
 * Error Handler
 * @param String $errStr Error string
 * @param String $errFile Name of file that error occure on it
 * @param String $errorMethod Name of method that error occure on it
 * @param String $errorClass Name of class that error occure on it
 * @param String $errorCustom Custom error string
 */
function ErrorHandler($errStr, $errFile, $errLine,$errorMethod='',$errorClass='',$errorCustom='')
{

		$string="<br />********$errStr***********<br />";
		$string.="Error Occure On file : $errFile <br />";
		if($errorClass!='') $string.="Error On ClassName : $errorClass <br />";
		if($errorMethod!='') $string.="Error On Method : $errorMethod <br />";
		$string.="Error On Line : $errLine <br />";
		if($errorCustom!='')$string.="Error : $errorCustom<br />";
		$string.="**************************************************<br />";

	trigger_error($string);
}
?>
