<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Patient Registration</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ea8410;
                color: #fcfcfc;
                font-family: 'Lucida Bright', Verdana;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
            }

            .links > a {
                color: #fcfcfc;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 400;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }


            .links > a:hover {
                font-size: 40px;
                color: #fcfc01;
                
}

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
           Register Here
                </div>

               
  <div class="container">
    <label for="uname"><b><h3>User Name</h3></b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b><h3>Password</h3></b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw"><b><h3>Phone</h3></b></label><br>
    <input type="password" placeholder="Enter Phone" name="psw" required><br><br>



    <button type="submit">Login</button><br><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me <br><br>
      <button><a href="http://localhost/portfolio/public/patientpage">Back To home</a></button><br>
    </label>
  </div>
            </div>
        </div>
    </body>
</html>


