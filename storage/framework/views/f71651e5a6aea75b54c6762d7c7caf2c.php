

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3 class="text-center text-primary mb-4">Review Details</h3>

                <div class="mb-4">
                    <h5 class="text-secondary mb-1">Reviewer</h5>
                    <?php if($review->is_anonymous): ?>
                    <p>Anonymous</p>
                    <?php else: ?>
                    <p class="text-muted"><?php echo e($review->reviewer->name); ?></p>
                    <p class="text-muted"><?php echo e($review->reviewer->phone); ?></p>
                    <p class="text-muted"><?php echo e($review->reviewer->email); ?></p>
                    <?php endif; ?>

                </div>

                <div class="mb-4">
                    <h5 class="text-secondary mb-1">Product</h5>
                    <p class="text-muted"><?php echo e($review->product->product_id); ?></p>
                    <p class="text-muted"><?php echo e($review->product->product_name); ?></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-secondary mb-1">Rating & Review</h5>
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <i class="<?php echo e($review->rating >= $i ? 'fa-star fas filled' : 'far fa-star'); ?>" style="color: gold;"></i>
                        <?php endfor; ?>
                        <br />
                        <p class="text-muted"><?php echo e($review->review ?? 'No review available.'); ?></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-secondary mb-1">Date</h5>
                    <p class="text-muted"><?php echo e($review->created_at->format('d.m.Y')); ?></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-secondary mb-1">Review Media</h5>
                    <div class="d-flex flex-wrap mt-2">
                        <?php
                        $mediaFiles = is_string($review->media) ? json_decode($review->media, true) : $review->media;
                        ?>

                        <?php if(!empty($mediaFiles)): ?>
                        <?php $__currentLoopData = $mediaFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(in_array(pathinfo($media, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])): ?>
                        <!-- Display Image -->
                        <div class="me-2 mb-2">
                            <img src="<?php echo e(asset('storage/' . $media)); ?>" alt="Review Media" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <?php elseif(in_array(pathinfo($media, PATHINFO_EXTENSION), ['mp4', 'avi', 'mov', 'webm'])): ?>
                        <!-- Display Video -->
                        <div class="me-2 mb-2">
                            <video controls class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
                                <source src="<?php echo e(asset('storage/' . $media)); ?>" type="video/<?php echo e(pathinfo($media, PATHINFO_EXTENSION)); ?>">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <?php else: ?>
                        <!-- Unsupported Media -->
                        <div class="me-2 mb-2">
                            <span class="badge bg-warning">Unsupported Media Type</span>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <p>No media available for this review.</p>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="mb-4">
                    <h5 class="text-secondary mb-1">Status</h5>
                    <span class="badge 
                        <?php if($review->status == 'Pending'): ?>
                            bg-warning
                        <?php elseif($review->status == 'Rejected'): ?>
                            bg-danger
                        <?php else: ?>
                            bg-success
                        <?php endif; ?>
                    ">
                        <?php echo e($review->status); ?>

                    </span>
                </div>

                <div class="mb-4 col-md-6">
                    <h5 class="text-secondary mb-1">Change Status</h5>
                    <form action="<?php echo e(route('reviews.updateStatus', $review->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="form-group">
                            <select name="status" class="form-select" onchange="this.form.submit()">
                                <option value="Pending" <?php echo e($review->status == 'Pending' ? 'selected' : ''); ?>>Pending</option>
                                <option value="Published" <?php echo e($review->status == 'Published' ? 'selected' : ''); ?>>Published</option>
                                <option value="Rejected" <?php echo e($review->status == 'Rejected' ? 'selected' : ''); ?>>Rejected</option>
                            </select>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('AdminDashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views/AdminDashboard/review_details.blade.php ENDPATH**/ ?>