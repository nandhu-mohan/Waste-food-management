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
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  width: 95%;
}
th, td {
  padding: 5px;
  text-align: left;    
}

    </style>
</head>
<body>
<?php

$link = new mysqli("localhost","root","","eg");
       
        $ss=$_SESSION["email"];
       $sql = "SELECT `fname`,`lname`,`gender`,`email`,`address`,`city`,`state`,`zip`,`mobile` FROM `donar` WHERE `email`='$ss' ";
       $retval = mysqli_query( $link, $sql );
     
     while($row = mysqli_fetch_array($retval)) {
      $fg = $row['email']; 
      $_SESSION["email"] = $fg;
	
?>
<br>
<center><h2 style="font-family:Times New Roman">DETAILS</h2></center><br>
<center>
    <table class="tg" style="table-layout:fixed; width:80%;">
        <thead>              
       <tr>
         <td style="font-weight: bold;text-align: center">DESCRIPTION</td>
         <td style="font-weight: bold ;text-align: center" colspan="2">DETAILS</td>
       </tr>
       </thead>
       <tbody>
       <tr>
         <td style="font-weight: bold">FIRST NAME<br></td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['fname'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">LAST NAME</td>
         <td style="font-size:18px"colspan="2"> <?php echo $row['lname'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">GENDER</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['gender'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">EMAIL ADDRESS</td>
         <td  style="font-size:18px"colspan="2"><?php echo $fg ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">ADDRESS</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['address'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">CITY</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['city'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">STATE</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['state'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">ZIP CODE</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['zip'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">MOBILE NUMBER</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['mobile'] ?> </td>
       </tr>
       
       <?php 
    }
?>
</tbody>
</table><br>
</center>
<center><button onclick="location.href = 'donate.php';" id="button1" class="btn btn-outline-primary btn-lg" >DONATE</button></center>
</body>
</html>