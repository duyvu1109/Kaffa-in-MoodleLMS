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
 * Strings for component 'webservice', language 'vi', version '3.11'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Truy cập lỗi kiểm soát';
$string['actwebserviceshhdr'] = 'Kích hoạt các giao thức dịch vụ web';
$string['addaservice'] = 'Thêm dịch vụ';
$string['addcapabilitytousers'] = 'Kiểm tra quyền hạn người dùng';
$string['addcapabilitytousersdescription'] = 'Người dùng nên có hai quyền hạn - webservice:createtoken và một quyền phù hợp với giao thức được sử dụng, ví dụ webservice/rest:use, webservice/soap:use. Để đạt được, tạo một vai trò dịch vụ web với các quyền hạn phù hợp được cho phép và phân bổ nó cho người dùng dịch vụ web như một vai trò hệ thống.';
$string['addfunction'] = 'Thêm hàm';
$string['addfunctions'] = 'Thêm các hàm';
$string['addfunctionsdescription'] = 'Chọn các hàm yêu cầu cho dịch vụ mới tạo';
$string['addservice'] = 'Thêm dịch vụ mới: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Thêm các hàm vào dịch vụ "{$a}"';
$string['allusers'] = 'Tất cả người dùng';
$string['arguments'] = 'Tham số';
$string['authmethod'] = 'Phương thức xác thực';
$string['cannotcreatetoken'] = 'Không được phép tạo token dịch vụ web cho dịch vụ {$a}.';
$string['cannotgetcoursecontents'] = 'Không thể lấy nội dung khóa học';
$string['checkusercapability'] = 'Kiểm tra quyền hạn người dùng';
$string['checkusercapabilitydescription'] = 'Người dùng nên có các quyền hạn phù hợp theo giao thức được sử dụng, ví dụ example webservice/rest:use, webservice/soap:use. Để đạt được, tạo một vai trò dịch vụ web với các quyền hạn giao thức cho phép và phân bổ cho người dùng dịch vụ web như một vai trò hệ thống.';
$string['configwebserviceplugins'] = 'Vì lí do bảo mật, chỉ những giao thức còn sử dụng mới được kích hoạt.';
$string['context'] = 'Bối cảnh';
$string['createservicedescription'] = 'Dịch vụ là tập các hàm dịch vụ web. Bạn sẽ cho phép người dùng truy cập dịch vụ mới. Trên trang <strong>Thêm dịch vụ</strong> chọn các lựa chọn \'Kích hoạt\' và \'Những người dùng đã xác thực\'. Chọn \'Không có quyền hạn yêu cầu\'.';
$string['createserviceforusersdescription'] = 'Dịch vụ là tập các hàm dịch vụ web. Bạn sẽ cho phép người dùng truy cập dịch vụ mới. Trên trang <strong>Thêm dịch vụ</strong> chọn các lựa chọn \'Kích hoạt\' và bỏ lựa chọn \'Những người dùng đã xác thực\'. Chọn \'Không có quyền hạn yêu cầu\'.';
$string['createtoken'] = 'Tạo token';
$string['createtokenforuser'] = 'Tạo token cho người dùng';
$string['createtokenforuserdescription'] = 'Tạo token cho người dùng dịch vụ web.';
$string['createuser'] = 'Tạo người dùng chuyên biệt';
$string['createuserdescription'] = 'Người dùng dịch vụ web được yêu cầu để đại diện hệ thống kiểm soát Moodle.';
$string['criteriaerror'] = 'Thiếu quyền tìm kiếm theo tiêu chuẩn';
$string['default'] = 'Mặc định thành "{$a}"';
$string['deleteservice'] = 'Xóa dịch vụ: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Xóa dịch vụ cũng sẽ xóa các token liên quan dịch vụ này. Bạn thật sư muốn xóa dịch vụ ngoài "{$a}"?';
$string['deletetokenconfirm'] = 'Bạn thật sự muốn xóa token dịch vụ web này cho <strong>{$a->user}</strong> trên dịch vụ <strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'Tất cả giao thức dịch vụ web bị vô hiệu hóa. Thiết lập "Kích hoạt dịch vụ web" có thể tìm thấy trong Tính năng cao cấp.';
$string['doc'] = 'Tài liệu';
$string['docaccessrefused'] = 'Bạn không được phép xem tài liệu cho token này';
$string['documentation'] = 'tài liệu dịch vụ web';
$string['downloadfiles'] = 'Có thể tải tệp';
$string['downloadfiles_help'] = 'Nếu được kích hoạt, bất kì người dùng nào có thể tải tệp với khóa bảo mật của họ. Dĩ nhiên họ bị giới hạn vào các tệp được phép tải trong trang.';
$string['editaservice'] = 'Sửa dịch vụ';
$string['editservice'] = 'Sửa  dịch vụ: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Đã được kích hoạt';
$string['enabledocumentation'] = 'Kích hoạt tài liệu nhà phát triển';
$string['enabledocumentationdescription'] = 'Tài liệu dịch vụ web chi tiết tồn tại với các giao thức được kích hoạt.';
$string['enableprotocols'] = 'Kích hoạt các giao thức';
$string['enableprotocolsdescription'] = 'Ít nhất một giao thức nên được kích hoạt. Vì lí do bảo mật, chỉ các giao thức được sử dụng nên được kích hoạt.';
$string['enablews'] = 'Kích hoạt các dịch vụ web';
$string['enablewsdescription'] = 'Các dịch vụ web phải được kích hoạt trong Tính năng cao cấp.';
$string['error'] = 'Lỗi: {$a}';
$string['errorcatcontextnotvalid'] = 'Bạn không thể thực thi các hàm trong bối cảnh danh mục (category id:{$a->catid}). Tin nhắn lỗi bối cảnh là: {$a->message}';
$string['errorcodes'] = 'Tin nhắn lỗi';
$string['errorcoursecontextnotvalid'] = 'Bạn không thể thực thi các hàm trong bối cảnh khóa học (course id:{$a->courseid}). Tin nhắn lỗi bối cảnh là: {$a->message}';
$string['errorinvalidparam'] = 'Tham số "{$a}" không hợp lệ.';
$string['errornotemptydefaultparamarray'] = 'Tham số mô tả dịch vụ web có tên \'{$a}\' là một đơn hoặc đa cấu trúc. Mặc định chỉ có thể là mảng trống. Kiểm tra mô tả dịch vụ web.';
$string['erroroptionalparamarray'] = 'Tham số mô tả dịch vụ web có tên \'{$a}\' là một đơn hoặc đa cấu trúc. Nó không được đặt làm VALUE_OPTIONAL. Kiểm tra mô ta dịch vụ web.';
$string['eventwebservicefunctioncalled'] = 'Hàm dịch vụ web được gọi';
$string['eventwebserviceloginfailed'] = 'Đăng nhập dịch vụ web bất thành';
$string['eventwebserviceservicecreated'] = 'Dịch vụ thuộc dịch vụ web đã được tạo';
$string['eventwebserviceservicedeleted'] = 'Dịch vụ thuộc dịch vụ web đã bị xóa';
$string['eventwebserviceserviceupdated'] = 'Dịch vụ thuộc dịch vụ web đã được cập nhật';
$string['eventwebserviceserviceuseradded'] = 'Người dùng dịch vụ thuộc dịch vụ web đã được thêm';
$string['eventwebserviceserviceuserremoved'] = 'Người dùng dịch vụ thuộc dịch vụ web đã bị xóa';
$string['eventwebservicetokencreated'] = 'Token dịch vụ web đã được tạo';
$string['eventwebservicetokensent'] = 'Token dịch vụ web đã được gửi';
$string['execute'] = 'Thực thi';
$string['executewarnign'] = 'NGUY HIỂM: Nếu bạn nhấn thực thi CSDL của bạn sẽ bị thay đổi và chúng không thể hoàn tác tự động lại được!';
$string['externalservice'] = 'Dịch vụ ngoài';
$string['externalservicefunctions'] = 'Các chức năng dịch vụ ngoài';
$string['externalservices'] = 'Các dịch vụ ngoài';
$string['externalserviceusers'] = 'Các người dùng dịch vụ ngoài';
$string['failedtolog'] = 'Ghi nhật kí bất thành';
$string['filenameexist'] = 'Tên tệp đã tồn tại: {$a}';
$string['forbiddenwsuser'] = 'Không thể tạo token cho một người dùng chưa xác nhận, đã bị xóa, đã bị đình chỉ hoặc là khách.';
$string['function'] = 'Hàm';
$string['functions'] = 'Các hàm';
$string['generalstructure'] = 'Cấu trúc chung';
$string['information'] = 'Thông tin';
$string['installexistingserviceshortnameerror'] = 'Một dịch vụ web với tên ngắn "{$a}" đã tồn tại. Không thể cài đặt/cập nhật một dịch vụ web khác với tên ngắn này.';
$string['installserviceshortnameerror'] = 'Lỗi mã nguồn: tên ngắn dịch vụ "{$a}" chỉ nên chứa số, kí tự và _-..';
$string['invalidextparam'] = 'Tham số api ngoài không hợp lệ: {$a}';
$string['invalidextresponse'] = 'Phản hồi api ngoài không hợp lệ: {$a}';
$string['invalidiptoken'] = 'Token không hợp lệ - IP của bạn không được hỗ trợ';
$string['invalidtimedtoken'] = 'Token không hợp lệ - token đã hết hạn';
$string['invalidtoken'] = 'Token không hợp lệ - token không được tìm thấy';
$string['iprestriction'] = 'Giới hạn IP';
$string['iprestriction_help'] = 'Người dùng sẽ cần gọi dịch vụ web từ các IP theo danh sách (ngăn cách bởi dấu phẩy).';
$string['key'] = 'Khóa';
$string['keyshelp'] = 'Các khóa được sử dụng để truy cập tài khoản Moodle của bạn từ các ứng dụng ngoài.';
$string['manageprotocols'] = 'Quản lý các giao thức';
$string['managetokens'] = 'Quản lý các token';
$string['missingcaps'] = 'Thiếu các quyền hạn';
$string['missingcaps_help'] = 'Danh sách các quyền hạn được yêu cầu đối với dịch vụ mà người dùng được chọn không có. Các quyền hạn thiếu phải được thêm vào vai trò của người dùng để sử dụng dịch vụ.';
$string['missingpassword'] = 'Không có mật khẩu';
$string['missingrequiredcapability'] = 'Quyền hạn {$a} được yêu cầu.';
$string['missingusername'] = 'Thiếu tên tài khoản';
$string['missingversionfile'] = 'Lỗi mã nguồn: tệp version.php thiếu đối với thành phần {$a}';
$string['nameexists'] = 'Tên này đã được sử dụng bởi một dịch vụ khác';
$string['nocapabilitytouseparameter'] = 'Người dùng không có quyền hạn được yêu cầu để dùng tham số {$a}.';
$string['nofunctions'] = 'Dịch vụ này không có hàm.';
$string['norequiredcapability'] = 'Không có quyền hạn được yêu cầu';
$string['notoken'] = 'Danh sách token trống.';
$string['onesystemcontrolling'] = 'Cho phép hệ thống ngoài kiểm soát Moodle';
$string['onesystemcontrollingdescription'] = 'Các bước sau giúp bạn thiết lập các dịch vụ web Moodle nhằm cho phép một hệ thống ngoài tương tác với Moodle. Nó bao gồm thiết lập một phương thức xác thực token (khóa bảo mật).';
$string['onlyseecreatedtokens'] = 'Bạn chỉ có thể xem những huy hiệu mà bạn tự tạo.';
$string['operation'] = 'Thao tác';
$string['optional'] = 'Tùy ý';
$string['passwordisexpired'] = 'Mật khẩu hết hạn.';
$string['phpparam'] = 'XML-RPC (Cấu trúc PHP)';
$string['phpresponse'] = 'XML-RPC (Cấu trúc)';
$string['potusers'] = 'Những người dùng chưa xác thực';
$string['potusersmatching'] = 'Những người dùng chưa xác thực trùng khớp';
$string['print'] = 'In tất cả';
$string['privacy:metadata:serviceusers'] = 'Danh sách những người dùng có thể sử dụng những dịch vụ ngoại nhất định';
$string['privacy:metadata:serviceusers:iprestriction'] = 'Địa chỉ IP bị hạn chế khỏi việc dùng dịch vụ';
$string['privacy:metadata:serviceusers:timecreated'] = 'Ngày mà bản lưu được tạo';
$string['privacy:metadata:serviceusers:userid'] = 'ID người dùng';
$string['privacy:metadata:tokens:creatorid'] = 'ID người dùng tạo ra huy hiệu';
$string['privacy:metadata:tokens:iprestriction'] = 'Địa chỉ IP bị hạn chế khỏi việc dùng huy hiệu này';
$string['privacy:metadata:tokens:lastaccess'] = 'Ngày mà lần cuối huy hiệu được dùng';
$string['privacy:metadata:tokens:timecreated'] = 'Ngày tạo huy hiệu';
$string['privacy:metadata:tokens:token'] = 'Huy hiệu của người dùng';
$string['privacy:metadata:tokens:tokentype'] = 'Loại huy hiệu';
$string['privacy:metadata:tokens:userid'] = 'ID của người dùng sở hữu huy hiệu';
$string['privacy:metadata:tokens:validuntil'] = 'Huy hiệu này có giá trị cho tới ngày';
$string['privacy:request:notexportedsecurity'] = 'Không được xuất vì lí do an toàn';
$string['protocol'] = 'Giao thức';
$string['removefunction'] = 'Xóa';
$string['removefunctionconfirm'] = 'Bạn thật sự muốn xóa hàm "{$a->function}" khỏi dịch vụ "{$a->service}"?';
$string['required'] = 'Được yêu cầu';
$string['requiredcapability'] = 'Quyền hạn được yêu cầu';
$string['requiredcapability_help'] = 'Nếu được đặt, chỉ những người dùng với quyền hạn được yêu cấu có thể truy cập dịch vụ.';
$string['requiredcaps'] = 'Các quyền hạn được yêu cầu';
$string['resettokenconfirm'] = 'Bạn thật sự muốn đặt lại khóa dịch vụ web này cho <strong>{$a->user}</strong> trên dịch vụ <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Bạn thật sự muốn đặt lại khóa này? Bất kì liên kết được lưu nào chứa khóa cũ sẽ không còn hoạt động nữa.';
$string['response'] = 'Phản hồi';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Tài khoản được phục hồi cần đặt lại mật khẩu trước khi lấy token.';
$string['restparam'] = 'REST (Các tham số POST)';
$string['restrictedusers'] = 'Chỉ những người dùng đã được xác thực';
$string['restrictedusers_help'] = 'Thiết lập này xác định liệu tất cả người dùng với quyền tạo một token dịch vụ web có thể khởi tạo một token cho dịch vụ đó thông qua trang khóa bảo mật của họ hoặc chỉ những người dùng đã xác thực mới có thể làm vậy.';
$string['securitykey'] = 'Khóa bảo mật (huy hiệu)';
$string['securitykeys'] = 'Khoá bảo mật';
$string['selectauthorisedusers'] = 'Chọn các người dùng đã được xác thực';
$string['selectedcapability'] = 'Được chọn';
$string['selectedcapabilitydoesntexit'] = 'Quyền hạn yêu cầu được đặt hiện tại ({$a}) không tồn tại nữa. Hãy đổi nó và lưu lại.';
$string['selectservice'] = 'Chọn dịch vụ';
$string['selectspecificuser'] = 'Chọn người dùng cụ thể';
$string['selectspecificuserdescription'] = 'Thêm người dùng dịch vụ web thành một người dùng đã được xác thực.';
$string['service'] = 'Dịch vụ';
$string['servicehelpexplanation'] = 'Dịch vụ là một tập các hàm. Một dịch vụ có thể được truy cập bởi tất cả người dùng hay chỉ những người dùng nhất định.';
$string['servicename'] = 'Tên dịch vụ';
$string['servicenotavailable'] = 'Dịch vụ web không hiện hữu (nó không tồn tại hoặc có thể bị vô hiệu hóa)';
$string['servicerequireslogin'] = 'Dịch vụ web không tồn tại. (Phiên đăng nhập đã hết hạn hoặc đã đăng xuất).';
$string['servicesbuiltin'] = 'Các dịch vụ tích hợp';
$string['servicescustom'] = 'Tùy chỉnh dịch vụ';
$string['serviceusers'] = 'Những người dùng đã được xác thực';
$string['serviceusersettings'] = 'Thiết lập người dùng';
$string['serviceusersmatching'] = 'Những người dùng đã được xác thực trùng khớp';
$string['serviceuserssettings'] = 'Đổi thiết lập đối với những người dùng đã được xác thực';
$string['shortnametaken'] = 'Tên ngắn đã được dùng cho một dịch vụ khác ({$a})';
$string['simpleauthlog'] = 'Xác thực đăng nhập đơn giản';
$string['step'] = 'Bước';
$string['supplyinfo'] = 'Thêm chi tiết';
$string['testauserwithtestclientdescription'] = 'Giả lập truy cập ngoài đến dịch vụ sử dụng client thử nghiệm dịch vụ web. Trước khi làm vậy, đăng nhập làm người dùng với quyền hạn moodle/webservice:createtoken và nhận khóa bảo mật (token) thông qua thiết lập Hồ sơ của tôi. Bạn sẽ dùng token này trong client thử nghiệm. Trong client thử nghiệm, cũng phải chọn một giao thức được kích hoạt với xác thực token. <strong>CẢNH BÁO: Các hàm mà bạn thử nghiệm SẼ ĐƯỢC THỰC THI đối với người dùng này, vì vậy hãy cẩn thận cái bạn chọn để thử!</strong>';
$string['testclient'] = 'Client thử nghiệm dịch vụ web';
$string['testclientdescription'] = '* Client thử nghiệm dịch vụ web <strong>thực thi</strong> các hàm <strong>THẬT</strong>. Không thử các hàm mà bạn không biết. <br/>* Tất cả hàm dịch vụ web chưa được thực thi trong client thử nghiệm. <br/>* Để kiểm tra người dùng đó không thể truy cập một số hàm, bạn có thể  thử một số hàm vốn bạn không cho phép.<br/>* Để xem các tin nhắn lỗi rõ hơn đặt kiểm lỗi thành <strong>{$a->mode}</strong> vào {$a->atag}<br/>* Truy cập {$a->amfatag}.';
$string['testwithtestclient'] = 'Thử nghiệm dịch vụ';
$string['testwithtestclientdescription'] = 'Giả lập truy cập ngoài đến dịch vụ sử dụng client thử nghiệm dịch vụ web. Sử dụng một giao thức đã được kích hoạt với xác thực token. <strong>CẢNH BÁO:Các hàm mà bạn thử nghiệm SẼ ĐƯỢC THỰC THI, vì vậy hãy cẩn thận cái bạn chọn để thử!</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Xác thực token';
$string['tokencreatedbyadmin'] = 'Chỉ có thể được cài lại bởi quan tri viên (*)';
$string['tokencreator'] = 'Người tạo';
$string['tokenfilter'] = 'Bộ lọc huy hiệu';
$string['tokenfilterreset'] = 'Hiển thị tất cả huy hiệu';
$string['tokenfiltersubmit'] = 'Chỉ hiển thị những huy hiệu phù hợp';
$string['unknownoptionkey'] = 'Khóa lựa chọn không rõ ({$a})';
$string['unnamedstringparam'] = 'Một tham số chuỗi chưa đặt tên.';
$string['updateusersettings'] = 'Cập nhật';
$string['uploadfiles'] = 'Có thể đăng tải tệp';
$string['uploadfiles_help'] = 'Nếu được kích hoạt, bất kì người dùng nào đều có thể đăng tải tệp với khóa bảo mật của họ vào khu vực tệp riêng tư thuộc sở hữu hoặc khu vực tệp nháp. Bất kì hạn mức tệp người dùng nào cũng áp dụng.';
$string['userasclients'] = 'Người dùng là các client với token';
$string['userasclientsdescription'] = 'Các bước sau giúp bạn thiết lập dịch vụ web Moodle cho các người dùng là các client. Những bước này cũng giúp thiết lập phương thức xác thực token (khóa bảo mật) được khuyến nghị. Trong trường hợp này, người dùng sẽ tạo token của mình từ trang khóa bảo mật thông qua thiết lập Hồ sơ của tôi.';
$string['usermissingcaps'] = 'Thiếu các quyền hạn: {$a}';
$string['usernameorid'] = 'Tên tài khoản/id người dùng';
$string['usernameorid_help'] = 'Nhập tên tài khoản hoặc id người dùng';
$string['usernameoridnousererror'] = 'Không có người dùng được tìm thấy với tên tài khoản/id người dùng này.';
$string['usernameoridoccurenceerror'] = 'Nhiều hơn một người dùng được tìm thấy với tên tài khoản này. Hãy nhập id người dùng.';
$string['usernotallowed'] = 'Người dùng không được cho phép đối với dịch vụ này. Trước tiên bạn cần cho phép người dùng này trên trang quản trị các người dùng được phép của {$a}';
$string['userservices'] = 'Dịch vụ người dùng: {$a}';
$string['usersettingssaved'] = 'Thiết lập người dùng đã được lưu';
$string['validuntil'] = 'Hợp lệ cho đến khi';
$string['validuntil_help'] = 'Nếu được đặt, dịch vụ sẽ bị rút hoạt động sau ngày giờ này đối với người dùng này.';
$string['webservice'] = 'Dịch vụ web';
$string['webservices'] = 'Các dịch vụ web';
$string['webservicesoverview'] = 'Tổng quan';
$string['webservicetokens'] = 'Các token dịch vụ web';
$string['wrongusernamepassword'] = 'Tên tài khoản hoặc mật khẩu sai';
$string['wsaccessuserdeleted'] = 'Từ chối truy cập dịch vụ web đối với tên tài khoản bị xóa: {$a}';
$string['wsaccessuserexpired'] = 'Từ chối truy cập dịch vụ web đối với tên tài khoản có mật khẩu hết hạn: {$a}';
$string['wsaccessusernologin'] = 'Từ chối truy cập dịch vụ web đối với tên tài khoản xác thực không đăng nhập: {$a}';
$string['wsaccessusersuspended'] = 'Từ chối truy cập dịch vụ web đối với tên tài khoản bị đình chỉ: {$a}';
$string['wsaccessuserunconfirmed'] = 'Từ chối truy cập dịch vụ web đối với tên tài khoản chưa được xác nhận: {$a}';
$string['wsclientdoc'] = 'Tài liệu client dịch vụ web Moodle';
$string['wsdocapi'] = 'Tài liệu API';
$string['wsdocumentation'] = 'Tài liệu dịch vụ web';
$string['wsdocumentationdisable'] = 'Tài liệu dịch vụ web bị vô hiệu hóa.';
$string['wsdocumentationintro'] = 'Để tạo một client chúng tôi khuyên bạn đọc {$a->doclink}';
$string['wsdocumentationlogin'] = 'hoặc nhập tên tài khoản dịch vụ web của bạn và mật khẩu:';
$string['wspassword'] = 'Mật khẩu dịch vụ web';
$string['wsusername'] = 'Tên tài khoản dịch vụ web';
