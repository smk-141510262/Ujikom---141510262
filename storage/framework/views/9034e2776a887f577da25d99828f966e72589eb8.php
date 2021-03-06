<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lihat Data</div>
                <div class="panel-body">
                <a href="<?php echo e(url('/Pegawai')); ?>" class="btn btn-success btn-block">Kembali</a><br>
                    <center><img src="<?php echo e(asset('gambar/'.$pegawais->photo.'')); ?>" width="250" height="250" class="img-circle img-responsive" alt="Responsive image"></center><br>
                    <label>NIP</label>
                    <input type="text" name="nip" placeholder="<?php echo e($pegawais->nip); ?>" class="form-control" disabled><br>
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="<?php echo e($pegawais->User->name); ?>" class="form-control" disabled><br>
                    <label>Jabatan</label>
                    <input type="text" name="jabatan_id" placeholder="<?php echo e($pegawais->JabatanModel->nama_jabatan); ?>" class="form-control" disabled><br>
                    <label>Golongan</label>
                    <input type="text" name="golongan_id" placeholder="<?php echo e($pegawais->GolonganModel->nama_golongan); ?>" class="form-control" disabled><br>
                    <label>Permission</label>
                    <input type="text" name="permission" placeholder="<?php echo e($pegawais->User->permission); ?>" class="form-control" disabled><br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>