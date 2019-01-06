<?php
/**
 * Created by PhpStorm.
 * User: rimark-nout
 * Date: 02.12.2018
 * Time: 23:24
 */

namespace app\models;
use yii\db\ActiveRecord;



class MenuPage extends ActiveRecord{

    public static function tableName(){
        return 'menu_pages';
    }


}