 <!-- Navigation-->
<?php 
    $session = session();
?>
            <div class="container">

                <a class="navbar-brand js-scroll-trigger" href="<?= base_url()?>">Reza Ariftiarno</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="btn btn-active mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-1 rounded js-scroll-trigger" href="#">Achievment and Certificate</a></li> -->
                        <li class="btn btn-active mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-1 rounded js-scroll-trigger" href="<?=base_url()?>#skills">Skills</a></li>
                        <li class="btn btn-active mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-1 rounded js-scroll-trigger" href="<?=base_url()?>#biography">Biography</a></li>
                        <li class="btn btn-active mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-1 rounded js-scroll-trigger" href="<?=site_url('post/index')?>">Document</a></li>
                        <?php 
                            if($session->get('isLoggedIn')): 
                        ?>
                        <li class="btn btn-active mx-0 mx-lg-1"><a class="nav-link py-1 px-0 px-lg-1 rounded js-scroll-trigger" href="<?=site_url('administrator/admin')?>">Adm</a></li>
                        <li type="button" class="btn btn-outline-danger"><a href="<?= site_url('auth/logout')?>">Logout</a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        <?php 

         ?>