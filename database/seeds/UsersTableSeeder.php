<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Pak Nawawi',
            'email' => 'ketua@ketua.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'ketua',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Pak Lakardi',
            'email' => 'anggota@anggota.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'user',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
