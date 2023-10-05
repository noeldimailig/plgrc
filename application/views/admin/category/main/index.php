<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Collection Main Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('sub-category'); ?>">Main Categories</a></li>
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
                            <h5 class="card-title">Collection Main Category List</h5>
                            <a href="<?php echo base_url('main-category/create'); ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new main category"><i class="bi bi-plus-square"></i> Add New</a>
                        </div>

                        <div class="table-responsive">
                            <table id="main-category-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><span>No.</span></th>
                                        <th><span>Category</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($main_categories as $main_category) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $main_category->main_category; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('main-category/edit/' . $main_category->main_cat_id); ?>"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('main-category/delete/' . $main_category->main_cat_id); ?>"><i class="bi bi-trash"></i> Delete</a>
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