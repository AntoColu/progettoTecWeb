<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        DB::table('categoria')->insert([
            ['catId' => 1, 'name' => 'Piccole', 
                'imgEsempio' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png")), 
                'descr' => 'Desktop, Laptop, Netbook'],
            ['catId' => 2, 'name' => 'Medie', 
                'imgEsempio' => fread(fopen("./public/images/medie.png", 'rb'), filesize("./public/images/medie.png")), 
                'descr' => 'Hard Disk, Tastiere, Mouse'],
            ['catId' => 3, 'name' => 'Grandi', 
                'imgEsempio' => fread(fopen("./public/images/grandi.png", 'rb'), filesize("./public/images/grandi.png")), 
                'descr' => 'Descrizione dei Prodotti Desktop'],
            ['catId' => 4, 'name' => 'SUV', 
                'imgEsempio' => fread(fopen("./public/images/suv.png", 'rb'), filesize("./public/images/suv.png")), 
                'descr' => 'Descrizione dei Prodotti Laptop']
        ]);

        DB::table('auto')->insert([
            ['name' => 'Fiat 500', 'catId' => 1,
                'descShort' => 'Caratteristiche NetBook2', 'descLong' => self::DESCPROD,
                'price' => 219.34, 'discountPerc' => 12, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Fiat Panda', 'catId' => 1,
                'descShort' => 'Caratteristiche HardDisk2', 'descLong' => self::DESCPROD,
                'price' => 86.37, 'discountPerc' => 15, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Peugeot 208', 'catId' => 1,
                'descShort' => 'Caratteristiche Desktop1', 'descLong' => self::DESCPROD,
                'price' => 1230.49, 'discountPerc' => 25, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Toyota Aygo', 'catId' => 1,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 455.37, 'discountPerc' => 17, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Fiat Tipo', 'catId' => 2,
                'descShort' => 'Caratteristiche Laptop1', 'descLong' => self::DESCPROD,
                'price' => 1889.67, 'discountPerc' => 15, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Audi A3', 'catId' => 2,
                'descShort' => 'Caratteristiche NetBook3', 'descLong' => self::DESCPROD,
                'price' => 259.99, 'discountPerc' => 17, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Volkswagen Golf', 'catId' => 2,
                'descShort' => 'Caratteristiche Laptop3', 'descLong' => self::DESCPROD,
                'price' => 998.99, 'discountPerc' => 23, 'discounted' => 1, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Audi A4', 'catId' => 3,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Mercedes C-Class', 'catId' => 3,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Peugeot 508', 'catId' => 3,
                'descShort' => 'Caratteristiche HardDisk1', 'descLong' => self::DESCPROD,
                'price' => 88.93, 'discountPerc' => 5, 'discounted' => 0, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Audi Q7', 'catId' => 4,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Jeep Compass', 'catId' => 4,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))],
            ['name' => 'Alfa Romeo Stelvio', 'catId' => 4,
                'descShort' => 'Caratteristiche HardDisk4', 'descLong' => self::DESCPROD,
                'price' => 78.66, 'discountPerc' => 7, 'discounted' => 01, 
                'image' => fread(fopen("./public/images/piccole.png", 'rb'), filesize("./public/images/piccole.png"))]
        ]);

        DB::table('utente')->insert([
            ['nome' => 'Giacomo', 'cognome' => 'Verdi', 'email' => 'clie@clie.it', 'username' => 'clieclie',
                'password' => Hash::make('clieclie'), 'role' => 'user','created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Marco', 'surname' => 'Bianchi', 'email' => 'staff@staff.it', 'username' => 'staffstaff',
                'password' => Hash::make('staffstaff'), 'role' => 'staff', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Mario', 'surname' => 'Rossi', 'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'role' => 'admin', 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")]
        ]);
    }
}
