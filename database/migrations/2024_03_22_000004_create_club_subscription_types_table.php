<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('club_subscription_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->constrained()->onDelete('cascade');
            $table->foreignId('subscription_type_id')->constrained()->onDelete('cascade');
            $table->decimal('price', 10, 2)->comment('السعر الخاص بهذا النادي');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // كل نادي يمكن أن يكون له نوع اشتراك واحد فقط من كل نوع
            $table->unique(['club_id', 'subscription_type_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('club_subscription_types');
    }
};