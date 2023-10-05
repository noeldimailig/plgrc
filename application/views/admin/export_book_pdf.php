<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px 10px;
    }

    .center {
        text-align: center;
    }

    #main {
        width: 80%;
        margin: 0 auto;
        margin-top: 50px;
    }
</style>

<div class="center">
    <img width="100" src="<?php echo base_url(); ?>assets/DILGLogo.png" alt="DILG Logo">
    <h3>Department of Interior and Local Government</h3>
    <h4>Oriental Mindoro</h4>
    <h1>Books List</h1>
</div>


<main id="main">
    <table class="border">
        <thead>
            <tr>
                <th>No.</th>
                <th>S/N</th>
                <th>Title</th>
                <th>Author</th>
                <th>Main Category</th>
                <th>Sub Category</th>
                <th>Total Copies</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $book->serial_number; ?></td>
                    <td><?php echo $book->title; ?></td>
                    <td><?php echo $book->author_editor; ?></td>
                    <td><?php echo $book->main_category; ?></td>
                    <td><?php echo $book->sub_category; ?></td>
                    <td><?php echo $book->total_copies; ?></td>
                </tr>
                <?php $no++; ?>
            <?php } ?>
        </tbody>
    </table>
</main>