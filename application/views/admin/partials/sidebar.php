<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?php $page = $this->uri->segment(1); ?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo $page == 'dashboard' ? '' : 'collapsed'; ?>" href="<?php echo base_url('dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $page == 'books' || $page == 'main-category' || $page == 'sub-category' || $page == 'publisher' || $page == 'borrowers' ? '' : 'collapsed'; ?>" data-bs-target="#library-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bookshelf"></i><span>Manage Library</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="library-nav" class="nav-content collapse <?php echo $page == 'books' || $page == 'main-category' || $page == 'sub-category' || $page == 'publisher' || $page == 'borrowers' ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="<?php echo $page == 'books' ? 'active' : ''; ?>" href="<?php echo base_url('books'); ?>">
                        <i class="bi bi-circle"></i>
                        <span>Book</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo $page == 'main-category' ? 'active' : ''; ?>" href="<?php echo base_url('main-category'); ?>">
                        <i class="bi bi-circle"></i>
                        <span>Collection Main Category</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo $page == 'sub-category' ? 'active' : ''; ?>" href="<?php echo base_url('sub-category'); ?>">
                        <i class="bi bi-circle"></i>
                        <span>Collection Sub Category</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo $page == 'publisher' ? 'active' : ''; ?>" href="<?php echo base_url('publisher'); ?>">
                        <i class="bi bi-circle"></i>
                        <span>Publisher</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo $page == 'borrowers' ? 'active' : ''; ?>" href="<?php echo base_url('borrowers'); ?>">
                        <i class="bi bi-circle"></i>
                        <span>Borrower</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Library Nav -->

        <!--<li class="nav-item">-->
        <!--    <a class="nav-link collapsed" data-bs-target="#msac-nav" data-bs-toggle="collapse" href="#">-->
        <!--        <i class="bi bi-folder"></i><span>Manage MSAC</span><i class="bi bi-chevron-down ms-auto"></i>-->
        <!--    </a>-->
        <!--    <ul id="msac-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">-->
                <!--<li>-->
                <!--    <a href="<?php //echo base_url('borrowers'); ?>">-->
                <!--        <i class="bi bi-circle"></i>-->
                <!--        <span>Borrower</span>-->
                <!--    </a>-->
                <!--</li>-->
        <!--    </ul>-->
        <!--</li>-->
        <!-- End Library Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $page == 'news' ? '' : 'collapsed'; ?>" href="<?php echo base_url('news'); ?>">
                <i class="bi bi-newspaper"></i>
                <span>News & Announcements</span>
            </a>
        </li>
        <!-- End News and Events Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $page == 'settings' ? '' : 'collapsed'; ?>" href="<?php echo base_url('setting'); ?>">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li><!-- End Profile Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?php echo base_url('auth/logout'); ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
            </a>
        </li><!-- End Logout Nav -->

    </ul>

</aside><!-- End Sidebar-->