<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => 'O campo %1$s é obrigatório.',
	'min_length'               => 'O valor do campo %1$s deve conter ao menos %2$s caracteres.',
	'max_length'               => 'O valor do campo %1$s deve ter menos do que %2$s caracteres.',
	'exact_length'             => 'O valor do campo %1$s deve ter exatamente %2$s caracteres.',
	'less_than'                => 'O valor do campo %1$s deve ser menor que %2$s.',
	'less_than_or_equal_to'    => 'O valor do campo %1$s deve ser menor ou igual a %2$s.',
	'greater_than'             => 'O valor do campo %1$s deve ser maior que %2$s.',
	'greater_than_or_equal_to' => 'O valor do campo %1$s deve ser maior ou igual a %2$s.',
	'between'                  => 'O valor do campo %1$s deve estar entre %2$s e %3$s.',
	'match'                    => 'Os valores dos campos %1$s e %2$s devem ser iguais.',
	'different'                => 'Os valores dos campos %1$s e %2$s devem ser diferentes.',
	'regex'                    => 'O valor do campo %1$s não é compativel com o formato requisitado.',
	'integer'                  => 'O campo %1$s deve conter um valor inteiro.',
	'float'                    => 'O campo %1$s deve conter um valor com ponto flutuante.',
	'natural'                  => 'O campo %1$s deve conter um número natual.',
	'natural_non_zero'         => 'O campo %1$s deve conter um numero natual não zero.',
	'hex'                      => 'O campo %1$s deve conter um valor hexadecimal válido.',
	'alpha'                    => 'O campo %1$s deve conter apenas letras.',
	'alpha_unicode'            => 'O campo %1$s deve conter apenas letras.',
	'alphanumeric'             => 'O campo %1$s deve conter apenas letras e números.',
	'alphanumeric_unicode'     => 'O campo %1$s deve conter apenas letras e números.',
	'alpha_dash'               => 'O campo %1$s deve conter apenas números, letras and traços.',
	'alpha_dash_unicode'       => 'O campo %1$s deve conter apenas números, letras and traços.',
	'email'                    => 'O campo %1$s deve conter um endereço de email válido.',
	'email_domain'             => 'O campo %1$s deve conter um endereço de email válido.',
	'url'                      => 'O campo %1$s deve conter uma URL válida.',
	'ip'                       => 'O campo %1$s deve conter um endereço de IP válido.',
	'in'                       => 'O campo %1$s deve conter umas das opções disponíveis.',
	'not_in'                   => 'O campo %1$s contém um valor inválido.',
	'date'                     => 'O campo %1$s deve conter uma data válida.',
	'before'                   => 'O campo %1$s deve conter uma data anterior à %3$s.',
	'after'                    => 'O campo %1$s deve conter uma data posterior à %3$s.',
	'token'                    => 'Token de segurança inválido.',
	'uuid'                     => 'UUID Inválido.',
	'unique'                   => 'O conteúdo do campo %1$s já existe.',
	'exists'                   => 'O conteúdo do campo %1$s não existe.',

	/**
	 * Custom overrides.
	 */

	'overrides' =>
	[
		'fieldnames' =>
		[

		],
		'messages' =>
		[

		],
	],
];