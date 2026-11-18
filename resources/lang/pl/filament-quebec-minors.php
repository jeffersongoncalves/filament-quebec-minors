<?php

return [
    'assurances' => [
        'label' => 'Weryfikacja wieku',
        'plural_label' => 'Weryfikacje wieku',
    ],

    'guardians' => [
        'label' => 'Powiązanie rodzicielskie',
        'plural_label' => 'Powiązania rodzicielskie',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Wiek w chwili weryfikacji',
        'method' => 'Metoda',
        'reliable' => 'Wiarygodna',
        'not_reliable' => 'Niewiarygodna',
        'provider' => 'Dostawca',
        'assured_at' => 'Zweryfikowano',
        'expires_at' => 'Ważna do',
        'never' => 'Bez wygaśnięcia',
        'minor' => 'Małoletni',
        'guardian' => 'Osoba sprawująca władzę rodzicielską lub opiekun',
        'relationship' => 'Pokrewieństwo',
        'verified' => 'Rodzic lub opiekun zweryfikowany',
        'status' => 'Status',
        'verified_at' => 'Zweryfikowano',
        'created_at' => 'Utworzono',
    ],

    'filters' => [
        'valid' => 'Nadal ważne',
        'below_consent_age' => 'Poniżej 14 lat',
    ],

    'methods' => [
        'self_declaration' => 'Oświadczenie własne',
        'os_signal' => 'Sygnał systemu operacyjnego',
        'store_signal' => 'Sygnał sklepu z aplikacjami',
        'document' => 'Dokument',
        'facial_estimation' => 'Szacowanie wieku na podstawie twarzy',
        'verifiable_credential' => 'Weryfikowalne poświadczenie',
        'guardian' => 'Podane przez rodzica lub opiekuna',
    ],

    'status' => [
        'pending' => 'Oczekuje na weryfikację',
        'active' => 'Aktywne',
        'revoked' => 'Odwołane',
    ],

    'help' => [
        'verified' => 'Potwierdź dopiero po sprawdzeniu, że ta osoba sprawuje władzę rodzicielską nad małoletnim lub jest jego opiekunem. Poniżej 14 lat informacje osobowe małoletniego są zbierane i wykorzystywane wyłącznie za zgodą tej osoby (art. 4.1 i 14).',
        'revoke' => 'Zgody małoletniego poniżej 14 lat przestaną się liczyć, dopóki nie zostanie zweryfikowany inny rodzic lub opiekun.',
    ],

    'actions' => [
        'verify' => 'Zweryfikuj rodzica lub opiekuna',
        'revoke' => 'Odwołaj powiązanie',
    ],

    'notifications' => [
        'verified' => 'Rodzic lub opiekun zweryfikowany.',
        'revoked' => 'Powiązanie odwołane.',
    ],
];
