<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Information</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Information</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <form action="<?php echo base_url('admin/edit/update'); ?>" method="post">
              <div class="card">
                <div class="card-body">
                  <?php 
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
 
                  <input type="hidden" name="info_id" value="<?= $info[0]['info_id']?>">
                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" value="<?= $info[0]['info_name']?>" class="form-control" name="info_name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" value="<?= $info[0]['info_email']?>" class="form-control" name="info_email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                      <label for="">Kontak 1</label>
                      <input type="text" value="<?= $info[0]['info_contact1']?>" class="form-control" name="info_contact1" placeholder="Enter kontak1">
                  </div>
                  <div class="form-group">
                      <label for="">Kontak 2</label>
                      <input type="text" value="<?= $info[0]['info_contact2']?>" class="form-control" name="info_contact2" placeholder="Enter kontak2">
                  </div>
                  <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea type="textarea" class="form-control" name="info_alamat" placeholder="Enter alamat"><?= $info[0]['info_alamat']?></textarea>
                  </div>
 
                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url('admin'); ?>" class="btn btn-outline-info">Back</a>
                    <button type="submit" class="btn btn-primary float-right">Update</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
 
</div>
<?php echo view('_partials/footer'); ?>