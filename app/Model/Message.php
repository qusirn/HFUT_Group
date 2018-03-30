<?php
namespace App\Model;

class Message{
    public static function message($value, $message, $user) {
        $messages = [
            'statue' => [
                'value' => $value,
                'message' => $message,
            ],
            'user' => $user
        ];
        return $messages;
    }
    public static function user($user_id, $user_name){
        $user = [
            'user_id' => $user_id,
            'user_name' => $user_name,
        ];
        return $user;
    }
    public static function none_user(){
        return -1;
    }
}
 ?>
