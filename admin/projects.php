<?php
session_start();
$project= true;
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
        <form action="project_post.php" method="post" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Project Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="project_name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Project Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="project_image">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">CLIENTS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="clients">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">COMPLETION: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="completion">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">PROJECT TYPE: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="project_type">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">AUTHORS: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="author">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">BUDGET: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="budget">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Branding: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" rows="1" name="branding"></textarea>
                </div>
              </div><!-- col-8 -->

            
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add news</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        <br>
        <h3>Project List</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Project Name</th>>
              <th>Project Image</th>
              <th>CLIENTS</th>
              <th>COMPLETION</th>
              <th>PROJECT TYPE</th>
              <th>AUTHORS</th>
              <th>BUDGET</th>
              <th>Branding</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach(panda_all('projects') as $new_project) :?>
            <tr>
              <td><?= $new_project['project_name']?></td>
              <td><img alt="" class="w-25" src="../img/portfolio/<?=$new_project['project_image']?>"></td>
              <td><?= $new_project['clients']?></td>
              <td><?= $new_project['completion']?></td>
              <td><?= $new_project['project_type']?></td>
              <td><?= $new_project['author']?></td>
              <td><?= $new_project['budget']?></td>
              <td><?= $new_project['branding']?></td>
              <td>
              <td>
                <button class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Edit</button>
                <a type="button" class="btn btn-sm btn-danger" href="project_delete.php?link=<?=$new_project['id']?>"><i class="fa fa-trash"></i> Delete</a>

              
            </tr>
          </tbody>
          <?php endforeach;?>
          
        </table>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>