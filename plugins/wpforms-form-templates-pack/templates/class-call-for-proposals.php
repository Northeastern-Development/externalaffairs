<?php
/**
 * Call for Proposals form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Call_for_Proposals extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Call for Proposals Form', 'wpforms-form-templates-pack' );
		$this->slug = 'call-for-proposals';
		$this->data = array(
			'field_id' => 16,
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
					'type' => 'text',
					'label' => __( 'Job Title', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'Company or Organization\'s Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'textarea',
					'label' => __( 'Biography', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				14 => array(
					'id' => '14',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'Proposal Title', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Short Description', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Abstract', 'wpforms-form-templates-pack' ),
					'size' => 'large',
				),
				15 => array(
					'id' => '15',
					'type' => 'checkbox',
					'label' => __( 'Topics', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Topic A', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Topic B', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Topic C', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Topic D', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Topic E', 'wpforms-form-templates-pack' ),
						),
					),
				),
				10 => array(
					'id' => '10',
					'type' => 'select',
					'label' => __( 'Session Type', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Presentation', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Panel', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Workshop', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'select',
					'label' => __( 'Audience Level', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Novice', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Intermediate', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Expert', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				13 => array(
					'id' => '13',
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
new WPForms_Template_Call_for_Proposals;
