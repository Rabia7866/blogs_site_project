<?php include '../connection/connection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'css.php';?>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <?php include 'sidebar.php';?>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <?php include 'navbar.php';?>

        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-lg-12 position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-column">
                                        <h1 class="font-weight-bolder mb-0 text-center underline-text">Post Request
                                        </h1>
                                    </div>


                                    <!-- content section  -->

                                    <!-- form -->


                                    <div class="container mt-5">
                                        <h2 class="mb-4">Table </h2>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Subject</th>
                                                    <th scope="col">Image</th>
                                                </tr>
                                            </thead>
                                            <!-- php work start -->

                                            <?php
       $query = "SELECT * FROM `persons`";
       $result = mysqli_query($conn, $query);

       while ($row = mysqli_fetch_assoc($result)) {
         ?>

                                            <tr>

                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['message']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['subject']?></td>
                                                <td><img src="../<?php echo $row['image']; ?>" width="50px"
                                                                height="50px" alt=""></td>
                                            </tr>

                                            <?php
    }

    ?>

                                        </table>
                                    </div>





                                    <!-- content senton end  -->
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>


        </div>


    </main>



    <?php include 'script.php';?>
</body>

</html>