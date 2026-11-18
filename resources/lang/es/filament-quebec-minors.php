<?php

return [
    'assurances' => [
        'label' => 'Verificación de edad',
        'plural_label' => 'Verificaciones de edad',
    ],

    'guardians' => [
        'label' => 'Vínculo parental',
        'plural_label' => 'Vínculos parentales',
    ],

    'fields' => [
        'subject' => 'Cuenta',
        'age' => 'Edad en la verificación',
        'method' => 'Método',
        'reliable' => 'Fiable',
        'not_reliable' => 'No fiable',
        'provider' => 'Proveedor',
        'assured_at' => 'Verificada el',
        'expires_at' => 'Válida hasta',
        'never' => 'Sin vencimiento',
        'minor' => 'Menor',
        'guardian' => 'Persona con patria potestad o tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Progenitor o tutor verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado el',
        'created_at' => 'Creado el',
    ],

    'filters' => [
        'valid' => 'Aún válidas',
        'below_consent_age' => 'Menores de 14',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaración',
        'os_signal' => 'Señal del sistema operativo',
        'store_signal' => 'Señal de la tienda de aplicaciones',
        'document' => 'Documento',
        'facial_estimation' => 'Estimación facial de edad',
        'verifiable_credential' => 'Credencial verificable',
        'guardian' => 'Declarado por el progenitor o tutor',
    ],

    'status' => [
        'pending' => 'Verificación pendiente',
        'active' => 'Activo',
        'revoked' => 'Revocado',
    ],

    'help' => [
        'verified' => 'Confirme solo después de comprobar que esta persona tiene la patria potestad sobre el menor o es su tutor. Por debajo de 14 años, la información personal del menor solo se recopila y usa con el consentimiento de esta persona (arts. 4.1 y 14).',
        'revoke' => 'Los consentimientos de un menor de 14 años dejarán de contar hasta que se verifique otro progenitor o tutor.',
    ],

    'actions' => [
        'verify' => 'Verificar progenitor o tutor',
        'revoke' => 'Revocar vínculo',
    ],

    'notifications' => [
        'verified' => 'Progenitor o tutor verificado.',
        'revoked' => 'Vínculo revocado.',
    ],
];
