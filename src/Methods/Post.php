<?php

namespace Request\Methods;

use Exception;

class Post
{
  protected static $build;
  protected static $callback;

  public static function Connection(string $url, ?string $token, string $endpoint, array $data)
  {
    try {

      if (!$url) {
        throw new Exception('Url is Empty');
      }

      self::$build = json_encode($data);

      $curl = curl_init();

      $headers = array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen(self::$build)
      );

      $headers[] = 'Authorization: Bearer ' . $token;

      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($curl, CURLOPT_POSTFIELDS, self::$build);

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLINFO_HEADER_OUT, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($curl, CURLOPT_URL, $url . $endpoint);

      $response = curl_exec($curl);

      curl_close($curl);

      return json_decode($response);
    } catch (Exception $e) {
      return $e;
    }
  }
}
