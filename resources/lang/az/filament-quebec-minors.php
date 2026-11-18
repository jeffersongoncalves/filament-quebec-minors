<?php

return [
    'assurances' => [
        'label' => 'Yaş yoxlaması',
        'plural_label' => 'Yaş yoxlamaları',
    ],

    'guardians' => [
        'label' => 'Valideyn əlaqəsi',
        'plural_label' => 'Valideyn əlaqələri',
    ],

    'fields' => [
        'subject' => 'Hesab',
        'age' => 'Yoxlama zamanı yaş',
        'method' => 'Üsul',
        'reliable' => 'Etibarlı',
        'not_reliable' => 'Etibarsız',
        'provider' => 'Provayder',
        'assured_at' => 'Yoxlanılıb',
        'expires_at' => 'Etibarlıdır',
        'never' => 'Müddətsiz',
        'minor' => 'Yetkinlik yaşına çatmayan',
        'guardian' => 'Valideyn səlahiyyətinə malik şəxs və ya qəyyum',
        'relationship' => 'Qohumluq',
        'verified' => 'Valideyn və ya qəyyum təsdiqləndi',
        'status' => 'Status',
        'verified_at' => 'Təsdiqlənib',
        'created_at' => 'Yaradılıb',
    ],

    'filters' => [
        'valid' => 'Hələ etibarlı',
        'below_consent_age' => '14 yaşdan kiçik',
    ],

    'methods' => [
        'self_declaration' => 'Özünü bəyan',
        'os_signal' => 'Əməliyyat sistemi siqnalı',
        'store_signal' => 'Tətbiq mağazası siqnalı',
        'document' => 'Sənəd',
        'facial_estimation' => 'Üzlə yaş təxmini',
        'verifiable_credential' => 'Yoxlanıla bilən etimadnamə',
        'guardian' => 'Valideyn və ya qəyyum tərəfindən bildirilib',
    ],

    'status' => [
        'pending' => 'Təsdiq gözlənilir',
        'active' => 'Aktiv',
        'revoked' => 'Ləğv edilib',
    ],

    'help' => [
        'verified' => 'Yalnız bu şəxsin yetkinlik yaşına çatmayan üzərində valideyn səlahiyyətinə malik olduğunu və ya onun qəyyumu olduğunu yoxladıqdan sonra təsdiqləyin. 14 yaşa qədər yetkinlik yaşına çatmayan haqqında şəxsi məlumatlar yalnız bu şəxsin razılığı ilə toplanır və istifadə olunur (maddə 4.1 və 14).',
        'revoke' => '14 yaşdan kiçik yetkinlik yaşına çatmayanın razılıqları başqa valideyn və ya qəyyum təsdiqlənənə qədər nəzərə alınmayacaq.',
    ],

    'actions' => [
        'verify' => 'Valideyni və ya qəyyumu təsdiqlə',
        'revoke' => 'Bağlantını ləğv et',
    ],

    'notifications' => [
        'verified' => 'Valideyn və ya qəyyum təsdiqləndi.',
        'revoked' => 'Bağlantı ləğv edildi.',
    ],
];
