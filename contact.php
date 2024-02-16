
<?php include("formconnection.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thepoonaclub</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<?php
// Define variables and initialize with empty values
$nameErr = $emailErr = $numberErr = $messageErr = "";
$name = $email = $number = $message = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){

    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filter_var($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email.";     
    } else{
        $email = filter_var($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email.";
        }
    }
     // Validate email address
     if(empty($_POST["number"])){
        $numberErr = "Please enter your mobile no.";     
    } else{
        $number = filter_var($_POST["number"]);
        if($number == FALSE){
            $numberErr = "Please enter a valid no.";
        }
    }
       
    // Validate user comment
    if(empty($_POST["message"])){
        $messageErr = "Please enter your meassage.";     
    } else{
        $message = filter_var($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid message.";
        }
    }
    

       $name  = $_POST['name'];
       $email  = $_POST['email'];  
       $number = $_POST['number']; 
       $message = $_POST['message'];   
      
     $query = "INSERT INTO club_Contact VALUES(null,'$name','$email','$number','$message')";

     $data = mysqli_query($conn,$query);

     if ($data)
     {
     //  echo "data insert into data base";
      //  header("location:index.php");
     }

     else 
     {
       echo "Failed";
     }
 }
 else 
 {
//    echo "Failed dwdd";
 }
?>
<body class="bg-light">
<?php  include("navbar.php") ?>
    <!-- .navbar -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="background-image:url(images/about.jpg); background-repeat: no-repeat; background-size:cover;">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="text-dark mb-3 animated slideInDown text-uppercase">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                           
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    <!-- Page Header End -->
        <!-- Contact Start -->
        <style type="text/css">
        .error{ color: red; }
        .success{ color: green; }
    </style>

        <div class="container-xxl py-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title text-center">Contact Us</h4>
                    <h6 class="mb-3"><span class="text-primary">For Any Query</span> </h6>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start  text-uppercase">Booking</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start  text-uppercase">General</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start  text-uppercase">Technical</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn " data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.1520841395422!2d73.87879367400286!3d18.52202828257185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c065a7c56561%3A0xea9c7ab133802f0e!2sThe%20New%20Club%20(%20Poona)%20Ltd!5e0!3m2!1sen!2sin!4v1680778840846!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s" >
                            <form action="" method="POST" class="bg-dark p-4 w-100 h-100 rounded" id="form_id">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                            <span class="error"><?php echo $nameErr; ?></span>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                                            <label for="email">Your Email</label>
                                            <span class="error"><?php echo $emailErr; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="number" min="0"  class="form-control" maxlength="10"  id="number" placeholder="Phon No" >
                                            <label for="number">phone</label>
                                            <span class="error"><?php echo $numberErr; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control"  name="message" id="message" placeholder="Leave a message here"  style="height: 150px" ></textarea>
                                            <label for="message">Message</label>
                                            <span class="error"><?php echo $messageErr; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button  id="submit_btn" name="submit" onclick="myFunc()" value="submit" class="btn bg-green w-100 py-3 text-white">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <!--- Contact End --->
        <script>
              function myFunc()
              {
                // var x = window.confirm("Are You Sure ?");

                  if(window.confirm("Are You Sure ?")) { 
                    
                        document.querySelector('#form_id').submit();
                    }
                    else{
                        
                        return false;
                    }
            // return confirm("hello confrm");
    }
        </script>

    <!-- ======= Footer ======= -->
    <?php include("footer.php") ?>
</body>
</html>