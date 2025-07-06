<?php
    include '_dbconnect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['createTime'])) {
        $Time = $_POST["Time"];

        $sql = "INSERT INTO `pickuptime` ( `Time` ) VALUES ( '$Time' )";   
        $result = mysqli_query($conn, $sql);
        $TimeId = $conn->insert_id;
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

if(isset($_POST['removeTime'])) {
    $TimeId = $_POST["TimeId"];
    
    $sql = "DELETE FROM `pickuptime` WHERE  `TimeId`='$TimeId'";   
    $result = mysqli_query($conn, $sql);
    if ($result){
        if (file_exists($filename)) {
            unlink($filename);
        }
        echo "<script>alert('Removed');
            window.location=document.referrer;
            </script>";
    }
    else {
        echo "<script>alert('failed');
            window.location=document.referrer;
            </script>";
    }
}
if(isset($_POST['updateTime'])) {
    $TimeId = $_POST["TimeId"];
    $Time = $_POST["Time"];

    $sql = "UPDATE `pickuptime` SET `Time`='$Time' WHERE  `TimeId`='$TimeId'";   
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "<script>alert('update');
            window.location=document.referrer;
            </script>";
    }
    else {
        echo "<script>alert('failed');
            window.location=document.referrer;
            </script>";
    }
}
?>