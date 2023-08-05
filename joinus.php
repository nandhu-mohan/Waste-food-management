<?php
    session_start();
?>
<?php
    $link = new mysqli("localhost","root","","eg");
    if(!$link)
    {
       die('could not connect: ' . $link->connect_error());
    }

    if(isset($_POST['submit']))
    {   
        $a=$_POST['fname'];
        $b=$_POST['lname'];
        $c=$_POST['gender'];
        $d=$_POST['email'];
        $e=$_POST['address'];
        $f=$_POST['city'];
        $g=$_POST['state'];
        $h=$_POST['zip'];
        $i=$_POST['mobile'];
        
        $sql = "INSERT INTO `volunteer` (`fname`,`lname`,`gender`,`email`,`address`,`city`,`state`,`zip`,`mobile`) 
        VALUES ('$a', '$b', '$c', '$d','$e', '$f', '$g','$h','$i')" ;
        
    if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
    {         
        header("Location:index.html");
    }
    else
    {
        header("Location:joinus.html");
    }
}
    mysqli_close($link);
?>
