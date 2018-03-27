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
 *  highwinds URL signing settings.
 *
 * @package    filter
 * @subpackage highwinds_signurl
 * @copyright  2018 Louis Subirana, Dialogic Corporation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    require_once(__DIR__ . '/lib.php');

    $settings->add(new admin_setting_configtext('filter_highwinds_signurl/distributionurl',
        get_string('distributionurl', 'filter_highwinds_signurl'),
        get_string('distributionurldesc', 'filter_highwinds_signurl'),
        ''));

    $settings->add(new admin_setting_configtext('filter_highwinds_signurl/passphrase',
        get_string('passphrase', 'filter_highwinds_signurl'),
        get_string('passphrasedesc', 'filter_highwinds_signurl'),
        ''));
        
    $settings->add(new admin_setting_configtext('filter_highwinds_signurl/passphrasename',
        get_string('passphrasename', 'filter_highwinds_signurl'),
        get_string('passphrasenamedesc', 'filter_highwinds_signurl'),
        ''));
            
    $settings->add(new admin_setting_configtext('filter_highwinds_signurl/urlsignaturename',
        get_string('urlsignaturename', 'filter_highwinds_signurl'),
        get_string('urlsignaturenamedesc', 'filter_highwinds_signurl'),
        ''));

    $settings->add(new admin_setting_configtext('filter_highwinds_signurl/expirationname',
        get_string('expirationname', 'filter_highwinds_signurl'),
        get_string('expirationnamedesc', 'filter_highwinds_signurl'),
        ''));

    $settings->add(new admin_setting_configduration('filter_highwinds_signurl/validduration',
        get_string('validduration', 'filter_highwinds_signurl'),
        get_string('validdurationdesc', 'filter_highwinds_signurl'),
        86400,
        1));
}