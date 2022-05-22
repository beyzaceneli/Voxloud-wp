<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
    <link rel="icon" type="image/png" sizes="32x32"
      href="./wp-content/uploads/2022/05/favicon-32x32.png">
    <!--Fontawesome  font family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    <!-- Fontawesome icons -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="crossorigin="anonymous"
      referrerpolicy="no-referrer" />

    <!-- Bootstrap cdn -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">
    <title>Challenge by Voxloud | Bookmark landing page</title>
    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
    <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
    /*
Theme Name: Beyza
Theme URI: 
Author: Beyza
Author URI: http://shah.gq
Description: Wordpress Theme
Version: 1.0
*/


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: rubik;
}


.hero-item{
  position: absolute;
  width:500px;
  height:300px;
  background-color: hsl(231, 69%, 60%);
  top:220px;
  right:0;
  border-radius: 0 0  0 100px ;
  z-index: -1;
  
}
@media(max-width:992px){
  .hero-item{
    width:60%;
    top: 250px;
    right:0; 
  }
}
@media(max-width:768px){
  .hero-item{
    top: 200px;
    right:0; 
  }
}
@media(max-width:576px){
  .hero-item{
    height: 200px;
    top:180px;
    right:0; 
  }
}
.features-item{
  position: absolute;
  width:500px;
  height:300px;
  background-color: hsl(231, 69%, 60%);
  top:65%;
  left:0;
  border-radius: 0 0  100px ;
  z-index: -1;
}

@media(max-width:992px){
  .features-item{
    top:75%;
    left:0; 
  }
}



@media (min-width: 992px) {
    .rounded-lg-3 { border-radius: .3rem; }
  }

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
  }

  .b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
  }

  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }

  .btn-primary {
    background-color: hsl(231, 69%, 60%);
  }
  
  .nav-link{
    color: gray;
    cursor: pointer;
  }

  .nav-link:hover{
    color: red;
  }


  .extansion-item{
    width: 100%;
    height: auto;
    display: flex;
    border: 1px solid gray;
    border-radius: 10px;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    padding: 1rem;
    box-shadow: 0 5px 5px hsl(231, 69%, 60%);
  }
    </style>
  </head>
  <body>
    <!-- Header star-->
   

      <header>
        <!-- Nav start-->

        <nav class="navbar">
          <div class="container">

            <a class="navbar-brand" href="#">
              <img src="wp-content/uploads/2022/05/logo-bookmark.svg" alt="" class="d-inline-block
                align-text-top">
            </a>

            <ul class="nav justify-content-end d-none d-lg-flex">
              <li class="nav-item">
                <a class="nav-link"aria-current="page" href="#">FEATURES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PRICING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
              </li>
              <li class="nav-item">
                <a href="wp-admin/" class="btn btn-danger">LOGIN</a>
              </li>
            </ul>
            <div class="dropdown d-lg-none d-md-block">
              <button class="btn"type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="wp-content/uploads/2022/05/icon-hamburger.svg" alt="">
              </button>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">FEATURES</a></li>
                <li><a class="dropdown-item" href="#">PRICING</a></li>
                <li><a class="dropdown-item" href="#">CONTACT</a></li>
                <li><a class="dropdown-item" href="wp-admin/">LOGIN</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <!--Nav end-->
      </header>