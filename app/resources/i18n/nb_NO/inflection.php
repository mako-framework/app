<?php

//---------------------------------------------
// nb_NO inflection rules
//---------------------------------------------

return
[
	// Inflection rules

	'rules' =>
	[
		// Plural noun forms

		'plural' =>
		[
			'/er$/i' => "ere",
			'/e$/i'  => "er",
			'/$/'    => "er",
		],

		// Irregular words

		'irregular' =>
		[
			'and'   => 'ender',
			'barn'  => 'barn',
			'bok'   => 'bøker',
			'bonde' => 'bønder',
			'felt'  => 'felt',
			'fisk'  => 'fisk',
			'fot'   => 'føtter',
			'gås'   => 'gjess',
			'hus'   => 'hus',
			'land'  => 'land',
			'tann'  => 'tenner',
			'tre'   => 'trær',
			'tå'    => 'tær',
			'vann'  => 'vann',
		],
	],

	// Pluralization function

	'pluralize' => function($word, $count, $rules)
	{
		if($count !== 1)
		{
			if(isset($rules['irregular'][$word]))
			{
				$word = $rules['irregular'][$word];
			}
			else
			{
				foreach($rules['plural'] as $search => $replace)
				{
					if(preg_match($search, $word))
					{
						$word = preg_replace($search, $replace, $word);

						break;
					}
				}
			}
		}

		return $word;
	},
];

