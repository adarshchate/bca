<!--This is a bus travelling gif --> 
<style>
body{
  padding-top:0px;
  background: linear-gradient(125deg,#3CB371 ,#20B2AA); 
}
#road{
  width:100%;
  height: 80px;
  background-color:gray;
  margin: 85px 0 ;
  margin-bottom: 0;
  clear:both;
  border-radius:2px;
} 
.bus {
    display: inline-block;
    width: 90px;
    height:45px;
    clear:both;
    margin:10px 10px 20px 10px;
    position :relative;
    animation: mymove 12s infinite normal ;
}

@keyframes mymove {
  100% {right: -0%;}
    40% {right: -40%;}
    0% {right:-85%;}
}

#line{
    position:relative;
    width: 100%;
    top:40px;
    height: 1px;
    clear:both;
    margin-left: auto;
    margin-right:auto;
 	 border:1px dashed white;
}


#cloud1{
  width:15vw;
  height:15vw;
  margin:-9vw;
  position:absolute;
  animation: cloudy 25s infinite normal;
}

@keyframes cloudy{
  0% { left: -10%;}
    100% {left: 100%;}
 }

#cloud2{
  opacity:0.7;
  width:13vw;
  height:13vw;
  margin:-120px;
  position:absolute;
  animation: cloudy2 20s infinite reverse;
}

@keyframes cloudy2{
    0% { left: -80%;}
    100% {left: 100%;}
 }

#cloud3{
 opacity:0.8;
  width: 10vw;
  height:10vw;
  margin:-80px;
  position:absolute;
  animation: cloudy3 40s infinite normal;
}

@keyframes cloudy3{
  0% { left:-10%;}
    90% {left: 80%;}
 }


#cloud4{
 transform: rotateY(180deg);
  opacity:1;
   width:8vw;
  height:8vw;
  margin:-80px;
  position:absolute;
  animation: cloudy4 38s infinite reverse;
}
@keyframes cloudy4{
  0% { left:-10%;}
    90% {left: 80%;}
 }
 @media screen and (max-width: 768px) {
  .bus {
    display: inline-block;
    width: 60px;
    height:45px;
    clear:both;
    margin:10px 10px 20px 10px;
    position :relative;
    animation: mymove 20s infinite normal ;
  }
  @keyframes mymove {
  100% {right: -0%;}
    40% {right: -20%;}
    0% {right:-50%;}
}
}
</style>

<body>     
<div id = 'road'>
<div id = 'cloud1'> <img src="gif/c5.png" style="width:50%;"></div>
<div id = 'cloud2'> <img src="gif/c5.png" style="width:80%;"> </div>
<div id = 'cloud3'>  <img src="gif/c5.png" style="width:80%;"></div>
<div id = 'cloud4'>  <img src="gif/c4.png" style="width:100%;"></div>
<div id = 'line'></div>
<div class ='bus'> <img src="gif/bus1.png" style="width:180%;"> </div>
</div>
</body>
