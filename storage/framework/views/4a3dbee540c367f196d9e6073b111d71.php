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


<style>
    .table thead {
        background-color: #f9f9f9; 
    }

    .form-controls {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .form-controls .btn {
        font-size: 10px;
    }
</style>  

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Tracking Reports</h2>
        <p>Whole data about your business here</p>
    </div>
    
</div>

<main style="margin-top: 20px">
    <div class="container pt-4 px-4"> 

        <div class="card">
            <div class="card-body">
                <div class="tab-pane fade show active" role="tabpanel">
                    <div class="row align-items-center mb-3 ms-2">
                        <div class="col-md-3 mb-2">
                            <form action="<?php echo e(route('traffic_report')); ?>" method="GET">
                                <label for="tracking_id" class="form-label" style="font-size: 0.8rem;">Select Tracking ID</label>
                                <select id="tracking_id" name="raffle_ticket_id" class="form-select" style="font-size: 0.8rem;">
                                    <option value="" selected>All Tracking IDs</option>
                                    <?php $__currentLoopData = $raffleTickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ticket->id); ?>" <?php echo e(request('raffle_ticket_id') == $ticket->id ? 'selected' : ''); ?>>
                                            <?php echo e($ticket->token); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                        </div>
                    </div>

                    <div class="form-controls mb-3 ms-3">
                        <button type="submit" class="btn btn-primary">View</button>
                        <a href="<?php echo e(route('traffic_report')); ?>" class="btn btn-secondary">Reset</a>
                    </div>
                    </form>

                    <div class="container mt-5 mb-4">
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Raffle Ticket</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">View Count</th>
                                        <th scope="col">Referral Count</th>
                                        <th scope="col">Affiliate Commission (LKR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $affiliateReferrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <!-- Raffle Ticket Token -->
                                            <td><?php echo e($referral->raffleTicket ? $referral->raffleTicket->token : 'N/A'); ?></td>

                                            <!-- Product Name -->
                                            <td><?php echo e($referral->product_name); ?></td>

                                            <!-- View Count -->
                                            <td><?php echo e($referral->views_count); ?></td>

                                            <!-- Referral Count -->
                                            <td><?php echo e($referral->referral_count); ?></td>

                                            <!-- Affiliate Commission -->
                                            <td><?php echo e($referral->total_affiliate_price); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="6" class="text-center">No traffic data available for this customer.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AffiliateDashBoard.affmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esupport_systems\DK-Mart\resources\views/AffiliateDashBoard/reports.blade.php ENDPATH**/ ?>