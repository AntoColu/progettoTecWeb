<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        

        /*
        *   Tabella dedicata alle categorie di auto: piccole, medie, grandi, SUV
        */
        DB::table('categoria')->insert([
            ['catId' => 1, 'nome' => 'Piccole', 
                'imgEsempio' => fread(fopen("./public/images/categorie/piccole.png", 'rb'), filesize("./public/images/piccole.png")), 
                'descrizione' => 'Automobili compatte, ottime per l&rsquo;utilizzo in citt&agrave'
            ],
            ['catId' => 2, 'nome' => 'Medie', 
                'imgEsempio' => fread(fopen("./public/images/categorie/medie.png", 'rb'), filesize("./public/images/medie.png")), 
                'descrizione' => 'Automobili non troppo grandi, che permettono un buon utilizzo cittadino, 
                                ma anche possibilit&agrave di spostamenti più lunghi'
            ],
            ['catId' => 3, 'nome' => 'Grandi', 
                'imgEsempio' => fread(fopen("./public/images/categorie/grandi.png", 'rb'), filesize("./public/images/grandi.png")), 
                'descrizione' => 'Automobili comode ed ottime per affrontare lunghi spostamenti, 
                                con maggiore spazio per i bagagli'
            ],
            ['catId' => 4, 'nome' => 'SUV', 
                'imgEsempio' => fread(fopen("./public/images/categorie/suv.png", 'rb'), filesize("./public/images/suv.png")), 
                'descrizione' => 'Automobili grandi e alte, che permettono una visuale migliore alla guida 
                                ed un comfort di primo livello'
            ]
        ]);


        /*
        *   Tabella dedicata ai modelli di auto
        */
        DB::table('auto')->insert([
            ['marca' => 'Fiat', 'modello' => '500', 'targa' => 'FQ123QF',
                'anno' => '2018', 'nPosti' => 4,
                'motore' => '1200 cc - 70 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '4 posti; 3 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 219.34, 'data_inizio' => '2023-01-22', 'data_fine' => '2023-02-22', 
                'img_principale' => fread(fopen("./public/images/auto/Fiat500-principale.png", 'rb'), filesize("./public/images/Fiat500-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/Fiat500-destra.png", 'rb'), filesize("./public/images/Fiat500-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/Fiat500-sinistra.png", 'rb'), filesize("./public/images/Fiat500-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/Fiat500-frontale.png", 'rb'), filesize("./public/images/Fiat500-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/Fiat500-posteriore.png", 'rb'), filesize("./public/images/Fiat500-posteriore.png"))
            ],
            ['marca' => 'Fiat', 'modello' => 'Panda', 'targa' => 'FV456VF',
                'anno' => '2019', 'nPosti' => 4,
                'motore' => '1200 cc - 70 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '4 posti; 4 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 86.37, 'data_inizio' => '2023-01-03', 'data_fine' => '2023-03-03', 
                'img_principale' => fread(fopen("./public/images/auto/FiatPanda-principale.png", 'rb'), filesize("./public/images/FiatPanda-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/FiatPanda-destra.png", 'rb'), filesize("./public/images/FiatPanda-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/FiatPanda-sinistra.png", 'rb'), filesize("./public/images/FiatPanda-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/FiatPanda-frontale.png", 'rb'), filesize("./public/images/FiatPanda-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/FiatPanda-posteriore.png", 'rb'), filesize("./public/images/FiatPanda-posteriore.png"))
            ],
            ['marca' => 'Peugeot', 'modello' => '208', 'targa' => 'GG753GG',
                'anno' => '2021', 'nPosti' => 5,
                'motore' => '1500 cc - 102 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1500 cc 102 CV; Carburante: Diesel',
                'prezzo' => 1230.49, 'data_inizio' => '2023-02-12', 'data_fine' => '2023-04-22', 
                'img_principale' => fread(fopen("./public/images/auto/Peugeot208-principale.png", 'rb'), filesize("./public/images/Peugeot208-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/Peugeot208-destra.png", 'rb'), filesize("./public/images/Peugeot208-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/Peugeot208-sinistra.png", 'rb'), filesize("./public/images/Peugeot208-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/Peugeot208-frontale.png", 'rb'), filesize("./public/images/Peugeot208-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/Peugeot208-posteriore.png", 'rb'), filesize("./public/images/Peugeot208-posteriore.png"))
            ],
            ['marca' => 'Toyota', 'modello' => 'Aygo', 'targa' => 'GH842HG',
                'anno' => '2021', 'nPosti' => 5, 
                'motore' => '1000 cc - 72 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1000 cc 72 CV; Carburante: Benzina',
                'prezzo' => 455.37, 'data_inizio' => '2023-02-15', 'data_fine' => '2023-02-28', 
                'img_principale' => fread(fopen("./public/images/auto/ToyotaAygo-principale.png", 'rb'), filesize("./public/images/ToyotaAygo-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/ToyotaAygo-destra.png", 'rb'), filesize("./public/images/ToyotaAygo-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/ToyotaAygo-sinistra.png", 'rb'), filesize("./public/images/ToyotaAygo-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/ToyotaAygo-frontale.png", 'rb'), filesize("./public/images/ToyotaAygo-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/ToyotaAygo-posteriore.png", 'rb'), filesize("./public/images/ToyotaAygo-posteriore.png"))
            ],
            ['marca' => 'Fiat', 'modello' => 'Tipo', 'targa' => 'GJ654JG',
                'anno' => '2022', 'nPosti' => 5, 
                'motore' => '1600 cc - 131 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 1889.67, 'data_inizio' => '2023-01-25', 'data_fine' => '2023-05-25', 
                'img_principale' => fread(fopen("./public/images/auto/FiatTipo-principale.png", 'rb'), filesize("./public/images/FiatTipo-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/FiatTipo-destra.png", 'rb'), filesize("./public/images/FiatTipo-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/FiatTipo-sinistra.png", 'rb'), filesize("./public/images/FiatTipo-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/FiatTipo-frontale.png", 'rb'), filesize("./public/images/FiatTipo-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/FiatTipo-posteriore.png", 'rb'), filesize("./public/images/FiatTipo-posteriore.png"))
            ],
            ['marca' => 'Audi', 'modello' => 'A3', 'targa' => 'FZ567ZF',
                'anno' => '2019', 'nPosti' => 5, 
                'motore' => '1900 cc - 116 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1900 cc 116 CV; Carburante: Diesel',
                'prezzo' => 259.99, 'data_inizio' => '2023-05-22', 'data_fine' => '2023-06-22', 
                'img_principale' => fread(fopen("./public/images/auto/AudiA3-principale.png", 'rb'), filesize("./public/images/AudiA3-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AudiA3-destra.png", 'rb'), filesize("./public/images/AudiA3-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AudiA3-sinistra.png", 'rb'), filesize("./public/images/AudiA3-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AudiA3-frontale.png", 'rb'), filesize("./public/images/AudiA3-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AudiA3-posteriore.png", 'rb'), filesize("./public/images/AudiA3-posteriore.png"))
            ],
            ['marca' => 'Volkswagen', 'modello' => 'Golf', 'targa' => 'FG849GF',
                'anno' => '2017', 'nPosti' => 5, 
                'motore' => '1000 cc - 110 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1000 cc 110 CV; Carburante: Benzina',
                'prezzo' => 998.99, 'data_inizio' => '2023-06-30', 'data_fine' => '2023-07-30', 
                'img_principale' => fread(fopen("./public/images/auto/VolkswagenGolf-principale.png", 'rb'), filesize("./public/images/VolkswagenGolf-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/VolkswagenGolf-destra.png", 'rb'), filesize("./public/images/VolkswagenGolf-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/VolkswagenGolf-sinistra.png", 'rb'), filesize("./public/images/VolkswagenGolf-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/VolkswagenGolf-frontale.png", 'rb'), filesize("./public/images/VolkswagenGolf-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/VolkswagenGolf-posteriore.png", 'rb'), filesize("./public/images/VolkswagenGolf-posteriore.png"))
            ],
            ['marca' => 'Audi', 'modello' => 'A4', 'targa' => 'GN946NG',
                'anno' => '2023', 'nPosti' => 5,
                'motore' => '1900 cc - 136 CV', 'carburante' => 'Ibrido-Diesel',
                'allestimento' => '', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1900 cc 136 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 88.93, 'data_inizio' => '2023-06-02', 'data_fine' => '2023-08-02', 
                'img_principale' => fread(fopen("./public/images/auto/AudiA4-principale.png", 'rb'), filesize("./public/images/AudiA4-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AudiA4-destra.png", 'rb'), filesize("./public/images/AudiA4-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AudiA4-sinistra.png", 'rb'), filesize("./public/images/AudiA4-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AudiA4-frontale.png", 'rb'), filesize("./public/images/AudiA4-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AudiA4-posteriore.png", 'rb'), filesize("./public/images/AudiA4-posteriore.png"))
            ],
            ['marca' => 'Mercedes', 'modello' => 'C-Class', 'targa' => 'FU159UF',
                'anno' => '2019', 'nPosti' => 5,
                'motore' => '2000 cc - 163 CV', 'carburante' => 'Ibrido-Diesel',
                'allestimento' => '', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2000 cc 163 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 88.93, 'data_inizio' => '2023-05-25', 'data_fine' => '2023-09-25', 
                'img_principale' => fread(fopen("./public/images/auto/MercedesC-Class-principale.png", 'rb'), filesize("./public/images/MercedesC-Class-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/MercedesC-Class-destra.png", 'rb'), filesize("./public/images/MercedesC-Class-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/MercedesC-Class-sinistra.png", 'rb'), filesize("./public/images/MercedesC-Class-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/MercedesC-Class-frontale.png", 'rb'), filesize("./public/images/MercedesC-Class-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/MercedesC-Class-posteriore.png", 'rb'), filesize("./public/images/MercedesC-Class-posteriore.png"))
            ],
            ['marca' => 'Peugeot', 'modello' => '508', 'targa' => 'GK987KG',
                'anno' => '2022', 'nPosti' => 5,
                'motore' => '1500 cc - 131 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1500 cc 131 CV; Carburante: Diesel',
                'prezzo' => 88.93, 'data_inizio' => '2023-04-13', 'data_fine' => '2023-06-13', 
                'img_principale' => fread(fopen("./public/images/auto/Peugeot508-principale.png", 'rb'), filesize("./public/images/Peugeot508-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/Peugeot508-destra.png", 'rb'), filesize("./public/images/Peugeot508-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/Peugeot508-sinistra.png", 'rb'), filesize("./public/images/Peugeot508-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/Peugeot508-frontale.png", 'rb'), filesize("./public/images/Peugeot508-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/Peugeot508-posteriore.png", 'rb'), filesize("./public/images/Peugeot508-posteriore.png"))
            ],
            ['marca' => 'Audi', 'modello' => 'Q7', 'targa' => 'GE806EG',
                'anno' => '2021', 'nPosti' => 5,
                'motore' => '3000 cc - 231 CV', 'carburante' => 'Ibrido-Diesel',
                'allestimento' => '', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 3000 cc 231 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 78.66, 'data_inizio' => '2023-03-30', 'data_fine' => '2023-04-30', 
                'img_principale' => fread(fopen("./public/images/auto/AudiQ7-principale.png", 'rb'), filesize("./public/images/AudiQ7-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AudiQ7-destra.png", 'rb'), filesize("./public/images/AudiQ7-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AudiQ7-sinistra.png", 'rb'), filesize("./public/images/AudiQ7-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AudiQ7-frontale.png", 'rb'), filesize("./public/images/AudiQ7-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AudiQ7-posteriore.png", 'rb'), filesize("./public/images/AudiQ7-posteriore.png"))
            ],
            ['marca' => 'Jeep', 'modello' => 'Compass', 'targa' => 'FM852MF',
                'anno' => '2017', 'nPosti' => 5,
                'motore' => '1600 cc - 131 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 78.66, 'data_inizio' => '2023-05-08', 'data_fine' => '2023-07-08', 
                'img_principale' => fread(fopen("./public/images/auto/JeepCompass-principale.png", 'rb'), filesize("./public/images/JeepCompass-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/JeepCompass-destra.png", 'rb'), filesize("./public/images/JeepCompass-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/JeepCompass-sinistra.png", 'rb'), filesize("./public/images/JeepCompass-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/JeepCompass-frontale.png", 'rb'), filesize("./public/images/JeepCompass-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/JeepCompass-posteriore.png", 'rb'), filesize("./public/images/JeepCompass-posteriore.png"))
            ],
            ['marca' => 'Alfa Romeo', 'modello' => 'Stelvio', 'targa' => 'GK819KK',
                'anno' => '2021', 'nPosti' => 5,
                'motore' => '2100 cc - 160 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2100 cc 160 CV; Carburante: Diesel',
                'prezzo' => 78.66, 'data_inizio' => '2023-02-15', 'data_fine' => '2023-04-15', 
                'img_principale' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-principale.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-destra.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-sinistra.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-frontale.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-posteriore.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-posteriore.png"))
            ]
        ]);


        /*
        *   Tabella dedicata agli utenti con diversi ruoli
        */
        DB::table('utente')->insert([
            ['nome' => 'Giacomo', 'cognome' => 'Verdi',
                'residenza' => 'Via Matteotti, 11', 'nascita' => '1999-07-22',
                'email' => 'clie@clie.it', 'occupazione' => 'Studente',
                'username' => 'clieclie', 'password' => Hash::make('41ecbOq3'), 'ruolo' => 'user'
            ],
            ['nome' => 'Marco', 'cognome' => 'Bianchi',
                'residenza' => 'Via Garibaldi, 85', 'nascita' => '1986-05-08',
                'email' => 'staff@staff.it', 'occupazione' => 'Dipendente',
                'username' => 'staffstaff', 'password' => Hash::make('41ecbOq3'), 'ruolo' => 'staff'
            ],
            ['nome' => 'Mario', 'cognome' => 'Rossi',
                'residenza' => 'Via Cavour, 30', 'nascita' => '1975-10-15',
                'email' => 'mario@rossi.it', 'occupazione' => 'Imprenditore',
                'username' => 'adminadmin', 'password' => Hash::make('41ecbOq3'), 'ruolo' => 'admin',
            ]
        ]);

        /*
        *   Tabella dedicata alla FAQ
        */
        DB::table('faq')->insert([
            ['faqId' => 1, 'domanda' => 'Come registrarsi?', 
                'risposta' => "Per registrarti puoi andare nella sezione login che trovi sulla pagina Home del sito.
                            <br>Per raggiungerla fai click sull'icona in alto a sinistra."
            ],
            ['faqId' => 2, 'domanda' => 'Di cosa ho bisogno per noleggiare un&rsquo;auto?', 
                'risposta' => "Avrai bisogno di:<br><ul>
                            <li>Patente valida da almeno 12 mesi.<\li>
                            <li>Documento d&rsquo;identit&agrave.<\li>
                            <li>Carta di credito o debito.<\li><\ul>"
            ],
            ['faqId' => 3, 'domanda' => 'Che età devo avere per noleggiare un&rsquo;auto?', 
                'risposta' => "Per poter noleggiare un&rsquo;auto devi avere almeno 18 anni ed 1 anno di patente."
            ],
            ['faqId' => 4, 'domanda' => 'Che tipo di auto posso noleggiare?', 
                'risposta' => "Sul nostro sito puoi trovare offerte per tutti i tipi di auto a noleggio, tra cui auto piccole, medie, grandi e SUV."
            ],
            ['faqId' => 5, 'domanda' => 'Cosa devo considerare nella scelta di un&rsquo;auto?', 
                'risposta' => "<ul>
                            <li>Spazio: scegli un&rsquo;auto spaziosa sia per i passeggeri che per i bagagli.<\li>
                            <li>Dimensione: scegli l&rsquo;auto in base alle tue abilità nel parcheggio.<\li>
                            <li>Budget: non scegliere un&rsquo;auto che non puoi permetterti, solo perchè è bella, grande e tecnologica.<\li>"
            ],
            ['faqId' => 6, 'domanda' => 'Cosa è incluso nel prezzo?', 
                'risposta' => "Il prezzo include: la protezione dai furti, la limitazione della responsabilità dei danni, le tasse locali e le tasse stradali.
                            <br>Eventuali costi extra andranno pagati al momento del ritiro."
            ]
        ]);
    }
}
