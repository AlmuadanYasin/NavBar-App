<!doctype html>
<html lang="en"  data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>home</title>
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
        margin: 5% 0% 0% 0%;
      }

      .navbar-brand{
        font-weight: bold;
      }

      .ball {
        position: relative;
        bottom: 50px;
        left: calc(100% - 20px);
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50%;
        animation: ball-move8234 3s ease-in-out 1s infinite alternate;
      }

      .ball::after {
        position: absolute;
        content: '';
        top: 25px;
        right: 5px;
        width: 5px;
        height: 5px;
        background: #000;
        border-radius: 50%;
      }

      .bar {
        width: 200px;
        height: 12.5px;
        background: #FFDAAF;
        border-radius: 30px;
        transform: rotate(-15deg);
        margin: 17.5% 0% 0% 0%;
        animation: up-down6123 3s ease-in-out 1s infinite alternate;
      }

      @keyframes up-down6123 {
        from {
          transform: rotate(-15deg);
        }

        to {
          transform: rotate(15deg);
        }
      }

      @keyframes ball-move8234 {
        from {
          left: calc(100% - 40px);
          transform: rotate(360deg);
        }

        to {
          left: calc(0% - 20px);
          transform: rotate(0deg);
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
            <li class="nav-item">
              <a class="nav-link" href="login">LogIn</a>
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
        <div class="bar">
            <div class="ball"></div>
        </div>
        <h1>Welcome to Navbar-App Home</h1>
    </div>
      
    <!-- End Example Code -->
  </body>
</html>