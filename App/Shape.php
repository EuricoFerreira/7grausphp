<?php 

namespace App;

abstract class Shape {
    public $name;
    protected $width, $length;
    private $id;

    const SHAPE_TYPE = 1;
    
    public function __construct( float $length = 0.0, float $width = 0.0)
    {
        $this->width = $width;
        $this->length = $length;
        $this->id = uniqid();
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function calculateArea() : float {
        return $this->width * $this->length;
    }

    public static function shapeType() {
        return self::SHAPE_TYPE;
    }

    public function getId() {
        return $this->id;
    }

    public function getProperties() {
          return json_encode(
              [
                'name' => $this->getName(),
                'width' => $this->width,
                'length' => $this->length,
                'id' => $this->id
              ]
        );
    }   
}

?>