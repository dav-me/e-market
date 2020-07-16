<style>
    li.active_sh a{
        background: #1a82db;
    }
</style>
    <?php
    
 $pageno = $_GET['tabIndx'] ?? 1;
 $cat = 0;
 $categorie  = $_GET['_categ'] ?? 'e18305641ab8984e98815621ada7477e'; #hash 95_cat
 switch($categorie){case 'e18305641ab8984e98815621ada7477e': $cat = 95;break; case '0a243644fa3d0ceb0dd57dea2f3cd99f': $cat = 84; break; default : $cat = 95;break;}
 $no_elem_per_page = 16;
 $offset = ($pageno - 1) * $no_elem_per_page;
 $row = count_row_all($bdd);

 $data = loadForPaginationAll((int)$offset,(int)$no_elem_per_page,$bdd);
 $total_page = ceil($row / $no_elem_per_page);
 $nextpage = ($total_page <= $pageno) ? $total_page : ($pageno + 1);
 $prevpage = ($pageno > 1) ? ($pageno - 1) : 1;
 $plageleft = (1 + $no_elem_per_page* ($pageno - 1));
 $shown = count($data);
 $plageright = ($shown + $no_elem_per_page * ($pageno - 1));
     
     ?>
        <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                        <span>Véhicules</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="?page=_myShop">Toutes categories</a></li>
                            <li><a href="?page=_listingLease">Location</a></li>
                            <li><a href="?page=_listingSale">Achat</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Marques</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    Toyota
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-diesel">
                                    Mercedes Benz
                                    <input type="checkbox" id="bc-diesel">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- <div class="bc-item">
                                <label for="bc-polo">
                                    Polo
                                    <input type="checkbox" id="bc-polo">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="bc-item">
                                <label for="bc-tommy">
                                    Tommy Hilfiger
                                    <input type="checkbox" id="bc-tommy">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Prix</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filtre</a>
                    </div> -->
                    <!-- <div class="filter-widget">
                        <h4 class="fw-title">Couleur</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Noire</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Bleu</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Jaune</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Rouge</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Vert</label>
                            </div>
                        </div>
                    </div> -->
                    <div class="filter-widget">
                        <!-- <h4 class="fw-title">Suggestions</h4> -->
                        <div class="fw-tags">
                            <!-- <a href="#">Towel</a>
                            <a href="#">Chaussures</a>
                            <a href="#">Vestes</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Chapeau homme</a>
                            <a href="#">Backpack</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Triage par défaut</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                               <p>Affichés <span class="badge badge-primary p-2"><?php echo($shown) ?></span> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo($plageleft)?> - <?php echo($plageright) ?> sur <?php echo($row) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row" id="product_listing">
                            <?php  
                                // $indPrd = new Product();
                                $srt = 9; $pr = _onLoadProduct($limit,$offset,$bdd); if($pr != null) { 
                                for ($i = 0; $i < count($data); $i++) { 

                                    $indPrd = $data[$i];
                                        // $castedProduct = _convertToProduct($indPrd);// echo($indPrd->get_id());
                            ?>  
                        <a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->categorie)?>&_idProduct_=<?php echo($indPrd->id);?>" class="">
                            <div class="col-3 col-lg-3">
                                <div class="product-item">
                                    <div class="pi-pic make_shadow">
                                   <div class="ribbon-wrapper ribbon-lg bg-transparent">
                               <?php 
                                switch ($indPrd->categorie) {
                                  case 84:
                                 echo('<div class="ribbon bg-primary shadow"><b>Location </b></div>');
                                    break;
                                  case 95:
                                    echo('<div class="ribbon bg-warning shadow"><b>Vente</b></div>');
                                        break;
                                  default:
                                    # code...
                                    break;
                                }
                               ?>
                              </div>
                                        <img src="_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->imgPrcl); ?>" alt="img_product">
           <!--                             <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div> -->

                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo($indPrd->marque); ?></div>
                                        <a href="#">
                                            <h5><?php echo($indPrd->model); ?></h5>
                                        </a>
                                        <div class="product-price">
                                            $<?php echo($indPrd->price); ?>
                                            <!-- <span>$21000.00</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                               
                            <?php } } ?>
                        </div>
                    </div>
                    <div class="loading-more">
