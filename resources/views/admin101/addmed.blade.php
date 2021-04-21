<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Helvetica;
  background-image: url(drugs.jpg), url(drugs.jpg);
              
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
  color:white;
  padding: 20px;
  font-size: 20px;
}
</style>
</head>
<body>

<h3 class="container">Medicine  Form</h3>

<div class="container">
  <form action="{{route('add.medinfos')}}" method="post">
  @csrf
    <label for="medname">Medicine Name</label>
    <input type="text" id="medname" name="medname" >

    <label for="othername">Other Name</label>
    <input type="text" id="othername" name="othername" >

    <label for="treatment">TreatMent for</label>
    <input type="text" id="treatment" name="treatment" >

    <label for="sideeffects">Side effects</label>
    <input type="text" id="sideeffects" name="sideeffects" >

    <label for="notfor">Not applicable for patients with :</label>
    <input type="text" id="notfor" name="notfor" >
    

    <label for="Details">Details</label>
    <textarea id="Details" name="Details" style="height:80px"></textarea>

    <button type="submit">Press</button>

    <button><a href="http://localhost/portfolio/public/adminpage">Back To home</a></button><br>
  </form>
</div>

</body>
</html>