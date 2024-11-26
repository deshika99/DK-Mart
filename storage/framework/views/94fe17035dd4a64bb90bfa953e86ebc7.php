<?php $__env->startSection('dashboard-content'); ?>
<style>
    .btn-primary {
        background-color: #ff3c00 !important;
        border-color:#ff3c00!important;
    }
    .form-control:focus, .form-select:focus {
        border-color: hsl(14, 72%, 69%) !important;
        box-shadow: 0 0 0 0.2rem hsla(12, 81%, 40%, 0.251) !important;
    }
</style>

<h4 class="px-2 py-2">Edit Profile</h4>
<div class="container p-4">
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('user.profile.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3 text-left col-md-3">
            <!-- Profile image preview -->
            <img src="<?php echo e($user->profile_image ? asset('uploads/profile_images/' . $user->profile_image) : asset('images/default-user.png')); ?>" 
                 alt="Profile Image" class="rounded-circle" 
                 id="profileImagePreview" 
                 width="120" height="120" 
                 style="cursor: pointer;">
            <!-- Hidden file input for image upload -->
            <input type="file" id="profileImageInput" name="profile_image" accept="image/*" style="display: none;">
        </div>

        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="full_name" value="<?php echo e($user->name); ?>" placeholder="Enter your full name">
        </div>
        
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>" placeholder="Enter your email">
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="phone_num" value="<?php echo e($user->phone); ?>" placeholder="Enter your mobile number">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="date_of_birth" value="<?php echo e($user->dob); ?>">
            </div>
            <div class="mb-3 col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option selected disabled>Select your gender</option>
                    <option value="male" <?php echo e($user->gender === 'male' ? 'selected' : ''); ?>>Male</option>
                    <option value="female" <?php echo e($user->gender === 'female' ? 'selected' : ''); ?>>Female</option>
                    <option value="other" <?php echo e($user->gender === 'other' ? 'selected' : ''); ?>>Other</option>
                </select>
            </div>
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Save Changes</button>
    </form>
</div>

<script>
    const profileImagePreview = document.getElementById('profileImagePreview');
    const profileImageInput = document.getElementById('profileImageInput');

    // Open file input when profile image is clicked
    profileImagePreview.addEventListener('click', function() {
        profileImageInput.click();
    });

    // Preview the selected image
    profileImageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImagePreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DK-Mart\resources\views/user_dashboard/edit-profile.blade.php ENDPATH**/ ?>