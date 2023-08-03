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
            ['catId' => 1, 'name' => 'Piccole', 
                'imgEsempio' => fread(fopen("./public/images/categorie/piccole.png", 'rb'), filesize("./public/images/piccole.png")), 
                'descr' => 'Desktop, Laptop, Netbook'
            ],
            ['catId' => 2, 'name' => 'Medie', 
                'imgEsempio' => fread(fopen("./public/images/categorie/medie.png", 'rb'), filesize("./public/images/medie.png")), 
                'descr' => 'Hard Disk, Tastiere, Mouse'
            ],
            ['catId' => 3, 'name' => 'Grandi', 
                'imgEsempio' => fread(fopen("./public/images/categorie/grandi.png", 'rb'), filesize("./public/images/grandi.png")), 
                'descr' => 'Descrizione dei Prodotti Desktop'
            ],
            ['catId' => 4, 'name' => 'SUV', 
                'imgEsempio' => fread(fopen("./public/images/categorie/suv.png", 'rb'), filesize("./public/images/suv.png")), 
                'descr' => 'Descrizione dei Prodotti Laptop'
            ]
        ]);


        /*
        *   Tabella dedicata ai modelli di auto
        */
        DB::table('auto')->insert([
            ['name' => 'Fiat 500', 'catId' => 1,
                'descrizione' => '4 posti; 3 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/auto/fiat500.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Fiat Panda', 'catId' => 1,
                'descrizione' => '4 posti; 4 porte; Cambio manuale; Motore: 1200 cc 70 CV; Carburante: Benzina',
                'prezzo' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/auto/fiatPanda.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Peugeot 208', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1500 cc 102 CV; Carburante: Diesel',
                'prezzo' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/auto/peugeot208.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Toyota Aygo', 'catId' => 1,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1000 cc 72 CV; Carburante: Benzina',
                'prezzo' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/auto/toyotaAygo.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Fiat Tipo', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/auto/fiatTipo.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Audi A3 Sportback', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1900 cc 116 CV; Carburante: Diesel',
                'prezzo' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/auto/audiA3.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Volkswagen Golf', 'catId' => 2,
                'descrizione' => '5 posti; 5 porte; Cambio manuale; Motore: 1000 cc 110 CV; Carburante: Benzina',
                'prezzo' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/auto/volkswagenGolf.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Audi A4', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1900 cc 136 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/auto/audiA4.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Mercedes C-Class', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2000 cc 163 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/auto/mercedesC.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Peugeot 508', 'catId' => 3,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 1500 cc 131 CV; Carburante: Diesel',
                'prezzo' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/auto/peugeot508.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Audi Q7', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 3000 cc 231 CV; Carburante: Ibrido-Diesel',
                'prezzo' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'image' => fread(fopen("./public/images/auto/audiQ7.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Jeep Compass', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio manuale; Motore: 1600 cc 131 CV; Carburante: Diesel',
                'prezzo' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'image' => fread(fopen("./public/images/auto/jeepCompass.png", 'rb'), filesize("./public/images/piccole.png"))
            ],
            ['name' => 'Alfa Romeo Stelvio', 'catId' => 4,
                'descrizione' => '5 posti; 4 porte; Cambio automatico; Motore: 2100 cc 160 CV; Carburante: Diesel',
                'prezzo' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'image' => fread(fopen("./public/images/auto/alfaStelvio.png", 'rb'), filesize("./public/images/piccole.png"))
            ]
        ]);


        /*
        *   Tabella dedicata agli utenti con diversi livelli
        */
        DB::table('utente')->insert([
            ['nome' => 'Giacomo', 'cognome' => 'Verdi', 'email' => 'clie@clie.it', 'username' => 'clieclie',
                'password' => Hash::make('clieclie'), 'ruolo' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            ['nome' => 'Marco', 'cognome' => 'Bianchi', 'email' => 'staff@staff.it', 'username' => 'staffstaff',
                'password' => Hash::make('staffstaff'), 'ruolo' => 'staff', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            ['nome' => 'Mario', 'cognome' => 'Rossi', 'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'ruolo' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);

        /*
        *   Tabella dedicata alla FAQ
        */
        DB::table('faq')->insert([
            ['id_faq' => 1, 'domanda' => 'Come registrarsi?', 
                'risposta' => "Per registrarti puoi andare nella sezione login che trovi sulla pagina Home del sito.
                            <br>Per raggiungerla fai click sull'icona in alto a sinistra."
            ],
            ['id_faq' => 2, 'domanda' => 'Di cosa ho bisogno per noleggiare un&rsquo;auto?', 
                'risposta' => "Avrai bisogno di:<br><ul>
                            <li>Patente valida da almeno 12 mesi.<\li>
                            <li>Documento d&rsquo;identit&agrave.<\li>
                            <li>Carta di credito o debito.<\li><\ul>"
            ],
            ['id_faq' => 3, 'domanda' => 'Che età devo avere per noleggiare un&rsquo;auto?', 
                'risposta' => "Per poter noleggiare un&rsquo;auto devi avere almeno 18 anni ed 1 anno di patente."
            ],
            ['id_faq' => 4, 'domanda' => 'Che tipo di auto posso noleggiare?', 
                'risposta' => "Sul nostro sito puoi trovare offerte per tutti i tipi di auto a noleggio, tra cui auto piccole, medie, grandi e SUV."
            ],
            ['id_faq' => 5, 'domanda' => 'Cosa devo considerare nella scelta di un&rsquo;auto?', 
                'risposta' => "<ul>
                            <li>Spazio: scegli un&rsquo;auto spaziosa sia per i passeggeri che per i bagagli.<\li>
                            <li>Dimensione: scegli l&rsquo;auto in base alle tue abilità nel parcheggio.<\li>
                            <li>Budget: non scegliere un&rsquo;auto che non puoi permetterti, solo perchè è bella, grande e tecnologica.<\li>"
            ],
            ['id_faq' => 6, 'domanda' => 'Cosa è incluso nel prezzo?', 
                'risposta' => "Il prezzo include: la protezione dai furti, la limitazione della responsabilità dei danni, le tasse locali e le tasse stradali.
                            <br>Eventuali costi extra andranno pagati al momento del ritiro."
            ]
        ]);
    }
}
