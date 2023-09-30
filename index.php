<?php
require_once "site_header.php";
?>

 <!-- Masthead -->
 <main id="home" class="masthead jarallax" style="background-image:url('img/setup/<?=panda_setup("setups","main_image")?>');" role="main">
    <div class="opener">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <h1>Hey, I am <?=panda_setup("setups","author_name")?>.</h1>
            <p class="lead mt-4 mb-5"><?=panda_setup("setups","about_me")?></p>
            <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- About -->
  <section id="about" class="section">
    <div class="container">
      <h2 data-aos="fade-up">Just trust me.</h2>
      <section class="mt-4">
        <div class="row">
          <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
            <div class="experience d-flex align-items-center">
              <div class="experience-number text-parallax"></div>
              <div class="experience-number text-parallax"><?=panda_setup("setups","year_of_experience")?></div><div class="text-dark mt-3 ml-4">Years<br> of experience</div>
            </div>
          </div>
          <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">
          <?php
               $select_query= "SELECT * FROM skill ORDER BY percentage DESC ";
               $result=mysqli_query(connect_to_db(),$select_query);
          foreach($result as $single_skill) {
          ?>  
          <h6 class="mt-0"><?=$single_skill['skill_name']?></h6>
          <div class="progress mb-5">
            <div class="progress-bar" role="progressbar" data-aos="width" style="width: <?=$single_skill['percentage']?>%" aria-valuenow="<?=$single_skill['percentage']?>" aria-valuemin="1" aria-valuemax="100">
            </div>
          </div>
          <?php } ?>  
          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="section" style="background: <?=panda_setup("setups","primary_background_color")?>;">
    <div class="container">
      <div class="container">
        <div class="row">
        <?php foreach(panda_all('overview') as $view):?>
        <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
          <i class="text-white fa <?=$view['icons']?> fa-4x"></i>
          <h6 class="text-white"><?=$view['title']?></h6>
          <p><?=$view['details']?></p>
        </div>
        <?php endforeach;?>
        
        </div>
      </div>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section pb-0">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Experience</h2>
        </div>
      </div>
      
      <?php foreach(panda_all("experience") as $single_experience) : ?>
        <div class="mt-5 pt-5">
          <div class="row-experience row justify-content-between" data-aos="fade-up">
            <div class="col-md-4">
              <div class="h6 my-0 text-gray"><?=$single_experience['duration']?></div>
              <h5 class="mt-2 text-primary text-uppercase"><?=$single_experience['company_name']?></h5>
            </div>
            <div class="col-md-4">
              <h5 class="mb-3 mt-0 text-uppercase"><?=$single_experience['designation']?></h5>
            </div>
            <div class="col-md-4">
              <p><?=$single_experience['description']?></p>
            </div>
          </div>
          
          <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects" class="section">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Featured projects</h2>
        </div>
        <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="my-0 text-gray"><a href="#">View all projects</a></h6>
        </div>
      </div>
      <div class="mt-5 pt-5" data-aos="fade-in">
        <div class="carousel-project owl-carousel">

        <?php foreach(panda_all("projects") as $single_project) :?>  
        <div class="project-item">
            <a href="#project<?=$single_project['id']?>" class="popup-with-zoom-anim">
              <figure class="position-relative">
                <img alt="" class="w-100" src="img/portfolio/<?=$single_project['project_image']?>">
                <figcaption class="text-white">
                  <h3 class="mb-2 text-white"><?=$single_project['project_name']?></h3>
                  <p><?=$single_project['branding']?></p>
                </figcaption>
              </figure>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Modal Dialog 1 -->
  <?php foreach(panda_all("projects") as $single_project) :?>  
  <div id="project<?=$single_project['id']?>" class="container mfp-hide zoom-anim-dialog">
  <h2 class="mt-0"><?=$single_project['project_name']?></h2>
    <div class="mt-5 pt-2 text-dark">
      <div class="row">
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Clients:</h6>
          <span><?=$single_project['clients']?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Completion:</h6>
          <span><?=$single_project['completion']?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Project Type:</h6>
          <span><?=$single_project['project_type']?></span>
        </div>
        <div class="mb-5 col-md-6 col-lg-3">
          <h6 class="my-0">Authors</h6>
          <span><?=$single_project['author']?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <h6 class="my-0">Budget:</h6>
          <span><?=$single_project['budget']?></span>
        </div>
        <div class="col-md-6 col-lg-3">
          <h6 class="my-0">Authors</h6>
          <span><?=$single_project['author']?></span>
        </div>
      </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/<?=$single_project['project_image']?>">
  </div>
  <?php endforeach;?>

  



  <!-- Testimonials -->
  <section id="testimonials" class="testimonials section">
    <div class="container">
      <div class="carousel-testimonials owl-carousel">
        <?php foreach(panda_all('about') as $all_about) :?>
      <div class="col-testimonial" data-aos="fade-up">
          <span class="quiote">"</span>
          <p data-aos="fade-up"><?=$all_about['story']?></p>
          <p class="mt-5 text-dark" data-aos="fade-up"><strong><?=$all_about['fname']?></strong> - <?=$all_about['term']?></p>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </section>

  <!-- News -->
  <section id="news" class="section bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="mb-3 mb-md-0">Latest news</h2>
        </div>
        <div class="col-md-5 offset-md-1 text-md-right">
          <h6 class="text-gray my-0"><a href="news-all.php">View all news</a></h6>
        </div>
      </div>
      <div class="mt-5 pt-5" >
        <div class="row-news row">
          <?php foreach(panda_number_of("news",3) as $new_news) :?>
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



  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="row-partners row">
        <?php 
        foreach(panda_all("partners") as $single_partner) :?>
        
        <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="$i_value">
          <img alt="" src="img/partners/<?=$single_partner['partners_image']?>">
        </div>
        <?php endforeach;?>
      
      </div>
    </div>
  </section>


 <?php
 require_once "site_footer.php";
 ?>