<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $permissions = [
            'create-post', 'edit-post', 'delete-post',
            'view-emails', 'view-messages', 'view-registered-users', 'edit-registered-users', 'delete-registered-users',
            'view-active-loans','view-pending-loans','view-denied-loans','payments-update','view-loan-agreement-forms',
            'review-loan-applications','upload-settlements','roles-permissions','approvals','send-text'
        ];
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert([
                'name' => $permission,
                'guard_name' => 'web',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }

      
    }
}
