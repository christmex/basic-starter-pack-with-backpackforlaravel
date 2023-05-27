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
            
            $role = Role::Create(['name' => 'Super Admin']);
            $permission = Permission::Create(['name' => 'posts.view']);

            $super_admin = \App\Models\User::Create([
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' => bcrypt('superzzz'),
            ]);

            $user = \App\Models\User::Create([
                'name' => 'user',
                'email' => 'user@admin.com',
                'password' => bcrypt('superzzz'),
            ]);

            $super_admin->assignRole('Super Admin');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        
    }
}
