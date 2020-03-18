<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="col-md-12">
          <h2><?php the_title(); ?></h2>
        </div>

        <div class="col-md-12">
          <?php the_post_thumbnail('large'); ?>
        </div>

        <div class="col-md-12">
          <p><?php the_content(); ?> </p>
        </div>

        <div class="col-md-6">
          <h3>Body Specifications</h3>
          <ul>
    				<?php
    					$bodyType = get_field_object('body-type');
              if(isset($bodyType)){
                echo "<li><span class='bold'>" . $bodyType['label'] . ": </span>" . $bodyType['value'] . "</li>";
              }

              $bodyMake = get_field_object('body-make');
              if(isset($bodyMake)){
                echo "<li><span class='bold'>" . $bodyMake['label'] . ": </span>" . $bodyMake['value'] . "</li>";
              }

              $bodyModel = get_field_object('body-model');
              if(isset($bodyModel)){
                echo "<li><span class='bold'>" . $bodyModel['label'] . ": </span>" . $bodyModel['value'] . "</li>";
              }

              $bodyCapacity = get_field_object('body-capacity');
              if(isset($bodyCapacity)){
                echo "<li><span class='bold'>" . $bodyCapacity['label'] . ": </span>" . $bodyCapacity['value'] . "</li>";
              }

              $bodySerial = get_field_object('body-serial');
              if(isset($bodySerial)){
                echo "<li><span class='bold'>" . $bodySerial['label'] . ": </span>" . $bodySerial['value'] . "</li>";
              }

              $otherOptions = get_field_object('other-options');
              if(isset($otherOptions)){
                echo "<li><span class='bold'>" . $otherOptions['label'] . ": </span>" . $otherOptions['value'] . "</li>";
              }
		         ?>
          </ul>
        </div>

        <div class="col-md-6">
          <h3>Chassis Specifications</h3>
          <ul>
            <?php
              $newUsed = get_field_object('new-used');
              if(isset($newUsed)){
                echo "<li><span class='bold'>" . $newUsed['label'] . ": </span>" . $newUsed['value'] . "</li>";
              }

              $year = get_field_object('year');
              if(isset($year)){
                echo "<li><span class='bold'>" . $year['label'] . ": </span>" . $year['value'] . "</li>";
              }

              $make = get_field_object('make');
              if(isset($make)){
                echo "<li><span class='bold'>" . $make['label'] . ": </span>" . $make['value'] . "</li>";
              }

              $model = get_field_object('model');
              if(isset($model)){
                echo "<li><span class='bold'>" . $model['label'] . ": </span>" . $model['value'] . "</li>";
              }

              $miles = get_field_object('miles');
              if(isset($miles)){
                echo "<li><span class='bold'>" . $miles['label'] . ": </span>" . $miles['value'] . "</li>";
              }

              $hours = get_field_object('hours');
              if(isset($hours)){
                echo "<li><span class='bold'>" . $hours['label'] . ": </span>" . $hours['value'] . "</li>";
              }

              $engineMake = get_field_object('engine-make');
              if(isset($engineMake)){
                echo "<li><span class='bold'>" . $engineMake['label'] . ": </span>" . $engineMake['value'] . "</li>";
              }

              $engineModel = get_field_object('engine-model');
              if(isset($engineModel)){
                echo "<li><span class='bold'>" . $engineModel['label'] . ": </span>" . $engineModel['value'] . "</li>";
              }

              $engineHP = get_field_object('engine-hp');
              if(isset($engineHP)){
                echo "<li><span class='bold'>" . $engineHP['label'] . ": </span>" . $engineHP['value'] . "</li>";
              }

              $engineBrake = get_field_object('engine-brake');
              if(isset($engineBrake)){
                echo "<li><span class='bold'>" . $engineBrake['label'] . ": </span>" . $engineBrake['value'] . "</li>";
              }

              $transmissionType = get_field_object('transmission-type');
              if(isset($transmissionType)){
                echo "<li><span class='bold'>" . $transmissionType['label'] . ": </span>" . $transmissionType['value'] . "</li>";
              }

              $transmissionMake = get_field_object('transmission-make');
              if(isset($transmissionMake)){
                echo "<li><span class='bold'>" . $transmissionMake['label'] . ": </span>" . $transmissionMake['value'] . "</li>";
              }

              $transmissionModel = get_field_object('transmission-model');
              if(isset($transmissionModel)){
                echo "<li><span class='bold'>" . $transmissionModel['label'] . ": </span>" . $transmissionModel['value'] . "</li>";
              }

              $speeds = get_field_object('speeds');
              if(isset($speeds)){
                echo "<li><span class='bold'>" . $speeds['label'] . ": </span>" . $speeds['value'] . "</li>";
              }

              $frontAxle = get_field_object('front-axle-capacity');
              if(isset($frontAxle)){
                echo "<li><span class='bold'>" . $frontAxle['label'] . ": </span>" . $frontAxle['value'] . "</li>";
              }

              $rearAxle = get_field_object('rear-axle-capacity');
              if(isset($rearAxle)){
                echo "<li><span class='bold'>" . $rearAxle['label'] . ": </span>" . $rearAxle['value'] . "</li>";
              }

              $additionalAxle = get_field_object('additional-axle');
              if(isset($additionalAxle)){
                echo "<li><span class='bold'>" . $additionalAxle['label'] . ": </span>" . $additionalAxle['value'] . "</li>";
              }

              $suspension = get_field_object('suspension');
              if(isset($suspension )){
                echo "<li><span class='bold'>" . $suspension ['label'] . ": </span>" . $suspension ['value'] . "</li>";
              }

              $suspensionModel = get_field_object('suspension-model');
              if(isset($suspensionModel)){
                echo "<li><span class='bold'>" . $suspensionModel['label'] . ": </span>" . $suspensionModel['value'] . "</li>";
              }

              $brakes = get_field_object('brakes');
              if(isset($brakes)){
                echo "<li><span class='bold'>" . $brakes['label'] . ": </span>" . $brakes['value'] . "</li>";
              }

              $ratio = get_field_object('ratio');
              if(isset($miles)){
                echo "<li><span class='bold'>" . $ratio['label'] . ": </span>" . $ratio['value'] . "</li>";
              }

              $gvw = get_field_object('gvw');
              if(isset($gvw)){
                echo "<li><span class='bold'>" . $gvw['label'] . ": </span>" . $gvw['value'] . "</li>";
              }

              $steeringConfig = get_field_object('steering-configuration');
              if(isset($steeringConfig)){
                echo "<li><span class='bold'>" . $steeringConfig['label'] . ": </span>" . $steeringConfig['value'] . "</li>";
              }

              $paint = get_field_object('paint');
              if(isset($paint )){
                echo "<li><span class='bold'>" . $paint ['label'] . ": </span>" . $paint ['value'] . "</li>";
              }

              $stockNum = get_field_object('stock-number');
              if(isset($stockNum)){
                echo "<li><span class='bold'>" . $stockNum['label'] . ": </span>" . $stockNum['value'] . "</li>";
              }

              $price = get_field_object('price');
              if(isset($price)){
                echo "<li><span class='bold'>" . $price['label'] . ": </span>" . $price['value'] . "</li>";
              }

             ?>
          </ul>
        </div>

        <div class="row">
          <h4 class="col-md-12">Truck Images</h4>
          <?php
            //Get the images ids from the post_metadata
            $images = acf_photo_gallery('gallery', $post->ID);
            //Check if return array has anything in it
            if( count($images) ):
                //Cool, we got some data so now let's loop over it
                foreach($images as $image):
                    $id = $image['id']; // The attachment id of the media
                    $title = $image['title']; //The title
                    $caption= $image['caption']; //The caption
                    $full_image = $image['full_image_url']; //Full size image url
                    $full_image_url= $image['full_image_url']; //Full size image url
                    $full_image_url = acf_photo_gallery_resize_image($full_image_url, 250, 200); //Resized size to 262px width by 160px height image url
                    $thumbnail_image_url= $image['full_image_url']; //Get the thumbnail size image url 150px by 150px
                    $url= $image['url']; //Goto any link when clicked
                    $target= $image['target']; //Open normal or new tab
                    $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
                    $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
                ?>
                <div class="col-xs-6 col-md-3">
                    <div class="thumbnail">
                      <a href="<?php echo $full_image; ?>" rel="gallery" class="foobox"><img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"></a>
                    </div>
                </div>
                <?php endforeach;
              endif; ?>
        </div>
      <?php
      }//end while
    }//end if
    ?>
  </div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>
