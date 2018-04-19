<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_employee = Role::where('name', 'employee')->first();
   		$role_admin  = Role::where('name', 'admin')->first();
   		$role_owner = Role::where('name', 'owner')->first();
	    $employee = new User();
	    $employee->name = 'Employee Name';
	    $employee->email = 'employee@example.com';
	    $employee->password = bcrypt('secret');
	    $employee->save();
	    $employee->roles()->attach($role_employee);
	    $admin = new User();
	    $admin->name = 'Admin Name';
	    $admin->email = 'admin@example.com';
	    $admin->password = bcrypt('secret');
	    $admin->save();
	    $admin->roles()->attach($role_admin);
	    $owner = new User();
	    $owner->name = 'Owner Name';
	    $owner->email = 'owner@example.com';
	    $owner->password = bcrypt('secret');
	    $owner->save();
	    $owner->roles()->attach($role_admin);
    }
}
