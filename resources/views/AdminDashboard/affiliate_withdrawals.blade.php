@extends ('AdminDashboard.master')

@section('content')

<div class="content-header">
    <div>
        <h2 class="content-title card-title">Affiliate withdrawals</h2>
    </div>
</div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active fw-bold" id="completed-tab" data-bs-toggle="tab" href="#completed" role="tab" aria-controls="completed" aria-selected="true">Completed Payments</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link fw-bold" id="pending-tab" data-bs-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="false">
                    Pending Payments (1)
                </a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <!-- Completed Tab -->
            <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                <div class="card mt-1">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Withdraw Amount</th>
                                        <th>Bank Name</th>
                                        <th>Branch</th>
                                        <th>Account Name</th>
                                        <th>Account No.</th>
                                        <th>Requested Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Tab -->
            <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                <div class="card mt-1">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Withdraw Amount</th>
                                        <th>Bank Name</th>
                                        <th>Branch</th>
                                        <th>Account Name</th>
                                        <th>Account No.</th>
                                        <th>Requested Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm d-flex align-items-center justify-content-center" 
                                                        style="width: 25px; height: 25px;" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#id" 
                                                        title="Mark as Completed">
                                                    <i class="fas fa-check-circle"></i>
                                                </button>
                                            </td>
                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="id" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Update Payment Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="}}" class="form-label">Processing Fee</label>
                                <input type="text" name="processing_fee" id="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Paid Amount</label>
                                <input type="text" name="paid_amount" id="" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                                   
@endsection
