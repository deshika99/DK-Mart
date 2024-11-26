<?php $__env->startSection('content'); ?>

<!-- Display Success Message -->
<?php if(session('status')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('status')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<!-- Display Error Message -->
<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<!-- Display Validation Errors -->
<?php if($errors->any()): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>


<div class="content-header">
    <div>
        <h2 class="content-title card-title">Payment Information</h2>
        <p>Manage your bank account details for withdrawals</p>
    </div>
    
</div>

<div class="container pt-10 px-4 ">
    <div class="card pt-15 pl-20 pb-20 pr-20 text-center">
        <div class="section">
            <?php if($customer && $customer->account_number): ?>
                <!-- Show Payment Details -->
                <h3>Bank Account Details</h3>
                <p>Bank Name: <?php echo e($customer->bank_name); ?></p>
                <p>Branch: <?php echo e($customer->branch); ?></p>
                <p>Account Holder Name: <?php echo e($customer->account_name); ?></p>
                <p>Account Number: <?php echo e($customer->account_number); ?></p>
            <?php else: ?>
                <!-- No Payment Information -->
                <h3>Bank Account Not Linked</h3>
                <p>You have not linked any bank account.</p>
            <?php endif; ?>
        </div>

        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <a href="<?php echo e(route('bank_acc')); ?>" class="btn btn-primary">Update Bank Account</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AffiliateDashBoard.affmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/AffiliateDashBoard/paymentInformation.blade.php ENDPATH**/ ?>