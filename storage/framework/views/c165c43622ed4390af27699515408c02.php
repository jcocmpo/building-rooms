

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mt-4">Room Dashboard</h1>

    <!-- Create Room Button -->
    <a href="<?php echo e(route('rooms.create')); ?>" class="btn btn-primary mb-3">Create Room</a>

    <!-- Cancel Button: Goes back to Admin Dashboard -->
    <a href="<?php echo e(route('admindash')); ?>" class="btn btn-secondary">Cancel</a>


    <div class="row">
        <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($room->name); ?></h5>
                        <p class="card-text"><?php echo e($room->description); ?></p>
                        <a href="<?php echo e(route('rooms.edit', $room->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('rooms.destroy', $room->id)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Justine Cedric\OneDrive\Desktop\SIR RANIEL AJ IGNACIO\BSIT-3-1-SMS\resources\views/pages/roomdash.blade.php ENDPATH**/ ?>