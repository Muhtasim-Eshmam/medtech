<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  /* background: url(rt.jpg) no-repeat;
              background-size:100%; */
              background-color: dodgerblue;
}
}


.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-family:Verdana;
  ;
}

.header a:hover {
  background-color: #3bd1cf;
  color: white;
}

.header a.active {
  background-color: #3bd1cf;
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



#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
   /* border: 0.25px solid black; */
   padding: 5px;
   background-color:lightgrey;
}

#customers td, #customers th {
   /* border: 0.25px solid black; */
   padding: 0px;
   background-color:white;
   color:black;
}


#customers tr:hover {background-color: #c9f7f6;color:black;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3bd1cf;
  color: white;
}

.button {
  background-color: dodgerblue;;
  border: none;
  color:white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  font-family:Copperplate;
}

</style>
</head>
<body>

<!-- <div class="header">
  <a href="#default" class="logo">Admin</a>
  <div class="header-right">
    <a class="active" href="http://localhost/portfolio/public">Home</a>
    <a href="http://localhost/portfolio/public/adddoc">Doctor Info</a>
    <a href="http://localhost/portfolio/public/addmed">Medicine Info</a>
    <a href="http://localhost/portfolio/public/addhosptl">Emergency Contacts</a>

  </div>
  
</div> -->

<!-- <div class="med">
  <h1>Doctor Dashboard</h1>
  <a href="http://localhost/portfolio/public/showdoc" class="button">Open Database</a> 
</div>
<br>
<br>
<div class="med">
  <h1 >Medicine Dashboard</h1>
 <a href="http://localhost/portfolio/public/showmed" class="button">Open Database</a> 
 
</div> -->
<br>
<br>
<h1 class="head">Emergency Dashboard</h1>
<div style="padding-left:20px">
 
  
<table class id ="customers">
 <tr>
        <th> Id </th>
        <th> Division </th>
        <th> Area </th>
        <th> Police </th>
        <th> Ambulance </th>
        <th> Fire Service </th>
        <th> Hospital </th>
        <!-- <th> Date </th>
        <th> Actions </th> -->
</tr>
@foreach($emergencyinfo as $row)
<tr>
        <td> {{ $row->id }} </td>
        <td> {{ $row->division }} </td>
        <td> {{ $row->area }} </td>
        <td> {{ $row->police }} </td>
        <td> {{ $row->ambulance }} </td>
        <td> {{ $row->fireservice }} </td>
        <td> {{ $row->hosptl }} </td>
        <td> {{ $row->created_at }} </td>
       
    </tr>
   @endforeach

   </table>

</div>
<br>
<a href="http://localhost/portfolio/public/patientdashboard" class="button">Close</a> 
</body>
</html>
