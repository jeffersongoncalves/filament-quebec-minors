<?php

return [
    'assurances' => [
        'label' => 'Yosh tekshiruvi',
        'plural_label' => 'Yosh tekshiruvlari',
    ],

    'guardians' => [
        'label' => 'Ota-ona bog\'lanishi',
        'plural_label' => 'Ota-ona bog\'lanishlari',
    ],

    'fields' => [
        'subject' => 'Hisob',
        'age' => 'Tekshiruv paytidagi yosh',
        'method' => 'Usul',
        'reliable' => 'Ishonchli',
        'not_reliable' => 'Ishonchsiz',
        'provider' => 'Provayder',
        'assured_at' => 'Tekshirilgan sana',
        'expires_at' => 'Amal qiladi',
        'never' => 'Muddatsiz',
        'minor' => 'Voyaga yetmagan',
        'guardian' => 'Ota-onalik huquqiga ega shaxs yoki vasiy',
        'relationship' => 'Qarindoshlik',
        'verified' => 'Ota-ona yoki vasiy tasdiqlandi',
        'status' => 'Holat',
        'verified_at' => 'Tasdiqlangan sana',
        'created_at' => 'Yaratilgan',
    ],

    'filters' => [
        'valid' => 'Hali amal qiladi',
        'below_consent_age' => '14 yoshdan kichik',
    ],

    'methods' => [
        'self_declaration' => 'O\'zini bayon qilish',
        'os_signal' => 'Operatsion tizim signali',
        'store_signal' => 'Ilovalar do\'koni signali',
        'document' => 'Hujjat',
        'facial_estimation' => 'Yuz orqali yoshni baholash',
        'verifiable_credential' => 'Tekshiriladigan guvohnoma',
        'guardian' => 'Ota-ona yoki vasiy tomonidan bildirilgan',
    ],

    'status' => [
        'pending' => 'Tasdiq kutilmoqda',
        'active' => 'Faol',
        'revoked' => 'Bekor qilingan',
    ],

    'help' => [
        'verified' => 'Faqat ushbu shaxs voyaga yetmagan ustidan ota-onalik huquqiga ega ekanini yoki uning vasiysi ekanini tekshirgandan keyin tasdiqlang. 14 yoshgacha voyaga yetmaganning shaxsiy axboroti faqat ushbu shaxsning roziligi bilan to\'planadi va ishlatiladi (4.1 va 14-moddalar).',
        'revoke' => 'Boshqa ota-ona yoki vasiy tasdiqlanmaguncha 14 yoshdan kichik voyaga yetmaganning roziliklari hisobga olinmaydi.',
    ],

    'actions' => [
        'verify' => 'Ota-ona yoki vasiyni tasdiqlash',
        'revoke' => 'Bog\'lanishni bekor qilish',
    ],

    'notifications' => [
        'verified' => 'Ota-ona yoki vasiy tasdiqlandi.',
        'revoked' => 'Bog\'lanish bekor qilindi.',
    ],
];
