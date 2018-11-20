<?php
/**
 * Recipe Catalog Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Recipe_Catalog extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Recipe Catalog Form', 'wpforms-form-templates-pack' );
		$this->slug = 'recipe-catalog';
		$this->data = array(
			'field_id' => 12,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'text',
					'label' => __( 'Recipe Name', 'wpforms-form-templates-pack' ),
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
					'label' => __( 'Cuisine', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'African', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'American', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Asian', 'wpforms-form-templates-pack' ),
						),
						10 => array(
							'label' => __( 'Caribbean', 'wpforms-form-templates-pack' ),
						),
						9 => array(
							'label' => __( 'Chinese', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'French', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Greek', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Indian', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Italian', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Japanese', 'wpforms-form-templates-pack' ),
						),
						14 => array(
							'label' => __( 'Mexican', 'wpforms-form-templates-pack' ),
						),
						13 => array(
							'label' => __( 'Middle Eastern', 'wpforms-form-templates-pack' ),
						),
						12 => array(
							'label' => __( 'Moroccan', 'wpforms-form-templates-pack' ),
						),
						11 => array(
							'label' => __( 'Spanish', 'wpforms-form-templates-pack' ),
						),
						15 => array(
							'label' => __( 'Thai', 'wpforms-form-templates-pack' ),
						),
						16 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'select',
					'label' => __( 'Dish type', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Appetizer', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Beverage', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Bread', 'wpforms-form-templates-pack' ),
						),
						8 => array(
							'label' => __( 'Dessert', 'wpforms-form-templates-pack' ),
						),
						7 => array(
							'label' => __( 'Main', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Salad', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Soup', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Side dish', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Primary ingredient', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				5 => array(
					'id' => '5',
					'type' => 'textarea',
					'label' => __( 'Ingredients', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'textarea',
					'label' => __( 'Instructions', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'text',
					'label' => __( 'Prep time', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'text',
					'label' => __( 'Cook time', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'Number of servings', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'text',
					'label' => __( 'Source', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Recipe_Catalog;
