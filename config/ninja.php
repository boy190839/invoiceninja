<?php

return [

    'web_url' => 'https://www.invoiceninja.com',
    'app_name' => env('APP_NAME'),
    'site_url' => env('APP_URL', 'https://admin.invoiceninja.com'),
    'app_domain' => env('APP_DOMAIN', 'invoiceninja.com'),
    'app_version' => '0.0.1',
    'api_version' => '0.0.1',
    'terms_version' => '1.0.1',
    'app_env' => env('APP_ENV', 'development'),
    'api_secret' => env('API_SECRET', ''),
    'google_maps_api_key' => env('GOOGLE_MAPS_API_KEY'),
    'key_length' => 64,
    'date_format' => 'Y-m-d',
    'date_time_format' => 'Y-m-d H:i',
    'daily_email_limit' => 300,
    'error_email' => env('ERROR_EMAIL', ''),

    'environment' => env('NINJA_ENVIRONMENT', 'selfhost'), // 'hosted', 'development', 'selfhost', 'reseller'

    // Settings used by invoiceninja.com

    'terms_of_service_url' => [
        'hosted' => env('TERMS_OF_SERVICE_URL', 'https://www.invoiceninja.com/terms/'),
        'selfhost' => env('TERMS_OF_SERVICE_URL', 'https://www.invoiceninja.com/self-hosting-terms-service/'),
    ],

    'privacy_policy_url' => [
        'hosted' => env('PRIVACY_POLICY_URL', 'https://www.invoiceninja.com/privacy-policy/'),
        'selfhost' => env('PRIVACY_POLICY_URL', 'https://www.invoiceninja.com/self-hosting-privacy-data-control/'),
    ],

    'db' => [
        'multi_db_enabled' => env('MULTI_DB_ENABLED', false),
        'default' => env('DB_CONNECTION', 'mysql'),
    ],

    'i18n' => [
        'timezone_id' => env('DEFAULT_TIMEZONE', 15),
        'country_id' => env('DEFAULT_COUNTRY', 840), // United Stated
        'currency_id' => env('DEFAULT_CURRENCY', 1),
        'language_id' => env('DEFAULT_LANGUAGE', 1), //en
        'date_format_id' => env('DEFAULT_DATE_FORMAT_ID', '1'),
        'datetime_format_id' => env('DEFAULT_DATETIME_FORMAT_ID', '1'),
        'locale' => env('DEFAULT_LOCALE', 'en'),
        'map_zoom' => env('DEFAULT_MAP_ZOOM', 10),
        'payment_terms' => env('DEFAULT_PAYMENT_TERMS', 1),
        'military_time' => env('MILITARY_TIME', 0),
        'start_of_week' => env('START_OF_WEEK',1),
        'financial_year_start' => env('FINANCIAL_YEAR_START', '2000-01-01')
    ],

    'testvars' => [
        'username' => 'user@example.com',
        'clientname' => 'client@example.com',
        'password' => 'password',
        'stripe' => env('STRIPE_KEYS',''),
    ],

    'contact' => [
        'email' => env('MAIL_FROM_ADDRESS'),
        'from_name' => env('MAIL_FROM_NAME'),
    ],
    'cached_tables' => [
        'currencies' => 'App\Models\Currency',
        'sizes' => 'App\Models\Size',
        'industries' => 'App\Models\Industry',
        'timezones' => 'App\Models\Timezone',
        'date_formats' => 'App\Models\DateFormat',
        'datetime_formats' => 'App\Models\DatetimeFormat',
        'languages' => 'App\Models\Language',
        'payment_types' => 'App\Models\PaymentType',
        'countries' => 'App\Models\Country',
        //'invoiceDesigns' => 'App\Models\InvoiceDesign',
        //'invoiceStatus' => 'App\Models\InvoiceStatus',
        //'frequencies' => 'App\Models\Frequency',
        'gateways' => 'App\Models\Gateway',
        'gateway_types' => 'App\Models\GatewayType',
        //'fonts' => 'App\Models\Font',
        'banks' => 'App\Models\Bank',
    ],
    'payment_terms' => [
        [
            'num_days' => 0,
            'name' => '',
        ],
        [
            'num_days' => 7,
            'name' => '',
        ],
        [
            'num_days' => 10,
            'name' => '',
        ],
        [
            'num_days' => 14,
            'name' => '',
        ],
        [
            'num_days' => 15,
            'name' => '',
        ],
        [
            'num_days' => 30,
            'name' => '',
        ],
        [
            'num_days' => 60,
            'name' => '',
        ],
        [
            'num_days' => 90,
            'name' => '',
        ]
    ],


];
