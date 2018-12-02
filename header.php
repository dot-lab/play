<!DOCTYPE html>
<html lang="ja">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/swipebox.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.swipebox.js"></script>
	<script type="text/javascript">
		;( function( $ ) {
			$( '.swipebox' ).swipebox();
		} )( jQuery );
	</script>
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<div class="mask">
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/frontier_logo.png" alt="logo">
			</a>
		</div>
	</div>