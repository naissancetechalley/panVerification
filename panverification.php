<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://staging.eko.in:25004/ekoapi/v1/pan/verify',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'pan_number=CTUGE1616I&purpose=1&initiator_id=9971771929&purpose_desc=onboarding&customer_mobile=1234567890',
  CURLOPT_HTTPHEADER => array(
    'developer_key: becbbce45f79c6f5109f848acd540567',
    'secret-key: MC6dKW278tBef+AuqL/5rW2K3WgOegF0ZHLW/FriZQw=',
    'secret-key-timestamp: 1516705204593',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>