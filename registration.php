<?php
if (isset($_POST['submit']) )
{
    header('location:index.php');

     $con = mysqli_connect("localhost","root","");
     mysqli_select_db($con, "meme-hut");
     if(mysqli_error($con)){
         die("connection to this database failed due to".mysqli_connect_error());
     }

     
     $s="select * from userregistration where username='$_POST[username]'";
     $result= mysqli_query($con,$s);
     $num = mysqli_num_rows($result);

if( $num == 1 ){
    echo "Username already taken";
}
else{
    $sql="INSERT INTO userregistration ( name, email, username, password) VALUES ( '$_POST[name]', '$_POST[email]', '$_POST[username]', '$_POST[password]')";
    mysqli_query($con, $sql);
    echo"Registration successful";
}

     mysqli_close($con);
}

?>