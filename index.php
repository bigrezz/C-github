<?php
get_header();
			get_template_part( 'template-parts/index-topSlider');
			get_template_part( 'template-parts/index-about');
			get_template_part( 'template-parts/index-services');
			get_template_part( 'template-parts/index-project');
			get_template_part( 'template-parts/index-pricing');
			get_template_part( 'template-parts/index-textboxes');
			get_template_part( 'template-parts/index-recent-blog');
			get_template_part( 'template-parts/index-achievement');
			the_content();
get_footer();
