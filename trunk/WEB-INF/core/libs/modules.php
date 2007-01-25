<?php
/*
 * Created on Jan 24, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
/*
 * load modules 
 */
function load_modules(){
	$dir = dir("WEB-INF/modules");
	$modules=array();
	$numOfModule=0;
	while (false !== ($entry = $dir->read())) {
	  if ($entry=='.' || $entry=='..')
	  	continue;
	  if (file_exists("WEB-INF/modules/{$entry}/module.ini"))
	  	{
	  		$ini=parse_ini_file("WEB-INF/modules/{$entry}/module.ini");
	  		$modules[$numOfModule]=array();
			$modules[$numOfModule]['module']= $ini['name'];
			$modules[$numOfModule]['action']= $ini['action'];
			$modules[$numOfModule]['icon']= $ini['icon'];
			
			$numOfModule++;	
	  	}
	  	
	}
	$dir->close();	
	return $modules;	
}
?>
