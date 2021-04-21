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

<h3>Hospital information Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="hosptlname">Hospital Name</label>
    <input type="text" id="hosptlname" name="hosptlname" >

    <label for="hosptlarea">Hospital Area</label>
    <input type="text" id="hosptlarea" name="hosptlarea" >


    <label for="docbranch">Branch</label>
    <input type="text" id="docbranch" name="docbranch" >

    <label for="Speciality">Speciality</label>
    <select id="Speciality" name="Speciality">
    <option value="Sltone">Select One</option>
      <option value="Covid">Covid</option>
      <option value="Kidney">Kidney</option>
      <option value="Fractures">Fractures</option>
    </select>

    <label for="hosptldetails">Hospital Details</label>
    <textarea id="hosptldetails" name="hosptldetails"  style="height:100px"></textarea>

    <input type="submit" value="Submit"> <br> <br>
    <button><a href="http://localhost/portfolio/public/adminpage">Back To home</a></button><br>
  </form>
</div>

</body>
</html>