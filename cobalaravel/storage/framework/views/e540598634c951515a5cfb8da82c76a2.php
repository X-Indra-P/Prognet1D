

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Edit Mahasiswa</h2>
            <form method="POST" action="<?php echo e(url('mahasiswa/'.$model->id)); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" value="<?php echo e($model->Nama); ?>">
                </div>
                <div class="form-group">
                    <label for="NIM">NIM:</label>
                    <input type="text" class="form-control" id="NIM" name="NIM" value="<?php echo e($model->NIM); ?>">
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan:</label>
                    <input type="text" class="form-control" id="Jurusan" name="Jurusan" value="<?php echo e($model->Jurusan); ?>">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat:</label>
                    <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?php echo e($model->Alamat); ?>">
                </div>
                <div class="form-group">
                    <label for="Gender">Gender:</label>
                    <input type="text" class="form-control" id="Gender" name="Gender" value="<?php echo e($model->Gender); ?>">
                </div>
                <div class="form-group">
                    <label for="Agama">Agama:</label>
                    <input type="text" class="form-control" id="Agama" name="Agama" value="<?php echo e($model->Agama); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobalaravel\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>