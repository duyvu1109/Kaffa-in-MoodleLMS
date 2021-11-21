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
 * Strings for component 'virtualpc', language 'vi', version '3.11'.
 *
 * @package     virtualpc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutuds'] = '<center> <a href="{$a-> umaurl} "target = _blank> <img src =" {$ a-> umalogo} "/> </a> </center> <br /> <a href = "{$ a-> umaurl}" target = _blank> Đại học Malaga </a> đã phát triển mô-đun Máy tính ảo nguồn mở tích hợp Moodle và UDS. Tích hợp này được thiết kế để đơn giản hóa quyền truy cập vào máy tính từ xa từ Moodle, cung cấp một đăng nhập giữa hai hệ thống, dễ dàng tạo và quản lý các hoạt động cho phép truy cập vào các loại máy tính ảo khác nhau. <br /> <br /> <em> <a href="{$a-> udsurl} "target = _blank > UDS </a> </em> là một nhà môi giới kết nối máy tính ảo đa dạng cho: <br /> <ul> <li> eLearning <br /> <li> VDI: Quản lý và Triển khai Máy tính Ảo Windows và Linux <br / > <li> Quản lý quyền truy cập của người dùng vào tài nguyên CNTT trong Trung tâm dữ liệu hoặc Đám mây <br /> <li> Hợp nhất các dịch vụ người dùng sử dụng các mô-đun mới hoặc hiện có </ul> <br /> <p> UDS Enterprise được sử dụng trong các lĩnh vực khác nhau và môi trường sản xuất như giáo dục, hành chính công, trung tâm cuộc gọi, bảo hiểm, văn phòng từ xa, v.v. </p> <p> Hơn 10.000 máy tính để bàn ảo Windows và Linux được quản lý và triển khai với UDS Enterprise mỗi ngày, mang lại sự đơn giản và linh hoạt cho hệ thống VDI của các công ty và tổ chức khác nhau. </p> <p> Hãy truy cập <a href = "{$ a-> udsurl} "target = _blank> {$ a-> udsurl} </a> để biết thông tin về hỗ trợ dành cho doanh nghiệp. </p>';
$string['authsmallnameforactivity'] = 'Thẻ xác thực UDS';
$string['authsmallnameforadmin'] = 'Thẻ xác thực UDS của quản trị viên';
$string['configauthsmallnameforactivity'] = 'Thẻ xác thực UDS nơi tạo người dùng UDS ngay trước khi CHUYỂN từ Moodle sang UDS';
$string['configauthsmallnameforadmin'] = 'Thẻ xác thực UDS mà quản trị viên thuộc về';
$string['configfiltropool'] = 'Biểu thức chính quy tùy chọn để lọc mà từ đó UDS gộp lại mà giáo viên sẽ có thể chọn khi thêm hoạt động máy tính ảo';
$string['configgroupname'] = 'Tên của nhóm trong trình xác thực UDS nơi người dùng sẽ được tạo';
$string['configpassword'] = 'Mật khẩu người dùng UDS với quyền quản trị viên';
$string['configport'] = 'Cổng cho các yêu cầu REST';
$string['configurl'] = 'URL máy chủ UDS cho các yêu cầu REST (http [s]: // tên máy chủ)';
$string['configusername'] = 'Mô-đun này sẽ sử dụng người dùng UDS này để thực hiện các yêu cầu REST tới máy chủ UDS. Phải có quyền của quản trị viên.';
$string['courseorinstanceid'] = 'Bạn phải chỉ định ID course_module hoặc ID cụ thể';
$string['errorconnection'] = 'Lỗi kết nối với máy tính ảo UDS: Hãy thử lại sau và nếu lỗi vẫn còn, hãy liên hệ với quản trị viên moodle';
$string['eventvirtualpcjoined'] = 'Máy tính ảo đã tham gia';
$string['filtropool'] = 'Biểu thức chính quy bộ lọc nhóm';
$string['groupname'] = 'Tên nhóm';
$string['idpoolnotfound'] = 'Không tìm thấy loại Máy tính ảo  "{$ a-> poolname}" trong máy chủ UDS. Liên hệ với quản trị viên Moodle.';
$string['incorrectcourseid'] = 'ID mô-đun khóa học không chính xác';
$string['incorrectcoursemodule'] = 'Module khóa học không chính xác';
$string['joinvirtualpc'] = 'Truy cập vào Máy tính ảo';
$string['maxusers'] = 'Người dùng tối đa {$ a}';
$string['misconfiguredcourse'] = 'Khóa học có cấu hình sai';
$string['modifiable'] = 'Giáo viên có thể thay đổi Máy tính ảo đã chọn';
$string['modulename'] = 'Máy tính ảo';
$string['modulename_help'] = '<div class = "indent"> <p> <b> Máy tính ảo </b> Nó cung cấp một máy tính ảo với hệ điều hành và các ứng dụng đã được cài đặt bởi giáo viên. </p> <p> Mô-đun đã được phát triển bởi <a href="http://www.uma.es" target="_blank"> Universidad de Málaga </a> </p> </div>';
$string['modulenameplural'] = 'Các máy tính ảo';
$string['password'] = 'Mật khẩu quản trị viên UDS';
$string['pluginadministration'] = 'Quản trị máy tính ảo';
$string['pluginname'] = 'máy tính ảo';
$string['poollabel'] = 'Chọn loại máy tính ảo';
$string['poollabel_help'] = 'Chọn loại máy tính ảo từ danh sách. Xin lưu ý rằng mỗi loại có thể có số lượng máy tính ảo tối đa cùng một lúc.';
$string['port'] = 'Số cổng máy chủ UDS';
$string['url'] = 'URL máy chủ UDS';
$string['username'] = 'Quản trị viên UDS';
$string['usernotenrolled'] = 'Bạn không được phép truy cập máy tính ảo (vai trò của bạn không cho phép dùng máy ảo: tham gia)';
$string['viewpermission'] = 'Bạn phải có quyền XEM tài nguyên này';
$string['virtualpc'] = 'máy tính ảo';
$string['virtualpc:addinstance'] = 'Thêm hoạt động máy tính ảo';
$string['virtualpc:join'] = 'Truy cập máy tính ảo';
$string['virtualpc:view'] = 'Xem hoạt động của máy tính ảo';
$string['virtualpcerrorcreatingticketid'] = '{$ a-> username} không thể truy cập <b> {$ a-> poolname} </b>. Hãy thử lại sau và nếu sự cố vẫn còn, vui lòng liên hệ với quản trị viên của moodle.';
$string['virtualpcfieldset'] = 'Cài đặt hoạt động máy tính ảo';
$string['virtualpchelp'] = '<p> Sau khi nhấn nút "Truy cập vào máy tính ảo" lần đầu tiên, trình duyệt có thể hiển thị cửa sổ mới để tải xuống phần mềm cần thiết để truy cập máy tính ảo. URL tải xuống của phần mềm là: {$ a} </p>';
$string['virtualpcintro'] = '<b> Mô tả: </b>';
$string['virtualpcname'] = 'Tên máy tính ảo';
$string['virtualpcname_help'] = 'Tên Máy tính ảo là tên sẽ thấy trên trang khóa học liên kết đến hoạt động này';
$string['virtualpcnotfound'] = 'Không có Máy tính ảo nào có tên này trên máy chủ UDS';
$string['virtualpcresterror'] = 'Lỗi kết nối với máy chủ UDS của máy tính ảo: Lỗi trên yêu cầu REST "{$ a}". Xem lại cài đặt mô-đun virtualpc';
