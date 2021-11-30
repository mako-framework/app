<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/*
	 * Rule error messages.
	 */
	'after'                    => 'The %1$s field must contain a valid date after %3$s.',
	'alpha_dash_unicode'       => 'The %1$s field must contain only numbers, letters and dashes.',
	'alpha_dash'               => 'The %1$s field must contain only numbers, letters and dashes.',
	'alpha_unicode'            => 'The %1$s field must contain only letters.',
	'alpha'                    => 'The %1$s field must contain only letters.',
	'alphanumeric_unicode'     => 'The %1$s field must contain only letters and numbers.',
	'alphanumeric'             => 'The %1$s field must contain only letters and numbers.',
	'array'                    => 'The %1$s field must contain an array.',
	'aspect_ratio'             => 'The %1$s does not have the required aspect ratio of %2$s:%3$s.',
	'before'                   => 'The %1$s field must contain a valid date before %3$s.',
	'between'                  => 'The value of the %1$s field must be between %2$s and %3$s.',
	'boolean:false'            => 'The %1$s field must contain the boolean value FALSE.',
	'boolean:true'             => 'The %1$s field must contain the boolean value TRUE.',
	'boolean'                  => 'The %1$s field must contain a boolean.',
	'date'                     => 'The %1$s field must contain a valid date.',
	'different'                => 'The values of the %1$s field and %2$s field must be different.',
	'email_domain'             => 'The %1$s field must contain a valid e-mail address.',
	'email'                    => 'The %1$s field must contain a valid e-mail address.',
	'enum'                     => 'The %1$s field must contain a valid enum value.',
	'exact_dimensions'         => 'The %1$s does not meet the required dimensions of %2$sx%3$s pixels.',
	'exact_length'             => 'The value of the %1$s field must be exactly %2$s characters long.',
	'exists'                   => 'The %1$s doesn\'t exist.',
	'greater_than_or_equal_to' => 'The value of the %1$s field must be greater than or equal to %2$s.',
	'greater_than'             => 'The value of the %1$s field must be greater than %2$s.',
	'hash'                     => 'The %1$s does not match the expected hash.',
	'hex'                      => 'The %1$s field must contain a valid hexadecimal value.',
	'hmac'                     => 'The %1$s does not match the expected hmac.',
	'in'                       => 'The %1$s field must contain one of available options.',
	'ip'                       => 'The %1$s field must contain a valid %2$s address.',
	'is_uploaded'              => 'The %1$s must be an uploaded file.',
	'json'                     => 'The %1$s field must contain valid JSON.',
	'less_than_or_equal_to'    => 'The value of the %1$s field must be less than or equal to %2$s.',
	'less_than'                => 'The value of the %1$s field must be less than %2$s.',
	'match'                    => 'The values of the %1$s field and %2$s field must match.',
	'max_dimensions'           => 'The %1$s exceeds the maximum dimensions of %2$sx%3$s pixels.',
	'max_file_size'            => 'The %1$s must be less than %2$s in size.',
	'max_filename_length'      => 'The %1$s filename must be at most %2$s characters long.',
	'max_length'               => 'The value of the %1$s field must be less than %2$s characters long.',
	'mime_type'                => 'The %1$s must be a file of type: %2$s.',
	'min_dimensions'           => 'The %1$s falls short of the minimum dimensions of %2$sx%3$s pixels.',
	'min_length'               => 'The value of the %1$s field must be at least %2$s characters long.',
	'not_empty'                => 'The %1$s field can\'t be empty.',
	'not_in'                   => 'The %1$s field contains an invalid value.',
	'number:float'             => 'The %1$s field must contain a float.',
	'number:int'               => 'The %1$s field must contain an integer.',
	'number:natural_non_zero'  => 'The %1$s field must contain a non zero natural number.',
	'number:natural'           => 'The %1$s field must contain a natural number.',
	'numeric:float'            => 'The %1$s field must contain a float.',
	'numeric:int'              => 'The %1$s field must contain an integer.',
	'numeric:natural_non_zero' => 'The %1$s field must contain a non zero natural number.',
	'numeric:natural'          => 'The %1$s field must contain a natural number.',
	'one_time_token'           => 'Invalid security token.',
	'regex'                    => 'The value of the %1$s field does not match the required format.',
	'required'                 => 'The %1$s field is required.',
	'string'                   => 'The %1$s field must contain a string.',
	'time_zone'                => 'The %1$s field must contain a valid time zone.',
	'token'                    => 'Invalid security token.',
	'unique'                   => 'The %1$s must be unique.',
	'url'                      => 'The %1$s field must contain a valid URL.',
	'uuid'                     => 'Invalid UUID.',

	/*
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
