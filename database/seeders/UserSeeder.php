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
            'name' => 'Sekretaris Kecamatan',
            'username' => 'sekretaris',
            'email' => 'sekretaris@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('sekre');

        User::create([
            'name' => 'Umpeg',
            'username' => 'umpeg',
            'email' => 'umpeg@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kesejahteraan Sosial',
            'username' => 'kesos',
            'email' => 'kesos@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Pemberdayaan Masyarakat',
            'username' => 'pm',
            'email' => 'pm@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Pemerintahan',
            'username' => 'pemerintahan',
            'email' => 'pemerintahan@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Tramtib',
            'username' => 'tramtib',
            'email' => 'tramtib@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Ancol',
            'username' => 'ancol',
            'email' => 'ancol@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Balonggede',
            'username' => 'balonggede',
            'email' => 'balonggede@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Ciseureuh',
            'username' => 'ciseureuh',
            'email' => 'ciseureuh@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Cigereleng',
            'username' => 'cigereleng',
            'email' => 'cigereleng@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Ciateul',
            'username' => 'ciateul',
            'email' => 'ciateul@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Pungkur',
            'username' => 'pungkur',
            'email' => 'pungkur@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');

        User::create([
            'name' => 'Kelurahan Pasirluyu',
            'username' => 'pasirluyu',
            'email' => 'pasirluyu@regol.go.id',
            'password' => bcrypt('Admin@123'),
        ])->assignRole('unit');
    }
}
