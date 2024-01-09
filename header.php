<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="bg-gray-300">
      <div class="max-w-4xl mx-auto mb-5 px-4 flex justify-between items-center">
        <h1 class="text-xl sm:text-3xl py-10"><a href="<?php echo get_home_url(); ?>" class="hover:text-teal-600">The Best Blog In The World</a></h1>
      </div>
    </div>
