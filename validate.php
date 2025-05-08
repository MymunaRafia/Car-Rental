<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Sanitize and validate input
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $car = $_POST['car'];
    $date = $_POST['date'];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (!preg_match('/^[0-9]{9}$/', $phone)) {
        $errors[] = "Phone must be 9 digits.";
    }

    if (empty($car)) {
        $errors[] = "Please select a car.";
    }
if (empty($date) || $date < date("Y-m-d")) {
    $errors[] = "Please select a valid rental date.";
}
?>
