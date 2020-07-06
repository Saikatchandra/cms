<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cohensive\Embed\Facades\Embed;

class Vedio extends Model
{
     public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->link)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 100]);
        return $embed->getHtml();
    }
}
