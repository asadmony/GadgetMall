<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'Add Product',
            'parent' => 'Product Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'View Product',
            'parent' => 'Product Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit Product',
            'parent' => 'Product Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Delete Product',
            'parent' => 'Product Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'View Orders Only',
            'parent' => 'Order Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Edit(Accept) Orders',
            'parent' => 'Order Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Add+Edit+Delete Categories and Brands',
            'parent' => 'Category and Brand Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Read Only Categories and Brands',
            'parent' => 'Category and Brand Permissions',
        ]);
        DB::table('permissions')->insert([
            'name' => 'CreateAdmin',
            'parent' => 'Admin',
        ]);
        DB::table('permissions')->insert([
            'name' => 'ReadAdmin',
            'parent' => 'Admin',
        ]);
        DB::table('permissions')->insert([
            'name' => 'UpdateAdmin',
            'parent' => 'Admin',
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteAdmin',
            'parent' => 'Admin',
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteRole',
            'parent' => 'Role',
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteRole',
            'parent' => 'Role',
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteRole',
            'parent' => 'Role',
        ]);
        DB::table('permissions')->insert([
            'name' => 'DeleteRole',
            'parent' => 'Role',
        ]);
    }
}
