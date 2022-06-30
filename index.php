<?php
if ($_POST) {
    http_redirect('http://localhost');

};
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drag and Drop File Uploader with propagation</title>
    <link rel="stylesheet" href="/css/draganddrop.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<div class="bodyContainer">
    <div class="dragArea" id="dragArea">
        <div class="dragBox">
            <h1 class="icon"><i class="text-primary bi bi-images"></i></h1>
            <h2 class="dragText">Drag and Drop</h2>
            <h3 class="">or <span class="text-primary" id="browseButton">browse</span></h3>
            <input type="file" name="file" id="fileInput" hidden>
            <small class="text-muted supportedFiles">Supports: JPG, JPEG, PNG, png, jpeg...</small>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3 shadow">
                <div class="modal-body p-4 text-center">
                    <h5 class="mb-0">Enable this setting?</h5>
                    <p class="mb-0">You can always change your mind in your account settings.</p>
                </div>
                <div class="modal-footer justify-content-center p-0">
                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"
                            data-bs-dismiss="modal">Ok
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container col-xxl-8 px-4 py-5" id="resizerDiv">
</div>

    <footer class="border-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5">
                <div class="col mb-3">
                    <a href="/" class="logo-con d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <p class="navbar-brand" href="#">
                            <!-- <img src="assets/images/logo.png" alt="" class="logo"> -->
                        <div class='resizable'>
                            <div class='resizers'>
                                <div class='resizer top-left'></div>
                                <div class='resizer top-right'></div>
                                <div class='resizer bottom-left'></div>
                                <div class='resizer bottom-right'></div>
                            </div>
                        </div>
                        <span class="">Resizer.io</span>
                        </p>
                    </a>
                    <p class="text-muted">© 2022</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-primary text-white lower py-5 text-center">
            <div class="container container-xxl" style="opacity: 0.6;">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="/" class="d-flex align-items-center link-light text-decoration-none">
                        <p class="navbar-brand" href="#">
                            <!-- <img src="assets/images/logo.png" alt="" class="logo"> -->
                        <div class='resizableinvert border-white'>
                            <div class='resizersinvert'>
                                <div class='resizer top-left'></div>
                                <div class='resizer top-right'></div>
                                <div class='resizer  bottom-left'></div>
                                <div class='resizer invert bottom-right'></div>
                            </div>
                        </div>
                        <span class="">Resizer.io</span>
                        </p>
                    </a>
                    <span class="mx-1 mx-md-2">
                          <span class="d-none d-md-inline">made with ♥</span>
                          by
                      </span>
                    <a target="_blank" class="d-flex" href="https://www.wizarphics.com">
                        <img alt="Wizarphics" height="60px" src="assets/images/maker.png">
                    </a>
                </div>
                <p class="mt-4 copyright-line">
                    Copyright 2018-2022 Kaleido AI GmbH - All rights reserved.
                </p>
                <p style="font-size: 70%;" class="px-5 mt-3">
                    All trademarks, service marks, trade names, product names, logos and trade dress appearing on our
                    website are the property of their respective owners.

                    Adobe, Creative Cloud and Photoshop are either registered trademarks or trademarks of Adobe in the
                    United States and/or other countries.

                    eb1bb48845c5007c3ec8d72ce7972fc8b76733b1
                </p>
            </div>
        </div>

    </footer>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/draganddrop.js"></script>
</body>
</html>
