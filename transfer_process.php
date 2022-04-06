<?php

include "connect.php";

$Sender_Name = $_POST['sender'];
$Receiver_Name = $_POST['receiver'];
$Amount = $_POST['amount'];




$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT Balance FROM all_users WHERE name='$Sender_Name'";
$result = $conn->query($sql);
$flag = false;

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($Amount > $row["Balance"]) {
            echo '<script>alert("Transaction Failed , Insuffiecent Balance !!"); window.location.href=" transfer.php";</script>';
        }
        elseif(($Sender_Name == $Receiver_Name)){
            echo '<script>alert("Transaction Failed ,  Receiver Name Equal To The Sender!!"); window.location.href=" transfer.php";</script>';
        } else {
            $sql = "UPDATE `all_users` SET Balance=(Balance-$Amount) WHERE Name='$Sender_Name'";


            if ($conn->query($sql) === TRUE) {
                $flag = true;
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
} else {
    echo "0 results";
}

if ($flag == true) {
    $sql = "UPDATE `all_users` SET Balance=(Balance+$Amount) WHERE name='$Receiver_Name'";

    if ($conn->query($sql) === TRUE) {
        $flag = true;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
if ($flag == true) {
    $sql = "insert into transaction_history(SNo, Sender_Name, Receiver_name, Amount, Date) values(0, '$Sender_Name', '$Receiver_Name', $Amount, Now())";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if ($flag == true) {
    echo '<script>alert("Successful Transaction!"); window.location.href=" transfer.php";</script>';
} else {
    echo '<script>alert("Transaction Failed , Insuffiecent Balance!!"); window.location.href=" transfer.php";</script>';
}

    
    
  
   
     
  
