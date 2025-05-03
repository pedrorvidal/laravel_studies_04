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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // coluna ID
            $table->string('username', 100)->nullable();
            $table->string('password', 200)->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps(); // 2 colunas created_at e updated_at
            $table->softDeletes(); // create column deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
