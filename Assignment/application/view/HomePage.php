
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--START OF CSS REFERENCES-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" crossorigin="anonymous">
    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='assets/css/x3dom.css'>    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css" crossorigin="anonymous">
    <!-- FancyBox3 CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
    <!--END OF CSS REFERENCES-->

    <title>Coca Cola 3D Website</title>
  </head>

  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand Title-->
            <div class="logo">
              <a class="navbar-brand" href="index.php">
                <h1>1oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
              </a>
            </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="Web 3D Apps is a final year and postgraduate module">About</a>
                  </li>
              
                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
            </div>
      </nav>

      <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            <!-- A row for the main 3D image theme -->
            <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
                    </div>
              </div>
            </div>  

            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                  <!--COKE-->
                  <div class="col-sm-4">
                      <div class="card img-narrow" style="background-color: rgb(222, 222, 223);">
                          <a href="assets/images/render_images/CokeRender.jpg" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/drink_banner/coca_cola.jpg" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <!--SPRITE-->
                  <div class="col-sm-4">
                    <div class="card img-narrow" style="background-color: rgb(222, 222, 223);">
                          <a href="assets/images/render_images/SpriteRender.jpg" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/drink_banner/sprite.jpg" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>                          
                      </div>
                  </div>
                  
                  <!--PEPPER-->
                  <div class="col-sm-4">
                      <div class="card img-narrow" style="background-color: rgb(222, 222, 223);">
                          <a href="assets/images/render_images/DrPepperRender.jpg" data-fancybox data-caption="My 3D Dr Pepper Bottle Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/drink_banner/dr_pepper.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>

            </div> <!-- End coke, sprite, pepper row -->
          </div>  <!-- End home page contents -->

          <div id="about" class = "card" style="display:none;">
            <h1> About</h1>
            <p> This website was created for the Web 3D Applications Module </p>
            <p> This is a third year module </p>
            <p> Three models were created in Blender 2.80 and exported as X3D for this project: <br> CokeCan.x3d, SpriteBottle.x3d, and DrPepperBottle.x3d </p>
            <p> Blender and X3D files can be found on path: assets/x3d_models</p>
          </div>  

          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">

              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                      <!-- X3D Models -->
                      <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-primary btn-responsive" id="cokeBtn" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-primary btn-responsive" id="spriteBtn" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                        <button type="button" class="btn btn-primary btn-responsive" id="pepperBtn" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        
                        <!-- X3D Code-->
                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="Cokemodel" mapDEFToID="true" onclick="animateModel();" url="assets/x3d_models/CokeCan/CokeCan.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="Peppermodel" mapDEFToID="true" onclick="animateModel();" url="assets/x3d_models/SpriteBottle/SpriteBottle.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="Spritemodel" mapDEFToID="true" onclick="animateModel();" url="assets/x3d_models/DrPepperBottle/DrPepperBottle.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> <!-- End X3D Code -->

                        <!-- Row to hold the interaction panels -->
                        <div id="interaction" style="display:none;">
                          <div class="card text-left">
                            <div class="card-header">
                              <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">3D Model Controller</a>
                                </li>
                              </ul>
                            </div>

                            <div class="card-body">     
                              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraFront();">Front</a>
                              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</a>
                              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraRight();">Right</a>
                              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraTop();">Top</a>
                              <a href="#" class="btn btn-primary btn-responsive" onclick="cameraBottom();">Bottom</a>

                              <a href="#" class="btn btn-light btn-responsive" onclick="wireFrame();">Toggle WireFrame</a>
                              <a href="#" class="btn btn-light btn-responsive" onclick="toggleLight();">Toggle Lights</a>
                              <a href="#" class="btn btn-light btn-responsive" onclick="toggleSpin();">Toggle Spin</a>
                            </div>
                          </div>
                        </div> <!--End Interaction Panel-->

                        <!-- Model Description -->
                        <?php for ($i=0; $i <count ($data); $i++){ ?>
                          <p id="<?php echo $data[$i]['idIndex'] ?>">
                            A 
                            <?php echo $data[$i]['model'] ?>
                            model created in 
                            <?php echo $data[$i]['creationMethod'] ?>
                            and exported to 
                            <?php echo $data[$i]['exportFile'] ?>.
                            <br>
                            The file name is: 
                            "<?php echo $data[$i]['modelName'] ?>".
                          </p>
                        <?php } ?> <!-- End Model Description -->

                    </div>
                  </div>
                </div>
              </div> <!-- End X3D Column -->

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="galleryCoke"></div>
                        <div class="gallery" id="gallerySprite"></div>
                        <div class="gallery" id="galleryPepper"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->
            </div> <!-- End row for X3D Model and Gallery -->
          </div> 

          <!-- Row to hold one card to hold the coke descriptive text-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>   
                          <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary btn-responsive">Visit Coke</a>                 
                          <div class="video">
                            <video width="50%" controls><source src="assets/videos/cokeVideo.mp4" type="video/mp4">Unable to load video</video>
                          </div>
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the sprite descriptive text-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText"></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                          <div id="description_sprite" class="card-text drinksText"></div>  
                          <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>      
                          <div class="video">
                            <video width="50%" controls><source src="assets/videos/spriteVideo.mp4" type="video/mp4">Unable to load video</video>
                          </div>                                     
                      </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>    
                        <div class="video">
                            <video width="50%" controls><source src="assets/videos/pepperVideo.mp4" type="video/mp4">Unable to load video</video>
                        </div>             
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->

      </div> <!-- End 3D App SPA Contents -->
      
      <!-- Footer -->
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2024 Web 3D Applications | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="https://www.facebook.com/TheCocaColaCo/?locale=en_GB"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="https://twitter.com/CocaColaCo"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="https://www.coca-cola.com/gb/en"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> <!-- End Footer Contents -->

      <!-- 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Web 3D Applications Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>Name: Ethan Chan</p>
                  <p>Candidate Number: 246667</p>
                  <p>Email: ec603@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="assets/scripts/js/jquery-3.4.1.js" crossorigin="anonymous"></script>
      <script src="assets/scripts/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="assets/scripts/js/bootstrap-4.4.1.js" crossorigin="anonymous"></script>
      <script src="assets/scripts/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="assets/scripts/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="assets/scripts/js/swap.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='assets/scripts/js/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="assets/scripts/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="assets/scripts/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="assets/scripts/js/modelInteractions.js"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="assets/scripts/js/jquery.fancybox.min.js"></script>
      
  </body>
</html>