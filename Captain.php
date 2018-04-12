<?php 

/**
* 
*/
class Captain
{
	
    private $experience;

	function __construct($experience)
	{
		
		$this->experience=$experience;
	}

	public function __get($property)  
    {  
      	if (property_exists($this, $property)) {  
        	return $this->$property;  
    	}  
    }
     
}




 ?>
