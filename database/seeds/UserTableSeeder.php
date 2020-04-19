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
        $role_admin  = Role::where('name', 'admin')->first();
        $role_customer  = Role::where('name', 'customer')->first();

        $admin = new User();
        $admin->name = 'Estore Admin';
        $admin->email = 'estore@estore.com';
        // $admin->phone = '080111234343';
        $admin->password = bcrypt('secret');
        $admin->email_verified_at = NOW();
        $admin->save();
        $admin->roles()->attach($role_admin);


        $customer = new User();
        $customer->name = 'Estore customer';
        $customer->email = 'estorecustomer@estore.com';
        // $customer->phone = '08099897489';
        $customer->password = bcrypt('oluwa123');
        $customer->email_verified_at = NOW();
        $customer->save();
        $customer->roles()->attach($role_customer);


        $customer = new User();
        $customer->name = 'Estore customer';
        $customer->email = 'raphealenike@gmail.com';
        // $customer->phone = '08099897489';
        $customer->password = bcrypt('raph123');
        $customer->email_verified_at = NOW();
        $customer->save();
        $customer->roles()->attach($role_customer);
    }
}
