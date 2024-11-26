<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<body>

<!-- Display Flash Messages -->
<div class="container pt-4 px-4">
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?php echo e(session('error')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
</div>

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Raffle Tickets</h2>
                <p>Create, view, or delete raffle tickets</p>
            </div>
            <div>
                <input type="text" placeholder="Search Raffle Tickets" class="form-control bg-white" />
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Create Raffle Ticket</h4>
                        <form action="<?php echo e(route('tracking_id_store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <label for="tracking_id" class="form-label">User ID <span class="text-danger">*</span></label>
                                <input type="string" id="tracking_id" name="tracking_id" placeholder="Enter user ID" class="form-control" required />
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create Raffle Ticket</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Token</th>
                                        <th>Created At</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $raffleTickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($ticket->id); ?></td>
                                            <td><?php echo e($ticket->token); ?></td>
                                            <td><?php echo e($ticket->created_at->format('Y-m-d')); ?></td>
                                            <td class="text-end">
                                                
                                                <form action="<?php echo e(route('raffletickets.destroy', $ticket->id)); ?>" method="POST" style="display:inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this ticket?')" title="Delete">
                                                        <i class="icon material-icons md-delete"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="main-footer font-xs">
        <div class="row pb-30 pt-15">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear());
                </script>
                &copy; e-support Technologies.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end">All rights reserved</div>
            </div>
        </div>
    </footer>

    <script src="backend/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="backend/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="backend/assets/js/vendors/select2.min.js"></script>
    <script src="backend/assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="backend/assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="backend/assets/js/main.js?v=6.0" type="text/javascript"></script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AffiliateDashBoard.affmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/AffiliateDashBoard/trackingid.blade.php ENDPATH**/ ?>