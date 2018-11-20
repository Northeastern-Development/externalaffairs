<?php
/**
 * Meeting Room Registration Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Meeting_Room_Registration extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Meeting Room Registration Form', 'wpforms-form-templates-pack' );
		$this->slug = 'meeting-room-registration';
		$this->data = array(
			'field_id' => 7,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'Department', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Which room would you like to reserve?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Room A', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Room B', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Room C', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				5 => array(
					'id' => '5',
					'type' => 'checkbox',
					'label' => __( 'Which time blocks would you like to reserve?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '8:00 - 9:00am', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '9:00 - 10:00am', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '10:00 - 11:00am', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '11:00 - 12:00pm', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( '12:00 - 1:00pm', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( '1:00 - 2:00pm', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( '2:00 - 3:00pm', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( '3:00 - 4:00pm', 'wpforms-form-templates-pack' ),
						),
						9 => array(
							'label' => __( '4:00 - 5:00pm', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Questions or Comments', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
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
new WPForms_Template_Meeting_Room_Registration;
