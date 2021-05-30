<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Informasi Umum</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Informasi Umum</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <?php
                        if(!empty(session()->getFlashdata('success'))){ ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success');?>
                        </div>     
                        <?php } ?>

                        <?php if(!empty(session()->getFlashdata('info'))){ ?>
                        <div class="alert alert-info">
                            <?php echo session()->getFlashdata('info');?>
                        </div>
                        <?php } ?>

                        <?php if(!empty(session()->getFlashdata('warning'))){ ?>
                        <div class="alert alert-warning">
                            <?php echo session()->getFlashdata('warning');?>
                        </div>
                        <?php } ?>
                        <div class="card-header">
                            Informasi Umum
                            <a href="<?php echo base_url('admin/info/edit/'.$info[0]['info_id']); ?>" class="btn btn-primary float-right">Edit</a>
                        </div>
                        <div class="card-body">
                         
 
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?= $info[0]['info_name']?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?= $info[0]['info_email']?></td>
                                        </tr>
                                        <tr>
                                            <td>Kontak 1</td>
                                            <td><?= $info[0]['info_contact1']?></td>
                                        </tr>
                                        <tr>
                                            <td>Kontak 2</td>
                                            <td><?= $info[0]['info_contact2']?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td style="width:60%"><?= $info[0]['info_alamat']?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Admin
                            <a href="<?php echo base_url('admin/edit/'.$admin[0]['id']); ?>" class="btn btn-primary float-right">Edit</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $admin[0]['username']?></td>
                                            <td><?= $admin[0]['password']?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>