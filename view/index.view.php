<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <main>

        <!-- ADD CUSTOMER FORM MODAL -->
        <div class="modal" id="add-cust-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Customer</h5>
                        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="add-cust-modal-content">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="data-submit-button" value="add_customer">Add
                            Customer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- UPDATE FORM MODAL -->
        <div class="modal" id="update-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Data</h5>
                        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="save_changes" value="save_changes">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- VIEW MODAL -->
        <div class="modal" id="view-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">View Data</h5>
                        <button type="button" class="btn-close close-btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="view-modal-content">
                        <!-- Modal Content will populated using AJAX -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary more-details-btn" data-bs-dismiss="modal">More
                            Details</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-3">
            <div class="row">
                <div class="col-6">
                    <h1>Customer Management</h1>
                </div>
                <div class="col-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item" id="search-bar">
                            <input type="text" class="form-control" id="search" autocomplete="off" placeholder="search">
                        </li>
                        <li class="nav-item mx-3">
                            <a class="btn btn-primary" id="add_cust_btn" name="add_cust_btn" aria-current="page"
                                href="javascript:void(0)">Add Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger" aria-current="page" href="#">Delete Customer</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col mt-3">
                    <div id="view-data">
                        <!-- Data will be displayed here -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="./assets/js/script.js"></script>
</body>

</html>