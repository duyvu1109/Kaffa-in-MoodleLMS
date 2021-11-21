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
 * Strings for component 'chat', language 'vi', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Bạn có phiên chat sắp diễn ra';
$string['ajax'] = 'Phiên bản dùng AJAX';
$string['autoscroll'] = 'Cuốn tự động';
$string['beep'] = 'bíp';
$string['bubble'] = 'Bong bóng';
$string['cantlogin'] = 'Không thể đăng nhập phòng chat';
$string['chat:addinstance'] = 'Thêm cuộc trò chuyện mới';
$string['chat:chat'] = 'Tham gia chat';
$string['chat:deletelog'] = 'Xoá nhật kí các buổi chat';
$string['chat:exportparticipatedsession'] = 'Xuất các buổi chat mà bạn đã tham gia';
$string['chat:exportsession'] = 'Xuất bất kì buổi chat nào';
$string['chat:readlog'] = 'Xem nhật kí các buổi chat';
$string['chat:talk'] = 'Nói chuyện trong một buổi chat';
$string['chat:view'] = 'Xem hoạt động chat';
$string['chatintro'] = 'Nội dung giới thiệu';
$string['chatname'] = 'Tên của phòng chát này';
$string['chatreport'] = 'Các phiên chat';
$string['chattime'] = 'Phiên họp tiếp theo';
$string['compact'] = 'Nén';
$string['composemessage'] = 'Soạn tin nhắn';
$string['configmethod'] = 'Với kiểu chat bình thường, trình duyệt sẽ nối kết thường xuyên tới máy chủ để cập nhật thông tin. Không cần phải thiết lập gì cả, và ở đâu cũng hoạt động được. Tuy nhiên, máy chủ sẽ có thể bị nặng tải, đặc biệt là khi có nhiều người cùng tham gia họp. Sử dụng máy chủ daemon đòi hỏi bạn phải truy cập vào môi trường dòng lệnh Unix, nhưng bù lại các phiên chat sẽ có thể diễn ra nhanh chóng và nhịp nhàng hơn.';
$string['confignormalupdatemode'] = 'Bạn có thể dùng chức năng <em>Kết nối Thường trực</em> của HTTP 1.1 để cập nhật các phòng họp một cách hiệu quả, nhưng việc đó sẽ làm nặng tải trên máy chủ của bạn. Phương pháp cập nhật <em>Dòng</em> có thể cho kết quả tốt hơn khi có nhiều người truy cập cùng lúc (tương tự cách dùng chatd), nhưng có thể là không được hỗ trợ trên máy chủ của bạn.';
$string['configoldping'] = 'Thời gian tối đa (giây) trước khi kiểm tra lại xem thành viên có kết nối hay không? Đây là mức giới hạn trần, vì thông thường hệ thống có thể nhanh chóng phát hiện ra thành viên thoát ra ngoài. Thời gian càng ngắn máy chủ sẽ tải càng nặng. Nếu dùng chế độ bình thường, không bao giờ để dưới 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Phòng họp cần được tải lại sau mỗi bao lâu (giây)? Để số thấp có thể giúp bạn có cảm giác phòng họp hoạt động nhanh hơn, nhưng sẽ làm nặng tải máy chủ khi có nhiều người tham gia cung lúc. Nếu đang dùng phương pháp cập nhật <em>Dòng</em>, bạn có thể chọn số cao hơn -- hãy thử ở mức 2.';
$string['configrefreshuserlist'] = 'Danh sách thành viên cần được tải lại sau mỗi bao lâu (giây)?';
$string['configserverhost'] = 'Tên máy tính (hostname) nơi chạy chương trình daemon';
$string['configserverip'] = 'Địa chỉ IP của tên máy ở trên';
$string['configservermax'] = 'Số máy khách tối đa cho phép truy cập';
$string['configserverport'] = 'Cổng dùng cho máy chủ daemon';
$string['coursetheme'] = 'Chủ đề khóa học';
$string['crontask'] = 'Xử lí nền đối với chức năng chat';
$string['currentchats'] = 'Phiên chat đang mở';
$string['currentusers'] = 'Thành viên đang có mặt';
$string['deletesession'] = 'Xoá phiên họp này';
$string['deletesessionsure'] = 'Bạn có chắc chắn muốn xoá phiên họp này?';
$string['donotusechattime'] = 'Không nêu thời gian họp';
$string['enterchat'] = 'Nhấn vào đây để tham gia';
$string['entermessage'] = 'Nhập tin nhắn của bạn';
$string['errornousers'] = 'Không tìm thấy thành viên nào!';
$string['eventmessagesent'] = 'Tin nhắn đã gửi';
$string['eventsessionsviewed'] = 'Các phiên đã được xem';
$string['explaingeneralconfig'] = '<strong>Luôn luôn</strong> sử dụng các thiết lập này';
$string['explainmethoddaemon'] = 'Các thiết lập này <strong>chỉ</strong> có hiệu lực sau khi bạn đã chọn kiểu "Máy chủ daemon"';
$string['explainmethodnormal'] = 'Các thiết lập này <strong>chỉ</strong> có hiệu lực sau khi bạn đã chọn kiểu "Họp bình thường"';
$string['generalconfig'] = 'Cấu hình chung';
$string['idle'] = 'Im re';
$string['inputarea'] = 'Khu vực vào';
$string['invalidid'] = 'Không tìm thấy phòng chat đó!';
$string['list_all_sessions'] = 'Liệt kê tất cả các phiên.';
$string['list_complete_sessions'] = 'Liệt kê các phiên mới hoàn thành.';
$string['listing_all_sessions'] = 'Đang liệt kê tất cả các phiên.';
$string['messagebeepseveryone'] = '{$a} gọi tất cả mọi người!';
$string['messagebeepsyou'] = '{$a} vừa gọi bạn!';
$string['messageenter'] = '{$a} vừa vào phòng chat';
$string['messageexit'] = '{$a} vừa ra khỏi phòng chat này';
$string['messages'] = 'Tin nhắn';
$string['messageyoubeep'] = 'Bạn đã gọi {$a}';
$string['method'] = 'Kiểu chat';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Máy chủ chat daemon';
$string['methodnormal'] = 'Kiểu bình thường';
$string['modulename'] = 'Phòng chat';
$string['modulename_help'] = 'Module hoạt động phòng chat cho phép người tham gia có những buổi thảo luận dưới dạng văn bản một cách trực tiếp.

