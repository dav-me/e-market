   <?php
    // 
    $countRant = _countLocationCars($bdd);
    $countSale = _countSalesCars($bdd);
    $countBata = _countBataCars($bdd);
    // 
    // creating array of choisis
    $toy = array("nom"=>"TOYOTA","img"=>"../_bx_assoc_imgs_/_bx_banners_/toyotasm.png");
    $aud = array("nom"=>"AUDI","img"=>"../_bx_assoc_imgs_/_bx_banners_/audism.png");
    $cit = array("nom"=>"CITROEN","img"=>"../_bx_assoc_imgs_/_bx_banners_/citroensm.png");
    $mer = array("nom"=>"MERCEDES BENZ","img"=>"../_bx_assoc_imgs_/_bx_banners_/mercedesbenzsm.png");
    $mit = array("nom"=>"MITSUBISHI","img"=>"../_bx_assoc_imgs_/_bx_banners_/mitsubishism.png");
    $nis = array("nom"=>"NISSAN","img"=>"../_bx_assoc_imgs_/_bx_banners_/nissansm.png");
    $ope = array("nom"=>"OPEL","img"=>"../_bx_assoc_imgs_/_bx_banners_/opelsm.png");
    $sub = array("nom"=>"SUBARU","img"=>"../_bx_assoc_imgs_/_bx_banners_/subarusm.png");
    $suz = array("nom"=>"SUZUKI","img"=>"../_bx_assoc_imgs_/_bx_banners_/suzukism.png");
    $maz = array("nom"=>"MAZDA","img"=>"../_bx_assoc_imgs_/_bx_banners_/mazdasm.png");
    $hyu = array("nom"=>"HYUNDAI","img"=>"../_bx_assoc_imgs_/_bx_banners_/hyundaism.png");
    $vol = array("nom"=>"VOLVO","img"=>"../_bx_assoc_imgs_/_bx_banners_/volvosm.png");
    $bmw = array("nom"=>"BMW","img"=>"../_bx_assoc_imgs_/_bx_banners_/bmwsm.png");
    $vw = array("nom"=>"VW","img"=>"../_bx_assoc_imgs_/_bx_banners_/vwsm.png");
    $for = array("nom"=>"FORD","img"=>"../_bx_assoc_imgs_/_bx_banners_/fordsm.png");
    $kia = array("nom"=>"KIA MOTORS","img"=>"../_bx_assoc_imgs_/_bx_banners_/kiamotorssm.png");

    $tabMark = array($toy,$aud,$cit,$mer,$mit,$nis,$ope,$sub,$suz,$maz,$hyu,$vol,$bmw,$vw,$for,$kia);
    shuffle($tabMark); 
    ?>
    <div class="col-xs-10 col-9 p-0  shadow bg-light px-2 pt-3 l hs">
    <!-- section 1 -->
      <div class="w-100 bg-light border p-2">
        <div class="col-lg p-2 underlined cursor-p" id="pull-d-nav-categ">
           <span>Choix par Categorie</span>
           <span class="fa fa-caret-down float-right"></span>
        </div>
        <nav class="nav flex-column mb-5 hd-sm-" id="nav-categ">
          <a class="nav-link active border-bottom" href="?page=_myShop">
            <b>Tous <span class="badge badge-warning badge-pill float-right"><?php echo($countRant+$countSale) ?></span></b>
          </a>
          <a class="nav-link border-bottom" href="?page=_listingLease">
            <b>En location <span class="badge badge-warning badge-pill float-right"><?php echo($countRant) ?></span></b>
          </a>
          <a class="nav-link border-bottom" href="?page=_listingSale">
            <b>En Ventes <span class="badge badge-warning badge-pill float-right"><?php echo($countSale) ?></span></b>
          </a>
          <a class="nav-link border-bottom" href="#">
            <b>Interchangeables <span class="badge badge-primary badge-pill float-right"><?php echo($countBata) ?></span></b>
          </a>
        </nav>
      </div>
    <!-- end section 1 -->
    <!-- section 2 -->
    <div class="w-100 p-2 bg-light border mt-2">
      <div class="col-lg p-2 underlined cursor-p" id="pull-d-nav-marq">
           <span>Choix par marque</span>
           <span class="fa fa-caret-down float-right"></span>
        </div>
        <nav class="nav flex-column mb-5 hd-smd" id="nav-marq">
    <?php
    foreach ($tabMark as $key) {
    ?>
        <a class="nav-link active" href="?page=_searchby&_sortenKey=<?php echo($key['nom']) ?>">
            <b> <img src="<?php echo($key['img']) ?>" alt="<?php echo($key['nom']) ?> logo" width="35px" class="border p-1 mr-2"> <?php echo($key['nom']) ?></b>
        </a>
    <?php  
    }
   ?> 
   </nav>
   </div>
   <!-- end section 2 -->
   <div class="w-100 bg-light p-3 mt-3 mb-3">
        <span>&copy; <b>Les Milles Services</b></span>
      </div>
   </div>
    <!-- <div class="col-lg-3 my-4">
        <div class="col-lg rounded bg-secondary p-2 text-white">
           <span>Choix par Categorie</span>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link active border-bottom" href="?page=_myShop">
            <b>Tous <span class="badge badge-warning float-right">1</span></b>
          </a>
          <a class="nav-link border-bottom" href="?page=_listingLease">
            <b>En location <span class="badge badge-warning float-right">535353</span></b>
          </a>
          <a class="nav-link border-bottom" href="?page=_listingSale">
            <b>En Ventes <span class="badge badge-warning float-right">63636</span></b>
          </a>
          <a class="nav-link border-bottom" href="#">
            <b>Interchangeables <small><span class="badge badge-secondary float-right">535353</span></small></b>
          </a>
        </nav>
        <div class="col-lg rounded bg-secondary p-2 text-white">
           <span>Choix par marque</span>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link active" href="?page=_searchby&_sortenKey=toyota">
            <b> <img src="../_bx_assoc_imgs_/_bx_banners_/toyotasm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Toyota</b>
          </a>
          <a class="nav-link" href="?page=_listingLease">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/audism.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Audi</b>
          </a>
          <a class="nav-link" href="?page=_listingSale">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/citroensm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Citroen</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/mercedesbenzsm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Merces Benz</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/mitsubishism.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Mitsubishi</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/nissansm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Nissan</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/opelsm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Opel</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/subarusm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Subaru</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/suzukism.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Suzuki</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/mazdasm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Mazda</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/hyundaism.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> hyundai</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/volvosm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Volvo</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/bmwsm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> BMW</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/vwsm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> VW</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/fordsm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Ford</b>
          </a>
          <a class="nav-link" href="#">
          <b> <img src="../_bx_assoc_imgs_/_bx_banners_/kiamotorssm.png" alt="Toyota logo" width="35px" class="border p-1 mr-2"> Kia Motors</b>
          </a>
        </nav>
    </div> -->
   <script>
     const cxcateg = document.getElementById('pull-d-nav-categ');
     const dvcateg = document.getElementById('nav-categ');
     const cxmarque = document.getElementById('pull-d-nav-marq');
     const dvmarque = document.getElementById('nav-marq');

     cxcateg.onclick = function(){
       if(dvcateg.style.display === 'none'){
          dvcateg.style.display = 'block';
          if(dvmarque.style.display === 'block'){dvmarque.style.display === 'none';} 
       }else{
        dvcateg.style.display = 'none';
       }
     }
     cxmarque.onclick = function(){
       if(dvmarque.style.display === 'none'){
        dvmarque.style.display = 'block';
        if(dvcateg.style.display === 'block'){ dvcateg.style.display === 'none';}
       }else{
        dvmarque.style.display = 'none';
       }
     }

   </script>