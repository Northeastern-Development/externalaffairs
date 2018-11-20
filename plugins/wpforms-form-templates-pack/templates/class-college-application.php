<?php
/**
 * College Application Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_College_Application extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'College Application Form', 'wpforms-form-templates-pack' );
		$this->slug = 'college-application';
		$this->data = array(
			'field_id' => 67,
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
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				3 => array(
					'id' => '3',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'divider',
					'label' => __( 'Emergency Contact', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				5 => array(
					'id' => '5',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'text',
					'label' => __( 'Relationship', 'wpforms-form-templates-pack' ),
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'address',
					'label' => __( 'Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				8 => array(
					'id' => '8',
					'type' => 'phone',
					'label' => __( 'Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'required' => '1',
					'size' => 'medium',
				),
				9 => array(
					'id' => '9',
					'type' => 'divider',
					'description' => __( 'Universities that are recipients of federal dollars are required by the Federal government to solicit certain demographic information to meet federal reporting requirements. Applications are requested to provide the following information voluntarily. This information will not be utilized in a discriminatory manner.', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				10 => array(
					'id' => '10',
					'type' => 'text',
					'label' => __( 'Nation of Citizenship', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				11 => array(
					'id' => '11',
					'type' => 'select',
					'label' => __( 'Race / Origin', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'American Indian or Native Alaskan', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Asian or Pacific Islander', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Third Choice', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'African American', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Hispanic', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'White', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				12 => array(
					'id' => '12',
					'type' => 'text',
					'label' => __( 'Native Language', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				13 => array(
					'id' => '13',
					'type' => 'text',
					'label' => __( 'Religion', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				14 => array(
					'id' => '14',
					'type' => 'select',
					'label' => __( 'Gender', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Male', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Female', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				15 => array(
					'id' => '15',
					'type' => 'select',
					'label' => __( 'Are you a veteran of the U.S. Military?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				16 => array(
					'id' => '16',
					'type' => 'date-time',
					'label' => __( 'Date of Birth', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'dropdown',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				17 => array(
					'id' => '17',
					'type' => 'radio',
					'label' => __( 'This application is for enrollment as:', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Freshman (First time in College) ', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Undergraduate Transfer ', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '2nd Bachelor\'s Degree ', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Former Student Returning (FSR) ', 'wpforms-form-templates-pack' ),
						),
					),
				),
				18 => array(
					'id' => '18',
					'type' => 'text',
					'label' => __( 'What is your planned major?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				19 => array(
					'id' => '19',
					'type' => 'select',
					'label' => __( 'Which campus do you seek admission?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Campus I', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Campus II', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Campus III', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				21 => array(
					'id' => '21',
					'type' => 'radio',
					'label' => __( 'Housing Preference', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'On-campus if available', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Off-campus', 'wpforms-form-templates-pack' ),
						),
					),
				),
				22 => array(
					'id' => '22',
					'type' => 'divider',
					'description' => __( 'If your records have been expunged pursuant to applicable law, you are not required to answer yes to the following questions. If you are unsure whether to answer yes, we strongly suggest that you answer yes and fully disclose all incidents to avoid any risk of disciplinary action or revocation of your offer of admission.', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				23 => array(
					'id' => '23',
					'type' => 'radio',
					'label' => __( 'Are you currently or have you ever been charged with or subject to disciplinary action for scholastic or any other type of misconduct at any educational institution?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				24 => array(
					'id' => '24',
					'type' => 'textarea',
					'label' => __( 'If yes, please explain.', 'wpforms-form-templates-pack' ),
					'size' => 'small',
				),
				25 => array(
					'id' => '25',
					'type' => 'radio',
					'label' => __( 'Have you ever been charged with a violation of the law which resulted in, or if still pending could result in, probation, community service, a jail sentence, or the revocation or suspension of your driver’s license (including traffic violations which resulted in a fine of $200 or more?)', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				26 => array(
					'id' => '26',
					'type' => 'textarea',
					'label' => __( 'If yes, please explain.', 'wpforms-form-templates-pack' ),
					'size' => 'small',
				),
				27 => array(
					'id' => '27',
					'type' => 'divider',
					'label' => __( 'High School Information', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				28 => array(
					'id' => '28',
					'type' => 'text',
					'label' => __( 'High School Name', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				29 => array(
					'id' => '29',
					'type' => 'number',
					'label' => __( 'High School CEEB Code (6 digits)', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				30 => array(
					'id' => '30',
					'type' => 'date-time',
					'label' => __( 'Expected Graduation Date', 'wpforms-form-templates-pack' ),
					'format' => 'date',
					'size' => 'medium',
					'date_format' => 'm/d/Y',
					'date_type' => 'datepicker',
					'time_format' => 'g:i A',
					'time_interval' => '30',
				),
				31 => array(
					'id' => '31',
					'type' => 'address',
					'label' => __( 'High School Address', 'wpforms-form-templates-pack' ),
					'scheme' => 'us',
					'size' => 'medium',
				),
				32 => array(
					'id' => '32',
					'type' => 'phone',
					'label' => __( 'High School Phone', 'wpforms-form-templates-pack' ),
					'format' => 'us',
					'size' => 'medium',
				),
				33 => array(
					'id' => '33',
					'type' => 'divider',
					'description' => __( 'Please provide the names of people in your immediate family who have attended the University.', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				34 => array(
					'id' => '34',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'size' => 'medium',
				),
				35 => array(
					'id' => '35',
					'type' => 'text',
					'label' => __( 'Relationship', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				36 => array(
					'id' => '36',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'size' => 'medium',
				),
				37 => array(
					'id' => '37',
					'type' => 'text',
					'label' => __( 'Relationship', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				38 => array(
					'id' => '38',
					'type' => 'divider',
					'label' => __( 'Extracurricular, Personal and Volunteer Activities', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				39 => array(
					'id' => '39',
					'type' => 'textarea',
					'label' => __( 'Extracurricular Activities', 'wpforms-form-templates-pack' ),
					'description' => __( 'List your organizations, position, description of the activity, and hours per week of involvement.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				40 => array(
					'id' => '40',
					'type' => 'textarea',
					'label' => __( 'Talents and Awards', 'wpforms-form-templates-pack' ),
					'description' => __( 'List each, a description, the level, and number of years of involvement.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				41 => array(
					'id' => '41',
					'type' => 'textarea',
					'label' => __( 'Community Service Work', 'wpforms-form-templates-pack' ),
					'description' => __( 'List the type of work, your role, and hours per week of involvement.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				42 => array(
					'id' => '42',
					'type' => 'textarea',
					'label' => __( 'Employment', 'wpforms-form-templates-pack' ),
					'description' => __( 'List the job, your title, description, hours per week, and dates of employment.', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				43 => array(
					'id' => '43',
					'type' => 'file-upload',
					'label' => __( 'Attach an additional Word, PDF or text document if necessary.', 'wpforms-form-templates-pack' ),
				),
				44 => array(
					'id' => '44',
					'type' => 'divider',
					'label' => __( 'Parent Information', 'wpforms-form-templates-pack' ),
					'description' => __(  'The information requested below is optional, but it may assist in the review of your admission. You are strongly encouraged to complete this section.', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				45 => array(
					'id' => '45',
					'type' => 'text',
					'label' => __( 'Father or Legal Guardian Occupation', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				46 => array(
					'id' => '46',
					'type' => 'select',
					'label' => __( 'Father or Legal Guardian Education', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'High School or Less', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Trade or Vocational School', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Some College', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Undergraduate College Degree', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Graduate Degree', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				47 => array(
					'id' => '47',
					'type' => 'text',
					'label' => __( 'Mother or Legal Guardian Occupation', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				48 => array(
					'id' => '48',
					'type' => 'select',
					'label' => __( 'Mother or Legal Guardian Education', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'High School or Less', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Trade or Vocational School', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Some College', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Undergraduate College Degree', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Graduate Degree', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				49 => array(
					'id' => '49',
					'type' => 'select',
					'label' => __( 'Please indicate your family’s gross income for the most recent tax year. Include both taxed and untaxed income.', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( '$20,000 - $39,999', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( '$40,000 - $59,999', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( '$60,000 - $79,999', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( '$80,000 or more', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				50 => array(
					'id' => '50',
					'type' => 'radio',
					'label' => __( 'Do you have family obligations that keep you from participating in extracurricular activities?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Yes, I have to work to supplement family income. ', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Yes, I provide primary care for family member(s). ', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				51 => array(
					'id' => '51',
					'type' => 'textarea',
					'label' => __( 'If yes or other, please describe:', 'wpforms-form-templates-pack' ),
					'size' => 'small',
				),
				52 => array(
					'id' => '52',
					'type' => 'divider',
					'label' => __( 'For Non-U.S. Citizens Only', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				53 => array(
					'id' => '53',
					'type' => 'text',
					'label' => __( 'City and Country of Birth', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				54 => array(
					'id' => '54',
					'type' => 'select',
					'label' => __( 'What is the status of your VISA?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'I currently hold one', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'I am applying for one', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				55 => array(
					'id' => '55',
					'type' => 'select',
					'label' => __( 'What type of VISA?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'F2', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'J1', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'J2', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'None', 'wpforms-form-templates-pack' ),
						),
						5 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
					'size' => 'medium',
				),
				66 => array(
					'id' => '66',
					'type' => 'text',
					'label' => __( 'If other', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				57 => array(
					'id' => '57',
					'type' => 'text',
					'label' => __( 'I-94 Expiration Date (MM/YYYY)', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				58 => array(
					'id' => '58',
					'type' => 'text',
					'label' => __( 'If you are a permanent immigrant, enter the alien registration number shown on your I-551 form:', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				59 => array(
					'id' => '59',
					'type' => 'text',
					'label' => __( 'Which institution issued your last I-20?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				60 => array(
					'id' => '60',
					'type' => 'radio',
					'label' => __( 'Did you attend?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
				),
				61 => array(
					'id' => '61',
					'type' => 'file-upload',
					'label' => __( 'Please attach a photo of your Alien Registration card.', 'wpforms-form-templates-pack' ),
				),
				62 => array(
					'id' => '62',
					'type' => 'divider',
					'label' => __( 'Agreement', 'wpforms-form-templates-pack' ),
					'description' => __( 'I understand that this application is for admission only for the term indicated. I agree that I am bound by the University’s regulations concerning application deadlines and admission requirements. I agree to the release of any transcripts and test scores to this institution, including any SAT, Achievement Test, and ACT score reports.

		I certify that this information is complete and accurate. I understand that making false or fraudulent statements within this application or residency statement will result in disciplinary action, denial of admission and invalidation of credit or degrees earned.

		If admitted, I agree to abide by the policies of the Board of Regents and the rules and regulations of the University. Should any information change prior to my entry into the University, I will notify the Office of Admissions.

		I understand that the application fee I submit with this application is a non-refundable fee.', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
				),
				63 => array(
					'id' => '63',
					'type' => 'checkbox',
					'label' => __( 'Do you understand and agree to the terms listed above?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes, I understand and agree to the terms listed above. ', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				65 => array(
					'id' => '65',
					'type' => 'divider',
					'description' => __( 'Events, activities, programs and facilities of the Univeristy are available to all without regard to race, color, marital status, sex, religion, national origin, disability, age, Vietnam or disabled veteran status as provided by law and in accordance with the University’s respect for personal dignity.', 'wpforms-form-templates-pack' ),
					'label_disable' => '1',
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
new WPForms_Template_College_Application;
