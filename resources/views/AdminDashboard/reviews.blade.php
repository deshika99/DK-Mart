@extends ('AdminDashboard.master')

@section('content')

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Reviews</h2>
    </div>
    <div>
        <input type="text" placeholder="Search by name" class="form-control bg-white" />
    </div>
</div>
<div class="card mb-4">
    <header class="card-header">
        <!-- Nav tabs for Published and Pending -->
        <ul class="nav nav-tabs" id="reviewTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="published-tab" data-bs-toggle="tab" data-bs-target="#published" type="button" role="tab" aria-controls="published" aria-selected="true">Published</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Pending</button>
            </li>
        </ul>
    </header>
    <!-- card-header end// -->

    <div class="card-body">
        <!-- Tab content -->
        <div class="tab-content" id="reviewTabContent">
            <!-- Published Tab -->
            <div class="tab-pane fade show active" id="published" role="tabpanel" aria-labelledby="published-tab">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </th>
                                <th>#ID</th>
                                <th>Product</th>
                                <th>Reviewer</th>
                                <th>Review</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>1</td>
                                <td><b>Organic Quinoa, Brown, & Red Rice</b></td>
                                <td>Devon Lane</td>
                                <td>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                </td>
                                <td>10.03.2020</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td class="text-end">
                                    <form action="" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pending Tab -->
            <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                            </th>
                            <th>#ID</th>
                            <th>Product</th>
                            <th>Reviewer</th>
                            <th>Review</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                            </td>
                            <td>2</td>
                            <td><b>Pure Coconut Oil</b></td>
                            <td>Jane Doe</td>
                            <td>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star-half-alt" style="color: gold;"></i>
                                <i class="far fa-star" style="color: gold;"></i>
                            </td>
                            <td>15.05.2021</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" id="actionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionDropdown" style="z-index: 1000;">
                                        <li>
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); showApprovalModal('2');">
                                                Publish
                                            </a>
                                        </li>
                                        <li>
                                            <form action="" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this review?');">
                                                    Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        </div>
        <!-- tab-content//end -->
    </div>
    <!-- card-body end// -->
</div>

<div class="pagination-area mt-30 mb-50">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
            <li class="page-item active"><a class="page-link" href="#">01</a></li>
            <li class="page-item"><a class="page-link" href="#">02</a></li>
            <li class="page-item"><a class="page-link" href="#">03</a></li>
            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">16</a></li>
            <li class="page-item">
                <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
            </li>
        </ul>
    </nav>
</div>


<!-- Approval Modal -->
<div class="modal fade" id="approvalModal" tabindex="-1" aria-labelledby="approvalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approvalModalLabel">Confirm Approval</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to approve this review?
            </div>
            <div class="modal-footer">
                <form id="approveReviewForm" action="" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Approve</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showApprovalModal(reviewId) {
        const approveForm = document.getElementById('approveReviewForm');
        // Set the form action with the review ID for approval (example URL)
        approveForm.action = `/admin/reviews/${reviewId}/approve`;
        // Show the modal
        const modal = new bootstrap.Modal(document.getElementById('approvalModal'));
        modal.show();
    }
</script>


@endsection
