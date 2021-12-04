<?php

//private access modifiers for a variable

class Customer
{
	private $name;

    public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		echo $this->name;
    
	}
}
$customer = new Customer();
$customer -> setName("Giri \n");
$customer->getName();

/*
//To access the private property we used 2 functions setName(To update) and GetName(To print)

                           echo"_________________________________________";

//protected access modifiers for a variable

class pro {
    protected $x = 500;
    protected $y = 500;
             
    function sub()
    {
        echo $sub=$this->x-$this->y."\n";
    }    
}
 
class child extends pro {
    function mul() 
    {
        echo $mul=$this->x*$this->y;
    }
}
 
$obj= new child;
$obj->sub();
$obj->mul();
*/
?>