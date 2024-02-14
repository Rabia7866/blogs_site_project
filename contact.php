<?php include 'connection/connection.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include 'layouts/css.php';?>
</head>

<body>
    <!--::header part start::-->
    <?php include 'layouts/header.php'; ?>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>Contact us</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>contact us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
 
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="" method="post" 
            novalidate="novalidate"  enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                <label for="">Message</label>
                  <textarea class="form-control w-100" name="message"  cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                <label for="">Name</label>
                  <input class="form-control" name="name"  type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                <label for="">Email</label>
                  <input class="form-control" name="email"  type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                <label for="">Subject</label>
                  <input class="form-control" name="subject"  type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
                                    <!-- Image Input -->
                                    <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
                           <!-- php work start  -->
              <?php

              if (isset($_POST["submit"])) {
                $me = $_POST["message"];
                $na = $_POST["name"];
                $em = $_POST["email"];
                $sub = $_POST["subject"];

                if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
                  $targetdir = "picture/" ;

                  $imagename = uniqid() . "_" . basename($_FILES["image"]["name"]);
                  $targetfilepath = $targetdir . $imagename;

                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetfilepath) ) {
                    $query = "INSERT INTO `persons`( `message`, `name`, `email`, `subject`, `image`) 
                    VALUES ('$me','$na','$em','$sub','$targetfilepath')";
                    
                    if($conn->query($query) === true) {
                      echo '<script type="text/javascript">';
                      echo 'alert("uploaded");';
                      echo '</script>';
                  
                    }
                else {
                    echo"error"  . $query . "<br>" . $conn->error;

                }
                
                  }
                  else {
                    echo '<script type="text/javascript">';
                    echo 'alert("error");';
                    echo '</script>';
                
                  }
                }
                else {
                    
                  echo '<script type="text/javascript">';
                  echo 'alert("not uploaded");';
                  echo '</script>';
              
                }
        }

              
              ?>











        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  <!-- social_connect_part part start-->
  <?php include 'layouts/socialmedia.php'; ?>
  <!-- social_connect_part part end-->

   <!-- footer part start-->
   <?php include 'layouts/footer.php'; ?>
    <!-- footer part end-->

  <!-- jquery plugins here-->
  <!-- jquery -->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>