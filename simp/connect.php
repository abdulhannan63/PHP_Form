<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) ){
    $conn = mysqli_connect('localhost','root','','test1') or die('Connection failed');
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO `user` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";

        $query = mysqli_query($conn,$sql);
        if($query){
            echo "Data inserted successfully";
        }else{
            echo "Data not inserted";
        }
    }
}
?>