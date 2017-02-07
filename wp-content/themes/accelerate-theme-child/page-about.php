<?php
/**
 * The template for displaying the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); 
           
            $intro_title = get_field('intro_title'); 
            $intro_description = get_field('intro_description');
            $title_1 = get_field('title_1');
            $description_1 = get_field('description_1');
            $image_1 = get_field('image_1');
            $title_2 = get_field('title_2');
            $description_2 = get_field('description_2');
            $image_2 = get_field('image_2');
            $title_3 = get_field('title_3');
            $description_3 = get_field('description_3');
            $image_3 = get_field('image_3');
            $title_4 = get_field('title_4');
            $description_4 = get_field('description_4');
            $image_4 = get_field('image_4');
            $size = "full";
            ?>

<article>
    <section id="about-hero">
        <div class="hero-content">
            <p><?php the_content();?></p>
        </div>
    </section>

    <section id="our-services">
        <h2><?php echo $intro_title; ?></h2>
        <p><?php echo $intro_description; ?></p>
    </section>

    <section id="content-strategy">
        <div class="content-right">
            <h2><?php echo $title_1; ?></h2>
            <p><?php echo $description_1; ?></p>
        </div>
         <div class="image-left">
        <?php if($image_1) {
                echo wp_get_attachment_image( $image_1, $size );
            } ?> 
        <div>
    </section>

    <section id="influencer-mapping">
        <div class="content-left">
            <h2><?php echo $title_2; ?></h2>
            <p><?php echo $description_2; ?></p>
        </div>
        <div class="image-right">
        <?php if($image_2) {
                echo wp_get_attachment_image( $image_2, $size );
            } ?> 
        <div>
    </section>

    <section id="social-media">
        <div class="content-right">
            <h2><?php echo $title_3; ?></h2>
            <p><?php echo $description_3; ?></p>
        </div>
         <div class="image-left">
        <?php if($image_3) {
                echo wp_get_attachment_image( $image_3, $size );
            } ?> 
        <div>
    </section>

    <section id="design-development">
        <div class="content-left">
            <h2><?php echo $title_4; ?></h2>
            <p><?php echo $description_4; ?></p>
        </div>
         <div class="image-right">
        <?php if($image_4) {
                echo wp_get_attachment_image( $image_4, $size );
            } ?> 
        <div>
    </section>

    <section>

            <h3 class="tag">Interested in working with us?</h3>
            <a class="about-button" href="http://localhost:46492/contact-us/">Contact Us</a>  

    </section>



			<?php endwhile; // end of the loop. ?>

    </article>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>