<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Book</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Book List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <?php echo flash_alert(); ?>

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-header d-flex align-items-center justify-content-between p-0 px-3">
                            <h5 class="card-title">Book List</h5>
                            <a href="<?php echo base_url('books/create'); ?>" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Add new book"><i class="bi bi-plus-square"></i> Add New</a>
                    </div>
                    <div class="card-body">
                        

                        <div class="table-responsive py-3">
                            <table id="books-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th><span>No.</span></th>
                                        <th>Book Cover</th>
                                        <th><span>Serial Number</span></th>
                                        <th><span>Title</span></th>
                                        <th><span>Author</span></th>
                                        <th><span>Main Category</span></th>
                                        <th><span>Sub Category</span></th>
                                        <th><span>Total Copies</span></th>
                                        <th><span>Action</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($books as $book) { ?>
                                        <tr>
                                            <td><?php echo $book['book_id']; ?></td>
                                            <td><img class="img-fluid" src="<?php echo book_cover($book['book_id']); ?>" alt="<?php echo $book['file']; ?>" /></td>
                                            <td class="fw-bold"><?php echo $book['serial_number']; ?></td>
                                            <td><?php echo $book['title']; ?></td>
                                            <td><?php echo $book['author_editor']; ?></td>
                                            <td><?php echo $book['main_category']; ?></td>
                                            <td><?php echo $book['sub_category']; ?></td>
                                            <td><?php echo $book['total_copies']; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-warning me-2" href="<?php echo base_url('books/edit/' . $book['book_id']); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit record"><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url('books/delete/' . $book['book_id']); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete record" disabled><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!--<div class="row mb-3 text-center">-->
                            <!--    <div class="col-md-12">-->
                            <!--        <ul class="pagination">-->
                            <!--            <?php //echo $pagination; ?>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>