<?php

class SiteController extends Controller
{

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $model = News::model()->findByPk($this->site->news_id);
        $firstContent = ExplainData::model()->findAllByAttributes(array('news_id' => $model->id));
        $features = Features::model()->findAll();

        $contact = new Contact;

        if (isset($_POST['Contact'])) {
            $contact->attributes = $_POST['Contact'];
            if ($contact->validate()) {
                $contact->save();

                $subject = 'Đăng ký mới từ BdsMydinhPearl';
                $content = '<html><head><title>' . $subject . '</title><meta http-equiv=\'Content-Type\' content=\'text/html; charset=UTF-8\'></head><body>
                    <p>Tên: ' . $contact->name . '</p>' .
                    '<p>Email: ' . $contact->email . '</p>' .
                    '<p>Số điện thoại: ' . $contact->mobile . '</p>' .
                    '<p>Thông điệp: ' . $contact->content . '</p>
                    </body></html>';
                $this->sendmail($this->site->mail_to, $this->site->account_send, $this->site->password_send, $subject, $content, 'BdsMydinhpearl');

                $cs = Yii::app()->clientScript;
                $cs->registerScript('my_script', 'alert("Chúc mừng bạn đã đăng ký thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất có thể!");', CClientScript::POS_READY);
            }
        }

        $this->meta = array(
            'meta_title' => $this->site->meta_title,
            'meta_description' => $this->site->meta_description
        );

        $this->render('index', array(
            'model' => $model,
            'features' => $features,
            'firstContent' => $firstContent,
            'contact' => $contact
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        $this->layout = '//layouts/column2';
        $this->render('error');
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                    "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

}