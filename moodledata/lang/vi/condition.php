<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'condition', language 'vi', version '3.11'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Thêm {không} điều kiện hoạt động vào mẫu';
$string['addgrades'] = 'Thêm {không} điều kiện điểm số vào mẫu';
$string['availabilityconditions'] = 'Không cho phép truy cập';
$string['availablefrom'] = 'Cho phép truy cập từ';
$string['availablefrom_help'] = 'Truy cập từ/đến các ngày xác định khi nào học viên cần truy cập hoạt động thông qua đường liên kết trên trang khóa học
Điểm khác biệt giữa truy cập từ/đến các ngày và các thiết đặt có sẵn cho các hoạt động chính là, ngoài các ngày đã được cài, truy cập từ/đến ngăn việc truy cập toàn bộ, trong khi tính năng có sẵn cho phép học viên nhìn được mô tả  hoạt động.';
$string['availableuntil'] = 'Cho phép truy cập cho đến';
$string['badavailabledates'] = 'Ngày không hợp lệ. Nếu bạn đặt cả hay ngày, thì ngày \'Cho phép truy cập từ\' phải trước ngày \'đến\'';
$string['badgradelimits'] = 'Nếu bạn đặt cả hai giới hạn điểm trần và điểm sàn, thì điểm trần phải cao hơn điểm sàn.';
$string['completion_complete'] = 'phải được đánh dấu là đã hoàn thành';
$string['completion_fail'] = 'phải được hoàn thành với điểm số trượt';
$string['completion_incomplete'] = 'không được đánh dấu hoàn thành';
$string['completion_pass'] = 'phải được đánh dấu hoàn thành với điểm số đạt';
$string['completioncondition'] = 'Điệu kiện hoàn thành hoạt động';
$string['completioncondition_help'] = 'Thiết này khẳng định bất kì điều kiện hoàn tất hoạt động nào phải được thỏa mãn để truy cập hoạt động. Lưu ý rằng, truy tìm hoàn tất phải được cài đặt trước khi cài đặt điều kiện hoàn tất hoạt động.
Nếu muốn, có thể cài đặt tính năng nhiều điều hiệt hoàn tất hoạt động. Nếu vậy, việc truy cập hoạt động chỉ có thể được cho phép khi TẤT CẢ các điều kiện hoàn tất hoạt động được thỏa mãn.';
$string['completionconditionsection'] = 'Điều kiện hoàn tất hoạt động';
$string['completionconditionsection_help'] = 'Thiết này khẳng định bất kì điều kiện hoàn tất hoạt động nào phải được thỏa mãn để truy cập mục. Lưu ý rằng, truy tìm hoàn tất phải được cài đặt trước khi cài đặt điều kiện hoàn tất hoạt động.
Nếu muốn, có thể cài đặt tính năng nhiều điều hiệt hoàn tất hoạt động. Nếu vậy, việc truy cập mục chỉ có thể được cho phép khi TẤT CẢ các điều kiện hoàn tất hoạt động được thỏa mãn.';
$string['configenableavailability'] = 'Khi được kích hoạt, thì phần này sẽ cho phép bạn đặt các điều kiện (trên cơ sở ngày, điểm số hay sự hoàn thành), mà các điều kiện này sẽ kiểm soát việc một hoạt động có được truy cập hay không.';
$string['contains'] = 'có chứa';
$string['doesnotcontain'] = 'không chứa';
$string['enableavailability'] = 'Kích hoạt truy cập có điều kiện';
$string['endswith'] = 'kết thúc bằng';
$string['fielddeclaredmultipletimes'] = 'Bạn không thể khai báo cùng một trường hơn một lần mỗi hoạt động.';
$string['grade_atleast'] = 'phải là tối thiểu';
$string['grade_upto'] = 'và ít hơn';
$string['gradecondition'] = 'Điều kiện điểm số';
$string['gradecondition_help'] = 'Cài đặt này xác định bất kì điều kiện điểm nào cũng phải thỏa mãn để truy cập hoạt động.
Nếu muốn, có thể cài đặt tính năng nhiều điều kiện điểm. Nếu vậy, hoạt động chi cho phép truy cập khi TOÀN BỘ các điều kiện điểm dược thỏa mãn.';
$string['gradeconditionsection'] = 'Điều kiện điểm';
$string['gradeconditionsection_help'] = 'Cài đặt này xác định bất kì điều kiện điểm nào cũng phải thỏa mãn để truy cập mục.
Nếu muốn, có thể cài đặt tính năng nhiều điều kiện điểm. Nếu vậy, mục chi cho phép truy cập khi TOÀN BỘ các điều kiện điểm được thỏa mãn.';
$string['gradeitembutnolimits'] = 'Bạn phải nhập một giới hạn điểm trần hay điểm sàn, hay cả hai.';
$string['gradelimitsbutnoitem'] = 'Bạn phải chọn một mục điểm.';
$string['gradesmustbenumeric'] = 'Điểm tối thiểu hay tối đa phải ở dạng số (hay để trống)';
$string['groupingnoaccess'] = 'Hiện tại bạn không ở trong nhóm đã truy cập vào mục này.';
$string['isempty'] = 'rỗng';
$string['isequalto'] = 'bằng với';
$string['isnotempty'] = 'Không rỗng';
$string['none'] = '(không)';
$string['notavailableyet'] = 'Chưa có';
$string['requires_completion_0'] = 'Không có sẵn trừ khi hoạt  động <strong>{$a}</strong>  chưa hoàn tất.';
$string['requires_completion_1'] = 'Đến khi hoạt động <strong>{$a}</strong>được đánh dấu là hoàn thành thì mới có.';
$string['requires_completion_2'] = 'Không có sẵn trừ khi hoạt động <strong>{$a}</strong>  đã hoàn tất và qua.';
$string['requires_completion_3'] = 'Không có sẵn trừ khi hoạt động <strong>{$a}</strong>  đã hoàn tất và trượt.';
$string['requires_date'] = 'Có từ {$a}';
$string['requires_date_before'] = 'Có cho đến {$a}';
$string['requires_date_both'] = 'Có từ';
$string['requires_date_both_single_day'] = 'Có sẵn trên {$a}.';
$string['requires_grade_any'] = 'Không có sẵn trừ khi bạn có điểm trong <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Không có sẵn trừ khi bạn có điểm chính xác trong <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Không có sẵn trừ khi bạn đạt được điểm được yêu cầu trong <strong>{$a}</strong>..';
$string['requires_grade_range'] = 'Không có sẵn trừ khi bạn đạt được điểm đặc biệt trong <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Chí có sẵn cho nhóm <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'Không có sẵn trừ khi <strong>{$a->field}</strong>  của bạn chứa <strong>{$a->field}</strong>';
$string['requires_user_field_doesnotcontain'] = 'Không có sẵn nếu <strong>{$a->field}</strong> của bạn chứa <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Khong có sẵn trừ khi <strong>{$a->field}</strong> của bạn kết thúc cùng với <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Không có sẵn trừ khi <strong>{$a->field}</strong>của bạn trống.';
$string['requires_user_field_isequalto'] = 'Không có sẵn trừ khi <strong>{$a->field}</strong> của bạn tương đương với <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Không có sẵn nếu <strong>{$a->field}</strong>  của bạn trống.';
$string['requires_user_field_startswith'] = 'Không có sẵn nếu <strong>{$a->field}</strong>  của bạn bắt đầu với <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Trong khi truy cập bị chặn';
$string['showavailability_hide'] = 'Ẩn toàn bộ hoạt động  trong khóa học và sổ điểm';
$string['showavailabilitysection'] = 'Trước khi mục được truy cập';
$string['showavailabilitysection_hide'] = 'Ẩn toàn bộ mục';
$string['startswith'] = 'bắt đầu bằng';
$string['userfield'] = 'Trường người dùng';
$string['userfield_help'] = 'Bạn có thể hạn chế truy cập dựa trên bất kì trường nào từ hồ sơ người dùng.';
$string['userrestriction_hidden'] = 'Hạn chế (hoàn toàn ẩn, không tin nhắn):  {$a}';
$string['userrestriction_visible'] = 'Hạn chế:  {$a}';
