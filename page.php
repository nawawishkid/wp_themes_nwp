<?php

get_header();
?>

<main>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		nwp_ui( 'page' );
	}
} else {

}
?>

</main>

<?php

get_footer();

?>
