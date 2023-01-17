<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Self::loadUsers();
    }

    private function loadUsers(){
        DB::table('users')->delete();

        $admin = new User();
        $admin->name = 'administrador';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->roles = 'admin';
        $admin->curso_id = 1;
        $admin->materia_id = 1;
        $admin->save();
    }
}
