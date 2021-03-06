<?php 
include "include/classes.php";
include "include/header_admin.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
           
                <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Manage Product</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add New Product </h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" enctype="multipart/form-data" >
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product name</label>
                                                <input  name="p_name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Descrption</label>
                                                <textarea  name="p_desc" type="password" class="form-control cc-name valid"></textarea>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">product image</label>
                                                <input  name="p_img" type="file" class="form-control cc-number identified visa">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">price</label>
                                                <input name="p_price" type="number" class="form-control cc-name valid">
                                            </div>
                                            <div class="row form-group">
                                                
                                                <div class="col-12 col-md-12">
                                                    <select name="select" id="select" class="form-control">
                                                        <option>Please select Category</option>
                                                        <?php
                                                       $result=$y->readcategory($c);
                                                       while ($row=$result->fetch_assoc()) {
                                                            echo "<option value={$row['cat_id']}>";
                                                            echo $row['cat_name'];
                                                            echo "</option>";
                                                        }
                                                        ?>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="save1">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Save</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>                  
            </div>        
    </div>

    <div class="row m-t-30">
                            <div class="col-ld-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Desc</th>
                                                <th>Price</th>
                                                <th>category</th>
                                                <th>ID_catg</th>
                                                 <th>Img</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                    
                                             $result=$z->readproduct($c);
                                            while ($row1=$result->fetch_assoc()) 
                                            {   
                                               echo "<tr>"; 
                                                echo "<td>{$row1['pro_id']}</td>";
                                               echo "<td>{$row1['pro_name']}</td>";
                                               echo "<td>{$row1['pro_desc']}</td>";
                                               echo "<td>{$row1['pro_price']}</td>";
                                              
                                                 
                                               echo "<td>{$row1['cat_name']}</td>";
                                               echo "<td>{$row1['cat_id']}</td>";
                                               
                                              echo "<td><img src='upload/{$row1['pro_image']}' width='100px' height='100px'></td>";
                                               echo "<td><a href='edit_product.php?id={$row1['pro_id']}' class='btn btn-primary'>Edit</a></td>";
                                               echo "<td><a href='delete_product.php?id={$row1['pro_id']}' class='btn btn-danger'>Delete</a></td>";
                                               echo "</tr>";
                                            }
                                           ?> 
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<?php include "include/footer_admin.php";?>

    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
<!-- end document-->
