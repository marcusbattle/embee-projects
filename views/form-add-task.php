<?php 
	global $post; 
?>
<form class="embee-form form-add-task" style="display: none;">
	<div>
		<input type="text" name="task" placeholder="Add a new task" style="width: 100%;" autocomplete="off" />
	</div>
	<!-- <input type="date" /> -->
	<input type="hidden" name="project_ID" value="<?php echo $post->ID; ?>" />
	<input type="hidden" name="list_ID" value="" />
	<input type="button" value="Add task" class="confirm-task" /> <a class="close-form-add-task">Cancel</a>
</form>