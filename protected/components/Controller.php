<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public function renderJson($arrJson, $status=true) {
        if($status){
            echo CJSON::encode(array("results" => $arrJson));
        }else{
            echo CJSON::encode(array("error" => $arrJson));
        }
        Yii::app()->end();
    }

  /**
   * @var string the default layout for the controller view. Defaults to '//layouts/column1',
   * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
   */
  public function layout($layout = "frontend", $view=null) {
    if($layout == "frontend"){
      Yii::app()->theme = Yii::app()->params['themes']['name'];
      $layout = Yii::app()->params['themes']['front_end'];
      if($view==null){
        $view   = Yii::app()->params['themes']['front_view'];
      }
      $this->layout= '//'.$layout.'/'.$view;
    }elseif($layout == "backend"){
      Yii::app()->theme = Yii::app()->params['themes']['name'];
      $layout = Yii::app()->params['themes']['back_end'];
      if($view==null){
        $view   = Yii::app()->params['themes']['back_view'];
      }
      $this->layout= '//'.$layout.'/'.$view;
    }
  }

    /**
     * front details dialog controller
    */
    public $dialogDetail = false;
    public $dialogGroundUrl = '';


    /**
    * @var array context menu items. This property will be assigned to {@link CMenu::items}.
    */
    public $menu=array();
    /**
    * @var array the breadcrumbs of the current page. The value of this property will
    * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
    * for more details on how to specify this property.
    */
    public $breadcrumbs=array();
}