<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">

<body>
    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <section class="content-main">
        <div class="content-header">
            <h2 class="content-title">Report - Affiliate Customer's Bank Details</h2>
        </div>

        <!-- Room Form -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Room Table -->
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="tableData" class="table table-hover display">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>NIC</th>
                                        <th>Bank Name</th>
                                        <th>Branch</th>
                                        <th>Acount Name</th>
                                        <th>Account Number</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $affiliates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$affiliate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($index+1); ?></td>
                                        <td><?php echo e($affiliate->name); ?></td>
                                        <td><?php echo e($affiliate->NIC); ?></td>
                                        <td><?php echo e($affiliate->bank_name); ?></td>
                                        <td><?php echo e($affiliate->branch); ?></td>
                                        <td><?php echo e($affiliate->account_name); ?></td>
                                        <td><?php echo e($affiliate->account_number); ?></td>     
                                        <td><?php echo e(ucfirst($affiliate->status)); ?></td>
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

    <!-- JavaScript to handle delete confirmation -->
    <script>
        $(document).ready(function() {
            var table = $('#tableData').DataTable({
                dom: 'Bfrtip', // Layout for DataTables with Buttons
                buttons: [{
                        extend: 'copyHtml5',
                        footer: true
                    },
                    {
                        extend: 'excelHtml5',
                        footer: true
                    },
                    {
                        extend: 'csvHtml5',
                        footer: true
                    },
                    {
                        extend: 'pdfHtml5',
                        footer: true,
                        title: 'Affiliate Customers bank details Report',
                        customize: function(doc) {
                            // Set a margin for the footer
                            doc.content[1].margin = [0, 0, 0, 20];
                        }
                    },
                    {
                        extend: 'print',
                        footer: true,      
                        title: 'Affiliate Customers Bank Details Report',
                    }
                ],

            });


        });
    </script>



</body>

</html>
<?php $__env->stopSection(); ?>
<<<<<<<< Updated upstream:storage/framework/views/ae77be4909329dd386cb4172cf693b08.php
<?php echo $__env->make('VendorDashboard.Vendormaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esupport_systems\DK-Mart\resources\views/VendorDashboard/Reports/product_report.blade.php ENDPATH**/ ?>
========
<?php echo $__env->make('AdminDashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views/AdminDashboard/Reports/affiliate_cus_bank_data.blade.php ENDPATH**/ ?>
>>>>>>>> Stashed changes:storage/framework/views/39f096ec7aca2ff99ae6aa2f63028ffd.php
