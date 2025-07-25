<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id(); //idカラム
            $table->string('name', 20); //nameカラム
            $table->string('password', 255);
            $table->timestamps(); //crated_at updated_at

            $table->index('name'); //nameにインデックス設定
            $table->unique('name'); //nameにユニーク制約設定

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
        Schema::create('accounts', function (Blueprint $table) {
            $table->dropColumn('accounts_name');
        });
    }
};
