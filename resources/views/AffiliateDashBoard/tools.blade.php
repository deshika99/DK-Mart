@extends ('AffiliateDashBoard.affmaster')

@section('content')

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Tools</h2>
        <p>You Can Genarate Your Affilate Links using This Tools page</p>
    </div>
    
</div>

<!-- Main Content: Tool Form -->
<section class="tool-content pt-4">
    <div class="tool-form-container">
        <h2>Generate Your Affiliate Link</h2>
        <form class="tool-form" id="affiliateForm" action="{{ route('genarate_tracking_Link') }}" method="post">
            @csrf <!-- Laravel CSRF token -->

            <!-- Product URL Input -->
            <div class="form-group">
                <label for="product-link">Enter Product URL:</label>
                <input type="url" id="product-link" name="product_url" placeholder="https://example.com/product" required>
            </div>

            <!-- Tracking ID Dropdown -->
            <div class="form-group">
                <label for="tracking-id">Select Tracking ID:</label>
                <select id="tracking-id" name="tracking_id">
                    @foreach($trackingIds as $trackingId)
                        <option value="{{ $trackingId->token }}">
                            {{ $trackingId->token }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Generate Button -->
            <div style="display: flex; justify-content: center;">
                <button type="submit" id="generate-btn" class="btn btn-secondary btn-sm" style="font-size: 0.9rem; width: 100%;">Generate Affiliate Link</button>
            </div> 
        </form>

        <!-- Output Section -->
        <div class="generated-link">
            <h3>Your Affiliate Link:</h3>

            <!-- Check if the session contains the generated link -->
            @if(session('generated_link'))
                <p id="output-link">{{ session('generated_link') }}</p>
            @else
                <p id="output-link">No link generated yet.</p>
            @endif
        </div>
    </div>
</section>

<!-- Custom Styling for Tools Page -->
<style>
    /* Reuse the styling from your previous code */
    .tool-content {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .tool-form-container {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }

    .tool-form-container h2 {
        font-size: 22px;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 16px;
        margin-bottom: 5px;
        color: #333;
    }

    .form-group input, .form-group select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus, .form-group select:focus {
        border-color: #f39c12;
    }

    button#generate-btn {
        padding: 10px 15px;
        font-size: 16px;
        color: white;
        background-color: #bd0f0f;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button#generate-btn:hover {
        background-color: #a00d0d;
    }

    .generated-link {
        margin-top: 30px;
    }

    .generated-link h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }

    .generated-link p {
        font-size: 16px;
        background-color: #f9f9f9;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #555;
        word-wrap: break-word;
    }
</style>

@endsection
