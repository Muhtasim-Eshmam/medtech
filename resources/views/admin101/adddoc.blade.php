<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Helvetica;
  background-image: url(525.jpg), url(525.jpg);
              
                background-size: 100%;

}
* {box-sizing: border-box;}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color:black;
}

input[type=submit] {
 
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
 
}

.container {
  border-radius: 5px;
  color:black;
  padding: 20px;
  font-size: 20px;
}
</style>
</head>
<body>

<h3>Doctor information Form</h3>

<div class="container">
  <form action="{{route('add.docinfos')}}" method="post">
  @csrf
    <label for="docname">Doctor Name</label>
    <input type="text" id="docname" name="docname" >

    <label for="dochosptl">Hospital</label>
    <input type="text" id="dochosptl" name="dochosptl" >


    <label for="docbranch">Branch</label>
    <input type="text" id="docbranch" name="docbranch" >

    <label for="specialist">Specialist</label>
    <input type="text" id="specialist" name="specialist" >

    <label for="docdetails">Details</label>
    <textarea id="docdetails" name="docdetails"  style="height:80px"></textarea>

    <button type="submit">Press</button> <br> <br>
    <button><a href="http://localhost/portfolio/public/adminpage">Back To home</a></button><br>
  </form>
</div>

</body>
</html>