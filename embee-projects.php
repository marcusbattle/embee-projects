<?php

/**
* Plugin Name: Projects
* Plugin URI: http://marcusbattle.com/plugins/projects
* Description: Simple project management built on WordPress
* Version: 0.1.0
* Author: Marcus Battle
* Author URI: http://marcusbattle.com
* License: A "Slug" license name e.g. GPL2
*/


/*
*/
function embee_idea_post_type() {

	$labels = array(
		'name'               => _x( 'Ideas', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Idea', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Ideas', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Idea', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'idea', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Idea', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Idea', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Idea', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Idea', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Ideas', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Ideas', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Ideas:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No ideas found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No ideas found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ideas' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'embee_idea', $args );		

}

add_action( 'init', 'embee_idea_post_type' );


/*
*/
function embee_project_post_type() {

	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'project', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Project', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Project', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Project', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Project', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Projects', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Projects', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Projects:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No projects found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No projects found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'embee_project', $args );		

}

add_action( 'init', 'embee_project_post_type' );

/*
*/
function embee_task_post_type() {

	$labels = array(
		'name'               => _x( 'Tasks', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Task', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Tasks', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Task', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'task', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Task', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Task', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Task', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Task', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Tasks', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Tasks', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Tasks:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No tasks found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No tasks found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tasks' ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'comments' ),
		'show_in_menu'		 => 'edit.php?post_type=embee_project'
	);

	register_post_type( 'embee_task', $args );

}

add_action( 'init', 'embee_task_post_type' );

/*
*/
function embee_task_meta_boxes() { 
	add_meta_box( 'embee-task-related-project', 'Related Project', 'embee_task_meta_box_related_project', 'embee_task', 'side' );
}

add_action( 'add_meta_boxes', 'embee_task_meta_boxes' );

/*
*/
function embee_task_meta_box_related_project( $post ) {

	$related_project_ID = get_post_meta( $post->ID, 'related_project_ID', true );

	echo "<p>Choose which project this task is related to.</p>";

	echo "<select name=\"related_project_ID\" data-value=\"$related_project_ID\">";
	echo "<option value=\"\">--</option>";
	foreach ( $projects = embee_get_projects() as $project ) {
		echo "<option value=\"$project->ID\">$project->post_title</option>";
	}
	echo "</select>";

	echo "<script>jQuery('select[name=\"related_project_ID\"]').val( jQuery('select[name=\"related_project_ID\"]').data('value') )</script>";

}

/*
*/
function embee_get_projects() { 
	
	$args = array(
		'post_type' => 'embee_project',
		'post_status' => 'publish',
		'posts_per_page' => -1
	);

	$query = new WP_Query( $args );

	return $query->posts;

}

/*
*/
function embee_get_tasks( $project_ID ) {

	$args = array(
		'post_type' => 'embee_task',
		'post_status' => 'publish',
		'posts_per_page' => -1
	);

	if ( $project_ID ) {

		$args['meta_key'] = 'related_project_ID';
		$args['meta_value'] = $project_ID;

	}

	$query = new WP_Query( $args );

	return $query->posts;

}

/*
*/
function embee_get_task_lists( $project_ID ) {

	$args = array(
		'post_type' => 'embee_task',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'post_parent' => 0
	);

	if ( $project_ID ) {

		$args['meta_query'][] = array(
			'key' => 'related_project_ID',
			'value' => $project_ID
		);

	}

	$query = new WP_Query( $args );

	return $query->posts;

}

/*
*/
function embee_get_project( $project_ID ) {
	$project = get_post( $project_ID, OBJECT );
	return $project;
}

/*
*/
function embee_task_meta_boxes_save( $post_id ) { 

	if ( get_post_type() != 'embee_task' ) {
		return false;
	}
 
	if ( isset($_POST['related_project_ID']) ) {
		update_post_meta( $post_id, 'related_project_ID', $_POST['related_project_ID'] );
	}

}

add_action( 'save_post', 'embee_task_meta_boxes_save' );

/*
*/
function set_custom_edit_embee_task_columns( $columns ) {

	unset( $columns['author'] );
	unset( $columns['date'] );
	unset( $columns['comments'] );

    $columns['project'] = __( 'Project', 'your_text_domain' );
    $columns['date'] = __( 'Date', 'your_text_domain' );

    return $columns;

}

add_filter( 'manage_edit-embee_task_columns', 'set_custom_edit_embee_task_columns' );

