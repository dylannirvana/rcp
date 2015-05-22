
<?php get_header() ?>

<!-- Table of Contents
    1. BRAND 
      1.1 Navigation
      1.2 Carousel
    2. MISSION 
    3. SEASON 
    4. PLAYERS 
    5. EDUCATION
    6. SPONSOR -->

<header>

<!-- 1. BRAND  -->
<!-- 1.1 Navigation  -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="#featured"><h1> Ritz Chamber <span class="subhead"><img src="<?php bloginfo('template_directory'); ?>/images/icons/rhombus.png">Players<img src="<?php bloginfo('template_directory'); ?>/images/icons/rhombus.png"> </span></h1></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#featured">Home</a></li>
          <li><a href="#mission">Mission</a></li>
          <li><a href="#season">Season</a></li>
          <li><a href="#players">Players</a></li>
          <li><a href="#education">Education</a></li>
          <li><a href="#sponsor">Sponsor</a></li>
        </ul>        
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>

<!-- 1.2 Carousel  -->
  <div class="carousel fade" data-ride="carousel" id="featured">
    <ol class="carousel-indicators"></ol>

    <div class="carousel-inner fullheight">
      <div class="item active"><img src="<?php bloginfo('template_directory'); ?>/images/bio/harpsichord.jpg" alt="Harpsichord"></div>
      <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/bio/singer.jpg" alt="Singer"></div>
      <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/bio/violin.jpg" alt="Violin"></div>
      <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/bio/Concert-1.jpg" alt="Concert"></div>
      <div class="item"><img src="<?php bloginfo('template_directory'); ?>/images/bio/Concert-4.jpg" alt="Concert"></div>
    </div><!-- carousel-inner -->

    <a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div><!-- END featured carousel -->
</header>

<div class="main fluid-container">

<!-- 2. MISSION   -->
  <section class="scene" id="mission">

    <article class="content container">
      <h1>Our Mission</h1>
      <div class="row"> 
        <p class="col-md-5 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
        <p class="col-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div> <!-- END row -->
    </article>
    
  </section>

 <!-- 3. SEASON -->
 <!- WP ARTFULLY CALENDAR ->
  <section class="scene" id="season">
    <article class="content container">
      <h1>Performance Season</h1>
      <p>WordPress Artfully calendar goes here</p>
    </article>
  </section>

  <!-- 4. PLAYERS -->
   <!- PHOTO GRID ->
  <section class="scene" id="players"> 
    
    <header >
    <!-- <div class="content container">  -->
      <h1>Meet the Players</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque explicabo numquam cupiditate, ab cum eos, placeat similique iusto nisi possimus vitae ad, earum sit tempora eligendi, at nemo amet ea!</p>
      
    </header>




     <!--  <article class="players halfheight" id="annHobson">
        <div class="content">
          <h2>Ann Hobson guitar</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article> -->




      <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/annHobson.jpg">
        <div class="content">
          <h2>Ann Hobson guitar</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

 <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/alisonBuchanan.jpg">
        <div class="content">
          <h2>Ann Hobson </h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

       <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/davidBerry.jpg">
        <div class="content">
          <h2>David Berry</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

 <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/georgeTaylor.jpg">
        <div class="content">
          <h2>George Taylor</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

 <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/judyDines.jpg">
        <div class="content">
          <h2>Judy Dines</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

 <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/kellyTompkins.jpg">
        <div class="content">
          <h2>Kelly Tompkins</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

 <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/kennethLaw.jpg">
        <div class="content">
          <h2>Kenneth Law</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>

 <article class="players halfheight">
        <img src="<?php bloginfo('template_directory'); ?>/images/players/terrenceWilson.jpg">
        <div class="content">
          <h2>Terrence Wilson</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>











     <!--  <article class="players halfheight" id="alisonBuchanan">
        <div class="content">
          <h2>Alison Buchanan fiddle</h2>
          <p> When you entrust us to handle your wedding, or other event, you’re putting your faith in our professional reputation – and that’s not a responsibility we take lightly. </p>
        </div>
      </article>
       <article class="players halfheight" id="davidBerry">
        <div class="content">
          <h2>David Berry oboe</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>
      <article class="players halfheight" id="georgeTaylor">
        <div class="content">
          <h2>George Taylor jewsharp</h2>
          <p> When you entrust us to handle your wedding, or other event, you’re putting your faith in our professional reputation – and that’s not a responsibility we take lightly. </p>
        </div>
      </article>
      <article class="players halfheight" id="judyDines">
        <div class="content">
          <h2>Judy Dine tin can</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>
      <article class="players halfheight" id="kellyTompkins">
        <div class="content">
          <h2>Kelly Tompkins spatula</h2>
          <p> When you entrust us to handle your wedding, or other event, you’re putting your faith in our professional reputation – and that’s not a responsibility we take lightly. </p>
        </div>
      </article>
       <article class="players halfheight" id="kennethLaw">
        <div class="content">
          <h2>Kenneth Law piano</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article>
      <article class="players halfheight" id="terrenceWilson">
        <div class="content">
          <h2>Terrence Wilson clarinet</h2>
          <p> When you entrust us to handle your wedding, or other event, you’re putting your faith in our professional reputation – and that’s not a responsibility we take lightly. </p>
        </div>
      </article> -->


  <!-- </div> -->

</section>


  <!-- 5. EDUCATION assimilate into other section?? -->
  <section class="scene" id="education">
    <article class="content container">
      <h1>Music and the Community</h1>
      <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>






    </article>
  </section>
<!-- </div> --> <!-- END container -->

  <!- 6. SPONSOR WP Artfully donation page -->
  <section class="scene" id="sponsor">
    <article class="content ">
      <h1>Sponsorship</h1>
      <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
    </article>
  </section>



</div><!-- main -->

<?php get_footer() ?>




