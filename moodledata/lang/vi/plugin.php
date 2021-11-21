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
 * Strings for component 'plugin', language 'vi', version '3.11'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Hành động';
$string['availability'] = 'Tính hiện hữu';
$string['checkforupdates'] = 'Kiểm tra cập nhật hiện hữu';
$string['checkforupdateslast'] = 'Lần kiểm tra cuối hoàn thành vào {$a}';
$string['dependencyinstall'] = 'Cài đặt';
$string['dependencyupload'] = 'Đăng tải';
$string['detectedmisplacedplugin'] = 'Trình bổ trợ "{$a->component}" được cài đặt ở vị trí không đúng "{$a->current}", vị trí mong đợi là "{$a->expected}"';
$string['displayname'] = 'Tên trình bổ trợ';
$string['err_response_curl'] = 'Không thể lấy dữ liệu cập nhật hiện hữu - lỗi cURL không mong muốn.';
$string['err_response_format_version'] = 'Phiên bản định dạng phản hồi không mong muốn. Hãy thử kiểm tra lại các cập nhật hiện hữu.';
$string['err_response_http_code'] = 'Không thể lấy dữ liệu cập nhật hiện hữu - mã nguồn phản hồi HTTP không mong muốn.';
$string['filterall'] = 'Hiện tất cả';
$string['filtercontribonly'] = 'Chỉ hiện các trình bổ trợ bổ sung';
$string['filterupdatesonly'] = 'Chỉ hiện có thể cập nhật';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Không có các trình bổ trợ loại này được cài đặt';
$string['notdownloadable'] = 'Không thể tải gói';
$string['notdownloadable_help'] = 'Gói ZIP với bản cập nhật không thể tải về tự động. Hãy xem trang tài liệu để thêm trợ giúp.';
$string['notes'] = 'Ghi chú';
$string['notwritable'] = 'Các tập tin trình bổ trợ không ghi được';
$string['notwritable_help'] = 'Bạn đã kích hoạt triển khai tự động cập nhật và có một bản cập nhật cho trình bổ trợ này. Tuy nhiên, các tập tin trình bổ trợ không thể ghi được bởi máy chủ web vì vậy bản cập nhật không thể được cài đặt tự động.

