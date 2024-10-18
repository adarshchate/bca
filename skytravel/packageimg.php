<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}
/*
body {   
  background-image: url("image/.jpg"), url("paper.gif"); 
  background-repeat: no-repeat, repeat;
  background-color: #cccccc; 
}
*/
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
 
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
    position: relative;
    background-color:#FFE4C4;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color:#D3D3D3;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}



.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>


<p></p>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/shimla.gif" alt="Jane" style="width:100%">
      <div class="container">
        <strong> <p style="font-size:20px;">Shimla,Kasol,
        Manali</p> </strong>
        <p>Price:28000 <br>Duration: 3N-4D</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/hawa.gif" alt="Mike" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Hawa Mahal,Amber
        palace,City palace</p> </strong>
        <p>Price:28000 Duration: 3N-4D</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/taj.gif" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Taj Mahal,
      agra fort</p> </strong>
        <p>Price:20000 <br>Duration: 2N-3D</p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="image/jais.gif" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Kothari's Patwa 
        Haveli,
        Jaisalmer fort,
        Vyas Chhatri</p> </strong>
        <p>Price:22000  Duration: 3N-4D</p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="image/nepal.gif" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Bhaktapur,
        Kathmandu 
         Pokhara,
         Nagarkot
        </p> </strong>
        <p>Price:50000 Duration: 7N-8D</p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="image/maha.gif" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Mahabaleshwar,
         Elphinstone Point,
          Pratapgad </p> </strong>
        <p>Price:16000 &nbsp;Duration: 3N-4D</p>
      </div>
    </div>
  </div>
</div>


</body>
</html>
