<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *  Highwinds URL signing library.
 *
 * @package    filter
 * @subpackage highwinds_signurl
 * @copyright  2018 Louis Subirana, Dialogic Corporation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 
 
 class filter_highwinds_signurl_urlsigner {

    private static function url_safe_base64_encode($value) {
        $encoded = base64_encode($value);
        // replace unsafe characters +, = and / with the safe characters -, _ and ~
        return str_replace(
            array('+', '=', '/'),
            array('-', '_', '~'),
            $encoded);
    }

    private static function create_stream_name($url, $passphrase, $passphrasename, $expires, $expiresName) {
        $result = $url;
        // if the stream already contains query parameters, attach the new query parameters to the end
        // otherwise, add the query parameters
        $separator = strpos($url, '?') == FALSE ? '?' : '&';
        // the presence of an expires time means we need to add TTL
        if($expires) {
            $result .= $separator . $expiresName . "=" . $expires . "&" . $passphrasename . "=" . $passphrase ;
        } 
        // not using a canned policy, include the policy itself in the stream name
        else {
            $result .= $separator . $passphrasename . "=" . $passphrase ;
        }

        // new lines would break us, so remove them
        return str_replace('\n', '', $result);
    }

    public static function get_md5_signed_url($video_path) {
        $expires = time() + get_config('filter_highwinds_signurl','validduration');
        $expiresName = get_config('filter_highwinds_signurl','expirationname');
        $passphrase = get_config('filter_highwinds_signurl','passphrase');
        $passphrasename = get_config('filter_highwinds_signurl','passphrasename');
        $urlsignaturename = get_config('filter_highwinds_signurl','urlsignaturename');
        // combine the above into a stream name
        $stream_name = self::create_stream_name($video_path, $passphrase, $passphrasename, $expires, $expiresName);
        // url-encode the query string characters to work around a flash player bug
        return $video_path . "?" . $expiresName . "=" . $expires . "&" . $urlsignaturename . "=" . md5($stream_name);
    }

    
}