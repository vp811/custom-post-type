<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

  </head>

  <body>
    <header>

      <div class="header">
        <div class="container center">
          <div class="row">

            <div class="three columns">
              <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>

          </div>
        </div>
      </div>

    </header>
