<?php if(isset($_GET['_sortenKey'])){
    $pageno = $_GET['tabIndx'] ?? 1;
    $page = trim($_GET['page']);
    $keyword = strtolower(trim($_GET['_sortenKey'])) ?? 'Tout';
    $no_elem_per_page = 24;
    $offset = ($pageno - 1) * $no_elem_per_page;
    $row = count_row_by_keyword($keyword,$bdd);
    $data = _getCarsByMarque((int)$offset,(int)$no_elem_per_page,$keyword,$bdd) ?? 0;
    $total_page = ceil($row / $no_elem_per_page);
    $nextpage = ($total_page <= $pageno) ? $total_page : ($pageno + 1);
    $prevpage = ($pageno > 1) ? ($pageno - 1) : 1;
    $shown = count($data) ?? 0;
    $plageright = ($shown + $no_elem_per_page * ($pageno - 1));
    $plageleft = (1 + $no_elem_per_page* ($pageno - 1));
} ?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="?page=home"><i class="fa fa-home"></i> Home</a>
                    <a href="?page=_myShop">Véhicules</a>
                    <span>Recherche par marque :</span><!--<span class="ml-4 float-right">Mot de recheche : <b><?php echo(ucfirst($keyword)) ?></b> </span> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<!--  -->
<!-- section container -->
<section class="product-shop spad p-0">
    <div class="container">
        <div class="row">
            <!-- left menu -->
            <?php include('./_bx_body_/_sct_left_menu.php'); ?>
            <!-- end left menu -->
            <!-- container right -->
            <div class="col-lg-9 my-4">
                <div class="w-100 bg-light border py-1 px-3">
                    <!-- <small> -->
                        <span>clé : <b><?php echo(ucfirst($keyword)) ?> |</b></span>
                        
                    <b class="float-right">
                        <span class="pr-2">Resultat trouvé : <span class="badge badge-primary"><?php echo($row) ?></span></span>
                        <span><?php echo($plageleft)?> - <?php echo($plageright) ?> sur <?php echo($row) ?></span>  
                    </b>
                    <!-- </small> -->
                </div>
                <?php if ($row > 0) { ?>
                <!-- if result exist -->
                    <div class="w-100 border bg-light mt-3 py-2">
                        <div class="col-lg-12 pb-2">
                            <div class="w-25 underlined">
                               <div class="col-lg-12 pb-1">Résultat(s)</div>
                            </div>
                        </div>
                        <!-- container of cars -->
                        <div class="container-fluid">
                        <?php 
                            $cat = '';
                            $kilom = ''; 
                            for ($i=0; $i < count($data); $i++) { 
                            $key = $data[$i]; 
                            switch($key->categorie){case 84: $cat = 'En location'; break; case 95: $cat = 'En vente'; break; default: $cat = 'Vente / Location'; break; } 
                            $kilom = ($key->kilometrage) ?? '-';
                            $place = ($key->place) ?? '---';
                            $badge = '';
                            $engen = ($key->engine) ?? '-';

                            switch($key->categorie){
                                case 95: $badge = '<span class="badge badge-warning w-100"> En vente</span>';
                                break;
                                case 84: $badge = '<span class="badge badge-primary w-100">En location</span>';
                                break;
                            }

                            $model = strlen($key->model) <= 13 ? ($key->model) : (substr($key->model,0,13).' ...');
                            ?>
                        <!-- sart cars listing -->
                            <div class="col-lg-12 py-1 bg-stripped">
                                <div class="w-100 border-bottom text-dark">
                                    <div class="row mb-1">
                                    <div class="col-sm-3 rounded-0 py-1 col-4">
                                        <a href="?page=_product&_prd_get_cat_=<?php echo($key->categorie)?>&_idProduct_=<?php echo($key->id);?>" class="nav-link-c">
                                            <img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo(trim($key->imgPrcl)) ?>" alt="image <?php echo($key->id) ?>" class="w-100 shadow">
                                        </a>
                                        <?php echo($badge) ?>
                                    </div>
                                    <div class="col-sm-9 px-1 col-8">
                                        <div class="w-100 justify-content-between bd-highlight overflow-auto">
                                            <a href="?page=_product&_prd_get_cat_=<?php echo($key->categorie)?>&_idProduct_=<?php echo($key->id);?>">
                                                <b class="h4 text-primary"><span class="text-uppercase text-secondary"><?php echo($key->marque) ?></span>&nbsp; <span class="text-capilize"><?php echo($model) ?></span></b>
                                            </a>
                                            <a href="#"><b class="float-right hoverOn mr-3">Ajouter à mes favoris &nbsp;<span class="fa fa-star h2 text-warning"></span></b></a>
                                        </div>
                                        <div class="row w-100">
                                            <div class="col-sm-3 overflow-y-auto col-4">
                                                Prix : <br>
                                            <b class="h4 text-danger text-weight-bold"><span style="font-weight: bold"><?php echo($key->price) ?>$</span></b> <span class="badge badge-light border">USD</span><br>
                                            <small class="h6 ">Disponible :&nbsp;&nbsp; <b class="badge badge-white border"> <h5><?php echo($place) ?></h5></b> &nbsp;</small><span class="fa fa-star"></span>
                                            </div>
                                            <div class="col-sm-9 col-8 overflow-auto">
                                                <table class="table table-sm border text-center w-100 border-collapse table-bordered">
                                                <tr>
                                                    <th class="bg-primary text-white m-1 h6"><small>Kilometrage</small></th>
                                                    <th class="bg-primary text-white m-1 h6"><small>Transmission</small></th>
                                                    <th class="bg-primary text-white m-1 h6"><small>Carburant</small></th>
                                                    <th class="bg-primary text-white m-1 h6"><small>Volant</small></th>
                                                </tr>
                                                <tr>
                                                    <td class="h6"><small><b><?php echo($kilom) ?></b></small></td>
                                                    <td class="h6"><small><b><?php echo($key->transmission) ?></b></small></td>
                                                    <td class="h6"><small><b><?php echo($key->carburant) ?></b></small></td>
                                                    <td class="h6"><small><b><?php echo($key->volant) ?></b></small></td>
                                                </tr>
                                                </table>
                                                <marquee behavior="alternate" direction="right" scrolldelay="200" class="p-0 m-0">
                                                    <small> 
                                                        <span class="fa fa-star "></span> 
                                                        <span class="fa fa-star "></span> 
                                                        <span class="fa fa-star "></span> 
                                                            <b>Le prix inclu le dédouanement et le transport jusqu'en RDC</b></small>
                                                        <span class="fa fa-star "></span> 
                                                        <span class="fa fa-star "></span> 
                                                        <span class="fa fa-star "></span> 
                                                </marquee>
                                                <table class="text-center table table-sm table-bordered table-dark w-100 border-collapse">
                                                <tr>
                                                    <th class="m-1"><small><?php echo('2010') ?></small></th>
                                                    <th class="m-1" ><small>lieu ( <b><?php echo($place) ?></b> )</small></th>
                                                    <th class="m-1"><small><?php echo($key->siege) ?> sièges</small></th>
                                                    <th class="m-1"><small><?php echo($key->porte) ?> portes</small></th>
                                                    <th class="m-1"><small>Engen <?php echo($engen) ?> </small></th>
                                                </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end cars listing -->
                       <?php }?>
                       </div>
                       <!-- end of container-fluid of cars -->
                    </div>
                <!-- end if -->
                <?php }else{ ?>
                <!-- if there is no result -->
                    <div class="w-100 text-center border bg-light mt-3 py-5">
                        <div class="col-lg-12">
                            <h4>Résultat trouvé 0</h4>
                            <h6>Veillez réessayer avec un mot différent</h6>
                        </div>
                      <span class="spinner-border spinner-border-xl mt-3"></span>
                    </div>
                <!-- end else -->
                <?php } ?>
                <!--  -->
