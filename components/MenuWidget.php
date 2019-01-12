<?php
/**
 * Created by PhpStorm.
 * User: rimark-nout
 * Date: 12.01.2019
 * Time: 23:19
 */

namespace app\components;
use yii\base\Widget;
use app\models\PagesMenu;

class MenuWidget extends Widget{

    public $tpl;
    public $data;
    public $tree;
    public $MenuHtml;

    public function init(){
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        $this->data = PagesMenu::find()->all();
        debag($this->data);
        return $this->tpl;
    }

}