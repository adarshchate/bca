
<?php include('top.php'); ?>  <!-- including navigation bar -->

<!DOCTYPE html>
<html >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.sec1{
  text-align: justify;
  background-color:CCCCFF;
  height: 120%;
  padding-top:12px;
  padding-bottom:60px;
  text-align:center;
}

@media screen and (max-width: 600px) {
  .sec1{
  text-align: center;
  background-color:CCCCFF;
  height: auto;
  padding-top:12px;
  padding-bottom:60px;
  text-align:center;
}
}
</style>

<script>
var message = "function disabled";
function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
document.onmousedown = rtclickcheck;
 

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
            return false;
        }
        if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
            return false;
        }
    }
</script>



</head>

<body>


<div class="inac">

<?php include_once('heroimg.php'); ?>  <!-- hero imgage -->
<?php include('bus.php'); ?>     
<?php include('packageimg.php'); ?> <!-- packages for travelling Forms-->
<?php include('sideimg.php'); ?> <!-- side bar Images -->

<div class="sec1">

<h3> What we Offer </h3>
<p>
  Mumbai Airport transfers , Cabs for local and outstation hire , 
  Lohegaon Airport & Pune Railway Station Pick up / Drop Service , Cars on
  Monthly Contract basis. for more details call on +9561520144
</p>


<p> <h3>	Why Book Holidays with SkyTravel? </h3> 
 SkyTravel.com, Pune,Mumbai's leading online travel company, has a profound understanding of Indian 
 consumers travel needs and preferences. It offers a wide range of holiday packages in India and 
 across the world, catering to various segments of travellers. While the dynamic or customized tour 
 and travel packages give consumers an option to create and design their own holiday, the fixed departure
 holiday packages have a pre-designed itinerary; thus ensuring there is something to meet the holiday needs
 of every kind of traveller.
</p> 


<p> <h3> What does SkyTravel Holidays offer? </h3>      
SkyTravel offers a hassle-free holiday wherein all your travel needs are taken care of.
Be it your accommodation in comfortable hotels, convenient transfers, varied sightseeing options 
and an array of activities to choose from, delectable meals and niche experiences - the holiday 
packages are designed such to offer you an unparalleled experience. Be it popular destinations such
as Andaman, Kerala, Rajasthan and Kashmir, or more offbeat ones like North East, Ladakh and Uttarakhand,
there are tailor-made packages for destinations from all over India. From distinctive honeymoon packages
to exclusive tour packages for women, from itineraries designed for solo travellers, families with kids
and for those who are young at heart -SkyTravel has an answer to all our holiday needs.
</p>
<p> <h4>Select the Vacation Plans..Now More details contact us </h4> 
• Ladakh Tour Packages
• Andaman Tour Packages
• Kashmir Tour Packages
• Gujarat Tourism
• North East Tour Package
• Golden Triangle Tour Packages
• Luxury Tour packages
• South India Tour Packages
• International Honeymoon Packages
• Andaman Honeymoon Packages
• Kerala Honeymoon Packages
• Mauritius Honeymoon Packages
• Maldives Honeymoon Packages
• Bali Honeymoon Packages
• Europe Honeymoon Packages
• Dubai Honeymoon Packages
• Singapore Honeymoon Packages
• Thailand Honeymoon Packages
• Manali Honeymoon Packages
• Goa Honeymoon Packages
• Ooty Honeymoon Packages
• Shimla Honeymoon Packages
• Munnar Honeymoon Packages
• Kashmir Honeymoon Packages
• Coorg Honeymoon Packages
• Switzerland Honeymoon Packages
</p>


</div>
</div>
</body>
</html> 
<?php include('bottom.php'); ?>  <!-- bottom bar  -->