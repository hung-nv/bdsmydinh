<?php

class CategoriesController extends AccessController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $module = 'categories';

    public function accessRules() {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'del', 'delete', 'getinfor'),
                'users' => array('@'),
                'expression' => (string) Yii::app()->user->authenticate($this->module)
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionGetinfor($id) {
        $this->layout = '/layouts/blank';
        $model = Yii::app()->db->createCommand('select * from categories where id=' . $id)->queryRow();
        echo json_encode($model);
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDel($id) {
        $this->loadModel($id)->delete();
        
        $menu = Menu::model()->findByAttributes(array('categories_id' => $id));
        if(isset($menu) && $menu)
            $menu->delete();
                
        echo json_encode($id);
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $modelSearch = new Categories('search');
        $modelSearch->adminCate = true;
        $modelSearch->unsetAttributes();  // clear any default values

        if (isset($_GET['Categories']))
            $modelSearch->attributes = $_GET['Categories'];

        $model = new Categories;
        if (isset($_POST['Categories'])) {
            $model->attributes = $_POST['Categories'];
            
            if (isset($_POST['Categories']['alias']) && $_POST['Categories']['alias'])
                $model->alias = $_POST['Categories']['alias'];
            else
                $model->alias = Categories::model()->convertLink($model->title);

            if (isset($_POST['Categories']['id']) && $_POST['Categories']['id']) {
                $model->updateByPk($_POST['Categories']['id'], array(
                    'title' => $model->title,
                    'alias' => $model->alias,
                    'parent_id' => $model->parent_id,
                    'meta_description' => $model->meta_description,
                    'meta_title' => $model->meta_title,
                    'status' => $model->status
                ));
                Yii::app()->user->setFlash('categories', 'Update successful!');
                $this->redirect(array('admin'));
            } else {
                if ($model->validate()) {
                    echo 1;
                    if ($model->save()) {
                        Yii::app()->user->setFlash('categories', 'Create category successful!');
                        $this->redirect(array('admin'));
                    } else {
                        var_dump($model);
                    }
                } else {
                    echo 0;
                    exit;
                    var_dump($model->getErrors());
                }
            }
        }

        $this->render('adminCate', array(
            'modelSearch' => $modelSearch,
            'model' => $model
        ));
    }

    function cv2url($text) {
        $text = str_replace(
                array(' ', '%', "/", "\\", '"', '``', '?', '<', '>', "#", "^", "`", "'", "=", "!", ":", ",,", "..", "*", "&", "--", "▄"), array('-', '', '', '', '', '', '', '', '', '', '', '', '', '-', '', '-', '', '', '', "-", "", ""), $text);
        $chars = array("a", "a", "e", "e", "o", "o", "u", "u", "i", "i", "d", "d", "y", "y");
        $uni[0] = array("á", "à", "ạ", "ả", "ã", "â", "ấ", "ầ", "ậ", "ẩ", "ẫ", "ă", "ắ", "ằ", "ặ", "ẳ", "� �");
        $uni[1] = array("Á", "À", "Ạ", "Ả", "Ã", "Â", "Ấ", "Ầ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ắ", "Ằ", "Ặ", "Ẳ", "� �");
        $uni[2] = array("é", "è", "ẹ", "ẻ", "ẽ", "ê", "ế", "ề", "ệ", "ể", "ễ");
        $uni[3] = array("É", "È", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ế", "Ề", "Ệ", "Ể", "Ễ");
        $uni[4] = array("ó", "ò", "ọ", "ỏ", "õ", "ô", "ố", "ồ", "ộ", "ổ", "ỗ", "ơ", "ớ", "ờ", "ợ", "ở", "� �");
        $uni[5] = array("Ó", "Ò", "Ọ", "Ỏ", "Õ", "Ô", "Ố", "Ồ", "Ộ", "Ổ", "Ỗ", "Ơ", "Ớ", "Ờ", "Ợ", "Ở", "� �");
        $uni[6] = array("ú", "ù", "ụ", "ủ", "ũ", "ư", "ứ", "ừ", "ự", "ử", "ữ");
        $uni[7] = array("Ú", "Ù", "Ụ", "Ủ", "Ũ", "Ư", "Ứ", "Ừ", "Ự", "Ử", "Ữ");
        $uni[8] = array("í", "ì", "ị", "ỉ", "ĩ");
        $uni[9] = array("Í", "Ì", "Ị", "Ỉ", "Ĩ");
        $uni[10] = array("đ");
        $uni[11] = array("Đ");
        $uni[12] = array("ý", "ỳ", "ỵ", "ỷ", "ỹ");
        $uni[13] = array("Ý", "Ỳ", "Ỵ", "Ỷ", "Ỹ");
        for ($i = 0; $i <= 13; $i++) {
            $text = str_replace($uni[$i], $chars[$i], $text);
        }
        return $text;
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Categories the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Categories::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Categories $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'categories-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
