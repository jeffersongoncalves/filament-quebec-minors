<?php

return [
    'assurances' => [
        'label' => '年齢確認',
        'plural_label' => '年齢確認',
    ],

    'guardians' => [
        'label' => '保護者リンク',
        'plural_label' => '保護者リンク',
    ],

    'fields' => [
        'subject' => 'アカウント',
        'age' => '確認時の年齢',
        'method' => '方法',
        'reliable' => '信頼できる',
        'not_reliable' => '信頼できない',
        'provider' => 'プロバイダー',
        'assured_at' => '確認日時',
        'expires_at' => '有効期限',
        'never' => '期限なし',
        'minor' => '未成年者',
        'guardian' => '親権者または後見人',
        'relationship' => '続柄',
        'verified' => '親または後見人を確認済み',
        'status' => 'ステータス',
        'verified_at' => '確認日時',
        'created_at' => '作成日時',
    ],

    'filters' => [
        'valid' => '有効なもののみ',
        'below_consent_age' => '14歳未満',
    ],

    'methods' => [
        'self_declaration' => '自己申告',
        'os_signal' => 'OSのシグナル',
        'store_signal' => 'アプリストアのシグナル',
        'document' => '本人確認書類',
        'facial_estimation' => '顔による年齢推定',
        'verifiable_credential' => '検証可能な資格情報',
        'guardian' => '親または後見人による申告',
    ],

    'status' => [
        'pending' => '確認待ち',
        'active' => '有効',
        'revoked' => '取消済み',
    ],

    'help' => [
        'verified' => 'この人が未成年者の親権者または後見人であることを確認してから承認してください。14歳未満の場合、未成年者の個人情報はこの人の同意がある場合にのみ収集・利用されます（第4.1条・第14条）。',
        'revoke' => '別の親または後見人が確認されるまで、14歳未満の未成年者の同意は無効になります。',
    ],

    'actions' => [
        'verify' => '親または後見人を確認',
        'revoke' => 'リンクを取り消す',
    ],

    'notifications' => [
        'verified' => '親または後見人を確認しました。',
        'revoked' => 'リンクを取り消しました。',
    ],
];
