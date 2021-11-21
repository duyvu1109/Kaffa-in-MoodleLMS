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
 * Strings for component 'repository', language 'vi', version '3.11'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Bộ chọn tệp truy cập được';
$string['activerepository'] = 'Các trình bổ trợ kho hiện hữu';
$string['activitybackup'] = 'Sao lưu hoạt động';
$string['add'] = 'Thêm';
$string['addfile'] = 'Thêm...';
$string['addplugin'] = 'Thêm trình bổ trợ kho';
$string['allowexternallinks'] = 'Cho phép các liên kết ngoài';
$string['areacategoryintro'] = 'Giới thiệu danh mục';
$string['areacourseintro'] = 'Giới thiệu khóa học';
$string['areacourseoverviewfiles'] = 'Các tệp tóm tắt khóa học';
$string['arearoot'] = 'Hệ thống';
$string['areauserbackup'] = 'Sao lưu người dùng';
$string['areauserdraft'] = 'Các bản nháp';
$string['areauserpersonal'] = 'Các tệp riêng tư';
$string['areauserprofile'] = 'Hồ sơ';
$string['attachment'] = 'Đính kèm';
$string['author'] = 'Tác giả';
$string['automatedbackup'] = 'Các bản sao lưu tự động';
$string['back'] = '&laquo; Trở về';
$string['backtodraftfiles'] = '&laquo; Trở về trình quản lị tệp nháp';
$string['cacheexpire'] = 'Thời hạn bộ đệm';
$string['cannotaccessparentwin'] = 'Nếu cửa sổ cha nằm trên HTTPS, thì chúng ta không được phép truy cập đối tượng window.opener, vì vậy chúng tôi không thể làm mới kho cho bạn một cách tự động được, nhưng chúng tôi đã có phiên hoạt động của bạn, chỉ việc trở về bộ chọn tệp và chọn lại kho, nó sẽ hoạt động ngay.';
$string['cannotdownload'] = 'Không thể tải tệp này';
$string['cannotdownloaddir'] = 'Không thể tải thư mục này';
$string['cannotinitplugin'] = 'Gọi plugin_init bất thành';
$string['choosealink'] = 'Chọn một liên kết...';
$string['chooselicense'] = 'Chọn giấy phép';
$string['cleancache'] = 'Dọn dẹp các tệp bộ đệm của tôi';
$string['close'] = 'Đóng';
$string['commonrepositorysettings'] = 'Thiết lập kho thông thường';
$string['configallowexternallinks'] = 'Lựa chọn này cho phép tất cả người dùng chọn xem đa phương tiện bên ngoài có được chép vào Moodle hay không. Nếu nó tắt thì đa phương tiên luôn luôn được chép vào Moodle (thường tốt nhất cho việc tích hợp dữ liệu tổng quan và bảo mật). Nếu nó bất thì người dùng có thể chọn mỗi khi họ thêm đa phương tiện vào văn bản.';
$string['configcacheexpire'] = 'Lượng thời gian các danh sách tệp đó được lên bộ đệm cục bộ (theo giây) khi duyệt các kho ngoài.';
$string['configgetfiletimeout'] = 'Hết giờ theo giây đối với việc tải tệp ngoài vào moodle.';
$string['configsaved'] = 'Thiết lập đã được lưu!';
$string['configsyncfiletimeout'] = 'Hết giờ theo giây đối với việc đồng bộ hóa kích thước tập tin ngoài.';
$string['configsyncimagetimeout'] = 'Hết giờ theo giây đối với việc tải một tệp ảnh từ kho ngoài trong đồng bộ hóa.';
$string['confirmdelete'] = 'Bạn có chắc muốn xóa kho này - {$a}? Nếu bạn chọn "Tiếp tục và tải", các tham chiếu tệp đến các nội dung ngoài sẽ được tải về moodle, nhưng có thể mất thời gian để xử lí.';
$string['confirmdeletefile'] = 'Bạn có chắc muốn xóa tệp này?';
$string['confirmdeletefilewithhref'] = 'Bạn có chắc muốn xóa tệp này? Có {$a} tệp bí danh/lối tắt sử dụng tệp này làm nguồn. Nếu bạn đi tiếp thì những bí danh này sẽ được chuyển đổi sang các bản sao thật.';
$string['confirmdeletefolder'] = 'Bạn có chắc muốn xóa thư mục này? Tất cả tập tin và thư mục con sẽ bị xóa.';
$string['confirmremove'] = 'Bạn có chắc muốn xóa trình bổ trợ kho này, các lựa chọn của nó và <strong>tất cả thực thể của nó</strong> - {$a}? Nếu bạn chọn "Tiếp tục và tải", các tham chiếu tệp đến các nội dung ngoài sẽ được tải về moodle, nhưng có thể mất thời gian để xử lí.';
$string['confirmrenamefile'] = 'Bạn có chắc muốn đặt tên/xóa tệp này? Có {$a} tệp bí danh/lối tắt sử dụng tệp này làm nguồn. Nếu bạn đi tiếp thì những bí danh này sẽ được chuyển đổi sang các bản sao thật.';
$string['confirmrenamefolder'] = 'Bạn có chắc muôn chuyển/đặt tên thư mục này? Bất kì tệp bí danh/lối tắt nào tham chiếu các tệp trong thư mục này sẽ được chuyển đổi sang các bản sao thật.';
$string['continueuninstall'] = 'Tiếp tục';
$string['continueuninstallanddownload'] = 'Tiếp tục và tải';
$string['copying'] = 'Đang sao chép';
$string['coursebackup'] = 'Bản sao lưu khóa học';
$string['create'] = 'Tạo';
$string['createfolderfail'] = 'Thất bại khi tạo thư mục này';
$string['createfoldersuccess'] = 'Tạo thư mục thành công';
$string['createinstance'] = 'Tạo một thực thể kho';
$string['createrepository'] = 'Tạo một thực thể kho';
$string['createxxinstance'] = 'Tạo thực thể "{$a}"';
$string['date'] = 'Ngày';
$string['datecreated'] = 'Đã được tạo';
$string['deleted'] = 'Kho đã bị xóa';
$string['deleterepository'] = 'Xóa kho này';
$string['detailview'] = 'Xem chi tiết';
$string['dimensions'] = 'Kích thước';
$string['disabled'] = 'Bị vô hiệu hóa';
$string['displaydetails'] = 'Hiển thi thư mục với chi tiết tệp';
$string['displayicons'] = 'Hiển thị thư mục với biểu tượng tệp';
$string['displaytree'] = 'Hiển thị thư mục như cây tập tin';
$string['download'] = 'Tải';
$string['downloadfolder'] = 'Tải tất cả';
$string['downloadsucc'] = 'Tệp này đã được tải thành công';
$string['draftareanofiles'] = 'Không thể tải được bì không có tệp đính kèm';
$string['editrepositoryinstance'] = 'Sửa thực thể kho';
$string['emptylist'] = 'Danh sách trống';
$string['emptytype'] = 'Không thể tạo loại kho: tên loại trống';
$string['enablecourseinstances'] = 'Cho phép người dùng thêm thục thể kho vào khóa học';
$string['enableuserinstances'] = 'Cho phép người dùng thêm thực thể kho vào bối cảnh người dùng';
$string['enter'] = 'Nhập';
$string['entername'] = 'Nhập tên thu mục';
$string['enternewname'] = 'Nhập tên tệp mới';
$string['error'] = 'Một lỗi không rõ đã xảy ra!';
$string['errordoublereference'] = 'Không thể ghi đè tệp có lối tắt/bí danh bởi các lối tắt đến tệp này còn tồn tại.';
$string['errornotyourfile'] = 'Bạn không thể chọn tệp không được thêm bởi bạn';
$string['errorpostmaxsize'] = 'Tệp được đăng tải có thể vượt quá chỉ dẫn post_max_size trong php.ini';
$string['erroruniquename'] = 'Tên thực thể kho nên độc nhất';
$string['errorwhilecommunicatingwith'] = 'Lỗi khi giao tiếp với kho \'{$a}\'.';
$string['errorwhiledownload'] = 'Một lỗi đã xảy ra khi tải tệp: {$a}';
$string['existingrepository'] = 'Kho này đã tồn tại';
$string['federatedsearch'] = 'Tìm kiếm liên hợp';
$string['fileexists'] = 'Tên tệp đã được sử dụng, hãy dùng tên khác';
$string['fileexistsdialog_editor'] = 'Một tệp có tên đó đã được đính kèm trong văn bản bạn đang sửa.';
$string['fileexistsdialog_filemanager'] = 'Một tệp có tên đã được đính kèm';
$string['fileexistsdialogheader'] = 'Tệp tồn tại';
$string['filename'] = 'Tên tệp';
$string['filenotnull'] = 'Bạn chọn một tệp để đăng tải';
$string['filepicker'] = 'Bộ chọn tệp';
$string['filesaved'] = 'Tệp đã được lưu';
$string['filesizenull'] = 'Kích thước tệp khôn thể xác định được';
$string['folderexists'] = 'Tên tệp đã được sử dụng, hãy sử dụng tên khác';
$string['foldernotfound'] = 'Không tìm thấy thư mục';
$string['folderrecurse'] = 'Thư mục không thể được chuyển sang thư mục con của nó';
$string['getfile'] = 'Chọn tệp này';
$string['getfiletimeout'] = 'Lấy thời hạn tệp';
$string['help'] = 'Trợ giúp';
$string['iconview'] = 'Xem như các biểu tượng';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'thực thể';
$string['instancedeleted'] = 'thực thể đã bị xóa';
$string['instances'] = 'Các thực thể kho';
$string['instancesforcourses'] = '{$a} Thực thể chung toàn khóa học';
$string['instancesforsite'] = '{$a} Thực thể chung toàn trang';
$string['instancesforusers'] = '{$a} Thực thể riêng người dùng';
$string['invalidfiletype'] = 'Loại tệp {$a} không thể chấp nhận được.';
$string['invalidjson'] = 'Chuỗi JSON không hợp lệ';
$string['invalidparams'] = 'Các tham số không hợp lệ';
$string['invalidplugin'] = 'Trình bổ trợ kho {$a} không hợp lệ';
$string['invalidrepositoryid'] = 'ID kho không hợp lệ';
$string['isactive'] = 'Kích hoạt?';
$string['keyword'] = 'Từ khóa';
$string['lastmodified'] = 'Được chỉnh sửa lần cuối';
$string['license'] = 'Giấy phép';
$string['linkexternal'] = 'Liên kết ngoài';
$string['listview'] = 'Xem như danh sách';
$string['loading'] = 'Đang tải...';
$string['login'] = 'Đăng nhập tài khoản của bạn';
$string['logout'] = 'Thoát';
$string['lostsource'] = 'Lỗi. Thiếu nguồn. {$a}';
$string['makefileinternal'] = 'Tạo bản sao tệp này';
$string['makefilelink'] = 'Liên kết tệp trực tiếp';
$string['makefilereference'] = 'Tạo một bí danh/lối tắt đến tệp';
$string['manage'] = 'Quản lí kho';
$string['manageurl'] = 'Quản lí';
$string['manageuserrepository'] = 'Quản lí kho cá nhân';
$string['moving'] = 'Đang chuyển';
$string['name'] = 'Tên';
$string['newfolder'] = 'Thư mục mới';
$string['newfoldername'] = 'Tên thư mục mới';
$string['noenter'] = 'Không có gì được nhập';
$string['nofilesattached'] = 'Không có tệp đính kèm';
$string['nofilesavailable'] = 'Không có tệp';
$string['nomorefiles'] = 'Không cho phép thêm đính kèm';
$string['nopathselected'] = 'Chưa chọn đường dẫn đích (nhấn đúp nút cây để chọn)';
$string['nopermissiontoaccess'] = 'Không được phép truy cập kho này.';
$string['norepositoriesavailable'] = 'Xin lỗi, không có kho nào hiện tại của bạn có thể trả về các tệp theo định dạng yêu cầu.';
$string['norepositoriesexternalavailable'] = 'Xin lỗi, không có kho nào hiện tại của bạn có thể trả về các tệp ngoài.';
$string['noresult'] = 'Không có kết quả tìm kiếm';
$string['notyourinstances'] = 'Bạn không thể xem/sửa các thực thể kho của người dùng khác';
$string['off'] = 'Được kích hoạt nhưng ẩn';
$string['on'] = 'Được kích hoạt và hiển thị';
$string['openpicker'] = 'Chọn một tệp...';
$string['operation'] = 'Thao tác';
$string['original'] = 'Gốc';
$string['overwrite'] = 'Ghi đè';
$string['overwriteall'] = 'Ghi đè tất cả';
$string['path'] = 'Đường dẫn';
$string['plugin'] = 'Các trình bổ trợ kho';
$string['pluginerror'] = 'Lỗi trong trình bổ trợ kho';
$string['pluginname'] = 'Tên trình bổ trợ kho';
$string['pluginnamehelp'] = 'Nếu bạn để trống nó tên mặc định sẽ được dùng.';
$string['popup'] = 'Nhấn nút "Đăng nhập" để đăng nhập';
$string['popupblockeddownload'] = 'Cửa sổ tải xuống bị chặn, hãy cho phép cửa sổ nổi, và thử lại.';
$string['preview'] = 'Xem trước';
$string['privatefilesof'] = '{$a} Tệp riêng tư';
$string['readonlyinstance'] = 'Bạn không thể sửa/xóa một thực thể chỉ đọc';
$string['referencesexist'] = 'Có {$a} tệp bí danh/lối tắt sử dụng tệp này làm nguồn';
$string['referenceslist'] = 'Các bí danh/lối tắt';
$string['refresh'] = 'Làm mới';
$string['refreshnonjsfilepicker'] = 'Hãy đóng cửa sổ và làm mới bộ chọn tệp không có javascript';
$string['removed'] = 'Kho đã bị  xóa';
$string['renameall'] = 'Đặt tên tất cả';
$string['renameto'] = 'Đặt tên thành "{$a}"';
$string['repositories'] = 'Các kho';
$string['repository'] = 'Kho';
$string['repositorycourse'] = 'Các kho khóa học';
$string['repositoryerror'] = 'Kho từ xa trả về lỗi: {$a}';
$string['repositoryicon'] = 'Biểu tượng kho';
$string['save'] = 'Lưu';
$string['saveas'] = 'Lưu thành';
$string['saved'] = 'Đã được lưu';
$string['saving'] = 'Đang lưu';
$string['search'] = 'Tìm kiếm';
$string['searching'] = 'Tìm trong';
$string['searchrepo'] = 'Tìm kiếm kho';
$string['sectionbackup'] = 'Các bản sao lưu phân mục';
$string['select'] = 'Chọn';
$string['setmainfile'] = 'Đặt tập tin chính';
$string['setmainfile_help'] = 'Nếu có nhiều tệp trong thư mục, tệp chính là cái xuất hiện trên trang hiển thị. Các tệp khác như hình ảnh hay phim có thể được nhúng bên trong. Trong trình quản lí tệp tệp chính được chỉ dẫn với tiêu đề in đậm.';
$string['settings'] = 'Thiết lập';
$string['siteinstances'] = 'Các thực thể kho của trang';
$string['size'] = 'Kích thước';
$string['submit'] = 'Nộp';
$string['sync'] = 'Đồng bộ';
$string['syncfiletimeout'] = 'Đồng bộ thời hạn  tệp';
$string['syncimagetimeout'] = 'Đồng bộ thời hạn hình';
$string['title'] = 'Chọn một tệp...';
$string['type'] = 'Loại';
$string['typenotvisible'] = 'Loại không hiển thị';
$string['undisclosedreference'] = '(Chưa rõ)';
$string['undisclosedsource'] = '(Chưa rõ)';
$string['unknownoriginal'] = 'Không rõ';
$string['unzipped'] = 'Giải nén thành công';
$string['upload'] = 'Đăng tải tệp này';
$string['uploading'] = 'Đang đăng tải...';
$string['uploadsucc'] = 'Tệp đã được đăng tải thành công';
$string['uselatestfile'] = 'Dùng tệp gần đây nhất';
$string['usercontextrepositorydisabled'] = 'Bạn không thể chỉnh sửa kho này trong bối cảnh người dùng.';
$string['xhtmlerror'] = 'Có lẽ bạn đang dùng header nghiêm ngặt XHTML, một số thành phần YUI không hoạt động trong chế độ này, hãy tắt nó trong moodle';
$string['ziped'] = 'Nén thư mục thành công';
