<?php
$user=filter_input(INPUT_POST,'user');
$pass=filter_input(INPUT_POST,'pass');
if(!empty($user))
{
    if(!empty($pass))
    {
        $host="localhost:3307";
        $un="root";
        $pa="";
        $db="sample";
        $con= new mysqli($host,$un,$pa,$db);
        if(mysqli_connect_error())
        {
            die('connect eroor ('.mysqli_connect_errno().')' .mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO sam(name,roll) values('$user','$pass')";

            if($con->query($sql))
            {
                echo"new row insertd";
            }
            else{
                echo"error".$sql . "<br>".$con->error;
            }
            $con->close();
        }
    }
    else{
        echo"password not empty";
        die();
    }
}
else{
    echo"user not empty";
    die();
}
?>