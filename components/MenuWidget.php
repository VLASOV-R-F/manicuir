<?php
/**
 * Created by PhpStorm.
 * User: rimark-nout
 * Date: 02.12.2018
 * Time: 23:36
 */

namespace app\components;
use yii\base\Widget;
use app\models\MenuPage;


class MenuWidget extends Widget{

    public $tpl;
    public $date;
    public $tree;
    public $menuHtml;

    public function init(){
        parent::init();
        if ($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        $this->date = MenuPage::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        return $this->menuHtml;
    }

    public function getTree(){
        $tree = [];
        foreach ($this->date as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->date[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree){
        $str = '';
        foreach ($tree as $menupage){
            $str .= $this->catToTemplate($menupage);
        }
        return $str;
    }

    protected function catToTemplate($menupage){
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_start();
    }

}