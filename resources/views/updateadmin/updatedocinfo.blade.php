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

<h3>Update Doctor information Form</h3>

<div class="container">
  <form action="{{ url('update/showdoc/'.$showdoc->id)}}" method="get">
  
  @csrf
    <label for="docname">Doctor Name</label>
    <input type="text" id="docname" name="docname" value="{{$showdoc->docname}}" >

    <label for="dochosptl">Hospital</label>
    <input type="text" id="dochosptl" name="dochosptl" value="{{$showdoc->dochosptl}}"  >


    <label for="docbranch">Branch</label>
    <input type="text" id="docbranch" name="docbranch" value="{{$showdoc->docbranch}}" >

    <label for="specialist">Specialist</label>
    <input type="text" id="specialist" name="specialist" value="{{$showdoc->specialist}}" >

    <label for="docdetails">Details</label>
    <input type="text" id="docdetails" name="docdetails"  value="{{$showdoc->docdetails}}">

    <button type="submit">Update</button> <br> <br>
    <button><a href="http://localhost/portfolio/public/showdoc">Back To home</a></button><br>
  </form>
</div>

</body>
</html>