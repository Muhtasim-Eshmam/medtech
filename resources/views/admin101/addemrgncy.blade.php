<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Helvetica;
  background-image: url(1213.jpg), url(1213.jpg);
              
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

<h3>Emergency  Form</h3>

<div class="container">
  <form action="{{route('add.emrgncyinfo')}}" method="post">
  @csrf
    <label for="division">Division</label>
    <input type="text" id="division" name="division" >

    <label for="area">Area</label>
    <input type="text" id="area" name="area" >

    <label for="police">Police Contact</label>
    <input type="text" id="police" name="police" >

    <label for="ambulance">Ambulance</label>
    <input type="text" id="ambulance" name="ambulance" >

    <label for="fireservice">Fire service</label>
    <input type="text" id="fireservice" name="fireservice" >
    

    <label for="hosptl">Best Hospitals</label>
    <textarea id="hosptl" name="hosptl" style="height:60px"></textarea>

   



    <button type="submit">Press</button>

    <button><a href="http://localhost/portfolio/public/adminpage">Back To home</a></button><br>
  </form>
</div>

</body>
</html>