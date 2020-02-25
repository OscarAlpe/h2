<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Foto extends Widget
{
    public $nombre = "nada.png";
    public $alternativo = "nada";
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        return Html::img("@web/imgs/$this->nombre", [
            "alt" => $this->alternativo,
            "class" => "img-responsive",    
        ]);
    }
}