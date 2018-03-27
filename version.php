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
 *  Highwinds URL signing filter
 *
 *  This filter will replace defined highwinds URLs with signed
 *  URLs as described at https://support.highwinds.com/customer/en/portal/articles/2861034-content-access-authentication?b_id=15425
 *
 * @package    filter
 * @subpackage highwinds_signurl
 * @copyright  2018 Louis Subirana, Dialogic Corporation
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
 defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2015071600;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2014051200;        // Requires Moodle 2.7
$plugin->component = 'filter_highwinds_signurl'; // Full name of the plugin (used for diagnostics).
$plugin->maturity = MATURITY_STABLE;
$plugin->release   = '0.1 for Moodle 2.7+';