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
        <div class="container py-3">
            <!-- <button id="view-button" type="button" class="btn btn-outline-dark my-3">View</button> -->

            <div class="row">
                <div class="col">
                    <div class="my-3 px-2 py-2 rounded"
                        style=" background-color:rgba(158, 158, 158, 0.32);">
                        <form action="" id="" class="my-3">
                            First Name: <input type="text" class="form-control" id="f_name">
                            Last Name: <input type="text" class="form-control" id="l_name">
                            <button value="submit" type="submit" id="data-submit-button"
                                class="btn btn-dark my-3">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="col">
                    <div id="view-data">
                        <!-- Data will be displayed here -->
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