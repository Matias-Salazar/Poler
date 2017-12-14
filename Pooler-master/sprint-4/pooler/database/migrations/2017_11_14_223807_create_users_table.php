<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUsersTable extends Migration
    {
        public function up () {
            Schema ::create ('users', function (Blueprint $table) {
                $table -> increments ('id');
                $table -> string ('name', 45);
                $table -> string ('lastname', 45);
                $table -> string ('email');
                $table -> string ('password', 255);
                $table -> date ('birth');
                $table -> timestamp ('updated_at');
                $table -> timestamp ('created_at') -> nullable ();
                $table -> unsignedInteger ('genre_id') -> nullable ();
                // Foreing Key for gender table
                $table -> foreign ('genre_id')
                    -> references ('id')
                    -> on ('gender')
                    -> onDelete ('cascade')
                    -> onUpdate ('cascade');
                $table -> string ('avatar') -> nullable ();
                $table -> unsignedInteger ('lang_id') -> nullable ();
                // Foreing key for lang table
                $table -> foreign ('lang_id')
                    -> references ('id')
                    -> on ('language')
                    -> onDelete ('cascade')
                    -> onUpdate ('cascade');
                $table -> integer ('tel_id') -> nullable ();
                // Foreing key for tel table
                $table -> integer ('country') -> nullable ();
                $table -> integer ('state') -> nullable ();
                $table -> integer ('city') -> nullable ();
                $table -> timestamp ('last_login') -> nullable ();
                $table -> string ('remember_token', 100) -> nullable ();
            });
        }

        public function down () {
            Schema ::dropIfExists ('users');
        }
    }
