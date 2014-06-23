<?php 
	global $post; 
?>
<form id="form-add-list" class="embee-form form-add-list" style="display: none;">
	<!-- <small>Assign it to a person, group or just write it</small> -->
	<div>
		<input type="text" name="task" placeholder="What is this list about?" style="width: 100%;" autocomplete="off" />
	</div>
	<!-- <input type="date" /> -->
	<input type="hidden" name="project_ID" value="<?php echo $post->ID; ?>" />
	<input type="hidden" name="list_ID" value="0" />
	<input type="button" value="Add List" class="confirm-task" /> <a class="close-form-add-list">Cancel</a>
</form>