<?php

    namespace App\Models;

    use App\Core\Model;

    class Post extends Model
    {
        public function getShortText(){
            return mb_substr($this->content, 0, 150);
        }

    }