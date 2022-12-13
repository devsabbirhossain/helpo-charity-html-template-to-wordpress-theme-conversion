<h6 class="blog-post__title">
	<?php 
		$comments_count = get_comments_number();
		if($comments_count==1){
			echo "1 Comment.";
		}
		else{
			echo $comments_count." Comments.";
		}
	?>
				
</h6>
<ul class="comments">
	<?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
</ul>

<h6 class="blog-post__title">Send Message</h6>

<?php
	comment_form();
?>
