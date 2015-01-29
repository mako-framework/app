<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => 'Het %1$s veld is verplicht.',
	'min_length'               => 'De minimale lengte van het %1$s veld is %2$s karakters.',
	'max_length'               => 'De maximale lengte van het %1$s veld is %2$s karakters.',
	'exact_length'             => 'De exacte lengte van het %1$s veld moet %2$s karakters zijn.',
	'less_than'                => 'De waarde van het %1$s veld moet minder dan %2$s zijn.',
	'less_than_or_equal_to'    => 'De waarde van het %1$s veld moet minder dan of gelijk aan %2$s zijn.',
	'greater_than'             => 'De waarde van het %1$s veld moet groter dan %2$s zijn.',
	'greater_than_or_equal_to' => 'De waarde van het %1$s veld moet groter dan of gelijk aan %2$s zijn.',
	'between'                  => 'De waarde van het %1$s veld moet tussen %2$s en %3$s zijn.',
	'match'                    => 'De waardes van het %1$s veld en het %2$s veld moeten gelijk zijn.',
	'different'                => 'De waardes van het %1$s veld en het %2$s veld moeten verschillen.',
	'regex'                    => 'De waarde van het %1$s veld voldoet niet aan het verplichte formaat.',
	'integer'                  => 'Het %1$s veld moet een integer bevatten.',
	'float'                    => 'Het %1$s veld moet een float bevatten.',
	'natural'                  => 'Het %1$s veld moet een natuurlijk getal bevatten.',
	'natural_non_zero'         => 'Het %1$s veld moet een natuurlijk getal bevatten dat niet nul is.',
	'hex'                      => 'Het %1$s veld moet een geldig hexadecimale waarde bevatten.',
	'alpha'                    => 'Het %1$s veld mag enkel uit letters bestaan.',
	'alpha_unicode'            => 'Het %1$s veld mag enkel uit letters bestaan.',
	'alphanumeric'             => 'Het %1$s veld mag enkel uit letters en nummers bestaan.',
	'alphanumeric_unicode'     => 'Het %1$s veld mag enkel uit letters en nummers bestaan.',
	'alpha_dash'               => 'Het %1$s veld mag enkel uit letters, nummers en mintekens bestaan.',
	'alpha_dash_unicode'       => 'Het %1$s veld mag enkel uit letters, nummers en mintekens bestaan.',
	'email'                    => 'Het %1$s veld moet een geldig e-mail address bevatten.',
	'email_domain'             => 'Het %1$s veld moet een geldig e-mail address bevatten.',
	'url'                      => 'Het %1$s veld moet een geldige URL bevatten.',
	'ip'                       => 'Het %1$s veld moet een geldige IP adres bevatten.',
	'in'                       => 'Het %1$s veld moet een van de mogelijke opties bevatten.',
	'not_in'                   => 'Het %1$s veld heeft een ongeldige waarde.',
	'date'                     => 'Het %1$s veld moet een geldige datum bevatten.',
	'before'                   => 'Het %1$s veld moet een datum voor %3$s bevatten.',
	'after'                    => 'Het %1$s veld moet een datum na %3$s bevatten.',
	'token'                    => 'Ongeldig beveiligingstoken.',
	'uuid'                     => 'Ongeldig UUID.',
	'unique'                   => '%1$s moet uniek zijn.',
	'exists'                   => '%1$s bestaat niet.',

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

