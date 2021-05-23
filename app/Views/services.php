<!doctype html>
<?= $this->extend('Master/Page_Layout') ?>
<?= $this->section('content') ?>
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/profil.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Layanan</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="/service">Layanan</a></li>
                                </ol>
                            </nav>
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
</main>

<?= $this->endSection() ?>

</body>

</html>