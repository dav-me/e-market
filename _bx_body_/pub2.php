<style type="text/css">
	.text-en-riban{
		height: 70px;
		overflow: hidden;
		background: white;
    	transition:3s all;
    	padding: 0 7px;
	}
	.annonces{

		width:calc(450px * 8);
		animation: glisse 60s infinite;
		padding: 2px 2px;
	}
	.annonce{
	    border-bottom: 2px solid #34495e;
	    width:450px;
	    height: 70px;
	    background: transparent;
	    #-moz-box-shadow:0px 0px 10px 0px rgba(0,0,0,0.75);
	    #-webkit-box-shadow:0px 0px 0px 0px rgba(0,0,0,0.75);
	    #box-shadow:0px 0px 30px 0px rgba(0,0,0,0.75);
	}
		@keyframes glisse {

		0%{
			transform: translateY(0);
		}
		
		11%{
			transform: translateX(-70px);
		}
		23%{
			transform: translateY(-140px);
		}
		35%{
			transform: translateY(-210px);
		}
		59%{
			transform: translateY(-350px);
		}	71%{
			transform: translateY(-420px);
		}
		82%{
			transform: translateY(-490px);
		}
		100%{
			transform: translateY(0); 
		}
	}
</style>
<div class="text-en-riban w-100 col-lg-12 mt-1">
	<div class="annonces w-100">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro2.jpg" alt="html 5:images">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro1.jpg" alt="html 5: images">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro3.jpg" alt="html 5: images">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro2.jpg" alt="html 5: images">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro1.jpg" alt="html 5:images">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro3.jpg" alt="html 5: images">
	        <img class="annonce w-100" src="./_bx_assoc_imgs_/_images_pub/haut_Pro1.jpg" alt="html 5: images">
	</div>
</div>