<?php


namespace App\Http\Traits;


/**
 * This is a trait file having some utility methods for reusing
 *
 * @package     App\Http\Traits
 * @author     Habibur Rahman (Senior Software Engineer)
 * @copyright  Copyright © 2019 ixora solution
 * @license    https://ixorasolution.com/
 * @version    0.0.1
 *
 * FileName GeneralTrait.php
 *
 */

trait GeneralTrait
{
    /**
     * Detect browsing device
     * @return sting
    */
    public function detectDevice(){
        $userAgent = $_SERVER["HTTP_USER_AGENT"];
        $devicesTypes = array(
            "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
            "tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
            "mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
            "bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
        );
        foreach($devicesTypes as $deviceType => $devices) {
            foreach($devices as $device) {
                if(preg_match("/" . $device . "/i", $userAgent)) {
                    $deviceName = $deviceType;
                }
            }
        }
        return ucfirst($deviceName);
    }


    /**
     * Check the url is the image there or not
     * @return boolean
     * @param $url
     * @author Habibur Rahman
    */
    function remoteFileExists($url) {

        $ret = false;
        $headers = get_headers($url, 1);
        if(isset($headers['Content-Type'])){
            if (strpos($headers['Content-Type'], 'image/') !== false) {
                $ret = true;
             }
            else
            {
                $ret = false;
            }
        }

        return $ret;
    }
}
