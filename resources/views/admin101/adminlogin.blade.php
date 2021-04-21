<html>
<head>
<title>Admin Form </title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <style type="text/css">
        

body{
  


}



#myVideo {
  ;
  
  width: 120%; 
  height: 150%;
  


}

.content {
  position: center;
  bottom: 0;
  background: dodgerblue;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  text-align:center;
}

.loginbox{
    width: 320px;
    height: 420px;
   background:white;
    color: black;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border: 1px solid black;
    opacity:0.85;
}


h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 25px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 2px solid black;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 20px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 18px;
    line-height: 20px;
    color: white;
}

.loginbox a:hover
{
    color: black;
}

.button {
  background-color: dodgerblue;;
  border: none;
  color:white;
  padding: 5px 30px;
  
  text-align: center;
  text-decoration: none;
 
  font-size: 20px;
  /* margin: 8px 50px; */
  cursor: pointer;
  float:right;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: dodgerblue;
   color: white;
   text-align: center;
}



    </style>
<body>

    <video autoplay muted loop id="myVideo">
        <source src="787.mp4" type="video/mp4"  frameborder="0">
        Your browser does not support HTML5 video.
      </video>


    <div class="loginbox">
   
        <h1>Admin Login</h1>
        <form action="{{route('add.chck')}}" method="get">
            @csrf
            
                        <input type="text" name="key" id="key "placeholder="Enter Security Key">
            <br>
            <br>         

                         <input type="text" name="loc" id="loc "placeholder="Enter Name">
            <br>
            <br>
            
                        <button type="submit" class="button">Login</button> <br> <br> <br>
            
                        
    <button hrefr="http://localhost/portfolio/public/adminlogin" class="button">Back </button> <br>
            
                    </form>
                    
                     {{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
                    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
                    {!! Toastr::message() !!}  --}}


        
    </div>


    


</body>
</head>
</html>
