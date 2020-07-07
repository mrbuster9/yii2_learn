<?php
namespace app\controllers;



class MyController extends AppController{

    public function actionTest($id=null) {
$vl = 'test variable';
$names = ['one','two','three'];
        //return $this->render ('test',['hi'=>$vl, 'names'=>$names]);
        return $this->render ('test',compact('vl', 'names','id'));
    }



}


?>