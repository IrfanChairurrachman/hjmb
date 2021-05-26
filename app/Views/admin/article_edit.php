<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Artikel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Artikel</li>
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
            <?php echo form_open_multipart('admin/article/update/'.$article['article_id']); ?>
              <div class="card-header">Form Edit Artikel</div>
              <div class="card-body">
                <?php echo form_hidden('article_id', $article['article_id']); ?>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <?php echo form_label('Image', 'Image'); ?>
                      <br>
                      <img src="<?php echo base_url('uploads/'.$article['article_image']) ?>" class="img-fluid">
                      <br>
                      <br>
                      <?php echo form_label('Ganti Image', 'Ganti Image'); ?>
                      <?php echo form_upload('article_image', $article['article_image'], ['class' => 'form-control', 'placeholder' => 'article Image']); ?>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <?php echo form_label('Name', 'Name'); ?>
                      <?php echo form_input('article_title', $article['article_title'], ['class' => 'form-control', 'placeholder' => 'Judul Artikel']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Price', 'Price'); ?>
                      <?php echo form_input('article_author', $article['article_author'], ['class' => 'form-control', 'placeholder' => 'article Price', 'type' => 'number']); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <?php echo form_label('Status', 'Status'); ?>
                      <?php echo form_dropdown('article_status', ['' => 'Pilih', 'published' => 'published', 'draft' => 'draft'], $article['article_status'], ['class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo form_label('Description', 'Description'); ?>
                      <?php echo form_textarea('article_content', $article['article_content'], ['class' => 'form-control', 'placeholder' => 'Konten Artikel']); ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                  <a href="<?php echo base_url('admin/article'); ?>" class="btn btn-outline-info">Back</a>
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