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
 * Strings for component 'group', language 'vi', version '3.11'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Được thêm bởi {$a}';
$string['addgroup'] = 'Thêm người dùng vào nhóm';
$string['addgroupstogrouping'] = 'Thêm nhóm vào tập hợp nhóm';
$string['addgroupstogroupings'] = 'Thêm/xóa các nhóm';
$string['adduserstogroup'] = 'Thêm/xóa người dùng';
$string['allocateby'] = 'Phân bổ thành viên';
$string['anygrouping'] = '[Tập hợp nhóm bất kỳ]';
$string['autocreategroups'] = 'Tạo nhóm tự động';
$string['backtogroupings'] = 'Trở về các tổ';
$string['backtogroups'] = 'Trở về các nhóm';
$string['badnamingscheme'] = 'Phải chứa chính xác một kí tự \'@\' hoặc \'#\'';
$string['byfirstname'] = 'Theo bảng chữ cái tên, họ';
$string['byidnumber'] = 'Theo bảng chữ cái số ID';
$string['bylastname'] = 'Theo bảng chữ cái họ, tên';
$string['createautomaticgrouping'] = 'Tự động tạo tập hợp nhóm';
$string['creategroup'] = 'Tạo nhóm';
$string['creategrouping'] = 'Tạo cách chọn nhóm';
$string['creategroupinselectedgrouping'] = 'Tạp nhóm trong tập hợp nhóm';
$string['createingrouping'] = 'Tổ của các nhóm tự động khởi tạo';
$string['createorphangroup'] = 'Tạo phân nhóm';
$string['databaseupgradegroups'] = 'Phiên bản nhóm hiện là {$a}';
$string['defaultgrouping'] = 'Tổ mặc định';
$string['defaultgroupingname'] = 'Tập hợp nhóm';
$string['defaultgroupname'] = 'Nhóm';
$string['deleteallgroupings'] = 'Xóa tất cả các tổ';
$string['deleteallgroups'] = 'Xóa tất cả các nhóm';
$string['deletegroupconfirm'] = 'Bạn có chắc muốn xóa nhóm \'{$a}\'?';
$string['deletegrouping'] = 'Xóa tổ';
$string['deletegroupingconfirm'] = 'Bạn có chắc muốn xóa tổ \'{$a}\'? (Các nhóm trong tổ không bị xóa.)';
$string['deletegroupsconfirm'] = 'Bạn có chắc muốn xóa các nhóm sau?';
$string['deleteselectedgroup'] = 'Xóa nhóm đã chọn';
$string['editgroupingsettings'] = 'Sửa thiết lập tổ';
$string['editgroupsettings'] = 'Sửa thiết lập nhóm';
$string['enrolmentkey'] = 'Khóa ghi danh';
$string['enrolmentkey_help'] = 'Khóa ghi danh cho phép truy cập khóa học vốn được giới hạn cho những ai biết khóa. Nếu một khóa ghi danh được chỉ định, thì việc nhập khóa đó không chỉ giúp người dùng vào được khóa học, nó cũng khiến họ trở thành thành viên của nhóm.

