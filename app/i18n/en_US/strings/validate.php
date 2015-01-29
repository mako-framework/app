<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => 'The %1$s field is required.',
	'min_length'               => 'The value of the %1$s field must be at least %2$s characters long.',
	'max_length'               => 'The value of the %1$s field must be less than %2$s characters long.',
	'exact_length'             => 'The value of the %1$s field must be exactly %2$s characters long.',
	'less_than'                => 'The value of the %1$s field must be less than %2$s.',
	'less_than_or_equal_to'    => 'The value of the %1$s field must be less than or equal to %2$s.',
	'greater_than'             => 'The value of the %1$s field must be greater than %2$s.',
	'greater_than_or_equal_to' => 'The value of the %1$s field must be greater than or equal to %2$s.',
	'between'                  => 'The value of the %1$s field must be between %2$s and %3$s.',
	'match'                    => 'The values of the %1$s field and %2$s field must match.',
	'different'                => 'The values of the %1$s field and %2$s field must be different.',
	'regex'                    => 'The value of the %1$s field does not match the required format.',
	'integer'                  => 'The %1$s field must contain an integer.',
	'float'                    => 'The %1$s field must contain a float.',
	'natural'                  => 'The %1$s field must contain a natural number.',
	'natural_non_zero'         => 'The %1$s field must contain a non zero natural number.',
	'hex'                      => 'The %1$s field must contain a valid hexadecimal value.',
	'alpha'                    => 'The %1$s field must contain only letters.',
	'alpha_unicode'            => 'The %1$s field must contain only letters.',
	'alphanumeric'             => 'The %1$s field must contain only letters and numbers.',
	'alphanumeric_unicode'     => 'The %1$s field must contain only letters and numbers.',
	'alpha_dash'               => 'The %1$s field must contain only numbers, letters and dashes.',
	'alpha_dash_unicode'       => 'The %1$s field must contain only numbers, letters and dashes.',
	'email'                    => 'The %1$s field must contain a valid e-mail address.',
	'email_domain'             => 'The %1$s field must contain a valid e-mail address.',
	'url'                      => 'The %1$s field must contain a valid URL.',
	'ip'                       => 'The %1$s field must contain a valid IP address.',
	'in'                       => 'The %1$s field must contain one of available options.',
	'not_in'                   => 'The %1$s field contains an invalid value.',
	'date'                     => 'The %1$s field must contain a valid date.',
	'before'                   => 'The %1$s field must contain a date before %3$s.',
	'after'                    => 'The %1$s field must contain a date after %3$s.',
	'token'                    => 'Invalid security token.',
	'uuid'                     => 'Invalid UUID.',
	'unique'                   => 'The %1$s must be unique.',
	'exists'                   => 'The %1$s doesn\'t exist.',

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

