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
 * Strings for component 'install', language 'vi', version '3.11'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Thư mục quản trị được chỉ ra chưa đúng';
$string['admindirname'] = 'Thư mục quản trị';
$string['admindirsetting'] = 'Một số webhosts sử dụng /quản trị như là một URL đặc biệt để bạn có thể truy cập
    một bảng điều khiển hoặc một cái gì đó. Không may là điều này xung đột với
    vị trí chuẩn đối với những trang quản trị Moodle. Bạn có thể cố định điều này bởi
    đổi lại tên thư mục quản trị trong phần cài đặt của bạn, và đặt nó tên mới ở đây.
    Ví dụ: <br/> <br /><b>moodleadmin</b><br /> <br />
    Điều này sẽ cố định các kết nối quản trị trong Moodle.';
$string['availablelangs'] = 'Các gói ngôn ngữ đã có';
$string['caution'] = 'Cảnh báo';
$string['chooselanguage'] = 'Chọn một ngôn ngữ';
$string['compatibilitysettings'] = 'Kiểm tra các thiết lập PHP của bạn ...';
$string['configfilenotwritten'] = 'Kịch bản cài đặt không có khả năng tự động tạo một file config.php file chứa các thiết lập chọn lựa của bạn, có thể thư mục Moodle không có khả năng ghi. Bạn có thể copy bằng tay đoạn mã sau vào một file đặt tên là config.php trong thư mục gốc của Moodle.';
$string['configfilewritten'] = 'config.php được tạo một cách thành công';
$string['configurationcomplete'] = 'Việc cấu hình được hoàn thành';
$string['database'] = 'Cơ sở dữ liệu';
$string['dataroot'] = 'Thư mục dữ liệu';
$string['datarooterror'] = '\'Thư mục dữ liệu\' bạn chỉ ra không thể được tìm thấy hoặc được tạo. Hoặc đường dẫn đúng hoặc tạo thư mục   Either correct the path or create that directory manually.';
$string['dbconnectionerror'] = 'Chúng tôi không thể kết nối cơ sở dữ liệu bạn chỉ ra. Vui lòng kiểm tra các thiết lập cơ sở dữ liệu.';
$string['dbcreationerror'] = 'Lỗi tạo cơ sở dữ liệu. Không thể tạo tên cơ sở dữ liệu với các thiết lập được cung cấp';
$string['dbhost'] = 'Host Server';
$string['dbpass'] = 'Mật khẩu';
$string['dbprefix'] = 'Các bảng cố định trước';
$string['dbtype'] = 'Type';
$string['directorysettings'] = '<p>Vui lòng xác nhận các vị trí của việc cài đặt Moodle này.</p>

<p><b> Địa chỉ web: </b>
Chỉ ra địa chỉ web đầy đủ ở đó Moodle sẽ được truy cập.
Nếu web site của bạn có khả năng truy cập qua nhiều URL thì chọn một cái tự nhiên nhất
mà các học viên của bạn có thể sử dụng. Không bao gồm một vạch chéo
.</p>

<p><b> Thư mục Moodle:</b>
Chỉ ra đường dẫn thư mục đầy đủ cho việc cài đặt này
Đảm bảo rằng chữ hoa/chữ thường thì đúng.</p>

