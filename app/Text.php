<?php

namespace App;

use cebe\markdown\Markdown as Markdown;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    protected $fillable = ['texts'];

    public function parse() {
        //newでインスタンスを作る
        $parser = new Markdown();
        //textsをパースする
        return $parser->parse($this->texts);
    }

    public function getMarkBodyAttribute() {
        return $this->parse();
    }
}
