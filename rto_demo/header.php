 <?php 

session_start();
include 'db.php';
if(!empty($_SESSION['id']))
{
//  header("location:index.php");
$id = $_SESSION['id'];
$s = "SELECT * FROM user WHERE user_id='$id'";
$s1 = mysqli_query($con,$s);
$s2 = mysqli_fetch_assoc($s1);

}

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Transportion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/myrto.png" alt="" width="15%">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-8">
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope fa-lg"></i> rto-trans-sur@gujarat.gov.in</a></li>
                                        <li><a href="#"> <i class="fa fa-phone fa-lg"></i> 0261 2977191</a></li>
                                    </ul>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.php">Home</a></li>
                                            <?php 
                                            $q = "SELECT * FROM category";
                                            $q1 = mysqli_query($con,$q);
                                            $q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);

                                            // echo "<pre>";
                                            // print_r($q2);
                                            // die
                                            ?>
                                            <?php foreach ($q2 as $key => $value) { ?>
                                                <?php 
                                                $cid = $value['category_id'];
                                                $m = "SELECT * FROM subcategory WHERE sub_category_id='$cid'";
                                                $m1 = mysqli_query($con,$m);
                                                $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                                                ?>
                                             <li><a href="#"><?php echo $value['category_name']; ?>
                                              <?php if(!empty($m2)){ ?><i class="ti-angle-down"></i></a> <?php  } ?>
                                                <ul class="submenu">
                                                    <?php  foreach($m2 as $value){ ?>
                                                        <li><a href="registration.php?subcategory_id=<?php echo $value['subcategory_id']; ?>&category_id=<?= $cid; ?>"><?php echo $value['subcategory_name'] ?></a></li>
                                                    <?php  } ?>
                                                </ul>
                                            </li>
                                        <?php  } ?> 
                                            <li><a  href="tutorial.php">Tutorials</a></li>
                                           <!--  <li><a href="slot_book.php">Slot</a></li> -->
                                            <li><a href="schedule.php">Schedule</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                             <div class="book_btn d-none d-lg-block">
                                  <?php if(!empty($_SESSION['id'])){ ?>
                                    <a class="boxed-btn3-line" >
                                      <?php  echo $s2['user_name']; ?>
                                    </a>
                                    <?php  }else{ ?>
                                        <a class="boxed-btn3-line" href="login.php">
                                        Sign Up
                                    </a>
                                        <?php  } ?>
                                </div>
                                &nbsp;&nbsp;
                                 <div class="book_btn d-none d-lg-block">
                                    <?php if(!empty($_SESSION['id'])){ ?>
                                    <a class="boxed-btn3-line" href="logout.php">
                                        logout
                                    </a>
                                    <?php  }else{ ?>
                                        <a class="boxed-btn3-line" href="login.php">
                                        Sign In
                                    </a>
                                        <?php  } ?>
                                </div>
                           <!--  <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment justify-content-end">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="logout.php" style="margin-left: 700px;">Logout</a>
                                    <div class="search_btn">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header> 