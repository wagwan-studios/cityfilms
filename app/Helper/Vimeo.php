<?php

namespace App\Helper;

/**
 * Class Vimeo
 */
class Vimeo
{
    function getVimeo($id) {
        // get page with a player
        $queryResult = $this->httpQuery('http://vimeo.com/' . $id);
        $content = $queryResult['content'];

        if (preg_match('#document\.getElementById\(\'player_(.+)\n#i', $content, $scriptBlock) == 0)
            return 1;

        preg_match('#"timestamp":([0-9]+)#i', $scriptBlock[1], $matches);
        $timestamp = $matches[1];
        preg_match('#"signature":"([a-z0-9]+)"#i', $scriptBlock[1], $matches);
        $signature = $matches[1];

        $url = 'http://player.vimeo.com/play_redirect?clip_id=' . $id . '&sig=' . $signature . '&time=' . $timestamp . '&quality=sd';

        // make the request for getting a video url
        #print_r(get_headers($url, 1));
        $finalQuery = $this->httpQuery($url);
        return $finalQuery['redirect_url'];
    }
    // make queries via CURL
    function httpQuery($url) {
        $options = array(
            CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Ubuntu/12.04 Chromium/18.0.1025.168 Chrome/18.0.1025.168 Safari/535.19',
            CURLOPT_RETURNTRANSFER => true,
        );
        $ch = curl_init($url);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);
        $result = $info;
        $result['content'] = $content;

        return $result;
    }
}
