

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=radio]{
  width: 5%;
  transform:scale(1.3);
  padding: 12px 20px;
  margin: 8px 12px;
}
input[type=number]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=date]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.ff{
  width: 10%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

 /* hiding a number arrows */                    
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
 /* sizing on dropdown list */  
 #pc{
  width: 80%;
  font-size:18px;
  margin: 8px 0;
  display: inline-block;
  border-radius:none;
  border: 1px solid #ccc;
  box-sizing: border-box;}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}


/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

.animate {
  animation: animatezoom 0.6s
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 720px) {
 
 #pc{
  width: 60%;
  font-size:10px;
  margin: 8px 0;
  display: inline-block;
  border-radius:none;
  border: 1px solid #ccc;
  box-sizing: border-box;}
}
@media screen and (max-width: 460px) {
 
 #pc{
  width: 50%;
  height:fit-content;
  font-size:7px;
  margin: 8px 0;
  display: inline-block;
  box-sizing: border-box;}
}

@media screen and (max-width: 300px) {
 
 #pc{
  width: 100%;
  height:6px;
  height:fit-content;
  position: relative;
  z-index: 5;
  font-size:8px;
  margin: 8px 0;
  display: block;
  box-sizing: border-box;
}
input[type=date]{
  width: 100%;
  height:2px;
  padding: 12px 20px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  height:2px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


input[type=number]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  height:2px;

}

} 


</style>
</head>
<body>


<form class="modal-content animate" method="post" action="traveldata.php" >

<div class="imgcontainer">
<img src="ad/t1.gif" alt="Avatar" class="avatar"> 
</div>

<div class="container"> 
    
    <label for="uname"><b>Select Pakage</b></label> <br>
     <select name="pk" class="pk" id="pc" required> 
     <option value="shimla">Shimla,Kasol,Manali</option>
     <option value="hawa"> Hawa Mahal,Amber palace,City palace </option>
     <option value="taj">Taj Mahal, agra fort</option>
     <option value="patwa"> Kothari's Patwa Haveli,Jaisalmer fort,Vyas Chhatri </option>
     <option value="nepal">Bhaktapur,Kathmandu Pokhara,Nagarkot </option>
     <option value="mahab">Mahabaleshwar,Elphinstone Point,Pratapgad </option>
     </select>  <br> 

    <label for="uname"><b>First name</b></label>
    <input type="text" placeholder="Enter Username" name="fn" required minlength="2" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">

    <label for="uname"><b>Last name</b></label>
    <input type="text" placeholder="Enter Username" name="ln" required minlength="3" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
 
    <label for="uname"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter phone number" name="cno" required minlength="10" maxlength="12"  pattern="[0-9]+">

    <label for="uname"><b>Date</b></label>
    <input type="date"  name="dt" class="ff" min="<?php echo date('Y-m-d');?>" max="<?php echo date('2021-12-30');?>" required>
     
    <label for="uname"><b> Qty/Seats of booking</b></label>
    <input type="number" name="qty" placeholder="Qty/Seats" min="1" max="30"  required>

    <button type="submit">Submit</button>
</div>
</form>
</div>   
</body>
</html>
