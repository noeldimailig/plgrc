<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main id="main">
    <div class="container">
        <section class="mt-5 p-5">
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <div class="card shadow-sm border-0">
                         <div class="card-body">
                            <h3>Book Details</h3>
        
                            <p>Status: <?php echo book_status($book->book_id);?></p>
        
                            <div class="mb-3 text-center">
                                <img class="img-fluid" src="<?php echo base_url('uploads/books/'.$book->file); ?>" alt="">
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="legend">S/N</td>
                                            <td><?php echo $book->serial_number; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">ISSN/ISBN</td>
                                            <td><?php echo $book->issn_isbn; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Title</td>
                                            <td><?php echo $book->title; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Author/Editor</td>
                                            <td><?php echo $book->author_editor; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Collection Main Category</td>
                                            <td><?php echo $book->main_category; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Collection Sub Category</td>
                                            <td><?php echo $book->sub_category; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Volume/Edition</td>
                                            <td><?php echo $book->volume_edition; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">No of Pages</td>
                                            <td><?php echo $book->no_of_pages; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Publisher</td>
                                            <td><?php echo $book->publisher; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Status of Publication</td>
                                            <td><?php echo $book->status_of_publication; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Place of Publication</td>
                                            <td><?php echo $book->place_of_publication; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Year of Publication</td>
                                            <td><?php echo $book->year_of_publication; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Copyright Date</td>
                                            <td><?php echo $book->copyright_date; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">KP Type</td>
                                            <td><?php echo $book->kp_type; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">KP Category</td>
                                            <td><?php echo $book->kp_category; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">With CD/Tape</td>
                                            <td><?php echo $book->with_cd; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Total Copies</td>
                                            <td><?php echo $book->total_copies; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="legend">Available Copies</td>
                                            <td><?php echo $book->available_copies; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h3>Related Books</h3>
                            <?php foreach ($related_books as $related) { ?>
                                <p><a class="" href="<?php echo base_url('library/book/') . $related->book_id; ?>"><?php echo $related->title; ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>