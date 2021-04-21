



<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<title>Welcome Patient</title>
<style>





  
.font
{
font-family:Copperplate;
font-size:30px;
padding-bottom:30px;
}

.body
{
    
    /* background: url(35.jpg) no-repeat;
              background-size:100%;
               text-align:center;
               
                margin: 50px 30px; */
}


h1 {
  color: orange;
  font-size:20;
 
}

.button {
  
  border: none;
  color:black;
  padding: 10px 50px;
  text-align: center;
  text-decoration: none;
 
  font-size: 45px;
  
  
  cursor: pointer;
  font-family:arial;
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



/* .button1 {
  background-color: dodgerblue;;
  border: none;
  color:white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin-top: -300px;
  cursor: pointer;
  font-family:Copperplate;
  float:right;
 


} */


.button:hover
{
  background-color:dodgerblue;
  border: 1px solid blue;
  color:white;
  font-size: 45px;
}


div.gallery {
  margin: 19px 30px;
  border: 1px solid #ccc;
  float: right;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color:white;
}




</style>
</head>
<body class="body">


  <video autoplay muted loop id="myVideo">
    <source src="83.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <div class="font">
  <br>
  <br>
  <br>
  

<h1>Welcome,</h1>
  
  <a href="http://localhost/portfolio/public/viewemrgncy" class="button">Emergency</a><br><br>
<!-- <a href="http://localhost/portfolio/public/login" class="button">Login</a><br><br> -->
<a href="http://localhost/portfolio/public/registration" class="button">Register</a><br><br>
<a class="button" href="http://localhost/portfolio/public">Home</a>



   </div>

</body>
</html>