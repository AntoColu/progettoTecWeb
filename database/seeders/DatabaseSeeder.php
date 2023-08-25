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
                'prezzo' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 
                'foto' => fread(fopen("./public/images/auto/fiat500.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Fiat', 'modello' => 'Panda', 'targa' => 'FV456VF',
                'anno' => '2019', 'nPosti' => 4,
                'motore' => '1200 cc - 70 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '4 posti; 4 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 
                'foto' => fread(fopen("./public/images/auto/fiatPanda.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Peugeot', 'modello' => '208', 'targa' => 'GG753GG',
                'anno' => '2021', 'nPosti' => 5,
                'motore' => '1500 cc - 102 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1500 cc 102 CV; Carburante: Diesel',
                'prezzo' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 
                'foto' => fread(fopen("./public/images/auto/peugeot208.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Toyota', 'modello' => 'Aygo', 'targa' => 'GH842HG',
                'anno' => '2021', 'nPosti' => 5, 
                'motore' => '1000 cc - 72 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1000 cc 72 CV; Carburante: Benzina',
                'prezzo' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 
                'foto' => fread(fopen("./public/images/auto/toyotaAygo.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Fiat', 'modello' => 'Tipo', 'targa' => 'GJ654JG',
                'anno' => '2022', 'nPosti' => 5, 
                'motore' => '1600 cc - 131 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 
                'foto' => fread(fopen("./public/images/auto/fiatTipo.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Audi', 'modello' => 'A3 Sportback', 'targa' => 'FZ567ZF',
                'anno' => '2019', 'nPosti' => 5, 
                'motore' => '1900 cc - 116 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1900 cc 116 CV; Carburante: Diesel',
                'prezzo' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 
                'foto' => fread(fopen("./public/images/auto/audiA3.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Volkswagen', 'modello' => 'Golf', 'targa' => 'FG849GF',
                'anno' => '2017', 'nPosti' => 5, 
                'motore' => '1000 cc - 110 CV', 'carburante' => 'Benzina',
                'allestimento' => '', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1000 cc 110 CV; Carburante: Benzina',
                'prezzo' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 
                'foto' => fread(fopen("./public/images/auto/volkswagenGolf.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Audi', 'modello' => 'A4', 'targa' => 'GN946NG',
                'anno' => '2023', 'nPosti' => 5,
                'motore' => '1900 cc - 136 CV', 'carburante' => 'Ibrido-Diesel',
                'allestimento' => '', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1900 cc 136 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'foto' => fread(fopen("./public/images/auto/audiA4.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Mercedes', 'modello' => 'C-Class', 'targa' => 'FU159UF',
                'anno' => '2019', 'nPosti' => 5,
                'motore' => '2000 cc - 163 CV', 'carburante' => 'Ibrido-Diesel',
                'allestimento' => '', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2000 cc 163 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'foto' => fread(fopen("./public/images/auto/mercedesC.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Peugeot', 'modello' => '508', 'targa' => 'GK987KG',
                'anno' => '2022', 'nPosti' => 5,
                'motore' => '1500 cc - 131 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1500 cc 131 CV; Carburante: Diesel',
                'prezzo' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'foto' => fread(fopen("./public/images/auto/peugeot508.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Audi', 'modello' => 'Q7', 'targa' => 'GE806EG',
                'anno' => '2021', 'nPosti' => 5,
                'motore' => '3000 cc - 231 CV', 'carburante' => 'Ibrido-Diesel',
                'allestimento' => '', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 3000 cc 231 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'foto' => fread(fopen("./public/images/auto/audiQ7.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Jeep', 'modello' => 'Compass', 'targa' => 'FM852MF',
                'anno' => '2017', 'nPosti' => 5,
                'motore' => '1600 cc - 131 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'foto' => fread(fopen("./public/images/auto/jeepCompass.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['marca' => 'Alfa Romeo ', 'modello' => 'Stelvio', 'targa' => 'GK819KK',
                'anno' => '2021', 'nPosti' => 5,
                'motore' => '2100 cc - 160 CV', 'carburante' => 'Diesel',
                'allestimento' => '', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2100 cc 160 CV; Carburante: Diesel',
                'prezzo' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'foto' => fread(fopen("./public/images/auto/alfaStelvio.png", 'rb'), filesize("./public/images/piccole.png"))
            ]
        ]);


        /*
        *   Tabella dedicata agli utenti con diversi ruoli
        */
        DB::table('utente')->insert([
            ['nome' => 'Giacomo', 'cognome' => 'Verdi',
                'residenza' => 'Via Matteotti, 11', 'nascita' => '1999-07-22',
                'email' => 'clie@clie.it', 'occupazione' => 'Studente',
                'username' => 'clieclie', 'password' => Hash::make('clieclie'), 'ruolo' => 'user'
            ],
            ['nome' => 'Marco', 'cognome' => 'Bianchi',
                'residenza' => 'Via Garibaldi, 85', 'nascita' => '1986-05-08',
                'email' => 'staff@staff.it', 'occupazione' => 'Dipendente',
                'username' => 'staffstaff', 'password' => Hash::make('staffstaff'), 'ruolo' => 'staff'
            ],
            ['nome' => 'Mario', 'cognome' => 'Rossi',
                'residenza' => 'Via Cavour, 30', 'nascita' => '1975-10-15',
                'email' => 'mario@rossi.it', 'occupazione' => 'Imprenditore',
                'username' => 'adminadmin', 'password' => Hash::make('adminadmin'), 'ruolo' => 'admin',
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
