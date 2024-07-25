<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\BlogManagement\BlogPost\Database\create_blog_posts_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->text('tags')->nullable();
            $table->date('publish_date')->nullable();
            $table->string('writer')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->string('thumbnail_image')->nullable();
            $table->json('images')->nullable();
            $table->string('blog_type')->nullable();
            $table->string('url')->nullable();
            $table->string('privecy_status')->nullable();
            $table->tinyInteger('show_top')->default(1);

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        Schema::create('blog_post_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('blog_id')->nullable();
            $table->bigInteger('blog_category_id')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
