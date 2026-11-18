<?php

return [
    'assurances' => [
        'label' => 'Yaş doğrulama',
        'plural_label' => 'Yaş doğrulamaları',
    ],

    'guardians' => [
        'label' => 'Ebeveyn bağlantısı',
        'plural_label' => 'Ebeveyn bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesap',
        'age' => 'Kontrol anındaki yaş',
        'method' => 'Yöntem',
        'reliable' => 'Güvenilir',
        'not_reliable' => 'Güvenilir değil',
        'provider' => 'Sağlayıcı',
        'assured_at' => 'Doğrulama tarihi',
        'expires_at' => 'Geçerlilik sonu',
        'never' => 'Süresiz',
        'minor' => 'Reşit olmayan',
        'guardian' => 'Velayet sahibi veya vasi',
        'relationship' => 'Yakınlık',
        'verified' => 'Ebeveyn veya vasi doğrulandı',
        'status' => 'Durum',
        'verified_at' => 'Doğrulama tarihi',
        'created_at' => 'Oluşturulma',
    ],

    'filters' => [
        'valid' => 'Hâlâ geçerli',
        'below_consent_age' => '14 yaş altı',
    ],

    'methods' => [
        'self_declaration' => 'Beyan',
        'os_signal' => 'İşletim sistemi sinyali',
        'store_signal' => 'Uygulama mağazası sinyali',
        'document' => 'Belge',
        'facial_estimation' => 'Yüzden yaş tahmini',
        'verifiable_credential' => 'Doğrulanabilir kimlik bilgisi',
        'guardian' => 'Ebeveyn veya vasi tarafından beyan edildi',
    ],

    'status' => [
        'pending' => 'Doğrulama bekliyor',
        'active' => 'Etkin',
        'revoked' => 'İptal edildi',
    ],

    'help' => [
        'verified' => 'Yalnızca bu kişinin reşit olmayan üzerinde velayet sahibi veya vasisi olduğunu doğruladıktan sonra onaylayın. 14 yaşın altında, reşit olmayanın kişisel bilgileri yalnızca bu kişinin rızasıyla toplanır ve kullanılır (md. 4.1 ve 14).',
        'revoke' => 'Başka bir ebeveyn veya vasi doğrulanana kadar 14 yaş altı reşit olmayanın rızaları geçerli sayılmayacak.',
    ],

    'actions' => [
        'verify' => 'Ebeveyni veya vasiyi doğrula',
        'revoke' => 'Bağlantıyı iptal et',
    ],

    'notifications' => [
        'verified' => 'Ebeveyn veya vasi doğrulandı.',
        'revoked' => 'Bağlantı iptal edildi.',
    ],
];
