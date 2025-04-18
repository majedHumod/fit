<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('user_type', ['subscriber', 'club_owner', 'admin'])
                  ->default('subscriber')
                  ->after('password')
                  ->comment('نوع المستخدم: مشترك، صاحب نادي، مدير');
            
            $table->string('phone')->nullable()->after('email')->unique();
            $table->foreignId('company_id')->nullable()->after('user_type')->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropColumn(['user_type', 'phone', 'company_id']);
        });
    }
};