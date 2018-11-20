<?php
/**
 * New Years Party RSVP Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_New_Years_Party_RSVP extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'New Years Party RSVP Form', 'wpforms-form-templates-pack' );
		$this->slug = 'new-years-party-rsvp';
		$this->data = array(
			'field_id' => 6,
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
					'type' => 'radio',
					'label' => __( 'Can you make it?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Not sure', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				3 => array(
					'id' => '3',
					'type' => 'radio',
					'label' => __( 'How many people will be joining?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Just me', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Bringing a freind', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Showing up with the group', 'wpforms-form-templates-pack' ),
						),
					),
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Are you bringing anything else?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Snacks', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Dessert', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Bubbly beverages', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'Anything else we should know?', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_New_Years_Party_RSVP;
