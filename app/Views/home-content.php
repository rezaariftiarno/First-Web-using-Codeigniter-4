<?=$this->extend('layout')?>
<?=$this->section('content')?>
        <header class="masthead bg-primary text-white text-center" style="background-image: url(<?= base_url('bootstrap/css/assets/img/Bogor.jpg')?>);">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-3" src="<?= base_url('bootstrap/assets/img/KartunGua.jpg') ?>" style="width: 300px; border-radius: 50%" alt="" />
                <!-- Masthead Heading-->
                <!-- <h1 class="masthead-heading text-uppercase mb-0">Welcome</h1> -->
                <!-- Icon Divider-->
<!--                 <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div> -->
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Composer - Web Developer - Illustrator</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Item Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Item</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <?= $this->include('portofolio-content')?>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead"></p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead"></p></div>
                </div>
                <!-- About Section Button-->
            </div>
        </section>
       
<?=$this->endSection()?>