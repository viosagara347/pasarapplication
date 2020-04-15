<?php

use Illuminate\Database\Seeder;

class TabelKomoditiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        \DB::table('komoditi')->truncate();
    
        for ($i=0; $i < 10; $i++) { 
            DB::table('komoditi')->insert([
                'nama' => $faker->sentence(1),
                'kategori' => 'Sayur',
                'stok' => $faker->numberBetween(1, 10),
                'harga' => $faker->numberBetween(500, 50000),
                'deskripsi' => $faker->text(30),
                'file' => 'dummysayur.png',
                'created_at' => now(),
                'updated_at' => now(),
                'gram' => $faker->numberBetween(1, 6000)
            ]);
        }

        for ($i=0; $i < 10; $i++) { 
            DB::table('komoditi')->insert([
                'nama' => $faker->sentence(2),
                'kategori' => 'Buah',
                'stok' => $faker->numberBetween(10, 100),
                'harga' => $faker->numberBetween(5000, 500000),
                'deskripsi' => $faker->text(30),
                'file' => 'dummybuah.png',
                'created_at' => now(),
                'updated_at' => now(),
                'gram' => $faker->numberBetween(1, 10000)
            ]);
        }

        for ($i=0; $i < 10; $i++) { 
            DB::table('komoditi')->insert([
                'nama' => $faker->sentence(3),
                'kategori' => 'Rempah',
                'stok' => $faker->numberBetween(100, 1000),
                'harga' => $faker->numberBetween(100, 100000),
                'deskripsi' => $faker->text(30),
                'file' => 'dummyrempah.png',
                'created_at' => now(),
                'updated_at' => now(),
                'gram' => $faker->numberBetween(1, 1000)
            ]);
        }

        for ($i=0; $i < 10; $i++) { 
            DB::table('komoditi')->insert([
                'nama' => $faker->sentence(4),
                'kategori' => 'BumbuDapur',
                'stok' => $faker->numberBetween(1000, 10000),
                'harga' => $faker->numberBetween(300, 3000000),
                'deskripsi' => $faker->text(30),
                'file' => 'dummybumbu.png',
                'created_at' => now(),
                'updated_at' => now(),
                'gram' => $faker->numberBetween(1, 100)
            ]);
        }

    }
}
