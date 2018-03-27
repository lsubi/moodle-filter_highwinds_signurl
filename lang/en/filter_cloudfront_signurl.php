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
 * Strings for component 'filter_highwinds_signurl', language 'en'
 *
 * @package    filter
 * @subpackage highwinds_signurl
 * @copyright  2018 Louis Subirana, Dialogic Corporation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
$string['distributionurl'] = 'CNAME Target';
$string['distributionurldesc'] = 'The Highwinds CNAME for the site target e.g. cds.e3y3m6d8.hwcdn.net';
$string['errornopassphrase'] = 'Missing Passphrase';
$string['errornourl'] = 'No CNAME target URL provided';
$string['filtername'] = 'Highwinds URL Signer';
$string['passphrase'] = 'Passphrase';
$string['passphrasedesc'] = 'This is the shared secret used during the signing process. It should only be known by StackPath and systems authorized to sign your content.';
$string['passphrasename'] = 'Passphrase Name';
$string['passphrasenamedesc'] = 'This is the name of the portion of the URL that contains the Passphrase. It is only used during the generation and validation of a URL, and should not be present in the published URL.';
$string['urlsignaturename'] = 'URL Signature Name';
$string['urlsignaturenamedesc'] = 'This is the name of the portion of the URL that is used to identify the signature for the URL.';
$string['expirationname'] = 'Expiration Name';
$string['expirationnamedesc'] = 'This is the name of the query string parameter that contains the epoch time after which the URL is considered invalid.';
$string['validduration'] = 'Expiration Duration';
$string['validdurationdesc'] = 'How long should the signed URL be valid for';