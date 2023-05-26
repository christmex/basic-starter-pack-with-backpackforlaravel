<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            // Reset cached roles and permissions
            app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
            
            $role = Role::firstOrCreate(['name' => 'administrator']);
            $permission = Permission::firstOrCreate(['name' => 'manage all']);
            $role->givePermissionTo('manage all');

            $super_admin = \App\Models\User::firstOrCreate([
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => bcrypt('superzzz'),
            ]);

            $super_admin->assignRole('administrator');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        
    }
}
