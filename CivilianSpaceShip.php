<?php 
include_once "SpaceShip.php";
/**
* 
*/
abstract class CivilianSpaceShip extends SpaceShip
{
	
	function __construct($strength,$experience)
	{
		parent::__construct($strength,$experience);
	}
	
}



 ?>