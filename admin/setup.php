<?php
session_start();
$setup=true;
require_once "./header.php";
require_once "../db.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">


    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h3>Setup</h3>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Setup</h6>
        <p class="mg-b-20 mg-sm-b-30">Edit Genarel Setup</p>
        <form action="setup-post.php" method="post" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Author Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="author_name" value="<?=panda_setup("setups","author_name");?>">
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="<?=panda_setup("setups","email");?>">
                </div>

              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">About Me: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="about_me" value="<?=panda_setup("setups","about_me");?>">
                </div>
              </div><!-- col-6 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="phone_number" value="<?=panda_setup("setups","phone_number");?>">
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Year Of Experiences: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="year_of_experience" value="<?=panda_setup("setups","year_of_experience");?>">
                </div>
              </div><!-- col-6 -->


              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Facebook Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="link" name="facebook" value="<?=panda_setup("setups","facebook");?>">
                </div>
              </div><!-- col-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Twitter Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="twitter" value="<?=panda_setup("setups","twitter");?>">
                </div>
              </div><!-- col-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">linkedin Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="linked_in" value="<?=panda_setup("setups","linked_in");?>">
                </div>
              </div><!-- col-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Instagram Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="insta" value="<?=panda_setup("setups","insta");?>">
                </div>
            </div><!-- row -->


          <div class="form-control col-lg-6 ml-3">
              <div class="col-lg-6">  
                <div class="form-group">
                  <label class="form-control-label">Old Image : <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="old_photo_name" value="<?=panda_setup("setups","main_image")?>" >
                  <img width="150px" src="../img/setup/<?=panda_setup("setups","main_image")?>" alt="notfound">
                                 
                </div>
            </div><!-- col-6 -->
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">New Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="main_image">
                </div>
              </div><!-- col-6 -->
              
            
            </div>

           <div class="form-control ml-3 col-lg-5">
           <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Background Colour: <span class="tx-danger">*</span></label>
                  <input class="" type="color" name="primary_background_color" value="<?=panda_setup("setups","primary_background_color")?>">
                </div>
            </div><!-- row -->
           
            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Headline Colour: <span class="tx-danger">*</span></label>
                  <input class="" type="color" name="headline_colour" value="<?=panda_setup("setups","headline_colour")?>">
                </div>
            </div><!-- row -->

            <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Text Colour: <span class="tx-danger">*</span></label>
                  <input class="" type="color" name="text_colour" value="<?=panda_setup("setups","text_colour")?>">
                </div>
            </div><!-- row -->
           </div>

          </div>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Edit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>

      </div><!-- card -->
<?php
require_once "./footer.php";
unset($_SESSION['setup_error']);
?>
?>