/*
*/
function embee_task_custom_columns( $column, $post_id ) {
    
    switch ( $column ) {

		case 'project' :
			$project_ID = get_post_meta( $post_id , 'related_project_ID' , true ); 

			if ( $project_ID ) {
				$project = get_post( $project_ID, OBJECT );
				echo "<a href=\"" . admin_url('/post.php?post=' . $project_ID . '&action=edit') . "\">$project->post_title</a>";
		    
		    }

		    break;

    }

}

add_action( 'manage_embee_task_posts_custom_column' , 'embee_task_custom_columns', 10, 2 );


/*
*/
function set_custom_edit_embee_project_columns( $columns ) {

	unset( $columns['author'] );
	unset( $columns['date'] );
	unset( $columns['comments'] );

    $columns['tasks'] = __( 'Tasks', 'your_text_domain' );
    $columns['date'] = __( 'Date', 'your_text_domain' );

    return $columns;

}

add_filter( 'manage_edit-embee_project_columns', 'set_custom_edit_embee_project_columns' );

/*
*/
function embee_project_custom_columns( $column, $post_id ) {
    
    switch ( $column ) {

		case 'tasks' :
			echo count(embee_get_tasks($post_id));
		    break;

    }

}

add_action( 'manage_embee_project_posts_custom_column' , 'embee_project_custom_columns', 10, 2 );

/*
*/
function embee_project_the_content( $content ) { 

	global $post;

	if ( ( get_post_type() != 'embee_project' ) || !is_user_logged_in() )
		return $content;

	// Set display for archives
	if ( is_post_type_archive('embee_project') ) {

		$project_permalink = get_permalink( $post->ID );
		$content .= "<p><a href=\"$project_permalink\">" . count(embee_get_tasks( $post->ID )) . " Task Lists</a></p>";

		return $content;

	}

	$args = array(
		'post_type' => 'embee_task',
		'post_status'  => 'publish',
		'meta_key' => 'related_project_ID',
		'meta_value' => $post->ID,
		'title_li' => '',
		'echo' => false,
		'sort_column' => 'menu_order',
		'sort_order' => 'ASC',
		'walker' => new task_checkboxes
	);

	$task_lists = wp_list_pages( $args );

	$button_todo_list = "<a class=\"add-task-list\">Add Task List</a>";

	$content .= $button_todo_list;
	$content .= embee_include( plugin_dir_path( __FILE__ ) . '/views/form-add-list.php' );
	$content .= embee_include( plugin_dir_path( __FILE__ ) . '/views/form-add-task.php' );
	$content .= "<ul class=\"task-lists\">$task_lists</ul>";

	return $content;

}

add_filter( 'the_content', 'embee_project_the_content' );

/*
*/
function embee_task_the_content( $content ) { 

	global $post;

	if ( ( get_post_type() != 'embee_task' ) || !is_user_logged_in() )
		return $content;

	$project_ID = get_post_meta( $post->ID, 'related_project_ID', true );
	$project = embee_get_project( $project_ID );

	if ( !$project )
		return $content;

	$args = array(
		'post_type' => 'embee_task',
		'post_status'  => 'publish',
		'meta_key' => 'related_project_ID',
		'meta_value' => $project_ID,
		'child_of' => $post->ID,
		'title_li' => '',
		'echo' => false,
		'sort_column' => 'menu_order',
		'sort_order' => 'ASC',
		'walker' => new task_checkboxes
	);

	$tasks = wp_list_pages( $args );

	// Display link for 'back' 
	if ( $post->post_parent ) {
		
		$task_list = get_post( $post->post_parent );
		$task_list_permalink = get_permalink( $post->post_parent );
		$content .= "<h4><a href=\"$task_list_permalink\">Back To $task_list->post_title</a></h4>";

	} else {

		$project_permalink = get_permalink( $project );
		$content .= "<h4><a href=\"$project_permalink\">Back To $project->post_title</a></h4>";

	}
	

	$content .= "<div id=\"$post->ID\" class=\"task-list\">";
	$content .= "<ul class=\"tasks\">$tasks</ul>";
		
	if ( $post->post_parent == 0 ) {
		$content .= "<a class=\"button add-task\">Add Task</a></div>";
	}

	$content .= embee_include( plugin_dir_path( __FILE__ ) . '/views/form-add-task.php' );

	return $content;
}

add_filter( 'the_content', 'embee_task_the_content' );

/*
*/
function embee_task_enqueue_scripts() {

	wp_register_style( 'embee-task', plugins_url( '/assets/css/embee.projects.css', __FILE__ ) );
	wp_enqueue_style( 'embee-task' );

	wp_register_script( 'embee-task', plugins_url( '/assets/js/embee.projects.js', __FILE__ ), array('jquery'), false, true );
	wp_enqueue_script( 'embee-task' );

	wp_localize_script( 'embee-task', 'embee_task_ajax', array( 'ajaxurl' => admin_url('admin-ajax.php') ) );
}