Chat có thể là hoạt động tồn tại trong một khoảng thời gian ngắn hoặc có thể được lặp lại vào cùng giờ mỗi ngày hoặc mỗi tuần. Các phiên chat được lưu lại và mọi người có thể xem được hoặc sẽ bị hạn chế đối với những người dùng có khả năng xem nhật kí các phiên chat.

Chat thường được sử dụng khi người ta không thể gặp nhau trực tiếp, ví dụ

*Thay vì gặp nhau thường xuyên thì các học viên trong cùng một khóa học trực tuyến có thể chat với nhau để chia sẻ những trải nghiệm dù đang ở những nơi khác nhau.
*Một học viên tạm thời không tham dự trực tiếp một buổi học nào đó cũng có thể chat với giảng viên để bắt kịp tiến độ bài học.
*Các học viên đang đi làm cũng có thể chat với nhau để trò chuyện, chia sẻ trải nghiệm và thậm chí với cả giảng viên của họ.
* Khi ở nhà vào buổi chiều, trẻ nhỏ sử dụng chat như là một cách để bước vào mạng xã hội.
* Đây cũng có thể là một buổi hỏi - đáp với một diễn giả mà người này không cần xuất hiện trực tiếp.
* Chat được sử dụng trong những buổi ôn thi giữa học viên và giảng viên hoặc giữa học viên với nhau.';
$string['modulenameplural'] = 'Các phòng chat';
$string['neverdeletemessages'] = 'Không bao giờ xoá bài viết';
$string['nextchattime'] = 'Lần chat tới:';
$string['nextsession'] = 'Phiên họp sắp tới';
$string['no_complete_sessions_found'] = 'Không tìm thấy phiên hoàn thành nào.';
$string['nochat'] = 'Không tìm thấy phòng chat nào';
$string['noguests'] = 'Phiên họp này không mở cho khách vãng lai';
$string['nomessages'] = 'Chưa có ai viết gì';
$string['nopermissiontoseethechatlog'] = 'Bạn không có quyền xem nhật kí chat';
$string['normalkeepalive'] = 'Nối thường trực';
$string['normalstream'] = 'Dòng';
$string['noscheduledsession'] = 'Không có phiên họp nào được lên lịch';
$string['notallowenter'] = 'Bạn không có quyền vào phòng chat';
$string['notlogged'] = 'Bạn chưa đăng nhập!';
$string['oldping'] = 'Thời hạn ngưng kết nối';
$string['page-mod-chat-x'] = 'Bất kì trang module chat nào';
$string['pastchats'] = 'Các phiên họp trước';
$string['pluginadministration'] = 'Quản lý chức năng chat';
$string['pluginname'] = 'Phòng chat';
$string['privacy:metadata:chat_messages_current'] = 'Phiên chat hiện tại. Dữ liệu này mang tính tạm thời và sẽ bị xóa sau khi xóa phiên chat.';
$string['privacy:metadata:chat_users'] = 'Theo dõi người dùng nào đang ở trong phòng chat nào';
$string['privacy:metadata:chat_users:firstping'] = 'Thời điểm truy cập lần đầu vào phòng chat';
$string['privacy:metadata:chat_users:ip'] = 'Địa chỉ IP người dùng';
$string['privacy:metadata:chat_users:lang'] = 'Ngôn ngữ của người dùng';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Thời điểm của tin nhắn cuối cùng trong phòng chat này';
$string['privacy:metadata:chat_users:lastping'] = 'Thời điểm truy cập lần cuối vào phòng chat';
$string['privacy:metadata:chat_users:userid'] = 'ID người dùng';
$string['privacy:metadata:messages'] = 'Một bản lưu của các tin nhắn được gửi khi phiên chat đang diễn ra';
$string['privacy:metadata:messages:issystem'] = 'Tin nhắn có phải là tin nhắn từ hệ thống tự động không';
$string['privacy:metadata:messages:message'] = 'Tin nhắn';
$string['privacy:metadata:messages:timestamp'] = 'Thời điểm tin nhắn đã được gửi';
$string['privacy:metadata:messages:userid'] = 'ID người dùng của người gửi tin nhắn';
$string['refreshroom'] = 'Tải lại phòng họp';
$string['refreshuserlist'] = 'Tải lại danh sách thành viên';
$string['removemessages'] = 'Xoá hết các tin nhắn';
$string['repeatdaily'] = 'Mỗi ngày, cùng giờ';
$string['repeatnone'] = 'Không lặp lại - chỉ mở ngày đã chọn';
$string['repeattimes'] = 'Mở lại phiên họp';
$string['repeatweekly'] = 'Hàng tuần, cùng giờ';
$string['savemessages'] = 'Lưu các phiên họp trước';
$string['search:activity'] = 'Chat - thông tin hoạt động';
$string['seesession'] = 'Xem phiên họp này';
$string['send'] = 'Gửi';
$string['sending'] = 'Đang gửi';
$string['serverhost'] = 'Tên máy chủ';
$string['serverip'] = 'Địa chỉ IP máy chủ';
$string['servermax'] = 'Số thành viên tối đa';
$string['serverport'] = 'Cổng máy chủ';
$string['sessions'] = 'Các phiên chát';
$string['sessionstart'] = 'Phiên chat tiếp theo sẽ bắt đầu lúc {$a->date}, ({$a->fromnow} từ bây giờ)';
$string['sessionstartsin'] = 'Phiên chat tiếp theo sẽ bắt đầu {$a} tính từ bây giờ';
$string['studentseereports'] = 'Mọi người đều xem được các phiên họp trước';
$string['talk'] = 'Trò chuyện';
$string['updatemethod'] = 'Phương pháp cập nhật';
$string['updaterate'] = 'Chỉ số cập nhật:';
$string['userlist'] = 'Danh sách người dùng';
$string['usingchat'] = 'Sử dụng chat';
$string['usingchat_help'] = 'Mô đun chat bao gồm một số các tính năng giúp cho buổi nói chuyện thêm thú vị.

*Các mặt cười - Bất cứ mặt cười nào (Biểu tượng biểu cảm xúc - emoticons) mà bạn có thể dùng ở bất cứ chỗ nào trong Moodle thì đều có thể dùng ở đây. Thí dụ,  :-)
* Các liên kết - Các địa chỉ Internet sẽ được tự động chuyển thành liên kết.
* Biểu cảm - Bạn có thể bắt đầu một dòng với "/me" hay ":" để biểu hiện cảm xúc.  Thí dụ, nếu tên bạn là Kim và bạn nhập vào ":laughs!" hay "/me laughs!" thì mọi người sẽ thấy hiện lên "Kim laughs!"
* Tiếng bíp - Bạn có thể gửi một âm thanh cho người khác bằng cách nhấn vào liên kết "beep" bên cạnh tên của họ.  Một lối tắt (shortcut) tiện lợi để gửi "bíp" tới tất cả mọi người cùng một lúc là dòng "beep all".
* HTML - Nếu bạn biết các mã HTML, thì bạn có thể dùng chúng để chèn ảnh, cho phát âm thanh hay tạo các màu chữ khác nhau trong tin nhắn.';
$string['viewreport'] = 'Xem các phiên họp trước';
