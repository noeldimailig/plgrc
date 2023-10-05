<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Publisher</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('publisher'); ?>">Publishers</a></li>
                <li class="breadcrumb-item active">Edit Publisher</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php flash_alert(); ?>
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Edit Publisher</h5>

                        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('publisher/update/' . $publisher->publisher_id); ?>">
                            <div class="row mb-3">
                                <label for="publisher" class="col-sm-2 col-form-label">Publisher</label>
                                <div class="col-sm-10">
                                    <input id="publisher" name="publisher" type="text" class="form-control" placeholder="Enter Publisher" value="<?php echo $publisher->publisher; ?>" required>
                                </div>
                            </div>

                            <div class="text-end">
                                <a class="btn btn-secondary" href="<?php echo base_url('publisher'); ?>"><i class="bi bi-arrow-counterclockwise"></i> Cancel</a>
                                <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>