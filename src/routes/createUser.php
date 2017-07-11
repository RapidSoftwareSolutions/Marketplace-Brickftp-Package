<?php

$app->post('/api/Brickftp/createUser', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','subdomain','username','password']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    $apiKey = $post_data['args']['apiKey'];
    $subdomain = $post_data['args']['subdomain'];

    $data['username'] = $post_data['args']['username'];
    $data['password'] = $post_data['args']['password'];

    if(!empty($post_data['args']['name'])){
        $data['name'] = $post_data['args']['name'];
    }
    if(!empty($post_data['args']['email'])){
        $data['email'] = $post_data['args']['email'];
    }
    if(!empty($post_data['args']['notes'])){
        $data['notes'] = $post_data['args']['notes'];
    }

    if(isset($post_data['args']['ftpPermission'])){
        $data['ftp_permission'] = $post_data['args']['ftpPermission'];
    }
    if(isset($post_data['args']['sftpPermission'])){
        $data['sftp_permission'] = $post_data['args']['sftpPermission'];
    }
    if(isset($post_data['args']['davPermission'])){
        $data['dav_permission'] = $post_data['args']['davPermission'];
    }
    if(isset($post_data['args']['restapiPermission'])){
        $data['restapi_permission'] = $post_data['args']['restapiPermission'];
    }
    if(isset($post_data['args']['attachmentsPermission'])){
        $data['attachments_permission'] = $post_data['args']['attachmentsPermission'];
    }
    if(isset($post_data['args']['selfManaged'])){
        $data['self_managed'] = $post_data['args']['selfManaged'];
    }
    if(isset($post_data['args']['requirePasswordChange'])){
        $data['require_password_change'] = $post_data['args']['requirePasswordChange'];
    }
    if(isset($post_data['args']['userRoot'])){
        $data['user_root'] = $post_data['args']['userRoot'];
    }
    if(isset($post_data['args']['grantPermission'])){
        $data['grant_permission'] = $post_data['args']['grantPermission'];
    }
    if(!empty($post_data['args']['allowedIps']) && is_array($post_data['args']['allowedIps'])){
        $data['allowed_ips'] = implode(",",$post_data['args']['allowedIps']);
    }
    if(!empty($post_data['args']['groupIds']) && is_array($post_data['args']['groupIds'])){
        $data['group_ids'] = implode(",",$post_data['args']['groupIds']);
    }

    $query_str = "https://$subdomain.brickftp.com/api/rest/v1/users.json";
    $client = $this->httpClient;

    try {
        $resp = $client->post($query_str, [
            'auth' => [
                $apiKey,
                '.'
            ],
            'json' => $data
        ]);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
