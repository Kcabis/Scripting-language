<?php
class Calculator {
    // Magic method to handle overloading
    public function __call($name, $arguments) {
        if ($name == 'add') {
            $count = count($arguments);

            if ($count == 2) {
                // Add two numbers
                return $arguments[0] + $arguments[1];
            } elseif ($count == 3) {
                // Add three numbers
                return $arguments[0] + $arguments[1] + $arguments[2];
            } else {
                throw new Exception("Invalid number of arguments for method 'add'");
            }
        } else {
            throw new Exception("Method '$name' not defined");
        }
    }
}

// Create an instance of the Calculator class
$calculator = new Calculator();

try {
    // Call 'add' with two arguments
    echo "Adding two numbers (10 + 20): " . $calculator->add(10, 20) . "<br>";

    // Call 'add' with three arguments
    echo "Adding three numbers (10 + 20 + 30): " . $calculator->add(10, 20, 30) . "<br>";

    // Call 'add' with an invalid number of arguments
    echo "Trying to add one number: ";
    echo $calculator->add(10); // This will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
