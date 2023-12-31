<?php
	/**
	 * @since: 07/10/2019
	 * @author: Sarwar Hasan
	 * @version 1.0.0
	 */
	
	class APBDWMC_widget_flag_only  extends WP_Widget {
		
		public $core;
		/**
		 * Sets up the widgets name etc
		 */
		public function __construct() {
			$this->core=APBDWMC_general::GetModuleInstance();
			$widget_ops = array(
				'classname' => 'ht-mcs-widget ht-mcs-sidebar-widget-flag mb-5',
				'description' => $this->core->__("%s widget one",$this->core->kernelObject->pluginName),
			);
			parent::__construct( 'APBDWMC_widget_flag_only', $this->core->__("%s Flag only",'WMC'), $widget_ops );
		}
		
		/**
		 * Outputs the content of the widget
		 *
		 * @param array $args
		 * @param array $instance
		 */
		public function widget( $args, $instance ) {
			// outputs the content of the widget
			if(!isset($instance['title'])){
				$instance['title']="";
			}
			$title = apply_filters( 'widget_title', $instance['title'] );
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
				echo wp_kses_post($args['before_title'].$title. $args['after_title']);
			$this->out_widget($args, $instance );
			echo $args['after_widget'];
		}
		public function out_widget($args, $instance) {
		    echo do_shortcode('[WCMC style="flagonly"]');
		}
		
		/**
		 * Outputs the options form on admin
		 *
		 * @param array $instance The widget options
		 */
		public function form( $instance ) {
			// outputs the options form on admin
			$title   = ! empty( $instance['title'] ) ? $instance['title'] : '';
			
			?>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html($this->core->_e( 'Title:')); ?></label>
				<input placeholder="<?php echo esc_attr( $this->core->__('Please enter your title')); ?>"
				       class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"
				       name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text"
				       value="<?php echo esc_attr( $title ); ?>">
			</p>
			<?php
		}
		
		/**
		 * Processing widget options on save
		 *
		 * @param array $new_instance The new options
		 * @param array $old_instance The previous options
		 *
		 * @return array
		 */
		public function update( $new_instance, $old_instance ) {
			// processes widget options to be saved
			$instance          = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			return $instance;
		}
	}