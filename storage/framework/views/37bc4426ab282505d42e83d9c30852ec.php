<?php $__env->startSection('dashboard-content'); ?>
<style>
    .review-images {
        display: flex;
        gap: 10px;
    }

    .review-images img {
        width: 10%;
        height: auto;
        object-fit: cover;
    }
    .button-tabs {
        display: flex;
        gap: 10px;
    }

    .tab-button {
        padding: 5px 15px;
        border: 1px solid #ced4da;
        background-color: #ffffff;
        color: #6c757d;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tab-button.active,
    .tab-button:hover {
        background-color: white;
        color: rgb(255, 123, 0);
        border-color: rgb(255, 123, 0);
    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }
    
    .btn-review {
        color: orange !important; /* Text color set to orange */
        background-color: white; /* Background color set to white */
        border: 1px solid orange; /* Border set to orange */
        padding: 4px 28px; /* Add padding for button */
        border-radius: 5px; /* Optional: Round the corners */
        text-decoration: none; /* Remove underline */
        font-weight: bold; /* Make text bold */
        font-size: 14px;
        
    }

    /* Optional: Add hover effect */
    .btn-review:hover {
        background-color: white; /* Background color on hover */
        color: orange !important; /* Text color on hover */
    }


</style>

<h4 class="px-2 py-2">My Reviews</h4>
<div class="mt-4 d-flex justify-content-between align-items-center">
    <div class="button-tabs">
        <button class="mb-1 tab-button active" data-target="to-be-reviewed">To be Reviewed (1)</button>
        <button class="mb-1 tab-button" data-target="history">History (0)</button>
    </div>
</div>

<!-- To be reviewed Tab -->
<div id="to-be-reviewed" class="tab-content active">
    <div class="mt-3 order-items">
        <div class="px-3 order-items-list">
            <div class="order-item d-flex align-items-center justify-content-between" style="padding: 10px; border-bottom: 1px solid #eaeaea;">
                <div style="display: flex; align-items: center;">
                    <div style="margin-right: 15px;">
                        <a href="#"><img src="<?php echo e(asset('images/Apple iPhone 14 Pro Max.jpg')); ?>" alt="Product Image" width="70" height="auto"></a>
                    </div>
                    <div style="line-height: 1.7;color:black;">
                        <span style="font-weight: 600; font-size: 15px;margin-top:15px;">Apple iPhone 14 Pro Max</span><br>
                        <div class="d-flex align-items-center">
                            <span class="d-flex align-items-center me-2">
                                <strong>Color:</strong> 
                                <span style="display: inline-block; background-color: #000; border: 1px solid #e8ebec; height: 15px; width: 15px; border-radius: 50%;" title="Color"></span>
                            </span> |
                            <span class="me-2 ms-2">Size: <span style="font-weight: 600;">M</span></span> |
                            <span class="ms-2">Qty: <span style="font-weight: 600;">2</span></span>
                        </div>
                        <h6 class="mt-2" style="font-weight: bold;font-size: 15px">Rs 120000</h6>  
                    </div>
                </div>
                <div class="ml-auto" style="text-align: right;">
                    <a href="<?php echo e(route('Write-Reviews')); ?>" class="btn-review">Review</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
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

<?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esupport_systems\DK-Mart\resources\views/user_dashboard/My-Reviews.blade.php ENDPATH**/ ?>