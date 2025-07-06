<?php
include '_dbconnect.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['userId'];
    
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $password = $_POST["password"];
	$view = $_POST['view'];
	

    // Check user password is match or not
    $passSql = "SELECT * FROM users WHERE id='$userId'"; 
    $passResult = mysqli_query($conn, $passSql);
    $passRow=mysqli_fetch_assoc($passResult);
    
    if (password_verify($password, $passRow['password'])){
        $sql = "INSERT INTO `feedback` (`userId`, `email`, `phoneNo`, `feedback`, `message`, `time`) VALUES ('$userId', '$email', '$phone', '$view', '$message', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $feedbackId = $conn->insert_id;
        echo '<script>alert("Thanks for feedback us. Your feedback id is ' .$feedbackId. '. We will feedback you very soon.");
                    window.location.href="http://localhost/pizz/index.php";  
                    </script>';
                    exit();
    }
    else{
        echo "<script>alert('Password incorrect!!');
                window.history.back(1);
                </script>";
    }
    
}
?>