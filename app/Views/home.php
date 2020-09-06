
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Reza Ariftiarno</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('favicon/favicon.png')?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url ('bootstrap/css/styles.css')?>" rel="stylesheet" />
    </head>
    <body style="padding-top: 100px;">

            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <?= $this->include('navbar')?>
            </nav>

        <header class="text-white text-center">
            <div class=" d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->

                        <div style="width: 100%; position: relative; margin-left: auto; margin-right: auto; margin-top: auto;">
                        <div style="width: 100%; text-align: center;  position: absolute; z-index: 1; height: auto; margin-top: 25%; bottom: 15%;">
                                                                  
                            <img class="masthead-avatar mb-5" style="border-radius: 50%; width: 20%;" src="<?=base_url('image/KartunGua.jpg')?>">
                            <h1 style="margin-top: -3%; height: auto; font-size: 3vw;">Reza Ariftiarno</h1>
                        </div>
                        <video style="opacity: 60%; width: 100%; height: auto;" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                            <source src="<?= base_url('video-header/1.mp4')?>" type="video/mp4">
                        </video>
                        </div>  
            </div>          
        </header>
        <!-- Portfolio Section-->
        <section class="page-section skills" id="skills">
            <div class="container">
                <!-- Item Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Skills</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                </div>
                <?= $this->include('portofolio-content')?>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="biography">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Biography</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">

                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-6 ml-auto"><p class="lead" style="text-align: right;">Seorang anak yang lahir pada Sabtu Wage 15 November 1997 ditengah gledek dan badai. Memiliki hobi pada bidang seni musik, otomotif, dan programming. Pernah masukin gula satu kilo ke dalam bak mandi tanpa alasan yang jelas-mungkin ini awal mula muncul rasa penasaran terhadap ilmu alam-kemudian dimarahin mamah. Yak, inilah website saya, silahkan diliat-liat isinya yang tidak jelas dan mungkin tidak ada fungsinya sama sekali di hidup Anda.</p></div>
                    <div class="col-lg-6 mr-auto">
                            <img style="width: 80%; height: auto;" src="<?= base_url('video-header/PP.png')?>">
                    </div>
                </div>
        </section>
        

        <!-- Masthead-->
               <!-- Footer-->
        <footer class="footer text-center" style="clear: both; position: relative; margin-top: 10px;">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            BTN Pondok Surya Kancana
                            <br />
                            Bubulak, 16115
                            <br/>
                            Bogor Barat, Kota Bogor
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Me</h4>
                        <p class="lead mb-0">
                            I'm Reza Ariftiarno, graduated as an Accountant from Pakuan University at 2020. I have so many things that I loved such as music, programming, and also engineering. Today I work in Pakuan University as a Website Administrator.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright ©Reza Ariftiarno 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="<?= base_url ('jquery-3.5.1.min.js')?>"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url ('bootstrap/assets/mail/jqBootstrapValidation.js')?>"></script>
        <script src="<?= base_url ('bootstrap/assets/mail/contact_me.js')?>"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url ('bootstrap/js/scripts.js')?>"></script>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f178b707258dc118beeb03a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Script Text Editor dari "Ckeditor" -->
  <script>
    CKEDITOR.inline( 'isi_artikel' );
  </script>
    </body>
</html>
