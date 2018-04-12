<?php 
include_once "SpaceShip.php";
/**
* 
*/
abstract class MilitarySpaceShip extends SpaceShip
{
	
	function __construct($strength,$experience)
	{
		parent::__construct($strength,$experience);
	}
	
}



 ?>