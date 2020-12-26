<?php


namespace App;


use App\Models\Token;

class NotificationHelper
{


    static function notifyByFirebase($title, $body, $tokens, $data = [])        // paramete 5 =>>>> $type
    {

        $registrationIDs = $tokens;

        $fcmMsg = array(
            'body' => $body,
            'title' => $title,
            'sound' => "default",
            'color' => "#203E78"
        );

        $fcmFields = array(
            'registration_ids' => $registrationIDs,
            'priority' => 'high',
            'notification' => $fcmMsg,
            'data' => $data
        );
        $headers = array(
            'Authorization: key=AAAAmRcQLuk:APA91bGilE1ToEfszThzFhAZHciqXAff6Vo7bnMuTj8Sgmj_2oKpYlNbUN_bLHLsUFyo5CvxT40inbBc4qhBNuzAGIq35bz33OxGLTX0NNpqljggbO5eGpvDUqzRTjboq6ss6-qwQZ_O',
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmFields));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    static function sendNotification($model, array $notifierIds, $relation, $title, $body, $data_type = 'admin', $data = []): void
    {
        $notification = $model->notifications()->create([
            'title' => $title,
            'body' => $body
        ]);

        $notification->$relation()->attach($notifierIds);

        if (Token::whereIn('tokenable_id', $notifierIds)->count()) {
            $tokens = Token::whereIn('tokenable_id', $notifierIds)->pluck('token')->toArray();

            $data =
                [
                    $data_type => $data
                ];

            //send notification for client tokens
            NotificationHelper::notifyByFirebase($notification->title, $notification->body, $tokens, $data);

        }
    }

}
