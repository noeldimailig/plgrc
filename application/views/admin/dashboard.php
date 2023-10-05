<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Borrowers</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $borrower_count; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">As of:</span>
                                        <span class="text-muted small pt-2 ps-1"><?php echo date('l, F j, Y, h:i A'); ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Booked Card -->

                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card books-card">

                            <div class="card-body">
                                <h5 class="card-title">Books</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $book_count; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">As of:</span>
                                        <span class="text-muted small pt-2 ps-1"><?php echo date('l, F j, Y, h:i A'); ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Booked Card -->

                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Main Category</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-list-nested"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $main_count; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">As of:</span>
                                        <span class="text-muted small pt-2 ps-1"><?php echo date('l, F j, Y, h:i A'); ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Booked Card -->

                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Sub Category</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-list-nested"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $sub_count; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">As of:</span>
                                        <span class="text-muted small pt-2 ps-1"><?php echo date('l, F j, Y, h:i A'); ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Booked Card -->

                    <div class="col-xxl-3 col-md-4">
                        <div class="card info-card publisher-card">

                            <div class="card-body">
                                <h5 class="card-title">Publisher</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php echo $publisher_count; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">As of:</span>
                                        <span class="text-muted small pt-2 ps-1"><?php echo date('l, F j, Y, h:i A'); ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Booked Card -->

                    <!-- <div class="col-xxl-3 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Site Visits</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?php //echo $visits; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">As of:</span>
                                        <span class="text-muted small pt-2 ps-1"><?php //echo date('l, F j, Y, h:i A'); ?></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>End Booked Card -->
                </div>
            </div>
        </div>
    </section>

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">No. of Site Visits</h5>
                        </div>
                        <canvas id="no-of-visits"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Recently Added Books</h5>
                        </div>

                        <div class="table-responsive">
                            <table id="books-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><span>No.</span></th>
                                        <th><span>S/N</span></th>
                                        <th><span>ISSN/ISBN</span></th>
                                        <th><span>Title</span></th>
                                        <th><span>Author</span></th>
                                        <th><span>Main Category</span></th>
                                        <th><span>Sub Category</span></th>
                                        <th><span>Total Copies</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($recent_books as $recent_book) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $recent_book->serial_number; ?></td>
                                            <td><?php echo $recent_book->issn_isbn; ?></td>
                                            <td><?php echo $recent_book->title; ?></td>
                                            <td><?php echo $recent_book->author_editor; ?></td>
                                            <td><?php echo $recent_book->main_category; ?></td>
                                            <td><?php echo $recent_book->sub_category; ?></td>
                                            <td><?php echo $recent_book->total_copies; ?></td>
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

</main><!-- End #main -->