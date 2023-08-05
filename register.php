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
        $j=$_POST['password'];
        $k=$_POST['cpassword'];

        $sql = "INSERT INTO `donar` (`fname`,`lname`,`gender`,`email`,`address`,`city`,`state`,`zip`,`mobile`,`password`,`cpassword`,`ftype`,`location`,`status`) 
        VALUES ('$a', '$b', '$c', '$d','$e', '$f', '$g','$h','$i','$j','$k', 'NULL' , 'NULL' , 'Not Accepted' )" ;
        
        if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
        {
          if($j == $k )
          {           
              header("Location:login.html");
          }
          else
          {
              header("Location:register.php");
          }
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
                        <form action="register.php" method="POST">
                            
                            <div class="form-group row">
                                <label for="fname" class="col-md-4 col-form-label text-md-right">First Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter your First Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="lname" class="form-control" name="lname" placeholder="Enter your Last Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="optradio" name="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="gender" value="Male"> Male</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="gender" value="Female"> Female</label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="gender" value="Others"> Others</label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" class="form-control" name="email" placeholder="Enter Your Email Address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="address" class="form-control" name="address" placeholder="Enter your Address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                <div class="col-md-6">
                                    <input type="text" id="city" class="form-control" name="city" placeholder="City" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
                                <div class="col-md-6">
                                    <input type="text" id="state" class="form-control" name="state" placeholder="State" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip" class="col-md-4 col-form-label text-md-right">Zip Code</label>
                                <div class="col-md-6">
                                    <input type="text" id="zip" class="form-control" name="zip" placeholder="Enter Zip Code"  required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile Number</label>
                                <div class="col-md-6">
                                    <input type="text" id="mobile" class="form-control" name="mobile" placeholder="Enter Mobile Number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password" minlength="7" maxlength="15" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Enter Confirm Password" minlength="7" maxlength="15" required>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                    </div>
                    </form>
                    <script>
                        $(function() {
                            $("#password").passwordStrength();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
</body>
</html>