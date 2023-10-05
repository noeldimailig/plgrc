<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(<?php echo base_url(); ?>assets/library.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown text-light">Welcome to <span>Provincial Local Governance Resource Center</span></h2>
                        <h2 class="animate__animated animate__fadeInDown text-warning">Oriental Mindoro</h2>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(<?php //echo base_url(); 
                                                                    ?>assets/library2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <!--<h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>-->
                        <!--<p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>-->
                        <?php //echo form_search(); 
                        ?>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <!-- <div class="carousel-item" style="background-image: url(<?php //echo base_url(); 
                                                                            ?>assets/library3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <?php //echo form_search(); 
                        ?>
                    </div>
                </div>
            </div> -->

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <style>
        .director-message {
            float: right;
            margin-left: 20px;
            text-align: center;
        }
    </style>
    <!-- ======= About Section ======= -->
    <!-- style="background-color: #f70845; -->
    <section id="about" class="about" style="background-color: #F3AE22;">
        <div class="container">
            <div class="p-5 rounded glassmorphism-container" style="background: rgba(255,255,255,0.5);
-webkit-backdrop-filter: blur(10px);
backdrop-filter: blur(10px);
border: 1px solid rgba(255,255,255,0.25); overflow:hidden;">

                <div class="director-message">
                    <img style="width: 250px; height:auto; border-radius:50%; border: 5px solid #fff" src="<?php echo base_url('assets/PDBeng.jpg'); ?>" alt="PD Beng">
                    <div class="text-center">
                        <h4 class="fw-bold">Maria Victoria Del Rosario</h4>
                        <h6>Provincial Director</h6>
                    </div>

                </div>

                <h2 class="fw-bold">Provincial Director's Message</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg" style="background-color:#f6f6f6;">
        <div class="container">

            <div class="row mt-5">
                <div class="d-flex justify-content-center">
                    <h2 class="fw-bold">Partners</h2>
                </div>
            </div>

            <div class="row p-5">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/calapan-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/puerto-galera-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/san-teodoro-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/baco-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/naujan-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/victoria-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/socorro-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/pinamalayan-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/pola-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/gloria-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/bansud-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/roxas-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/mansalay-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/bulalacao-logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="<?php echo base_url(); ?>assets/lgu-logo/pgom.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

</main><!-- End #main -->