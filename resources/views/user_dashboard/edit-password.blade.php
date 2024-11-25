@extends('layouts.user_sidebar')

@section('dashboard-content')

<style>
        .text-danger { color: #e3342f; }
        .btn-primary { background-color: #ff3c00 !important; border-color:#ff3c00!important; }
        .btn-primary:hover { background-color: #ff3c00 !important; border-color:#ff3c00!important; }
        .form-control:focus, .form-select:focus {
            border-color: hsl(14, 72%, 69%) !important;
            box-shadow: 0 0 0 0.2rem hsla(12, 81%, 40%, 0.251) !important;
        }
    </style>

<div class="container p-3">
    <h4 class="px-2 py-2">Change Password</h4>

    <!-- Success Message -->
    <div class="alert alert-success" id="success-message" style="display: none;">
        Password changed successfully.
    </div>

    <!-- Error Message -->
    <div class="alert alert-danger" id="error-message" style="display: none;">
        An error occurred.
    </div>

    <!-- Change Password Form -->
    <form id="changePasswordForm">
        @csrf
        <div class="mb-3">
            <label for="current_password" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter current password">
        </div>

        <div class="mb-3">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter new password">
        </div>

        <div class="mb-3">
            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Re-enter new password">
        </div>

        <button type="button" class="btn btn-primary" onclick="submitChangePassword()">Change Password</button>
    </form>
</div>

<script>
    function submitChangePassword() {
        // Get form data
        const formData = {
            current_password: document.getElementById('current_password').value,
            new_password: document.getElementById('new_password').value,
            new_password_confirmation: document.getElementById('new_password_confirmation').value,
            _token: '{{ csrf_token() }}',
        };

        // Send POST request to the server
        fetch('{{ route('change-password') }}', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData),
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                document.getElementById('error-message').innerText = data.error;
                document.getElementById('error-message').style.display = 'block';
                document.getElementById('success-message').style.display = 'none';
            } else {
                document.getElementById('success-message').style.display = 'block';
                document.getElementById('error-message').style.display = 'none';
                document.getElementById('changePasswordForm').reset();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('error-message').innerText = 'An unexpected error occurred.';
            document.getElementById('error-message').style.display = 'block';
        });
    }
</script>

<!--
<script>
    function submitChangePassword() {
    // Get form data
    const formData = {
        current_password: document.getElementById('current_password').value,
        new_password: document.getElementById('new_password').value,
        new_password_confirmation: document.getElementById('new_password_confirmation').value,
        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    };

    // Send POST request to server
    fetch('{{ route('change-password') }}', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData),
    })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                // Display error message
                const errorList = document.getElementById('error-list');
                errorList.innerHTML = <li>${data.error}</li>;
                document.getElementById('error-message').style.display = 'block';
            } else {
                document.getElementById('success-message').style.display = 'block'; // Success message
                document.getElementById('error-message').style.display = 'none'; // Hide error message
                document.getElementById('changePasswordForm').reset(); // Reset form
            }
        })
        .catch(error => console.error('Error:', error));
}
</script>
    -->
@endsection

