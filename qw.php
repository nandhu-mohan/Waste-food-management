<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/reg.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="jquery.passwordstrength.js"></script>
</head>
<body>
<?php
    $link = new mysqli("localhost","root","","eg");
    if(!$link)
    {
       die('could not connect: ' . $link->connect_error());
    }
    $user=$_GET['user'];
    $sql = " UPDATE `donar` SET  `status`='Accepted' WHERE `email`='$user' ";
    if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
        {            
            echo "success";         
        }
       else{
           echo "failed";
       }
    if(isset($_POST['submit']))
    {   
        $a=$_POST['name'];
        $b=$_POST['orphan'];
        $d=$_POST['mobile'];
        $e=$_POST['address'];

        $sql = "INSERT INTO `receive` (`name`,`orphan`,`mobile`,`address`) VALUES ('$a', '$b', '$c', '$d')" ;
        
          if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
          {           
              header("Location:fcomplete.php");
          }
          else
          {
              header("Location:qw.php");
          }


    }
    

    mysqli_close($link);
?>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header"><h4>REGISTRATION</h4></div></center>
                    <div class="card-body">
                        <form action="qw.php" method="POST">
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter your First Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="optradio" name="orphan" class="col-md-4 col-form-label text-md-right">For Orphanage ?</label>
                                <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="orphan" value="Yes">Yes</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="orphan" value="Female">No </label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile Number</label>
                                <div class="col-md-6">
                                    <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Enter Mobile Number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="address" class="form-control" name="address" placeholder="Enter your Address" required>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    SUBMIT
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
</body>
</html>