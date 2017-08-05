<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public $defaultAction = 'login';

    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionSetting() {
        $this->isEditor = true;
        $model = Setting::model()->findByPk(1);
        $dataF = new Features('search');
        $dataF->unsetAttributes();  // clear any default values
        $features = new Features;

        if (isset($_POST['Setting'])) {
            $model->attributes = $_POST['Setting'];
            if ($model->save())
                $this->redirect(array('setting'));
        }

        if (isset($_POST['Features'])) {
            $features->attributes = $_POST['Features'];
            $features->imgFile = CUploadedFile::getInstance($features, 'image');
            if ($features->save()) {

                $upload = false;

                if (isset($features->imgFile) && $features->imgFile) {
                    $fileName = preg_replace('/\s+/', '', $model->id . '_' . $this->cv2url($features->imgFile->getName()));
                    $features->imgFile->saveAs('../images/' . $fileName);
                    $upload = true;
                }

                if ($upload) {
                    $features->image = $fileName;
                    $features->save();
                }
                
                $url = Yii::app()->request->requestUri.'#features';

                $this->redirect($url);
            }
        }

        $this->render('setting', array(
            'model' => $model,
            'features' => $features,
            'dataF' => $dataF
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->layout = '/layouts/column3';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}