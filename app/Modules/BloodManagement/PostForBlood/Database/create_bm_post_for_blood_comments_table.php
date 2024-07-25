<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\BloodManagement\PostForBlood\Database\create_bm_post_for_blood_comments_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bm_post_for_blood_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('bm_post_for_blood_id')->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->text('comment')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bm_post_for_bloods');
    }
};
