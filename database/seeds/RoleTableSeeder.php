<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'Utente';
        $role_user->description = 'Utente';
        $role_user->save();

        $role_ps = new Role();
        $role_ps->name = 'Profissional';
        $role_ps->description = 'Profissional';
        $role_ps->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Admin';
        $role_admin->save();
    }
}
