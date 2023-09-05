<?php
include 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $work = $_POST["work"];

   
    $sql = "INSERT INTO users (name, email, number, work) VALUES (?, ?, ?, ?)";

    
    $stmt = $conn->prepare($sql);

  
    $stmt->bind_param("ssss", $name, $email, $number, $work);

    if ($stmt->execute()) {
        
        header("Location: index.php");

    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
}

$conn->close();
?>
