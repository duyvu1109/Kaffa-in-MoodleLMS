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
 * Strings for component 'webexactivity', language 'vi', version '3.11'.
 *
 * @package     webexactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Cài đặt cuộc họp bổ sung';
$string['allchat'] = 'Người tham gia có thể trò chuyện với những người tham gia khác';
$string['apipassword'] = 'Mật khẩu quản trị viên WebEx';
$string['apipassword_help'] = 'Mật khẩu cho tài khoản quản trị viên trên trang web của bạn.';
$string['apisettings'] = 'Cài đặt giao diện lập trình ứng dụng (API)';
$string['apiusername'] = 'Tên người dùng quản trị viên WebEx';
$string['apiusername_help'] = 'Tên người dùng cho tài khoản quản trị viên trên trang web của bạn. Đây phải là một tài khoản dành riêng cho Moodle vì lý do bảo mật.';
$string['availabilityendtime'] = 'Thời gian kết thúc khả dụng';
$string['badpassword'] = 'Tên người dùng và mật khẩu WebEx của bạn không khớp.';
$string['badpasswordexception'] = 'Mật khẩu WebEx của bạn không chính xác và không thể cập nhật được.';
$string['calpublish'] = 'Đưa các cuộc họp vào lịch';
$string['calpublish_help'] = 'Đưa các cuộc họp lên lịch của Moodle và hiển thị nó trên trang chính giao diện của người sử dụng.
Các cuộc họp mở rộng/thêm sẽ không được công bố/đưa lên.';
$string['confirmrecordingdelete'] = 'Bạn có chắc là bạn muốn xóa bản ghi hình <b>{$a->name}</b>, với độ dài {$a->time}? Điều này không thể được hoàn tác.';
$string['confirmrecordingsdelete'] = 'Bạn có chắc chắn muốn xóa các bản ghi đã chọn không? Điều này không thể được hoàn tác.';
$string['connectionexception'] = 'Đã xảy ra lỗi khi cố gắng kết nối: {$a->error}';
$string['curlsetupexception'] = 'Đã xảy ra lỗi khi thiết lập cài đặt';
$string['defaultmeetingtype'] = 'Loại cuộc họp mặc định';
$string['defaultmeetingtype_help'] = 'Loại cuộc họp sẽ được chọn trước khi tạo cuộc họp mới.';
$string['deletelink'] = '<a href="{$a->url}">Xóa</a>';
$string['deletetime'] = 'Thời gian xóa';
$string['deletionin'] = '<div>{$a->thời gian} cho đến khi xóa.</div>';
$string['deletionsoon'] = '<div> Sẽ sớm bị xóa. </div>';
$string['description'] = 'Mô tả';
$string['directlinks'] = 'Liên kết trực tiếp';
$string['directlinkstext'] = '<p> Các liên kết này cung cấp quyền truy cập trực tiếp vào các bản ghi âm trên máy chủ Moodle. Không yêu cầu đăng nhập và không phải đăng nhập khi truy cập. </p> <br />
Truyền trực tuyến: <a target="_blank" href="{$a-> streamurl} "alt =" Liên kết phát trực tuyến "> {$ a-> streamurl} </a> <br />
Tải xuống: <a target="_blank" href="{$a-> fileurl} "alt =" Liên kết phát trực tuyến "> {$ a-> fileurl} </a> <br />';
$string['duration'] = 'Thời gian dự kiến';
$string['duration_help'] = 'Thời lượng dự kiến của cuộc họp. Nhằm mục đích cung cấp thông tin và không ảnh hưởng đến thời gian cuộc họp có thể kéo dài.';
$string['enablecallin'] = 'Bật cho phép điện thoại gọi đến';
$string['enablecallin_help'] = 'Bật hỗ trợ "GỌI ĐẾN" qua điện thoại cho các cuộc họp mới được tạo. Không bật trừ khi bạn có hỗ trợ điện thoại "GỌI ĐẾN".';
$string['entermeeting'] = 'Vào cuộc họp';
$string['error_HM_AccessDenied'] = 'Từ chối quyền truy cập để tổ chức cuộc họp';
$string['error_JM_InvalidMeetingKey'] = 'Đã xảy ra lỗi khóa cuộc họp trong WebEx và bạn không thể tham gia cuộc họp này.';
$string['error_JM_InvalidMeetingKeyOrPassword'] = 'Đã xảy ra lỗi khóa cuộc họp hoặc lỗi mật khẩu trong WebEx và bạn không thể tham gia cuộc họp này.';
$string['error_JM_MeetingLocked'] = 'Cuộc họp này đã bị khóa và bạn không thể tham gia.';
$string['error_JM_MeetingNotInProgress'] = 'Cuộc họp hiện không được tiến hành. Nó có thể chưa bắt đầu hoặc đã kết thúc.';
$string['error_LI_AccessDenied'] = 'Người dùng không thể đăng nhập vào WebEx.';
$string['error_LI_AccountLocked'] = 'Tài khoản người dùng WebEx bị khóa.';
$string['error_LI_AutoLoginDisabled'] = 'Đăng nhập tự động bị tắt đối với người dùng này';
$string['error_LI_InvalidSessionTicket'] = 'Phiên gửi không hợp lệ. Vui lòng thử lại.';
$string['error_LI_InvalidTicket'] = 'Phiên đăng nhập không hợp lệ. Vui lòng thử lại.';
$string['error_unknown'] = 'Đã xảy ra lỗi không xác định.';
$string['errordeletingrecording'] = 'Lỗi khi xóa bản ghi';
$string['event_meeting_ended'] = 'Cuộc họp đã kết thúc';
$string['event_meeting_hosted'] = 'Cuộc họp đã được tổ chức';
$string['event_meeting_joined'] = 'Cuộc họp đã tham gia';
$string['event_meeting_started'] = 'Cuộc họp đã bắt đầu';
$string['event_recording_created'] = 'Các bản ghi đã được tạo';
$string['event_recording_deleted'] = 'Các bản ghi đã được xóa';
$string['event_recording_downloaded'] = 'Các bản ghi đã được tải về';
$string['event_recording_undeleted'] = 'Các bản ghi chưa xóa';
$string['event_recording_viewed'] = 'Các bản ghi đã được xem';
$string['externallinktext'] = '<p> Liên kết này dành cho những người tham gia chưa đăng ký khóa học này. Không cần phải gửi email liên kết này cho các học viên đã đăng ký khóa, vì họ có thể chỉ cần nhấp vào liên kết Tham gia cuộc họp trên trang trước. Liên kết này nên được chia sẻ cẩn thận - bất kỳ ai có liên kết này sẽ có thể truy cập cuộc họp này. Để mời những người khác tham gia cuộc họp, hãy sao chép URL bên dưới và gửi cho họ. Nếu đây là một cuộc họp công khai, liên kết này có thể được công bố trên trang web. </p>';
$string['externalpassword'] = 'Những người tham gia cũng sẽ cần biết mật khẩu cuộc họp: <b> {$ a} </b>';
$string['getexternallink'] = '<a href="{$a-> url} "> Nhận liên kết của người tham gia bên ngoài </a>';
$string['host'] = 'Người tổ chức';
$string['hostmeetinglink'] = '<a href="{$a-> url} "> Người tổ chức cuộc họp </a>';
$string['hostschedulingexception'] = 'Người dùng không thể lên lịch họp cho máy chủ lưu trữ này.';
$string['inprogress'] = 'Đang trong tiến trình';
$string['invalidtype'] = 'Loại không hợp lệ';
$string['joinmeetinglink'] = '<a href="{$a-> url} "> Tham gia cuộc họp </a>';
$string['longavailability'] = 'Thời lượng khả dụng';
$string['longavailability_help'] = 'Đặt tùy chọn này sẽ khiến cuộc họp có thể diễn ra cho đến hết thời lượng khả dụng. Cho phép các cuộc họp được sử dụng lại cho những việc khác như giờ hành chính';
$string['manageallrecordings'] = 'Quản lý tất cả các bản ghi WebEx';
$string['manageallrecordings_help'] = 'Quản lý tất cả các bản ghi từ máy chủ WebEx, không chỉ những bản ghi hoạt động từ Moodle';
$string['meetingclosegrace'] = 'Thời gian được thêm của cuộc họp';
$string['meetingclosegrace_help'] = 'Số phút sau thời gian bắt đầu cộng với thời lượng hoàn thành cuộc họp.';
$string['meetingpassword'] = 'Mật khẩu cuộc họp';
$string['meetingpast'] = 'Cuộc họp này đã diễn ra';
$string['meetingsettings'] = 'Cài đặt cuộc họp';
$string['meetingtemplate'] = 'Mẫu WebEx';
$string['meetingtemplate_help'] = 'Tên của mẫu bạn đã thiết lập trên tài khoản WebEx của mình cho kiểu cuộc họp này. Để trống để sử dụng cài đặt mặc định. Lưu ý: việc chỉ ra một tên mẫu không tồn tại sẽ ngăn việc tạo các phiên họp thuộc kiểu cuộc họp này.';
$string['meetingtype'] = 'Phân loại cuộc họp';
$string['meetingtypes'] = 'Các loại cuộc họp';
$string['meetingtypes_desc'] = 'Đây là các loại cuộc họp WebEx được hỗ trợ bởi mô-đun này. Với mỗi loại, bạn có thể chọn xem nó là "Có sẵn" (bạn có giấy phép cho nó ở WebEx, và bạn muốn sử dụng nó từ Moodle), và nếu bạn muốn nó trở nên "Có sẵn cho tất cả người dùng". Loại "Có sẵn", nhưng không "Có sẵn cho tất cả người dùng" sẽ chỉ được lựa chọn bởi những người có quyền mod/webexactivity:allavailabletypes. "Yêu cầu mật khẩu cuộc họp" được sử dụng để thông báo cho plugin nếu WebEx yêu cầu có mật khẩu. Sử dụng "Tạo mật khẩu bắt buộc" bên dưới để cho phép người sử dụng không cung cấp mật khẩu.';
$string['meetingupcoming'] = 'Cuộc họp này vẫn chưa có sẵn để tham gia.';
$string['modulename'] = 'Cuộc họp WebEx';
$string['modulename_help'] = 'Hoạt động Cuộc họp WebEx cho phép người hướng dẫn lên lịch cuộc họp vào hệ thống họp trên web WebEx *.
Khi bạn thêm các Cuộc họp WebEx, bạn cần xác định ngày và giờ của cuộc họp, cũng như các thông số tùy chọn khác (như thời lượng dự kiến, mô tả, v..v) Sau đó, những người tham gia (người đăng ký học) có thể tham gia cuộc họp WebEx bằng cách bấm vào liên kết "tham gia cuộc họp" ở trong hoạt động ở Moodle (giảng viên sẽ thấy một đường liên kết "chủ trì cuộc họp"). Nếu cuộc họp được ghi lại, học sinh/người tham gia sẽ có thể xem bản ghi lại sau khi cuộc họp kết thúc.
* WebEx là một hệ thống hội nghị trên web cho phép sinh viên và giáo viên cộng tác với nhau cùng lúc. Nó truyền âm thanh và hình ảnh ở thời gian thực, và bao gồm các công cụ như bảng trắng, thanh trò chuyện và chia sẻ màn hình máy tính.';
$string['modulenameplural'] = 'Các cuộc họp WebEx';
$string['page_managerecordings'] = 'Quản lý bản ghi';
$string['page_manageusers'] = 'Quản lý người dùng';
$string['pluginadministration'] = 'Quản trị cuộc họp WebEx';
$string['pluginname'] = 'Cuộc họp WebEx';
$string['pluginnamepural'] = 'Các cuộc họp WebEx';
$string['prefix'] = 'Tên người dùng';
$string['prefix_help'] = 'Chuỗi này sẽ được đặt trước cho tất cả người dùng được tạo ra từ mô-đun này';
$string['privacy:metadata:email'] = 'Địa chỉ email của người dùng truy cập Webex';
$string['privacy:metadata:firstname'] = 'Tên của người truy cập WebEx';
$string['privacy:metadata:lastname'] = 'Họ của người truy cập WebEx';
$string['privacy:metadata:timecreated'] = 'Thời gian bản ghi được tạo';
$string['privacy:metadata:timemodified'] = 'Thời gian bản ghi được sửa đổi trong cơ sở dữ liệu';
$string['privacy:metadata:username'] = 'Tên người dùng của người tổ chức cuộc họp.';
$string['privacy:metadata:webexactivity'] = 'Phiên bản hoạt động của Webex';
$string['privacy:metadata:webexactivity:hostwebexid'] = 'Mã ID của người dùng máy chủ của Webex';
$string['privacy:metadata:webexactivity:password'] = 'Mật khẩu cuộc họp';
$string['privacy:metadata:webexactivity_recording'] = 'Ghi âm Webex';
$string['privacy:metadata:webexactivity_recording:hostid'] = 'Tên người dùng máy chủ của bản ghi';
$string['privacy:metadata:webexactivity_user'] = 'Những người dùng máy chủ của Webex';
$string['privacy:metadata:webexactivity_user:webexid'] = 'Tên người dùng của người sử dụng Webex';
$string['privacy:metadata:webexactivity_user:webexuserid'] = 'ID người dùng WebEx của người sử dụng WebEx';
