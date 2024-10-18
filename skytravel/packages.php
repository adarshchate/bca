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
  color: black;

}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
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
      <img src="image/kullumanali.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <strong> <p style="font-size:20px;">Shimla,Kasol,
        Manali</p> </strong>
        <p class="title">A.C. Bus/Car for entire trip as per itinerary Toll taxes,
         parking, driver charges etc All applicable hotel taxes GST. </p>
        <p>Price:28000 <br>Duration: 3N-4D</p>
        <p> <button class="button" onclick="location.href = 'admin/travelbook.php';">Select</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/hawa.jpg" alt="Mike" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Hawa Mahal,Amber
        palace,City palace</p> </strong>
        <p class="title">A.C. Bus/Car for entire trip as per itinerary Toll taxes,
         parking, driver charges etc All applicable hotel taxes GST. </p>
        <p>Price:28000 <br> Duration: 3N-4D</p>
        <p> <button class="button" onclick="location.href = 'admin/travelbook.php';">Select</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/taj.jpg" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Taj Mahal,
      agra fort</p> </strong>
        <p class="title">A.C. Bus/Car for entire trip as per itinerary Toll taxes,
         parking, driver charges etc All applicable hotel taxes GST.</p>
        <p>Price:20000 <br>Duration: 2N-3D</p>
        <p> <button class="button" onclick="location.href = 'admin/travelbook.php';">Select</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="image/kr.jpg" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Kothari's Patwa 
        Haveli,
        Jaisalmer fort,
        Vyas Chhatri</p> </strong>
        <p class="title"> A.C. Bus/Car for entire trip as per itinerary<Br> Toll taxes,
         parking, driver charges etc All applicable hotel taxes GST.</p>
        <p>Price:22000 Duration: 3N-4D</p>
        <p> <button class="button" onclick="location.href = 'admin/travelbook.php';">Select</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="image/bk.jpg" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Bhaktapur,
        Kathmandu 
         Pokhara,
         Nagarkot</p> </strong>
        <p class="title"> A.C. Bus/Car for entire trip as per itinerary Toll taxes,
         parking, driver charges etc All applicable hotel taxes GST.</p>
        <p>Price:50000 <br> Duration: 7N-8D</p>
        <p> <button class="button" onclick="location.href = 'admin/travelbook.php';">Select</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="image/mh.jpg" alt="John" style="width:100%">
      <div class="container">
      <strong> <p style="font-size:20px;">Mahabaleshwar,
         Elphinstone Point,
          Pratapgad </p> </strong>
        <p class="title">A.C. Bus/Car for entire trip as per itinerary Toll taxes,
         parking, driver charges etc All applicable hotel taxes GST.</p>
        <p>Price:16000 &nbsp;Duration: 3N-4D</p>
        <p> <button class="button" onclick="location.href = 'admin/travelbook.php';">Select</button></p>
      </div>
    </div>
  </div>
</div>


</body>
</html>
