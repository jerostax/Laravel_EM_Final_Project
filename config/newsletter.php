<?php

return [

    /*
     * The API key of a MailChimp account. You can find yours at
     * https://us10.admin.mailchimp.com/account/api-key-popup/.
     */
    'apiKey' => 'c2770cb61705a39c7b3b2b953ec7239f-us20',

    /*
     * The listName to use when no listName has been specified in a method.
     */
    'defaultListName' => 'subscribers',

    /*
     * Here you can define properties of the lists.
     */
    'lists' => [

        'newsletter' => [

            'id' => '017ffda36a'
        ]
    ],

    /*
     * If you're having trouble with https connections, set this to false.
     */
    'ssl' => true,

];
