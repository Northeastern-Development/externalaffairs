<?php
/**
 * Potluck Invitation RSVP Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Potluck_Invitation_RSVP extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Potluck Invitation RSVP Form', 'wpforms-form-templates-pack' );
		$this->slug = 'potluck-invitation-rsvp';
		$this->data = array(
			'field_id' => 5,
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
					'label' => __( 'Are you coming?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Yes, with a guest!', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'I\'m not sure yet', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Can\'t make it', 'wpforms-form-templates-pack' ),
						),
					),
				),
				3 => array(
					'id' => '3',
					'type' => 'text',
					'label' => __( 'What are you bringing?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'textarea',
					'label' => __( 'Comments', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Potluck_Invitation_RSVP;
