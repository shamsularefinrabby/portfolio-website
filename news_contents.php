<?php
require_once "site_header.php";
require_once "db.php";
$id= $_GET['id'];
$select_query = "SELECT * FROM news WHERE id=$id";
$db_result= mysqli_fetch_assoc( mysqli_query(connect_to_db(),$select_query));

?>

<section id="about" class="section">
     <div class="container">
       <h2 class="text-center" data-aos="fade-up"><?=$db_result['news_headline']?></h2>
       <section class="mt-4">
          <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
              <img src="img/news/<?=$db_result['image_new_name']?>" alt="">
            </div>
            <div class="col-md-12" data-aos="fade-up">
            <p class="mt-4 "><?=$db_result['news_details']?></p>
            </div>
          </div>
        </section>
      </div>
    </section>

<?php
require_once "site_footer.php";
?>




