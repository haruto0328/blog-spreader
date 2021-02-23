<?php

require_once 'vendor/autoload.php';

use mpyw\Cowitter\Client;


$consumer_key = 'consumerキー';
$consumer_secret = 'consumerシークレット';
$access_token = 'アクセストークン';
$access_token_secret = 'アクセストークンシークレット';

//Twitterのuser_id
$user_id = 'harutoman0328';
try {
     // Twitterの認証を通す
    $client = new Client([
        $consumer_key, $consumer_secret, $access_token, $access_token_secret,
    ]);
     // APIに接続し、ツイートを投稿する
    $status = $client->post('statuses/update', [
        'status' => 'プログラミングに関する情報を発信中！！'."\n".'ぜひ見てください！'."\n".'#プログラミング #駆け出しエンジニアと繋がりたい'."\n".'https://produce-web.net',
    ]);
     // 投稿したツイートのURLを表示する
    echo "URL: https://twitter.com/{$status->user->screen_name}/status/{$status->id_str}\n";
} catch (\RuntimeException $e) {
    // エラーが起きたら、その内容を表示する
    echo "Error: {$e->getMessage()}\n";
}
