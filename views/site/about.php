<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\testDb;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;


$mys = testDb::find()->asArray()->all();

debug ($mys);

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:


    </p>

    <code><?= __FILE__ ?></code>
</div>
