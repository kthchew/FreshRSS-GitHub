<?php

class GitHubExtension extends Minz_Extension
{
    public function init()
    {
        $this->registerHook('simplepie_before_init', array($this, 'curlHook'));
    }

    public function install()
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }

    public static function curlHook($simplePie, $feed)
    {
        if (preg_match('#^https?://github.com/#i', $feed->url())) {
            $simplePie->set_curl_options(array(
                CURLOPT_HTTPHEADER => array('Accept: application/atom+xml')
            ));
        }
    }
}
