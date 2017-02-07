<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario contactos',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => '',
		'to' => ''
	),
	'fields' => array(
		'custom_U199' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Nombre\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Correo electrónico',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Correo electrónico\' es obligatorio.',
				'format' => 'El campo \'Correo electrónico\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U182' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Empresa',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Empresa\' es obligatorio.'
			)
		),
		'custom_U178' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Dirección del trabajo',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Dirección del trabajo\' es obligatorio.'
			)
		),
		'custom_U168' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Ciudad',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Ciudad\' es obligatorio.'
			)
		),
		'custom_U203' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Región',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Región\' es obligatorio.'
			)
		),
		'custom_U190' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Código postal',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Código postal\' es obligatorio.'
			)
		),
		'custom_U186' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'País',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'País\' es obligatorio.'
			)
		),
		'custom_U173' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Mensaje',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Mensaje\' es obligatorio.'
			)
		)
	)
);

process_form($form);
?>
