<?php

return [
    'assurances' => [
        'label' => 'Altersprüfung',
        'plural_label' => 'Altersprüfungen',
    ],

    'guardians' => [
        'label' => 'Elternverknüpfung',
        'plural_label' => 'Elternverknüpfungen',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Alter bei der Prüfung',
        'method' => 'Methode',
        'reliable' => 'Zuverlässig',
        'not_reliable' => 'Nicht zuverlässig',
        'provider' => 'Anbieter',
        'assured_at' => 'Geprüft am',
        'expires_at' => 'Gültig bis',
        'never' => 'Kein Ablauf',
        'minor' => 'Minderjährige Person',
        'guardian' => 'Person mit elterlicher Sorge oder Vormund',
        'relationship' => 'Beziehung',
        'verified' => 'Elternteil oder Vormund geprüft',
        'status' => 'Status',
        'verified_at' => 'Geprüft am',
        'created_at' => 'Erstellt am',
    ],

    'filters' => [
        'valid' => 'Noch gültig',
        'below_consent_age' => 'Unter 14',
    ],

    'methods' => [
        'self_declaration' => 'Selbstauskunft',
        'os_signal' => 'Betriebssystem-Signal',
        'store_signal' => 'App-Store-Signal',
        'document' => 'Ausweisdokument',
        'facial_estimation' => 'Gesichtsbasierte Altersschätzung',
        'verifiable_credential' => 'Überprüfbarer Nachweis',
        'guardian' => 'Vom Elternteil oder Vormund angegeben',
    ],

    'status' => [
        'pending' => 'Prüfung ausstehend',
        'active' => 'Aktiv',
        'revoked' => 'Widerrufen',
    ],

    'help' => [
        'verified' => 'Bestätigen Sie erst, nachdem Sie geprüft haben, dass diese Person die elterliche Sorge für die minderjährige Person hat oder ihr Vormund ist. Unter 14 werden personenbezogene Informationen der minderjährigen Person nur mit Einwilligung dieser Person erhoben und verwendet (Art. 4.1 und 14).',
        'revoke' => 'Einwilligungen einer minderjährigen Person unter 14 zählen nicht mehr, bis ein anderer Elternteil oder Vormund geprüft ist.',
    ],

    'actions' => [
        'verify' => 'Elternteil oder Vormund prüfen',
        'revoke' => 'Verknüpfung widerrufen',
    ],

    'notifications' => [
        'verified' => 'Elternteil oder Vormund geprüft.',
        'revoked' => 'Verknüpfung widerrufen.',
    ],
];
