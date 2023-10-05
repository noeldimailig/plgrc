<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>assets/main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/main/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/main/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/main/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/main/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo base_url(); ?>assets/main/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>assets/main/js/main.js"></script>
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
<!-- <script>
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

    setInterval(update_time, 1000);
</script> -->


</body>

</html>