<!-- start of nav pagination -->
<!--  -->
<div class="loading-more col-lg-12 text-center mb-3">
    <nav aria-label="Page navigation example" class="col-lg-12">
        <ul class="pagination pagination-md justify-content-center">
            <?php if($prevpage > 1){ ?>
            <!-- --------------------------------------- -->
            <li class="page-item" id="prev">
            <a href="?page=<?php echo($page) ?>&_sortenKey=<?php echo($keyword) ?>&tabIndx=<?php echo($prevpage)?>&_categ=" class="page-link" aria-label="Next" id="btn-prev">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Prev</span>
            </a>
            </li>
            <!-- ------------------------------------------ -->
            <?php }else{ ?>
            <!-- ------------------------------------------ -->
            <li class="page-item disabled" id="prev">
            <a href="?page=<?php echo($page) ?>&_sortenKey=<?php echo($keyword) ?>&tabIndx=<?php echo($prevpage)?>&_categ=" class="page-link" aria-label="Next" id="btn-prev">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Prev</span>
            </a>
            </li>
            <!-- -------------------------------------------- -->
            <?php } ?>
            <?php for($i = 0; $i < $total_page; $i++){ ?>
                <li class="page-item pa-ge" id="page_<?php echo($i+1); ?>"><a href="?page=<?php echo($page) ?>&_sortenKey=<?php echo($keyword) ?>&tabIndx=<?php echo($i+1)?>" class="page-link pa-ge" id="<?php echo($i+1); ?>"><?php echo($i+1); ?></a></li>   
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
            <a  href="?page=<?php echo($page) ?>&_sortenKey=<?php echo($keyword) ?>&tabIndx=<?php echo($nextpage)?>" class="page-link" aria-label="Next" id="btn-next">
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
            if(active < totalPage){nextState.remove('disabled') }
            if(active > 1){prevState.remove('disabled') }
            const li = document.getElementById('page_'+active);
            li.classList.add('active');
        }
    })();
    </script>
</div>
<!-- end pagination -->
            </div>
            <!-- end container right -->
        </div>
    </div>
</section>
