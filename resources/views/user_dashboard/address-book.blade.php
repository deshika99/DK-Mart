@extends('layouts.user_sidebar')

@section('dashboard-content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Center popup container */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .popup-content {
            background: white;
            padding: 20px;
            border-radius: 25px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .popup-content h2 {
            margin-top: 0;
            text-align: center;
        }
        .form-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            position: relative;
            justify-content: center;
        }
        .form-container .icon-input {
            position: relative;
            width: 95%;
        }
        .form-container .icon-input i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
        }
        .form-container input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border-radius: 25px;
            border: 1px solid #ccc;
            outline: none;
        }
        .close-popup {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 25px;
            color: #333;
        }
        .form-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .form-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .save-btn {
            background-color: #4CAF50;
            color: white;
        }
        .address-card {
            border: 1px solid hsl(12, 96%, 49%);
            background: #f8fbff;
        }
        
        .custom-red-btn {
             color: red !important; /* Text color set to red */
        }
        .btn-primary {
             background-color: #ff3c00 !important;
             border-color:#ff3c00!important;
        }
                
    </style>


<h4 class="px-2 py-2">Address Book</h4>

<button class="mt-3 btn btn-primary" onclick="openPopup()">+ Add New</button>

<!-- Displaying Address Cards -->
<div class="mt-4 row">
    @if(isset($addresses) && $addresses->isNotEmpty())
    @foreach ($addresses as $address)
        <div class="mb-3 col-md-4">
            <div class="card address-card" style="margin-top:20px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 card-title">{{ $address->customer_name }}</h6>
                    </div>
                    <p class="card-text">
                        {{ $address->phone }}<br>
                        {{ $address->email }}<br>
                        {{ $address->house_no }}, {{ $address->apartment }}<br>
                        {{ $address->city }}<br>
                        {{ $address->postal_code }}
                    </p>
                    <div class="d-flex">
                        <button class="btn btn-sm custom-red-btn" onclick="editAddress({{ $address->id }})">Edit</button>
                        <button class="btn btn-sm custom-red-btn" onclick="deleteAddress({{ $address->id }})">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @endif
    
</div>

<script>
// Add Address
$('#addAddressForm').on('submit', function (e) {
    
    e.preventDefault();

    $.ajax({
        url: '/address-book',
        type: 'POST',
        data: $(this).serialize(),
        success: function (response) {
            alert(response.success);
            location.reload(); // Reload page
        },
        error: function (error) {
            console.log(error.responseJSON.errors);
        }
    });
});

// Edit Address
function editAddress(id) {
    $.get(/address-book/${id}/edit, function (data) {
        $('#edit_first_name').val(data.customer_name);
        $('#edit_phone').val(data.phone);
        $('#edit_email').val(data.email);
        $('#edit_address').val(data.house_no);
        $('#edit_apartment').val(data.apartment);
        $('#edit_city').val(data.city);
        $('#edit_postal_code').val(data.postal_code);
        $('#editPopup').show();

        $('#editAddressForm').off('submit').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
                url: /address-book/${id},
                type: 'PUT',
                data: $(this).serialize(),
                success: function (response) {
                    alert(response.success);
                    location.reload();
                }
            });
        });
    });
}

// Delete Address
function deleteAddress(id) {
    if (confirm('Are you sure you want to delete this address?')) {
        $.ajax({
            url: /address-book/${id},
            type: 'DELETE',
            success: function (response) {
                alert(response.success);
                location.reload();
            }
        });
   
    }

}


</script>



@endsection