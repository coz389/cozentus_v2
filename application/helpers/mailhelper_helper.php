<?php
function getImagesByID($id, $key = "")
{
    $CI = &get_instance();
    $CI->load->database();
    $query = $CI->db->where('id', $id)->get('images_master');
    if ($query->num_rows() > 0) {
        if ($key == "") {
            return $query->row_array();
        } else {
            return $query->row_array()[$key];
        }
    }
}
function getEmailConfigs()
{
    $CI = &get_instance();
    $CI->load->database();
    $query = $CI->db->get('email_oauth_config');
    if ($query->num_rows() > 0) {
        return $query->row_array();
    }
}
function getOAuthToken()
{
    $params = getEmailConfigs();
    if (!is_array($params) || empty($params)) {
        echo "No email configuration found.";
        return false;
    }
    // Check if access_token and expires_on are set
    if (isset($params['access_token']) && isset($params['expires_on'])) {
        $expiresOn = strtotime($params['expires_on']);
        if ($expiresOn > time()) {
            return $params['access_token'];
        } else {
            // Token expired, generate a new one
            return generateOAuthToken($params);
        }
    }
}
function generateOAuthToken($params = array())
{
    $CI = &get_instance();
    $CI->load->database();


    if (empty($params)) {
        $params = getEmailConfigs();
    }
    if (!is_array($params) || empty($params)) {
        echo "No email configuration found.";
        return false;
    }

    $tenantId = $params['tenant_id'];
    $clientId =  $params['client_id'];
    $clientSecret = $params['client_secret'];

    $url = "https://login.microsoftonline.com/{$tenantId}/oauth2/v2.0/token";

    $data = http_build_query([
        'grant_type'    => 'client_credentials',
        'client_id'     => $clientId,
        'client_secret' => $clientSecret,
        'scope'         => 'https://graph.microsoft.com/.default',
    ]);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_SSL_VERIFYPEER    => false,
        CURLOPT_SSL_VERIFYHOST    => false,
        CURLOPT_POSTFIELDS     => $data,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/x-www-form-urlencoded',
        ],
    ]);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if (curl_errno($ch)) {
        //echo 'cURL error: ' . curl_error($ch);
        return false;
    } else if ($httpCode == 200) {
        $responseData = json_decode($response, true);
        if (isset($responseData['access_token'])) {
            //access_token and current date time store in email_oauth_config 
            $email_oauth_config = array(
                'access_token' => $responseData['access_token'],
                'expires_on' => date('Y-m-d H:i:s', strtotime('+58 minutes')) // Assuming the token is valid for 1 hour
            );
            $CI->db->update('email_oauth_config', $email_oauth_config);
            $CI->db->where('id', 1);
            return $responseData['access_token'];
        } else {
            //echo "Error: Access token not found in response.";
            return false;
        }
    } else {
        //echo "HTTP error: " . $httpCode . " - " . $response;
        return false;
    }
    curl_close($ch);
}
function sendEmailOAuth($to, $subject, $message, $cc = "")
{
    // Get the OAuth token
    $accessToken = getOAuthToken();
    if (!$accessToken) {
        echo "Failed to get OAuth token.";
        return false;
    }
    // Set the API endpoint URL
    $url = "https://graph.microsoft.com/v1.0/users/no-reply@cozentus.com/sendMail";
    // Build the payload as an associative array

    $data = [
        "message" => [
            "subject"     => $subject,
            "body"        => [
                "contentType" => "html",
                "content"     => $message
            ],
            "toRecipients" => [
                [
                    "emailAddress" => [
                        "address" => $to
                    ]
                ]
            ]
        ]
    ];
    // Add ccRecipients only if $cc is not null or empty
    if (isset($cc) && !empty($cc)) {
        $data["message"]["ccRecipients"] = [
            [
                "emailAddress" => [
                    "address" => $cc
                ]
            ]
        ];
    }

    // Convert the array to a JSON string
    $payload = json_encode($data);

    // Initialize cURL session
    $ch = curl_init();
    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);                     // Set URL to call
    curl_setopt($ch, CURLOPT_POST, true);                    // Use POST method
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);          // Return response as a string
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer " . $accessToken, // Use the OAuth token for authorization
    ]);

    // Attach the JSON payload to the request
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Execute cURL call and capture the response
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //return "Email sent successfully!";
    // Check if the request was successful
    // if ($httpCode == 200) { 
    //    echo "Email sent successfully!";
    // } else {
    //    echo "Failed to send email. HTTP Status Code: " . $httpCode;
    //    echo "Response: " . $response;
    // }
    // Close the cURL session
    curl_close($ch);
}
function sendEmailOAuth2($toEmails, $subject, $message, $ccEmails = [])
{
    // Get the OAuth token
    $accessToken = getOAuthToken();
    if (!$accessToken) {
        echo "Failed to get OAuth token.";
        return false;
    }
    // Check if $toEmails is an array, if not convert it to an array
    $toRecipients = [];
    if (is_array($toEmails)) {
        foreach ($toEmails as $email) {
            $toRecipients[] = ["emailAddress" => ["address" => $email]];
        }
    }

    // Set the API endpoint URL
    $url = "https://graph.microsoft.com/v1.0/users/no-reply@cozentus.com/sendMail";
    // Build the payload as an associative array

    $data = [
        "message" => [
            "subject"     => $subject,
            "body"        => [
                "contentType" => "html",
                "content"     => $message
            ],
            "toRecipients" => $toRecipients
        ]
    ];
    // Add ccRecipients only if $cc is not null or empty
    $ccRecipients = [];
    if (!empty($ccEmails)) {
        foreach ($ccEmails as $email) {
            $ccRecipients[] = ["emailAddress" => ["address" => $email]];
        }
    }
    if (!empty($ccRecipients)) {
        $data["message"]["ccRecipients"] = $ccRecipients;
    }

    // Convert the array to a JSON string
    $payload = json_encode($data);

    // Initialize cURL session
    $ch = curl_init();
    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);                     // Set URL to call
    curl_setopt($ch, CURLOPT_POST, true);                    // Use POST method
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);          // Return response as a string
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer " . $accessToken, // Use the OAuth token for authorization
    ]);

    // Attach the JSON payload to the request
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Execute cURL call and capture the response
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    //return "Email sent successfully!";
    // Check if the request was successful
    // if ($httpCode == 200) { 
    //    echo "Email sent successfully!";
    // } else {
    //    echo "Failed to send email. HTTP Status Code: " . $httpCode;
    //    echo "Response: " . $response;
    // }
    // Close the cURL session
    curl_close($ch);
}
function validateEmail($email, $blocked_tlds = ['xyz'], $blocked_domains = ['xyz.com', 'xyz.COM'], $lowercase_local = true)
{
    /**
     * Validate and normalize email in plain PHP / CodeIgniter.
     *
     * - Trims and removes invisible spaces
     * - Lowercases domain (e.g., .GMAIL.COM → .gmail.com)
     * - Optionally lowercases local part
     * - Rejects certain TLDs (e.g., .xyz)
     * - Checks syntax with filter_var
     */
    // 1. Trim spaces & strip invisible characters
    $email = trim($email);
    $email = preg_replace('/\s+/', '', $email); // remove spaces inside

    if (substr_count($email, '@') !== 1) {
        return ['ok' => false, 'error' => 'Invalid email: missing or too many @'];
    }

    list($local, $domain) = explode('@', $email, 2);

    if ($local === '' || $domain === '') {
        return ['ok' => false, 'error' => 'Invalid email: local or domain missing'];
    }

    // 2. Normalize domain: lowercase + remove trailing dots
    $domain = rtrim($domain, '.');
    $domain_lower = strtolower($domain);

    // Handle IDN domains → punycode if available
    if (function_exists('idn_to_ascii')) {
        $domain_ascii = idn_to_ascii($domain_lower, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46);
        if ($domain_ascii === false) {
            return ['ok' => false, 'error' => 'Invalid domain (IDN conversion failed)'];
        }
    } else {
        $domain_ascii = $domain_lower;
    }

    // 3. Local part normalization
    $local_norm = $lowercase_local ? strtolower($local) : $local;

    // 4. Check blocked TLDs
    $tld = substr(strrchr($domain_ascii, "."), 1);
    if ($tld === '' || !preg_match('/^[a-z0-9-]+$/i', $tld)) {
        return ['ok' => false, 'error' => 'Invalid or missing TLD'];
    }
    if (in_array(strtolower($tld), array_map('strtolower', $blocked_tlds))) {
        return ['ok' => false, 'error' => "TLD .$tld is not allowed"];
    }

    // 5. Check blocked full domains (gmail.com, gmil.com, yahoo.com etc.)
    if (in_array($domain_lower, array_map('strtolower', $blocked_domains))) {
        return ['ok' => false, 'error' => "Domain $domain_lower is not allowed"];
    }

    // 6. Rebuild normalized email
    $normalized_email = $local_norm . '@' . $domain_lower;

    // 6. Syntax validation
    if (!filter_var($normalized_email, FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'error' => 'Invalid email format'];
    }
    return ['ok' => true, 'email' => $normalized_email];
    // return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


function get_youtube_duration($videoId)
{
    if (empty($videoId)) {
        return '';
    }

    $url = "https://www.youtube.com/watch?v=" . $videoId;

    // Use cURL as file_get_contents is often disabled (allow_url_fopen = Off) on live servers
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    // Ignore SSL verification issues if any on live server
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $html = curl_exec($ch);
    curl_close($ch);

    if ($html === false) {
        return '';
    }

    // Look for <meta itemprop="duration" content="PT22M18S">
    if (preg_match('/<meta itemprop="duration" content="([^"]+)">/', $html, $matches)) {
        $isoDuration = $matches[1]; // e.g., "PT22M18S" or "PT1H22M18S"

        try {
            $interval = new DateInterval($isoDuration);
            if ($interval->h > 0) {
                return $interval->format('%H:%I:%S'); // e.g., 01:22:18
            } else {
                return $interval->format('%I:%S');    // e.g., 22:18
            }
        } catch (Exception $e) {
            return '';
        }
    }

    return '';
}
