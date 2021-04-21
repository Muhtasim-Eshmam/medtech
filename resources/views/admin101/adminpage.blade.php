<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(968501.jpg), url(968501.jpg) ;
  
  background-size: 100%;
  background repeat:no-repeat;
}

.header {
  overflow: hidden;
  
  padding: 20px 10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 8px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  
}






.header b {
  float: left;
  color: white;
  text-align: center;
  padding: 10px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: white;
  color: dodgerblue;
}

.header b:hover {
  background-color:red;
  color: white;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
  
}

.header-right {
  float: right;
  
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
    
  }
}
.med
{
  
  padding-left:-20px;
  color:blue;
  font-family:Copperplate;
  font-size:17px;
  
  

}

.button {
 
  color:white;
  padding: 2px 0px;
  
  text-decoration: none;
  display: inline-block;
  font-size: 30px;

  margin:11px;
  width:200px; 
  cursor: pointer;
  font-family:myriad;

}


.button2
{
  color:white;
  padding: 5px 10px;
 
  text-decoration: none;
  display: inline-block;
  text-align:center;
  font-size: 35px;
   margin:5px;
  width:250px; 
  cursor: pointer;
  font-family:myriad;
}

/* //database  */

.button:hover    
{
  /* border: 2px solid black; */
  background-color:white;
  color:dodgerblue;
  font-size: 31px;
  /* border: 1px solid blue; */
}


</style>
</head>
<body>

<div class="header">
  <!-- <a href="#default" class="logo">Admin</a> -->
  <div class="header-right">
  
  <br>
    
    <a href="http://localhost/portfolio/public/adddoc">Doctor Info</a>
    <a href="http://localhost/portfolio/public/addmed">Medicine Info</a>
    <a href="http://localhost/portfolio/public/addemrgncy">Emergency Info</a>
    <a href="http://localhost/portfolio/public/commondata">Common data</a>
    <a href="http://localhost/portfolio/public/" > Logout</a> 
   
    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a> --}}

    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form> --}}



  </div>
</div>
<div class="button2">
{{-- <h3>Check Database</h3> --}}
<br>
<h3>Check DataBase</h3>
 <a href="http://localhost/portfolio/public/showmed" class="button">Medicine </a> 
 
  <a href="http://localhost/portfolio/public/showdoc" class="button">Doctor </a> 
<br>
  <a href="http://localhost/portfolio/public/showemrgncyinfo" class="button">Emergency </a> 
  <a href="http://localhost/portfolio/public/showcomdata" class="button"> Common Data</a> 
  
 
</div>


<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!} 


</body>
</html>
