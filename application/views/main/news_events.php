<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main">
    <section class="mt-5">
        <div class="container">

            <?php foreach ($news as $news_item) { ?>
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $news_item->title; ?></h1>
                        <p><i>Posted: <?php echo change_date_format($news_item->updated_at, 'l, F j, Y');?></i></p>
                        <p><?php echo read_more($news_item->content, 'news-events/read-more/'.$news_item->news_id); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>
</main>