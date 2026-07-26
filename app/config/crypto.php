<?php

return
[
	/*
	 * ---------------------------------------------------------
	 * Default
	 * ---------------------------------------------------------
	 *
	 * Default configuration to use.
	 */
	'default' => 'openssl',

	/*
	 * ---------------------------------------------------------
	 * Configurations
	 * ---------------------------------------------------------
	 *
	 * You can define as many cryptography configurations as you want.
	 *
	 * The supported cryptography libraries are: "openssl".
	 *
	 * library                  : Cryptography library you want to use.
	 * cipher                   : The cipher method to use for encryption.
	 * key                      : Key used to encrypt/decrypt data. You should NOT use the key included with the framework in a production environment!
	 * key_derivation_iterations: (optional - default: 600k) The number of iterations performed for the key derivation.
	 */
	'configurations' => [
		'openssl' => [
			'library' => 'openssl',
			'cipher'  => 'AES-256-CTR',
			'key'     => mako\env('ENCRYPTION_KEY'),
		],
	],
];
