<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />

    <link rel="stylesheet" href="./public/css/<?php echo $this->data["css"];?>">
    <title>BK ACADEMY</title>
</head>
<body>
    <div class="container-fluid d-flex flex-column">
        <nav class="row navbar navbar-expand-lg navbar-light" style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);" >
            <div class="col-md-6 brand text-center">
                <a href="./Home" style="text-decoration: none;"><h5 style="color :white;margin:auto;">BK ACADEMY</h5></a>
            </div>            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-md-6 collapse navbar-collapse " id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="./About" class="align-self-center pr-4 nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="./Product" class="align-self-center pr-4 nav-link">Course</a>
                </li>
                <li class="nav-item">
                    <a href="./Pricing" class="align-self-center pr-4 nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="./Contact" class="align-self-center pr-4 nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="./Login"  class="btn btn-primary align-self-center nav-link" style="color:#fff">Login</a>
                </li>
              </ul>
            </div>
        </nav>