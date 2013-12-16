<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

    private $_id;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $model = User::model()->findByAttributes(array('username' => $this->username ));
        if ($model === null) {
            $model = User::model()->findByAttributes(array('email_address' => $this->username));
        }
        if ($model === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if (!User::validatePassword($this->password,$model->hash_code,$model->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else if ($model->is_activated == 0) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else {
            $this->_id = $model->id;
            $this->setState('username', $model->username);
            $this->setState('user_id', $model->id);
            $this->setState('isRole', $model->role_id);
            $this->errorCode = self::ERROR_NONE;

            $model->last_login = date("Y-m-d H:i:s", time());
            $model->is_online = 1;
            $model->oldPicture = $model->picture;
            $model->save(false);
        }
        return !$this->errorCode;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId() {
        return $this->_id;
    }

}
