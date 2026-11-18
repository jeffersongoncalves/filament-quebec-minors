<?php

return [
    'assurances' => [
        'label' => 'Verificação de idade',
        'plural_label' => 'Verificações de idade',
    ],

    'guardians' => [
        'label' => 'Ligação parental',
        'plural_label' => 'Ligações parentais',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na verificação',
        'method' => 'Método',
        'reliable' => 'Fiável',
        'not_reliable' => 'Não fiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Verificada em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Menor',
        'guardian' => 'Titular das responsabilidades parentais ou tutor',
        'relationship' => 'Parentesco',
        'verified' => 'Progenitor ou tutor verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
        'below_consent_age' => 'Menores de 14',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operativo',
        'store_signal' => 'Sinal da loja de aplicações',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial da idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Declarado pelo progenitor ou tutor',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Confirme apenas após verificar que esta pessoa exerce as responsabilidades parentais sobre o menor ou é o seu tutor. Abaixo dos 14 anos, as informações pessoais do menor só são recolhidas e utilizadas com o consentimento desta pessoa (arts. 4.1 e 14).',
        'revoke' => 'Os consentimentos de um menor de 14 anos deixarão de contar até que outro progenitor ou tutor seja verificado.',
    ],

    'actions' => [
        'verify' => 'Verificar progenitor ou tutor',
        'revoke' => 'Revogar ligação',
    ],

    'notifications' => [
        'verified' => 'Progenitor ou tutor verificado.',
        'revoked' => 'Ligação revogada.',
    ],
];
