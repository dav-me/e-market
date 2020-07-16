 <!-- cars this week -->
 <div class="col-lg-12 bg-light mt-4 border">
  <div class="w-100">
      <div class="col-lg-4 underlined pb-1 mt-2 ">
        <div class="col-lg-12 pb-1 pl-0">
          <span class="pb-2">Ajoutés recemenent</span>
        </div>
      </div>
      <div class="container-fluid mt-2 pb-3 px-0">
        <!-- <div class="w-100 bg-danger pb-4"> -->
          <div class="row mt-2 pt-3">
          <!-- start row cars -->
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
 ?>
 <!-- ----------------------------------------------------------------------------------- -->
    <div class="col-lg-3 col-6 px-1">
      <div class="w-100 p-1">
          <div class="col-lg-12">
            <a href="?page=_product&_prd_get_cat_=<?php echo($indPrd->categorie)?>&_idProduct_=<?php echo($indPrd->id);?>" class="nav-img-link" class="nav-img-link">
                <div class="ribbon-wrapper ribbon-sm">        
                    <?php 
                    switch ($indPrd->categorie) {
                      case 84:
                      echo('<div class="ribbon bg-primary shadow" style="background:#3498db"><b>Location </b></div>');
                        break;
                      case 95:
                        echo('<div class="ribbon bg-warning shadow text-dark" style="background:#ffc107;color:white"><b>Vente</b></div>');
                        break;
                      default:
                        # code...
                        echo('nothing to show');
                        break;
                    }
                    ?>
                </div>
                <!-- <img src="../_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($indPrd->imgPrcl) ?>" alt="Img : <?php echo($indPrd->id) ?>"> -->
                <img src="../_bx_assoc_imgs_/_bx_banners_/back_header.png" alt="Img : <?php echo($indPrd->id) ?>">
            </a>
          </div>
          <div class="col-lg-12 overflow-hidden shadow">
          <a href="?page=_product&_prd_get_cat_=<?php echo($cat)?>&_idProduct_=<?php echo($indPrd->id);?>" class="nav-link p-0" class="nav-link p-0">
              <small class="w-100">
                <b><?php echo($name) ?></b>
              </small>
              <p><small><b>prix:</b>&nbsp;<b class="text-primary"><?php echo($indPrd->price) ?>$</b></small></p>
              </a>
          </div>
      </div>
    </div>
  <!-- ----------------------------------------------------------------------------------- -->
 <?php               
 
 }  }
 
?>
<!-- end row cars -->
<div class="col-lg-12 text-center mt-1">
</div>
</div>
<!-- </div> -->
</div>
</div>
<!-- </div> -->
<!-- end cars this week -->
<div class="loading-more col-lg-12 text-center mb-3 h6">
<nav aria-label="Page navigation example" class="col-lg-12">
  <ul class="pagination pagination-sm justify-content-center">
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