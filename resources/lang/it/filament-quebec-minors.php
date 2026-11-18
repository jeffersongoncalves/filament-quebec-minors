<?php

return [
    'assurances' => [
        'label' => 'Verifica dell\'età',
        'plural_label' => 'Verifiche dell\'età',
    ],

    'guardians' => [
        'label' => 'Collegamento genitoriale',
        'plural_label' => 'Collegamenti genitoriali',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Età al controllo',
        'method' => 'Metodo',
        'reliable' => 'Affidabile',
        'not_reliable' => 'Non affidabile',
        'provider' => 'Fornitore',
        'assured_at' => 'Verificata il',
        'expires_at' => 'Valida fino al',
        'never' => 'Nessuna scadenza',
        'minor' => 'Minore',
        'guardian' => 'Titolare della responsabilità genitoriale o tutore',
        'relationship' => 'Parentela',
        'verified' => 'Genitore o tutore verificato',
        'status' => 'Stato',
        'verified_at' => 'Verificato il',
        'created_at' => 'Creato il',
    ],

    'filters' => [
        'valid' => 'Ancora valide',
        'below_consent_age' => 'Sotto i 14 anni',
    ],

    'methods' => [
        'self_declaration' => 'Autodichiarazione',
        'os_signal' => 'Segnale del sistema operativo',
        'store_signal' => 'Segnale dello store di app',
        'document' => 'Documento',
        'facial_estimation' => 'Stima facciale dell\'età',
        'verifiable_credential' => 'Credenziale verificabile',
        'guardian' => 'Dichiarato dal genitore o tutore',
    ],

    'status' => [
        'pending' => 'Verifica in attesa',
        'active' => 'Attivo',
        'revoked' => 'Revocato',
    ],

    'help' => [
        'verified' => 'Conferma solo dopo aver verificato che questa persona esercita la responsabilità genitoriale sul minore o ne è il tutore. Sotto i 14 anni, le informazioni personali del minore sono raccolte e usate solo con il consenso di questa persona (artt. 4.1 e 14).',
        'revoke' => 'I consensi di un minore di 14 anni non varranno più finché non viene verificato un altro genitore o tutore.',
    ],

    'actions' => [
        'verify' => 'Verifica genitore o tutore',
        'revoke' => 'Revoca collegamento',
    ],

    'notifications' => [
        'verified' => 'Genitore o tutore verificato.',
        'revoked' => 'Collegamento revocato.',
    ],
];
