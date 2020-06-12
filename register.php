<!-- <?php include(registered.php);?> -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Signup Page</title>
  <!-- MDB icon -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylingform.css">
</head>
<body>

  <!-- Start your project here-->  
 <!-- Material form login -->
<!-- Material form register -->

 <div class="container">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="registered.php" method="post">

  

            <!-- E-mail -->
            <div class="md-form mt-0" >
                <input type="email" name="email" id="materialRegisterFormEmail" class="form-control" style="margin-top: 10px;">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="password1" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
            
            </div>
              <div class="md-form">
                <input type="password" name="password2" id="materialRegisterFormPassword2" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock2">
                <label for="materialRegisterFormPassword2">Password Again</label>
            
            </div>

            <div class="md-form">
                <input type="text" name="fname" id="materialRegisterFormFirstName" class="form-control">
                <label for="materialRegisterFormFirstName">Name</label>
            </div>

            <div class="md-form">
                <input type="number" name="phone" id="materialRegisterFormPhone" class="form-control">
                <label for="materialRegisterFormPhone">Phone number</label>
            </div>
            <div class="md-form">
                <input type="date" name="dob" id="date-picker-example" class="form-control datepicker">
                <label for="date-picker-example">Date of birth</label>
                 <div class="md-form">
                    <input type="text" name="house" id="materialRegisterFormHouse" class="form-control">
                    <label for="materialRegisterFormHouse">House number/name</label>
            </div>
            <div class="md-form">
                <input type="text" name="district" id="materialRegisterFormDistrict" class="form-control">
                <label for="materialRegisterFormDistrict">District</label>
            </div>
             <div class="md-form">
                <input type="text" name="state" id="materialRegisterFormState" class="form-control">
                <label for="materialRegisterFormState">State</label>
            </div>
             <div class="md-form">
                <input type="number" name="pin" id="materialRegisterForPincode" class="form-control">
                <label for="materialRegisterForPincode">Pincode</label>
            </div>


            <!-- Phone number -->
          
          

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>

            <!-- Social register -->
            

        </form>
        <!-- Form -->

    </div>
</div>
</div>
<!-- Material form register -->
    <!-- Form -->
<!-- Material form login -->
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
