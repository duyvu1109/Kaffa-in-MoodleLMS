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
 * Strings for component 'enrol_self', language 'vi', version '3.11'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'Đăng kí bị vô hiệu hoặc không hoạt động';
$string['canntenrolearly'] = 'Bạn chưa thể đăng kí được; nó sẽ bắt đầu vào {$a}.';
$string['canntenrollate'] = 'Bạn không thể đăng kí vì thời hạn đã kết thúc vào {$a}.';
$string['cohortnonmemberinfo'] = 'Chỉ những thành viên của nhóm \'{$a}\' mới có thể tự đăng kí.';
$string['cohortonly'] = 'Chỉ dành cho thành viên của nhóm';
$string['cohortonly_help'] = 'Tự đăng kí có thể bị giới hạn trong các thành viên của một nhóm cụ thể. Lưu ý rằng thay đổi cài đặt này không ảnh hưởng tới các đăng kí đang tồn tại.';
$string['confirmbulkdeleteenrolment'] = 'Bạn có chắc rằng bạn muốn xóa những đăng kí của người dùng này không?';
$string['customwelcomemessage'] = 'Tin nhắn chào mừng khách hàng';
$string['defaultrole'] = 'Ví trí mặc định';
$string['defaultrole_desc'] = 'Chọn ví trí sẽ được giao cho những người dùng trong quá trình tự đăng kí';
$string['deleteselectedusers'] = 'Xóa các đăng kí của người dùng đã chọn';
$string['editselectedusers'] = 'Sửa các đăng kí của người dùng đã chọn';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu được kích hoạt, người dùng có thể tự ghi danh chỉ khi tới ngày này.';
$string['enrolenddaterror'] = 'Ngày kết thúc ghi danh không được sớm hơn ngày bắt đầu';
$string['enrolme'] = 'Ghi danh tôi';
$string['enrolperiod'] = 'Thời lượng đăng kí';
$string['enrolperiod_desc'] = 'Mặc định thời lượng ghi danh hợp lệ. Nếu để là 0 thì thời lượng sẽ là mặc định không giới hạn.';
$string['enrolperiod_help'] = 'Thời lượng ghi danh hợp lệ, bắt đầu từ thời điểm người dùng tự ghi danh. Nếu vô hiệu hóa thì thời lượng ghi danh sẽ là vô thời hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['expiredaction'] = 'Cách khi đăng kí hết hạn';
$string['expiredaction_help'] = 'Chọn cách thức thực hiện khi đăng kí của người dùng hết hạn. Xin hãy lưu ý rằng một số dữ liệu và cài đặt của người dùng bị xóa khỏi khóa học trong khi hủy đăng kí khóa học,';
$string['expirymessageenrolledbody'] = '{$a->user} thân mến,

Chúng tôi gửi cho bạn thông báo rằng đăng kí của bạn cho khóa học \'{$a->course}\' sẽ đến hạn vào {$a->timeend}.

