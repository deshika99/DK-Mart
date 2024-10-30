@extends ('AdminDashboard.master')

@section('content')

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Company Details</h2>
    </div>
    <div>
        <a href="#" class="btn btn-light rounded font-md">Export</a>
        <a href="#" class="btn btn-light rounded font-md">Import</a>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <form id="generalSection">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row gx-3">
                        <div class="col-6 mb-3">
                            <label class="form-label">Title</label>
                            <input class="form-control" type="text" placeholder="Type here" />
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label">Address</label>
                            <input class="form-control" type="text" placeholder="Type here" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="email" placeholder="example@mail.com" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Contact</label>
                            <input class="form-control" type="tel" placeholder="+1234567890" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Website</label>
                            <input class="form-control" type="text" placeholder="Type here" />
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Footer Text</label>
                            <input class="form-control" type="text" placeholder="Type here" />
                        </div>
                        <div class="col-lg-6 mb-3 text-center">
                            <!-- Logo Preview -->
                            <div>
                                <img id="logoPreview" src="{{ asset('/backend/assets/imgs/placeholder-logo.png') }}" 
                                     alt="Logo Preview" class="img-fluid mb-3" style="max-height: 150px;">
                            </div>
                            <!-- Logo Upload Input -->
                            <input class="form-control" type="file" accept="image/*" 
                                   onchange="previewLogo(event)" />
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save changes</button>
        </form>
    </div>
</div>

<script>
    function previewLogo(event) {
        const logoPreview = document.getElementById('logoPreview');
        const file = event.target.files[0];
        
        if (file) {
            logoPreview.src = URL.createObjectURL(file);
        }
    }
</script>

@endsection
