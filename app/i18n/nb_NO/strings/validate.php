<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => '%1$sfeltet er obligatorisk.',
	'min_length'               => '%1$s må være minst %2$s tegn langt.',
	'max_length'               => '%1$s må være kortere enn %2$s tegn.',
	'exact_length'             => '%1$s må være akkurat %2$s tegn langt.',
	'less_than'                => '%1$s må være mindre enn %2$s.',
	'less_than_or_equal_to'    => '%1$s må være mindre enn eller lik %2$s.',
	'greater_than'             => '%1$s må være større enn %2$s.',
	'greater_than_or_equal_to' => '%1$s må være større enn eller lik %2$s.',
	'between'                  => '%1$s må være mellom %2$s og %3$s.',
	'match'                    => '%1$s og %2$s må være like.',
	'different'                => '%1$s og %2$s må være forskjellige.',
	'regex'                    => '%1$s samsvarer ikke med gyldig format.',
	'integer'                  => '%1$s må være et heltall.',
	'float'                    => '%1$s må være et flyttall.',
	'natural'                  => '%1$s må være et naturlig tall.',
	'natural_non_zero'         => '%1$s må være et naturlig tall større enn 0.',
	'hex'                      => '%1$s må være en gyldig heksadesimalverdi.',
	'alpha'                    => '%1$s kan bare inneholde bokstaver.',
	'alpha_unicode'            => '%1$s kan bare inneholde bokstaver.',
	'alphanumeric'             => '%1$s kan bare inneholde bokstaver og tall.',
	'alphanumeric_unicode'     => '%1$s kan bare inneholde bokstaver og tall.',
	'alpha_dash'               => '%1$s kan bare inneholde bokstaver, tall og bindestreker.',
	'alpha_dash_unicode'       => '%1$s kan bare inneholde bokstaver, tall og bindestreker.',
	'email'                    => '%1$s må være en gyldig e-postadresse.',
	'email_domain'             => '%1$s må være en gyldig e-postadresse.',
	'url'                      => '%1$s må være en gyldig URL.',
	'ip'                       => '%1$s må være en gyldig IP-adresse.',
	'in'                       => '%1$s må være et av de tilgjengelige alternativene.',
	'not_in'                   => '%1$s inneholder en ugyldig verdi.',
	'date'                     => '%1$s må være en gyldig dato.',
	'before'                   => '%1$s må være en dato før %3$s.',
	'after'                    => '%1$s må være en dato etter %3$s.',
	'token'                    => 'Ugyldig sikkerhetskode.',
	'uuid'                     => 'Ugyldig UUID.',
	'unique'                   => '%1$s må være unik.',
	'exists'                   => '%1$s finnes ikke.',

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

