<?php
session_start();
$skill=true;
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
        <h3>Skills</h3>

      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Skill with details</h6>
        <p class="mg-b-20 mg-sm-b-30">Fill out your skill </p>
        <form action="skill_post.php" method="post">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Skill Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="skill_name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Percentage: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="percentage" placeholder="Eg: 2000-2010">
                </div>
              </div><!-- col-6 -->
            </div><!-- row -->
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add Skill</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        <br>
        <h3>Skill List</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Skill Name</th>
              <th>Percentage</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
       
            foreach(panda_all('skill') as $new_skill) :
            ?>
            <tr>
              <td><?= $new_skill['skill_name']?></td>
              <td><?= $new_skill['percentage']?></td>
            
              <td>
                <a type="button" class="btn btn-sm btn-info" href="skill_edit.php?link=<?=$new_skill['id']?>"><i class="fa fa-pencil"></i>Edit</a>
                <a type="button" class="btn btn-sm btn-danger" href="skill_delete.php?link=<?=$new_skill['id']?>"><i class="fa fa-trash"></i> Delete</a>
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