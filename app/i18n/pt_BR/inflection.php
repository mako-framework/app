<?php

//---------------------------------------------
// pt_BR inflection rules
//---------------------------------------------

return 
[
    // Inflection rules

    'rules' => 
    [
        // Plural noun forms

        'plural' => 
        [
            '/^(.*)ao$/i'         => '$1oes',
            '/^(.*)(r|s|z)$/i'    => '$1$2es',
            '/^(.*)(a|e|o|u)l$/i' => '$1$2is',
            '/^(.*)il$/i'         => '$1is',
            '/^(.*)(m|n)$/i'      => '$1ns',
            '/^(.*)$/i'           => '$1s'
        ],

        // Irregular words

        'irregular' => 
        [
            'alias'   => 'aliases',
            'lapis'   => 'laips',
            'pais'    => 'pais',
            'alemão'  => 'alemães',
            'cão'     => 'cães',
            'abdomen' => 'abdomens',
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

/** -------------------- End of file --------------------**/