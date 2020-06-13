<?php
    session_start();

    header('location: index.php');

    $con = mysqli_connect('localhost','root','','registration');



    // mysqli_select_db($con, 'shareabed');

    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $password = $_POST['password2'];
    $name = $_POST['fname'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $house = $_POST['house'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    $reg =  "INSERT INTO `registration`.`users` (email,password1,name1,phonenumber,dob,house,district,state1,pincode) VALUES ('$email','$pass1','$name','$phone','$dob','$house','$district','$state','$pin')";

    mysqli_query($con, $reg);
    echo "Registration Successfull";

    $bedDon = $_POST['bedDon']

    $reg1=  "INSERT INTO `registration`.`users` (bed) VALUES ('$bedDon')";
    mysqli_query($con, $reg1);





?>




<!DOCTYPE html>
<html lang="en">

<script src="https://use.fontawesome.com/07bef74e77.js"></script>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@600&family=Piedra&display=swap" rel="stylesheet">
  <title>Home Page</title>

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
<body style="background: #A7806A;">

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">

  <a class="navbar-brand" href="#">  <i class="fa fa-bed" aria-hidden="true"></i>Share A Bed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
         <i class="fa fa-money" aria-hidden="true"></i>Donors </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-history"  aria-hidden="true"></i> History </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">
       <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>Logout </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<div class="d-flex justify-content-center bed">
   <div class="btn-group" role="group" >

  <!-- Button trigger modal -->
<button type="button" class="btn  btn-grey" data-toggle="modal" data-target="#basicExampleModal">
 Donate Bed
</button>
<button type="button" class="btn  btn-grey" data-toggle="modal" data-target="#basicExampleModal1">
 Donate Rooms
</button>

<!-- Modal for bed -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Donate Beds</h5>
        <div class="img">
            <img src="https://img.icons8.com/offices/30/000000/hospital-bed.png" />
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p >Your donation will save someones life</p>
       </div>


<div class="modal-footer">
    <div class="flex">

        <div class="mainimg">
        <img src="img/splash.jpg" alt="image">

        </div>

          <div >
                <button id="subtract" >
                <img class="minusimg"   src="img/minus.png" alt="minus-button" />
                </button>

                <input name = "bedDon" type="number" value="1">

                <button id="add">
                <img class="plusimg"src="img/icons8-plus.svg" alt="plus-button" />
                </button>

          </div>
      </div>

        <form action="post">
        <button type="button" class="btn btn-primary">Make Donation</button>
        </form>

 <!-- pop up after donation-->
        <?php
        if($insert == true){
        echo "<p class='submitMSG'>Thanks for your donation.Medical authority will contact you soon</p>";
        }
       ?>

      </div>
    </div>
  </div>
</div>

<!-- Modal for room-->
<div class="modal fade" id="basicExampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel1">Donate a Room</h5>
        <div class="img">
            <img src="img/ward.jpg"/>
        </div>



        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> We Appritiate your Donation</p>
      </div>

      <div class="modal-footer">
      <div class="flex">

                          <div class="mainimg">
                          <img src="img/splash.jpg" alt="image">

                          </div>

                            <div >
                                  <button id="minus" >
                                  <img class="minusimg"  src="img/minus.png" alt="minus-button" />
                                  </button>

                                  <input type="number" value="1">

                                  <button id="sum">
                                  <img class="plusimg" src="img/icons8-plus.svg" alt="plus-button" />
                                  </button>

                            </div>
        </div>












        <button type="button" class="btn btn-primary">Make Donation</button>
      </div>
    </div>
  </div>
</div>

</div>


</div>
<div  class="d-flex justify-content-center bed">
<!-- maps -->
<iframe src="location.php" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


          <div class="newcont">
              <div class="row">
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>

                    </div>
                  </nav>
                  <div class="tab-content py-6 px-6 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>


                  </div>

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
  <script src="js/script.js"></script>
  <script src="js/script2.js"></script>


</body>
</html>
