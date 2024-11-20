<?php $__env->startSection('content'); ?>

<div class="content-header">
    <h2 class="content-title">Profile setting</h2>
</div>
<div class="card">
    <div class="card-body">
        <div class="row gx-5">
            <aside class="col-lg-3 border-end">
                <nav class="nav nav-pills flex-lg-column mb-4">
                    <a class="nav-link active" id="general-tab" href="#" onclick="showSection('general')">General</a>
                    <a class="nav-link" id="password-tab" href="#" onclick="showSection('password')">Password</a>
                </nav>
            </aside>
            <div class="col-lg-9">
                <section class="content-body p-xl-4">
                    <!-- General Section -->
                    <form id="generalSection">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row gx-3">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">First name</label>
                                        <input class="form-control" type="text" placeholder="Type here" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Last name</label>
                                        <input class="form-control" type="text" placeholder="Type here" />
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email" placeholder="example@mail.com" />
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Phone</label>
                                        <input class="form-control" type="tel" placeholder="+1234567890" />
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" type="text" placeholder="Type here" />
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Birthday</label>
                                        <input class="form-control" type="date" />
                                    </div>
                                </div>
                            </div>
                            <aside class="col-lg-4">
                                <figure class="text-lg-center">
                                    <img class="img-lg mb-3 img-avatar" src="<?php echo e(asset('/backend/assets/imgs/people/avatar-1.png')); ?>" alt="User Photo" />
                                    <figcaption>
                                        <a class="btn btn-light rounded font-md" href="#"> <i class="icons material-icons md-backup font-md"></i> Upload </a>
                                    </figcaption>
                                </figure>
                            </aside>
                        </div>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>

                    <!-- Password Section -->
                    <form id="passwordSection" style="display: none;">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password" />
                                        <span class="input-group-text" onclick="togglePasswordVisibility('currentPassword', this)">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password" />
                                        <span class="input-group-text" onclick="togglePasswordVisibility('newPassword', this)">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password" />
                                        <span class="input-group-text" onclick="togglePasswordVisibility('confirmPassword', this)">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Save Password</button>
                            </div>
                        </div>
                    </form>

                    <hr class="my-5" />
                    <div class="row" style="max-width: 920px">
                        <div class="col-md">
                            <article class="box mb-3 bg-light">
                                <a class="btn float-end btn-light rounded btn-sm font-md" href="#">Deactivate</a>
                                <h6>Remove account</h6>
                                <small class="text-muted d-block" style="width: 70%">Once you delete your account, there is no going back.</small>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    // Toggle between General and Password sections
    function showSection(section) {
        if (section === 'general') {
            document.getElementById('generalSection').style.display = 'block';
            document.getElementById('passwordSection').style.display = 'none';
            document.getElementById('general-tab').classList.add('active');
            document.getElementById('password-tab').classList.remove('active');
        } else if (section === 'password') {
            document.getElementById('generalSection').style.display = 'none';
            document.getElementById('passwordSection').style.display = 'block';
            document.getElementById('password-tab').classList.add('active');
            document.getElementById('general-tab').classList.remove('active');
        }
    }

    // Toggle password visibility
    function togglePasswordVisibility(inputId, iconElement) {
        const input = document.getElementById(inputId);
        const icon = iconElement.querySelector('i');
        
        if (input.type === "password") {
            input.type = "text";
            icon.classList.replace("fa-eye", "fa-eye-slash");
        } else {
            input.type = "password";
            icon.classList.replace("fa-eye-slash", "fa-eye");
        }
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminDashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views\AdminDashboard\profile.blade.php ENDPATH**/ ?>