<?php

	if ( is_active_sidebar('sidebar-1')){
		echo '<div class="blog-sidebar">';
		dynamic_sidebar('sidebar-1');
		echo '</div>';
	}

?>

