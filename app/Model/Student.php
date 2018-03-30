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
        $user->s_email = '';
        $user->s_passwd = hash('sha1', $s_passwd);
        $user->save();
        return Message::message('success', '欢迎 '.$user->username, Message::user($user->id, $user->username));
    }
}
