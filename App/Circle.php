<?php
namespace App;

class Circle extends Shape {

    const SHAPE_TYPE = 3;
    protected  $radius;
    
    public function __construct(float $radius) 
    {
        $length = pow($radius,2);
        parent::__construct($length, $length);
   
        $this->radius = $radius;
    }

    public function calculateArea() : float {
        return pow($this->radius, 2) * pi();
    }

    public function getProperties() 
    {
        return json_encode(
            [
                "name" => $this->getName(),
                "radius" => $this->radius,
                "id" => $this->getId(),
            ]
        );
    }
}

?>