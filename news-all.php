<?php
session_start();
$news = true;
require_once "site_header.php";
require_once "db.php";
?>
 <section id="news" class="section bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">All news</h2>
        </div>
      </div>
      <div class="mt-5 pt-5" >
        <div class="row-news row">
          <?php foreach(panda_all("news") as $new_news) :?>
          <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
            <figure class="position-relative">
              <div class="position-relative">
                <a href="news_contents.php?id=<?=$new_news['id']?>"><img alt="" class="w-100 d-block" src="./img/news/<?=$new_news['image_new_name']?>"></a>
                <mark class="date"><?= date("d-m-Y", strtotime($new_news['date_time']))?></mark>
              </div>
              <figcaption>
                <h5><a href="news_contents.php?id=<?=$new_news['id']?>"><?=$new_news['news_headline']?></a></h5>
                <?=substr($new_news['news_details'],0,30)?>.... <a href="news_contents.php?id=<?=$new_news['id']?>">see more</a>
              </figcaption>
            </figure>
          </div>
          
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

<?php
require_once "site_footer.php";
?>