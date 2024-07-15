<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduperse</title>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../css/instructor.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.10.1/css/pro.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.2/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.demo textarea',
            // width: 754 - 2,
            height: 600 - 99,
            plugins: [
                'advlist',
                'autolink',
                'lists',
                'link',
                'image',
                'charmap',
                'print',
                'preview',
                'anchor',
                'searchreplace',
                'visualblocks',
                'code',
                'fullscreen',
                'insertdatetime',
                'media',
                'table',
                'contextmenu',
                'paste',
                'imagetools'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tiny.cloud/css/codepen.min.css'
            ]
        })
    </script>
</head>
<body>
 
