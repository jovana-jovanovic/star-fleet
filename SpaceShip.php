<?php 

/**
* 
*/
abstract class SpaceShip
{
	private $id;
    private $strength;
    private $callSign;
    private $captain;

	function __construct($strength, $experience)
	{
		$this->id=uniqid();
		$this->strength=$strength;
		$this->captain=new Captain($experience);

		if($this->captain->experience){
			$this->callSign=get_class($this)." ".$this->id;
		}

		else{
		$this->callSign=get_class($this)." ".$this->id." "."Junior";
		}
	
	}

	public function __get($property)  
    {  
      	if (property_exists($this, $property)) {  
        	return $this->$property;  
      	}		  
   	}  
}




 ?>