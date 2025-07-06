<?php
    include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['inquiryreply'])) {
        $inquiryId = $_POST['inquiryId'];
        $replymessage = $_POST['replymessage'];
        $userId = $_POST['userId'];
        
        $sql = "INSERT INTO `inquiryreply` (`inquiryId`, `userId`, `replymessage`, `datetime`) VALUES ('$inquiryId', '$userId', '$replymessage', current_timestamp())";   
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "<script>alert('success');
                    window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                    window.location=document.referrer;
                </script>";
        }
    }
}
?>