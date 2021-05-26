<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create Artikel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Artikel</li>
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
          <?php echo form_open_multipart('admin/article/store'); ?>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <?php 
                      echo form_label('Judul');
                      $article_title = [
                        'type'  => 'text',
                        'name'  => 'article_title',
                        'id'    => 'article_title',
                        'value' => '',
                        'class' => 'form-control',
                        'placeholder' => 'Judul Artikel'
                      ];
                      echo form_input($article_title); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Penulis');
                      $article_author = [
                        'type'  => 'text',
                        'name'  => 'article_author',
                        'id'    => 'article_author',
                        'value' => '',
                        'class' => 'form-control',
                        'placeholder' => 'Penulis Artikel'
                      ];
                      echo form_input($article_author); 
                    ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <?php 
                      echo form_label('Status', 'Status');
                      echo form_dropdown('article_status', ['' => 'Pilih', 'published' => 'published', 'draft' => 'draft'], 'article_status', ['class' => 'form-control']); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Gambar');
                      echo form_upload('article_image', '', ['class' => 'form-control']); 
                    ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <?php 
                      echo form_label('Konten'); 
                      $article_content = [
                        'type'  => 'text',
                        'name'  => 'article_content',
                        'id'    => 'article_content',
                        'value' => '',
                        'class' => 'form-control',
                        'placeholder' => 'Konten Artikel'
                      ];
                      echo form_textarea($article_content);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo base_url('admin/article'); ?>" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo view('_partials/footer'); ?>