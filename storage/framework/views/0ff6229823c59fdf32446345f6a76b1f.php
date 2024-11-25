<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div>
        <h2 class="content-title">Vendor Wallet</h2>
    </div>
</div>

        <!-- Vendor Wallet Info -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <p class="fs-5 mb-1"><strong>Current Balance:</strong></p>
                        <p class="text-success fs-4 fw-bold">Rs. <?php echo e(number_format($vendorWallet->balance, 2)); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <p class="fs-5 mb-1"><strong>Total Earnings:</strong></p>
                        <p class="text-primary fs-4 fw-bold">Rs. <?php echo e(number_format($totalEarnings, 2)); ?></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header text-white">
                <h4 class="mb-0">Order Earnings</h4>
            </div>
            <div class="card-body">
                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="card mb-3 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-8 p-3">
                                <p><strong>Date:</strong>  <?php echo e($orderItem->created_at->format('d M Y')); ?></p>
                                <h5 class="mb-2"><strong>Product:</strong> <?php echo e($orderItem->product->product_name); ?></h5>
                                <p class="mb-1"><strong>Order Code:</strong> 
                                    <?php if($orderItem->order): ?>
                                        <?php echo e($orderItem->order->order_code); ?>

                                    <?php else: ?>
                                        <span class="text-muted">N/A</span>
                                    <?php endif; ?>
                                </p>
                                <p class="mb-1"><strong>Quantity:</strong> <?php echo e($orderItem->quantity); ?></p>
                            </div>
                            <div class="col-md-4 bg-light p-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <strong>Total Cost:</strong>
                                    <span class="">Rs. <?php echo e(number_format($orderItem->cost, 2)); ?></span> 
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <strong>Base Commission (8%):</strong>
                                    <span class="text-danger">- Rs. <?php echo e(number_format(($orderItem->cost * 0.08), 2)); ?></span> 
                                </div>

                                <?php if($orderItem->product->is_affiliate): ?>
                                    <div class="d-flex justify-content-between mb-2">
                                        <strong>Affiliate Commission (<?php echo e((int)$orderItem->product->commission_percentage * $orderItem->quantity); ?>%):</strong>
                                        <span class="text-danger">- Rs. <?php echo e(number_format($orderItem->product->commission_price * $orderItem->quantity, 2)); ?></span> 
                                    </div>
                                <?php endif; ?>

                                <div class="d-flex justify-content-between mb-2">
                                    <strong>Vendor Share:</strong>
                                    <span class="text-success fs-5 fw-bold">
                                        Rs. <?php echo e(number_format(($orderItem->cost) - (($orderItem->cost * 0.08) + ($orderItem->product->is_affiliate ? $orderItem->product->commission_price * $orderItem->quantity : 0)), 2)); ?>

                                    </span> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-muted text-center">No orders available to display.</p>
                <?php endif; ?>

                <!-- Pagination Controls -->
                <div class="d-flex justify-content-center mt-4">
                    <?php echo e($orders->links()); ?>

                </div>
            </div>


        </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('VendorDashboard.Vendormaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/VendorDashboard/wallet.blade.php ENDPATH**/ ?>