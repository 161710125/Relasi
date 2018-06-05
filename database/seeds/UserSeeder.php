<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        $admin = new User();
        $admin->name="Admin Rental Mobil";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name="Member Rental Mobil";
        $member->email="member@gmail.com";
        $member->password=bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