Nếu bạn cần trợ giúp, xin hãy liên lạc tới  {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Thông báo hết hạn tự đăng kí';
$string['expirymessageenrollerbody'] = 'Tự đăng kí cho khóa học \'{$a->course}\' sẽ hết hạn trong vòng {$a->threshold} tiếp theo đối với những người dùng sau đây:

{$a->users}

Để gia hạn đăng kí, hãy tới {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Thông báo hết hạn tự đăng kí';
$string['expirynotifyall'] = 'Giảng viên và người dùng đã ghi danh';
$string['expirynotifyenroller'] = 'Chỉ dành cho giảng viên';
$string['groupkey'] = 'Sử dụng mật khẩu đăng kí nhóm';
$string['groupkey_desc'] = 'Mặc định dùng mật khẩu đăng kí nhóm';
$string['groupkey_help'] = 'Bổ sung thêm về việc giới hạn truy cập vào khóa học chỉ với những người biết mật khẩu, sử dụng mật khẩu đăng kí nhóm nghĩa là người dùng được thêm tự động vào các nhóm khi họ ghi danh vào khóa học.

Lưu ý: Mật khẩu ghi danh cho khóa học phải được ghi rõ trong phần cài đặt tự ghi danh cũng như mật khẩu ghi danh nhóm trong phần cài đặt nhóm.';
$string['keyholder'] = 'Lẽ ra bạn đã nhận được mật khẩu ghi danh này từ:';
$string['longtimenosee'] = 'Vô hiệu hủy ghi danh sau khi';
$string['longtimenosee_help'] = 'Nếu người dùng chưa truy cập vào khóa học trong một thời gian dài thì họ sẽ bị hủy đăng kí tự động. Bộ đếm này ghi rõ thời hạn.';
$string['maxenrolled'] = 'Tối đa người dùng ghi danh';
$string['maxenrolled_help'] = 'Ghi rõ tối đa số lượng người dùng tự ghi danh. 0 nghĩa là không giới hạn.';
$string['maxenrolledreached'] = 'Số lượng người dùng tự ghi danh đã chạm mốc tối đa.';
$string['messageprovider:expiry_notification'] = 'Thông báo hết hạn tự đăng kí';
$string['newenrols'] = 'Cho phép đăng kí mới';
$string['newenrols_desc'] = 'Mặc định cho phép người dùng tự ghi danh vào các khóa học mới.';
$string['newenrols_help'] = 'Cài đặt này xác định người dùng có thể đăng kí khóa học này hay không.';
$string['nopassword'] = 'Không yêu cầu mật khẩu đăng kí';
$string['password'] = 'Mật khẩu đăng kí';
$string['password_help'] = 'Mật khẩu đăng kí kích hoạt truy cập vào khóa học mà chỉ dành cho những người biết mật khẩu.

Nếu ô trống thì bất cứ người dùng nào cũng có thể đăng kí khóa học.

Nếu có mật khẩu đăng kí thì bất kì người dùng nào định đăng kí khóa học sẽ bị yêu cầu cung cấp mật khẩu. Lưu ý rằng một người dùng chỉ cung cấp mật khẩu MỘT LẦN, khi họ đăng kí khóa học.';
$string['passwordinvalid'] = 'Mật khẩu đăng kí sai, xin hãy thử lại.';
$string['passwordinvalidhint'] = 'Mật khẩu không đúng, xin vui lòng thử lại<br />
(Gợi ý: mật khẩu bắt đầu bằng \'{$a}\')';
$string['pluginname'] = 'Tự đăng kí';
$string['privacy:metadata'] = 'Trình bổ trợ tự đăng kí không lưu trữ dữ liệu cá nhân';
$string['requirepassword'] = 'Yêu cầu mật khẩu đăng kí';
$string['requirepassword_desc'] = 'Yêu cầu mật khẩu đăng kí trong các khóa học mới và ngăn việc di chuyển mật khẩu đăng kí khỏi các khóa học đã có sẵn.';
$string['role'] = 'Mặc định vai trò được chỉ định';
$string['self:enrolself'] = 'Tự ghi danh vào khóa học';
$string['self:manage'] = 'Quản lí người ghi danh';
$string['self:unenrol'] = 'Hủy đăng kí khóa học của người dùng';
$string['self:unenrolself'] = 'Tự hủy đăng kí khóa học';
$string['sendcoursewelcomemessage'] = 'Gửi thư chào mừng tham gia khoá học';
$string['sendcoursewelcomemessage_help'] = 'Khi người dùng tự ghi danh vào khóa học, họ sẽ nhận được thư chào mừng. Nếu nó được gửi từ liên hệ của khóa học (mặc định là giảng viên) và có nhiều hơn một người dùng nắm giữ vai trò này thì người dùng đầu tiên được giao vị trí này sẽ là người gửi thư.';
$string['sendexpirynotificationstask'] = 'Nhiệm vụ gửi thông báo hết hạn tự đăng kí';
$string['showhint'] = 'Hiển thị gợi ý';
$string['showhint_desc'] = 'Hiển thị chữ cái đầu tiên của mật khẩu khách vãng lai truy cập.';
$string['status'] = 'Cho phép các đăng kí đang tồn tại';
$string['status_desc'] = 'Kích hoạt phương thức tự ghi danh vào các khóa học mới.';
$string['syncenrolmentstask'] = 'Đồng bộ nhiêm vụ tự ghi danh';
$string['unenrol'] = 'Hủy ghi danh người dùng';
$string['unenrolselfconfirm'] = 'Bạn có thực sự muốn hủy đăng kí khỏi khóa học  "{$a}" không?';
$string['unenroluser'] = 'Bạn có thực sự muốn hủy đăng kí "{$a->user}" khỏi khóa học  "{$a->course}" không?';
$string['unenrolusers'] = 'Hủy đăng kí nhiều người dùng';
$string['usepasswordpolicy'] = 'Sử dụng chính sách mật khẩu';
$string['usepasswordpolicy_desc'] = 'Sử dụng chính sách mật khẩu tiêu chuẩn cho mật khẩu đăng kí.';
$string['welcometocourse'] = 'Chào mừng bạn đến với {$a}';
$string['welcometocoursetext'] = 'Chào mừng bạn đến với khoá học {$a->coursename}!

Để bắt đầu, trước tiên mời bạn sửa lại thông tin cá nhân cho đầy đủ để mọi người trong khoá học đều có thể biết đến bạn:

  {$a->profileurl}';
