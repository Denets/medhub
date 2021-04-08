<?php

namespace App\Model;

use App\Handler\Model;

class UserModel extends Model {
    private $table = "users";

    /**
     * @param $email
     * @return mixed
     */
    static function showAuth($email)
    {
        $user = new UserModel();
        $query = $user->authQuery($email);

        $result = $user->first($query);

        return $result;
    }

    /**
     * @param $email
     * @return string
     */
    public function authQuery($email)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE login='" . $email . "'";

        return $sql;
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteById($id)
    {
      return $this->deleteFromTable($this->table, $id);
    }
}
