<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="col-md-12">
          
        </div>
    <?php
      }//end while
    }//end if
    ?>
  </div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>
