<?php

	/**
	 * new WordPress Widget format
	 * Wordpress 2.8 and above
	 * @see http://codex.wordpress.org/Widgets_API#Developing_Widgets
	 */
	class beh_Widget extends WP_Widget {

	    /**
	     * Constructor
	     *
	     * @return void
	     **/
	    function __construct() {
	        $widget_ops = array( 'classname' => 'CSS class name', 'description' => 'Custom Hostgator add' );
	        // $this->WP_Widget( 'CSS class name', 'HostGator Add', $widget_ops );
	        parent::__construct( 'CSS class name', 'HostGator Add', $widget_ops );
	    }

	    /**
	     * Outputs the HTML for this widget.
	     *
	     * @param array  An array of standard parameters for widgets in this theme
	     * @param array  An array of settings for this widget instance
	     * @return void Echoes it's output
	     **/
	    function widget( $args, $instance ) {
	    	global $page;
	        extract( $args, EXTR_SKIP );
	        echo $before_widget;
	        echo $before_title;
	        echo ''; // Can set this with a widget option, or omit altogether
	        echo $after_title;

	        if( ! is_page('Checkout') )
	        {
	        ?>
		        <div style="margin-top: 20px;">
		        <a href="http://partners.hostgator.com/c/248317/178157/3094"><img src="http://adn.impactradius.com/display-ad/3094-178157" border="0" alt="" width="310" height="250"/></a>
		        <img height="0" width="0" src="http://partners.hostgator.com/i/248317/178157/3094" style="position:absolute;visibility:hidden;" border="0" />
		        </div
		        <?php
	    	}
		    //
		    // Widget display logic goes here
		    //
		    echo $after_widget;
	    }

	    /**
	     * Deals with the settings when they are saved by the admin. Here is
	     * where any validation should be dealt with.
	     *
	     * @param array  An array of new settings as submitted by the admin
	     * @param array  An array of the previous settings
	     * @return array The validated and (if necessary) amended settings
	     **/
	    function update( $new_instance, $old_instance ) {

	        // update logic goes here
	        $updated_instance = $new_instance;
	        return $updated_instance;
	    }

	    /**
	     * Displays the form for this widget on the Widgets page of the WP Admin area.
	     *
	     * @param array  An array of the current settings for this widget
	     * @return void Echoes it's output
	     **/
	    function form( $instance ) {
	        // $instance = wp_parse_args( (array) $instance, array( array of option_name => value pairs ) );

	        // display field names here using:
	        // $this->get_field_id( 'option_name' ) - the CSS ID
	        // $this->get_field_name( 'option_name' ) - the HTML name
	        // $instance['option_name'] - the option value
	    }
	}

	function beh_custom_widget()
	{
		register_widget( 'beh_Widget' );
	}

	add_action( 'widgets_init', 'beh_custom_widget' );