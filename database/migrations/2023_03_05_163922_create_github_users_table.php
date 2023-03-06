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
        Schema::create('github_users', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('name');
            $table->string('avatar_url');
            $table->string('html_url');
            $table->string('followers');
            $table->string('following');
            $table->string('public_repos');
            $table->string('public_gists');
            $table->date('created_at');
            $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('github_users');
    }
};
