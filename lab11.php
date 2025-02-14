<?php
// Base class: Person
class Person {
    protected $name;
    protected $address;

    // Constructor for the base class
    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    // Display basic information
    public function displayBasicInfo() {
        echo "Name: {$this->name}, Address: {$this->address}";
    }
}

// Derived class: Student
class Student extends Person {
    private $salary;
    private $post;

    // Constructor for the derived class
    public function __construct($name, $address, $salary, $post) {
        // Call the parent constructor
        parent::__construct($name, $address);
        $this->salary = $salary;
        $this->post = $post;
    }

    // Get student details as an array
    public function getDetails() {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'salary' => $this->salary,
            'post' => $this->post
        ];
    }
}

// Array to store students
$students = [
    new Student("Abiskar", "123 Maple St", 5000, "Manager"),
    new Student("Pradip", "456 Oak St", 4500, "Assistant Manager"),
    new Student("Cijan", "789 Pine St", 4000, "Supervisor"),
    new Student("Deepika", "101 Elm St", 4200, "Analyst"),
    new Student("Elijon", "202 Birch St", 4100, "Clerk"),
    new Student("Finley", "303 Cedar St", 4600, "Lead Developer"),
    new Student("Ghost rider", "404 Walnut St", 4800, "Designer"),
    new Student("Hulk", "505 Chestnut St", 4300, "Engineer"),
    new Student("Iron man", "606 Spruce St", 4700, "Consultant"),
    new Student("John cena", "707 Willow St", 4900, "Administrator")
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        td {
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Student Information</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Post</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): 
                $details = $student->getDetails(); ?>
                <tr>
                    <td><?= htmlspecialchars($details['name']) ?></td>
                    <td><?= htmlspecialchars($details['address']) ?></td>
                    <td>$<?= htmlspecialchars(number_format($details['salary'], 2)) ?></td>
                    <td><?= htmlspecialchars($details['post']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
