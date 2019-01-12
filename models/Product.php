<?php
/**
 * Created by PhpStorm.
 * User: rimark-nout
 * Date: 12.01.2019
 * Time: 23:03
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord{

    public static function tableName(){
        return 'product';
    }

    public function getPagesMenu(){
        return $htis->hasOne(PagesMenu::className(), ['id' => 'category_id']);
    }


}