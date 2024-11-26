<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Order List</h2>
    </div>
</div>

<!-- Tabs for Sections -->
<ul class="nav nav-tabs mb-3" id="orderTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link <?php echo e(request('status') === 'All' || !request('status') ? 'active' : ''); ?>" href="<?php echo e(route('vendor.orders', ['status' => 'All'])); ?>">All Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request('status') === 'Pending' ? 'active' : ''); ?>" href="<?php echo e(route('vendor.orders', ['status' => 'Pending'])); ?>">Pending Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request('status') === 'Accepted' ? 'active' : ''); ?>" href="<?php echo e(route('vendor.orders', ['status' => 'Accepted'])); ?>">Accepted Orders</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo e(request('status') === 'Packed' ? 'active' : ''); ?>" href="<?php echo e(route('vendor.orders', ['status' => 'Packed'])); ?>">Packed Orders</a>
    </li>
</ul>

<!-- Order Table -->
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($order->order_code); ?></td>
                            <td><b><?php echo e($order->customer_name); ?></b></td>
                            <td><?php echo e($order->email); ?></td>
                            <td>Rs. <?php echo e(number_format($order->total_cost, 2)); ?></td>
                            <td>
                                <span class="status <?php echo e(strtolower(str_replace(' ', '-', $order->status))); ?>">
                                    <?php echo e($order->status); ?>

                                </span>
                            </td>
                            <td><?php echo e($order->date); ?></td>
                            <td class="text-end">
                                <a href="<?php echo e(route('vendor.order-details', $order->order_code)); ?>" class="btn btn-view btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="8" class="text-center">No orders found for this section.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .status.packed {
        background-color: #0275d8; /* Blue for Packed */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* Pickup Done Status */
    .status.pickup-done {
        background-color: #5bc0de; /* Light Blue for Pickup Done */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* Ready to Ship Status */
    .status.ready-to-ship {
        background-color: #f0ad4e; /* Orange for Ready to Ship */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    /* In Transit Status */
    .status.in-transit {
        background-color: #6f42c1; /* Purple for In Transit */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

<!-- Pagination -->
<div class="pagination-area mt-15 mb-50">
    <?php echo e($orders->links()); ?>

</div>


<script>
function submitForm() {
    document.getElementById('orderSearchForm').submit();
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('VendorDashboard.Vendormaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/VendorDashboard/orders.blade.php ENDPATH**/ ?>