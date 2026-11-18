<?php

return [
    'assurances' => [
        'label' => 'احراز سن',
        'plural_label' => 'احرازهای سن',
    ],

    'guardians' => [
        'label' => 'پیوند والدین',
        'plural_label' => 'پیوندهای والدین',
    ],

    'fields' => [
        'subject' => 'حساب',
        'age' => 'سن هنگام بررسی',
        'method' => 'روش',
        'reliable' => 'قابل اعتماد',
        'not_reliable' => 'غیرقابل اعتماد',
        'provider' => 'ارائه‌دهنده',
        'assured_at' => 'تاریخ احراز',
        'expires_at' => 'معتبر تا',
        'never' => 'بدون انقضا',
        'minor' => 'صغیر',
        'guardian' => 'دارنده اختیار والدین یا قیم',
        'relationship' => 'نسبت',
        'verified' => 'والد یا قیم تأیید شد',
        'status' => 'وضعیت',
        'verified_at' => 'تاریخ تأیید',
        'created_at' => 'تاریخ ایجاد',
    ],

    'filters' => [
        'valid' => 'هنوز معتبر',
        'below_consent_age' => 'زیر 14 سال',
    ],

    'methods' => [
        'self_declaration' => 'خوداظهاری',
        'os_signal' => 'سیگنال سیستم‌عامل',
        'store_signal' => 'سیگنال فروشگاه برنامه',
        'document' => 'مدرک',
        'facial_estimation' => 'تخمین سن با چهره',
        'verifiable_credential' => 'اعتبارنامه قابل‌تأیید',
        'guardian' => 'اعلام‌شده توسط والد یا قیم',
    ],

    'status' => [
        'pending' => 'در انتظار تأیید',
        'active' => 'فعال',
        'revoked' => 'لغوشده',
    ],

    'help' => [
        'verified' => 'فقط پس از بررسی اینکه این شخص بر صغیر اختیار والدین دارد یا قیم اوست تأیید کنید. زیر 14 سال، اطلاعات شخصی صغیر فقط با رضایت این شخص گردآوری و استفاده می‌شود (مواد 4.1 و 14).',
        'revoke' => 'رضایت‌های صغیر زیر 14 سال تا زمان تأیید والد یا قیم دیگر معتبر نخواهد بود.',
    ],

    'actions' => [
        'verify' => 'تأیید والد یا قیم',
        'revoke' => 'لغو پیوند',
    ],

    'notifications' => [
        'verified' => 'والد یا قیم تأیید شد.',
        'revoked' => 'پیوند لغو شد.',
    ],
];
