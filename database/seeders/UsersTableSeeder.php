<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \DB::table('users')->insert([
            [
                'over_name' => '一二三',
                'under_name' => '六三四',
                'over_name_kana' => 'イズミ',
                'under_name_kana' => 'ムサシ',
                'mail_address' => 'IMCompass634@gmail.com',
                'sex' => 1,
                'birth_day' => '2000-02-01',
                'role' => 4,
                'password' => Hash::make('password634'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
