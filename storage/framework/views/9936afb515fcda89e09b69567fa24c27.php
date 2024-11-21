<?php $__env->startSection('content'); ?>

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Affiliate Customers</h2>
    </div>
    <div>
        <a href="#" class="btn btn-light rounded font-md">Export</a>
        <a href="#" class="btn btn-light rounded font-md">Import</a>
    </div>
</div>

<div class="card mb-4">
    <header class="card-header">
        <div class="row align-items-center">
            <div class="col-md-2 col-6">
                <input type="date" value="02.05.2021" class="form-control" />
            </div>
        </div>
    </header>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td></td> 
                                <td class="text-end">
                                    <a href="<?php echo e(route ('Affiliatecustomer-details')); ?>" class="btn btn-view btn-sm me-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>                                  
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- .col// -->
        </div>
        <!-- .row // -->
    </div>

    <!-- card-body end// -->
</div>
<!-- card end// -->
<div class="pagination-area mt-30 mb-50">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
           
        </ul>
    </nav>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminDashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views\AdminDashboard\affiliate_customers.blade.php ENDPATH**/ ?>