Chú ý: Các khóa ghi danh nhóm phải được kích hoạt trong thiết lập tự ghi danh và một khóa ghi danh cho khóa học cũng phải được chỉ định.';
$string['enrolmentkeyalreadyinuse'] = 'Khóa ghi danh này đã được dùng cho một nhóm khác.';
$string['erroraddremoveuser'] = 'Lỗi thêm/xóa người dùng {$a} ở nhóm';
$string['erroreditgroup'] = 'Lỗi tạo/cập nhật nhóm {$a}';
$string['erroreditgrouping'] = 'Lỗi tạo/cập nhật tổ {$a}';
$string['errorinvalidgroup'] = 'Lỗi, nhóm {$a} không hợp lệ';
$string['errorremovenotpermitted'] = 'Bạn không được phép xóa thành viên {$a} nhóm tự động thêm';
$string['errorselectone'] = 'Hãy chọn một nhóm đơn trước khi chọn lựa chọn này';
$string['errorselectsome'] = 'Hãy chọn một hay nhiều nhóm trước khi chọn lựa chọn này';
$string['eventgroupcreated'] = 'Nhóm được tạo';
$string['eventgroupdeleted'] = 'Nhóm bị xóa';
$string['eventgroupingcreated'] = 'Tổ được tạo';
$string['eventgroupingdeleted'] = 'Tổ bị xóa';
$string['eventgroupingupdated'] = 'Tổ được cập nhật';
$string['eventgroupmemberadded'] = 'Thành viên nhóm được thêm';
$string['eventgroupmemberremoved'] = 'Thành viên nhóm bị xóa';
$string['eventgroupupdated'] = 'Nhóm được cập nhật';
$string['existingmembers'] = 'Các thành viên tồn tại: {$a}';
$string['filtergroups'] = 'Lọc các nhóm theo:';
$string['group'] = 'Nhóm';
$string['groupaddedsuccesfully'] = 'Nhóm {$a} được thêm thành công';
$string['groupaddedtogroupingsuccesfully'] = 'Nhóm {$a->groupname} được thêm vào tổ {$a->groupingname} thành công';
$string['groupby'] = 'Tự tạo dựa trên';
$string['groupdescription'] = 'Mô tả nhóm';
$string['groupinfo'] = 'Thông tin về nhóm được chọn';
$string['groupinfomembers'] = 'Thông tin về các thành viên được chọn';
$string['groupinfopeople'] = 'Thông tin về những người được chọn';
$string['grouping'] = 'Tổ';
$string['grouping_help'] = 'Một tổ là một tập hợp các nhóm trong một khóa học. Nếu một tổ được chọn, các học viên được phân bổ trong các nhóm thuộc tổ sẽ vẫn có thể làm việc với nhau.';
$string['groupingaddedsuccesfully'] = 'Tổ {$a} được thêm thành công';
$string['groupingdescription'] = 'Mô tả tổ';
$string['groupingname'] = 'Tên tổ';
$string['groupingnameexists'] = 'Tên tổ \'{$a}\' đã tồn tại trong khóa học này, hãy chọn một cái khác.';
$string['groupings'] = 'Các tổ';
$string['groupingsection'] = 'Truy cập tổ';
$string['groupingsection_help'] = 'Một tổ là một tập hợp các nhóm trong một khóa học. Nếu một tổ được chọn ở đây, chỉ những học viên được phân bổ trong các nhóm thuộc tổ này sẽ có quyền truy cập phân mục.';
$string['groupmember'] = 'Thành viên nhóm';
$string['groupmembers'] = 'Các thành viên nhóm';
$string['groupmemberssee'] = 'Xem các thành viên nhóm';
$string['groupmembersselected'] = 'Các thành viên của nhóm được chọn';
$string['groupmode'] = 'Chế độ nhóm';
$string['groupmode_help'] = 'Thiết lập này có 3 lựa chọn:

* Không nhóm - Không có các nhóm con, mọi người là một phần của cộng đồng lớn
* Các nhóm riêng rẽ - Mỗi nhóm chỉ có thể thấy các nhóm của riêng họ, người khác sẽ không nhìn thấy
* Các nhóm nhìn thấy - Mỗi thành viên nhóm làm việc trong nhóm riêng của họ, nhưng vẫn có thể thấy các nhóm khác

Chế độ nhóm được định nghĩa ở cấp khóa học là chế độ mặc định cho tất cả hoạt động trong khóa học. Mỗi hoạt động hỗ trợ các nhóm có thể định nghĩa chế độ nhóm của riêng mình, mặc dù nếu chế độ nhóm bị bắt buộc ở cấp khóa học, thiết lập chế độ khóa học cho từng hoạt động bị bỏ qua.';
$string['groupmodeforce'] = 'Bắt buộc chế độ nhóm';
$string['groupmodeforce_help'] = 'Nếu chế độ nhóm bị bắt buộc, thì chế độ nhóm khóa học được áp dụng vào mọi hoạt động trong khóa học. Thiết lập chế độ nhóm trong từng hoạt động đều bị bỏ qua.';
$string['groupmy'] = 'Nhóm của tôi';
$string['groupname'] = 'Tên nhóm';
$string['groupnameexists'] = 'Tên nhóm \'{$a}\' đã tồn tại trong khóa học này, hãy chọn một cái khác.';
$string['groupnotamember'] = 'Xin lỗi, bạn không phải thành viên của nhóm đó';
$string['groups'] = 'Các nhóm';
$string['groupscount'] = 'Các nhóm ({$a})';
$string['groupsettingsheader'] = 'Các nhóm';
$string['groupsnone'] = 'Không nhóm';
$string['groupsonly'] = 'Chỉ các nhóm';
$string['groupspreview'] = 'Xem trước nhóm';
$string['groupsseparate'] = 'Phân chia nhóm';
$string['groupsvisible'] = 'Các nhóm hiện hữu';
$string['grouptemplate'] = 'Nhóm @';
$string['hidepicture'] = 'Ẩn hình';
$string['importgroups'] = 'Nhập dữ liệu nhóm';
$string['importgroups_help'] = 'Các nhóm có thể được nhập thông qua tệp văn bản. Định dạng của tệp nên như sau:

