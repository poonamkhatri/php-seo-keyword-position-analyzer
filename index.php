    <?php
    // You can download this file from here https://cdn.dataforseo.com/v3/examples/php/php_RestClient.zip
    require('RestClient.php');
    $api_url = 'https://api.dataforseo.com/';
    try {
      // Instead of 'login' and 'password' use your credentials from https://app.dataforseo.com/api-dashboard
      $client = new RestClient($api_url, null, 'poonam.khatri.691@gmail.com', 'your api key');
    } catch (RestClientException $e) {
      echo "\n";
      print "HTTP code: {$e->getHttpCode()}\n";
      print "Error code: {$e->getCode()}\n";
      print "Message: {$e->getMessage()}\n";
      print  $e->getTraceAsString();
      echo "\n";
      exit();
    }
    $post_array = array();
    // You can set only one task at a time
    $post_array[] = array(
      "language_code" => "en",
      "location_code" => 2840,
      "keyword" => mb_convert_encoding("poonam khatri", "UTF-8")  //poonam khatri is keyword to be use for seo 
    );
    try {
      // POST /v3/serp/bing/organic/live/advanced
      // in addition to 'bing' and 'organic' you can also set other search engine and type parameters
      // the full list of possible parameters is available in documentation
      $result = $client->post('/v3/serp/bing/organic/live/advanced', $post_array);
      print_r($result);
      // do something with post result
    } catch (RestClientException $e) {
      echo "\n";
      print "HTTP code: {$e->getHttpCode()}\n";
      print "Error code: {$e->getCode()}\n";
      print "Message: {$e->getMessage()}\n";
      print  $e->getTraceAsString();
      echo "\n";
    }
    $client = null;
    ?>