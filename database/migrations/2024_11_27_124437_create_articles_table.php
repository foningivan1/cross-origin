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
            $table->id(); // Identifiant unique pour chaque article
            $table->string('title'); // Titre de l'article
            $table->string('author')->nullable(); // Auteur de l'article (nullable si inconnu)
            $table->date('publication_date'); // Date de publication
            $table->string('category'); // Catégorie de l'article (exemple : sport, politique)
            $table->text('content'); // Contenu de l'article
            $table->string('source'); // Nom de la source (exemple : Le Monde)
            $table->timestamps(); // Champs created_at et updated_at
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
