<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('expert')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('thumbnail');
            $table->text('content');
            $table->enum('status', ['public', 'private', 'pending'])->default('public');
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Category::class)->nullable();
            $table->boolean('is_hot')->default(false);
            $table->boolean('is_new')->default(true);
            $table->boolean('is_outstanding')->default(false);
            $table->json('tags')->nullable();
            $table->string('meta_description')->default('')->nullable();
            $table->string('meta_keywords')->default('')->nullable();
            $table->integer('views')->default(0)->nullable();
            $table->boolean('comment_enabled')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};