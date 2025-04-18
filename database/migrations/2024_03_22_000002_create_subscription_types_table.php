<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subscription_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('duration_type', ['day', 'hour', 'month', 'year', 'sessions', 'unlimited'])->comment('نوع المدة');
            $table->integer('duration_value')->nullable()->comment('قيمة المدة (عدد الأيام/الساعات/الشهور/السنوات/الحصص)');
            $table->boolean('is_limited_sessions')->default(false)->comment('هل هو محدود بعدد حصص');
            $table->integer('sessions_count')->nullable()->comment('عدد الحصص');
            $table->integer('sessions_validity_days')->nullable()->comment('صلاحية الحصص بالأيام');
            $table->decimal('price', 10, 2);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscription_types');
    }
};