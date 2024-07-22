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

namespace local_select2;

/**
 * Allows plugins to add any elements to the footer.
 *
 * @package    local_select2
 * @copyright  2024 Daniyar Nugumanov <info@lms.kz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hook_callbacks {
    /**
     * Callback to add head elements.
     *
     * @param \core\hook\output\before_standard_footer_html_generation $hook
     */
    public static function before_standard_footer_html_generation(
        \core\hook\output\before_standard_footer_html_generation $hook,
    ): void {
        global $PAGE;

        $PAGE->requires->js_call_amd('local_select2/select2_init', 'init', ['.select.custom-select, .custom-select, select.form-control', '5']);

        $hook->add_html('');
    }
}
