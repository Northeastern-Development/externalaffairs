<?php
/**
 * Job Application Upload Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Job_Application_Upload extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Job Application Upload Form', 'wpforms-form-templates-pack' );
		$this->slug = 'job-application-upload';
		$this->data = array(
			'field_id' => 11,
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
				4 => array(
					'id' => '4',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'radio',
					'label' => __( 'How did you find out about this position?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Current Employee', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Career Fair', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Newspaper Ad', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Radio/TV AD', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Search Engine', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Social Media', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Craigslist', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'If other', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'file-upload',
					'label' => __( 'Upload your resume', 'wpforms-form-templates-pack' ),
					'required' => '1',
				),
				9 => array(
					'id' => '9',
					'type' => 'file-upload',
					'label' => __( 'Upload a cover letter', 'wpforms-form-templates-pack' ),
				),
				10 => array(
					'id' => '10',
					'type' => 'textarea',
					'label' => __( 'Additional Information', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Job_Application_Upload;
