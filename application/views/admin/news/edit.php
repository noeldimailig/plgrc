<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>News & Announcements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active">Edit News & Announcements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php flash_alert(); ?>
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Edit News & Events</h5>

                        <form class="needs-validation" novalidate method="post" action="<?php echo base_url('news/update/'.$news->news_id); ?>" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="main-category" class="col-sm-2 col-form-label">Title/Heading</label>
                                <div class="col-sm-10">
                                    <input id="title" name="title" type="text" class="form-control" placeholder="Enter title/heading" value="<?php echo $news->title;?>" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content" class="col-sm-2 col-form-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Enter details here" required><?php echo $news->content;?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" id="status" class="form-select">
                                        <option value="draft" <?php selected_option('draft', $news->status);?>>Draft</option>
                                        <option value="publish" <?php selected_option('publish', $news->status);?>>Publish</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="attachment[]" class="col-sm-2 col-form-label">Attachment</label>
                                <div class="col-sm-10">
                                    <input id="attachment[]" name="attachment[]" type="file" class="form-control" multiple accept="image/*">
                                </div>
                                <p class="text-muted mt-3">Current Attachments: <?php echo $news->files; ?></p>
                            </div>

                            <div class="text-end">
                                <a class="btn btn-secondary" href="<?php echo base_url('news'); ?>"><i class="bi bi-arrow-counterclockwise"></i> Cancel</a>
                                <button type="submit" class="btn btn-warning"><i class="bi bi-plus-square"></i> Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>