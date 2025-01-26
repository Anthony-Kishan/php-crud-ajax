<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row ">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-4 mb-4">
                    <div class="card-header bg-primary text-white p-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="fas fa-user-circle me-2"></i>
                            Customer Information
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Customer Name</h6>
                                    <p class="h5 mb-0"><?php echo $row["first_name"]; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Contact Number</h6>
                                    <p class="h5 mb-0"><?php echo $row["contact_number"]; ?></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="border rounded p-3">
                                    <h6 class="text-muted mb-2">Address</h6>
                                    <p class="h5 mb-0"><?php echo $row["address"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-4 mb-4">
                    <div class="card-header bg-success text-white p-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="fas fa-shopping-cart me-2"></i>
                            Product Information
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Phone Number 1</h6>
                                    <p class="h5 mb-0"><?php echo $row["phone_number_1"]; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Phone Number 2</h6>
                                    <p class="h5 mb-0"><?php echo $row["phone_number_2"]; ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-3">
                                    <h6 class="text-muted mb-2">Category</h6>
                                    <p class="h5 mb-0"><?php echo $row["category"]; ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Quantity</h6>
                                    <p class="h5 mb-0"><?php echo $row["product_quantity"]; ?></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Price</h6>
                                    <p class="h5 mb-0"><?php echo $row["product_price"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-4 mb-4">
                    <div class="card-header bg-warning text-dark p-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="fas fa-shield-alt me-2"></i>
                            Warranty Information
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Warranty Start Date</h6>
                                    <p class="h5 mb-0"><?php echo $row["warranty_guarantee_start"]; ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border rounded p-3 h-100">
                                    <h6 class="text-muted mb-2">Warranty End Date</h6>
                                    <p class="h5 mb-0"><?php echo $row["warranty_guarantee_end"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-info text-white p-3 rounded-top-4">
                        <h3 class="mb-0">
                            <i class="fas fa-sticky-note me-2"></i>
                            Additional Notes
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="border rounded p-3">
                            <p class="mb-0"><?php echo $row["note"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>