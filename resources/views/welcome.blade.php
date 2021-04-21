<!DOCTYPE html>
<html>
<head>
<title>Welcome to MedTech</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">





<style>
.font
{
font-family:Copperplate;
font-size:30px;
}

.btn btn-primary {
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







.body
{

   /* background: url('modbacknew.jpg') no-repeat center center/cover; 
     /* background-image: url(modback.jpg), url(modback.jpg);
              
                background-size: 100%; 
 */
 /* padding: 100px;    */ */
                /* margin: 50px 30px; */
}

 .btn btn-primary {
  
 
  color:white;

  text-align: center;
  
  font-size: 25px;

  padding-left: 100px;

 
}


/* .btn btn-primary1 {
  background-color: dodgerblue;;
  border: none;
  color:white;
  padding: 10px 31px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 50px;
  cursor: pointer;
  float: left;



}  */ 


.btn btn-primary:hover
{
  background-color:white;
  color:black;
  font-size: 25px;
}


#myVideo {
  ;
  
  width: 100%; 
  height: 30%;
  background:cover;
=
}

.content {
  position: center;
  bottom: 0;
  background: dodgerblue;
  color: #f1f1f1;
  width: 100%;
  padding: 60px;
  text-align:center;
}

.hit{
text-align: center;
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
padding-bottom: 150px;
font-size: 60px;
color:white;


}


</style>
</head>
<body>
  {{-- <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade " data-ride="carousel">
    <div class="carousel-inner"> --}}
      
      <div class="carousel-caption d-none d-md-block">
        <p class="hit"> Welcome to Med Tech</p>
        <p><a href="http://localhost/portfolio/public/login" class="btn btn-primary">Get Started</a></p><br>
        <p> <a href="http://localhost/portfolio/public/adminlogin" class="btn btn-primary">Admin Panel</a></p>
       
      </div>

        <video autoplay muted loop id="myVideo">
          <source src="2.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>

     
      </div>
    </div>
  </div>
   
</body>
</html>