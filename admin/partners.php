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
        <form action="partner-post.php" method="post" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">News Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="partner_image">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add news</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        <br>
        <h3>news List</h3>
        <div >
        <table class="table">
          <thead>
          <tr>
              <th>Image name</th>>
              <th>Image</th>
              <th>Action</th>
            </tr>
           
          </thead>
          <tbody>
            <?php foreach(panda_all("partners") as $new_partner) :?>
              <tr>
              <td><?=$new_partner['partners_image']?></td>
              <td><img alt="" width="100px" src="../img/partners/<?=$new_partner['partners_image']?>"></td>
              
              <td>
              <a type="button" class="btn btn-sm btn-warning" href="partner_edit.php?link=<?=$new_partner['id']?>"><i class="fa fa-pencil"></i>Edit</a>
              <a type="button" class="btn btn-sm btn-danger" href="partner_delete.php?link=<?=$new_partner['id']?>"><i class="fa fa-trash"></i> Delete</a>

              </td>
            </tr>
          </tbody>
          <?php endforeach;?>
          
        </table>
        </div>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>