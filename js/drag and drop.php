<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drag and Drop File Uploader</title>
    <link rel="stylesheet" href="/css/draganddrop.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.css">
</head>
<body>
<div class="bodyContainer">
    <div class="dragArea" id="dragArea">
        <div class="dragBox">
            <h1 class="icon"><i class="text-primary bi bi-images"></i></h1>
            <h2 class="dragText">Drag and Drop</h2>
            <h3 class="">or <span class="btn text-primary" id="browseButton">browse</span></h3>
            <input type="file" name="file" id="fileInput" hidden>
            <small class="supportedFiles">Supports: JPG, JPEG, PNG, png, jpeg...</small>
        </div>
    </div>
</div>
<script src="/js/draganddrop.js"></script>
</body>
</html>
