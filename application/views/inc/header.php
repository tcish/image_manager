<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">

    <title>Image Manager</title>
    <style>
      .profile__img img{
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin: 1rem;
      }

      .profile__img img:hover{
        border: 2px solid red;
        z-index: 10;
      }
    </style>
  </head>
  <body>

    