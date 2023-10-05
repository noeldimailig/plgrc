<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main">
    <div class="container">
        <section class="mt-5 p-5">
            <?php //echo search(); ?>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <h4 class="fw-bold">Filter Results</h4>

                    <form action="<?php echo base_url('user/filter'); ?>" method="post" class="card  shadow-sm border-0 p-3">
                        <div class="col-12 mb-3">
                            <label for="main-category" class="form-label">Main Category</label>

                            <select name="main-category" id="main-category" class="form-select" required>
                                <option value="">Select Main Category</option>
                                <?php foreach ($main_categories as $main_category) { ?>
                                    <option value="<?php echo $main_category->main_category; ?>" <?php selected_option($main_category->main_category, $this->input->get('main-category')); ?>><?php echo $main_category->main_category; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="sub-category" class="form-label">Sub Category</label>

                            <select name="sub-category" id="sub-category" class="form-select" required>
                                <option value="">Select Sub Category</option>
                                <?php foreach ($sub_categories as $sub_category) { ?>
                                    <option value="<?php echo $sub_category->sub_category; ?>" <?php selected_option($sub_category->sub_category, $this->input->get('sub-category')); ?>><?php echo $sub_category->sub_category; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="name-of-publisher" class="form-label">Name of Publisher</label>

                            <select name="name-of-publisher" id="name-of-publisher" class="form-select">
                                <option value="">Select Name of Publisher</option>
                                <?php foreach ($publishers as $publisher) { ?>
                                    <option value="<?php echo $publisher->publisher; ?>" <?php selected_option($publisher->publisher, $this->input->get('publisher', true)); ?>><?php echo $publisher->publisher; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="col-lg-8">
                    <h4 class="fw-bold">Showing <?php echo $count; ?> results for "<?php echo $search; ?>"</h4>
                    <?php foreach ($results as $result) { ?>
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img width="100" src="<?php echo book_cover($result['book_id']); ?>" alt="<?php echo $result['title'] . ' Image'; ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <p class="m-0"><span class="fw-bold">Title: </span> <a href="<?php echo base_url('user/book/') . $result['book_id']; ?>"><?php echo $result['title']; ?></a></p>
                                        <p class="m-0"><span class="fw-bold">Author/Editor: </span><i><?php echo $result['author_editor']; ?></i></p>
                                        <p class="m-0"><span class="fw-bold">Main Category: </span><i><?php echo $result['main_category']; ?></i></p>
                                        <p class="m-0"><span class="fw-bold">Sub Category: </span><i><?php echo $result['sub_category']; ?></i></p>
                                        <p class="m-0"><span class="fw-bold">Publisher: </span><i><?php echo $result['publisher']; ?></i></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                    <?php } ?>

                    <div class="row mb-3 mt-3 text-center">
                        <div class="col-md-12">
                            <!-- <ul class="pagination"> -->
                            <?php echo $pagination; ?>
                            <!-- </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>