<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $role_utente = Role::where('name', 'Utente')->first();
    $role_ps = Role::where('name', 'Profissional')->first();
    $role_admin = Role::where('name', 'Admin')->first();

    $utente = new User();
    $utente->name = 'Utente';
    $utente->email = 'utente@examplo.com';
    $utente->password = bcrypt('utente');
    $utente->save();
    $utente->roles()->attach($role_utente);

    $ps = new User();
    $ps->name = 'Profissional';
    $ps->email = 'ps@examplo.com';
    $ps->password = bcrypt('ps');
    $ps->save();
    $ps->roles()->attach($role_ps);

    $admin = new User();
    $admin->name = 'Admin';
    $admin->email = 'admin@examplo.com';
    $admin->password = bcrypt('admin');
    $admin->save();
    $admin->roles()->attach($role_admin);
  }
}
