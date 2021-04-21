<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
  background: url(661.jpg) no-repeat;
              background-size:100%;
           
}

.header {
  overflow: hidden;
  background-color: #51bbe5;
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
  background-color:white;
  
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


{{-- <div class="med">
  <h1 >Medicine Dashboard</h1>
 <a href="http://localhost/portfolio/public/showcomdata" class="button">Open Database</a> 
 
</div> --}}
<br>
<br>


<div style="padding-left:20px">
  <h1 class="head">Common Diseases</h1>
  
<table class id="customers">
 <tr>
       
        <th> Problem </th>
        <th> Causes </th>
        <th> Medicine </th>
        <th> Advice</th>
      
</tr>
@foreach($comdata as $row)
<tr>
      
        <td> {{ $row->problm}} </td>
        <td> {{ $row->causes }} </td>
        <td> {{ $row->medicine }} </td>
        <td> {{ $row->dadvice }} </td>
      
        
    </tr>
   @endforeach

   </table>

</div>
<br>
<a href="http://localhost/portfolio/public/patientdashboard" class="button">Close Database</a> 
 

<br>
<br>

{{-- <div class="med">
  <h1 >Emergency Dashboard</h1>
 <a href="http://localhost/portfolio/public/showemrgncyinfo" class="button">Open Database</a> 
 
</div> --}}
</body>
</html>
