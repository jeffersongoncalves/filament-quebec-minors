<?php

return [
    'assurances' => [
        'label' => 'Age check',
        'plural_label' => 'Age checks',
    ],
    'guardians' => [
        'label' => 'Parental link',
        'plural_label' => 'Parental links',
    ],
    'fields' => [
        'subject' => 'Account',
        'age' => 'Age at the check',
        'method' => 'Method',
        'reliable' => 'Reliable',
        'not_reliable' => 'Not reliable',
        'provider' => 'Provider',
        'assured_at' => 'Checked at',
        'expires_at' => 'Valid until',
        'never' => 'No expiry',
        'minor' => 'Minor',
        'guardian' => 'Person having parental authority or tutor',
        'relationship' => 'Relationship',
        'verified' => 'Parent or tutor verified',
        'status' => 'Status',
        'verified_at' => 'Verified at',
        'created_at' => 'Created at',
    ],
    'filters' => [
        'valid' => 'Still valid',
        'below_consent_age' => 'Under 14',
    ],
    'methods' => [
        'self_declaration' => 'Self-declaration',
        'os_signal' => 'Operating system signal',
        'store_signal' => 'App store signal',
        'document' => 'Document',
        'facial_estimation' => 'Facial age estimation',
        'verifiable_credential' => 'Verifiable credential',
        'guardian' => 'Stated by the parent or tutor',
    ],
    'status' => [
        'pending' => 'Pending verification',
        'active' => 'Active',
        'revoked' => 'Revoked',
    ],
    'help' => [
        'verified' => 'Only confirm after checking that this person has parental authority over the minor or is their tutor. Under 14, personal information about the minor is collected and used only with this person\'s consent (ss. 4.1 and 14).',
        'revoke' => 'Consents of a minor under 14 will no longer count until another parent or tutor is verified.',
    ],
    'actions' => [
        'verify' => 'Verify parent or tutor',
        'revoke' => 'Revoke link',
    ],
    'notifications' => [
        'verified' => 'Parent or tutor verified.',
        'revoked' => 'Link revoked.',
    ],
];
