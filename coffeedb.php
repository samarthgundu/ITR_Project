Coffeedb.php
<?php
$servername = 'localhost';
$username = 'root'; 
$password = ''; 

$conn = new mysqli('localhost', 'root', '','coffeedb');
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// Select the database
$dbname = "coffeedb";
$conn->select_db($dbname);

// Assuming your form data is being submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $coffee = $_POST['coffee']; 

    // SQL to insert data into the table
    $sql = "INSERT INTO coffee (name, email, number, coffee) VALUES ('$name', '$email', '$number', '$coffee')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "Order Booked successfully";
        
    }else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
