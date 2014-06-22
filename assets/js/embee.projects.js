(function($){

	// Create new task list
	$('.add-task-list').on( 'click', function(e){
		e.preventDefault();

		$(this).hide();
		$('#form-add-list').show();

		// $('.task-lists').prepend('<ul class="task-list"><li>list created</li></ul>')
	});

	// 
	$('.add-task').on( 'click', function(e) {
		e.preventDefault();

		$('.add-task').hide();
		
		var task_list = $(this).closest('.task-list');
		var form_add_task = $('.form-add-task').clone();

		$(form_add_task).find('input[name="list_ID"]').val( $(task_list).attr('id') );
		$(task_list).append($(form_add_task).show());

	});

	// Close the task window
	$(document).on( 'click', '.close-form-add-task', function(e){
		e.preventDefault();
			
		var task_list = $(this).closest('.task-list');

		$('.add-task').show();
		$(task_list).find('.form-add-task').remove();

	});

	$(document).on( 'click', '.close-form-add-list', function(e){
		e.preventDefault();

		var task_list = $(this).closest('.task-list');
		$('.add-task-list').show();
		$('#form-add-list').hide();

	});

	// 
	$(document).on( 'click', '.confirm-task', function(e){

		e.preventDefault();

		var form_add_task = $(this).closest('form.form-add-task');
		var task_list = $(this).closest('.task-list');

		var request = $.ajax({
			url: embee_task_ajax.ajaxurl,
			type: 'POST',
			data: { 
				action: 'add_task',
				task: $(form_add_task).find('input[name="task"]').val(),
				project_ID: $(form_add_task).find('input[name="project_ID"]').val(),
				list_ID: $(form_add_task).find('input[name="list_ID"]').val()
			},
			dataType: 'json'
		});

		request.done(function( msg ) {

			if ( msg.success ) {

				$(form_add_task).remove();

				// Check to see if ul.tasks exists
				if ( $(task_list).find('ul.tasks').length ) {
					$(task_list).find('ul.tasks').append('<li class="task"><input type="checkbox" class="task-checkbox" id="' + msg.task_ID + '" /><a href="' + msg.permalink + '">' + msg.task + '</a></li>');
				} else {
					$(task_list).find('h4').after('<ul class="tasks"><li class="task"><input type="checkbox" class="task-checkbox" id="' + msg.task_ID + '" /><a href="' + msg.permalink + '">' + msg.task + '</a></li></ul>');
				}

				$('.add-task').show();

			} else {

				alert( msg.message );

			}

		});

	});

	$('li.complete .task-checkbox').attr('checked',true);

	// 
	$(document).on('click', '.task-checkbox', function(e){

		var task = $(this);
		var task_status = '';

		if( $(task).is(':checked') ) {
			$(task).parent().addClass('complete').removeClass('incomplete');
			task_status = 'complete';
		} else {
			$(task).parent().addClass('incomplete').removeClass('complete');
			task_status = 'incomplete';
		}

		var request = $.ajax({
			url: embee_task_ajax.ajaxurl,
			type: 'POST',
			data: { 
				action: 'update_task',
				task_ID: $(task).val(),
				task_status: task_status
			},
			dataType: 'json'
		});

		request.done(function( msg ) {

			$(task).removeClass('incomplete complete');
			$(task).addClass( msg.task_status );

			if ( !msg.success ) {
				alert( 'Error: There was a problem updating the task. Please try again.' );
			}

		});

	});

})(jQuery);