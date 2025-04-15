<?php
    /*$username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    //Database connection
    $conn = new mysqli('localhost','root','','test1');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username,password,email)values(?,?,?"){
            $stmt->bind_param("sss",$username,$password,$email);
            $stmt->execute();
            echo "registration Successfull...";
            $stmt->close();
            $conn->close();
        }
    }
    <?php*/
/*$user=filter_input(INPUT_POST,'user');
$pass=filter_input(INPUT_POST,'pass');*/
$user = $_POST['user'];
$pass= $_POST['pass'];
if(!empty($user))
{
    if(!empty($pass))
    {
        $host="localhost:3306";
        $un="root";
        $pa="";
        $db="test2";
        $con= new mysqli($host,$un,$pa,$db);
        if(mysqli_connect_error())
        {
            die('connect eroor ('.mysqli_connect_errno().')' .mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO login(username,password) values('$user','$pass')";

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
?>

