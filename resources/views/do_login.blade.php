<?php

include 'login_conn.php';
                     // here user_name and pass_word is input name
$use_rname = $_REQUEST['user_name'];
$pas_sword = $_REQUEST['pass_word'];

                     //here username is db field name ,$user_name is upper given variable name
$sql ="SELECT * FROM login WHERE username='$use_rname' AND password='$pas_sword'";
                     // here password is db field name, $Pas_sword is upper given variable name

$query = mysqli_query($con,$sql);
$check = mysqli_fetch_array($query);

if(isset($check)){
   //echo "success";
   header('location:dashboard.php');

}
else{
    echo "Invalid Username or Password";
}

//close connection
mysqli_close($con);
?>