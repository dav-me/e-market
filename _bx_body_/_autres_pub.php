<style type="text/css">

</style>

<br><div id="s" class="autre_pub" >
<!--Contenu -->
	
  
 <!-- <img style=" position:sticky; top:26rem;" class="stick3" src="_bx_assoc_imgs_/_images_pub/25d.jpg" style="width:120%">-->
<div style=" position:sticky; top:4rem;">
              <img class="mySli" src="_bx_assoc_imgs_/_images_pub/1.jpg" >
              <img class="mySli" src="./_bx_assoc_imgs_/_images_pub/2.jpg">
              <img class="mySli" src="./_bx_assoc_imgs_\_images_pub/e.jpg">
</div>
<div class="mt-2" style=" position:sticky; top:28rem;">
              <img class="mySlide" src="_bx_assoc_imgs_/_images_pub/pu1.jpg">
              <img class="mySlide" src="_bx_assoc_imgs_/_images_pub/1.jpg" >
              <img class="mySlide" src="./_bx_assoc_imgs_/_images_pub/2.jpg">
              <img class="mySlide" src="./_bx_assoc_imgs_\_images_pub/e.jpg">
              <img class="mySlide" src="./_bx_assoc_imgs_\_images_pub/pF_CAR2.jpg">
           
</div>

<style type="text/css">
.autreclass {
    padding-bottom: 100%;
    border: none;
    border-right: 1px solid #007bff;
  }

@media only screen and (max-width:800px) {
  /* For tablets: */
   .autre_pub{
    display: none;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .autreclass {
    display: none ;
  }
}

</style>

<script>
// fonction 1
var myIndex = 0;
car1();
function car1() {
  var i;
  var x = document.getElementsByClassName("mySli");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(car1, 3400);    
}

//fonction 2

var myIndex = 0;
car2();
function car2() {
  var i;
  var x = document.getElementsByClassName("mySlid");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(car2, 4500);    
}
//fonctio 3
var myIndex = 0;
car3();
function car3() {
  var i;
  var x = document.getElementsByClassName("mySlide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(car3, 6700);    
}
</script>

