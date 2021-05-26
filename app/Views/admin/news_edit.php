<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Berita</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Berita</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php 
            $inputs = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if(!empty($errors)){ ?>
            <div class="alert alert-danger" role="alert">
              Whoops! Ada kesalahan saat input data, yaitu:
              <ul>
              <?php foreach ($errors as $error) : ?>
                  <li><?= esc($error) ?></li>
              <?php endforeach ?>
              </ul>
            </div>
          <?php } ?>
          <div class="card">
            <?php echo form_open_multipart('admin/news/update/'.$news['news_id']); ?>
              <div class="card-header">Form Edit Produk</div>
              <div class="card-body">
                <?php echo form_hidden('news_id', $news['news_id']); ?>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <?php echo form_label('Image', 'Image'); ?>
                      <br>
                      <img src="<?php echo base_url('uploads/'.$news['news_image']) ?>" class="img-fluid">
                      <br>
                      <br>
                      <?php echo form_label('Ganti Image', 'Ganti Image'); ?>
                      <?php echo form_upload('news_image', $news['news_image'], ['class' => 'form-control', 'placeholder' => 'News Image']); ?>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <?php echo form_label('Name', 'Name'); ?>
                      <?php echo form_input('news_title', $news['news_title'], ['class' => 'form-control', 'placeholder' => 'Judul Berita']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Price', 'Price'); ?>
                      <?php echo form_input('news_author', $news['news_author'], ['class' => 'form-control', 'placeholder' => 'news Price', 'type' => 'number']); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <?php echo form_label('Status', 'Status'); ?>
                      <?php echo form_dropdown('news_status', ['' => 'Pilih', 'published' => 'published', 'draft' => 'draft'], $news['news_status'], ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Description', 'Description'); ?>
                      <?php echo form_textarea('news_content', $news['news_content'], ['class' => 'form-control', 'placeholder' => 'Konten Berita']); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                  <a href="<?php echo base_url('admin/news'); ?>" class="btn btn-outline-info">Back</a>
                  <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo view('_partials/footer'); ?>