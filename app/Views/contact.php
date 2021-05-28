<!doctype html>
<?= $this->extend('Master/Page_Layout') ?>
<?= $this->section('content') ?>
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/profil.png">
            <div class="container">
            <?php
                if(!empty(session()->getFlashdata('success'))){ ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success');?>
                </div>     
            <?php } ?>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Kontak Kami</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="/contact">Kontak</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="maps-section">
                <div class="section-tittle mb-20">
                    <div class="front-text">
                        <h2 class="">Lokasi Kami</h2>
                    </div>
                    <span class="back-text">Lokasi</span>
                </div>
            </div>
            <div class="support-caption embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.234601473091!2d119.50297751463836!3d-5.065683852851088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefc5f3d6dc62b%3A0xf093efd7e2e02a51!2sPT.Harapan%20Jaya%20Multi%20Bisnis%20-%20HJMB!5e0!3m2!1sid!2sid!4v1621700949320!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2659.7666198153365!2d119.50632982619442!3d-5.066464397755083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefdffbc34810d%3A0xfedba035cf2d496c!2sPT.%20Harapan%20Jaya%20Multi%20Bisnis!5e1!3m2!1sen!2sus!4v1621689835007!5m2!1sen!2sus" style="width: 1000px; height: 520px; display:flex; align-items:center" allowfullscreen="" loading="lazy"></iframe> -->
            <div class="col-12 mt-30">
                <h2 class="contact-title">Lebih Dekat Dengan HJMB</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="<?php echo base_url('fb/store'); ?>" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="fb_message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="fb_name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="fb_email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="fb_subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Pergudangan 88 Cluster Green Park, Jl. Insinyur Sutami No.5, Temmapaduae, Marusu, Maros Regency, South Sulawesi 90112</h3>
                        <p>Makassar, ID 90112</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+6282188478898</h3>
                        <p>Senin - Sabtu : 08.00-17.00</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>harapanjayamultibisnis@gmail.com</h3>
                        <p>Silahkan Kirimkan Pengajuan Anda!</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<!-- ================ contact section end ================= -->
<?= $this->endSection() ?>

</body>

</html>