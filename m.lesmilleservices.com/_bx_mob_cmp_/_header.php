<style>
    .logo-h{
        float: left;
        left:0;
        top: 5;
    }
  @media(max-width: 511px){
    .logo-h{
        top: -1px;
        }
    }
  @media(max-width:414px){
    .logo-h{
        top:6px;
    }
  }
</style>
<header>
    <div class="col-lg-12 bg-dark text-center">
        <small class="text-white">
           <b>Nous sommes la réference de vente et location des véhicules en RDC</b>
        </small>
    </div>
    <!-- start of navbar ---------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-drk shadow sticky-top sticky">
        <div class="container">
            <div class="d-inline-block w-100">
                <!-- <div class="col-lg-5 justify-content-center text-center mb-2">
                    <a class="navbar-brand text-center justify-content-center w-25 shadow" href="?page=home">
                        <img src="../_bx_assoc_imgs_/vraiefooter.png" alt="logo header" title="L1000" class="w-75">
                    </a>
                </div> -->
                <div class="d-flex justify-content-end w-100">
                    <div class="col-sm-1 logo-img w-25 float-left position-absolute calib logo-h">
                        <a href="?page=home">
                            <img src="../_bx_assoc_imgs_/vraiefooter.png" alt="logo header" title="L1000" class="w-100 position-absolute">
                        </a>
                    </div>
                    <!-- form search -->
                    <form class="form-inline sm-none col-sm-12 formheader d-none">
                        <div class="input-group input-group-sm w-100 mt-1 cont">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text bg-warning" id="basic-addon1">&nbsp;&nbsp;Recheche</span>
                            </div> -->
                            <input type="text" name="keysearchmobile" id="keysearchmobile" class="form-control form-control-sm pill-l" placeholder="Mot clé ..." aria-label="Mot clé ..." aria-describedby="basic-addon1" required>
                            <span class="input-group-append">
                                <button class="btn btn-warning btn pill-r" type="button" id="btn-search-mob">
                                    <span class="fa fa-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!--  end form search -->
                    <!-- <div class="w-75"> -->
                        <button class="bg-drkd  btn mr-2 text-white" id="btn-srch-mb" aria-expanded="false">
                            <span class="ti-search"></span>
                        </button>
                        <button class="bg-drkd btn py-1 mr-2 text-white" id="btn-log-mb" aria-expanded="false">
                            <span class="fa fa-user"></span>
                        </button>
                        <button class="bg-drkd btn btn-menu-toggler" id="btn-menu-toggler" type="button" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <!-- </div> -->
                </div>
            </div>
            <!-- form search -->
            <!-- <form class="form-inline sm-none bg-danger w-75 ">
                <div class="input-group input-group-sm bg-primary px-0 w-100">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="basic-addon1">&nbsp;&nbsp;Recheche</span>
                    </div>
                    <input type="text" name="keysearchmobile" id="keysearchmobile" class="form-control form-control" placeholder="Mot clé ..." aria-label="Mot clé ..." aria-describedby="basic-addon1" required>
                    <span class="input-group-append">
                        <button class="btn btn-warning btn" type="button" id="btn-search-mob">
                            <span class="fa fa-search"></span>
                        </button>
                    </span>
                </div>
            </form> -->
            <!--  end form search -->
            <!-- <nav class="collapse navbar-collapse overflow-hidden pl-cst-25" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=home"> <span class="fa fa-home"></span>&nbsp;acceuil</a></li>
                    <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=_listingLease">En location</a></li>
                    <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=_listingSale">En vente</a></li>
                    <li class="nav-item-cst pr-5 text-white text-uppercase  hov"><a href="?page=_operation_bata">Interchengeable</a></li>
                    <li class="nav-item-cst pr-5 text-white text-uppercase  cab-down hov">
                        <a href="#">pages <span class="fa fa-caret-down pl-4"></span></a>
                        <div class="dropdown-cntnt position-absolute py-2 bg-dark shadow">
                            <a class="text-white dropdown-item" href="?page=_signIn">Connexion</a>
                            <a class="text-white dropdown-item" href="?page=_signUp">Créer un compte</a>
                            <a class="text-white dropdown-item" href="?page=_contact">contact</a>
                        </div>
                    </li>
                </ul>
            </nav> -->
        </div>
    </nav>
    <!-- end of navbar ------------------------------------------------------------->
    <div class="col-7 navbar-dark bg-drk hs py-1 text-white px-1 float-right mr-5 overflow-hidden shadow hs login-sec" style="z-index:3000">
        <ul class="list-group list-group-flush h6 border-0 bg-dark hs">
            <li class="list-group-item bg-dark"><a href="?page=_signIn"><span class="fa fa-user mr-1"></span>&nbsp;Connexion</a></li>
            <li class="list-group-item bg-dark"><a href="?page=_signUp"><span class="fa fa-user-plus mr-1"></span>&nbsp;Créer un compte</a></li>
        </ul>
    </div>
</header>
