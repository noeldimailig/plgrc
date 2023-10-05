<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manage Book</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('books'); ?>">Books</a></li>
                <li class="breadcrumb-item active">Add Book</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Add Book</h5>

                        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('books/store'); ?>" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="sn" class="col-sm-2 col-form-label">S/N</label>
                                <div class="col-sm-10">
                                    <input id="sn" name="sn" type="text" class="form-control" placeholder="Enter S/N" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="isbn" class="col-sm-2 col-form-label">ISBN/ISSN</label>
                                <div class="col-sm-10">
                                    <input id="isbn" name="isbn" type="text" class="form-control" placeholder="Enter ISBN/ISSN">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input id="title" name="title" type="text" class="form-control" placeholder="Enter title of the book" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="author" class="col-sm-2 col-form-label">Author/Editor</label>
                                <div class="col-sm-10">
                                    <input id="author" name="author" type="text" class="form-control" placeholder="Enter author/editor of the book">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="main-category" class="col-sm-2 col-form-label">Main Category</label>
                                <div class="col-sm-10">
                                    <select name="main-category" id="main-category" class="form-select" required>
                                        <option value="">Select Main Category</option>
                                        <?php foreach ($main_categories as $main_category) { ?>
                                            <option value="<?php echo $main_category->main_category; ?>"><?php echo $main_category->main_category; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sub-category" class="col-sm-2 col-form-label">Sub Category</label>
                                <div class="col-sm-10">
                                    <select name="sub-category" id="sub-category" class="form-select" required>
                                        <option value="">Select Sub Category</option>
                                        <?php foreach ($sub_categories as $sub_category) { ?>
                                            <option value="<?php echo $sub_category->sub_category; ?>"><?php echo $sub_category->sub_category; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name-of-publisher" class="col-sm-2 col-form-label">Name of Publisher</label>
                                <div class="col-sm-10">
                                    <select name="name-of-publisher" id="name-of-publisher" class="form-select">
                                        <option value="">Select Name of Publisher</option>
                                        <?php foreach ($publishers as $publisher) { ?>
                                            <option value="<?php echo $publisher->publisher; ?>"><?php echo $publisher->publisher; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="place-of-publication" class="col-sm-2 col-form-label">Place of Publication</label>
                                <div class="col-sm-10">
                                    <input id="place-of-publication" name="place-of-publication" type="text" class="form-control" placeholder="Enter place of publication">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="year-of-publication" class="col-sm-2 col-form-label">Year of Publication</label>
                                <div class="col-sm-10">
                                    <input id="year-of-publication" name="year-of-publication" type="text" class="form-control" placeholder="Enter year of publication">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="copyright-date" class="col-sm-2 col-form-label">Copyright Date</label>
                                <div class="col-sm-10">
                                    <input id="copyright-date" name="copyright-date" type="text" class="form-control" placeholder="Enter copyright date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="edition" class="col-sm-2 col-form-label">Volume/Edition</label>
                                <div class="col-sm-10">
                                    <input id="edition" name="edition" type="text" class="form-control" placeholder="Enter edition">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no-of-pages" class="col-sm-2 col-form-label">No. of Pages</label>
                                <div class="col-sm-10">
                                    <input id="no-of-pages" name="no-of-pages" type="number" class="form-control" placeholder="Enter no. of pages" min="1">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- Book Type -->
                                <label for="type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select name="type" id="type" class="form-select">
                                        <?php $kp_types = ['Pamphlet', 'Guidebook', 'Book', 'Brochure/Flyer', 'Handbook', 'Coursebook', 'Manual', 'Module', 'Primer', 'Magazine/Newsletter', 'Compendium', 'Presentation/Training Material', 'Annual Report', 'Annual Book']; ?>
                                        <option value="">Select Type</option>
                                        <?php foreach ($kp_types as $type) { ?>
                                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <!-- Book Type -->
                                <label for="type" class="col-sm-2 col-form-label">KP Category</label>
                                <div class="col-sm-10">
                                    <select name="type" id="type" class="form-select">
                                        <?php $kp_cats = ['Business Friendliness and Competitiveness', 'Environmental Management', 'Disaster Preparedness', 'Peace and Order', 'General Reference', 'Financial Administration', 'Tourism, Culture, and Arts', 'Financial Administration', 'Social Protection', 'Governance']; ?>
                                        <option value="">Select Type</option>
                                        <?php foreach ($kp_cats as $cat) { ?>
                                            <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Publishing Status</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="publishing-status" id="publish" value="Published" checked="">
                                        <label class="form-check-label" for="publish">
                                            Publish
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="publishing-status" id="unpublish" value="Unpublish">
                                        <label class="form-check-label" for="unpublish">
                                            Unpublish
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">With CD</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="with-cd" id="yes" value="Yes" checked="">
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="with-cd" id="no" value="No">
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row mb-3">
                                <label for="total-copies" class="col-sm-2 col-form-label">Total Copies</label>
                                <div class="col-sm-10">
                                    <input id="total-copies" name="total-copies" type="number" class="form-control" placeholder="Enter total no. of total copies" required min="1">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="available-copies" class="col-sm-2 col-form-label">Available Copies</label>
                                <div class="col-sm-10">
                                    <input id="available-copies" name="available-copies" type="number" class="form-control" placeholder="Enter total no. of available copies">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="cover" class="col-sm-2 col-form-label">Book Cover</label>
                                <div class="col-sm-10">
                                    <input id="cover" name="cover" class="form-control" type="file"/>
                                </div>
                            </div>

                            <div class="text-end">
                                <a class="btn btn-secondary" href="<?php echo base_url('books'); ?>"><i class="bi bi-arrow-counterclockwise"></i> Cancel</a>
                                <button type="submit" class="btn btn-warning"><i class="bi bi-plus-square"></i> Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>