

<?php $__env->startSection('dashboard-content'); ?>
<style>
/* Tab Buttons */
.button-tabs {
    display: flex;
    gap: 10px;
}

.tab-button {
    border: 1px solid #dad4ce;
    background-color: #ffffff;
    color: #110f0f;
    border-radius: 20px;
    padding: 5px 15px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tab-button.active,
.tab-button:hover {
    background-color: white;
    color: rgb(255, 123, 0);
    border-color: rgb(255, 123, 0);
}

.tab-button.active {
    font-weight: bold;
    color: rgb(255, 123, 0);
}

/* Custom Select Dropdown */
.custom-select {
    border: 1px solid #ced4da; 
    border-radius: 5px; 
    padding: 4px 13px; 
    background-color: #ffffff; 
    font-size: 14px; 
    width: 150px;
    color: #495057; 
    transition: border-color 0.2s ease-in-out;
}

.custom-select:focus {
    border-color: hsl(7, 94%, 50%);
    box-shadow: 0 0 5px hsla(17, 98%, 51%, 0.251); 
    outline: none; 
}

.custom-select option {
    color: #495057; 
}
.status.confirmed {
    background-color: #fff5d7;
    color: #d7a200;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 13px;
    font-weight: bold;
}
.btn-sm{
    color: #0a0a0a !important; /* Text color set to orange */
    background-color: white!important; /* Background color set to white */
    border: 1px solid #0a0a0a!important; /* Border set to orange */
    padding: 4px 28px!important; /* Add padding for button */
    border-radius: 5px!important; /* Optional: Round the corners */
    text-decoration: none!important; /* Remove underline */
    font-size: 14px!important;
        
    }

    /* Optional: Add hover effect */
    .btn-sm {
        background-color: white!important; /* Background color on hover */
        color: #0a0a0a !important; /* Text color on hover */
    }




</style>

<h4 class="px-2 py-2">My Orders</h4>
<div class="mt-4 d-flex justify-content-between align-items-center"style="margin-bottom: 25px;">
    <div class="button-tabs" >
        <button class="mb-1 tab-button active" data-target="all-orders">All Orders</button>
        <button class="mb-1 tab-button" data-target="in-progress-orders">In Progress</button>
        <button class="mb-1 tab-button" data-target="shipped-orders">Shipped</button>
        <button class="mb-1 tab-button" data-target="delivered-orders">Delivered</button>
    </div>
    <div class="mb-3 order-filter ms-auto">
        <select class="form-select custom-select" aria-label="Order Time Filter">
            <option value="all" selected>All</option>
            <option value="last_year">Last Year</option>
            <option value="last_6_months">Last 6 Months</option>
            <option value="last_2_years">Last 2 Years</option>
        </select>
    </div>
</div>
<!-- All Orders Tab -->
<div id="all-orders" class="tab-content active">
    <!-- First Order Card -->
    <div class="order-card"style="border: 1px solid #ccc; border-radius: 10px; padding: 15px;">
        <div class="order-card-header d-flex justify-content-between align-items-center" style="margin-bottom:20px;border-bottom: 1px solid #eaeaea;">
            <span class="status confirmed" style="margin-bottom: 10px;">Confirmed</span>
            <a href="#" class="order-details-link" style="margin-bottom: 10px;">Order Details ></a>
        </div>
        
        <div class="order-card-body d-flex align-items-center">
            <div class="order-image" style="position: relative; margin-right: 15px;">
                <img src="<?php echo e(asset('images/Apple iPhone 14 Pro Max.jpg')); ?>" alt="Product Image" style="width: 70px; height: 80px; ">
                <span class="additional-count" style="position: absolute; bottom: 0px; right: 0px; background: rgba(0, 0, 0, 0.3); color: white; padding: 5px; border-radius: 5px;">+1</span>
            </div>
            <div class="order-info"style="font-size: 13px;;color:black;">
                <p><a href="#" class="order-link">Order ID:</a> <a href="#" class="order-link">ORD-3bd036e9</a></p>
                <p class="order-date">Order date: 2024-11-12</p>
                <p class="order-summary">Yara Floral Printed Black Dress | Yara Floral Printed Black Dress</p>
                <p class="order-price">Rs 9300.00</p>
            </div>
            <div style="text-align: right; margin-left: auto;">
                <button class="btn btn-outline-dark btn-sm" onclick="openCancelModal('ORD-3bd036e9')">Cancel</button>
            </div>
        </div>
    </div>

   

    <!-- Pagination -->
    <div class="mt-3 pagination d-flex justify-content-center">
        <button class="btn btn-primary">1</button>
    </div>
</div>
<!-- Cancel Confirmation Modal -->
<div class="modal fade" id="cancel-confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Confirm Cancellation</h5>
            </div>
            <div class="modal-body">
                Are you sure you want to cancel this order?
            </div>
            <div class="modal-footer">
                <button type="button" id="confirm-cancel" class="btn btn-success" style="font-size: 13px">Confirm</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="font-size: 13px">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openCancelModal() {
        var modal = new bootstrap.Modal(document.getElementById('cancel-confirmation-modal'));
        modal.show();
    }

    document.getElementById('confirm-cancel').onclick = function() {
        alert('Order cancelled successfully');
        var modal = bootstrap.Modal.getInstance(document.getElementById('cancel-confirmation-modal'));
        modal.hide();
    };

    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

            this.classList.add('active');
            document.getElementById(this.getAttribute('data-target')).classList.add('active');
        });
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views/user_dashboard/my-orders.blade.php ENDPATH**/ ?>