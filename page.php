<?php

get_header();
?>

<main>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		\WPComponent\Bundle::getComponent( 'page-1' );
	}
} else {

}
?>

</main>

<?php

get_footer();

?>
