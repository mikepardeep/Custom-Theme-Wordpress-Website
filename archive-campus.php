<?php
// Programs main page Screen
get_header(); 
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have one of the best campuses',
));
?>


<div class="container container--narrow page-section">

<ul class="link-list min-list">

<?php
  while(have_posts()) {
      the_post(); ?>
     <li><a href="<?php the_permalink(); ?>"><?php the_title();
      $mapLocation = get_field('map_location');
      print_r($mapLocation); ?></a></li>
  <?php }
  echo paginate_links();
?>

</ul>



</div>

<?php
get_footer();

?>