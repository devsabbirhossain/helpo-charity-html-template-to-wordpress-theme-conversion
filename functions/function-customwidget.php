<?php 

	//latest-post widget start
	class widget_latestpost extends WP_Widget {

		public function __construct(){
			parent::__construct('widget-latestpost','Widget Latest Post',array(
				'description' => 'Custom Latest Post Widget'
			));
		}

		public function widget($args, $instance){ ?>

			<?php echo $args['before_widget']; //this before_widget is come from function.php ?> 
			<?php 
				echo $args['before_title']; // this before_widget is come from function.php
				echo $instance['title']; // this before_widget is come from function.php
				echo $args['after_title'];// this before_widget is come from function.php
			?>
			<?php
				$tempQuery = new WP_Query([
					'post_type' 	 	=> 	'post',
					'posts_per_page' 	=> 	$instance['nop'],
					'orderby'			=>	'rand',
					'order' 		 	=> 	'DESC'
				]);
			?>
				<?php while($tempQuery->have_posts()): $tempQuery->the_post(); ?>
				<div class="recent-posts__item">
					<div class="recent-posts__item-img">
						<?php the_post_thumbnail('thumbnail', array('class' => 'img--bg')); ?>
					</div>
					<div class="recent-posts__item-description">
						<a class="recent-posts__item-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php if(!empty($instance['dpd'])): ?> 
						<span class="recent-posts__item-value">
							<?php the_time('d M, Y'); ?>
						</span>
						<?php endif; ?> 
					</div>
				</div>
				
				<?php endwhile; ?>
			<?php echo $args['after_widget']; // this before_widget is come from function.php ?> 
			<?php
		}
		
		public function form($instance){ ?>
				<p>
					<label for="<?php echo $this->get_field_id('title');?>">Title:</label>
					<input type="text" id="<?php echo $this->get_field_id('title');?>" class="widefat" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $instance['title']; ?>">
				</p>

				<p>
					<label for="<?php echo $this->get_field_id('nop'); ?>">Number of post to show:</label>
					<input type="number" class="tiny-text" size="3" step="1" min="1" id="<?php echo $this->get_field_id('nop'); ?>" name="<?php echo $this->get_field_name('nop') ?>" value="<?php echo $instance['nop']; ?>">
				</p>

				<p>
					<input type="checkbox" id="<?php echo $this->get_field_id('dpd'); ?>" value="showdpd" name="<?php echo $this->get_field_name('dpd'); ?>" <?php if(!empty($instance['dpd'])){ echo "checked='checked'";} ?>>
					<label for="<?php echo $this->get_field_id('dpd'); ?>">Display post date</label>
				</p>

			<?php
		}
	}
	
	add_action('widgets_init', 'add_custom_widget');
	function add_custom_widget(){
		register_widget('widget_latestpost');
	}