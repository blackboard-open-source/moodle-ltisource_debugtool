<?php
/**
 * LTI Source Debug Tool
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see http://opensource.org/licenses/gpl-3.0.html.
 *
 * @copyright Copyright (c) 2009 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @package ltisource_debugtool
 * @author Mark Nielsen
 */

/**
 * This is called when adding a new activity
 * and ltisource_debugtool was selected.
 */
function ltisource_debugtool_add_instance_hook() {
    // I could do fancy things in here.
    debugging('Called: ltisource_debugtool_add_instance_hook');
}

/**
 * Add ltisource_debugtool to the add activities menu.
 *
 * @return array
 */
function ltisource_debugtool_get_types() {
    // If desired, I could perform some checks and decide to
    // return an empty array because some requirement was
    // not met.

    $types   = array();
    $types[] = (object) array(
        'modclass' => MOD_CLASS_ACTIVITY,
        'type'     => 'lti&amp;type=debugtool',
        'typestr'  => get_string('adddebugtool', 'ltisource_debugtool'),
        'help'     => get_string('adddebugtool_help', 'ltisource_debugtool'),
    );

    return $types;
}
