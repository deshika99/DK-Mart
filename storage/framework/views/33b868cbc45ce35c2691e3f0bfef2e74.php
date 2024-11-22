<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div>
        <h2 class="content-title card-title">Order List</h2>
    </div>
</div>
<div class="card mb-4">
<header class="card-header">
    <form action="<?php echo e(route('vendor.orders')); ?>" method="GET" id="orderSearchForm">
        <div class="row gx-3">
            <div class="col-lg-4 col-md-6 me-auto">
                <input type="text" name="order_code" placeholder="Search order ID" class="form-control" value="<?php echo e(request('order_code')); ?>" oninput="submitForm()"/>
            </div>
            <div class="col-lg-2 col-6 col-md-3">
                <select name="status" class="form-select" onchange="submitForm()">
                    <option value="All" <?php echo e(request('status') == 'All' ? 'selected' : ''); ?>>All</option>
                    <option value="Pending" <?php echo e(request('status') == 'Confirmed' ? 'selected' : ''); ?>>Pending</option>
                    <option value="Accepted" <?php echo e(request('status') == 'Paid' ? 'selected' : ''); ?>>Accepted</option>
                    <option value="Shipped" <?php echo e(request('status') == 'Shipped' ? 'selected' : ''); ?>>Shipped</option>
                    <option value="Delivered" <?php echo e(request('status') == 'Delivered' ? 'selected' : ''); ?>>Delivered</option>
                </select>
            </div>
        </div>
    </form>
</header>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col" class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($order->order_code); ?></td>
                            <td><b><?php echo e($order->customer_name); ?></b></td>
                            <td><?php echo e($order->email); ?></td>
                            <td>Rs. <?php echo e(number_format($order->total_cost, 2)); ?></td>
                            <td>
                                <span class="status 
                                    <?php echo e(strtolower(str_replace(' ', '-', $order->status))); ?>">
                                    <?php echo e($order->status); ?>

                                </span>
                            </td>
                            <td><?php echo e($order->date); ?></td>
                            <td class="text-end">
                                <div>
                                    <a href="<?php echo e(route('vendor.order-details', $order->order_code)); ?>" class="btn btn-view btn-sm me-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form id="deleteForm<?php echo e($order->id); ?>" action="<?php echo e(route('vendor.order.delete', $order->id)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('deleteForm<?php echo e($order->id); ?>', 'Are you sure you want to delete this order?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="pagination-area mt-15 mb-50">
    <?php echo e($orders->links()); ?>

</div>

<script>
function submitForm() {
    document.getElementById('orderSearchForm').submit();
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('VendorDashboard.Vendormaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esupport_systems\DK-Mart\resources\views/VendorDashboard/orders.blade.php ENDPATH**/ ?>