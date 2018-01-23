<!DOCTYPE html>

<!-- <html> -->

<head>
	<link rel="profile" href="http://gmpg.org/xfn/11" /> <!-- indica ao browser como o  mark-up deve de ser usado -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <!-- indica o tipo de conteúdo e o conjunto de caracteres -->
	<title><?php wp_title(''); ?></title> <!-- wp_title gera um título diferente para cada página -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> <!-- insere automaticamente o stylesheet criado (style.css) -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> <!-- gera o url de pingback (não obrigatório mas recomendado) -->
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?> <!--  ativa o suporte a comentários -->
</head>

<body>
	<div id="corpo">
		<div id="header">
			<h1> <?php bloginfo('name'); ?> </h1>
			<h2>  <?php bloginfo('description'); ?> </h2>

			<ul id="nav">
				<?php wp_list_cats('sort_column=name'); ?>
			</ul>
		</div> <!-- div #header -->
	</div> <!-- div #corpo -->
