<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DK-Mart Vendor Registration</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/assets/images/web-app-manifest-192x192.png')); ?>">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets1/css/main.css?v=6.0')); ?>">
    
    <!-- Inline Custom CSS -->
    <style>
        body {
            background-color: #f4f4f9;
        }

        .login_wrap {
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        select:focus {
            border-color: #007bff;
        }

        input[type="checkbox"] {
            height: 18px;
            width: 18px;
            margin-right: 10px;
        }

    </style>
</head>
<body>
    <main class="main pages">
        <!-- Page Header -->
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Register Page
                </div>
            </div>
        </div>

        <!-- Registration Form -->
        <div class="page-content pt-50 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="login_wrap widget-taber-content bg-white">
                            <div class="padding_eight_all ">
                                <div class="heading_s1 text-center">
                                    <h3>Create a Vendor Account</h3>
                                    <p class="mb-30">Already have an account? <a href="<?php echo e(route('vendor_login')); ?>">Login</a></p>
                                </div>
                                <form method="POST" action="<?php echo e(route('vendor_register.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <!-- Basic Information Section -->
                                    <h4>Basic Information</h4>
                                    <hr>

                                    <div class="form-group">
                                        <label for="name">Name <i class="text-danger">*</i></label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required />
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address <i class="text-danger">*</i></label>
                                        <input type="text" id="address" name="address" placeholder="Enter your address" required />
                                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email Address <i class="text-danger">*</i></label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email address" required />
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone_num">Phone Number <i class="text-danger">*</i></label>
                                        <input type="text" id="phone_num" name="phone_num" placeholder="Enter your phone number" required />
                                        <?php $__errorArgs = ['phone_num'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password <i class="text-danger">*</i></label>
                                        <input type="password" id="password" name="password" placeholder="Enter your password" required />
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password <i class="text-danger">*</i></label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required />
                                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" id="terms" name="terms" required />
                                        <label for="terms">
                                            I agree to the <a href="/terms" target="_blank">Terms of Service</a> and <a href="/privacy" target="_blank">Privacy Policy</a>.
                                        </label>
                                        <?php $__errorArgs = ['terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="form-group mb-30">
                                        <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold">Submit & Register</button>
                                    </div>

                                    <p class="text-muted"><strong>Note:</strong> Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Vendor JS-->
    <script src="<?php echo e(asset('backend/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/js/vendor/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\esupport_systems\DK-Mart\resources\views/VendorDashboard/vendor_register.blade.php ENDPATH**/ ?>