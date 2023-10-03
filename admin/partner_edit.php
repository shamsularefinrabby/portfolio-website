<?php
session_start();
$partners = true;
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
        <form action="partner-edit-post.php" method="post" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              <?php foreach(panda_all("partners") as $partner_edit)?>
            <div class="col-lg-6">
                <div class="form-group">
                <input class="form-control" type="hidden" name="hidden_id" value="<?=$_GET['link']?>">
                    <input class="form-control" type="hidden" name="old_photo_name" value="<?=$partner_edit['partners_image']?>">  
                    <label class="form-control-label">Old Image: <span class="tx-danger">*</span></label>
                    <img alt="" width="100px" src="../img/partners/<?=$partner_edit['partners_image']?>">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">News Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="partner_new_image">
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Edit Parners</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        
        </div>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>