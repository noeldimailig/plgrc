<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendor/chart.js/chart.umd.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/vendor/php-email-form/validate.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>


<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>assets/admin/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
<?php if (isset($scripts)) {
    if (is_array($scripts)) {
        foreach ($scripts as $script) {
            require_once(APPPATH . 'views/' . $script);
        }
    } else {
        require_once(APPPATH . 'views/' . $scripts);
    }
}
?>

<script>
let dataTable = new DataTable("#books-table");
    const date_today = document.getElementById('date-today');

    function update_time() {
        let now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();
        let ampm = hours >= 12 ? "PM" : "AM";

        hours = hours % 12;
        hours = hours ? hours : 12;

        hours = (hours - 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        let time = hours + ":" + minutes + ":" + seconds;

        date_today.textContent = time + " " + ampm;
    }

    // setInterval(update_time, 1000);
</script>
</body>

</html>