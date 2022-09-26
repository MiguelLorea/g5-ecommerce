<?php

  return

  array(
    "base_url" => "http://localhost/socialauthphp/hydridauth.php",
    "providers" => array(
      "Twitter" => array(
        "enabled" => true,
        "keys" => array(
          "key" =>"JbqQssCEHBKAWjoBXAdYYutBl",
          "secret" =>"UzZlCYlURriWR7CjcHY7cBwwQZg5Hddi822uuCb3wH33J44fX9"
        ),
        "includedEmail" => true
      ),
      "Facebook" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "376529701274864",
          "secret" => "8eefc7104c8f5b63a8717d891189cb33"
        ),
        "scope" => "email"
      ),
      "Google" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "154422521712-5eruc51oth62ool5t3lvlo7piosd43im.apps.googleusercontent.com",
          "secret" => "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"
        ),
      ),
      "TwitchTV" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "dj5owk9tgig5xgkpr0nh2eun2byi35",
          "secret" => "h73qlfx8hqkiuyb5lgaoyr7bpggdx8"
        ),
      )
    )
  )

 ?>
