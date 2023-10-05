<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main">

    <section class="section dashboard">

        <div class="row">
            <?php echo flash_alert(); ?>

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title">Book List</h5>
                            <div class="d-flex justify-content-md-end mt-3 mt-md-0" id="export-buttons">
                                <!-- <button class="btn btn-sm btn-success me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Export as Spreadsheet"><i class="bi bi-filetype-xlsx"></i></button>
                                        <button class="btn btn-sm btn-danger me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Export as PDF"><i class="bi bi-filetype-pdf"></i></button>
                                        <button id="print-pdf" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Print a Copy"><i class="bi bi-printer"></i></button> -->
                                <!-- <button class="btn btn-sm btn-success me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Export as Spreadsheet" data-url="<?php //echo base_url('export-spreadsheet'); ?>" data-type="export-spreadsheet"><i class="bi bi-filetype-xlsx"></i></button> -->
                                <a href="<?php echo base_url('reports/export_pdf_book');?>" class="btn btn-sm btn-danger me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Export as PDF" data-url="<?php echo base_url('export-pdf'); ?>" data-type="export-pdf"><i class="bi bi-filetype-pdf"></i></a>
                                <button class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Print a Copy" data-url="<?php echo base_url('print-copy'); ?>" data-type="print-copy"><i class="bi bi-printer"></i></button>

                            </div>
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
                                    <?php foreach ($books as $book) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $book['serial_number']; ?></td>
                                            <td><?php echo $book['issn_isbn']; ?></td>
                                            <td><?php echo $book['title']; ?></td>
                                            <td><?php echo $book['author_editor']; ?></td>
                                            <td><?php echo $book['main_category']; ?></td>
                                            <td><?php echo $book['sub_category']; ?></td>
                                            <td><?php echo $book['total_copies']; ?></td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="row mb-3 text-center">
                                <div class="col-md-12">
                                    <ul class="pagination">
                                        <?php echo $pagination; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>