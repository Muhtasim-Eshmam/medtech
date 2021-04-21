<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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

  </div> -->
  
</div>


<div style="padding-left:20px">
  <h1 >Medicine Dashboard</h1>
  
  <table id ="customers">
 <tr>
        <th> Id </th>
        <th> Medicine Name </th>
        <th> Other Name </th>
        <th> Treatment For </th>
        <th> Side Effects </th>
        <th> Not For </th>
        <th> Details </th>
        <!-- <th> Date </th> -->
        <!-- <th> Actions </th> -->
</tr>
@foreach($showmed as $row)
<tr>
        <td> {{ $row->id }} </td>
        <td> {{ $row->medname }} </td>
        <td> {{ $row->othername }} </td>
        <td> {{ $row->treatment }} </td>
        <td> {{ $row->sideeffects }} </td>
        <td> {{ $row->notfor }} </td>
        <td> {{ $row->Details }} </td>
        <td> {{ $row->created_at }} </td>
        <!-- <td>
            
            <a href="{{URL::to('delete/showmed/'.$row->id) }}" class="btn btn-sn btn-danger">Delete</a>
            <a href="" class="btn btn-sn btn-success">Update</a>
        </td> -->
    </tr>
   @endforeach

   </table>

</div><br>

<br>
<a href="http://localhost/portfolio/public/patientdashboard" class="button">Return</a> 

<br>
<br>
<!-- <div class="med">
  <h1>Doctor Dashboard</h1> 
  <a href="http://localhost/portfolio/public/showdoc" class="button">Doctor Database</a> 
</div>
<br>
<br>
<div class="med">
   <h1 >Emergency Dashboard</h1> 
 <a href="http://localhost/portfolio/public/showemrgncyinfo" class="button">Emergency Database</a> 
 
</div> -->

</body>
</html>