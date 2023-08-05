<?php
    session_start();
?>
<?php
        $link = new mysqli("localhost","root","","eg");
        if(!$link)
        {
           die('could not connect: ' . $link->connect_error());
        }
        if(isset($_POST['email']))
        {    
        $a=$_POST['email'];
        $b=$_POST['password'];
        $_SESSION["email"] = $a;
		$sql="SELECT * FROM `donar` WHERE  `email`='$a' AND `password`='$b' limit 1";
		
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            header("Location:next1.php");
        }
        else
        {
            header("Location:login.php");
        }
    }
    mysqli_close($link);
     ?>
