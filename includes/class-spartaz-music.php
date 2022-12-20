<?php

class SpartazMusic
{
    public function init()
    {
        //check if url is home
        add_action('template_redirect', [$this, 'checkUrl']);
        //ajax spartaz_contact
        add_action('wp_ajax_spartaz_contact', [$this, 'spartazContact']);
        add_action('wp_ajax_nopriv_spartaz_contact', [$this, 'spartazContact']);
    }

    //spartazContact
    public function spartazContact()
    {
        //Get values
        $name = $_POST["name"];
        //sanitize values
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $_POST["email"];
        //validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            wp_send_json([
                'code' => 400,
                'message' => 'Invalid email address'
            ]);
        }
        $message = $_POST["message"];
        //sanitize values
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        //Sending queies
        $to = "info@spartazofficial.com.ng";
        $subject = "New Mail From $name";
        $txt = "Name: " . ucfirst($name) . "\n
                Email: " . $email . "\n
                Message: " . $message;
        $headers = "From: $email";
        $query = wp_mail($to, $subject, $txt, $headers);
        //Checking if mail send
        if ($query) {
            wp_send_json([
                'code' => 200,
                'message' => 'Mail sent'
            ]);
        } else {
            wp_send_json([
                'code' => 400,
                'message' => 'Error sending mail'
            ]);
        }
    }
    //AssetsUrl
    public static function assetsUrl()
    {
        return SPARTAZ_MUSIC_URL . '/templates/';
    }

    //checkUrl
    public function checkUrl()
    {
        if (is_home()) {
            //load template
            include_once plugin_dir_path(__FILE__) . '/../templates/index.php';
            die();
        }
    }
}

//init
$spartazMusic = new SpartazMusic();
$spartazMusic->init();
