<?php
include 'validate.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Car Rental Form</title>
    <link rel = "stylesheet" href="mystyle.css">
</head>
<body>   
<h2>Car Rental Booking Form</h2>
    <form action="CreateAccount.php" method="post">        
    <div>
        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" required>
        <small>Format: 123456789</small><br><br>

        <label for="car">Select Car:</label><br>
        <select id="car" name="car" required>
            <option value="">-- Select --</option>
            <option value="Toyota">Toyota</option>
            <option value="suv">SUV</option>
            <option value="Mercedes">Mercedes</option>
            <option value="RollsRoyce">Rolls-Royce</option>
        </select><br><br>

        <label for="date">Rental Date:</label><br>
        <input type="date" id="date" name="date" required><br><br>
        </div> 
        <legend><h1>Create Password</h1></legend>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required ><br><br>
           
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required ></td>        
         </div>
        <button>
        <input type="submit" value="Book Now">
        </button>
    </form>
</body>
</html>
