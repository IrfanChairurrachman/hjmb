<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create News</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create News</li>
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
          <?php echo form_open_multipart('admin/news/store'); ?>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <?php 
                      echo form_label('Judul');
                      $news_title = [
                        'type'  => 'text',
                        'name'  => 'news_title',
                        'id'    => 'news_title',
                        'value' => '',
                        'class' => 'form-control',
                        'placeholder' => 'Judul Berita'
                      ];
                      echo form_input($news_title); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Penulis');
                      $news_author = [
                        'type'  => 'text',
                        'name'  => 'news_author',
                        'id'    => 'news_author',
                        'value' => '',
                        'class' => 'form-control',
                        'placeholder' => 'Penulis Berita'
                      ];
                      echo form_input($news_author); 
                    ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <?php 
                      echo form_label('Status', 'Status');
                      echo form_dropdown('news_status', ['' => 'Pilih', 'published' => 'published', 'draft' => 'draft'], 'news_status', ['class' => 'form-control']); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Gambar');
                      echo form_upload('news_image', '', ['class' => 'form-control']); 
                    ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <?php 
                      echo form_label('Konten'); 
                      $news_content = [
                        'type'  => 'text',
                        'name'  => 'news_content',
                        'id'    => 'news_content',
                        'value' => '',
                        'class' => 'form-control',
                        'placeholder' => 'Konten Berita'
                      ];
                      echo form_textarea($news_content);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo base_url('admin/news'); ?>" class="btn btn-outline-info">Back</a>
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