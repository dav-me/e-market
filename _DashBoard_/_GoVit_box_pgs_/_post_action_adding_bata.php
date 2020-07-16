<link rel="stylesheet" href="./dist/css/css.style.css">
<section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Formulaire</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -------------------------- onsubmit="addingPrd(); return false;" action="./dist/js/_phpSubmition.php"------------------------------------------------>
                  <form enctype="multipart/form-data" id="addprd" onsubmit="addingPrd(); return false;" method="POST">
                    <div class="card-body">
<!--                      --------------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Modele</span>
                          </div>
                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Marque</span>
                          </div>
                          <input type="text" class="form-control" placeholder="ex: Toyota" name="marque" required>
                        </div>
                      </div>
<!--                      ------------------------------------------------------------------------>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">description</span>
                        </div>
                        <textarea type="text" class="form-control" placeholder="ex: 4" name="desc" required></textarea>
                      </div>
                      <div class="form-group">
                        <!-- <label for="exampleInputFile">File input</label> -->
                        <div class="input-group">
                          <div class="custom-file">
                            <input id="imageFile" name="imageFile1" type="file" class="custom-file-input" required>
                            <label class="custom-file-label" for="imageFile">Image pricipale</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="labImg"><></span>
                          </div>
                        </div>
                      </div>
<!--                      -------------------------------------------------------------->
                      <div class="row">
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-1" name="imageFile2" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-2">Image 1</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg1"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-2" name="imageFile3" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-3">Image 2</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg2"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-3" name="imageFile4" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-3">Image 3</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg3"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-4" name="imageFile5" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-4">Image 4</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg4"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-5" name="imageFile6" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-5">Image 5</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg5"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-6" name="imageFile7" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-6">Image 6</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg6"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-7" name="imageFile8" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-7">Image 7</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg7"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-8" name="imageFile9" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-8">Image 8</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg8"><></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-lg-6">
                          <!-- <label for="exampleInputFile">File input</label> -->
                          <div class="input-group">
                            <div class="custom-file">
                              <input id="imageFile-9" name="imageFile10" type="file" class="custom-file-input" required>
                              <label class="custom-file-label" for="imageFile-9">Image 9</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="labImg9"><></span>
                            </div>
                          </div>
                        </div>
                      </div>
<!--                 ------------------------------------------------------------------->
<!--                      --------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Volant</span>
                          </div>
<!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <select name="forwheel" id="wheel" class="form-control" required>
                            <option value="gauche">Gauche</option>
                            <option value="droit">Droit</option>
                          </select>
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Carburant</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <select name="carburant" id="carburant" class="form-control" required>
                            <option value="essence">Essence</option>
                            <option value="diesel">Diesel</option>
                          </select>
                        </div>
                      </div>
<!--                      --------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Transmission</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <select name="transmission" id="Transmission" class="form-control" required>
                            <option value="automatique">Automatique</option>
                            <option value="manuel">Manuel</option>
                          </select>
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Couleur ext.</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="color" id="color" class="form-control" required placeholder="ex: rouge">
                        </div>
                      </div>
                      <!--                      --------------------------------------------------------------->
                      <div class="row">
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Sièges</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="sieges" id="Sieges" class="form-control" required type="number" placeholder="ex: 8">
                        </div>
                        <div class="input-group mb-3 col-lg-6">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Portières</span>
                          </div>
                          <!--                          <input type="text" class="form-control" placeholder="ex: Noah" name="fullname" required>-->
                          <input name="porte" id="porte" class="form-control" required placeholder="ex: 5" type="number">
                        </div>
                      </div>
<!--                      --------------------------------------------------------------->
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">Me diriger vers la page du site</label>
                      </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary w-100" id="onSending-off">
                        <span class="spinner-grow spinner-grow-sm d-none" id="animate"></span>&nbsp;
                        Ajouter
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- section preview here -->
              <div class="col-lg-6">
                <div class="border card">
                  <div class="card-header">
                    <div class="card-title">
                      <span>Previsualisation</span>
                    </div>
                  </div>
                  <div class="card-bady">
                    <div class="col-lg h-50 algn-center p-2">
                      <span><b>Image pricipale</b></span>
                      <img class="preview-1 border" id="preview" src=""/>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 algn-center border content-center">
                          <h6>Image : 1</h6>
                          <img class="preview-2" id="preview-1" src=""/>
                        </div>
                        <div class="col-lg-6 algn-center border">
                          <h6>Image : 2</h6>
                          <img class="preview-2" id="preview-2" src=""/>
                        </div>
                        <div class="col-lg-6 algn-center border">
                          <h6>Image : 3</h6>
                          <img class="preview-2" id="preview-3" src=""/>
                        </div>
                        <div class="col-lg-6 algn-center border">
                          <h6>Image : 4</h6>
                          <img class="preview-2" id="preview-4" src=""/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    &copy; David maene
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script src="./dist/js/jquery-2.2.4.min.js"></script>
        <script src="./dist/js/onUploadingFile.js"></script>
