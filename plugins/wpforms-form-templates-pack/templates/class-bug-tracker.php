<?php
/**
 * Bug Tracker Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Bug_Tracker extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Bug Tracker Form', 'wpforms-form-templates-pack' );
		$this->slug = 'bug-tracker';
		$this->data = array(
			'field_id' => 10,
			'fields' => array(
				8 => array(
					'id' => '8',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'textarea',
					'label' => __( 'Describe what happened or steps to reproduce the issue', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'select',
					'label' => __( 'Operating System', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Windows 7', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Windows 8', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Windows 10', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'macOS', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Linux', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'iOS', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Android', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'select',
					'label' => __( 'Browser', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Chrome', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Firefox', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Opera', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Edge', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Internet Explorer', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Safari', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'select',
					'label' => __( 'Severity', 'wpforms-form-templates-pack' ),
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
				7 => array(
					'id' => '7',
					'type' => 'file-upload',
					'label' => __( 'Upload a screenshot', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Bug_Tracker;
