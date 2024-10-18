  <!-- Gif on window for bus bookings buttons  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("fast"|1500);
});
</script>

<style>
.loader {
    position:fixed;  
    left: 0px;
    top: 10%;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('ad/df.png') 50% 50% no-repeat rgb(249,249,249);
    opacity:100%;
}
</style>
<div class="loader"> </div>   <!-- Gif load  -->