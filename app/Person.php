<?php  

namespace App;

class Person 
{	
	protected $name = "mamba";

	public function __construct( $name ) 
	{
		$this->name = $name;
	}

    public function getName()
    {
        return $this->name;
    }


};