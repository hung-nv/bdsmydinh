<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $name;
    public $id;
    
    public function getId() {
        return $this->id;
    }
    
    public function getFullname() {
        return $this->fullname;
    }
        /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $users = array();

        $cmd = Yii::app()->db->createCommand();
        $cmd->select('id')
                ->from('admin')
                ->where('username=:username AND password=:password', array(':username' => $this->username, ':password' => md5($this->password)));
        $data = $cmd->queryRow();

        if (!User::model()->count('username=:username', array(':username' => $this->username)))
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if (!$data)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else
            $this->errorCode = self::ERROR_NONE;
        if (!$this->errorCode) {
            $this->name = $this->username;
            $this->id = $data['id'];
            return TRUE;
        }
        return FALSE;
    }
}