<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Payments</h2>
    </div>
    
</div>

        <div class="row">
            <!-- Display Total Available Balance -->
            <div class="col-md-6 col-12 mb-4"> 
                <div class="card">
                    <div class="card-body">
                        <p class="mb-3">Total Available Balance</p>
                        <h3 class="mb-6">Rs <?php echo e(number_format($vendorWallet->balance, 2)); ?></h3> 
                    </div>
                </div>
            </div>


            <!-- Withdrawal Box -->
            <div class="col-md-6 col-12 mb-4"> 
                <div class="card">
                    <div class="card-body">
                        <p class="mb-3">Request Payment</p>
                        <p class="mb-2 text-danger">Check your balance; it must be more than LKR 1000 before requesting a payment.</p>
                        <form method="POST" action="<?php echo e(route('vendor.paymentRequest')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <input type="number" name="request_amount" id="request_amount" class="form-control" placeholder="Enter Amount" required>
                            </div>
                            <input type="hidden" name="total" value="<?php echo e($totalBalance); ?>"> 
                            <button type="submit" class="btn btn-primary">Request</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Payment Requests Table -->
        <div class="card">
            <div class="card-body">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-4 mb-2 d-flex align-items-center">
                            <input type="date" id="date" class="form-control" style="font-size: 0.8rem;">
                        </div>
                    </div>

                    <div class="container mt-4 mb-4">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Account Number</th>
                                        <th scope="col">Requested Payment Amount</th>
                                        <th scope="col">Processing Fee</th>
                                        <th scope="col">Paid Amount</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $paymentRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($paymentRequest->requested_at->format('Y-m-d H:i:s')); ?></td>
                                            <td><?php echo e($paymentRequest->account_number); ?></td>
                                            <td>Rs <?php echo e(number_format($paymentRequest->request_amount, 2)); ?></td>
                                            <td>Rs <?php echo e(number_format($paymentRequest->processing_fee, 2)); ?></td>
                                            <td>Rs <?php echo e(number_format($paymentRequest->paid_amount, 2)); ?></td>
                                            <td><?php echo e($paymentRequest->status); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="6" class="text-center">No payment requests found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <!-- Pagination links -->
                            <div class="d-flex justify-content-center">
                                <?php echo e($paymentRequests->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('VendorDashboard.Vendormaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/VendorDashboard/payment_requests.blade.php ENDPATH**/ ?>