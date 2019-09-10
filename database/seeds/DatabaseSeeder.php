<?php

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
        $this->call([
            AuthorsTableSeeder::class,
            BooksTableSeeder::class,
            UsersSeeder::class
            ]);
        
    }
}
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        \App\User::create([
        	'id'=>1,
            'email' => 'teste@gmail.com',
            'password' => Hash::make('senha')
        ]);
        \App\User::create([
        	'id'=>2,
            'email' => 'teste2@gmail.com',
            'password' => Hash::make('senha')
        ]);
    }
}