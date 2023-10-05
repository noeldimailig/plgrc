<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manage Borrower</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('borrower'); ?>">Borrowers</a></li>
                <li class="breadcrumb-item active">Edit Borrower</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Edit Borrower</h5>

                        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('borrowers/update/' . $borrower->borrower_id); ?>">
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Fullname</label>
                                <div class="col-sm-10">
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Enter fullname" value="<?php echo $borrower->full_name; ?>" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="office" class="col-sm-2 col-form-label">Office</label>
                                <div class="col-sm-10">
                                    <input id="office" name="office" type="text" class="form-control" placeholder="Enter office" value="<?php echo $borrower->office; ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">Contact No.</label>
                                <div class="col-sm-10">
                                    <input id="phone" name="phone" type="text" class="form-control" placeholder="09XXXXXXXXX" value="<?php echo $borrower->contact_no; ?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input id="address" name="address" type="text" class="form-control" placeholder="Enter address" value="<?php echo $borrower->address; ?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
                                <div class="col-sm-10">
                                    <input id="purpose" name="purpose" type="text" class="form-control" placeholder="Enter purpose" value="<?php echo $borrower->purpose; ?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="book-borrowed" class="col-sm-2 col-form-label">Book Borrowed</label>
                                <div class="col-sm-10">
                                    <select name="book-borrowed" id="book-borrowed" class="form-select">
                                        <option value="">Select Book Borrowed</option>
                                        <?php foreach ($books as $book) { ?>
                                            <option value="<?php echo $book->book_id; ?>" <?php selected_option($book->book_id, $borrower->book_id); ?>><?php echo $book->title; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date-borrowed" class="col-sm-2 col-form-label">Date Borrowed</label>
                                <div class="col-sm-10">
                                    <input id="date-borrowed" name="date-borrowed" type="date" class="form-control" value="<?php echo $borrower->date_borrowed; ?>" required>
                                </div>
                            </div>

                            <div class="text-end">
                                <a class="btn btn-secondary" href="<?php echo base_url('borrowers'); ?>"><i class="bi bi-arrow-counterclockwise"></i> Cancel</a>
                                <button type="submit" class="btn btn-warning"><i class="bi bi-plus-square"></i> Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>