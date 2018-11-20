<?php
/**
 * Basic Mortgage Application Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Basic_Mortgage_Application extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Basic Mortgage Application Form', 'wpforms-form-templates-pack' );
		$this->slug = 'basic-mortgage-application';
		$this->data = array(
			'field_id' => 19,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'select',
					'label' => __( 'Purpose of Mortgage or Loan', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Home Loan', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Refinance', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Debt Consolidation Loan', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Second Mortgage', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Home Equity Loan', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Home Improvement Loan', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Bad Credit Home Mortgage', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'payment-single',
					'label' => __( 'Loan Amount', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'select',
					'label' => __( 'Type of Property', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'House', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Condo', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Town House', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Duplex', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Land', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'payment-single',
					'label' => __( 'Estimated Price or Value of Property', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'address',
					'label' => __( 'Property Location', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'select',
					'label' => __( 'Down Payment Percentage', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '0-5%', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '6-10%', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '10% or more', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'select',
					'label' => __( 'Current Mortgage Company', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Company A', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Company B', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Company C', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'select',
					'label' => __( 'Would you like a Referral to a Real Estate Agent?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'First Choice', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Second Choice', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Third Choice', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'number',
					'label' => __( 'Age', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'Occupation', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				12 => array(
					'id' => '12',
					'type' => 'payment-single',
					'label' => __( 'Household Income', 'wpforms-form-templates-pack' ),
					'format' => 'user',
					'size' => 'medium',
				),
				13 => array(
					'id' => '13',
					'type' => 'select',
					'label' => __( 'Credit Rating', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'First Choice', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Second Choice', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Third Choice', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				14 => array(
					'id' => '14',
					'type' => 'divider',
					'label' => __( 'Contact Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				15 => array(
					'id' => '15',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				16 => array(
					'id' => '16',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				17 => array(
					'id' => '17',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				18 => array(
					'id' => '18',
					'type' => 'email',
					'label' => __( 'Email', 'wpforms-form-templates-pack' ),
					'required' => '1',
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
new WPForms_Template_Basic_Mortgage_Application;
