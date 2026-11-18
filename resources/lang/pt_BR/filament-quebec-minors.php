<?php

return [
    'assurances' => [
        'label' => 'Aferição de idade',
        'plural_label' => 'Aferições de idade',
    ],

    'guardians' => [
        'label' => 'Vínculo parental',
        'plural_label' => 'Vínculos parentais',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na aferição',
        'method' => 'Método',
        'reliable' => 'Confiável',
        'not_reliable' => 'Não confiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Aferida em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Pessoa com autoridade parental ou tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável ou tutor verificado',
        'status' => 'Situação',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
        'below_consent_age' => 'Menores de 14',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operacional',
        'store_signal' => 'Sinal da loja de aplicativos',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial de idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Declarado pelo responsável ou tutor',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Confirme somente após verificar que esta pessoa tem autoridade parental sobre o menor ou é seu tutor. Abaixo de 14 anos, as informações pessoais do menor só são coletadas e usadas com o consentimento desta pessoa (arts. 4.1 e 14).',
        'revoke' => 'Os consentimentos de um menor de 14 anos deixarão de valer até que outro responsável ou tutor seja verificado.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável ou tutor',
        'revoke' => 'Revogar vínculo',
    ],

    'notifications' => [
        'verified' => 'Responsável ou tutor verificado.',
        'revoked' => 'Vínculo revogado.',
    ],
];
