<?php 

// including the database connection
include_once 'db.php';


// show users details if update button is clicked
/*if (isset($_GET['update'])) {
  $update_id = $_GET['update'];
  $user_data = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id='$update_id'"));
  $first_name = $user_data['f_name'];
  $last_name = $user_data['l_name'];
  $email = $user_data['email'];
  $dob = $user_data['dob'];
}*/


 ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Application</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>



</head>
 
 <body>

  <style type="text/css">
        body{
              padding-top: 30px;
        }
  </style>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <p class="" style="margin-left: 350px; color: white; padding-top: 6px;"><?php if (isset($msg)) echo $msg; ?></p>
            </div>
            
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

          <div class="row">  <!-- Blog Entries Column -->
            <div class="col-md-12">
                <h1 class="page-header text-center">
                    CRUD APPLICATION
                    <small>Update Database Records</small>
            </div>

           </div>
        

            <form class="form-horizontal" action="index.php" method="POST" >    
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-2">
                        <input type="text" name="fname" class="form-control " placeholder="First Name" value="<?php if (isset($first_name)) echo $first_name;?>">
                    </div>

                    <div class="col-md-4">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php if (isset($last_name)) echo $last_name;?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-4 col-md-offset-2">
                        <input type="email" name="email" class="form-control " placeholder="Email Address" value="<?php if (isset($email)) echo $email;?>">
                    </div>

                    <div class="col-md-4">
                        <input type="date" name="dob" class="form-control" placeholder="Date of Birth" value="<?php if (isset($dob)) echo $dob;?>">
                    </div>

                    <input type="hidden" name="hidden_id" value="<?php if (isset($_GET['update'])) echo $_GET['update']; ?>">

                </div>
                <div class="form-group">
               <div class="col-md-8 col-lg-offset-2">
                <button class="btn btn-block btn-info btn-lg" name="update" type="submit">Update Record<span class="glyphicon glyphicon-chevron-right"></span></button>
                <hr class="text-danger">
                </div>
               </div>
            </form>
           
            <hr>
       


    </div>

</body>

</html>