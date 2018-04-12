<?php 
include_once "SpaceShip.php";
include_once "StarFleet.php";
include_once "InterceptorSpaceShip.php";
include_once "LeviathanSpaceShip.php";
include_once "DreadnoughtSpaceShip.php";
include_once "MilitarySpaceShip.php";
include_once "CivilianSpaceShip.php";
include_once "RecreationSpaceShip.php";
include_once "TransportSpaceShip.php";
include_once "Captain.php";



$starfleet=new StarFleet;
$starfleet->attackFormation[]=new InterceptorSpaceShip(20000,false);
$starfleet->attackFormation[]=new LeviathanSpaceShip(25000,true);
$starfleet->attackFormation[]=new LeviathanSpaceShip(300000, true);
$starfleet->attackFormation[]=new TransportSpaceShip(45000, true);
$starfleet->attackFormation[]=new DreadnoughtSpaceShip(80000,true);
$starfleet->attackFormation[]=new RecreationSpaceShip(69000, false);


$starfleet->escortFormation[]=new InterceptorSpaceShip(200000, true);
$starfleet->escortFormation[]=new LeviathanSpaceShip(27000, true);
$starfleet->escortFormation[]=new LeviathanSpaceShip(38000, false);
$starfleet->escortFormation[]=new LeviathanSpaceShip(39000, false);
$starfleet->escortFormation[]=new DreadnoughtSpaceShip(84000, true);
$starfleet->escortFormation[]=new RecreationSpaceShip(67000, true);
$starfleet->escortFormation[]=new TransportSpaceShip(44000, true);
 
	$arr=$starfleet->formAttack();
		foreach($arr as $a){
			echo $a->callSign;
			echo "<br>";
			
		}

	echo "<br><br>";

	$arr2 =$starfleet->formEscort();
		foreach($arr2 as $a){
			echo $a->callSign;
			echo "<br>";

		}
 

 ?>