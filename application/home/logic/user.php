namespace app\home\logic;

class User extends \think\Model {
   function userChcekLogin($username, $password) {
     $User = \think\Loader::model('User');
     $user = $User::get(1);
     return $user;
   }
}
