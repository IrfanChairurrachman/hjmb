<!doctype html>
<html class="no-js" lang="zxx">

<?= $this->extend('Master/Page_Layout') ?>
<?= $this->section('content') ?>
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="<?= base_url('assets/img/hero/profil3.jpg')?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="hero__caption">
                                <div class="hero-text1">
                                    <span data-animation="fadeInUp" data-delay=".3s">Manufacturer & Trading Company</span>
                                </div>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Harapan Jaya</h1>
                                <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                    <h2>Multi Bisnis</h2>
                                    <h2>Multi Bisnis</h2>
                                </div>
                                <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                    <span><a href="/service">Selamat Datang</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- slider Area End-->
    <!-- Services Area Start -->
    <div class="services-area1 section-padding30">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-55">
                        <div class="front-text">
                            <h2 class="">Layanan Kami</h2>
                        </div>
                        <span class="back-text">Layanan</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="<?= base_url('assets/img/gallery/Layanan/1.jpg') ?>" alt="">
                        </div>
                        <div class="service-cap">
                            <h4><a href="/service">Jasa Supplier</a></h4>
                            <a href="/service" class="more-btn">Read More <i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="<?= base_url('assets/img/icon/services_icon1.png') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="<?= base_url('assets/img/gallery/Layanan/2.jpg') ?>" alt="">
                        </div>
                        <div class="service-cap">
                            <h4><a href="/service">Aneka Produksi </a></h4>
                            <a href="/service" class="more-btn">Read More <i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="<?= base_url('assets/img/icon/services_icon1.png') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="<?= base_url('assets/img/gallery/Layanan/3.png') ?>" alt="">
                        </div>
                        <div class="service-cap">
                            <h4><a href="/service">Pergudangan</a></h4>
                            <a href="/service" class="more-btn">Read More <i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="<?= base_url('assets/img/icon/services_icon1.png') ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!-- About Area Start -->
    <section class="support-company-area fix pt-10">
        <div class="support-wrapper align-items-end">
            <div class="left-content">
                <!-- section tittle -->
                <div class="section-tittle section-tittle2 mb-55">
                    <div class="front-text">
                        <h2 class="">Siapa Kami</h2>
                    </div>
                    <span class="back-text">Tentang Kami</span>
                </div>
                <div class="support-caption">
                    <p class="pera-top">PT. Harapan Jaya Multi Bisnis adalah Perusahaan Manufacturer & Trading Company yang didirikan di Makassar pada Tahun 1996.</p>
                    <a> Manufacturer yang dibawahi oleh PT. Harapan Jaya Multi Bisnis adalah:
                        <li>- Production Of</li>
                        <li>- Supplier</li>
                    </a>
                    <p></p>
                    <a href="/about" class="btn red-btn2">Selengkapnya</a>
                </div>
            </div>
            <div class="right-content">
                <!-- img -->
                <div class="right-img">
                    <img src="<?= base_url('assets/img/gallery/siapakami.png') ?>" alt="">
                </div>
                <div class="support-img-cap text-center">
                    <span>1996</span>
                    <p>Since</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!-- Produk Area Start -->
    <section class="project-area  section-padding30">
        <div class="container">
            <div class="project-heading mb-35">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3">
                            <div class="front-text">
                                <h2 class="">Produk Kami</h2>
                            </div>
                            <span class="back-text">Galeri</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> Semua </a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Pipa</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Spandek</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Baja Ringan</a>
                                    <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Aneka Fiber</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Nav Card -->
                    <div class="tab-content active" id="nav-tabContent">
                        <!-- card ONE -->
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/RAJALON.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Rajalon</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/RAJALON.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Rajalon</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/TWO HORSES AW.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Two Horses AW</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/TWO HORSES D.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Two Horses D</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/1.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Seng Spandek Galv AZ100 KR5</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/2.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Seng Spandek Galv AZ100 KR5</a></h4>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <!-- Card TWO -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/RAJALON.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Rajalon</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/TWO HORSES AW.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Two Horses AW</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/TWO HORSES D.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Two Horses D</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/INDALON AW.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Indalon AW</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Pipa/INDALON D.jpg" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pipa Indalon D</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Card THREE -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/1.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Seng Spandek Galv AZ100 KR5</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/2.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Seng Spandek Galv AZ100 KR5</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/3.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Seng Spandek G550 KR5</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/2.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Spandek/3.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project6.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card FUR -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Baja Ringan/1.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Canal C</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/Baja Ringan/2.JPG" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Reng</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project3.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project4.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project5.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project6.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                <h4><a href="project_details.html">Factory</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card FIVE -->
                        <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                            <div class="project-caption">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project1.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Bak Mandi</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project2.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Kursi Tunggu</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project3.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Bath Tube</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project4.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Tempat Sampah</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project5.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Shower Tray</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-project mb-30">
                                            <div class="project-img">
                                                <img src="assets/img/gallery/project6.png" alt="">
                                            </div>
                                            <div class="project-cap">
                                                <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                <h4><a href="project_details.html">Pelampung Air/Tangki</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Nav Card -->
                </div>
            </div>
        </div>
    </section>
    <!-- Project Area End -->
    <!-- contact with us Start -->
    <section class="contact-with-area" data-background="<?= base_url('assets/img/hero/profil.png') ?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
                    <div class="contact-us-caption">
                        <div class="team-info mb-30 pt-45">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle4">
                                <div class="front-text">
                                    <h2 class="">Ayo Pesan Di HJMB</h2>
                                </div>
                                <span class="back-text">Tanya HJMB</span>
                            </div>
                            <p>Apapun Yang Kamu Cari Silahkan Tekan Tombol Dibawah</p>
                            <a href="/contact" class="white-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact with us End-->
    <!-- Team Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5 mb-50">
                        <div class="front-text">
                            <h2 class="">Tim Kami</h2>
                        </div>
                        <span class="back-text">Tim HJMB</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="<?= base_url('assets/img/team/team.png') ?>" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Jabatan 1</span>
                            <h3>Nama</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="<?= base_url('assets/img/team/team.png') ?>" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Jabatan</span>
                            <h3>Nama</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="<?= base_url('assets/img/team/team.png') ?>" alt="">
                        </div>
                        <div class="team-caption">
                            <span>Jabatan</span>
                            <h3>Nama</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Testimonial Start -->
    <div class="testimonial-area t-bg testimonial-padding">
        <div class="container ">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle6 mb-50">
                        <div class="front-text">
                            <h2 class="">Testimoni</h2>
                        </div>
                        <span class="back-text">Feedback</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <!-- SVG icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="86px" height="63px">
                                        <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)" d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z" />
                                    </svg>
                                    <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjn.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-text">
                                        <span>Nama</span>
                                        <p>Jabatan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <!-- SVG icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="86px" height="63px">
                                        <path fill-rule="evenodd" stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)" d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z" />
                                    </svg>
                                    <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim. Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjn.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-text">
                                        <span>nama</span>
                                        <p>Jabatan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!--latest Nnews Area start -->
    <div class="latest-news-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle7 mb-50">
                        <div class="front-text">
                            <h2 class="">Terkini</h2>
                        </div>
                        <span class="back-text">Berita Kami</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <!-- single-news -->
                    <div class="single-news mb-30">
                        <div class="news-img">
                            <img src="assets/img/gallery/Layanan/1.jpg" alt="">
                            <div class="news-date text-center">
                                <span>Tanggal</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="news-caption">
                            <ul class="david-info">
                                <li> | &nbsp; &nbsp; Porperties</li>
                            </ul>
                            <h2><a href="single-blog.html">Footprints in Time is perfect
                                    House in Kurashiki</a></h2>
                            <a href="/berita" class="d-btn">Read more »</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <!-- single-news -->
                    <div class="single-news mb-30">
                        <div class="news-img">
                            <img src="<?= base_url('assets/img/gallery/Layanan/2.jpg') ?>" alt="">
                            <div class="news-date text-center">
                                <span>Tanggal</span>
                                <p>Now</p>
                            </div>
                        </div>
                        <div class="news-caption">
                            <ul class="david-info">
                                <li> | &nbsp; &nbsp; Porperties</li>
                            </ul>
                            <h2><a href="single-blog.html">Footprints in Time is perfect
                                    House in Kurashiki</a></h2>
                            <a href="/artikel" class="d-btn">Read more » </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>

    <!--latest News Area End -->

</main>
</body>

</html>