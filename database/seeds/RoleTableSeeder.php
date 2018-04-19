<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   		$role_employee = new Role();
	    $role_employee->name = 'employee';
	    $role_employee->description = 'employee of the branch';
	    $role_employee->save();
	    $role_owner = new Role();
	    $role_owner->name = 'owner';
	    $role_owner->description = 'Owner of the actual branch';
	    $role_owner->save();
	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'Curves Philippines admins';
	    $role_admin->save();
    }
}
