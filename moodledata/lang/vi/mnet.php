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
 * Strings for component 'mnet', language 'vi', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'Về máy chủ của bạn';
$string['accesslevel'] = 'Cấp truy cập';
$string['addhost'] = 'Thêm máy chủ';
$string['addnewhost'] = 'Thêm một máy chủ mới';
$string['addtoacl'] = 'Thêm kiểm soát truy cập';
$string['allhosts'] = 'Tất cả máy chủ';
$string['allhosts_no_options'] = 'Không có lựa chọn khi xem nhiều máy chủ';
$string['allow'] = 'Cho phép';
$string['applicationtype'] = 'Loại ứng dụng';
$string['authfail_nosessionexists'] = 'Xác thực bất thành: phiên hoạt động mnet không tồn tại.';
$string['authfail_sessiontimedout'] = 'Xác thực bất thành: phiên hoạt động mnet đã hết giờ.';
$string['authfail_usermismatch'] = 'Xác thực bất thành: người dùng không khớp.';
$string['authmnetdisabled'] = 'Trình bổ trợ xác thực MNet bị <strong>vô hiệu hóa</strong>.';
$string['certdetails'] = 'Chi tiết chứng chỉ';
$string['configmnet'] = 'MNet cho phép giao tiếp máy chủ này với các máy chủ hay dịch vụ khác.';
$string['courses'] = 'các khóa học';
$string['courseson'] = 'các khóa học trên';
$string['currentkey'] = 'Khóa công khai hiện tại';
$string['deleteaserver'] = 'Đang xóa một máy chủ';
$string['deletedhostinfo'] = 'Máy chủ này đã bị xóa. Nếu bạn muốn hồi phục nó, chuyển tình trạng đã bị xóa thành \'Không\'.';
$string['deletedhosts'] = 'Các máy chủ đã bị xóa: {$a}';
$string['deletekeycheck'] = 'Bạn tuyệt đối muốn xóa khóa này?';
$string['deleteoutoftime'] = 'Cửa sổ 60 giây để xóa khóa này của bạn đã hết hạn. Hãy bắt đầu lại.';
$string['deleteuserrecord'] = 'SSO ACL: xóa bản ghi người dùng \'{$a->user}\' từ {$a->host}.';
$string['deletewrongkeyvalue'] = 'Một lỗi đã xảy ra. Nếu bạn không thử xóa khóa SSL máy chủ của mình. Có thể bạn là đối tượng của một cuộc tấn công hiểm độc. Không có hành động nào cả.';
$string['deny'] = 'Từ chối';
$string['description'] = 'Mô tả';
$string['enterausername'] = 'Hãy nhập tên tài khoản, hoặc một danh sách tên tài khoản được ngăn cách bởi dấu phẩy.';
$string['error7022'] = 'Tin nhắn mà bạn gửi đến trang từ xa đã được mã hóa phù hợp, nhưng chưa được kí. Điều này rất bất ngờ; có lẽ bạn nên gửi têp báo lỗi nếu điều này xảy ra (cho càng nhiều thông tin càng tốt về phiên bản ứng dụng trong câu hỏi, vv)';
$string['eventaccesscontrolcreated'] = 'Kiểm soát truy cập đã được tạo';
$string['eventaccesscontrolupdated'] = 'Kiểm soát truy cập đã được cập nhật';
$string['expired'] = 'Khóa này hết hạn vào';
$string['expires'] = 'Hợp lệ đến';
$string['expireyourkey'] = 'Xóa khóa này';
$string['expireyourkeyexplain'] = 'Moodle tự động xoay các khóa của bạn mỗi 28 ngày (mặc định) nhưng bạn có lựa chọn <em>thủ công</em> để đặt hết hạn khóa này vào bất kì thời điểm nào. Nó sẽ chỉ hữu ích nếu bạn tin rằng khóa này đã bị xâm hại. Một bản thay thế sẽ được tự động khởi tạo ngay lập tức.<br />Xóa khóa này sẽ khiến các ứng khác không thể giao tiếp với bạn, đến khi bạn liên lạc thủ công các quản trị viên và cung cấp khóa mới của bạn cho họ.';
$string['exportfields'] = 'Các mục để xuất';
$string['forbidden-transport'] = 'Phương thức vận chuyển mà bạn đang cố dùng không được cho phép.';
$string['host'] = 'máy chủ';
$string['hostdeleted'] = 'Máy chủ đã bị xóa';
$string['hostexists'] = 'Một bản ghi đã tồn tại cho một máy chủ với tên máy chủ đó (có thể nó đã bị xóa). <a href="{$a}">nhấn vào đây</a> để sửa bản ghi đó.';
$string['hostlist'] = 'Danh sách các máy chủ có mạng lưới';
$string['hostname'] = 'Tên máy chủ';
$string['hostnotconfiguredforsso'] = 'Máy chủ này chưa được thiết lập để đăng nhập từ xa';
$string['hostsettings'] = 'Thiết lập máy chủ';
$string['http_self_signed_help'] = 'Cho phép các kết nối sử dụng một chứng chỉ tự kí DIY SSL trên máy chủ từ xa.';
$string['http_verified_help'] = 'Cho phép các kết nối sử dụng một chứng chỉ SSL đã được xác minh trong PHP trên máy chủ từ xa, nhưng trên http (không https)';
$string['https_self_signed_help'] = 'Cho phép các kết nối sử dụng một DIY SSL tự kí trong PHP trên máy chủ từ xa trên http.';
$string['https_verified_help'] = 'Cho phép các kết nối sử dụng một chứng chỉ SSL đã được xác minh trên máy chủ từ xa.';
$string['id'] = 'ID';
$string['importfields'] = 'Các mục để nhập';
$string['inspect'] = 'Quan sát';
$string['installnosuchfunction'] = 'Lỗi lập trình! Thứ gì đó đang cố cài đặt một hàm mnet xmlrpc ({$a->method}) từ tệp ({$a->file}) và không thể tìm thấy nó';
$string['installnosuchmethod'] = 'Lỗi lập trình! Thứ gì đó đang cố cài đặt một phương thức mnet xmlrpc ({$a->method}) trên một lớp ({$a->class}) và không thể tìm thấy nó';
$string['installreflectionclasserror'] = 'Lỗi lập trình! Quan sát MNet dành cho phương thức  \'{$a->method}\' trong lớp \'{$a->class}\' bất thành.  Tin nhắn lỗi ban đầu, phòng khi có thể  giúp, là: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'Lỗi lập trình! Quan sát MNet dành cho hàm \'{$a->method}\' trong tệp \'{$a->file}\'.  Tin nhắn lỗi ban đầu, phòng khi có thể giúp, là: \'{$a->error}\'';
$string['invalidaccessparam'] = 'Tham số truy cập không hợp lệ.';
$string['invalidactionparam'] = 'Tham số hành động không hợp lệ.';
$string['invalidpubkey'] = 'Khóa không phải khóa SSL hợp lệ. ({$a})';
$string['invalidurl'] = 'Tham số URL không hợp lệ';
$string['ipaddress'] = 'Địa chỉ IP';
$string['is_in_range'] = 'Địa chỉ IP <code>{$a}</code> đại diện một máy chủ tin cậy hợp lệ.';
$string['ispublished'] = '{$a} đã kích hoạt dịch vụ này cho bạn.';
$string['issubscribed'] = '{$a} đang theo dõi dịch vụ này trên máy chủ của bạn.';
$string['keydeleted'] = 'Khóa của bạn đã được xóa và thay thế thành công.';
$string['keymismatch'] = 'Khóa công khai mà bạn đang giữ cho máy chủ này khác với khóa công khai mà nó hiện đang đăng tải. Khóa được đăng tải hiện tại là:';
$string['last_connect_time'] = 'Thời gian kết nối lần cuối';
$string['last_connect_time_help'] = 'Thời gian mà bạn kết nối lần cuối đến máy chủ này.';
$string['last_transport_help'] = 'Vận chuyển mà bạn sử dụng cho lần kết nối cuối đến máy chủ này.';
$string['leavedefault'] = 'Thay vào đó sử dụng thiết lập mặc định';
$string['listservices'] = 'Liệt kê các dịch vụ';
$string['logs'] = 'Nhật ký lưu';
$string['managemnetpeers'] = 'Quản lí người ngang hàng';
$string['method'] = 'Phương thức';
$string['methodhelp'] = 'Phương thức trợ giúp cho {$a}';
$string['methodsavailableonhost'] = 'Các phương thức có trên {$a}';
$string['methodsavailableonhostinservice'] = 'Các phương thức có cho {$a->service} trên {$a->hostƯ';
$string['methodsignature'] = 'Chữ kí phương thức cho {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Gộp (lên đến) 3 chuỗi và trả về kết quả';
$string['mnet_session_prohibited'] = 'Người dùng từ máy chủ nhà của bạn hiện không được phép chuyển vùng sang {$a}.';
$string['mnetdisabled'] = 'MNET bị <strong>vô hiệu hóa</strong>.';
$string['mnetidprovider'] = 'Người cung MNet ID';
$string['mnetservices'] = 'Dịch vụ';
$string['moodle_home_help'] = 'Đường dẫn đến trang nhà của ứng dụng MNet trên máy chủ từ xa. v.d. /moodle/.';
$string['name'] = 'Tên';
$string['net'] = 'Mạng lưới';
$string['never'] = 'Không bao giờ';
$string['noaclentries'] = 'Không đầu vào trong danh kiểm soát truy cập SSO';
$string['noaddressforhost'] = 'Xin lỗi, nhưng tên máy chủ {$a} đó không thể được phân giải!';
$string['nocurl'] = 'Thư viện PHP cURL chưa được cài đặt';
$string['nolocaluser'] = 'Không có bản ghi cục bộ cho người';
$string['nomodifyacl'] = 'Bạn không được phép sửa danh sách kiểm soát truy cập MNet.';
$string['nonmatchingcert'] = 'Đối tượng của chứng chỉ: <br /><em>{$a->subject}</em><br />không khớp với máy chủ mà nó đến từ:<br /><em>{$a->host}</em>.';
$string['nosite'] = 'Không thể tìm khóa học cấp khóa học';
$string['nosuchfile'] = 'Hàm/tệp {$a} không tồn tại.';
$string['nosuchfunction'] = 'Không thể định vị hàm, hoặc hàm bị cấm do RPC.';
$string['nosuchservice'] = 'Dịch vụ RPC không chạy trên máy chủ này.';
$string['not_in_range'] = 'Địa chỉ IP <code>{$a}</code> không đại diện cho một máy chủ tin cậy hợp lệ.';
$string['notenoughidpinfo'] = 'Nhà cung cấp nhân dạng của bạn không có đủ thong tin để tạo hoặc cập nhật tài khoản của bạn cục bộ được. Xin lỗi!';
$string['notinxmlrpcserver'] = 'Nỗ lực truy cập client MNet từ xa, không phải trong quá trình thực thi máy chủ XMLRPC';
$string['notmoodleapplication'] = 'NGUY HIỂM: Đây không phải ứng dụng Moodle, vì vậy một số phương pháp quan sát có thể hoạt động không phù hợp.';
$string['notpermittedtojump'] = 'Bạn không được phép bắt đầu một phiên hoạt động từ xa từ máy chủ Moodle này.';
$string['notpermittedtojumpas'] = 'Bạn không thể bắt đầu một phiên hoạt động từ xa trong khi bạn đang đăng nhập làm người dùng khác.';
$string['notpermittedtoland'] = 'Bạn không được phép bắt đầu một phiên hoạt động từ xa.';
$string['off'] = 'Tắt';
$string['on'] = 'Bật';
$string['options'] = 'Lựa chọn';
$string['peerprofilefielddesc'] = 'Ở đây bạn có thể thay thế các thiết lập toàn cầu cho các mục hồ sơ để gửi và nhập khi người dùng mới được tạo';
$string['phperror'] = 'Một lỗi nội PHP đã ngăn yêu cầu của bạn được hoàn tất.';
$string['position'] = 'Vị trí';
$string['profileexportfields'] = 'Các mục để gửi';
$string['profilefielddesc'] = 'Ở đây bạn có thể thiết lập danh sách các mục hồ sơ được gửi và nhận  trên MNet khi các tài khoản người dùng được tạo, hoặc được cập nhật. Bạn cũng có thể thay thế nó cho riêng mỗi người trên MNet. Chú ý rằng các mục sau luôn được gửi và bắt buộc: {$a}';
$string['profilefields'] = 'Các mục hồ sơ';
$string['profileimportfields'] = 'Các mục để nhập';
$string['promiscuous'] = 'Pha tạp';
$string['publickey'] = 'Khóa công khai';
$string['publickey_help'] = 'Khóa công khai được tự động lấy từ máy chủ từ xa.';
$string['publickeyrequired'] = 'Bạn phải cung cấp một khóa công khai.';
$string['publish'] = 'Đăng tải';
$string['reallydeleteserver'] = 'Bạn có chắc muốn xóa máy chủ';
$string['recordnoexists'] = 'Bản ghi không tồn tại.';
$string['registerallhosts'] = 'Đăng kí tất cả máy chủ (chế độ pha tạp)';
$string['registerallhostsexplain'] = 'Bạn có thể chọn đăng kí tất cả máy chủ có thử kết nối tự động đến bạn. Có nghĩa là một bản ghi sẽ xuất hiện trong danh sách các máy chủ đối với bất kì trang MNet nào kết nối đến bnj và yêu cầu khóa công khai. <br />Bạn có lựa chọn bên dưới để thiết lập các dịch vụ cho \'Tất cả máy chủ\' và bằng việc kích hoạt một số dịch vụ ở đó, bạn có thể cung cấp các dịch vụ đến bất kì máy chủ từ xa không phân biệt nào.';
$string['registerhostsoff'] = 'Đăng kí tất cả máy chủ hiện đang <b>tắt</b>';
$string['registerhostson'] = 'Đăng kí tất cả máy chủ hiện đang <b>bật</b>';
$string['remotecourses'] = 'Các khóa học từ xa';
$string['remotehost'] = 'Máy chủ từ xa';
$string['remotehosts'] = 'Các máy chủ từ xa';
$string['remoteuserinfo'] = 'Người dùng từ xa {$a->remotetype} - hồ sơ được lấy từ <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Mạng lưới yêu cầu phần mở rộng OpenSSL';
$string['restore'] = 'Phục hồi';
$string['returnvalue'] = 'Trả giá trị';
$string['reviewhostdetails'] = 'Đánh giá chi tiết máy chủ';
$string['selectaccesslevel'] = 'Hãy chọn một cấp truy cập từ danh sách.';
$string['selectahost'] = 'Hãy chọn một máy chủ từ xa.';
$string['service'] = 'Tên dịch vụ';
$string['serviceid'] = 'ID dịch vụ';
$string['servicesavailableonhost'] = 'Các dịch vụ hiện hữu trên {$a}';
$string['settings'] = 'Cài đặt';
$string['ssl_acl_allow'] = 'SSO ACL: Cho phép người dùng \'{$a->user}\' từ \'{$a->host}\'';
$string['ssl_acl_deny'] = 'SSO ACL: Từ chối người dùng \'{$a->user}\' từ \'{$a->host}\'';
$string['ssoaccesscontrol'] = 'Kiểm soát truy cập SSO';
$string['ssoacldescr'] = 'Sử dụng trang này để cấp/từ chối truy cập đến một số người dùng cụ thể từ các máy thủ MNet từ xa. Nó phát huy khi bạn đang đề xuất các dịch vụ SSSO đến người dùng từ xa. Để kiểm soát khả năng chuyển vùng sang các máy chủ MNet khác của các người dùng <em>cục bộ</em> của bạn, dùng hệ thống vai trò để cấp cho họ quyền <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Để tính năng này hoạt động, bạn phải bật Mạng lưới, cộng với trình bổ trợ xác thực MNet được kích hoạt.';
$string['strict'] = 'Nghiêm';
$string['subscribe'] = 'Theo dõi';
$string['system'] = 'Hệ thống';
$string['testclient'] = 'Client thử nghiệm MNet';
$string['testtrustedhosts'] = 'Thử một địa chỉ';
$string['testtrustedhostsexplain'] = 'Nhập một địa chỉ IP để xem nó có là máy chủ tin cậy.';
$string['theypublish'] = 'Họ đăng tải';
$string['theysubscribe'] = 'Họ theo dõi';
$string['transport_help'] = 'Những lựa chọn này tương hỗ nhau, vì vậy bạn chỉ có thể buộc một máy chủ từ xa sử dụng một chứng chỉ SSL đã được kí nếu máy chủ của bạn cũng có một chứng chỉ SSL đã được kí.';
$string['trustedhosts'] = 'Các máy chủ XML-RPC';
$string['trustedhostsexplain'] = '<p>Cơ chế máy chủ tin cậy cho phép các máy cụ thể thực thi các lời gọi qua XML-RPC đến bất kì thành phần nào của Moodle API. Nó hiện hữu với các mã nguồn để kiểm soát hành vi Moodle và có thể là một lựa chọn rất nguy hiểm để kích hoạt. Nếu nghi ngờ, cứ tắt.</p>
<p><strong>Nó không cần cho bất kì tính năng MNet chuẩn nào!
</strong>Chỉ bật nó nếu bạn biết mình đang làm gì.</p>
<p>Để kích hoạt nó, nhập một danh sách các địa chỉ IP hoặc mạng lưới, mỗi cái một dòng. Một số ví dụ:</p>
Máy chủ cục bộ của bạn:<br />127.0.0.1<br />Máy chủ cục bộ của bạn (với một khối mạng):<br />127.0.0.1/32<br />Chỉ máy chủ với địa chỉ IP 192.168.0.7:<br />192.168.0.7/32<br />Bất kì mày chủ nào có địa chỉ IP giữa 192.168.0.1 và 192.168.0.255:<br />192.168.0.0/24<br />Bất kì máy chủ nào cũng được:<br />192.168.0.0/0<br />Rõ ràng ví dụ cuối <strong>không</strong> phải thiết lập được khuyến nghị.';
$string['turnitoff'] = 'Tắt nó';
$string['turniton'] = 'Bật nó';
$string['type'] = 'Loại';
$string['unknown'] = 'Không rõ';
$string['unknownerror'] = 'Lỗi không rõ đã xảy ra trong quá trình dàn xếp';
$string['usercannotchangepassword'] = 'Bạn không thể dổi mật khẩu của mình ở đây vì bạn là một người dùng từ xa.';
$string['userchangepasswordlink'] = '<br /> Bạn có thể đổi mật khẩu của mình tại nhà cung cấp <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> của bạn.';
$string['usernotfullysetup'] = 'Tài khoản người dùng chưa hoàn thành. Bạn cần trở <a href="{$a}">về nhà cung cấp của mình</a> và đảm bảo hồ sơ được hoàn thành ở dó. Bạn có thể thoát và đăng nhập lại để xem nó thay đổi.';
$string['usersareonline'] = 'Nguy hiểm: {$a} người dùng từ máy chủ đó hiện đang đăng nhập trang của bạn.';
$string['validated_by'] = 'Nó được kiểm chứng bởi mạng lưới: <code>{$a}</code>';
$string['verifysignature-error'] = 'Xác minh chữ kí bất thành. Mỗi lỗi đã xảy ra.';
$string['verifysignature-invalid'] = 'Xác minh chữ kí bất thành. Có vẻ phần trọng tải này không được kí bởi bạn.';
$string['version'] = 'Phiên bản';
$string['warning'] = 'Nguy hiểm';
$string['xmlrpc-missing'] = 'Bạn phải cài đặt XML-RPC trong bản dựng PHP của mình để có thể sử dụng tính năng này';
$string['yourhost'] = 'Máy chủ của bạn';
