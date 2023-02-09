<?php
namespace app\models;

use Yii;
use yii\base\Model;
use webvimark\modules\UserManagement\models\User;
use pusher\Pusher;
require __DIR__ . '/../vendor/pusher/pusher-php-server/src/Pusher.php';


class GlobalFunc extends Model
{

    public static function flashmessage($type,$icon,$title,$message, $duration = 3000)
    {
        Yii::$app->getSession()->setFlash('success', [
            'type' => $type,
            'duration' => $duration,
            'icon' => 'fas fa-'.$icon.'',
            'message' => $message,
            'title' => $title,
            'positonY' => 'top',
            'positonX' => 'right'
        ]);
    }

    public static function getUserName($id)
    {
        $user = User::findOne($id);
        if($user == null) {
            return 'user tidak ditemukan';
        }
        return $user->username;
    }

    public static function getDateFormat($date)
    {
        return date('d M Y - H:i', strtotime($date));
    }

    public static function getRupiah($value)
    {
        return 'Rp. '.number_format($value,0,',','.');
    }

    public static function notification($channel,$event,$message)
    {
        $options = array(
            'cluster' => Yii::$app->params['pusher']['cluster'],
            'useTLS' => true
        );
        $pusher = new Pusher(
        Yii::$app->params['pusher']['key'],// key
        Yii::$app->params['pusher']['secret'],// secretkey
        Yii::$app->params['pusher']['app_id'],//app_id
        $options
        );
    
        $data['message'] = $message;
        $pusher->trigger($channel, $event, $data);
    }

    public static function slugify($text, string $divider = '-')
    {
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }


}
