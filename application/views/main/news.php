<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main">
    <section class="mt-5">
        <div class="container">
            
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    
                    <h1 class="card-title"><?php echo $news->title; ?></h1>
                    <p><i>Posted: <?php echo change_date_format($news->updated_at); ?></i></p>

                    <?php if ($news->files != '') { ?>
                        <img src="<?php echo base_url('uploads/news/' . $news->files); ?>" alt="<?php echo $news->title . ' Image'; ?>">
                    <?php } ?>
                    
                    <p><?php echo $news->content; ?></p>
                </div>
            </div>
        </div>

    </section>
</main>