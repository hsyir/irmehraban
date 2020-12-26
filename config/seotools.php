<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "اکرام کاشمر", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'وب سایت اکرام ایتام و محسنین کاشمر، پویش شهر مهربان من', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["اکرام کاشمر","اکرام ایتام و محسنین کاشمر","امداد کاشمر","ایتام و نیازمندان کاشمر","ekram kashmar","ekram","ابران مهربان","پویش شهر مهربان من"],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'اکرام کاشمر', // set false to total remove
            'description' => 'وب سایت اکرام ایتام و محسنین کاشمر', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'اکرام کاشمر', // set false to total remove
            'description' => 'وب سایت اکرام ایتام و محسنین کاشمر', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
