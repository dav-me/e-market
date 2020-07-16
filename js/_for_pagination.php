  <!--<script src="js/jquery.toaster.js"></script>-->
  <?php 
 //include_once('./functions.php');
/* function count_row($bdd){
   $req = $bdd->prepare('SELECT COUNT(*) FROM _cars_table');
   $req->execute();
   $req = $req->fetchColumn();
   return $req;
 } 
 function loadForPagination($offset,$recordPerPage,$bdd){
   $per_page = (int) $offset;
   $start = (int) $recordPerPage;
   $pre = $bdd->prepare("SELECT * FROM _cars_table LIMIT :limit OFFSET :offset");
   $pre->bindValue(':limit', (int) $start, PDO::PARAM_INT);
   $pre->bindValue(':offset', (int) $per_page, PDO::PARAM_INT);
   $pre->execute();
   $pre = $pre->fetchAll();
   
   return $pre;
 }*/
 $pageno = $_GET['tabIndx'] ?? 1;
 $cat = 0;
 $categorie  = $_GET['_categ'] ?? 'e18305641ab8984e98815621ada7477e'; #hash 84_cat
 switch($categorie){case 'e18305641ab8984e98815621ada7477e': $cat = 95;break; case '0a243644fa3d0ceb0dd57dea2f3cd99f': $cat = 84; break; default : $cat = 95;break;}
 $no_elem_per_page = 16;
 $offset = ($pageno - 1) * $no_elem_per_page;
 $row = count_row($cat,$bdd);
 $data = loadForPagination((int)$offset,(int)$no_elem_per_page,$cat,$bdd);
 $total_page = ceil($row / $no_elem_per_page);
 $nextpage = ($total_page <= $pageno) ? $total_page : ($pageno + 1);
 $prevpage = ($pageno > 1) ? ($pageno - 1) : 1;
 if(!empty($data)){
 for($i = 0; $i < count($data); $i++){
 $indPrd = $data[$i];
 ?>

 		<a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->categorie)?>&_idProduct_=<?php echo($indPrd->id);?>" class="" id="itemImg">
                    <div class="col-6, col-lg-3 m-0, p-1, contenaire">
                    
                        <div class="product-item">
                            <div class="pi-pic make_shadow" >
                             <div class="ribbon-wrapper ribbon-lg bg-transparent"">
                             
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
                              
                                <img src="/_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->imgPrcl); ?>" alt="img_product" id="red" >
                                
      				<!--
      				<div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>  -->
                            </div>
                           <div class="pi-text mt-1 pt-1">

                                <div class="catagory-name">
                                  <?php echo '<p>'.($indPrd->marque).' '.($indPrd->model).'</p>'; ?>
                                  <p><a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->categorie)?>&_idProduct_=<?php echo($indPrd->id);?>"></a></p>
                                </div>

                                <p id="for-m">$<?php echo ' '.($indPrd->price); ?></p>
                                <div class="descr">
                                  <?php echo'volant :'.($indPrd->volant).'<br>Porte :'.($indPrd->porte).'<br>Couleur :'.($indPrd->couleur); ?>
                                </div>
                                 <div>
                                 	<ul id="det">
                                 		<li>
                                 		<i class="fa fa-star"></i>
                                 		</li>
                                 		<li>
                                 		<i class="fa fa-star"></i>
                                 		</li>
                                 		<li>
                                 		<i class="fa fa-star"></i>
                                 		</li>
                                 	</ul>
                                 </div>
                                 
                            </div>
                        </div>
                    </div>
                    
                    
                </a>
 <?php               
 
 } }
 
?>
<div class="loading-more col-lg-12 text-center">
<nav aria-label="Page navigation example" class="col-lg-12">
  <ul class="pagination pagination-md justify-content-center">
    <?php if($prevpage > 1){ ?>
    <!-- --------------------------------------- -->
      <li class="page-item" id="prev">
      <a href="?page=home&tabIndx=<?php echo($prevpage)?>&_categ=" class="page-link" aria-label="Next" id="btn-prev">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Prev</span>
      </a>
    </li>
    <!-- ------------------------------------------ -->
    <?php }else{ ?>
    <!-- ------------------------------------------ -->
     <li class="page-item disabled" id="prev">
      <a href="?page=home&tabIndx=<?php echo($prevpage)?>" class="page-link" aria-label="Next" id="btn-prev">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Prev</span>
      </a>
    </li>
    <!-- -------------------------------------------- -->
    <?php } ?>
    <?php for($i = 0; $i < $total_page; $i++){ ?>
        <li class="page-item pa-ge" id="page_<?php echo($i+1); ?>"><a href="?page=home&tabIndx=<?php echo($i+1)?>" class="page-link pa-ge" id="<?php echo($i+1); ?>"><?php echo($i+1); ?></a></li>   
   <?php } ?>
    <?php if($nextpage === $total_page) {?>
    <!-- ----------------------------------------------- -->
      <li class="page-item disabled" id="next">
      <a  href="?page=home&tabIndx=<?php echo($nextpage)?>" class="page-link" aria-label="Next" id="btn-next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    <!-- ------------------------------------------------ -->
    <?php }else{ ?>
    <!-- ------------------------------------------------- -->
      <li class="page-item" id="next">
      <a  href="?page=home&tabIndx=<?php echo($nextpage)?>" class="page-link" aria-label="Next" id="btn-next">
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