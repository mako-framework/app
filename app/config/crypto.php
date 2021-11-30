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
	 * library: Cryptography library you want to use.
	 * cipher : The cipher method to use for encryption.
	 * key    : Key used to encrypt/decrypt data. You should NOT use the key included with the framework in a production environment!
	 */
	'configurations' =>
	[
		'openssl' =>
		[
			'library' => 'openssl',
			'cipher'  => 'AES-256-CTR',
			'key'     => 'hex:3462f179ba7b6606a60bbfa160bc7ff857ee91ad7850c97562229dc7228e5e49',
		],
	],
];
