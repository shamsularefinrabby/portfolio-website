<?php
session_start();
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
        <h3>Experience</h3>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Experience with details</h6>
        <p class="mg-b-20 mg-sm-b-30">Fill out your experiences </p>
        <form action="experince_post.php" method="post">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="company_name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="duration" placeholder="Eg: 2000-2010">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="designation">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" rows="4" name="description"></textarea>
                </div>
              </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Experience</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        <br>
        <h3>Experience List</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Company Name</th>
              <th>Duration</th>
              <th>Designation</th>
              <th>Description</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(panda_all('experience') as $experience) :?>
            <tr>
              <td><?= $experience['company_name']?></td>
              <td><?= $experience['duration']?></td>
              <td><?= $experience['designation']?></td>
              <td><?= $experience['description']?></td>
              <td>
              <td>
              <a type="button" class="btn btn-sm btn-info" href="experience_edit.php?link=<?=$experience['id']?>"><i class="fa fa-pencil"></i> Edit</a>
              <a type="button" class="btn btn-sm btn-danger" href="experience_delete.php?link=<?=$experience['id']?>"><i class="fa fa-trash"></i> Delete</a>

              
            </tr>
          </tbody>
          <?php endforeach;?>
          
        </table>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>