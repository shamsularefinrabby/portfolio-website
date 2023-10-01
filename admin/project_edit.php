<?php
$project = true;
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
        <h3>news</h3>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">news with details</h6>
        <p class="mg-b-20 mg-sm-b-30">Fill out your newss </p>
        <form action="project-edit-post.php" method="post" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-6 form-control">
                    
                    <div class="form-group">
                        <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="project_name" value="<?= panda_single("projects",$_GET['link'])['project_name']?>">
                        <input class="form-control" type="hidden" name="hidden_id" value="<?=$_GET['link']?>">
                        
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Clients: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="clients" value="<?= panda_single("projects",$_GET['link'])['clients']?>">
                       
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Completion: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="completion" value="<?= panda_single("projects",$_GET['link'])['completion']?>">
                       
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Project Type: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="project_type" value="<?= panda_single("projects",$_GET['link'])['project_type']?>">
                       
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Author: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="author" value="<?= panda_single("projects",$_GET['link'])['author']?>">
                       
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Budget: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="budget" value="<?= panda_single("projects",$_GET['link'])['budget']?>">
                       
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Branding: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="branding" value="<?= panda_single("projects",$_GET['link'])['branding']?>">
                       
                    </div>

                    <div class="col-lg-6 ">

                        <div class="form-group">
                            <input class="form-control" type="hidden" name="old_image_name" value="<?= panda_single("projects",$_GET['link'])['project_image']?>">
                            <label class="form-control-label">Old Image: <span class="tx-danger">*</span></label>
                            <img alt="" width="100px" src="../img/portfolio/<?= panda_single("projects",$_GET['link'])['project_image']?>">
                        </div>
              
              
                        <div class="form-group">
                          <label class="form-control-label">Project New Image: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="file" name="project_new_image">
                        </div>
              


                    </div>

                    
                </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Edit News</button>
            </div><!-- form-layout-footer -->

          </div><!-- form-layout -->
        </form>
        
        </div>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>

