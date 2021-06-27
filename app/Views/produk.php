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
                            <h2>Produk Kami</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/l">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Project Area Start -->
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
                                    <?php $nomor = 0;
                                    foreach ($products as $key => $row) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <?php foreach($row['product_image'] as $image){ ?>
                                                        <img src="<?php echo base_url('uploads/'.$image) ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="project-cap">
                                                    <a href="<?php $slug = str_replace(' ', '_', $row['product_name']);
                                                                echo base_url('detail/' . $slug) ?>" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="<?php $slug = str_replace(' ', '_', $row['product_name']);
                                                                    echo base_url('detail/' . $slug) ?>"><?php echo $row['product_name']; ?></a></h4>
                                                    <h6><?php echo "Rp. " . number_format($row['product_price']); ?></h6>
                                                    <p><?php echo $row['product_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <?php echo $pager->links('bootstrap', 'bootstrap_pagination') ?>
                            </nav>
                        </div>
                        <!-- Card TWO -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <?php $nomor = 0;
                                    foreach ($pipa as $key => $row) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <?php foreach($row['product_image'] as $image){ ?>
                                                        <img src="<?php echo base_url('uploads/'.$image) ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html"><?php echo $row['product_name']; ?></a></h4>
                                                    <h6><?php echo "Rp. " . number_format($row['product_price']); ?></h6>
                                                    <p><?php echo $row['product_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Card THREE -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <?php $nomor = 0;
                                    foreach ($spandek as $key => $row) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                <?php foreach($row['product_image'] as $image){ ?>
                                                        <img src="<?php echo base_url('uploads/'.$image) ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html"><?php echo $row['product_name']; ?></a></h4>
                                                    <h6><?php echo "Rp. " . number_format($row['product_price']); ?></h6>
                                                    <p><?php echo $row['product_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- card FUR -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="project-caption">
                                <div class="row">
                                    <?php $nomor = 0;
                                    foreach ($baja as $key => $row) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <?php foreach($row['product_image'] as $image){ ?>
                                                        <img src="<?php echo base_url('uploads/'.$image) ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html"><?php echo $row['product_name']; ?></a></h4>
                                                    <h6><?php echo "Rp. " . number_format($row['product_price']); ?></h6>
                                                    <p><?php echo $row['product_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- card FIVE -->
                        <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                            <div class="project-caption">
                                <div class="row">
                                    <?php $nomor = 0;
                                    foreach ($fiber as $key => $row) { ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                <?php foreach($row['product_image'] as $image){ ?>
                                                        <img src="<?php echo base_url('uploads/'.$image) ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.html"><?php echo $row['product_name']; ?></a></h4>
                                                    <h6><?php echo "Rp. " . number_format($row['product_price']); ?></h6>
                                                    <p><?php echo $row['product_description']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
    </section>
    <!-- Project Area End -->
</main>
</body>
<?= $this->endSection() ?>

</html>