<?php

return [
    'assurances' => [
        'label' => '年龄核验',
        'plural_label' => '年龄核验',
    ],

    'guardians' => [
        'label' => '监护关联',
        'plural_label' => '监护关联',
    ],

    'fields' => [
        'subject' => '账户',
        'age' => '检查时的年龄',
        'method' => '方式',
        'reliable' => '可靠',
        'not_reliable' => '不可靠',
        'provider' => '提供方',
        'assured_at' => '核验时间',
        'expires_at' => '有效期至',
        'never' => '长期有效',
        'minor' => '未成年人',
        'guardian' => '亲权人或监护人',
        'relationship' => '关系',
        'verified' => '已核实父母或监护人',
        'status' => '状态',
        'verified_at' => '核实时间',
        'created_at' => '创建时间',
    ],

    'filters' => [
        'valid' => '仍有效',
        'below_consent_age' => '未满14岁',
    ],

    'methods' => [
        'self_declaration' => '自我声明',
        'os_signal' => '操作系统信号',
        'store_signal' => '应用商店信号',
        'document' => '证件',
        'facial_estimation' => '人脸年龄估计',
        'verifiable_credential' => '可验证凭证',
        'guardian' => '由父母或监护人声明',
    ],

    'status' => [
        'pending' => '待核实',
        'active' => '有效',
        'revoked' => '已撤销',
    ],

    'help' => [
        'verified' => '请在核实此人对该未成年人拥有亲权或是其监护人后再确认。未满14岁的未成年人的个人信息只有在此人同意的情况下才会被收集和使用（第4.1条和第14条）。',
        'revoke' => '在核实另一位父母或监护人之前，未满14岁未成年人的同意将不再有效。',
    ],

    'actions' => [
        'verify' => '核实父母或监护人',
        'revoke' => '撤销关联',
    ],

    'notifications' => [
        'verified' => '已核实父母或监护人。',
        'revoked' => '关联已撤销。',
    ],
];
