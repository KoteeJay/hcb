<?php  
require "connection.php";
include "../inc/process.php";
?>
 <?php
        
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>OnePage</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
   

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <!-- Template Main CSS File -->
    <link href="../assets/css/signup.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

</head>


<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="../index.html">HCB</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="../index.html">About</a></li>
                    <li><a class="nav-link scrollto" href="../index.html">Services</a></li>
                    <li><a class="nav-link scrollto" href="../index.html">Contact</a></li>
                    
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <section>
    <div class="container">
       
    <div class="title ">
        <h3>Sign Up</h3>
        <p>Fill in your details</p>
        </div>
        <div class="formHolder ">
            <div class="parent">
                <form action="" method="POST" class="form">
                <label>
                    <input type="text" required name="name" placeholder="Enter Full Name" value="">
                    <p style="color: red; font-size: 14px;"></p>
                </label>
                
                <label for="">
                    <input type="tel" name="phone" id="" placeholder="Phone number" value="" class="right" required>
                    <p style="color: red; font-size: 14px;"></p>
                </label>
            
                <label for="">
                    <input type="email" required name="email" id="" placeholder="Email Address" value="">
                    <p style="color: red; font-size: 14px;"></p>
                </label>
            
                <label for=""> 
                    <select id="" required class="right" name="gender">
                        <option style="font-size: 10px;">Select Gender</option>
                        <option value="Male">Male</option><option value="Female">Female</option>
                    </select>
                    <p style="color: red; font-size: 14px;"></p>
                </label>
            
                <label for="">
                    <select id="" name="age" required>
                        <option style="font-size: 10px;">Select Age Range</option>
                        <option value="18 - 25">18 - 25</option>
                        <option value="26 - 30">26 - 30</option>
                        <option value="31 - 35">31 - 35</option>
                    </select>
                    <p style="color: red; font-size: 14px;"></p>
                </label>
                
                <label for="" > 
                    <select id="" class="right" name="package" required>
                        <option>Preferred Package</option>
                        <option value="Product Design">Product Design</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                        <option value="Data Analysis">Data Analysis</option>
                        <option value="Web Development (Frontend)">Web Development (Frontend)</option>
                        <option value="Graphics Design">Graphics Design</option>
                    </select>
                        <p style="color: red; font-size: 14px;"></p>
                </label>
                                
                <label > 
                <p>Select State</p>
                <select name="state" required>
                    <option value="ABIA">Akwa Ibom</option>
                </select>
                <p style="color: red; font-size: 14px;"></p>
                </label>
                
                <label for="" class="right">
                    <p>LGA</p>
                    <select name="lga" required>
                    <option value="AKWA IBOM">Nsit Ubium</option>
                    </select>

                    <p style="color: red; font-size: 14px;"></p>
                </label>
                
                <label for=""> 
                <p>Available for 3 weeks?</p>
                <select id="" name="availability" required>
                    <option>physical availability</option><option value="physical-available">yes</option><option value="physical-unavailable">No</option>
                </select>
                <p style="color: red; font-size: 14px;"></p>
                </label>
                
                <label for="" class="msg" >
                    <p>What is your message to the governor? (optional)</p>
                    <textarea type="text" name="message" id="" placeholder="Message" class="msg" required></textarea>
                </label>
                <?php
                if (isset($error)) {
                ?>
                    <div class="alert alert-danger">
                        <strong> <?php echo $error; ?> </strong>
                    </div>

                <?php
                } elseif (isset($success)){
                    ?>
                    <div class="alert alert-success">
                        <strong> <?php echo $success; ?> </strong>
                    </div>
                  <?php  
                }
                ?>





                <!-- <a href=""data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">Enroll</a> -->
                <button type="submit" name="send" id="send">Enroll</button:t>
                </form>
           
        </div>
        
    </div>
    </div>
    </section>
  


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel text-primary">Registration Complete!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Thank you for filling out this form! <br> We will get back to you shortly</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
 
<!-- <select>
                    <option value="ABIA">Abia State</option><option value="ADAMAWA">Adamawa</option><option value="AKWA">Akwa Ibom</option><option value="ANAMBRA">Anambra</option><option value="BAUCHI">Bauchi</option><option value="BAYELSA">Bayelsa</option><option value="BENUE">Benue</option><option value="BORNO">Borno</option><option value="CROSSRIVER">Cross River</option><option value="DELTA">Delta</option><option value="EBONYI">Ebonyi</option><option value="EDO">Edo</option><option value="EKITI">Ekiti</option><option value="ENUGU">Enugu</option><option value="GOMBE">Gombe</option><option value="IMO">Imo</option><option value="JIGAWA">Jigawa</option><option value="KADUNA">Kaduna</option><option value="KANO">Kano</option><option value="KATSINA">Katsina</option><option value="KEBBI">Kebbi</option><option value="KOGI">Kogi</option><option value="KWARA">Kwara</option><option value="LAGOS">Lagos</option><option value="NASARAWA">Nasarawa</option><option value="NIGER">Niger</option><option value="OGUN">Ogun</option><option value="ONDO">Ondo</option><option value="OSUN">Osun</option><option value="OYO">Oyo</option><option value="PLATEAU">Plateau</option><option value="RIVERS">Rivers</option><option value="SOKOTO">Sokoto</option><option value="TARABA">Taraba</option><option value="YOBE">Yobe</option><option value="ZAMFARA">Zamfara</option><option value="FCT">Federal Capital Territory (FCT)</option>
</select> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>