@extends('layouts.user_sidebar')

@section('dashboard-content')

    <style>
        .text-danger {
            color: #e3342f;
        }
        .btn-primary {
            background-color: #ff3c00 !important;
            border-color:#ff3c00!important;
        }
        .btn-primary:hover {
            background-color: #ff3c00 !important;
            border-color:#ff3c00!important;
        }
    
     /* Text field focus border color */
        .form-control:focus, .form-select:focus {
            border-color: hsl(14, 72%, 69%) !important;
            box-shadow: 0 0 0 0.2rem hsla(12, 81%, 40%, 0.251) !important;
        }
    </style>

<div class="container p-3">
    <h4 class="px-2 py-2">Change Password</h4>

    <!-- Success Message Placeholder -->
    <div class="alert alert-success" id="success-message" style="display: none;">
        Password changed successfully.
    </div>

    <form id="changePasswordForm">
        <div class="mb-3 position-relative">
            <label for="current_password" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current password">
            <span class="text-danger" id="current_password_error" style="display: none;">Please enter your current password.</span>
        </div>

        <div class="mb-3 position-relative">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New password">
            <span class="text-danger" id="new_password_error" style="display: none;">Please enter a new password.</span>
        </div>

        <div class="mb-3 position-relative">
            <label for="new_password_confirmation" class="form-label">Retype New Password</label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Retype new password">
            <span class="text-danger" id="new_password_confirmation_error" style="display: none;">Passwords do not match.</span>
        </div>

        <button type="button" class="mt-3 btn btn-primary" onclick="validateForm()">Change Password</button>
    </form>
</div>

<script>
    function validateForm() {
        // Hide all previous error messages
        document.getElementById("current_password_error").style.display = "none";
        document.getElementById("new_password_error").style.display = "none";
        document.getElementById("new_password_confirmation_error").style.display = "none";

        let isValid = true;

        // Get input values
        const currentPassword = document.getElementById("current_password").value;
        const newPassword = document.getElementById("new_password").value;
        const newPasswordConfirmation = document.getElementById("new_password_confirmation").value;

        // Validate inputs
        if (!currentPassword) {
            document.getElementById("current_password_error").style.display = "block";
            isValid = false;
        }
        if (!newPassword) {
            document.getElementById("new_password_error").style.display = "block";
            isValid = false;
        }
        if (newPassword !== newPasswordConfirmation) {
            document.getElementById("new_password_confirmation_error").style.display = "block";
            isValid = false;
        }

        // Show success message if form is valid
        if (isValid) {
            document.getElementById("success-message").style.display = "block";
        }
    }
</script>
@endsection
