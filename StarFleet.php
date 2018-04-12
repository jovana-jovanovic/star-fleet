<?php 

/**
* 
*/
class StarFleet
{
	private $data = array('attackFormation','escortFormation');
	
	

	 public function __set($name, $value)
    {
       
        $this->data[$name][] = $value;
    }
  
    public function formAttack(){
   
        $mil=array();
        $civ=array();

        foreach($this->attackFormation as $ship){
	       $type=(new ReflectionClass($ship))->getParentClass()->getName();
	            if($type=="MilitarySpaceShip")
		          $mil[]=$ship;
	
                elseif($type=="CivilianSpaceShip")
	              $civ[]=$ship;
	
            }

        function cmp($a, $b)
        {
	       if ($a->strength == $b->strength) {
                  return 0;
                }

           return ($a->strength > $b->strength) ? -1 : 1;
	
        }


        usort($mil, "cmp");
        usort($civ, "cmp");
        $arr=array_merge($mil,$civ); 
  
        return $arr;

    }


     public function formEscort(){

        $mil=array();
        $civ=array();

        foreach($this->escortFormation as $ship){
	       $type=(new ReflectionClass($ship))->getParentClass()->getName();
	            if($type=="MilitarySpaceShip")
		          $mil[]=$ship;
	
                elseif($type=="CivilianSpaceShip")
	               $civ[]=$ship;

            }

        $number=count($mil);
            if($number &1){
                array_splice( $mil, ($number+1)/2, 0, $civ );
            }
            else{
     	        array_splice( $mil, $number/2, 0, $civ );
            }


            return $mil;
        }

}




 ?>