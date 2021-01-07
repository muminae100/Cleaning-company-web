<?php
    $name="" $password=""
    $nameErr="" $passwordErr=""

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr="Username is required";
        }
        else{
            $username=test_input($_POST["name"]);
        }
        if(empty($_POST["password"])){
            $passwordErr="Password is required";
        }
        else{
            $password=test_input($_POST["password"]);
        }
        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspe
            cialchars($data);
            return $data;  
        }

    }
    $servername="localhost";
    $username="username";
    $password="password";

    try {
        $conn=new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_Exception);
        echo"connected succesfully";
    } catch (PDOException $e) {
        echo "connection failed:".$e->getMessage();
    }
?>

<?php
include_once 'header.php';
?>
<div id="id01" class="modal">
        <form class="modal-content animate" action="login.php" method="POST">
            <div class="imgcontainer"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close modal">&times;</span>
                <img src="img.avatar.png" class="avatar"></div>
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" name="Uname" placeholder="Enter your name..." required>
                <label> <b>Password</b> </label>
                <input type="password" placeholder="Enter your password..." name="psw" required>
                <button class="submit" type="submit">Login</button>
                <input type="checkbox" checked>Remember me
            </div>
            <div class="container" style="background-color: f1f1f1;">
                 <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                 <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        </div

<?php
    include_once 'footer.php';
?>       