* Mỗi dòng của tệp chứa một bản ghi
* Mỗi bản ghi là một chuỗi dữ liệu được ngăn cách bởi dấu phẩy
* Bản ghi đầu tiên chứa một danh sách các tên mục để định nghĩa định dạng phần còn lại của tệp
* Tên mục bắt buộc là tên nhóm
* Các tên mục tùy ý là mô tả, khóa ghi danh, ảnh, ẩn ảnh';
$string['members'] = 'Thành viên mỗi nhóm';
$string['membersofselectedgroup'] = 'Các thành viên của:';
$string['namingscheme'] = 'Kiểu tên nhóm';
$string['namingscheme_help'] = 'Dấu at (@) có thể được dùng để tạo các nhóm với tên chỉ chứa kí tự. Ví dụ Group @ sẽ sinh các nhóm có tên Group A, Group B, Group C, ...

Dấu thăng (#) có thể được dùng để tạo nhóm có tên chứa số. Ví dụ Nhóm # sẽ sinh các nhóm có tên Group 1, Group 2, Group 3, ...';
$string['newgrouping'] = 'Tổ mới';
$string['newpicture'] = 'Hình mới';
$string['newpicture_help'] = 'Chọn một ảnh định dạng JPG hoặc PNG. Ảnh sẽ được xén thành hình vuông và giảm cỡ thành 100x100 pixels.';
$string['noallocation'] = 'Không phân bổ';
$string['nogrouping'] = 'Không tổ';
$string['nogroups'] = 'Chưa có nhóm được thiết lập trong khóa học này';
$string['nopermissionforcreation'] = 'Không thể tạo nhóm "{$a}" vì bạn không đủ phép yêu cầu';
$string['nosmallgroups'] = 'Ngăn nhóm nhỏ cuối cùng';
$string['notingrouping'] = '[Không trong tổ]';
$string['nousersinrole'] = 'Không có người dùng phù hợp trong vai trò được chọn';
$string['number'] = 'Số nhóm/thành viên';
$string['numgroups'] = 'Số nhóm';
$string['nummembers'] = 'Thành viên mỗi nhóm';
$string['overview'] = 'Tổng quan';
$string['potentialmembers'] = 'Các thành viên tiềm năng: {$a}';
$string['potentialmembs'] = 'Các thành viên tiềm năng';
$string['printerfriendly'] = 'Hiển thị thân thiện với máy in';
$string['random'] = 'Ngẫu nhiên';
$string['removefromgroup'] = 'Xóa người dùng khỏi nhóm {$a}';
$string['removefromgroupconfirm'] = 'Bạn thật sự muốn xóa người dùng "{$a->user}" khỏi nhóm "{$a->group}"?';
$string['removegroupingsmembers'] = 'Xóa tất cả nhóm từ các tổ';
$string['removegroupsmembers'] = 'Xóa tất cả thành viên nhóm';
$string['selectfromrole'] = 'Xóa các thành viên với vai trò';
$string['showgroupsingrouping'] = 'Hiện các nhóm trong tổ';
$string['showmembersforgroup'] = 'Hiện các thành viên nhóm';
$string['toomanygroups'] = 'Không đủ người dùng để phân phối vào số nhóm này - chỉ có {$a} người dùng trong vai trò được chọn.';
$string['usercount'] = 'Đếm người dùng';
$string['usercounttotal'] = 'Đếm người dùng ({$a})';
$string['usergroupmembership'] = 'Quyền thành viên của người dùng được chọn:';
