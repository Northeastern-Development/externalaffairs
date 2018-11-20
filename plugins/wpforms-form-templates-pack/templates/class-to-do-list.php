<?php
/**
 * To Do List Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_To_Do_List extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'To Do List Form', 'wpforms-form-templates-pack' );
		$this->slug = 'to-do-list';
		$this->data = array(
			'field_id' => 7,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Item', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'textarea',
					'label' => __( 'Description', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'select',
					'label' => __( 'Priority', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Low', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Normal', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'High', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'select',
					'label' => __( 'Category', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Personal', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Home', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Business', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'date-time',
					'label' => __( 'Due Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
			),
			'settings' => array(
				'honeypot' => '1',
				'confirmation_message_scroll' => '1',
				'submit_text_processing' => __( 'Sending...', 'wpforms-form-templates-pack' ),
			),
			'meta' => array(
				'template' => $this->slug,
			),
		);
	}
}
new WPForms_Template_To_Do_List;
