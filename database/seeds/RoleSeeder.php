<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Hchs\Judge\Permission\Role::class)->create(['name' => 'root']);
    }
}