add_action( 'wp_enqueue_scripts', 'embee_task_enqueue_scripts' );

/*
*/
function embee_task_ajax_add_task() {

	if ( !is_user_logged_in() ) {
		
		echo json_encode( array(
			'success' => false,
			'message' => 'You must be logged in to save a task'
		));

		exit;

	}

	$task = isset($_POST['task']) ? $_POST['task'] : '';

	if ( $task ) {

		$args = array(
			'post_title' => $task = isset($_POST['task']) ? $_POST['task'] : '',
			'post_status' => 'publish',
			'post_type' => 'embee_task',
			'post_parent' => $_POST['list_ID']
		);

		$task_ID = wp_insert_post( $args );

		$task_permalink = get_permalink( $task_ID );

		update_post_meta( $task_ID, 'related_project_ID', $_POST['project_ID'] );

		echo json_encode( array( 
			'success' => true,
			'task_ID' => $task_ID,
			'permalink' => $task_permalink,
			'task' => $task
		) );

	} else {

		echo json_encode( array( 
			'success' => false,
			'message' => 'Your task cannot be blank'
		) );

	}

	exit;

}

add_action( 'wp_ajax_nopriv_add_task', 'embee_task_ajax_add_task' );
add_action( 'wp_ajax_add_task', 'embee_task_ajax_add_task' );

/*
*/
function embee_task_ajax_update_task() {

	$task_ID = isset($_POST['task_ID']) ? $_POST['task_ID'] : '';
	$task_status = isset($_POST['task_status']) ? $_POST['task_status'] : '';

	$task_updated = update_post_meta( $task_ID, 'task_status', $task_status );

	echo json_encode( array( 
		'success' => ($task_updated) ? true : false,
		'task_ID' => $task_ID,
		'task_status' => $task_status
	) );

	exit;

}

add_action( 'wp_ajax_nopriv_update_task', 'embee_task_ajax_update_task' );
add_action( 'wp_ajax_update_task', 'embee_task_ajax_update_task' );


/*
*/
function my_get_posts( $query ) {

	if ( ( is_home() && $query->is_main_query() ) || is_feed() ) {
		
		$post_types = get_query_var('post_type');

		if ( empty($post_types) )
			$post_types[] = 'post';

		$post_types[] = 'embee_idea';

		$query->set( 'post_type', $post_types );

	}

	return $query;
}

add_filter( 'pre_get_posts', 'my_get_posts' );


function embee_idea_title_filter( $title ) {

	global $id, $wp_query;

	if ( $id &&  $wp_query->is_main_query() && ( get_post_type( $id ) == 'embee_idea' ) ) {
		$title = "Idea: " . $title;
	}

	return $title;

}

add_filter( 'the_title', 'embee_idea_title_filter' );

function embee_include( $file_path ) {

	ob_start();  // start buffer
   	
   	include( $file_path );  // read in buffer
   	
   	$html = ob_get_contents();  // get buffer content
   	ob_end_clean();  // delete buffer content
   	
   	return $html;

}

class task_checkboxes extends Walker_page {
	
	function start_lvl( &$output, $depth = 0, $args = array() ) {
	    $indent = str_repeat("\t", $depth);
	    $output .= "\n$indent<ul class='tasks'>\n";
	}
	 
	function end_lvl( &$output, $depth = 0, $args = array() ) {
	    $indent = str_repeat("\t", $depth);
	    $output .= "$indent</ul>\n";
	}

	function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
		
		$task_permalink = get_permalink( $page->ID );
		$task_status = get_post_meta( $page->ID, 'task_status', true );

		if ( $page->post_parent ) {
			$output .= "<li class=\"task $task_status\"><input type=\"checkbox\" class=\"task-checkbox\" value=\"$page->ID\" /><a href=\"$task_permalink\">$page->post_title";
		} else {
			$output .= "<li id=\"$page->ID\" class=\"task-list\"><h4><a href=\"$task_permalink\">$page->post_title</a></h4>";
		}

	} 

	function end_el( &$output, $page, $depth = 0, $args = array() ) {

		if ( $depth ) {
        	$output .= '</a></li>';

        } else if ( get_post_type() == 'embee_project' ) { 
        	$output .= "<a class=\"add-task\">Add Task</a></li>";
        } else {
        	$output .= '</a></li>';
        }

    }

}


?>