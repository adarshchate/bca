                                         
<!DOCTYPE html> <!--sent data admin busbook-->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script type="text/javascript">
function validateForm() {
  var x = document.forms["myForm"]["fr"].value;
  var y = document.forms["myForm"]["too"].value;
  if (x == y) {
    alert("selct the correct destination");
    return false;
  }
  else{
    alert("fill the next form");
  }
}
</script> 

<style>
.ac {
  background-color:#9a97c9;
  width: 100%;
  top: auto;
  padding: 20px 25px;
}
.c {
  width: 100%;
  background: rgb(11, 13, 24, 0.6);
  padding:10px;

  border-radius:20px;
  color: #fff;  
  }
.ff{
  width: 180px;
  margin-left: auto;
  margin-right:auto;
  align-items: center;
  justify-content: space-between;
  z-index: 9; 
  position: relative;
  padding: 10px 12px 10px 5px; 
  font-size: 100%;
  border-radius:30px;
  position: relative;
  cursor: pointer;
  background-color:#F5DEB3;
}

.submit {
  background: #f8ba0f;
  width: 140px;
  color: #fff;
  font-size: 13px;
  margin-top: 15px;
  padding: 10px 30px;
  border-radius: 40px;
  cursor: pointer; }

.submit:hover {
 background-color: #ce9906;
}

@media screen and (max-width: 768px) {
  .ff {
    width: 100%;
    height:10%;
    font-size:18px;
    padding:10px;
    cursor: pointer;
    margin-bottom: 20px; 
    margin-left: auto;
    margin-right:auto;
    justify-content: space-between;
    flex-direction: column;
    }
    .submit{
      padding: 10px 30%;
      width: 100%;
    }
    .c {
   width: 100%;
   background: rgb(11, 13, 24, 0.6);
   padding:10px;
   
  border-radius:30px;
   color: #fff;  
  }
    
  }         
  

  @media screen and (max-width: 1165px) {
  .ff {
    width:100%;
    height:10%;
    font-size:20px;

    text-align: center;
    padding:10px;
    padding: 15px 50px 0px 29px; 
    justify-content: space-between;
    cursor: pointer;
    margin-bottom: 20px; 
    margin-left: auto;
    margin-right:auto;
    flex-direction: column;
    }
    .submit{
      padding: 10px 30%;
      width: 100%;
    }
    .c {
  width: 100%;
  text-align: center;
  height:fit-content;
  background: rgb(11, 13, 24, 0.6);
  padding:10px;
  border-radius:50px;
  color: #fff;  
  }
}     

</style>
</head>

<body>
<div class="ac">       
<div class="c">
<!--method="POST" action="admin/busbook.php"-->
<form method="POST" name="myForm"  onsubmit="return validateForm()" action="admin/buspricelist.php">
        
  From 
<select name="fr" class="ff" id="t1"> 
<option value="solapur"> solapur </option>
<option value="hadapsar"> hadapsar </option>
<option value="wakad"> Wakad</option>
<option value="panvel"> panvel </option>
</select>         

  To 
<select name="too" class="ff" id="t2"> 
<option value="panvel"> panvel </option>
<option value="wakad"> wakad </option>
<option value="hadapsar"> hadapsar</option>
<option value="solapur"> solapur </option>
</select>          

 DATE
<input type="date"  name="dt" class="ff" min="<?php echo date('Y-m-d');?>" max="<?php echo date('2021-12-30');?>" required>

Quantity
<input type="number" name="qty" placeholder="Qty" class="ff" min="1" max="30"  required>


<input type="submit" class="submit" value="Book now" onclick="validate()" /> 

</form>

</div> 
</div>
</body>
</html>