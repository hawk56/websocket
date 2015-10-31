<?php

//namespace Websocket\Auth;

class Auth
{

    private $name_array = [
        'Акула',
        'Аллигатор',
        'Альпака',
        'Анаконда',
        'Антилопа',
        'Архар',
        'Аспид',
        'Бабуин',
        'Баран',
        'Барибал',
        'Барсук',
        'Бекас',
        'Белка',
        'Бизон',
        'Бобр',
        'Бурундук',
        'Бык',
        'Варан',
        'Верблюд',
        'Волк',
        'Выдра',
        'Выхухоль',
        'Гадюка',
        'Газель',
        'Гамадрил',
        'Геккон',
        'Гепард',
        'Гиббон',
        'Гиена',
        'Гиппопотам',
        'Гну',
        'Горилла',
        'Гризли',
        'Гусь',
        'Дикобраз',
        'Динго',
        'Динозавр',
        'Енот',
        'Ехидна',
        'Ёж',
        'Жаба',
        'Жираф',
        'Заяц',
        'Зебра',
        'Змея',
        'Зубр',
        'Игуана',
        'Индейка',
        'Индюк',
        'Ирбис',
        'Кабан',
        'Кайман',
        'Катран',
        'Кашалот',
        'Квакша',
        'Кенгуру',
        'Кит',
        'Кобра',
        'Коала',
        'Коза',
        'Козёл',
        'Койот',
        'Конь',
        'Корова',
        'Кот',
        'Кошка',
        'Крокодил',
        'Кролик',
        'Крот',
        'Крыса',
        'Кряква',
        'Куница',
        'Курица',
        'Лама',
    ];
    public $name;
    public $id;

    public function register(){
        //echo "construct " . $this->name[0];
        if(!isset($_COOKIE['auth'])) {
            //$this->name = $this->name_array[rand(0, 70)];
            $this->name = 'user_'.rand(1, 100);
            /*setcookie('auth', md5(time()));
            setcookie('name', $this->name);*/
            $db = new DB();
            $db->query("INSERT INTO users
                            (
                                username,
                                session_time
                            )
                            VALUES
                            (
                                '" . $this->name . "',
                                " . time() . "
                            )");
            $result = $db->query("SELECT MAX(id) AS id
                            FROM users");
            if($row = $db->fetch_array($result))
            {
                $this->id = $row['id'];
                setcookie('user_id', $row['id']);
                setcookie('auth', md5(time()));
                setcookie('name', $this->name);

            }
        }
        else
        {
            $this->name = $_COOKIE['name'];
            $this->id = $_COOKIE['user_id'];
        }
        return $this->name;
    }
    public function login($login, $pass){
        //echo "construct " . $this->name[0];
        if(!isset($_COOKIE['auth'])) {
            $db = new DB();
            $sql = "SELECT *
                            FROM users
                            WHERE username = '" . $login . "'";
            $result = $db->query($sql);
            if ($row = $db->fetch_array($result)) {

                if ($row['password'] == md5($pass)) {
                    $this->name = $login;
                    $this->id = $row['id'];
                    setcookie('user_id', $row['id']);
                    setcookie('auth', md5(time()));
                    setcookie('name', $this->name);
                }
                else
                {
                    die('error login');
                }

            } else {
                die('login error');
            }
        }
        else
        {
            $this->name = $_COOKIE['name'];
            $this->id = $_COOKIE['user_id'];
        }
        return $this->name;
    }
}