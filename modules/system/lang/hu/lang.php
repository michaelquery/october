<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Visszatérés az alapokhoz'
    ],
    'locale' => [
        'en' => 'Angol',
        'de' => 'Német',
        'el' => 'Görög',
        'es' => 'Spanyol',
        'es-ar' => 'Spanyol (argentín)',
        'fa' => 'Perzsa',
        'fr' => 'Francia',
        'hu' => 'Magyar',
        'id' => 'Indonéz',
        'it' => 'Olasz',
        'ja' => 'Japán',
        'lv' => 'Litván',
        'nb-no' => 'Norvég',
        'nl' => 'Holland',
        'pl' => 'Lengyel',
        'pt-br' => 'Portugál (brazíl)',
        'ro' => 'Román',
        'ru' => 'Orosz',
        'sv' => 'Svéd',
        'sk' => 'Szlovák',
        'tr' => 'Török',
        'zh-cn' => 'Kínai',
        'zh-tw' => 'Kínai (tajvani)'
    ],
    'directory' => [
        'create_fail' => 'Nem hozható létre a könyvtár: :name'
    ],
    'file' => [
        'create_fail' => 'Nem hozható létre a fájl: :name'
    ],
    'combiner' => [
        'not_found' => "A(z) ':name' egyesítőfájl nem található."
    ],
    'system' => [
        'name' => 'Rendszer',
        'menu_label' => 'Rendszer',
        'categories' => [
            'cms' => 'Weboldal',
            'misc' => 'Egyebek',
            'logs' => 'Naplók',
            'mail' => 'Levelezés',
            'shop' => 'Bolt',
            'team' => 'Csapat',
            'users' => 'Felhasználók',
            'system' => 'Rendszer',
            'social' => 'Közösségi',
            'events' => 'Események',
            'customers' => 'Vevők',
            'my_settings' => 'Beállításaim'
        ]
    ],
    'theme' => [
        'label' => 'Téma',
        'unnamed' => 'Névtelen témák',
        'name' => [
            'label' => 'Téma neve',
            'help' => 'A névnek egyedinek kell lennie. Például: RainLab.Vanilla'
        ]
    ],
    'themes' => [
        'install' => 'Téma telepítése',
        'search' => 'keresés...',
        'installed' => 'Telepítve',
        'no_themes' => 'Egy téma sincs telepítve a piactérről.',
        'recommended' => 'Ajánlott',
        'remove_confirm' => 'Valóban törölni akarja ezt a témát?'
    ],
    'plugin' => [
        'label' => 'Bővítmény',
        'unnamed' => 'Névtelen bővítmény',
        'name' => [
            'label' => 'Bővítmény neve',
            'help' => 'Nevezze meg egyedi kódja alapján a bővítményt. Például: RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Bővítmények kezelése',
        'enable_or_disable' => 'Engedélyezés vagy letiltás',
        'enable_or_disable_title' => 'Bővítmények engedélyezése vagy letiltása',
        'install' => 'Bővítmény telepítése',
        'install_products' => 'Telepítés és eltávolítás',
        'search' => 'keresés...',
        'installed' => 'Telepítve',
        'no_plugins' => 'Valóban törölni akarja ezt a bővítményt?',
        'recommended' => 'Ajánlott',
        'remove' => 'Eltávolítás',
        'refresh' => 'Frissítés',
        'disabled_label' => 'Letiltva',
        'disabled_help' => 'A kiválasztott bővítményeket a weboldal figyelmen kívül hagyja.',
        'frozen_label' => 'Frissítés letiltása',
        'frozen_help' => 'A kiválasztott bővítmények nem lesznek frissítve a későbbiekben.',
        'selected_amount' => 'Kijelölt bővítmények: :amount',
        'remove_confirm' => 'Valóban törölni akarja a kijelölt bővítményeket?',
        'remove_success' => 'A bővítmények sikeresen eltávolításra kerültek.',
        'refresh_confirm' => 'Valóban frissíteni akarja a kijelölt bővítményeket?',
        'refresh_success' => 'A bővítmények sikeresen frissítésre kerültek.',
        'disable_confirm' => 'Valóban tiltani akarja a kijelölt bővítményeket?',
        'disable_success' => 'A bővítmények sikeresen letiltásra kerültek.',
        'enable_success' => 'A bővítmények sikeresen engedélyezésre kerültek.',
        'unknown_plugin' => 'A bővítmények eltávolítása megtörtént.'
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Fejlesztő',
        'attach' => 'Csatolás',
        'detach' => 'leválasztás',
        'none' => 'Nincs',
        'id' => [
            'label' => 'Projekt azonosító',
            'help' => 'Segítség (angol nyelvű)',
            'missing' => 'Adjon meg egy projekt azonosítót.'
        ],
        'detach_confirm' => 'Biztosan le akarja választani a projektet?',
        'unbind_success' => 'A projekt leválasztása sikerült.'
    ],
    'settings' => [
        'menu_label' => 'Beállítások',
        'not_found' => 'Nem találhatók a megadott beállítások.',
        'missing_model' => 'A beállítások lap egy modell definíciót hiányol.',
        'update_success' => 'A(z) :name beállításainak frissítése sikerült.',
        'return' => 'Vissza a beállításokhoz',
        'search' => 'Keresés'
    ],
    'mail' => [
        'log_file' => 'Naplófájl',
        'menu_label' => 'Általános beállítások',
        'menu_description' => 'Az e-mail küldés testreszabása.',
        'general' => 'Általános',
        'method' => 'Levelező rendszer',
        'sender_name' => 'Feladó neve',
        'sender_email' => 'Feladó e-mail címe',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP címe',
        'smtp_authorization' => 'SMTP hitelesítés szükséges',
        'smtp_authorization_comment' => 'Jelölje be, amennyiben az SMTP kiszolgálója hitelesítést igényel.',
        'smtp_username' => 'Felhasználónév',
        'smtp_password' => 'Jelszó',
        'smtp_port' => 'SMTP port',
        'smtp_ssl' => 'SSL kapcsolat szükséges',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail elérési útja',
        'sendmail_path_comment' => 'Adja meg a Sendmail program elérési útját.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun tartomány',
        'mailgun_domain_comment' => 'Adja meg a Mailgun tartománynevét.',
        'mailgun_secret' => 'Adja meg Mailgun titkos jelszót.',
        'mailgun_secret_comment' => 'Adja meg a Mailgun API kulcsát.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill titkos jelszót.',
        'mandrill_secret_comment' => 'Adja meg Mandrill API kulcsát.',
        'drivers_hint_header' => 'Meghajtó nincs telepítve',
        'drivers_hint_content' => 'A levél küldéséhez szükséges, hogy telepítve legyen a(z) ":plugin" nevű bővítmény.'
    ],
    'mail_templates' => [
        'menu_label' => 'Levél sablonok',
        'menu_description' => 'A kimenő levelek megjelenésének testreszabása.',
        'new_template' => 'Új sablon',
        'new_layout' => 'Új elrendezés',
        'template' => 'Sablon',
        'templates' => 'Sablonok',
        'menu_layouts_label' => 'Levél elrendezések',
        'layout' => 'Elrendezés',
        'layouts' => 'Elrendezések',
        'no_layout' => '-- nincs --',
        'name' => 'Név',
        'name_comment' => 'Erre a sablonra való hivatkozásként használt egyedi név.',
        'code' => 'Kód',
        'code_comment' => 'Erre a sablonra való hivatkozásként használt egyedi kód.',
        'subject' => 'Tárgy',
        'subject_comment' => 'Az e-mail üzenet tárgya',
        'description' => 'Leírás',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Egyszerű szöveg',
        'test_send' => 'Tesztüzenet küldése',
        'test_success' => 'A tesztüzenet elküldése sikerült.',
        'return' => 'Vissza a sablonokhoz',
        'test_confirm' => 'Teszt üzenet küldése a(z) ":email" címre. Folytatja?',
        'saving' => 'Sablon mentése...',
        'sending' => 'Üzenet küldése folyamatban...',
    ],
    'install' => [
        'project_label' => 'Csatolás projekthez',
        'plugin_label' => 'Bővítmény telepítése',
        'theme_label' => 'Téma telepítése',
        'missing_plugin_name' => 'Adja meg a telepítendő bővítmény nevét.',
        'missing_theme_name' => 'Adja meg a telepítendő téma nevét.',
        'install_completing' => 'A telepítési folyamat befejezése',
        'install_success' => 'A bővítmény telepítése sikerült.'
    ],
    'updates' => [
        'title' => 'Frissítések kezelése',
        'name' => 'Szoftver frissítése',
        'menu_label' => 'Frissítések',
        'menu_description' => 'A rendszer és a bővítmények frissítése, valamint új kiegészítők telepítése.',
        'return_link' => 'Vissza a frissítésekhez',
        'check_label' => 'Frissítések keresése',
        'retry_label' => 'Új próba',
        'plugin_name' => 'Név',
        'plugin_code' => 'Kód',
        'plugin_description' => 'Leírás',
        'plugin_version' => 'Verzió',
        'plugin_author' => 'Fejlesztő',
        'core_current_build' => 'Verzió',
        'core_build' => 'Új verzió: :build',
        'core_build_help' => 'Elérhető a legújabb hivatalos kiadás.',
        'core_downloading' => 'Weboldal frissítés letöltése...',
        'core_extracting' => 'Weboldal frissítés kicsomagolása...',
        'plugins' => 'Bővítmény',
        'themes' => 'Témák',
        'disabled' => 'Letiltva',
        'plugin_downloading' => 'Bővítmény letöltése: :name',
        'plugin_extracting' => 'Bővítmény kicsomagolása: :name',
        'plugin_version_none' => 'Új bővítmény',
        'plugin_current_version' => 'Aktuális verzió',
        'theme_new_install' => 'Új téma telepítése.',
        'theme_downloading' => 'Letöltendő téma: :name',
        'theme_extracting' => 'Kicsomagolandó téma: :name',
        'update_label' => 'Honlap frissítése',
        'update_completing' => 'Frissítési folyamat befejezése',
        'update_loading' => 'Elérhető frissítések betöltése...',
        'update_success' => 'A frissítési sikeresen végrehajtásra került.',
        'update_failed_label' => 'A frissítés nem sikerült.',
        'force_label' => 'Frissítés kényszerítése',
        'found' => [
            'label' => 'Új verzió elérhető!',
            'help' => 'Kattintson a Honlap fissítése gombra a folyamat megkezdéséhez.'
        ],
        'none' => [
            'label' => 'A weboldal naprakész',
            'help' => 'Nem található új frissítés.'
        ],
        'important_action' => [
            'empty' => 'Művelet kiválasztása',
            'confirm' => 'Frissítések elfogadása',
            'skip' => 'Bővítmény kihagyása (csak most)',
            'ignore' => 'Bővítmény kihagyása (mindig)'
        ],
        'important_action_required' => 'Művelet szükséges',
        'important_view_guide' => 'Frissítési útmutat megtekintése',
        'important_alert_text' => 'Néhány frissítés körültekintést igényel.',
        'details_title' => 'Bővítmény részletei',
        'details_view_homepage' => 'Weboldal',
        'details_readme' => 'Dokumentáció',
        'details_readme_missing' => 'Nincs megadva dokumentáció.',
        'details_upgrades' => 'Frissítési útmutató',
        'details_upgrades_missing' => 'Nincsennek megadva frissítési utasítások.',
        'details_current_version' => 'Aktuális verzió',
        'details_author' => 'Fejlesztő'
    ],
    'server' => [
        'connect_error' => 'Hiba a kiszolgálóhoz való csatlakozáskor.',
        'response_not_found' => 'A frissítési kiszolgáló nem található.',
        'response_invalid' => 'Érvénytelen válasz érkezett a kiszolgálóról.',
        'response_empty' => 'Üres válasz érkezett a kiszolgálóról.',
        'file_error' => 'Nem sikerült továbbítania a kiszolgálónak a csomagot.',
        'file_corrupt' => 'A kiszolgálóról letöltött fájl sérült.'
    ],
    'behavior' => [
        'missing_property' => 'A(z) :class osztálynak kell definiálnia a(z) :behavior viselkedés által használt $:property tulajdonságot.'
    ],
    'config' => [
        'not_found' => 'Nem található a(z) :location számára definiált :file konfigurációs fájl.',
        'required' => "A(z) :location helyen használt konfigurációnak meg kell adnia egy ':property' értéket."
    ],
    'zip' => [
        'extract_failed' => "Nem tömöríthető ki a(z) ':file' fájl."
    ],
    'event_log' => [
        'hint' => 'Ez a napló a rendszerben történt lehetséges hibákat listázza ki. Például a kivételeket és a hibakeresési információkat.',
        'menu_label' => 'Eseménynapló',
        'menu_description' => 'A rendszernapló üzeneteinek megtekintése.',
        'empty_link' => 'Eseménynapló kiürítése',
        'empty_loading' => 'Az eseménynapló kiürítése...',
        'empty_success' => 'Az eseménynapló kiürítése sikerült.',
        'return_link' => 'Vissza az eseménynapló listához',
        'id' => 'Azonosító',
        'id_label' => 'Esemény azonosító',
        'created_at' => 'Időpont',
        'message' => 'Üzenet',
        'level' => 'Szint'
    ],
    'request_log' => [
        'hint' => 'Ez a napló a böngészőkérelmeket listázza ki. Ha például egy látogató nem létező aloldalt nyit meg, akkor egy 404-es állapotkódú bejegyzés jön létre.',
        'menu_label' => 'Kérelemnapló',
        'menu_description' => 'Rossz vagy átirányított kérelmek megtekintése.',
        'empty_link' => 'Kérelemnapló kiürítése',
        'empty_loading' => 'A kérelemnapló kiürítése...',
        'empty_success' => 'A kérelemnapló kiürítése megtörtént.',
        'return_link' => 'Vissza a kérelemnapló listához',
        'id' => 'Azonosító',
        'id_label' => 'Napló azonosító',
        'count' => 'Számláló',
        'referer' => 'Hivatkozók',
        'url' => 'Webcím',
        'status_code' => 'Állapot'
    ],
    'permissions' => [
        'name' => 'Rendszer',
        'manage_system_settings' => 'Rendszer beállítások kezelése',
        'manage_software_updates' => 'Szoftver frissítések kezelése',
        'access_logs' => 'Rendszer napló megtekintése',
        'manage_mail_templates' => 'Levél sablonok kezelése',
        'manage_mail_settings' => 'Levelezési beállítások kezelése',
        'manage_other_administrators' => 'Másik adminisztrátor kezelése',
        'view_the_dashboard' => 'Vezérlőpult megtekintése',
        'manage_branding' => 'Admin felület testreszabása'
    ]
];
