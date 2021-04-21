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

<h3>Medicine  Form</h3>

<div class="container">
<form action="{{ url('update/showmed/'.$showmed->id)}}" method="get">
  @csrf
    <label for="medname">Medicine Name</label>
    <input type="text" id="medname" name="medname" value="{{$showmed->medname}}"  >

    <label for="othername">Other Name</label>
    <input type="text" id="othername" name="othername" value="{{$showmed->othername}}"  >

    <label for="treatment">TreatMent for</label>
    <input type="text" id="treatment" name="treatment" value="{{$showmed->treatment}}"  >

    <label for="sideeffects">Side effects</label>
    <input type="text" id="sideeffects" name="sideeffects" value="{{$showmed->sideeffects}}" >

    <label for="notfor">Not applicable for patients with :</label>
    <input type="text" id="notfor" name="notfor" value="{{$showmed->notfor}}" >
    

    <label for="Details">Details</label>
    <input type="text"id="Details" name="Details"  value="{{$showmed->Details}}" >

    <button type="submit">Press</button>

    <button><a href="http://localhost/portfolio/public/showmed">Back</a></button><br>
  </form>
</div>

</body>
</html>