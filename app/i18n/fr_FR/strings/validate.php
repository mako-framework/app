<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => 'Le champ %1$s est obligatoire.',
	'min_length'               => 'La valeur du champ %1$s doit avoir une longueur d’au moins %2$ caractères.',
	'max_length'               => 'La valeur du champ %1$s doit être plus courte que %2$s caractères.',
	'exact_length'             => 'La valeur du champ %1$s doit avoir une longueur d’exactement %2$s caractères.',
	'less_than'                => 'La valeur du champ %1$s doit être inférieure à %2$s.',
	'less_than_or_equal_to'    => 'La valeur du champ %1$s doit être inférieure ou égale à %2$s.',
	'greater_than'             => 'La valeur du champ %1$s doit être supérieure à %2$s.',
	'greater_than_or_equal_to' => 'La valeur du champ %1$s doit être supérieure à ou égale à %2$s.',
	'between'                  => 'La valeur du champ %1$s doit être entre %2$s et %3$s.',
	'match'                    => 'Les valeurs des champs %1$s et %2$s doivent être égales.',
	'different'                => 'Les valeurs des champs %1$s et %2$s doivent être différentes.',
	'regex'                    => 'La valeur du champ %1$s ne correspond pas au format valable.',
	'integer'                  => 'Le champ %1$s doit contenir un chiffre entier.',
	'float'                    => 'Le champ %1$s doit contenir un nombre à virgule flottante.',
	'natural'                  => 'Le champ %1$s doit contenir un entier naturel.',
	'natural_non_zero'         => 'Le champ %1$s doit contenir un entier naturel supérieur à 0.',
	'hex'                      => 'Le champ %1$s doit contenir un hexadécimale valable.',
	'alpha'                    => 'Le champ %1$s ne peut contenir que des lettres.',
	'alpha_unicode'            => 'Le champ %1$s ne peut contenir que des lettres.',
	'alphanumeric'             => 'Le champ %1$s ne peut contenir que des lettres et des chiffres.',
	'alphanumeric_unicode'     => 'Le champ %1$s ne peut contenir que des lettres et des chiffres.',
	'alpha_dash'               => 'Le champ %1$s ne peut contenir que des lettres, chiffres et traits d’union.',
	'alpha_dash_unicode'       => 'Le champ %1$s ne peut contenir que des lettres, chiffres et traits d’union.',
	'email'                    => 'Le champ %1$s doit contenir une adresse mail valable.',
	'email_domain'             => 'Le champ %1$s doit contenir une adresse mail valable.',
	'url'                      => 'Le champ %1$s doit contenir un URL valable.',
	'ip'                       => 'Le champ %1$s doit contenir une adresse IP valable.',
	'in'                       => 'Le champ %1$s doit contenir une des alternatives disponibles.',
	'not_in'                   => 'Le champ %1$s contient une valeur non valable.',
	'date'                     => 'Le champ %1$s doit contenir une date valable.',
	'before'                   => 'Le champ %1$s doit être une date avant le %3$s.',
	'after'                    => 'Le champ %1$s doit être une date après le %3$s.',
	'token'                    => 'Code de sécurité invalide.',
	'uuid'                     => 'UUID invalide.',
	'unique'                   => 'La valeur du champ %1$s doit être unique.',
	'exists'                   => 'La valeur du champ %1$s n’existe pas.',

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

