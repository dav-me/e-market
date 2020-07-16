<div class="product-tab">
    <div class="tab-item">
        <ul class="nav" role="tablist">
            <li>
                <a class="active" data-toggle="tab" href="#tab-1" role="tab">Mes commandes</a>
            </li>
            <li>
                <a data-toggle="tab" href="#tab-2" role="tab">Mes favoris</a>
            </li>
            <li>
                <a data-toggle="tab" href="#tab-3" role="tab">Notifications</a>
            </li>
        </ul>
    </div>
    <div class="tab-item-content">
        <div class="tab-content">
            <!-- tab 1 -->
            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Nom du produit</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Categorie</th>
                                    <th><span class="fa fa-file"></div></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 

                                $mesC = _onLoadMesCommandes($bdd);
                               #print_r($mesC);
                                 foreach ($mesC as $cmmd) {
                                // var_dump($mesC);
                            ?>
                                <tr class="border-bottom">
                                    <td class="cart-pic first-row"><img src="./_bx_assoc_imgs_/_bx_assoc_imgs_/<?php echo($cmmd->get_img()) ?>" alt="commande"></td>
                                    <td class="cart-title first-row">
                                        <h5>
                                            <span class="badge badge-primary text-uppercase"><?php echo($cmmd->get_marque()); ?></span> 
                                            <?php echo($cmmd->get_name()); ?>
                                        </h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo($cmmd->get_prix()); ?></td>
                                    <td class="p-price first-row"><?php echo($cmmd->get_date()); ?></td>
                                    <td class="total-price first-row">
                                        <span class="badge badge-warning"><?php echo($cmmd->get_categ()); ?></span>
                                    </td>
                                    <td class="close-td first-row" id="cas-<?php echo($cmmd->get_id()) ?>"><i class="ti-close"></i></td>
                                </tr>

                            <?php } ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$000.0</span></li>
                                    <li class="cart-total">Total <span>$000.0</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">EVALUER ENCORE MON COMPTE</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
            </div>
            <!--  -->
            <!-- tab 2 -->
            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                
            </div>
            <!--  -->
            <!-- tab 3 -->
            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                
            </div>
        </div>
    </div>
</div>