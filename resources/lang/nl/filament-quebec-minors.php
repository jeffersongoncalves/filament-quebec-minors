<?php

return [
    'assurances' => [
        'label' => 'Leeftijdscontrole',
        'plural_label' => 'Leeftijdscontroles',
    ],

    'guardians' => [
        'label' => 'Ouderlijke koppeling',
        'plural_label' => 'Ouderlijke koppelingen',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Leeftijd bij de controle',
        'method' => 'Methode',
        'reliable' => 'Betrouwbaar',
        'not_reliable' => 'Niet betrouwbaar',
        'provider' => 'Aanbieder',
        'assured_at' => 'Gecontroleerd op',
        'expires_at' => 'Geldig tot',
        'never' => 'Verloopt niet',
        'minor' => 'Minderjarige',
        'guardian' => 'Persoon met ouderlijk gezag of voogd',
        'relationship' => 'Relatie',
        'verified' => 'Ouder of voogd geverifieerd',
        'status' => 'Status',
        'verified_at' => 'Geverifieerd op',
        'created_at' => 'Aangemaakt op',
    ],

    'filters' => [
        'valid' => 'Nog geldig',
        'below_consent_age' => 'Jonger dan 14',
    ],

    'methods' => [
        'self_declaration' => 'Zelfverklaring',
        'os_signal' => 'Signaal van het besturingssysteem',
        'store_signal' => 'Signaal van de app store',
        'document' => 'Identiteitsdocument',
        'facial_estimation' => 'Leeftijdsschatting via gezicht',
        'verifiable_credential' => 'Verifieerbaar bewijs',
        'guardian' => 'Opgegeven door de ouder of voogd',
    ],

    'status' => [
        'pending' => 'Verificatie in afwachting',
        'active' => 'Actief',
        'revoked' => 'Ingetrokken',
    ],

    'help' => [
        'verified' => 'Bevestig pas nadat je hebt gecontroleerd dat deze persoon ouderlijk gezag over de minderjarige heeft of diens voogd is. Onder 14 jaar wordt persoonlijke informatie over de minderjarige alleen met toestemming van deze persoon verzameld en gebruikt (art. 4.1 en 14).',
        'revoke' => 'Toestemmingen van een minderjarige onder 14 tellen niet meer tot een andere ouder of voogd is geverifieerd.',
    ],

    'actions' => [
        'verify' => 'Ouder of voogd verifiëren',
        'revoke' => 'Koppeling intrekken',
    ],

    'notifications' => [
        'verified' => 'Ouder of voogd geverifieerd.',
        'revoked' => 'Koppeling ingetrokken.',
    ],
];
