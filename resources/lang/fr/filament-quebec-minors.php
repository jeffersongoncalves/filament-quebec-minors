<?php

return [
    'assurances' => [
        'label' => 'Vérification d\'âge',
        'plural_label' => 'Vérifications d\'âge',
    ],

    'guardians' => [
        'label' => 'Lien parental',
        'plural_label' => 'Liens parentaux',
    ],

    'fields' => [
        'subject' => 'Compte',
        'age' => 'Âge lors de la vérification',
        'method' => 'Méthode',
        'reliable' => 'Fiable',
        'not_reliable' => 'Non fiable',
        'provider' => 'Fournisseur',
        'assured_at' => 'Vérifiée le',
        'expires_at' => 'Valide jusqu\'au',
        'never' => 'Sans expiration',
        'minor' => 'Mineur',
        'guardian' => 'Titulaire de l\'autorité parentale ou tuteur',
        'relationship' => 'Lien de parenté',
        'verified' => 'Parent ou tuteur vérifié',
        'status' => 'Statut',
        'verified_at' => 'Vérifié le',
        'created_at' => 'Créé le',
    ],

    'filters' => [
        'valid' => 'Encore valides',
        'below_consent_age' => 'Moins de 14 ans',
    ],

    'methods' => [
        'self_declaration' => 'Autodéclaration',
        'os_signal' => 'Signal du système d\'exploitation',
        'store_signal' => 'Signal de la boutique d\'applications',
        'document' => 'Pièce d\'identité',
        'facial_estimation' => 'Estimation faciale de l\'âge',
        'verifiable_credential' => 'Attestation vérifiable',
        'guardian' => 'Déclaré par le parent ou le tuteur',
    ],

    'status' => [
        'pending' => 'Vérification en attente',
        'active' => 'Actif',
        'revoked' => 'Révoqué',
    ],

    'help' => [
        'verified' => 'Ne confirmez qu\'après avoir vérifié que cette personne est titulaire de l\'autorité parentale sur le mineur ou son tuteur. Avant 14 ans, les renseignements personnels du mineur ne sont recueillis et utilisés qu\'avec le consentement de cette personne (art. 4.1 et 14).',
        'revoke' => 'Les consentements d\'un mineur de moins de 14 ans ne compteront plus tant qu\'un autre parent ou tuteur n\'est pas vérifié.',
    ],

    'actions' => [
        'verify' => 'Vérifier le parent ou le tuteur',
        'revoke' => 'Révoquer le lien',
    ],

    'notifications' => [
        'verified' => 'Parent ou tuteur vérifié.',
        'revoked' => 'Lien révoqué.',
    ],
];
