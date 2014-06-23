<?php 
	global $post; 

	if ( get_post_type() == 'embee_task' ) {
		$project_ID = get_post_meta( $post->ID, 'related_project_ID', true );
	} else {
		$project_ID = $post->ID;
	}
?>
<form class="embee-form form-add-task" style="display: none;">
	<div>
		<input type="text" name="task" placeholder="Add a new task" style="width: 100%;" autocomplete="off" />
	</div>
	<!-- <input type="date" /> -->
	<input type="hidden" name="project_ID" value="<?php echo $project_ID; ?>" />
	<input type="hidden" name="list_ID" value="" />
	<input type="button" value="Add task" class="confirm-task" /> <a class="close-form-add-task">Cancel</a>
</form>