<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                'descrizione' => 'Automobili compatte, ottime per l&rsquo;utilizzo in citt&agrave'
            ],
            ['catId' => 2, 'nome' => 'Medie', 
                'descrizione' => 'Automobili non troppo grandi, che permettono un buon utilizzo cittadino, 
                                ma anche possibilit&agrave di spostamenti più lunghi'
            ],
            ['catId' => 3, 'nome' => 'Grandi', 
                'descrizione' => 'Automobili comode ed ottime per affrontare lunghi spostamenti, 
                                con maggiore spazio per i bagagli'
            ],
            ['catId' => 4, 'nome' => 'SUV', 
                'descrizione' => 'Automobili grandi e alte, che permettono una visuale migliore alla guida 
                                ed un comfort di primo livello'
            ]
        ]);


        /*
        *   Tabella dedicata ai modelli di auto
        */
        DB::table('auto')->insert([
            ['marca' => 'Fiat', 'modello' => '500', 'targa' => 'FQ123QF',
                'anno' => 2018, 'nPosti' => 4,
                'motore' => '1200 cc - 70 CV', 'carburante' => 'Benzina',
                'username' => 'clieclie', 'catId' => 1,
                'descrizione' => '4 posti; 3 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 113, 'data_inizio' => '2023-01-22', 'data_fine' => '2023-02-22', 
                'nome_img' => 'Fiat500'
                /*'img_principale' => fread(fopen("./public/images/auto/Fiat500-principale.png", 'rb'), filesize("./public/images/Fiat500-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/Fiat500-destra.png", 'rb'), filesize("./public/images/Fiat500-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/Fiat500-sinistra.png", 'rb'), filesize("./public/images/Fiat500-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/Fiat500-frontale.png", 'rb'), filesize("./public/images/Fiat500-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/Fiat500-posteriore.png", 'rb'), filesize("./public/images/Fiat500-posteriore.png"))*/
            ],
            ['marca' => 'Fiat', 'modello' => 'Panda', 'targa' => 'FV456VF',
                'anno' => 2019, 'nPosti' => 4,
                'motore' => '1200 cc - 70 CV', 'carburante' => 'Benzina',
                'username' => 'nessuno', 'catId' => 1,
                'descrizione' => '4 posti; 4 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 120, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'FiatPanda'
                /*'img_principale' => fread(fopen("./public/images/auto/FiatPanda-principale.png", 'rb'), filesize("./public/images/FiatPanda-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/FiatPanda-destra.png", 'rb'), filesize("./public/images/FiatPanda-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/FiatPanda-sinistra.png", 'rb'), filesize("./public/images/FiatPanda-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/FiatPanda-frontale.png", 'rb'), filesize("./public/images/FiatPanda-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/FiatPanda-posteriore.png", 'rb'), filesize("./public/images/FiatPanda-posteriore.png"))*/
            ],
            ['marca' => 'Peugeot', 'modello' => '208', 'targa' => 'GG753GG',
                'anno' => 2021, 'nPosti' => 5,
                'motore' => '1500 cc - 102 CV', 'carburante' => 'Diesel',
                'username' => 'nessuno', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1500 cc 102 CV; Carburante: Diesel',
                'prezzo' => 132, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01',
                'nome_img' => 'Peugeot208' 
                /*'img_principale' => fread(fopen("./public/images/auto/Peugeot208-principale.png", 'rb'), filesize("./public/images/Peugeot208-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/Peugeot208-destra.png", 'rb'), filesize("./public/images/Peugeot208-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/Peugeot208-sinistra.png", 'rb'), filesize("./public/images/Peugeot208-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/Peugeot208-frontale.png", 'rb'), filesize("./public/images/Peugeot208-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/Peugeot208-posteriore.png", 'rb'), filesize("./public/images/Peugeot208-posteriore.png"))*/
            ],
            ['marca' => 'Fiat', 'modello' => 'Tipo', 'targa' => 'GJ654JG',
                'anno' => 2022, 'nPosti' => 5, 
                'motore' => '1600 cc - 131 CV', 'carburante' => 'Diesel',
                'username' => 'nessuno', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 146, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'FiatTipo'
                /*'img_principale' => fread(fopen("./public/images/auto/FiatTipo-principale.png", 'rb'), filesize("./public/images/FiatTipo-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/FiatTipo-destra.png", 'rb'), filesize("./public/images/FiatTipo-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/FiatTipo-sinistra.png", 'rb'), filesize("./public/images/FiatTipo-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/FiatTipo-frontale.png", 'rb'), filesize("./public/images/FiatTipo-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/FiatTipo-posteriore.png", 'rb'), filesize("./public/images/FiatTipo-posteriore.png"))*/
            ],
            ['marca' => 'Audi', 'modello' => 'A3', 'targa' => 'FZ567ZF',
                'anno' => 2019, 'nPosti' => 5, 
                'motore' => '1900 cc - 116 CV', 'carburante' => 'Diesel',
                'username' => 'nessuno', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1900 cc 116 CV; Carburante: Diesel',
                'prezzo' => 187, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'AudiA3'
                /*'img_principale' => fread(fopen("./public/images/auto/AudiA3-principale.png", 'rb'), filesize("./public/images/AudiA3-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AudiA3-destra.png", 'rb'), filesize("./public/images/AudiA3-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AudiA3-sinistra.png", 'rb'), filesize("./public/images/AudiA3-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AudiA3-frontale.png", 'rb'), filesize("./public/images/AudiA3-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AudiA3-posteriore.png", 'rb'), filesize("./public/images/AudiA3-posteriore.png"))*/
            ],
            ['marca' => 'Volkswagen', 'modello' => 'Golf', 'targa' => 'FG849GF',
                'anno' => 2017, 'nPosti' => 5, 
                'motore' => '1000 cc - 110 CV', 'carburante' => 'Benzina',
                'username' => 'nessuno', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1000 cc 110 CV; Carburante: Benzina',
                'prezzo' => 174, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'VolkswagenGolf'
                /*'img_principale' => fread(fopen("./public/images/auto/VolkswagenGolf-principale.png", 'rb'), filesize("./public/images/VolkswagenGolf-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/VolkswagenGolf-destra.png", 'rb'), filesize("./public/images/VolkswagenGolf-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/VolkswagenGolf-sinistra.png", 'rb'), filesize("./public/images/VolkswagenGolf-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/VolkswagenGolf-frontale.png", 'rb'), filesize("./public/images/VolkswagenGolf-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/VolkswagenGolf-posteriore.png", 'rb'), filesize("./public/images/VolkswagenGolf-posteriore.png"))*/
            ],
            ['marca' => 'Audi', 'modello' => 'A4', 'targa' => 'GN946NG',
                'anno' => 2022, 'nPosti' => 5,
                'motore' => '1900 cc - 136 CV', 'carburante' => 'Ibrido-Diesel',
                'username' => 'nessuno', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1900 cc 136 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 195, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'AudiA4'
                /*'img_principale' => fread(fopen("./public/images/auto/AudiA4-principale.png", 'rb'), filesize("./public/images/AudiA4-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AudiA4-destra.png", 'rb'), filesize("./public/images/AudiA4-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AudiA4-sinistra.png", 'rb'), filesize("./public/images/AudiA4-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AudiA4-frontale.png", 'rb'), filesize("./public/images/AudiA4-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AudiA4-posteriore.png", 'rb'), filesize("./public/images/AudiA4-posteriore.png"))*/
            ],
            ['marca' => 'Mercedes', 'modello' => 'C-Class', 'targa' => 'FU159UF',
                'anno' => 2019, 'nPosti' => 5,
                'motore' => '2000 cc - 163 CV', 'carburante' => 'Ibrido-Diesel',
                'username' => 'nessuno', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2000 cc 163 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 200, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01',
                'nome_img' => 'MercedesC-Class' 
                /*'img_principale' => fread(fopen("./public/images/auto/MercedesC-Class-principale.png", 'rb'), filesize("./public/images/MercedesC-Class-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/MercedesC-Class-destra.png", 'rb'), filesize("./public/images/MercedesC-Class-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/MercedesC-Class-sinistra.png", 'rb'), filesize("./public/images/MercedesC-Class-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/MercedesC-Class-frontale.png", 'rb'), filesize("./public/images/MercedesC-Class-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/MercedesC-Class-posteriore.png", 'rb'), filesize("./public/images/MercedesC-Class-posteriore.png"))*/
            ],
            ['marca' => 'Peugeot', 'modello' => '508', 'targa' => 'GK987KG',
                'anno' => 2022, 'nPosti' => 5,
                'motore' => '1500 cc - 131 CV', 'carburante' => 'Diesel',
                'username' => 'bertoberto', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1500 cc 131 CV; Carburante: Diesel',
                'prezzo' => 230, 'data_inizio' => '2023-04-13', 'data_fine' => '2023-06-13', 
                'nome_img' => 'Peugeot508'
                /*'img_principale' => fread(fopen("./public/images/auto/Peugeot508-principale.png", 'rb'), filesize("./public/images/Peugeot508-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/Peugeot508-destra.png", 'rb'), filesize("./public/images/Peugeot508-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/Peugeot508-sinistra.png", 'rb'), filesize("./public/images/Peugeot508-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/Peugeot508-frontale.png", 'rb'), filesize("./public/images/Peugeot508-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/Peugeot508-posteriore.png", 'rb'), filesize("./public/images/Peugeot508-posteriore.png"))*/
            ],
            ['marca' => 'Audi', 'modello' => 'Q7', 'targa' => 'GE806EG',
                'anno' => 2013, 'nPosti' => 7,
                'motore' => '3000 cc - 231 CV', 'carburante' => 'Ibrido-Diesel',
                'username' => 'nessuno', 'catId' => 4,
                'descrizione' => '7 posti; 4 porte; Cambio automatico; Motore: 3000 cc 231 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 268, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'AudiQ7'
                /*'img_principale' => fread(fopen("./public/images/auto/AudiQ7-principale.png", 'rb'), filesize("./public/images/AudiQ7-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AudiQ7-destra.png", 'rb'), filesize("./public/images/AudiQ7-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AudiQ7-sinistra.png", 'rb'), filesize("./public/images/AudiQ7-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AudiQ7-frontale.png", 'rb'), filesize("./public/images/AudiQ7-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AudiQ7-posteriore.png", 'rb'), filesize("./public/images/AudiQ7-posteriore.png"))*/
            ],
            ['marca' => 'Jeep', 'modello' => 'Compass', 'targa' => 'FM852MF',
                'anno' => 2018, 'nPosti' => 5,
                'motore' => '1600 cc - 131 CV', 'carburante' => 'Diesel',
                'username' => 'nessuno', 'catId' => 4,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 214, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'JeepCompass'
                /*'img_principale' => fread(fopen("./public/images/auto/JeepCompass-principale.png", 'rb'), filesize("./public/images/JeepCompass-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/JeepCompass-destra.png", 'rb'), filesize("./public/images/JeepCompass-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/JeepCompass-sinistra.png", 'rb'), filesize("./public/images/JeepCompass-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/JeepCompass-frontale.png", 'rb'), filesize("./public/images/JeepCompass-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/JeepCompass-posteriore.png", 'rb'), filesize("./public/images/JeepCompass-posteriore.png"))*/
            ],
            ['marca' => 'Alfa Romeo', 'modello' => 'Stelvio', 'targa' => 'GK819KK',
                'anno' => 2017, 'nPosti' => 5,
                'motore' => '2100 cc - 160 CV', 'carburante' => 'Diesel',
                'username' => 'nessuno', 'catId' => 4,
                'descrizione' => '5 posti; 5 porte; Cambio automatico; Motore: 2100 cc 160 CV; Carburante: Diesel',
                'prezzo' => 252, 'data_inizio' => '1990-01-01', 'data_fine' => '1990-01-01', 
                'nome_img' => 'AlfaRomeoStelvio'
                /*'img_principale' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-principale.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-principale.png")),
                'img_destra' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-destra.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-destra.png")),
                'img_sinistra' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-sinistra.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-sinistra.png")),
                'img_frontale' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-frontale.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-frontale.png")),
                'img_posteriore' => fread(fopen("./public/images/auto/AlfaRomeoStelvio-posteriore.png", 'rb'), filesize("./public/images/AlfaRomeoStelvio-posteriore.png"))*/
            ]
        ]);


        /*
        *   Tabella dedicata alle immagini delle auto
        */
        /*DB::table('foto')->insert([
            ['nome' => 'Fiat500', 'estensione' => '.jpg', 'targa' => 'FQ123QF'],
            ['nome' => 'FiatPanda', 'estensione' => '.jpg', 'targa' => 'FV456VF'],
            ['nome' => 'Peugeot208', 'estensione' => '.jpg', 'targa' => 'GG753GG'],
            ['nome' => 'ToyotaAygo', 'estensione' => '.jpg', 'targa' => 'GH842HG'],
            ['nome' => 'FiatTipo', 'estensione' => '.jpg', 'targa' => 'GJ654JG'],
            ['nome' => 'AudiA3', 'estensione' => '.jpg', 'targa' => 'FZ567ZF'],
            ['nome' => 'VolkswagenGolf', 'estensione' => '.jpg', 'targa' => 'FG849GF'],
            ['nome' => 'AudiA4', 'estensione' => '.jpg', 'targa' => 'GN946NG'],
            ['nome' => 'MercedesC-Class', 'estensione' => '.jpg', 'targa' => 'FU159UF'],
            ['nome' => 'Peugeot508', 'estensione' => '.jpg', 'targa' => 'GK987KG'],
            ['nome' => 'AudiQ7', 'estensione' => '.jpg', 'targa' => 'GE806EG'],
            ['nome' => 'JeepCompass', 'estensione' => '.jpg', 'targa' => 'FM852MF'],
            ['nome' => 'AlfaRomeoStelvio', 'estensione' => '.jpg', 'targa' => 'GK819KK']
        ]);*/


        /*
        *   Tabella dedicata agli utenti con diversi ruoli
        */
        DB::table('utente')->insert([
            ['nome' => 'Roberto', 'cognome' => 'Blu',
                'residenza' => 'Via della pace, 34, Torino', 'nascita' => '1993-01-31',
                'email' => 'berto@berto.it', 'occupazione' => 'Commerciante',
                'username' => 'bertoberto', 'password' => Hash::make('41ecbOq3'), 'ruolo' => 'user'
            ],
            ['nome' => 'Giacomo', 'cognome' => 'Verdi',
                'residenza' => 'Via Matteotti, 11, Ancona', 'nascita' => '1999-07-22',
                'email' => 'clie@clie.it', 'occupazione' => 'Studente',
                'username' => 'clieclie', 'password' => Hash::make('41ecbOq3'), 'ruolo' => 'user'
            ],
            ['nome' => 'Marco', 'cognome' => 'Bianchi',
                'residenza' => 'Via Garibaldi, 85, Roma', 'nascita' => '1986-08-05',
                'email' => 'staff@staff.it', 'occupazione' => 'Dipendente',
                'username' => 'staffstaff', 'password' => Hash::make('41ecbOq3'), 'ruolo' => 'staff'
            ],
            ['nome' => 'Mario', 'cognome' => 'Rossi',
                'residenza' => 'Via Cavour, 30, Milano', 'nascita' => '1975-10-15',
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
                'risposta' => "Avrai bisogno di:<br>
                            1) Patente valida da almeno 12 mesi.
                            2) Documento d&rsquo;identit&agrave.
                            3) Carta di credito o debito."
            ],
            ['faqId' => 3, 'domanda' => 'Che età devo avere per noleggiare un&rsquo;auto?', 
                'risposta' => "Per poter noleggiare un&rsquo;auto devi avere almeno 18 anni ed 1 anno di patente."
            ],
            ['faqId' => 4, 'domanda' => 'Che tipo di auto posso noleggiare?', 
                'risposta' => "Sul nostro sito puoi trovare offerte per tutti i tipi di auto a noleggio, tra cui auto piccole, medie, grandi e SUV."
            ],
            ['faqId' => 5, 'domanda' => 'Cosa devo considerare nella scelta di un&rsquo;auto?', 
                'risposta' => "1) Spazio: scegli un&rsquo;auto spaziosa sia per i passeggeri che per i bagagli.<br>
                            2) Dimensione: scegli l&rsquo;auto in base alle tue abilità nel parcheggio.<br>
                            3) Budget: non scegliere un&rsquo;auto che non puoi permetterti, solo perchè è bella, grande e tecnologica."
            ],
            ['faqId' => 6, 'domanda' => 'Cosa è incluso nel prezzo?', 
                'risposta' => "Il prezzo include: la protezione dai furti, la limitazione della responsabilità dei danni, le tasse locali e le tasse stradali.
                            <br>Eventuali costi extra andranno pagati al momento del ritiro."
            ]
        ]);
    }
}
