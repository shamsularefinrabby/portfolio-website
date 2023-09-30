<?php
session_start();
$news = true;
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
        <form action="news_post.php" method="post" enctype="multipart/form-data">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">News_headline: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="news_headline">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">News Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="news_image">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">News Details: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" rows="4" name="news_details"></textarea>
                </div>
              </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Add news</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>
        <br>
        <h3>news List</h3>
        <div>
        <table class="table">
          <thead>
          <tr>
              <th>News Headline</th>>
              <th>News Photo</th>>
              <th>News Details</th>
              <th>Date & Time</th>
              <th>Action</th>
            </tr>
           
          </thead>
          <tbody>
            <?php foreach(panda_all('news') as $new_news) :?>
              <tr>
              <td><?= $new_news['news_headline']?></td>
              <td><img class="w-25" src="../img/news/<?= $new_news['image_new_name']?>" alt=""></td>
              <td><?= $new_news['news_details']?></td>
              <td><?= $new_news['date_time']?></td>
              <td>
              <td>
              <a type="button" class="btn btn-sm btn-info" href="news_edit.php?link=<?=$new_news['id']?>"><i class="fa fa-pencil"></i>Edit</a>
              <a type="button" class="btn btn-sm btn-danger" href="news_delete.php?link=<?=$new_news['id']?>"><i class="fa fa-trash"></i> Delete</a>

              
            </tr>
          </tbody>
          <?php endforeach;?>
          
        </table>
        </div>
      </div><!-- card -->



<?php
require_once "./footer.php";
?>