<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DK-Mart</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('backend/assets/favicon.ico')); ?>" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


        <script src="<?php echo e(asset('backend/assets/js/vendors/color-modes.js')); ?>"></script>
        <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/main.css')); ?>">


    </head>

    <body>
        <div class="screen-overlay"></div>
        
        <?php echo $__env->make('AdminDashboard.Sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <main class="main-wrap">

            <?php echo $__env->make('AdminDashboard.Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
            <section class="content-main">
            <?php echo $__env->yieldContent('content'); ?>


            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    <?php if(session('success')): ?>
                        Swal.fire({
                            title: 'Success!',
                            text: "<?php echo e(session('success')); ?>",
                            icon: 'success',
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer);
                                toast.addEventListener('mouseleave', Swal.resumeTimer);
                            }
                        });
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                        Swal.fire({
                            title: 'Error!',
                            text: "<?php echo e(session('error')); ?>",
                            icon: 'error',
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer);
                                toast.addEventListener('mouseleave', Swal.resumeTimer);
                            }
                        });
                    <?php endif; ?>
                });

                function confirmDelete(formId, message) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: message || "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById(formId).submit();
                        }
                    });
                }
            </script>

   
            </section>

            <footer class="main-footer font-xs">
                <div class="row pb-30 pt-15">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end"> <script>
                            document.write(new Date().getFullYear());
                        </script>
                        &copy; All rights reserved</div>
                    </div>
                </div>
            </footer>
        </main>
        <!-- Include Vendor Scripts -->
        <script src="<?php echo e(asset('backend/assets/js/vendors/jquery-3.6.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/js/vendors/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/js/vendors/select2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/js/vendors/perfect-scrollbar.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/js/vendors/jquery.fullscreen.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/js/vendors/chart.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- Main Script -->
        <script src="<?php echo e(asset('backend/assets/js/main.js?v=6.0')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('backend/assets/js/custom-chart.js')); ?>" type="text/javascript"></script>
        

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\esupport_systems\DK-Mart\resources\views/AdminDashboard/master.blade.php ENDPATH**/ ?>