<?php
if (isset($_COOKIE['crewInfo'])) {
    function decryptCookieData($encrypted_data)
    {
        $key = "CREW/321";
        $encrypted_data = base64_decode($encrypted_data);
        $iv_length = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($encrypted_data, 0, $iv_length);
        $cipher_text = substr($encrypted_data, $iv_length);
        return openssl_decrypt($cipher_text, 'aes-256-cbc', $key, 0, $iv);
    }

    $decrypted_data = json_decode(decryptCookieData($_COOKIE['crewInfo']), true);
    
    $_SESSION['email'] = $decrypted_data['email'];
    $_SESSION['username'] = $decrypted_data['username'];
    $_SESSION['role'] = $decrypted_data['role'];
}