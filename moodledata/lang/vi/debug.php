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
 * Strings for component 'debug', language 'vi', version '3.11'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Không tìm thấy trình bổ trợ xác thực {$a}.';
$string['blocknotexist'] = 'Khối {$a} không tồn tại';
$string['cannotbenull'] = '{$a} không thể rỗng!';
$string['cannotdowngrade'] = 'Không thể giáng cấp {$a} từ {$a->oldversion} xuống {$a->newversion}.';
$string['cannotfindadmin'] = 'Không tìm được người dùng quản trị viên!';
$string['cannotinitpage'] = 'Không thể hoàn thành khởi tạo trang: kí danh không hợp lệ {$a->name} {$a->id}';
$string['cannotsetuptable'] = 'Không thể cài đặt các bảng {$a} thành công';
$string['codingerror'] = 'Phát hiện lỗi mã nguồn, nó phải được sửa bởi lập trình viên: {$a}';
$string['configmoodle'] = 'Moodle chưa được cấu hình Bạn cần chỉnh sửa config.php trước.';
$string['debuginfo'] = 'Thông tin gỡ lỗi';
$string['erroroccur'] = 'Lỗi xảy ra trong quá trình này';
$string['invalidarraysize'] = 'Kích thước mảng không phù hợp trong các tham số của {$a}';
$string['invalideventdata'] = 'Dữ liệu sự kiện được gửi không phù hợp: {$a}';
$string['invalidparameter'] = 'Phát hiện giá trị tham số không phù hợp';
$string['invalidresponse'] = 'Phát hiện giá trị phản hồi không phù hợp';
$string['line'] = 'Dòng';
$string['missingconfigversion'] = 'Bảng thiết lập không chứa phiên bản, không thể tiếp tục, rất tiếc.';
$string['modulenotexist'] = 'Mô-đun {$a} không tồn tại';
$string['morethanonerecordinfetch'] = 'Tìm thấy nhiều bản ghi trong fetch() !';
$string['mustbeoveride'] = 'Phương thức trừu tượng {$a} phải được nạp chồng.';
$string['noadminrole'] = 'Không tìm thấy vai trò quản trị viên';
$string['noblocks'] = 'Không có khối được cài đặt!';
$string['nocate'] = 'Không có chuyên mục!';
$string['nomodules'] = 'Không tìm thấy các mô-đun!!';
$string['nopageclass'] = 'Đã nhập  {$a} nhưng không tìm thấy lóp học';
$string['noreports'] = 'Không có báo cáo truy cập được';
$string['notables'] = 'Không có bảng!';
$string['phpvaroff'] = 'Biến máy chủ PHP \'{$a->name}\' nên Tắt - {$a->link}';
$string['phpvaron'] = 'Biến máy chủ PHP \'{$a->name}\' không Bật - {$a->link}';
$string['sqlrelyonobsoletetable'] = 'SQL này đang phục thuộc vào một bảng đã lỗi thời/hết hạn: {$a}!  Mã của bạn phải được sửa bởi lập trình viên.';
$string['withoutversion'] = 'Tệp chính version.php thiếu, không thể đọc hoặc hư hại.';
$string['xmlizeunavailable'] = 'Hiện không có sẵn các chức năng xmlize';
