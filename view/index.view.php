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
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-3">
            <div class="row">
                <div class="col-4">
                    <div class="my-3 px-2 py-2 rounded" style=" background-color:rgba(158, 158, 158, 0.32);">
                        <form action="" id="" class="my-3">
                            First Name: <input type="text" class="form-control" id="f_name">
                            Last Name: <input type="text" class="form-control" id="l_name">
                            <button value="submit" type="submit" id="data-submit-button"
                                class="btn btn-dark my-3">Submit</button>
                        </form>
                    </div>
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