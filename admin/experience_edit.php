<?php
$experience = true;
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
        <form action="experience-edit-post.php" method="post">
          <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-6 form-control">
                    <div class="form-group">
                        <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="company_name" value="<?= panda_single("experience",$_GET['link'])['company_name']?>">
                        <input class="form-control" type="hidden" name="hidden_id" value="<?=$_GET['link']?>">
                        
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="duration" value="<?= panda_single("experience",$_GET['link'])['duration']?>">
                    
                    </div>
                    
                    <div class="form-group">
                        <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="designation" value="<?= panda_single("experience",$_GET['link'])['designation']?>">

                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="description" value="<?= panda_single("experience",$_GET['link'])['description']?>">

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

