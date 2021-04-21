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


input[type=text], select, input {
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

<h3>Common  Form</h3>

<div class="container">
  <form action="{{route('add.commondata')}}" method="get">
  @csrf
    <label for="problm">Problem</label> <br>
    <input type="text" id="problm" name="problm" ><br>

    <label for="causes">Causes</label> <br>
    <input type="text" id="causes" name="causes" ><br>

    <label for="medicine">Medicine</label><br>
    <input type="text" id="medicine" name="medicine" ><br>

    <label for="dadvice">Doctor Advice</label><br>
    <input id="dadvice" name="dadvice" style="height:100px"><br>


    <button type="submit">Press</button><br>

    <button><a href="http://localhost/portfolio/public/adminpage">Back To home</a></button><br>
  </form>
</div>

</body>
</html>