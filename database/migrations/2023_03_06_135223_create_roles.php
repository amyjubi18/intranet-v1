<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1= Role::create(['name'=>'gtic']);
        $role2= Role::create(['name'=>'gerente-admin']);
        $role3= Role::create(['name'=>'administrador']);
        Permission::create(['name'=>'ver dashboard']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
