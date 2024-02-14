<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include 'layouts/css.php'; ?>
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
                        <h2>Post Archive</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>Post Archive</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- feature_post start-->
    <?php include 'layouts/post_gallary.php'; ?>
    <!-- feature_post end-->

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