
<style>
* {
  box-sizing: border-box;
}

html,body  /* for avoding white spaces on right side */
{
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.hed1{
  width: 100%;
  height: max-content;
  margin-top: 0;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33%;
  height:auto;
  padding: 0 10px;
  background-color: #ffebeb;
}



/* Remove extra left and right margins, due to padding */
.row {
    margin: 10px 5px;
    background-color: antiquewhite;
}
.fad{
    padding-top:60px;
    background-color:#ffebeb;
    padding-bottom:1%;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
button{
  background-color: black;
  color: wheat;
  border-radius: 15px;
}

@media screen and (max-width: 999px) {
    .fad{
    padding-top: 10%;
}
.column {
    width: 99%;
    display: block;
    margin-bottom: 20px;
  }
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .fad{
    padding-top: 58px;
}
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  height:auto;
  text-align: center;
  background-color: #f1f1f1;
}

</style>
</head>
<body>


<div class="fad">
  <img class="hed1"src="img/reserve.jpg" />
<h3 align="center"> </h3>

<div class="row">
  <div class="column">
    <div class="card">
    <img src="img/s1.jpg" alt="John" style="width:100%">
      <h3>Standard Room</h3>
      <p> click to check availability </p>
      <p> <button style="width:100%" onclick="window.open('http://localhost/balajihotel/admin/mreservation.php','_blank')">  Click here  </button></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="img/d1.jpg" alt="John" style="width:100%">
      <h3>Deluxe Room</h3>
      <p> click to check availability </p>
      <p> <button style="width:100%" onclick="window.open('http://localhost/balajihotel/admin/mreservation.php','_blank')"> Click here</button></p>
    </div>
  </div>
   
  <div class="column">
    <div class="card">
    <img src="img/l1.jpg" alt="John" style="width:100%">
      <h3>Luxurious Suite</h3>
      <p> click to check availability </p>
      <p> <button style="width:100%" onclick="window.open('http://localhost/balajihotel/admin/mreservation.php','_blank')" >Click here</button></p>
    </div>
  </div>
</div>

</div>
