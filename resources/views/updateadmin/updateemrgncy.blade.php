<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Emergency  Form</h3>

<div class="container">
<form action="{{ url('update/showemrgncy/'.$showemrgncy->id)}}" method="get">
  @csrf
    <label for="division">Division</label>
    <input type="text" id="division" name="division" value="{{$showemrgncy->division}}"  >

    <label for="area">Area</label>
    <input type="text" id="area" name="area" value="{{$showemrgncy->area}}" >

    <label for="police">Police Contact</label>
    <input type="text" id="police" name="police" value="{{$showemrgncy->police}}" >

    <label for="ambulance">Ambulance</label>
    <input type="text" id="ambulance" name="ambulance" value="{{$showemrgncy->ambulance}}" >

    <label for="fireservice">Fire service</label>
    <input type="text" id="fireservice" name="fireservice" value="{{$showemrgncy->fireservice}}" >
    

    <label for="hosptl">Best Hospitals</label>
    <input type="text" id="hosptl" name="hosptl"  value="{{$showemrgncy->hosptl}}" >

   



    <button type="submit">Press</button>

    <button><a href="http://localhost/portfolio/public/showemrgncyinfo">Back</a></button><br>
  </form>
</div>

</body>
</html>