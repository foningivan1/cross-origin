<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');             // Titre de l'article
        $table->string('author');            // Auteur de l'article
        $table->date('published_at');        // Date de publication
        $table->unsignedBigInteger('category_id'); // Catégorie
        $table->text('content');             // Contenu de l'article
        $table->unsignedBigInteger('source_id');   // Source de l'article
        $table->timestamps();

        // Clés étrangères
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');
       });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
