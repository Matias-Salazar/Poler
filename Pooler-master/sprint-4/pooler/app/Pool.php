<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Pool extends Model
    {
        protected $table = "pool";

        protected $fillable = [
            'title', 'description', 'start_date', 'end_date', 'category', 'user_id','img_pool'
        ];
    }
