<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/DILGLogo.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/DILGLogo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet">

    <style>
        body {
            background-image: url('<?php echo base_url(); ?>assets/library.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 d-flex flex-column justify-content-center">



                            <div class="card mb-3">

                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img style="max-height:50px;" src="<?php echo base_url(); ?>assets/DILGLogo.png" alt="DILG Logo">
                                        <div class="d-flex flex-column align-items-start justify-content-start mx-3">
                                            <h6 class="fw-bold text-start mb-0 mt-3 p-0">Provincial Local Governance Resource Center</h6>
                                            <p class="text-danger text-start">Oriental Mindoro</p>
                                        </div>
                                    </div><!-- End Logo -->

                                    <div class="pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username or email & password to login</p>
                                    </div>

                                    <form id="signin" method="post" action="<?php echo base_url('auth/signin'); ?>" class="row g-3">
                                        <?php
                                        $flashdata = $this->session->flashdata();
                                        if ($flashdata) {
                                            foreach ($flashdata as $key => $value) {
                                                echo '<div class="alert alert-' . $key . '">' . $value . '</div>';
                                            }
                                        }
                                        ?>

                                        <div class="mb-0 col-12">
                                            <label for="email" class="form-label">Username/Email Address</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter username or email address" required>
                                        </div>
                                        <div class="mb-0 col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="forgot-password small text-end">
                                                <a href="forgot">Forgot Password?</a>
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
    <script src="<?php echo base_url(); ?>assets/admin/js/main.js"></script>

</body>

</html>