<p><b>Thư mục dữ liệu:</b>
Bạn cần một vị trí ở đó Moodle có thể cất những file được tải lên. Thư mục
này nên có khả năng đọc và khả năng viết bởi người dùng web server
(thông thường \'không ai\' hoặc \'apache\'), nhưng nó không nên có khả năng truy cập trực tiếp qua web
.</p>';
$string['dirroot'] = 'Thư mục Moodle';
$string['dirrooterror'] = 'Thiết lập \'Thư mục Moodle\' dường như không đúng - chúng tôi không thể tìm thấy các file cài đặt Moodle ở đó. Giá trị dưới đây được đặt lại.';
$string['download'] = 'Tải xuống';
$string['fail'] = 'Thất bại';
$string['fileuploads'] = 'File tải lên';
$string['fileuploadserror'] = 'Điều này sẽ là';
$string['fileuploadshelp'] = '<p>File tải lên dường như bị vô hiệu hoá trên máy chủ của bạn.</p>

<p>Moodle vẫn có thể được cài đặt, nhưng không có khả năng này, bạn sẽ không có khả
   năng tải lên các tài liệu cua học hoặc các ảnh trong hồ sơ người dùng.</p>

<p>Để có thể tải file lên (hoặc nhà quản trị hệ thống của bạn ) sẽ cần
   soạn thảo file php.ini trên hệ thống của bạn và thay đổi thiết lập đối với
   <b>file tải lên</b> thành \'1\'.</p>';
$string['installation'] = 'Cài đặt';
$string['memorylimit'] = 'Giới hạn bộ nhớ';
$string['memorylimiterror'] = 'PHP thiết lập giới hạn bộ nhớ quá thấp... you may run into problems later.';
$string['memorylimithelp'] = '<p> PHP thiết lập giới hạn bộ nhớ cho máy chủ của bạn hiện tại là {$a}.</p>

<p>Đây có thể là nguyên nhân Moodle có các vấn đề về bộ nhớ vào một thời điểm nào đó, đặc biệt
   nếu bạn có nhiều môđun được cho phép và nhiều người dùng.

<p>Chúng tôi đề nghị rằng bạn cấu hình PHP với một giới hạn lớn hơn nếu có thể, chẳng hạn như 40M.
   Có một số cách để làm điều này mà bạn có thể thử:
<ol>
<li>Nếu bạn có khả năng, biên tập lại PHP với <i>--giới hạn bộ nhớ cho phép</i>.
    Điều này sẽ cho phép Moodle tự thiết lập giới hạn bộ nhớ.
<li>Nếu bạn truy cập file php.ini của bạn, bạn có thể thay đổi <b>giới hạn bộ nhớ</b>
    thiết lập trong đó thành một giá trị nào đó chẳng hạn như 40M. Nếu bạn không được phép truy cập
    bạn có thể yêu cầu quản trị viên của bạn để làm điều đó cho bạn.</li>
<li> Trên một số máy chủ chạy PHP bạn có thể tạo một file .htaccess trong thư mục Moodle
    chứa dòng này:
    <p><blockquote> giá trị giới hạn bộ nhớ 40M</blockquote></p>
    <p>Tuy nhiên, trên một số máy chủ điều này có thể ngăn cản <b>tất cả</b> các trang PHP làm việc
    (bạn sẽ nhìn thấy các lỗi khi bạn xem xét những trang này )vì thế bạn sẽ pahỉ di chuyền file .htaccess.</p></li>
</ol>';
$string['pass'] = 'Pass';
$string['phpversion'] = 'Phiên bản PHP';
$string['phpversionhelp'] = '<p>Moodle yêu cầu một phiên bản PHP ít nhất là 4.1.0.</p>
<p>Bạn đang dùng phiên bản hiện hành {$a}</p>
<p>Ban phải nâng cấp PHP hoặc di chuyển một máy chủ với một phiên bản PHP mới hơn!</p>';
$string['safemode'] = 'Chế độ an toàn';
$string['safemodeerror'] = 'Moodle có thể gặp một số sự cố với chế độ an toàn';
$string['safemodehelp'] = '<p>Moodle có thể có một số vấn đề với chế độ an toàn,
	đặc biệt là nếu nó không được phép tạo các file mới.</p>

<p>Chế độ an toàn thường được các host web bật lên, do đó bạn có thể
   phải tìm cung cấp một công ty host web mới cho site Moodle của bạn.</p>

<p>Bạn có thể thử tiếp tục cài đặt nếu bạn thích, nhưng có thể phát sinh một số vấn đề sau này.</p>';
$string['sessionautostart'] = 'Bắt đầu tự động Session';
$string['sessionautostarterror'] = 'Điều này nên là tắt';
$string['sessionautostarthelp'] = '<p>Moodle yêu cầu hỗ trợ session và sẽ không làm việc nếu không có nó.</p>

<p>Sessions có thể được cho phép trong file php.ini ... tìm kiếm tham số session.auto_start.</p>';
$string['wwwroot'] = 'Địa chỉ web';
$string['wwwrooterror'] = 'Địa chỉ web không hợp lệ - Các file cài đặt Moodle không xuất hiện ở đó.';
