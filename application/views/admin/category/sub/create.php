<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Collection Sub Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('category/sub'); ?>">Sub Categories</a></li>
                <li class="breadcrumb-item active">Add Sub Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php flash_alert(); ?>
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Add Sub Category</h5>

                        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('sub-category/store'); ?>">
                            <div class="row mb-3">
                                <label for="sub-category" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <input id="sub-category" name="sub-category" type="text" class="form-control" placeholder="Enter Sub Category" required>
                                </div>
                            </div>

                            <div class="text-end">
                                <a class="btn btn-secondary" href="<?php echo base_url('category/sub'); ?>"><i class="bi bi-arrow-counterclockwise"></i> Cancel</a>
                                <button type="submit" class="btn btn-warning"><i class="bi bi-plus-square"></i> Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>