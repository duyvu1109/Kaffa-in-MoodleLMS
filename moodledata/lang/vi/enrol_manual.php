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
 * Strings for component 'enrol_manual', language 'vi', version '3.11'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Nâng cao';
$string['alterstatus'] = 'Thay đổi trạng thái';
$string['altertimeend'] = 'Thay đổi thời gian kết thúc';
$string['altertimestart'] = 'Thay đổi thời gian bắt đầu';
$string['assignrole'] = 'Chỉ định vai trò';
$string['assignroles'] = 'Chỉ định các vai trò';
$string['browsecohorts'] = 'Duyệt các nhóm';
$string['browseusers'] = 'Duyệt người dùng';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc bạn muốn xóa đăng kí của những người dùng  này không?';
$string['defaultperiod'] = 'Mặc định khoảng thời gian đăng kí';
$string['defaultperiod_desc'] = 'Mặc định khoảng thời gian đăng kí phù hợp. Nếu để 0 thì thời gian đăng kí là vô thời hạn.';
$string['defaultperiod_help'] = 'Mặc định khoảng thời gian đăng kí phù hợp, bắt đầu từ thời điểm người dùng được ghi danh. Nếu không kích hoạt thì khoảng thời gian ghi danh sẽ mặc định là vô thời hạn.';
$string['defaultstart'] = 'Mặc định bắt đầu ghi danh';
$string['deleteselectedusers'] = 'Xóa những đăng kí của những người dùng đã được chọn';
$string['editselectedusers'] = 'Sửa đăng kí của những người dùng đã được chọn';
$string['enrolledincourserole'] = 'Đã ghi danh vào khoá học "{$a->course}" với vai trò "{$a->role}"';
$string['enrolusers'] = 'Ghi danh người dùng';
$string['enroluserscohorts'] = 'Ghi danh những người dùng và các nhóm được chọn';
$string['expiredaction'] = 'Hành động khi hết hạn đăng kí';
$string['expiredaction_help'] = 'Chọn hành động để thực hiện khi đăng kí của người dùng hết hạn. Xin chú ý rằng một số dữ liệu và  thiết đặt của người dùng sẽ bị thanh trừng khỏi khóa học trong quá trình ghi danh khóa học';
$string['expirymessageenrolledbody'] = 'Gửi {$a->user},

Đây là thông báo để nhắc bạn rằng đăng kí khóa học \'{$a->course}\' sắp đến hạn vào lúc {$a->timeend}.

Nếu bạn cần trợ giúp thì xin hãy liên lạc với {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Thông báo đăng kí hết  hạn';
$string['expirymessageenrollerbody'] = 'Đăng kí khóa học \'{$a->course}\' sẽ hết hạn trong vòng {$a->threshold}  tiếp theo đối với những người dùng sau đây:

{$a->users}

Để kéo dài thời hạn đăng kí của họ, đi tới {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Thông báo đăng kí hết  hạn';
$string['manual:enrol'] = 'Ghi danh người dùng';
$string['manual:manage'] = 'Quản lý đăng kí người dùng';
$string['manual:unenrol'] = 'Hủy ghi danh người dùng  khỏi khóa học';
$string['manualpluginnotinstalled'] = 'Trình bổ trợ "Thủ công" chưa được lắp đặt';
$string['messageprovider:expiry_notification'] = 'Các thông báo ghi danh hết hạn thủ công';
$string['now'] = 'Bây giờ';
$string['pluginname'] = 'Đăng kí thủ công';
$string['pluginname_desc'] = 'Trình bổ trợ đăng kí thủ công cho phép người dùng được ghi danh thủ công từ  1  đường  link trong  thiết đặt quản trị khóa học, bởi 1 người dùng có quyền cho phép hợp lệ, là 1 giảng viên chẳng hạn. Trình bổ trợ nên được kích hoạt bình thường, vì các trình bổ trợ đăng kí nhất định khác, chẳng hạn như tự đăng kí, yêu cầu trình bổ trợ đó.';
$string['privacy:metadata'] = 'Trình bổ trợ đăng kí thủ công  không chứa bất kì dữ liệu cá nhân nào.';
$string['selectcohorts'] = 'Chọn các nhóm';
$string['selection'] = 'Sự lựa chọn';
$string['selectusers'] = 'Chọn người dùng';
$string['sendexpirynotificationstask'] = 'Đăng kí thủ công gửi nhiệm vụ thông báo hết hạn';
$string['status'] = 'Kích hoạt đăng kí thủ công';
$string['status_desc'] = 'Cho phép truy cập khóa học đối với những người dùng được đăng kí từ bên trong. Tính năng này nên được giữ kích hoạt trong hầu hết các trường hợp.';
$string['status_help'] = 'Thiết đặt này quyết định người dùng có thể được đăng kí thủ công hay không, thông qua 1 đường link trong cài đặt quản trị khóa học, bởi 1 người dùng với quyền cho phép hợp lệ, là 1 giảng viên chẳng hạn.';
$string['statusdisabled'] = 'Vô hiệu hóa';
$string['statusenabled'] = 'Kích hoạt';
$string['syncenrolmentstask'] = 'Đồng bộ hóa nhiệm vụ đăng kí thủ công';
$string['unenrol'] = 'Hủy ghi danh người dùng';
$string['unenrolselectedusers'] = 'Hủy ghi danh người dùng được chọn';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn hủy ghi danh bản thân mình khỏi khóa học "{$a}" không?';
$string['unenroluser'] = 'Bạn có muốn hủy ghi danh "{$a->user}" khỏi khóa học "{$a->course}" không?';
$string['unenrolusers'] = 'Hủy ghi danh người dùng';
$string['wsusercannotassign'] = 'Bạn không có quyền chỉ định vai trò ({$a->roleid}) này cho người dùng ({$a->userid})  này trong khóa học  ({$a->courseid}) này.';
