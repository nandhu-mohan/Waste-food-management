<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
.card{
    width: 80%;
}
</style>
</head>
<body>
    <br>
    <br>
<center>
        <h1>DONOR DETAILS</h1>
    </center>
<?php
    $link = new mysqli("localhost","root","","eg");
    
        $sql=" SELECT `location`,`fname`,`lname`,`mobile`,`status`,`email`,`ftype` FROM `donar`";

        $retval = mysqli_query( $link, $sql );

     while($row = mysqli_fetch_array($retval)) {
?>
    
    <center>
    <form action="data.php" method="post">
    <div class="card">
        <div class="card-header">
        <?php 
        $ip = $row['email'];
        $user = $ip ; 
        $pp = $row['status'];        
        ?>
            <h4>Location : <?php echo $row['location'] ?></h4>
        </div>
        <div class="card-body">
            <h5 class="card-title"> Mobile Number : <?php echo $row['mobile'] ?> </h5>
            <p class="card-text"> 
             First Name    :<?php echo $row['fname'] ?> <br>
             Last Name     :<?php echo $row['lname'] ?><br>
             Email Address : <?php echo $user; ?><br> 
             Food Type     : <?php echo $row['ftype'] ?><br>
             </p>
             <h5>Status</h5>
             <?php if($pp == 'Not Accepted' || $pp == 'NULL') {?>
               <h4 style="color:red;"> <?php echo $pp; ?> </h4>
             <?php } else { ?>
                <h4 style=" color:green; "><?php echo $pp ;?> </h4>
             <?php } ?>
             
            <a href= <?php echo "qw.php?user=".$user ?> class="btn btn-primary">Details</a>
        </div>
    </div>
    </form><br>
    </center>
     <?php } ?>
</body>
</html>
