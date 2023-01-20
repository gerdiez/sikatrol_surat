<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Tata Usaha',
            'username' => 'tatausaha',
            'email' => 'tatausaha@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('tata');

        User::create([
            'name' => 'Unit Kerja',
            'username' => 'unitkerja',
            'email' => 'unitkerja@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Sekretaris Kecamatan',
            'username' => 'sekretaris',
            'email' => 'sekretaris@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('sekre');
    }
}
