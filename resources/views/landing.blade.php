<!doctype html>
<html lang="en"  data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>landing</title>
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

      .loader {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        margin: 16.3% 0% 0% 0%;
        }

        .slider {
        overflow: hidden;
        background-color: white;
        margin: 0 15px;
        height: 80px;
        width: 20px;
        border-radius: 30px;
        box-shadow: 15px 15px 20px rgba(0, 0, 0, 0.1), -15px -15px 30px #676767,
            inset -5px -5px 10px rgba(0, 0, 255, 0.1),
            inset 5px 5px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        }

        .slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        border-radius: 100%;
        box-shadow: inset 0px 0px 0px rgba(0, 0, 0, 0.3), 0px 420px 0 400px #2697f3,
            inset 0px 0px 0px rgba(0, 0, 0, 0.1);
        animation: animate_2 2.5s ease-in-out infinite;
        animation-delay: calc(-0.5s * var(--i));
        }

        @keyframes animate_2 {
        0% {
            transform: translateY(250px);
            filter: hue-rotate(0deg);
        }

        50% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(250px);
            filter: hue-rotate(180deg);
        }
        }

    </style>

  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    
    <div class="container">
       
        <section class="loader">
                <div class="slider" style="--i:0">
                </div>
                <div class="slider" style="--i:1">
                </div>
                <div class="slider" style="--i:2">
                </div>
                <div class="slider" style="--i:3">
                </div>
                <div class="slider" style="--i:4">
                </div>
        </section>

        <h1>Welcome to Navbar-App Landing Page</h1>
        <ul class="btn-lagout">
          <li>
            <a class="btn-home" href="{{ url('login') }}">LogIn</a>
          </li>
        </ul>
    </div>
      
    <!-- End Example Code -->
  </body>
</html>