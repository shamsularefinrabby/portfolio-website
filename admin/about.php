<?php
$about=true;
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
        <h3>About</h3>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">About with details</h6>
        <hr>
        <form action="about_post.php" method="post">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">designation:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="term" >
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">description:<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="story" >
                </div>
              </div><!-- col-6 -->
            </div><!-- row -->
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        <br>
        <h3>Skill List</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>designation</th>
              <th>description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(panda_all("about") as $new_about) :?>
            <tr>
              <td><?= $new_about['name']?></td>
              <td><?= $new_about['term']?></td>
              <td><?= $new_about['story']?></td>
              <td>
                <a type="button" class="btn btn-sm btn-info" href="about_edit.php?link=<?=$new_about['id']?>"><i class="fa fa-pencil"></i>Edit</a>
                <a type="button" class="btn btn-sm btn-danger" href="about_delete.php?link=<?=$new_about['id']?>"><i class="fa fa-trash"></i>Delete</a>
              </td>
            </tr>
          </tbody>
          <?php endforeach;?>
          
        </table>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>
?>