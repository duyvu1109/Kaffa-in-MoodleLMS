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
 * Strings for component 'scorm', language 'vi', version '3.11'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocontinue_help'] = '<p><b>Tự động tiếp tục</b></p>

<p>Nếu Tự động tiếp tục được đặt là Có, khi một SCO
gọi phương thức "kết thúc trao đổi thông tin", SCO tiếp theo sẽ được phân phối
tự động đến cho học viên.</p>

<p>Nếu nó được đặt là Không, người dùng phải nhấn
vào nút "Tiếp tục" để học tiếp.</p>';
$string['firstaccess'] = 'Truy cập lần đầu tiên';
$string['grademethod_help'] = '<p><b>Phương pháp tính điểm</b></p>

<p>Kết quả của hoạt động SCORM/AICC hiển thị trong trang Điểm số có thể được đánh
giá theo một trong các cách sau:
    <ul>
	<li><b>Trạng thái SCO</b><br />Chế độ này hiển thị số SCO đã hoàn thành/đã đỗ của hoạt động. Giá trị lớn nhất là số lượng SCO.</li>
	<li><b>Điểm cao nhất</b><br />Trang điểm số sẽ hiển thị điểm cao nhất mà học viên đạt được trong tất cả các SCO đã đỗ.</li>
	<li><b>Điểm trung bình</b><br />Nếu bạn chọn chế độ này, Moodle sẽ tính trung bình tất cả các điểm.</li>
	<li><b>Điểm tổng</b><br />Với chế độ này tất cả các điểm sẽ được cộng lại.</li>
</p>';
$string['modulename'] = 'Gói SCORM';
$string['modulename_help'] = 'Một gói SCORM là một bộ sưu tập các file được tạo theo tiêu chuẩn  cho mục đích học tập. Module hoạt động SCORM cho phép SCORM hoặc các gói AICC được đăng tải dưới dạng file nén và thêm vào khóa học.

Nội dung thường được hiển thị dàn trải ra nhiều trang, kèm theo điều hướng giữa các trang. Có rất nhiều lựa chọn cho việc hiển thị nội dung trong cửa sổ pop-up, kèm theo bảng nội dung hoặc kèm theo các nút điều hướng,... Các hoạt động SCORM thường bao gồm các câu hỏi và điểm sẽ được lưu lại trong sổ điểm.

Các hoạt động SCORM có thể dùng

