
<div class="mt-4" id="pub" style="max-width:700px;">

  <img class="mySlides w3-animate-bottom" src="_bx_assoc_imgs_/_images_pub/25d.jpg" style="width:120%">
  <img class="mySlides w3-animate-top" src="_bx_assoc_imgs_/_images_pub/CAR3.jpg" style="width:120%">
  <img class="mySlides w3-animate-top" src="_bx_assoc_imgs_/_images_pub/CAR1.jpg" style="width:120%">
  <img class="mySlides w3-animate-top" src="_bx_assoc_imgs_/_images_pub/CAR2.jpg" style="width:120%">
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 10000);    
}
</script>
