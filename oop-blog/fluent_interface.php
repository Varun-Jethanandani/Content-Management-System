<?php
class Tweet{
    protected $data;

    public function from($from){
        $data['from'] = $from;
        return $this;
    }
    public function withStatus($status){
        $data['status'] = $status;
        return $this;
    }
    public function inReplyTo($id){
        $data['id'] = $id;
        return $this;
    }
    public function send(){
        //GENERATE Twitter API request using info in $data
        //POST https://api.twitter.com/1.1/statuses/update.json
        //with http_build_query($data)
        //return $id;
        return 1;
    }
}

$tweet = new Tweet();
$id = $tweet->from("@studylink")
	->withStatus('Laravel 5.7 Released! #laravel')
    ->send();

$reply = new Tweet();
$id2 = $reply->withStatus("I <3 Unicode!")
    ->from("@sl")
    ->inReplyTo($id)
    ->send();
