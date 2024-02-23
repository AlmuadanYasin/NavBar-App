<!doctype html>
<html lang="en"  data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>service1</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>

      body{
        width: 100%;
        height: 100%;

        background: #000000;
        --gap: 5em;
        --line: 1px;
        --color: rgba(255, 255, 255, 0.2);

        background-image: linear-gradient(
            -90deg,
            transparent calc(var(--gap) - var(--line)),
            var(--color) calc(var(--gap) - var(--line) + 1px),
            var(--color) var(--gap)
          ),
          linear-gradient(
            0deg,transparent calc(var(--gap) - var(--line)),var(--color) calc(var(--gap) - var(--line) + 1px),var(--color) var(--gap));background-size: var(--gap) var(--gap);
      }

      .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        padding: 20px;
        width: 100%;
        height: 100%;
        flex-direction: column;    
      }

      h1{
        text-align: center;
        margin: 3% 0% 0% 0%;
      }

      .btn-lagout{
        list-style-type: none;
        margin: 3% 0% 0% 0%;
      }
      
      .btn-home{
        background-color: transparent;
        text-decoration: none;
        padding: 8px 50px 8px 50px;
        color: #04AA6D;
        border: 2px solid #04AA6D;
        border-radius: 25px;
        margin: 3% 0% 0% 0%;
      }

      .btn-home:hover{
        padding: 8px 50px 8px 50px;
        background-color: #04AA6D;
        color: #fff;
        border: 2px solid #04AA6D;
        border-radius: 25px;
        margin: 3% 0% 0% 0%;
      }

      .navbar-brand{
        font-weight: bold;
      }
      
      .spinner {
        width: 70.4px;
        height: 70.4px;
        margin: 15% 0% 0% 0%;
        --clr: rgb(4,170,109);
        --clr-alpha: rgb(4,170,109,.1);
        animation: spinner 1.6s infinite ease;
        transform-style: preserve-3d;
      }

      .spinner > div {
        background-color: var(--clr-alpha);
        height: 100%;
        position: absolute;
        width: 100%;
        border: 3.5px solid var(--clr);
      }

      .spinner div:nth-of-type(1) {
        transform: translateZ(-35.2px) rotateY(180deg);
      }

      .spinner div:nth-of-type(2) {
        transform: rotateY(-270deg) translateX(50%);
        transform-origin: top right;
      }

      .spinner div:nth-of-type(3) {
        transform: rotateY(270deg) translateX(-50%);
        transform-origin: center left;
      }

      .spinner div:nth-of-type(4) {
        transform: rotateX(90deg) translateY(-50%);
        transform-origin: top center;
      }

      .spinner div:nth-of-type(5) {
        transform: rotateX(-90deg) translateY(50%);
        transform-origin: bottom center;
      }

      .spinner div:nth-of-type(6) {
        transform: translateZ(35.2px);
      }

      @keyframes spinner {
        0% {
        transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
            }

        50% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
            }

        100% {
        transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
            }
      }

    </style>

  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="home">Navbar-App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="service1">Services 1</a></li>
                <li><a class="dropdown-item" href="service2">Services 2</a></li>
                <li><a class="dropdown-item" href="service3">Services 3</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    <div class="container">
        <div class="spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
      <h1>Welcome to Navbar-App Service 1</h1>
      <ul class="btn-lagout">
              <li>
              <a class="btn-home" href="{{ url('home') }}">Back to Home</a>
            <a class="btn-home" href="{{ url('landing') }}">Log Out</a>
              </li>
            </ul>
    </div>
      
    <!-- End Example Code -->
  </body>
</html>

