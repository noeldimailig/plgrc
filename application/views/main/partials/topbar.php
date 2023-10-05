<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $page = $this->uri->segment(1); ?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="px-3 d-flex align-items-center justify-content-between">

        <h1 class="logo d-flex align-items-center justify-content-between">
            <a class="me-2 d-flex align-items-center justify-content-between" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/DILGLogo.png" alt="" class="img-fluid" style="width:100%; height:auto;"><img src="<?php echo base_url(); ?>assets/LGRC Logo.png" alt="" class="img-fluid" style="width:100%; height:auto;"></a>
            <a href="<?php echo base_url(); ?>">
                <div class="d-flex flex-column align-items-start">
                    <span style="font-size: 8px;" class="fw-bold">DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</span><span style="font-size: 12px;" class="fw-bold p-1 px-0">Provincial Local Governance Resource Center</span><span style="font-size: 10px;" class="text-danger">Oriental Mindoro</span>
                </div>
            </a>
        </h1>

        <nav id="navbar" class="navbar flex-1">
            <ul>
                <li>
                    <form action="<?php echo base_url('library/search'); ?>" method="get">
                        <div class="input-group">
                            <input class="form-control-sm" id="q" name="q" type="text" placeholder="Search for book title, author, categories here..." value="<?php echo $this->input->get('q', true); ?>">
                            <span class="input-group-text" id="q"><i class="bi bi-search"></i></span>
                        </div>
                    </form>
                </li>
                <li><a href="<?php echo base_url(); ?>" <?php echo active(''); ?>>HOME</a></li>
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle <?php echo $page == 'about-us' ? 'active' : ''; ?>" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT US
                        </a>

                        <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item <?php echo active_dropdown('about-us/lgrc-mimaropa-km-framework'); ?>" href="<?php echo base_url('about-us/lgrc-mimaropa-km-framework'); ?>">LGRC-MIMAROPA KM Framework</a></li>
                            <li><a class="dropdown-item <?php echo active_dropdown('about-us/vision-mission-objectives-value-proposition'); ?>" href="<?php echo base_url('about-us/vision-mission-objectives-value-proposition'); ?>">VISION, MISSION, OBJECTIVES AND VALUE PROPOSITION</a></li>
                            <li><a class="dropdown-item <?php echo active_dropdown('about-us/organizational-structure'); ?>" href="<?php echo base_url('about-us/organizational-structure'); ?>">ORGANIZATIONAL STRUCTURE</a></li>
                            <li><a class="dropdown-item <?php echo active_dropdown('about-us/operations-management-policies-and-procedures'); ?>" href="<?php echo base_url('about-us/operations-management-policies-and-procedures'); ?>">THE OPERATIONS, MANAGEMENT POLICIES AND PROCEDURES</a></li>
                            <li><a class="dropdown-item <?php echo active_dropdown('about-us/guiding-principle-and-strategies'); ?>" href="<?php echo base_url('about-us/guiding-principle-and-strategies'); ?>">THE GUIDING PRINCIPLES AND STRATEGIES</a></li>
                            <li><a class="dropdown-item <?php echo active_dropdown('about-us/popularizing-the-lgrc'); ?>" href="<?php echo base_url('about-us/popularizing-the-lgrc'); ?>">POPULARIZING THE LGRC</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href="<?php echo base_url('news-events'); ?>" <?php echo active('news-events'); ?>>NEWS</a></li>
                <li><a href="<?php echo base_url('library'); ?>" <?php echo active('library'); ?>>LIBRARY</a></li>
                <li><a href="<?php echo base_url('msac'); ?>" <?php echo active('msac'); ?>>MSAC</a></li>
                <li><a href="<?php echo base_url('contact-us'); ?>" <?php echo active('contact-us'); ?>>CONTACT US</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->