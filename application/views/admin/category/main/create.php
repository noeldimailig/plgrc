<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Collection Main Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('main-category'); ?>">Main Categories</a></li>
                <li class="breadcrumb-item active">Add Main Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php flash_alert(); ?>
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Add Main Category</h5>

                        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('main-category/store'); ?>">
                            <div class="row mb-3">
                                <label for="main-category" class="col-sm-2 col-form-label">Main Category</label>
                                <div class="col-sm-10">
                                    <input id="main-category" name="main-category" type="text" class="form-control" placeholder="Enter Main Category" required>
                                </div>
                            </div>

                            <div class="text-end">
                                <a class="btn btn-secondary" href="<?php echo base_url('main-category'); ?>"><i class="bi bi-arrow-counterclockwise"></i> Cancel</a>
                                <button type="submit" class="btn btn-warning"><i class="bi bi-plus-square"></i> Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>