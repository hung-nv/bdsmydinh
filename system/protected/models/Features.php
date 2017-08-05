<?php

/**
 * This is the model class for table "features".
 *
 * The followings are the available columns in table 'features':
 * @property integer $id
 * @property string $label
 * @property string $image
 * @property string $content
 * @property string $url
 */
class Features extends CActiveRecord {
    
    public $oldImage, $imgFile;
    
    public function setLabel() {
        return '<p style="font-weight:bold;">'.$this->label.'</p><p><img src="../images/'.$this->image.'" width="100px" /></p>';
    }
    
    public function afterFind() {
        $this->oldImage = $this->image;
        parent::afterFind();
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'features';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('label, image, url', 'length', 'max' => 255),
            array('content', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, label, image, content, url', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'label' => 'Label',
            'image' => 'Image',
            'content' => 'Content',
            'url' => 'Url',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('label', $this->label, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('url', $this->url, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Features the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
