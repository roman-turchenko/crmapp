<?php
/**
 * Created by PhpStorm.
 * User: roman.turchenko
 * Date: 11.01.2016
 * Time: 14:46
 */

namespace app\controllers;
use \yii\web\Controller;

class SiteController extends Controller{
    public function actionIndex(){
        return 'Our CRM';
    }
}