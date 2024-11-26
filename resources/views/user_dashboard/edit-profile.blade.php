@extends('layouts.user_sidebar')

@section('dashboard-content')
<style>
    .btn-primary {
        background-color: #ff3c00 !important;
        border-color:#ff3c00!important;
    }
     /* Text field focus border color */
     .form-control:focus, .form-select:focus {
        border-color: hsl(14, 72%, 69%) !important;
        box-shadow: 0 0 0 0.2rem hsla(12, 81%, 40%, 0.251) !important;
    }
</style>


<h4 class="px-2 py-2">Edit Profile</h4>
<div class="container p-4">
    <form action="#" method="" enctype="multipart/form-data">
        
        <div class="mb-3 text-left col-md-3">
            <!-- Profile image preview -->
            <img src="{{ asset('images/default-user.png') }}" alt="Default Profile Image" class="rounded-circle" id="profileImagePreview" width="120" height="120" style="cursor: pointer;">
            
            <!-- Hidden file input for image upload -->
            <input type="file" id="profileImageInput" name="profile_image" accept="image/*" style="display: none;">
        </div>

        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter your full name">
        </div>
        
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3 col-md-6">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="phone_num" placeholder="Enter your mobile number">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" name="date_of_birth">
            </div>
            <div class="mb-3 col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option selected disabled>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
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

@endsection
