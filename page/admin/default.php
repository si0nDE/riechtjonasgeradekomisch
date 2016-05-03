<?php
function write_default()
{
    $data = '{
  "core": {
    "status": true,
    "question": "Does Jonas smell very weird?",
    "firstname": "Jonas",
    "twitter": {
      "owner": "manchmalfieber",
      "nick": "aledjonesworld"
    },
    "true": {
      "text": "YES!",
      "long": "you smell very weird!"
    },
    "false": {
      "text": "Nope.",
      "long": "what\'s going on? You don\'t smell weird anymore!"
    },
    "tweetid": false,
    "url": "http:\/\/riechtjonasgeradekomisch.com",
    "version": "1.6.2"
  },
  "admin": {
    "title": "admin@riechtjonasgeradekomisch.com",
    "tweet_theme": "light",
    "template": "default",
    "lang": "en"
  }
}';
    file_put_contents('../lib/data/content.json', $data);
    return true;
}