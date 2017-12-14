<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreatePoolTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up () {
            Schema ::create ('pool', function (Blueprint $table) {
                $table -> increments ('id');
                $table -> timestamp ('created_at');
                $table -> timestamp ('updated_at') -> nullable ();
                $table -> string ('title');
                $table -> string ('description');
                $table -> date ('start_date');
                $table -> date ('end_date');
                $table -> string ('category');
                $table -> string ('img_pool') -> nullable ();
                $table -> unsignedInteger ('user_id') -> nullable ();
                // Foreing Key for user table
                $table -> foreign ('user_id')
                    -> references ('id')
                    -> on ('users')
                    -> onDelete ('cascade')
                    -> onUpdate ('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down () {
            Schema ::dropIfExists ('pool');
        }
    }
