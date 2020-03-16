<?php
namespace backend\controllers;         
use Yii;       
use yii\web\Controller;         
use zxbodya\yii2\elfinder\ConnectorAction; 
      
class ElFinderController extends Controller         
{         
    public function actions()         
    {         
        return [         
            'connector' => array(         
                'class' => ConnectorAction::className(),         
                'settings' => array(         
                    'root' => Yii::getAlias('@webroot') . '/media/uploads/',                    
                    'URL' => Yii::getAlias('@web') . '/media/uploads/',         
                    'rootAlias' => 'Home',         
                    // 'mimeDetect' => 'none',
                    'uploadAllow' => ['image/gif', 'image/png', 'image/jpeg']       
                )                    
            ),         
        ];                    
    }         
}
?>
