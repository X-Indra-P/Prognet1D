

<?php $__env->startSection('content'); ?>
<br/>

<?php if(Session::has('success')): ?>
    <p class="alert alert-success"><?php echo e(Session::get('success')); ?></p><br/>
<?php endif; ?>    

<a class="btn btn-info" href="<?php echo e(url('mahasiswa/create')); ?>">Tambah</a>
<br/><br/>
<form method="GET" action="<?php echo e(url('mahasiswa')); ?>">
</form>
<br/>
<table class="table-bordered table">
    <tr class="text-center">
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Agama</th>
        <th>AKSI</th>
    </tr>
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($value->Nama); ?></td>
            <td><?php echo e($value->NIM); ?></td>
            <td><?php echo e($value->Jurusan); ?></td>
            <td><?php echo e($value->Alamat); ?></td>
            <td><?php echo e($value->Gender); ?></td>
            <td><?php echo e($value->Agama); ?></td>
            <td class="text-center"><a class="btn btn-info" href="<?php echo e(url('mahasiswa/'.$value->id.'/edit')); ?>">Update</a></td>
            <td class="text-center">
                <form action="<?php echo e(url('mahasiswa/'.$value->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?> 
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cobalaravel\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>