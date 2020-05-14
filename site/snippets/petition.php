<?php
  // Set my API key and secret token.
  $API_KEY = 'b6c567debc2c00cdc99b6bf1183ba9ed4ced4d2630b2f12840926d4d4dac5fe2';
  $SECRET = 'e68f5ae4eeede57e517b2023785b986cea0acb17dcdbe6b99b2f607be757f6dc';

  // Get Petition ID.
  $REQUEST_URL = 'https://api.change.org/v1/petitions/get_id';
  $PETITION_URL = 'https://www.change.org/p/aux-habitants-des-hauts-de-seine-appel-%C3%A0-un-mieux-vivre-ensemble-dans-le-92';
  $parameters = array(
    'api_key' => $API_KEY,
    'petition_url' => $PETITION_URL
  );
  $query_string = http_build_query($parameters);
  $final_request_url = "$REQUEST_URL?$query_string";
  $response = file_get_contents($final_request_url);
  $json_response = json_decode($response, true);
  $petition_id = $json_response['petition_id'];
  echo 'petitionID='.$petition_id;

  // Get Petition signatures.
  $host = 'https://api.change.org';
  $endpoint = '/v1/petitions/'.$petition_id.'/signatures';
  $request_url = $host . $endpoint;
  $params = array();
  $params['api_key'] = $API_KEY;
  $query_string = http_build_query($params);
  $final_request_url = "$request_url?$query_string";
  echo $final_request_url;
  // Make the request
  $response = file_get_contents($final_request_url);
  $json_response = json_decode($response, true);
  var_dump($json_response);
  //$petition_sign = $json_response['signatures'];
  //echo 'petitionSIGN='.$petition_sign;

  // Get Petition authorization key
  $host = 'https://api.change.org';
  $endpoint = '/v1/petitions/'.$petition_id.'/auth_keys';
  $request_url = $host . $endpoint;
  $params = array();
  $params['api_key'] = $API_KEY;
  $params['source_description'] = 'This is a test description.'; // Something human readable.
  $params['source'] = 'test_source'; // Eventually included in every signature submitted with the auth key obtained with this request.
  $params['requester_email'] = 'huynhdoo@gmail.com'; // The email associated with your API key and Change.org account.
  $params['timestamp'] = gmdate("Y-m-d\TH:i:s\Z"); // ISO-8601-formtted timestamp at UTC
  $params['endpoint'] = $endpoint;
  // Build request signature and add it as a parameter
  $query_string_with_secret_and_auth_key = http_build_query($params) . $SECRET;
  $params['rsig'] = hash('sha256', $query_string_with_secret_and_auth_key);
  // Final request body
  $query = http_build_query($params);
  // Make the request
  $curl_session = curl_init();
  curl_setopt_array($curl_session, array(
    CURLOPT_POST => 1,
    CURLOPT_URL => $request_url,
    CURLOPT_POSTFIELDS => $query,
    CURLOPT_RETURNTRANSFER => true
  ));
  $result = curl_exec($curl_session);
  $json_response = json_decode($result, true);
  //var_dump($json_response);
  $petition_auth_key = $json_response['auth_key'];
  echo 'petitionAUTH='.$petition_auth_key;

  // Set up the endpoint and URL.
  $base_url = "https://api.change.org";
  $endpoint = "/v1/petitions/$petition_id/signatures";
  $url = $base_url . $endpoint;
  // Set up the signature parameters.
  $parameters = array();
  $parameters['api_key'] = $API_KEY;
  $parameters['timestamp'] = gmdate("Y-m-d\TH:i:s\Z"); // ISO-8601-formtted timestamp at UTC
  $parameters['endpoint'] = $endpoint;
  $parameters['source'] = 'test_source';
  $parameters['requester_email'] = 'huynhdoo@gmail.com'; // The email associated with your API key and Change.org account.
  $parameters['email'] = 'person@example.com';
  $parameters['first_name'] = 'John';
  $parameters['last_name'] = 'Doe';
  $parameters['address'] = '1 Market St';
  $parameters['city'] = 'Philadelphia';
  $parameters['state_province'] = 'PA';
  $parameters['postal_code'] = '19144';
  $parameters['country_code'] = 'US';

  // Build request signature.
  $query_string_with_secret_and_auth_key = http_build_query($parameters) . $SECRET . $petition_auth_key;

  // Add the request signature to the parameters array.
  $parameters['rsig'] = hash('sha256', $query_string_with_secret_and_auth_key);
  // Create the request body.
  $data = http_build_query($parameters);
  // POST the parameters to the petition's signatures endpoint.
  $curl_session = curl_init();
  curl_setopt_array($curl_session, array(
    CURLOPT_POST => 1,
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $data
  ));
  $result = curl_exec($curl_session);
  // Output  the returned JSON result.
  echo $result;
?>