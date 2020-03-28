<?php 

// including the database connection
//include_once 'db.php';


// Inserting data into the database if submit button is clicked
/*if (isset($_POST['submit'])) {
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$email = $_POST['email'];
	$date_of_birth = $_POST['dob'];

	if (!empty($first_name && $last_name && $email && $date_of_birth)) {
		$insert_query = mysqli_query($con, "INSERT INTO users(f_name, l_name, email, dob) VALUES('$first_name', '$last_name', '$email', '$date_of_birth')");
		if ($insert_query > 0) {
			$msg = "Successfully Added to the Database";
		}else {
			$msg = "Submission Failed";
		}
	}
}*/


// update data if update button is clicked
/*if (isset($_POST['update'])) {
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $date_of_birth = $_POST['dob'];
  $hidden_id = $_POST['hidden_id'];

  if (!empty($first_name && $last_name && $email && $date_of_birth)) {
    
    $update_query = mysqli_query($con, "UPDATE users SET f_name ='$first_name', l_name ='$last_name', email ='$email', dob ='$date_of_birth' WHERE id ='$hidden_id'");
   
    if ($update_query > 0) {
     
      $msg = "Database record updated successfully";
    
     }else {
      $msg = "Update Failed";
    }
  }
}*/

 ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Apllication</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>


</head>
 
 <body>

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
             <p class="" style="margin-left: 360px; color: white; padding-top: 6px; font-size: 20px;"><?php if (isset($msg)) echo $msg; ?></p>
            </div>
            
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

          <div class="row"> 
            <div class="col-md-12">
                <h1 class="page-header text-center">
                    CRUD APPLICATION
                    <small>Create, Read, Update & Delete Database Records</small>
            </div>

           </div>
        

            <form class="form-horizontal" action="" method="POST" >    
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-2">
                        <input type="text" name="fname" class="form-control " placeholder="First Name" value="<?php if (isset($first_name)) echo $first_name;?>" auto="off">
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
                </div>
                <div class="form-group">
               <div class="col-md-8 col-lg-offset-2">
                <button class="btn btn-block btn-success btn-lg" name="submit" type="submit">Add Record<span class="glyphicon glyphicon-chevron-right"></span></button>
                </div>
               </div>
            </form>
           
            <hr>
       
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-responsive">
                <thead>
                    <tr class="success">
                        <th>S/N</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                	<?php
                	  /*$i = 0; 
                      $read_query = mysqli_query($con, "SELECT * FROM users");
                        while ($rows = mysqli_fetch_assoc($read_query)) { 
                        $i++; 	?>
               
                      <tr>
                      	<td><?php echo $i; ?></td>
                      	<td><?php echo $rows['f_name']."&nbsp;".$rows['l_name']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['dob']; ?></td>
                        <td>
                            <a href="update.php?update=<?php echo $rows['id'];?>" class="btn btn-primary">Update</a>
                            &nbsp&nbsp
			                <a class="delete text-danger" data-id="<?php echo $rows['id']; ?>" href="javascript:void(0)">
			                <i class="glyphicon glyphicon-trash"></i>
			                </a>
                        </td>
                       </tr>


                    <?php }*/    ?>

                 
                </tbody>
            </table>
        </div>

    </div>

</body>

<script src="js/myscript.js"></script>

</html>
