<?php
// Base class: Shape
abstract class Shape {
    // Abstract method to calculate the area
    abstract public function calculateArea();
}

// Derived class: Circle
class Circle extends Shape {
    private $radius;

    // Constructor to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Overridden method to calculate the area of a circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Derived class: Rectangle
class Rectangle extends Shape {
    private $length;
    private $width;

    // Constructor to initialize the dimensions
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Overridden method to calculate the area of a rectangle
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Derived class: Triangle
class Triangle extends Shape {
    private $base;
    private $height;

    // Constructor to initialize the dimensions
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Overridden method to calculate the area of a triangle
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Polymorphic behavior
$shapes = [
    new Circle(5),        // Circle with radius 5
    new Rectangle(10, 7), // Rectangle with length 10 and width 7
    new Triangle(6, 4)    // Triangle with base 6 and height 4
];

echo "<h1>Area of Different Shapes</h1>";
foreach ($shapes as $shape) {
    echo "The area is: " . number_format($shape->calculateArea(), 2) . "<br>";
}
?>
