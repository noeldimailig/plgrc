<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Borrower</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Borrower List</li>
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
                            <h5 class="card-title">Borrower List</h5>
                            <a href="<?php echo base_url('borrowers/create'); ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new book"><i class="bi bi-plus-square"></i> Add New</a>
                        </div>

                        <div class="table-responsive">
                            <table id="borrowers-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><span>No.</span></th>
                                        <th><span>Fullname</span></th>
                                        <th><span>Book Borrowed</span></th>
                                        <th><span>Office</span></th>
                                        <th><span>Purpose</span></th>
                                        <th><span>Date Borrowed</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($borrowers as $borrower) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $borrower->full_name; ?></td>
                                            <td><?php echo book($borrower->book_id); ?></td>
                                            <td><?php echo $borrower->office; ?></td>
                                            <td><?php echo $borrower->purpose; ?></td>
                                            <td><?php echo $borrower->date_borrowed; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning me-2" href="<?php echo base_url('borrowers/edit/' . $borrower->borrower_id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit record"><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('borrowers/delete/' . $borrower->borrower_id); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete record"><i class="bi bi-trash"></i></a>
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