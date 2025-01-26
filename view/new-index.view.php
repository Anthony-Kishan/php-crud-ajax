<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="container-fluid py-4">
            <!-- Header Section -->
            <div class="row mb-4 align-items-center">
                <div class="col-md-4">
                    <h1 class="display-6 mb-0 fw-bold text-primary">
                        <i class="fas fa-users me-2"></i>
                        Customer Management
                    </h1>
                </div>
                <div class="col-md-8">
                    <div class="d-flex gap-3 justify-content-md-end mt-3 mt-md-0">
                        <div class="input-group w-auto">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                            <input type="search" class="form-control border-start-0 ps-0"
                                placeholder="Search customers...">
                        </div>
                        <button class="btn btn-primary d-flex align-items-center gap-2">
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

            <!-- Table Card -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Customer List</h5>
                    <button class="btn btn-warning d-flex align-items-center gap-2">
                        <i class="fas fa-file-csv"></i>
                        Export CSV
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="fw-semibold">ID</th>
                                <th scope="col" class="fw-semibold">Name</th>
                                <th scope="col" class="fw-semibold">Contact Number</th>
                                <th scope="col" class="fw-semibold">Address</th>
                                <th scope="col" class="fw-semibold text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar bg-primary-subtle rounded-circle p-2">
                                            <i class="fas fa-user text-primary"></i>
                                        </div>
                                        Odessa Young Kasimir Ferrell
                                    </div>
                                </td>
                                <td>01740012988</td>
                                <td>Dhanmodi 27</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar bg-primary-subtle rounded-circle p-2">
                                            <i class="fas fa-user text-primary"></i>
                                        </div>
                                        Irma Hodges Aubrey Schneider
                                    </div>
                                </td>
                                <td>864</td>
                                <td>Et sint architecto t</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar bg-primary-subtle rounded-circle p-2">
                                            <i class="fas fa-user text-primary"></i>
                                        </div>
                                        Hanae Hooper Constance Hensley
                                    </div>
                                </td>
                                <td>363</td>
                                <td>Provident dolorem c</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar bg-primary-subtle rounded-circle p-2">
                                            <i class="fas fa-user text-primary"></i>
                                        </div>
                                        Allistair Heath Xantha Warner
                                    </div>
                                </td>
                                <td>969</td>
                                <td>Laborum Et sequi qu</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

</body>

</html>