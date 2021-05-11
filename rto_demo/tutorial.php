<?php

    ob_start();

    include ("header.php");


    if(count($_POST)>0)
    {
        $tutorial_category_id=$_POST['tutorial_category_id'];
        $tutorial_subcategory_id=$_POST['tutorial_subcategory_id'];
        $tutorial_type=$_POST['tutorial_type'];
        $tutorial_title=$_POST['tutorial_title'];
        $tutorial_description=$_POST['tutorial_description'];
        $tutorial_image=$_POST['tutorial_image'];
    }


    $m = "SELECT * FROM category";
    $m1 = mysqli_query($con,$m);
    $m2 = mysqli_fetch_all($m1,MYSQLI_ASSOC);



    $q = "SELECT tutorial.*,subcategory.subcategory_name,category.category_name FROM tutorial,subcategory,category WHERE tutorial.tutorial_subcategory_id=subcategory.subcategory_id AND tutorial.tutorial_category_id=category.category_id";
    $q1 = mysqli_query($con,$q);
    $q2 = mysqli_fetch_all($q1,MYSQLI_ASSOC);
    
    // echo "<pre>";
    // print_r($q2);
    // die;



?>


<div class="service_details_area">
        <div class="container">
             <div class="row">
                    <div class="col-lg-4 col-md-4">
                            <div class="service_details_left">
                                <h3>Services</h3>
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">


                                    <?php foreach ($m2 as $key => $value) { ?>
                                    <a class=" <?php if($key == 0){echo "active";} ?>" id="v-pills-<?php echo $value['category_id']; ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $value['category_id']; ?>"
                                        role="tab" aria-controls="v-pills-<?php echo $value['category_id']; ?>" aria-selected="true"><?php echo $value['category_name']; ?></a>
                                         <?php } ?>
                                   <!--  <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Land Transport</a>
                                    <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Air Freight</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">

                                 <?php foreach ($m2 as $k => $v) { ?>
                                <div class="tab-pane fade <?php if($k == 0){echo "show active";} ?>" id="v-pills-<?php echo $v['category_id']; ?>" role="tabpanel"
                              
                                    aria-labelledby="v-pills-<?php echo $v['category_id']; ?>-tab">
                                     <h3><?php echo $v['category_name']; ?></h3>

                                     <?php foreach ($q2 as $key => $value) {

                                    if($value['tutorial_category_id'] == $v['category_id']){
                                 ?>
                                    <div class="service_details_info">
                                       
                                        <h5><?php echo $value['subcategory_name'];  ?></h5><br>
                                        <p><b><?php echo $value['tutorial_description']; ?></b></p>
                                        
                                    </div>
                                    <div class="service_thumb">
                                          <?php if($value['tutorial_type'] == "Image"){ ?>
                                        <img class="img-fluid" src="admin/images/<?php echo $value['tutorial_image']; ?>" alt="">
                                    <?php }else { ?>
                                        <video width="500" height="" controls class="mb-4">
                                          <source src="admin/images/<?php echo $value['tutorial_image']; ?>" type="video/mp4">
                                         
                                        </video>
                                    <?php }?>
                                    </div>
                                    <br><br><br><br><br><br>
                           <?php } }?>

                               <!--      <div class="accordion_area">
                                        <div class="faq_ask">
                                            <h3>Frequently ask</h3>
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Adieus who direct esteem <span>It esteems
                                                                    luckily?</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="false"
                                                                aria-controls="collapseOne">
                                                                Who direct esteem It esteems?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Duis consectetur feugiat auctor?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download_brochure d-flex align-items-center justify-content-between">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <h3>Download Our Brochure</h3>
                                                <p>Esteem spirit temper too say adieus who direct.</p>
                                            </div>
                                        </div>
                                        <div class="download_right">
                                            <a class="boxed-btn3-line" href="#">Download Now</a>
                                        </div>
                                    </div> -->
                                
                                </div>
                           <?php  }?>
                          <!--       <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="service_details_info">
                                        <h3>Demo details</h3>
                                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or
                                            picture
                                            placing drawing. Apartments frequently or motionless on reasonable sed do
                                            eiusmod tempor
                                            inciunt ut labore et dolore magna liqua.abore et dolore incididunt ut labore et
                                            dolore.
                                        </p>
                                        <p>Temper too say adieus who direct esteem. It esteems luckily or picture placing
                                            drawing.
                                            Apartments frequently or motionless on reasonable sed do eiusmod tempor inciunt
                                            ut
                                            labore et dolore magna liqua.abore et dolore incididunt ut labore et dolore.</p>
                                        <p>Adieus who direct esteem. It esteems luckily or picture placing drawing.
                                            Apartments
                                            frequently or motionless on reasonable sed do eiusmod tempor inciunt ut labore
                                            et dolore
                                            magna liqua.abore et dolore incididunt ut labore et dolore.</p>
                                    </div>
                                    <div class="service_thumb">
                                        <img class="img-fluid" src="img/service/service_details.png" alt="">
                                    </div>
                                    <div class="accordion_area">
                                        <div class="faq_ask">
                                            <h3>Frequently ask</h3>
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwo1">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwo1" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Adieus who direct esteem <span>It esteems
                                                                    luckily?</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne2">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseOne2" aria-expanded="false"
                                                                aria-controls="collapseOne">
                                                                Who direct esteem It esteems?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree3">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseThree3" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Duis consectetur feugiat auctor?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download_brochure d-flex align-items-center justify-content-between">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <h3>Download Our Brochure</h3>
                                                <p>Esteem spirit temper too say adieus who direct.</p>
                                            </div>
                                        </div>
                                        <div class="download_right">
                                            <a class="boxed-btn3-line" href="#">Download Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab">
                                    <div class="service_details_info">
                                        <h3>Service details</h3>
                                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or
                                            picture
                                            placing drawing. Apartments frequently or motionless on reasonable sed do
                                            eiusmod tempor
                                            inciunt ut labore et dolore magna liqua.abore et dolore incididunt ut labore et
                                            dolore.
                                        </p>
                                        <p>Temper too say adieus who direct esteem. It esteems luckily or picture placing
                                            drawing.
                                            Apartments frequently or motionless on reasonable sed do eiusmod tempor inciunt
                                            ut
                                            labore et dolore magna liqua.abore et dolore incididunt ut labore et dolore.</p>
                                        <p>Adieus who direct esteem. It esteems luckily or picture placing drawing.
                                            Apartments
                                            frequently or motionless on reasonable sed do eiusmod tempor inciunt ut labore
                                            et dolore
                                            magna liqua.abore et dolore incididunt ut labore et dolore.</p>
                                    </div>
                                    <div class="service_thumb">
                                        <img class="img-fluid" src="img/service/service_details.png" alt="">
                                    </div>
                                    <div class="accordion_area">
                                        <div class="faq_ask">
                                            <h3>Frequently ask</h3>
                                            <div id="accordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingTwoa">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseTwoa" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Adieus who direct esteem <span>It esteems
                                                                    luckily?</span>
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwoa" class="collapse" aria-labelledby="headingTwoa"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseOneb" aria-expanded="false"
                                                                aria-controls="collapseOneb">
                                                                Who direct esteem It esteems?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOneb" class="collapse" aria-labelledby="headingOneb"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                                data-target="#collapseThreev" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Duis consectetur feugiat auctor?
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThreev" class="collapse" aria-labelledby="headingThreev"
                                                        data-parent="#accordion" style="">
                                                        <div class="card-body">Esteem spirit temper too say adieus who
                                                            direct esteem esteems luckily or picture placing drawing.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download_brochure d-flex align-items-center justify-content-between">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <h3>Download Our Brochure</h3>
                                                <p>Esteem spirit temper too say adieus who direct.</p>
                                            </div>
                                        </div>
                                        <div class="download_right">
                                            <a class="boxed-btn3-line" href="#">Download Now</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
            </div>
        </div>
    </div>

<?php

    include ("footer.php");

?>