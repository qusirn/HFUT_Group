<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Message;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 's_id';
    protected $fillable = [];
    protected $hidden = [];

    public function register($s_username, $s_tel, $s_passwd){
        $exist = Student::where('s_tel', $s_tel)->get();
        if(sizeof($exist) != 0){
            return Message::message('error', '学生已存在', Message::none_user());
        }
        $user = new Student;
        $user->s_username = $s_username;
        $user->s_tel = $s_tel;
        $user->s_email = "未绑定邮箱";
        $user->s_passwd = hash('sha1', $s_passwd);
        $user->save();
        return Message::message('success', '欢迎 '.$user->s_username, Message::user($user));
    }

    public function login($tel, $password){
        $user = Student::where('s_tel', $tel)->first();
        if($user == NULL){
            return Message::Message('error', '学生不存在', Message::none_user());
        }
        if(hash('sha1', $password) == $user->s_passwd){
            return Message::Message('success', '欢迎 '.$user->s_username, Message::user($user));
        }else{
            return Message::Message('error', '错误，密码不正确！', Message::none_user());
        }
    }
}