* Để trình bày các nội dung mang tính truyền thông và có hoạt họa.
* Như một công cụ đánh giá năng lực.';
$string['modulenameplural'] = 'Các gói SCORM';
$string['myaiccsessions'] = 'Các mục AICC của tôi';
$string['myattempts'] = 'Các lần làm bài của tôi';
$string['nav'] = 'Hiển thị Điều hướng';
$string['navdesc'] = 'Cài đặt này chỉ rõ hiển thị hay ẩn các nút điều hướng và vị trí của chúng.';
$string['navigation'] = 'Điều hướng';
$string['navpositionleft'] = 'Vị trí của các nút điều hướng từ trái qua được tính bằng độ phân giải.';
$string['navpositiontop'] = 'Vị trí của các nút điều hướng từ trên xuống được tính bằng độ phân giải.';
$string['newattempt'] = 'Bắt đầu một lần làm mới';
$string['next'] = 'Tiếp tục';
$string['noactivity'] = 'Không có gì để báo cáo';
$string['noattemptsallowed'] = 'Số lần được phép làm';
$string['noattemptsmade'] = 'Số lần làm mà bạn đã sử dụng';
$string['nolimit'] = 'Không giới hạn số lần làm';
$string['noprerequisites'] = 'Xin lỗi, bạn không có các điều kiện tiên quyết để truy cập hoạt động này.';
$string['noreports'] = 'Không có báo cáo để hiển thị';
$string['normal'] = 'Bình thường';
$string['noscriptnoscorm'] = 'Trình duyệt của bạn không hỗ trợ JavaScript hoặc tính năng hỗ JavaScript đã bị tắt. Gói SCORM này không chạy hoặc không lưu trữ dữ liệu một cách đúng đắn.';
$string['notattempted'] = 'Không làm';
$string['notopenyet'] = 'Xin lỗi, hoạt động này chưa bắt đầu cho tới lúc {$a}';
$string['openafterclose'] = 'Bạn đã định ngày bắt đầu sau ngày kết thúc';
$string['optallstudents'] = 'toàn bộ người dùng';
$string['optattemptsonly'] = 'chỉ có những người dùng với các lần làm bài';
$string['options'] = 'Các lựa chọn (Bị chặn bởi một số trình duyệt)';
$string['optionsadv'] = 'Các lựa chọn (Nâng cao)';
$string['optionsadv_desc'] = 'Nếu tích, chiều cao và chiều rộng sẽ được liệt vào dạng cài đặt nâng cao.';
$string['optnoattemptsonly'] = 'chỉ có những người dùng không có bài làm';
$string['organization'] = 'Tổ chức';
$string['organizations'] = 'Các tổ chức';
$string['othersettings'] = 'Các thiết đặt phụ';
$string['package'] = 'Gói file';
$string['package_help'] = 'Gói file dạng nén (hoặc pif) có chứa các file định nghĩa khóa học dạng SCORM/AICC.';
$string['packagefile'] = 'Không có gói file nào được chỉ rõ';
$string['packagehdr'] = 'Gói';
$string['packageurl'] = 'URL';
$string['page-mod-scorm-x'] = 'Trang module SCORM bất kì';
$string['pagesize'] = 'Kích thước trang';
$string['passed'] = 'Đã đạt';
$string['pluginadministration'] = 'Quản lí gói SCORM';
$string['pluginname'] = 'Gói SCORM';
$string['popup'] = 'Cửa sổ mới';
$string['popuplaunched'] = 'Gói SCORM này đã được mở trong một cửa sổ pop-up. Nếu bạn đã xem xong nguồn này thì nhấn vào đây để quay về trang khóa học.';
$string['popupmenu'] = 'Trong một bảng chọn thả xuống';
$string['popupopen'] = 'Mở gói ở trong một cửa sổ khác';
$string['popupsblocked'] = 'Các cửa sổ pop-up bị chặn, khiến cho gói SCORM này không chạy được. Xin hãy kiếm tra lại cài đặt trình duyệt của bạn trước khi thử lại lần nữa.';
$string['prev'] = 'Trước';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Theo dõi trạng thái bài học';
$string['privacy:metadata:aicc_session:scormmode'] = 'Theo dõi chế độ của yếu tố';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Theo dõi trạng thái của yếu tố';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Theo dõi thời gian theo phiên';
$string['privacy:metadata:scorm_aicc_session'] = 'Mục thông tin của AICC HACP';
$string['privacy:metadata:userid'] = 'ID của người dùng đã truy cập vào hoạt động SCORM';
$string['protectpackagedownloads'] = 'Bảo vệ bản tải về của gói';
$string['raw'] = 'Điểm trần';
$string['report'] = 'Báo cáo';
$string['reports'] = 'Các báo cáo';
$string['response'] = 'Phản hồi';
$string['result'] = 'Kết quả';
$string['results'] = 'Các kết quả';
$string['review'] = 'Xem lại';
$string['reviewmode'] = 'Chế độ xem lại';
$string['rightanswer'] = 'Câu trả lời dúng';
$string['scoes'] = 'Các mục tiêu học tập';
$string['score'] = 'Điểm';
$string['scorm:addinstance'] = 'Thêm một gói SCORM mới';
$string['scorm:deleteownresponses'] = 'Xóa các lần làm của mình';
$string['scorm:deleteresponses'] = 'Xóa các lần làm trên SCORM';
$string['scorm:savetrack'] = 'Lưu các theo dõi';
$string['scorm:skipview'] = 'Bỏ qua tổng quan';
$string['scorm:viewreport'] = 'Xem các báo cáo';
$string['scorm:viewscores'] = 'Xem điểm';
$string['scormclose'] = 'Có sẵn đến';
$string['scormcourse'] = 'Khóa học';
$string['scormopen'] = 'Có sẵn từ';
$string['scormresponsedeleted'] = 'Xóa toàn bộ các lần làm của người dùng';
$string['scormstandard'] = 'Chế độ tiêu chuẩn của SCORM';
$string['scormstandarddesc'] = 'Khi bị vô hiệu hóa, Moodle cho phép các gói SCORM 1.2 được chứa nhiều hơn mức quy định và dùng cài đặt hình thức tên đầy đủ của Moodle khi chuyển tên người dùng sang gói SCORM.';
$string['scormtype'] = 'Kiểu';
$string['scrollbars'] = 'Cho phép cuộc cửa sổ';
$string['search:activity'] = 'Gói SCORM - thông tin hoạt động';
$string['selectall'] = 'Chọn tất cả';
$string['selectnone'] = 'Bỏ chọn tất cả';
$string['show'] = 'Hiển thị';
$string['sided'] = 'Sang bên cạnh';
$string['skipview'] = 'Học viên bỏ qua trang cấu trúc nội dung';
$string['skipview_help'] = 'Cài đặt này định rõ trang cấu trúc nội dung có được bỏ qua (không hiển thị) hay không. Nếu gói chỉ chứa một mục tiêu học tập thì trang cấu trúc nội dung luôn được bỏ qua.';
$string['started'] = 'Đã bắt đầu vào lúc';
$string['status'] = 'Trạng thái';
$string['statusbar'] = 'Hiển thị thanh trạng thái';
$string['student_response'] = 'Phản hồi';
$string['subplugintype_scormreport'] = 'Báo cáo';
$string['subplugintype_scormreport_plural'] = 'Các báo cáo';
$string['suspended'] = 'Bị đình chỉ';
$string['syntax'] = 'Lỗi cú pháp';
$string['time'] = 'Thời gian';
$string['title'] = 'Tiêu đề';
$string['toc'] = 'TOC';
$string['toolbar'] = 'Hiển thị thanh công cụ';
$string['totaltime'] = 'Thời gian';
$string['trackcorrectcount_help'] = 'Số lượng các đáp án đúng trong câu hỏi';
$string['trackid'] = 'ID';
$string['trackpattern_help'] = 'Đây mới là câu trả lời đúng cho câu hỏi này, nó không hiển thị câu trả lời của học viên.';
$string['trackresponse'] = 'Phản hồi';
$string['trackresponse_help'] = 'Đây là câu trả lời của học viên dành cho câu hỏi này';
$string['trackresult'] = 'Kết quả';
$string['trackresult_help'] = 'Xuất hiện nếu học viên trả lời đúng.';
$string['trackscoremax'] = 'Điểm tối đa';
$string['trackscoremin'] = 'Điểm tối thiểu';
$string['trackscoreraw'] = 'Điểm trần';
$string['tracksuspenddata'] = 'Đình chỉ dữ liệu';
$string['tracktime'] = 'Thời điểm';
$string['tracktime_help'] = 'Thời điểm bắt đầu làm bài';
$string['tracktype'] = 'Kiểu';
$string['tracktype_help'] = 'Loại câu hỏi, ví dụ "lựa chọn" hoặc "câu trả lời ngắn".';
$string['type'] = 'Kiểu';
$string['typelocal'] = 'Gói đã được đăng tải';
$string['typelocalsync'] = 'Gói đã được tải về';
$string['unziperror'] = 'Đã xảy ra lỗi khi giải nén gói';
$string['updatefreq'] = 'Tần suất tự động cập nhật';
$string['updatefreq_help'] = 'Điều này cho phép gói bên ngoài được tải về và tải lên tự động.';
$string['validateascorm'] = 'Đánh giá một gói';
$string['value'] = 'Giá trị';
$string['viewallreports'] = 'Xem các báo cáo cho {$a} lần làm';
$string['viewalluserreports'] = 'Xem các báo cáo cho {$a} người dùng';
$string['whatgrade'] = 'Chấm điểm bài làm';
$string['whatgradedesc'] = 'Nếu cho phép làm nhiều lần thì điểm cao nhất, trung bình hoặc điểm của lần làm đầu tiên hoặc cuối cùng có được lưu vào sổ điểm hay không.';
$string['width'] = 'Chiều rộng';
$string['window'] = 'Cửa sổ';
