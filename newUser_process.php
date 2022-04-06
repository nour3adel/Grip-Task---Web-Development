<?php 
include "connect.php";
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset ($_POST['submit'])) {
        $conn = mysqli_connect($servername,$username,$password ,$dbname) or die("connection Failed:" .mysqli_connect_error());
         if(isset($_POST['NAME']) && isset($_POST['Email']) && isset($_POST['Balance']) ){
            
            $name= $_POST['NAME'];
            $email=$_POST['Email'];
            $balance= $_POST['Balance'];
            
            $sql="INSERT INTO `all_users` (`NAME`, `Email`, `Balance`) VALUES ('$name' , '$email', '$balance') ";

            $query = mysqli_query($conn , $sql);
            if($query){
                echo '<script>alert("Entry Successful!"); window.location.href=" users.php";</script>';
            }
            else{
                echo '<script>alert("Error Occured !!"); window.location.href=" newUsers.php";</script>';
            }
         } 
} 

?>