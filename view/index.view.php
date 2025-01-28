<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FONTAWESOME -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>SSB Technologies</title>
</head>

<body>
    <main>
        <!-- ADD CUSTOMER FORM MODAL -->
        <div class="modal col-12 fade" id="add-cust-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0 bg-primary text-white p-4 rounded-top-4">
                        <h5 class="modal-title">
                            <i class="fas fa-user-plus me-2"></i>
                            Add Customer
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="add-cust-modal-content">
                        <!-- CONTENT WILL POPULATED HERE FROM AJAX CALL -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-lg px-4" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>
                            Close</button>
                        <button type="button" class="btn btn-primary btn-lg px-4" id="data-submit-button"
                            value="add_customer">
                            <i class="fas fa-check me-2"></i>
                            Add Customer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- UPDATE FORM MODAL -->
        <div class="modal col-12 fade" id="update-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0 bg-primary text-white p-4 rounded-top-4">
                        <h5 class="modal-title">Update Data</h5>
                        <button type="button" class="btn-close btn-close-white close-btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-content">
                        <!-- Modal Content will populated using AJAX -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-lg px-4 close-btn"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-lg px-4" id="save_changes"
                            value="save_changes">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIEW MODAL -->
        <div class="modal col-12 fade" id="view-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-0 bg-info text-white p-4 rounded-top-4">
                        <h5 class="modal-title">View Data</h5>
                        <button type="button" class="btn-close btn-close-white close-btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="view-modal-content">
                        <!-- Modal Content will populated using AJAX -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-3">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fas fa-users me-2"></i>Customer Management</h3>
                </div>
                <div class="col-md-8">
                    <div class="d-flex gap-3 justify-content-md-end mt-3 mt-md-0">
                        <div class="input-group w-auto">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                            <input type="search" id="search" class="form-control border-start-0 ps-0"
                                placeholder="Search customers..." autocomplete="off">
                        </div>
                        <button class="btn btn-primary d-flex align-items-center gap-2" id="add_cust_btn"
                            name="add_cust_btn" aria-current="page" data-bs-toggle="modal"
                            data-bs-target="#add-cust-modal">
                            <i class="fas fa-plus"></i>
                            Add Customer
                        </button>
                        <button class="btn btn-danger d-flex align-items-center gap-2">
                            <i class="fas fa-trash"></i>
                            Delete Customer
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col mt-3 p-2 rounded-3 card border-0 shadow-lg">
                    <div id="view-data">
                        <!-- Data will be displayed here -->
                    </div>
                </div>
                <div class="card-footer bg-white py-3">
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-0 justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="./assets/js/script.js"></script>
</body>

</html>