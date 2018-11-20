<?php
/**
 * Birthday Party Invitation RSVP Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Birthday_Party_Invitation_RSVP extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Birthday Party Invitation RSVP Form', 'wpforms-form-templates-pack' );
		$this->slug = 'birthday-party-invitation-rsvp';
		$this->data = array(
			'field_id' => 4,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'radio',
					'label' => __( 'Will you be able to make it?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yeah!', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Maybe / Not sure', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'I can\'t', 'wpforms-form-templates-pack' ),
						),
					),
				),
				2 => array(
					'id' => '2',
					'type' => 'select',
					'label' => __( 'How many people are you going to bring?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Just me!', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Plus one', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'A few friends', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'textarea',
					'label' => __( 'Comments or Questions', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Birthday_Party_Invitation_RSVP;
