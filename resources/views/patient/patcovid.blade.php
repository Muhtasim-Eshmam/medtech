<html>
<head>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid black;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color:#bfe0f7;color:black;}
        
        #customers tr:hover {color:black}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background:transparent;
          color:black;
        }

        .collapsible {
  background-color: dodgerblue;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: ;
}




.head
{
font-size: 30px;
font-family: Helvetica;
color:dodgerblue;

font-weight: normal;

text-align: center;
background:transparent;
}


.head:hover
{
font-size: 30px;
font-family: Helvetica;
color:white;

font-weight: bold;

text-align: center;
background:transparent;
}



  body{
  
  background-image: url(covid.jpg);
            
      
  
  opacity: 130%;
  background-repeat:no-repeat;
  
  font-family: sans-serif;
}


.video:hover
{
  background-color: blue;
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
<body class="body">
  {{-- <details> 
    <summary></summary>

  <p> --}}

    <br>
    <h1 class="head">Covid-19 Update</h1>
    <div>
    <table class id="customers">
        <tr>
               <th> New Confirmed </th>
               <th> Total Confirmed </th>
               <th> New Deaths </th>
               <th> Total Deaths </th>
               <th> New Recovered</th>
               <th> Total Recovered</th>
               <th> Last Updated</th>
               
             
       </tr>

       {{-- @foreach($response as $row) --}}
        <tr>

            
                <td> {{$response->Global->NewConfirmed}} </td>
               <td> {{$response->Global->TotalConfirmed}} </td>
               <td> {{$response->Global->NewDeaths}} </td>
               <td> {{$response->Global->TotalDeaths}} </td>
               <td> {{$response->Global->NewRecovered}} </td>
               <td> {{$response->Global->TotalRecovered}} </td>
               <td> {{$response->Global->Date}} </td> 
            
            </tr> 
          {{-- @endforeach
        --}}
    </table>
  </p>
</details>
    </div>
<br> <br>

<h2 class="head">More Information</h2>




<button class="collapsible">Covid 19 statistics </button>
<div class="content">
<p><iframe width="1440" height="560" src="https://www.worldometers.info/coronavirus/country/bangladesh/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
</div>



<button class="collapsible">Open Covid 19</button>
<div class="content">
  <p> <iframe width="440" height="260"  src="https://www.youtube.com/embed/iKtZD6V6iYk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="440" height="260" src="https://www.youtube.com/embed/Yix7a6seExQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe width="440" height="260" src="https://www.youtube.com/embed/49TTsK1xd1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     
      <iframe width="440" height="260" src="https://www.youtube.com/embed/Cfxd8NY6EZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     
      
      </p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
<br>
<button><a href="http://localhost/portfolio/public/patientdashboard" class="">Back To home</a></button><br>



</body>
</html>