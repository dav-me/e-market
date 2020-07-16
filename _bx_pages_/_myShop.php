<style>
    li.active_sh a{
        background: #1a82db;
    }
</style>
    <?php
    
    $pageno = $_GET['tabIndx'] ?? 1;
    $cat = 0;
    $categorie  = $_GET['_categ'] ?? 'e18305641ab8984e98815621ada7477e'; #hash 84_cat
    switch($categorie){case 'e18305641ab8984e98815621ada7477e': $cat = 95;break; case '0a243644fa3d0ceb0dd57dea2f3cd99f': $cat = 84; break; default : $cat = 95;break;}
    $no_elem_per_page = 24;
    $offset = ($pageno - 1) * $no_elem_per_page;
    $row = count_row($cat,$bdd);
    $data = loadForPagination((int)$offset,(int)$no_elem_per_page,$cat,$bdd);
    $total_page = ceil($row / $no_elem_per_page);
    $nextpage = ($total_page <= $pageno) ? $total_page : ($pageno + 1);
    $prevpage = ($pageno > 1) ? ($pageno - 1) : 1;
    if(!empty($data)){
    for($i = 0; $i < count($data); $i++){
    $indPrd = $data[$i];
    $n = $indPrd->marque.' '.$indPrd->model;
    $name = strlen($n) < 13 ? ($n) : substr(($n),0,12).'...';
    $badge = '';
    switch ($indPrd->categorie) {
     case 84:
     $badge = ('<div class="badge badge-primary shadow"><b>Location </b></div>');
       break;
     case 95:
       $badge = ('<div class="badge badge-warning shadow"><b>Vente</b></div>');
           break;
     default:
       # code...
       $badge = ('V/A');
       break;
   }
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
    <section class="product-shop spad pt-0">
        <div class="container">
            <div class="row">
            <!-- include left menu -->
            <?php include('./_bx_body_/_sct_left_menu.php') ?>
            <!-- end menu -->
                <div class="col-lg-9 order-1 order-lg-2 mt-4">
                    <!-- <div class="product-show-option">
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
                    </div> -->
                    <div class="product-list bg-light px-3 border">
                        <div class="row" id="product_listing">
                            <?php  
                                // $indPrd = new Product();
                                for ($i = 0; $i < count($data); $i++) { 
                                    $indPrd = $data[$i];
                            ?>
                            
<!-- ----------------------------------------------------------------------------------- -->
    <div class="col-lg-3 col-6 px-1 my-1">
      <div class="w-100 border p-1">
          <div class="col-lg-12 bg-primary px-0">
            <a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->categorie)?>&_idProduct_=<?php echo($indPrd->id);?>" class="nav-img-link" class="nav-img-link">
                <div class="ribbon-wrapper ribbon-sm">        
                    <?php 
                      echo($badge);
                    ?>
                </div>
                <img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->imgPrcl) ?>" alt="car : <?php echo($indPrd->id) ?>">
            </a>
          </div>
          <div class="col-lg-12 overflow-auto pl-1 pb-0">
            <a href="?page=_product&_prd_get_cat_=<?php echo($cat)?>&_idProduct_=<?php echo($indPrd->id);?>" class="nav-link p-0 font-weight-bold">
                  <i class="text-uppercase text-primary"><?php echo($indPrd->marque) ?></i><br>
                  <b><small><?php echo($indPrd->model) ?></small></b>
            </a>
            <p class="mt-0 pt-0"><b>prix:</b>&nbsp;<strong><b class="text-danger"><?php echo($indPrd->price)?>$</b></strong></p>
            <small><b>portes</b> : <?php echo($indPrd->porte)?> | <b>sièges</b> : <?php echo($indPrd->siege)?> | <b>Trans. :</b> <?php echo(substr($indPrd->transmission,0,3))?></small>
          </div>
      </div>
    </div>
  <!-- ----------------------------------------------------------------------------------- --> 
                            
                            <?php } } } ?>
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