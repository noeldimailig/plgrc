<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>News & Announcements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">News & Announcements List</li>
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
                            <h5 class="card-title">News & Events List</h5>
                            <a href="<?php echo base_url('news/create'); ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new book"><i class="bi bi-plus-square"></i> Add New</a>
                        </div>

                        <div class="table-responsive">
                            <table id="news-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><span>No.</span></th>
                                        <th><span>Title</span></th>
                                        <th><span>Status</span></th>
                                        <th><span>Date Created</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($events as $event) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $event->title; ?></td>
                                            <td><?php echo $event->status; ?></td>
                                            <td><?php echo change_date_format($event->created_at); ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning me-2" href="<?php echo base_url('news/edit/' . $event->news_id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit record"><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('news/delete/' . $event->news_id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete record"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- <div class="row mb-3 text-center">
                                <div class="col-md-12">
                                    <ul class="pagination">
                                        <?php //echo $pagination; ?>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>