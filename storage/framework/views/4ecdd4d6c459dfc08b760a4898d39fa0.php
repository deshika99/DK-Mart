<header class="main-header navbar shadow-sm">
    <div class="col-search">
        <form class="searchform">
            <div class="input-group">
                <input list="search_terms" type="text" class="form-control" placeholder="Search term" />
                <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
            </div>
            <datalist id="search_terms">
                <option value="Products"></option>
                <option value="New orders"></option>
                <option value="Apple iphone"></option>
                <option value="Ahmed Hassan"></option>
            </datalist>
        </form>
    </div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link btn-icon" href="#">
                    <i class="material-icons md-notifications animation-shake"></i>
                    <span class="badge rounded-pill">3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
            </li>
            <li class="dropdown nav-item" style="position: relative;">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false">
                    <img class="img-xs rounded-circle" 
                        src="<?php echo e(asset('storage/user_images/' . session('image', 'default-user.png'))); ?>" 
                        alt="User" />
                </a>
                <div class="dropdown-menu" style="left: -100px;" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                        <i class="material-icons md-perm_identity"></i> Edit Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                        <i class="material-icons md-exit_to_app"></i> Logout
                    </a>
                    <!-- Hidden logout form -->
                    <form id="admin-logout-form" action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</header><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views/AdminDashboard/Header.blade.php ENDPATH**/ ?>