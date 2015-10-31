<?php

class Users {
    public static function allUsers(){
        $db = new DB();

        $sql = "SELECT *
                    FROM users";
        $result = $db->query($sql);

        while($row = $db->fetch_array($result))
        {
            $users[] = [
                'id' => $row['id'],
                'username' => $row['username'],
            ];
        }
        return $users;
    }
}