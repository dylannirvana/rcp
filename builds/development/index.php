
<?php get_header('special') ?>

<!-- Table of Contents
    1. BRAND 
      1.1 Navigation
      1.2 Carousel
    2. MISSION 
    3. SEASON 
    4. PLAYERS 
    5. EDUCATION
    6. SPONSOR -->


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
      <!-- <div> 
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>  -->

    <!-- WORDPRESS QUERY  ========================== -->
      <?php 
        $query = new WP_query( 'pagename=mission');
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<div>";
            the_content();
            echo "</div>";
          }
        }
        wp_reset_postdata();
       ?>
      <!-- END WORDPRESS -->

    </article>
  </section>

 <!-- 3. SEASON -->
 <!- WP ARTFULLY CALENDAR ->
  <section class="scene" id="season">
  <!-- <h1>The Ritz Chamber Players Perform</h1> -->
    <div class=" content container">
      <!-- <article class="blogmain">  -->
        <!-- This is a nested loop -->


        <?php 
          $query = new WP_query( 'cat=5' );
          if ( $query->have_posts()) {
            while ( $query->have_posts() ) {
              $query->the_post();
              echo '<div>';
              // echo '<div class=" content">';
              echo '<article class="blogmain">';
              echo ( do_shortcode( get_post_meta( $post->ID , 'art' , true ) ) ); 
              echo "<p>";
              the_content(); 
              echo "</p>";            
              echo "</article>";
              // echo "</div>";
              echo "</div>";
            }
          }
          wp_reset_postdata();


          // $query = new WP_query('cat=5');
          // if ( $query->have_posts() ) {
          //   while ( $query->have_posts() ) {
          //     $query->the_post();
          //     the_content();
          //   }
          // }
          // wp_reset_postdata();




         ?>
      <!-- </article>  -->
      <aside class="blogside"> 
        <?php 
        $query = new WP_query( 'pagename=this-season');
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<div>";
            the_post_thumbnail();
            echo "<div>";
            the_title();
            the_content();
            echo "</div>";
            echo "</div>";
          }
        }
        wp_reset_postdata();
       ?>
      </aside> 
    </div>
  </section>

  <!-- 4. PLAYERS -->
   <!- PHOTO GRID ->
  <section class="scene" id="players"> 
    
    <header >
    <!-- <div class="content container">  -->
      <h1>Meet the Players</h1>
      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque explicabo numquam cupiditate, ab cum eos, placeat similique iusto nisi possimus vitae ad, earum sit tempora eligendi, at nemo amet ea!</p> -->
      
      <!-- WORDPRESS QUERY ========================== -->
      <?php 
        $query = new WP_query( 'pagename=players');
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<div>";
            the_content();
            echo "</div>";
          }
        }
        wp_reset_postdata();
       ?>
      <!-- END WORDPRESS -->
    </header>

     <!--  <article class="players halfheight" id="annHobson">
        <div class="content">
          <h2>Ann Hobson guitar</h2>
          <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p>
        </div>
      </article> -->


      
 
          <!-- WORDPRESS QUERY  ========================== -->
       <?php 
          $query = new WP_query( 'category_name=player' );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              $more = 0;
              echo "<article class='players halfheight'>"; 
              the_post_thumbnail();
              echo "<div class='content'>";
              echo "<h2>";
              echo get_the_title();
              echo "</h2>";
              echo "<p>";
              the_content();             
              echo "</p>";
              echo "</div>";
              echo "</article>";
            }
          }
          wp_reset_postdata();
         ?>

      <!-- END WORDPRESS -->

      </article>




</section> <!-- END Players -->

<!-- 5. News / Blog SECTION ========================================================= -->

  <section class="scene news" id="news"> <!-- SCENE -->
    <header>   
      <h1>News</h1>
    </header>

    <div class="content container"> <!-- CONTENT CONTAINER -->
      
      <article class="blogmain"> <!-- BLOG MAIN -->
        <!-- THE QUERY -->
        <?php 
          $query = new WP_query( 'cat=-2,-5' );
          if ( $query->have_posts()) {
            while ( $query->have_posts() ) {
              $query->the_post();
          query_posts('showposts=2');
              echo "<div class='left'>";
              echo "<h2>";
              echo get_the_title();
              echo "</h2>";
              echo "<p>";
              the_content();             
              echo "</p>";
              echo "</div>";
            }
          }
          wp_reset_postdata();
         ?>

      </article> <!-- END BLOG MAIN -->


      <aside class="blogside"> <!-- THE SIDEBAR -->

        <?php get_sidebar( 'special' ); ?>

      </aside> <!-- END sidebar class -->

    </div> <!-- END content container -->

  </section> <!-- END News / Blog Section -->



  <!- 6. SPONSOR WP Artfully donation page -->
  <section class="scene" id="sponsor">
    <article class="content ">
      <h1>Sponsorship</h1>
      <!-- <p>Our hotel boasts wireless Internet in every common room, and guest room, including the dining area and lobby. And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art And, we have a state-of-the-art meeting room with video projectors, high definition video screens, and advanced sound technology.</p> -->
    
  

    <!-- WORDPRESS QUERY ========================== -->
      <?php 
        $query = new WP_query( 'pagename=sponsor');
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            echo "<div>";
            the_content();
            echo "</div>";
          }
        }
        wp_reset_postdata();
       ?>
        <div>
         <form id="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="THMKB8Z6JM6L4">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>
      <!-- END WORDPRESS -->


    </article>
  </section>



</div><!-- main -->

<?php get_footer() ?>




