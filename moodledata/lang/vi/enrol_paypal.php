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
 * Strings for component 'enrol_paypal', language 'vi', version '3.11'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Chỉ định vai trò';
$string['businessemail'] = 'Email công việc PayPal';
$string['businessemail_desc'] = 'Địa chỉ email của tài khoản PayPal công việc của bạn';
$string['cost'] = 'Đăng kí giá';
$string['costerror'] = 'Giá đăng kí không phải là số';
$string['costorkey'] = 'Xin hãy chọn một trong những phương thức đăng ki';
$string['currency'] = 'Đơn vị tiền tệ';
$string['defaultrole'] = 'Mặc định vai trò chỉ định';
$string['defaultrole_desc'] = 'Chọn vị trí nào nên được giao cho người dùng trong quá trình đăng kí PayPal.';
$string['enrolenddate'] = 'Ngày kết thúc';
$string['enrolenddate_help'] = 'Nếu kích hoạt, người dùng có thể được ghi danh cho tới duy nhất ngày  này.';
$string['enrolenddaterror'] = 'Ngày kết thúc đăng kí không thể sớm hơn ngày bắt đầu';
$string['enrolperiod'] = 'Khoảng thời gian đăng kí';
$string['enrolperiod_desc'] = 'Mặc định khoảng thời gian đăng kí là phù hợp. Nếu để là 0 thì khoảng thời gian đăng kí sẽ mặc định là vô thời hạn.';
$string['enrolperiod_help'] = 'Khoảng thời gian đăng kí hợp lệ, bắt đầu từ thời điểm người dùng được ghi danh. Nếu vô hiệu hóa thì khoảng thời gian đăng kí sẽ là vô thời hạn.';
$string['enrolstartdate'] = 'Ngày bắt đầu';
$string['enrolstartdate_help'] = 'Nếu kích hoạt thì người dùng có thể được ghi danh chỉ từ ngày này trở đi.';
$string['errdisabled'] = 'Trình bộ trợ đăng kí PayPal bị vô hiệu hóa và không kiểm soát thông báo thanh toán.';
$string['erripninvalid'] = 'Thông báo thanh toán tức thời chưa được PayPal xác minh.';
$string['errpaypalconnect'] = 'Không thể  kết nối với  {$a->url} để xác minh thông báo thanh toán tức thời: {$a->result}';
$string['expiredaction'] = 'Hành động hết hạn đăng kí';
$string['expiredaction_help'] = 'Chọn hành động để thực hiện khi đăng kí của người dùng hết hạn. Xin hãy chú ý rằng một số dữ liệu và thiết đặt của người dùng sẽ bị thanh trừng khỏi khóa học trong quá trình hủy ghi danh.';
$string['mailadmins'] = 'Thông báo cho quản trị viên';
$string['mailstudents'] = 'Thông báo cho học viên';
$string['mailteachers'] = 'Thông báo cho giảng viên';
$string['messageprovider:paypal_enrolment'] = 'Tin nhắn đăng kí PayPal';
$string['nocost'] = 'Không có giá cả nào liên quan tới việc ghi danh vào khóa học này!';
$string['paypal:manage'] = 'Quản lí người dùng ghi danh';
$string['paypal:unenrol'] = 'Hủy ghi danh người dùng khỏi khóa học';
$string['paypalaccepted'] = 'Chấp nhận các thanh toán PayPal';
$string['pluginname'] = 'PayPal';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Thông tin về giao dịch PayPal cho các đăng kí PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'ID của khóa học được bán';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Tên đầy đủ của  khóa học mà đăng kí của nó đã được bán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Tên đầy đủ của người mua';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Trạng thái thanh toán';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Lý do vì sao trạng thái thanh toán vẫn ở trong trạng thái đang chờ (nếu là như vậy).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Số lượng thuế được tính trong khoản thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Thời điểm Moodle được thông báo bởi PayPal về khoản thanh toán.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'ID của người dùng đã mua đăng kí khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Trình bô trợ đăng kí PayPal chuyển dữ liệu người dùng từ  Moodle dang trang web của PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Địa chỉ của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Thành phố của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Quốc gia của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Địa chỉ email của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Tên của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Họ của người dùng đang mua khóa học.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Tên đầy đủ của người mua.';
$string['processexpirationstask'] = 'Đăng kí PayPal gửi nhiệm vụ thông báo hết hạn';
$string['sendpaymentbutton'] = 'Gửi thanh toán thông qua PayPal';
$string['status'] = 'Cho phép các đăng kí của PayPal';
$string['status_desc'] = 'Cho phép người dùng để  mặc định dùng PayPal để ghi danh khóa học.';
$string['transactions'] = 'Giao dịch PayPal';
$string['unenrolselfconfirm'] = 'Bạn có muốn rút đăng kí khỏi khóa học "{$a}" không?';
