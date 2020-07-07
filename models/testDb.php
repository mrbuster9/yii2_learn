<?php

namespace app\models;

use yii\db\ActiveRecord;


class testDb extends ActiveRecord{


//Имя таблицы
public static function tableName (){

    return 'days';
}

}



?>