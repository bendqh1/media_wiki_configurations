# Basic ContactForm configuration:

wfLoadExtension( 'ContactPage' );
$wgContactConfig['default'] = array(
	'RecipientUser' => 'Admin', // Must be the name of a valid account which also has a verified e-mail-address added to it.
	'SenderName' => 'Contact Form on ' . $wgSitename, // "Contact Form on" needs to be translated
	'SenderEmail' => null, // Defaults to $wgPasswordSender, may be changed as required
	'RequireDetails' => true, // Either "true" or "false" as required
	'IncludeIP' => false, // Either "true" or "false" as required
	'MustBeLoggedIn' => false, // Check if the user is logged in before rendering the form
	'AdditionalFields' => array(
		#'additional_field_x' => array(
			#'class' => 'HTMLTextField',
			#'label' => 'תאריך ושעה רצויים לפגישה (אם יש)',
		#),
		#'additional_field_y' => array(
			#'class' => HTMLDateTimeField::class,
			#'type' => 'date',
			#'label' => 'תאריך ושעה רצויים לפגישה (אם יש)',
		#),
		'additional_field_1' => array(
			'class' => 'HTMLTextField',
			'label' => 'מספר הטלפון שלך',
			# 'required' => true,
		),
		'additional_field_2' => array(
			'class' => 'HTMLSelectField',
			'label' => 'פנייה בנושא',
			'options' => [
				'אבחון קידום אתרים (כמפורט במחירון)' => 'אבחון קידום אתרים (כמפורט במחירון)',
				'אופטימיזציה (כמפורט במחירון)' => 'אופטימיזציה (כמפורט במחירון)',
				'שיווק באמצעות תוכן (כמפורט במחירון)' => 'שיווק באמצעות תוכן (כמפורט במחירון)',
				'פיתוח קישורים (כמפורט במחירון)' => 'פיתוח קישורים (כמפורט במחירון)',
				'ייעוץ והדרכה (כמפורט במחירון)' => 'ייעוץ והדרכה (כמפורט במחירון)',
				'נגישות' => 'נגישות',
			],
		),
		'additional_field_3' => array(
			'class' => 'HTMLTextField',
			'label' => 'דומיין אתר לקידום (אם יש)',
		),
		'additional_field_4' => array(
			'class' => 'HTMLTextField',
			'label' => 'תפקיד בארגון (אם יש)',
		),
		'additional_field_u' => array(
			'class' => 'HTMLTextField',
			'label' => 'הערות (אם יש)',
		),
	),
		// Added in MW 1.26
	'DisplayFormat' => 'table',  // See HTMLForm documentation for available values.
	'RLModules' => array(),  // Resource loader modules to add to the form display page.
	'RLStyleModules' => array(),  // Resource loader CSS modules to add to the form display page.
);

# Footer link for ContactForm configuration:

	$wgHooks['SkinTemplateOutputPageBeforeExec'][] = function( $skin, &$template ) {
		$contactLink = Html::element( 'a', [ 'href' => 'index.php?title=מיוחד:יצירת_קשר' ], 'יצירת קשר' );
		$template->set( 'contact', $contactLink );
		$template->data['footerlinks']['places'][] = 'contact';
		return true;
	};
