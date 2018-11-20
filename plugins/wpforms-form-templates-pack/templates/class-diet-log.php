<?php
/**
 * Diet Log Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Diet_Log extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Diet Log Form', 'wpforms-form-templates-pack' );
		$this->slug = 'diet-log';
		$this->data = array(
			'field_id' => 10,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'select',
					'label' => __( 'Diet Type', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Atkins', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'South Beach', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Paleo', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Keto', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'select',
					'label' => __( 'Meal Type', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Breakfast', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Lunch', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Dinner', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Snack', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'textarea',
					'label' => __( 'What did you eat?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'date-time',
					'label' => __( 'Date / Time', 'wpforms-form-templates-pack' ),
					'format' => 'date-time',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				5 => array(
					'id' => '5',
					'type' => 'number',
					'label' => __( 'Grams of Carbohydrates', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'number',
					'label' => __( 'Grams of Fat', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'number',
					'label' => __( 'Grams of Protein', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'number',
					'label' => __( 'Milligrams of Sodium', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'number',
					'label' => __( 'Total Calories', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Diet_Log;
