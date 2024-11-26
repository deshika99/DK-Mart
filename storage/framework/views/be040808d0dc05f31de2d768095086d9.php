<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Affiliate Rules</h2>
        <p>All the rules and guidelines for affiliates are listed here.</p>
    </div>
</div>

<style>
    .rule-card {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
    }
    .rule-title {
        font-size: 1.1rem;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 5px;
    }
    .rule-description {
        font-size: 0.95rem;
        color: #555;
    }
</style>  

<main class="mt-4">
    <div class="container px-4"> 
        <div class="row">
            <?php $__currentLoopData = $rules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-12">
                    <div class="rule-card">
                        <div class="rule-title">Rule #<?php echo e($loop->iteration); ?></div>
                        <p class="rule-description"><?php echo e($rule->rule); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AffiliateDashBoard.affmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/AffiliateDashBoard/affiliateRules.blade.php ENDPATH**/ ?>