Bạn cần làm cho thư mục trình bổ trợ và tất cả nội dung của nó có thể ghi được để có thể cài đặt cập nhật tự động.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['pluginchecknotice'] = 'Trang này hiển thị các trình bổ trợ đòi hỏi yêu sự chú ý của bạn trong quá trình nâng cấp. Các mục được đánh dấu bao gồm các trình bổ trợ mới mà bạn định cài đặt, các trình bổ trợ được cập  nhật sắp sửa nâng cấp và bất kì trình bổ trợ còn thiếu nào. Các trình bổ trợ bổ sung được đánh dấu nếu có bản cập nhật cho chúng. Khuyến nghị ban kiểm tra liệu có các phiên bản trình bổ trợ gần đây hơn không và cập nhật mã nguồn của chúng trước khi tiếp tục với bản nâng cấp Moodle này.';
$string['plugindisable'] = 'Vô hiệu hóa';
$string['plugindisabled'] = 'Bị vô hiệu hóa';
$string['pluginenable'] = 'Kích hoạt';
$string['pluginenabled'] = 'Được kích hoạt';
$string['release'] = 'Phát hành';
$string['requiredby'] = 'Được yêu cầu bởi: {$a}';
$string['requires'] = 'Yêu cầu';
$string['rootdir'] = 'Thư mục';
$string['settings'] = 'Thiết lập';
$string['source'] = 'Nguồn';
$string['sourceext'] = 'Bổ sung';
$string['sourcestd'] = 'Chuẩn';
$string['status'] = 'Trạng thái';
$string['status_delete'] = 'Sắp sửa xóa';
$string['status_downgrade'] = 'Phiên bản cao hơn đã được cài đặt!';
$string['status_missing'] = 'Không có trong ổ đĩa cứng';
$string['status_new'] = 'Sắp sửa cài đặt';
$string['status_nodb'] = 'Không CSDL';
$string['status_upgrade'] = 'Sắp sửa nâng cấp';
$string['status_uptodate'] = 'Được cài đặt';
$string['systemname'] = 'Định danh';
$string['type_auth'] = 'Phương thức xác thực';
$string['type_auth_plural'] = 'Phương thức chứng thực';
$string['type_availability'] = 'Giới hạn hiện hữu';
$string['type_availability_plural'] = 'Các giới hạn hiện hữu';
$string['type_block'] = 'Khối';
$string['type_block_plural'] = 'Khối';
$string['type_cachelock'] = 'Trình kiểm soát khóa bộ đệm';
$string['type_cachelock_plural'] = 'Các trình kiểm soát khóa bộ đệm';
$string['type_cachestore'] = 'Lưu trữ bộ đệm';
$string['type_cachestore_plural'] = 'Lưu trữ bộ đệm';
$string['type_calendartype'] = 'Loại lịch';
$string['type_calendartype_plural'] = 'Các loại lịch';
$string['type_coursereport'] = 'Báo cáo khóa học';
$string['type_coursereport_plural'] = 'Các báo cáo khóa học';
$string['type_editor'] = 'Trình soạn thảo';
$string['type_editor_plural'] = 'Các trình soạn thảo';
$string['type_enrol'] = 'Phương thức ghi danh';
$string['type_enrol_plural'] = 'Các phương thức ghi danh';
$string['type_filter'] = 'Bộ lọc văn bản';
$string['type_filter_plural'] = 'Bộ lọc văn bản';
$string['type_format'] = 'Định dạng khóa học';
$string['type_format_plural'] = 'Các định dạng khoá học';
$string['type_gradeexport'] = 'Phương thức xuất điểm';
$string['type_gradeexport_plural'] = 'Các phương thức xuất điểm';
$string['type_gradeimport'] = 'Phương thức nhập điểm';
$string['type_gradeimport_plural'] = 'Các phương thức nhập điểm';
$string['type_gradereport'] = 'Báo cáo sổ điểm';
$string['type_gradereport_plural'] = 'Các báo cáo sổ điểm';
$string['type_gradingform'] = 'Phương thức chấm điểm nâng cao';
$string['type_gradingform_plural'] = 'Các phương thức chấm điểm nâng cao';
$string['type_local'] = 'Trình bổ trợ cục bộ';
$string['type_local_plural'] = 'Các trình bổ trợ cục bộ';
$string['type_message'] = 'Đầu ra thông báo';
$string['type_message_plural'] = 'Các đầu ra thông báo';
$string['type_mnetservice'] = 'Dịch vụ MNet';
$string['type_mnetservice_plural'] = 'Các dịch vụ MNet';
$string['type_mod'] = 'Module hoạt động';
$string['type_mod_plural'] = 'Các mô-đun hoạt động';
$string['type_plagiarism'] = 'Trình bổ trợ chống đạo văn';
$string['type_plagiarism_plural'] = 'Các trình bổ trợ chống đạo văn';
$string['type_portfolio'] = 'Cặp hồ sơ';
$string['type_portfolio_plural'] = 'Các cặp hồ sơ';
$string['type_profilefield'] = 'Loại mục hồ sơ';
$string['type_profilefield_plural'] = 'Các loại mục hồ sơ';
$string['type_qbehaviour'] = 'Hành vi câu hỏi';
$string['type_qbehaviour_plural'] = 'Các hành vi câu hỏi';
$string['type_qformat'] = 'Định dạng nhập/xuất câu hỏi';
$string['type_qformat_plural'] = 'Các định dạng nhập/xuất câu hỏi';
$string['type_qtype'] = 'Loại câu hỏi';
$string['type_qtype_plural'] = 'Các loại câu hỏi';
$string['type_report'] = 'Báo cáo trang';
$string['type_report_plural'] = 'Các báo cáo';
$string['type_repository'] = 'Kho';
$string['type_theme'] = 'Giao diện';
$string['type_theme_plural'] = 'Giao diện';
$string['version'] = 'Phiên bản';
