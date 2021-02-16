<?php

require_once 'vendor/autoload.php';

use mpyw\Cowitter\Client;


$consumer_key = 'zjj5h1rSXInbR5wWEXkMyTgkI';
$consumer_secret = 'FXP2Zm7ONoGkBxEhLS1DSEQ4xkoBGjHgWsqKB0OUTbIZKLE34p';
$access_token = '1237583956167421953-IS07njFOGEwwHr7W85zaEb9GJeVcyt';
$access_token_secret = 'Rwq5QvnGzLqTu5znyaiEacWl4V8umBtDQAMrXd0Ct0IRv';

//Twitterのuser_id
$user_id = 'harutoman0328';
try {
     // Twitterの認証を通す
    $client = new Client([
        $consumer_key, $consumer_secret, $access_token, $access_token_secret,
    ]);
     // APIに接続し、ツイートを投稿する
    $status = $client->post('statuses/update', [
        'status' => 'heroku試験中！！（By Bot）'."\n".'#プログラミング #駆け出しエンジニアと繋がりたい'."\n".'https://produce-web.net',
    ]);
     // 投稿したツイートのURLを表示する
    echo "URL: https://twitter.com/{$status->user->screen_name}/status/{$status->id_str}\n";
} catch (\RuntimeException $e) {
    // エラーが起きたら、その内容を表示する
    echo "Error: {$e->getMessage()}\n";
}
