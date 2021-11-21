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
 * Strings for component 'enrol_ldap', language 'vi', version '3.11'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Phân bổ vị trí \'{$a->role_shortname}\'  cho người dùng \'{$a->user_username}\' vào khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Bổ nhiệm vị trí \'{$a->role_shortname}\'  thất bại cho người dùng \'{$a->user_username}\' vào khóa học  \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = '<p> Các khóa học có thể được tạo tự động nếu có sự đăng kí tham gia vào một khóa học mà chưa xuất hiện trên Moodle</p><p> Nếu bạn đang dùng chức năng tự động tạo khóa học thì bạn được khuyến khích bỏ các tính năng sau đây:
moodle/khóa học: thay đổi số ID, moodle/khóa học: thay đổi tên tắt, moodle/khóa học: thay đổi tên đầy đủ, và moodle/khóa học: thay đổi tóm tắt, từ những vị trí liên quan/thích hợp đến việc ngăn chặn sự chỉnh sửa đối với 4 trường khóa học được ghi rõ bên trên (số ID, tên tắt, tên đầy đủ và tóm tắt). <p>';
$string['autocreate_key'] = 'Tự động tạo';
$string['autocreation_settings'] = 'Các cài đặt tự động tạo khóa học';
$string['autoupdate_settings'] = 'Các cài đặt tự động nâng cấp khóa học';
$string['autoupdate_settings_desc'] = '<p> Chọn các trường để nâng cấp khi nhiệm vụ được lên lịch "Đồng bộ hóa tham gia LDAP\' đang chạy.</p><p>Khi ít nhất 1 trường được chọn sẽ diễn ra việc nâng cấp.</p>';
$string['bind_pw_key'] = 'Mật khẩu';
$string['cannotcreatecourse'] = 'Không thể tạo khóa học: dữ liệu cần thiết trong bản lưu LDAP đã mất/thiếu!';
$string['cannotupdatecourse'] = 'Không thể tạo khóa học: dữ liệu cần thiết trong bản lưu LDAP đã mất/thiếu! Số ID khóa học:  \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'Không thể nâng cấp khóa học: trùng tên tắt. Bỏ qua khóa học với số ID  \'{$a->idnumber}\'...';
$string['category'] = 'Danh mục dành cho các khóa học tự động tạo';
$string['category_key'] = 'Danh mục';
$string['couldnotfinduser'] = 'Không thể tìm thấy người dùng \'{$a}\',  bỏ qua';
$string['course_fullname_key'] = 'Tên đầy đủ';
$string['course_fullname_updateonsync'] = 'Nâng cấp tên đầy đủ trong khi đồng bộ hóa kí tự';
$string['course_fullname_updateonsync_key'] = 'Nâng cấp tên đầy đủ';
$string['course_idnumber_key'] = 'Số ID';
$string['course_settings'] = 'Các cài đặt cho tham gia khóa học';
$string['course_shortname_key'] = 'Tên tắt';
$string['course_shortname_updateonsync'] = 'Nâng cấp tên tắt trong khi đồng bộ hóa kí tự';
$string['course_shortname_updateonsync_key'] = 'Nâng cấp tên tắt';
$string['course_summary_key'] = 'Tóm tắt';
$string['course_summary_updateonsync'] = 'Nâng cấp tóm tắt trong khi đồng bộ hóa kí tự';
$string['course_summary_updateonsync_key'] = 'Nâng cấp tóm tắt';
$string['coursenotexistskip'] = 'Khóa học \'{$a}\' không tồn tại và chức năng tự tạo vô hiệu, bỏ qua';
$string['courseupdated'] = 'Khóa học với số ID \'{$a->idnumber}\' đã được nâng cấp thành công.';
$string['courseupdateskipped'] = 'Khóa học với số ID \'{$a->idnumber}\' không yêu cầu nâng cấp. Bỏ qua...';
$string['createcourseextid'] = 'TẠO người dùng đẫ tham gia vào một khóa học không tồn tại  \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Người dùng đẫ tham gia vào một khóa học không tồn tại  \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Đang tạo khóa học \'{$a}\'...';
$string['duplicateshortname'] = 'Tạo khóa học thất bại. Trùng tên tắt. Bỏ qua khóa học với số iD \'{$a->idnumber}\'...';
$string['editlock'] = 'Giá trị khóa';
$string['emptyenrolment'] = 'Không có đăng kí  nào cho vị trí \'{$a->role_shortname}\'  trong khóa học \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Cho người dùng \'{$a->user_username}\' tham gia vào khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Kích hoạt đăng kí cho người dùng \'{$a->user_username}\'  để tham gia vào khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extcourseidinvalid'] = 'ID ngoài của khóa học không hợp lệ!';
$string['extremovedsuspend'] = 'Hủy đăng kí cho người dùng \'{$a->user_username}\' tham gia vào khóa học  \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Hủy đăng kí và bỏ các vị trí cho người dùng  \'{$a->user_username}\'  trong khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Hủy đăng kí của người dùng \'{$a->user_username}\'  khỏi khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Thất bại!';
$string['general_options'] = 'Các lựa chọn chung';
$string['host_url_key'] = 'Chủ URL';
$string['memberattribute_isdn'] = 'Nếu thành viên nhóm chứa các tên khác nhau thì bạn cần ghi rõ chúng ở đây. Nếu là như vậy, bạn cũng cần cấu hình các cài đặt còn lại trong mục này.';
$string['nested_groups'] = 'Bạn có muốn dùng lồng nhóm (nhóm trong nhóm) cho việc ghi danh?';
$string['nested_groups_key'] = 'Lồng nhóm';
$string['nested_groups_settings'] = 'Các cài đặt lồng nhóm';
$string['ok'] = 'OK!';
$string['phpldap_noextension'] = 'Mô-đun PHP LDAP dường như không xuất hiện. Xin hãy đảm bảo rằng nó đã được cài và kích hoạt nếu bạn muốn dùng trình bổ trợ ghi adnh này.';
$string['pluginname'] = 'Ghi danh LDAP';
$string['pluginnotenabled'] = 'Trình bổ trợ không được kích hoạt!';
$string['privacy:metadata'] = 'Trình bổ trợ ghi danh LDAP không chứa bất kì dữ liệu cá nhân nào.';
$string['server_settings'] = 'Cài đặt máy chủ LDAP';
$string['synccourserole'] = '== Đồng bộ khóa học \'{$a->idnumber}\'  cho vị trí  \'{$a->role_shortname}\'';
$string['template'] = 'Tùy chọn: các khóa học tự tạo có thể sao chép cac thiết đặt từ một khóa học mẫu.';
$string['template_key'] = 'Mẫu';
$string['unassignrole'] = 'Bỏ bổ nhiệm vị trí  \'{$a->role_shortname}\'  cho người dùng \'{$a->user_username}\'  khỏi khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Bỏ bổ nhiệm vị trí \'{$a->role_shortname}\' thất bại cho người dùng  \'{$a->user_username}\'  khỏi khóa học \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignroleid'] = 'Bỏ ID vị trí \'{$a->role_id}\' của ID tài khoản  \'{$a->user_id}\'';
$string['updatelocal'] = 'Nâng cấp dữ liệu vùng';
$string['user_settings'] = 'Các thiết đặt tìm kiếm người dùng';
$string['user_type'] = 'Nếu thành viên nhóm chứa các tên riêng biệt thì hãy chỉ rõ các tài khoản được trữ trong LDAP như thế nào.';
$string['user_type_key'] = 'Loại tài khoản';
$string['version_key'] = 'Phiên bản';
