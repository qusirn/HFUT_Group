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
    public static function user($user){
        $user = [
            'user_id' => $user->s_id,
            'user_name' => $user->s_username,
            'user_header' => $user->s_header,
        ];
        return $user;
    }
    public static function none_user(){
        return -1;
    }
}
 ?>
