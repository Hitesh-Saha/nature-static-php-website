<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con,'staticwebsite');

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="INSERT INTO userinfo(name,email,mobile,comment) VALUES ('$name','$email','$mobile','$comment')";
mysqli_query($con,$query);

header('location:index.php');
?>