<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" style="background-color: #F3AE22;">
    <!-- <div class="container"> -->
    <section class="mt-5 p-5 row">
        <div class="col-lg-8 mt-5">
            <?php //search(); 
            ?>
            <div class="row g-3">
                <?php foreach ($books as $book) { ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="card p-2 h-100 shadow-sm border-0">
                            <img class="card-img-top" src="<?php echo book_cover($book['book_id']); ?>" alt="<?php echo $book['title'] . 'Image'; ?>">
                            <div class="card-body">
                                <h6 class="card-title"><span class="fw-bold">Title:</span> <?php echo $book['title']; ?></h6>
                                <p class="card-text"><span class="fw-bold">Author:</span> <i><?php echo $book['author_editor']; ?></i></p>
                                <a href="<?php echo base_url('library/book/') . $book['book_id']; ?>" class="btn btn-sm btn-danger">More Details</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="row mb-3 mt-3 text-center">
                <div class="col-md-12">
                    <!-- <ul class="pagination"> -->
                    <?php echo $pagination; ?>
                    <!-- </ul> -->
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <h3 class="fw-bold">Library Rules</h3>
            <section id="services" class="services p-3 py-3 rounded">
                <style>
                    .text-overlay-container {
                        position: relative;
                        display: inline-block;
                    }

                    .text-overlay {
                        position: absolute;
                        top: 45%;
                        left: 10%;
                        padding: 0 50px;
                        /* Adjust the background color and opacity as needed */
                    }

                    .text-overlay h5 {
                        font-weight: bold;
                    }
                </style>

                <div class="text-overlay-container">
                    <img style="width: 400px;" src="<?php echo base_url('assets/library-rules-placeholder.png'); ?>" alt="">

                    <div class="text-overlay">
                        <h5>Keep books clean and dry</h5>
                        <p>Panatilihing malinis at tuyo ang mga aklat</p>
                    </div>
                </div>

                <div class="text-overlay-container">
                    <img style="width: 400px;" src="<?php echo base_url('assets/library-rules-placeholder.png'); ?>" alt="">

                    <div class="text-overlay">
                        <h5>No food and drink around your books</h5>
                        <p>Walang pagkain at inumin sa paligid ng iyong mga libro</p>
                    </div>
                </div>

                <div class="text-overlay-container">
                    <img style="width: 400px;" src="<?php echo base_url('assets/library-rules-placeholder.png'); ?>" alt="">

                    <div class="text-overlay">
                        <h5>Treat books kindly</h5>
                        <p>Tratuhin ang mga libro nang maayos</p>
                    </div>
                </div>

                <div class="text-overlay-container">
                    <img style="width: 400px;" src="<?php echo base_url('assets/library-rules-placeholder.png'); ?>" alt="">

                    <div class="text-overlay">
                        <h5>No peeling off stickers or labels</h5>
                        <p>Huwag alisin ang mga sticker o label sa libro</p>
                    </div>
                </div>

                <div class="text-overlay-container">
                    <img style="width: 400px;" src="<?php echo base_url('assets/library-rules-placeholder.png'); ?>" alt="">

                    <div class="text-overlay">
                        <h5>Return books to their respective shelves</h5>
                        <p>Ibalik ang mga libro sa kani-kanilang lalagyan</p>
                    </div>
                </div>

            </section>
        </div>
    </section>
    <!-- </div> -->
</main>