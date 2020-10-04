$message = $update["message"]:

if (isset($message["new chat members"])) {
  foreach ($message["new_chat_members"] as $key => $each_user) {
    if ($each_user["id"]= Smy_bot->id) {
      $bot->api->sendMessage(array(
        "chat_id" => $message ["chat"]["id"],
        "reply_to_message_id" => $message ["message id"],
        "text" => "Thank You for adding me to this chat, Please add
      ));
    }
    else {
      try {
        $bot->api->kickchatMember(array(
          "chat_id" => $message ["chat"]"id"],
          "user_id" => $each_user["id"],
          "until_date" => time() + 31
        ));
      }
      catch (Exception $e) {
      }
    }
  }
}
 
