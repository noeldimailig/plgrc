<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Publisher</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('publisher'); ?>">Publishers</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <?php echo flash_alert(); ?>

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Publisher</h5>
                            <a href="<?php echo base_url('publisher/create'); ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new publisher"><i class="bi bi-plus-square"></i> Add New</a>
                        </div>

                        <div class="table-responsive">
                            <table id="publisher-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><span>No.</span></th>
                                        <th><span>Publisher</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($publishers as $publisher) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $publisher->publisher; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('publisher/edit/' . $publisher->publisher_id); ?>"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('publisher/delete/' . $publisher->publisher_id); ?>"><i class="bi bi-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>