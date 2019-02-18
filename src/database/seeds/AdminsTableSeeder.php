<?php
namespace Untrefmedia\UMAdmin\Database\Seed;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // crea el rol 'super-admin'
        Role::create(['name' => 'super-admin', 'guard_name' => 'admin']);

        // limpia la tabla e inserta un usuario administrador
        \DB::table('admins')->delete();

        \DB::table('admins')->insert(array(
            0 => array(
                'id'             => 1,
                'name'           => 'admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$qet9r8CSyDnXMDRz3zWfeOsNjwH2pOh1VrhG1NFSTqUEzRXDxg/mK',
                'remember_token' => '4wcMLvPX3CzlM4rmxeVF4wc2rAPjVTTdgXLCu5WIVWBhL3qoBcSIXjeAPwjq',
                'created_at'     => '2019-02-07 20:05:53',
                'updated_at'     => '2019-02-07 20:05:53'
            )
        ));

        $admin = \App\Admin::findOrFail(1);
        $admin->assignRole('super-admin');
    }
}
