<?php
/**
 * Created by PhpStorm.
 * User: rimark-nout
 * Date: 12.01.2019
 * Time: 23:03
 */

namespace app\models;
use yii\db\ActiveRecord;


class PagesMenu extends ActiveRecord{

    public static function tableName(){
        return 'menu_pages';
    }

    public function getProducts(){
        return $htis->hasMany(Product::className(), ['category_id' => 'id']);
    }


}