<nav aria-label="Page navigation example" class="col-lg-12">
  <ul class="pagination pagination-md justify-content-center">
    <?php if($prevpage > 1){ ?>
    <!-- --------------------------------------- -->
      <li class="page-item" id="prev">
      <a href="?page=_myShop&tabIndx=<?php echo($prevpage)?>&_categ=e18305641ab8984e98815621ada7477e" class="page-link" aria-label="Next" id="btn-prev">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Prev</span>
      </a>
    </li>
    <!-- ------------------------------------------ -->
    <?php }else{ ?>
    <!-- ------------------------------------------ -->
     <li class="page-item disabled" id="prev">
      <a href="?page=_myShop&tabIndx=<?php echo($prevpage)?>&_categ=<?php echo($cat) ?>" class="page-link" aria-label="Next" id="btn-prev">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Prev</span>
      </a>
    </li>
    <!-- -------------------------------------------- || -->
    <?php } ?>
    <?php for($i = 0; $i < $total_page; $i++){ ?>
        <li class="page-item pa-ge" id="page_<?php echo($i+1); ?>"><a href="?page=_myShop&tabIndx=<?php echo($i+1)?>&_categ=e18305641ab8984e98815621ada7477e" class="page-link pa-ge" id="<?php echo($i+1); ?>"><?php echo($i+1); ?></a></li>   
   <?php } ?>
    <?php if($nextpage === $total_page) {?>
    <!-- --------------------------------------------- || -- -->
      <li class="page-item disabled" id="next">
      <a  href="?page=home&tabIndx=<?php echo($nextpage)?>&_categ=<?php echo($cat) ?>" class="page-link" aria-label="Next" id="btn-next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    <!-- ------------------------------------------------ -->
    <?php }else{ ?>
    <!-- ------------------------------------------------- -->
      <li class="page-item" id="next">
      <a  href="?page=_myShop&tabIndx=<?php echo($nextpage)?>&_categ=e18305641ab8984e98815621ada7477e" class="page-link" aria-label="Next" id="btn-next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    <!-- ------------------------------------------------ -->
    <?php } ?>
  </ul>
</nav>
<script>
(function(){
  let active = '<?php echo($pageno) ?>';
  let desactive = 0;
  const totalPage = '<?php echo($total_page) ?>';
  const nextState = document.getElementById('next').classList;
  const prevState = document.getElementById('prev').classList;
const container = document.getElementById('product_listing');
const pages = document.getElementsByTagName('a');
activatePagination();
function activatePagination(){
  //alert('<?php echo($cat) ?>')
  //desactivatePagination()
  if(active < totalPage){nextState.remove('disabled') }
  if(active > 1){prevState.remove('disabled') }
  const li = document.getElementById('page_'+active);
  //desactive = active;
  li.classList.add('active');
}
/*function desactivatePagination(){
  desactive = active;
  if(active === 1){prevState.add('disabled') }
  if(active > 1){prevState.remove('disabled') }
  if(active === totalPage){nextState.add('disabled') }
  if(active < totalPage){nextState.remove('disabled') }
  const li = document.getElementById('page_'+desactive);
  li.classList.remove('active');
  //alert(totalPage+'------'+desactive)
}
document.getElementById('btn-next').onclick = function(evt){
 	if(active === totalPage){nextState.add('disabled') }
    do{
    
            if(active === totalPage){nextState.add('disabled') }
	    if(active < totalPage){
	    nextState.remove('disabled');
	    
	    desactivatePagination();
	    active ++;
    	    
            //active = (evt.target.id);
            activatePagination();
            const indexPg = active;
	    const xhr = new XMLHttpRequest();
            xhr.timeout = 20000;
            xhr.open('GET','./js/_pagination.php?tabIndx='+indexPg,true);
            xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
            $.toaster({ priority : 'success', title : 'Page', message : 'Page charger avec succes'})
              //container.innerHTML = null;
              //alert(xhr.responseText);
              container.innerHTML = xhr.responseText;
              }
           }
           xhr.send();
	    }
           break;
    }while(active < totalPage)
}
document.getElementById('btn-prev').onclick = function(evt){
           do{
    
            if(active === 1){prevState.add('disabled') }
	    if(active > 1){
	    prevState.remove('disabled');
	    
	    desactivatePagination();
	    //alert(active)
	    active --;
    	    //alert(active)
            //active = (evt.target.id);
            activatePagination();
            const indexPg = active;
	    const xhr = new XMLHttpRequest();
            xhr.timeout = 20000;
            xhr.open('GET','./js/_pagination.php?tabIndx='+indexPg,true);
            xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
            $.toaster({ priority : 'success', title : 'Page', message : 'Page charger avec succes'})
              //container.innerHTML = null;
              //alert(xhr.responseText);
              container.innerHTML = xhr.responseText;
              }
           }
           xhr.send();
	    }
           break;
    }while(active >= 1 && active < totalPage)

}
for(let page of pages){
    if(page.className === 'page-link pa-ge'){
        page.addEventListener('click',(evt)=>{
            
            desactivatePagination();
            active = (evt.target.id);
            activatePagination();
            const indexPg = active;
	    const xhr = new XMLHttpRequest();
	    //xhr.setRequestHeader('content-type','text/plain');
            xhr.timeout = 20000;
            xhr.open('GET','./js/_pagination.php?tabIndx='+indexPg,true);
            xhr.onreadystatechange = function(){
            if(xhr.readyState === 4 && xhr.status === 200){
            $.toaster({ priority : 'success', title : 'Page', message : 'Page charger avec succes'})
              //container.innerHTML = null;
              //alert(xhr.responseText);
              container.innerHTML = xhr.responseText;
    }
}
xhr.ontimeout = function(){
    $.toaster({ priority : 'Warning', title : 'Délais depasser', message : 'Votre connexion n\'est pas bonne vérifiez votre connexion internet'})
}
xhr.send();
                
        },false);
    }
} */
})();
</script>
                    </div>
                </div>
            </div>
        </div>
    </section>