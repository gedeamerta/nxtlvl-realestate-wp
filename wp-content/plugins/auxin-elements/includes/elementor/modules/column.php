<?php
namespace Auxin\Plugin\CoreElements\Elementor\Modules;


class Column {

    /**
     * Instance of this class.
     *
     * @var      object
     */
    protected static $instance = null;


    public function __construct(){
        // Modify render
        add_action( 'elementor/frontend/column/before_render', array( $this, 'modify_render' ) );

        // Add new controls
        // add_action( "elementor/element/column/{$section_id}/after_section_end", array( $this, 'add_controls' ) );
    }

    /**
     * Return an instance of this class.
     *
     * @return    object    A single instance of this class.
     */
    public static function get_instance() {
        // If the single instance hasn't been set, set it now.
        if ( null == self::$instance ) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    /**
     * Modify the render of column element
     *
     * @param  Element_Column $column Instance of column element
     *
     * @return void
     */
    public function modify_render( $column ){
        // Add parallax initializer to all column elements
        $column->add_render_attribute( '_wrapper', 'class', 'aux-parallax-section' );
    }

    /**
     * Add extra controls to section element
     *
     * @param  Element_Section $section Instance of Section element
     *
     * @return void
     */
    public function add_controls( $section ){

    }

}
