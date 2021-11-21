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
 * Strings for component 'blog', language 'vi', version '3.11'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Đưa thêm một mục mới';
$string['addnewexternalblog'] = 'Đăng kí blog ngoài';
$string['assocdescription'] = 'Nếu bạn đang viết về một khóa học và/hoặc các module về hoạt động, lựa chọn chúng ở đây.';
$string['associated'] = 'Đi kèm {$a}';
$string['associatewithcourse'] = 'Blog về khóa học {$a->coursename}';
$string['associatewithmodule'] = 'Blog về {$a->modtype}: {$a->modname}';
$string['association'] = 'Phần đi kèm';
$string['associations'] = 'Các phần đi kèm';
$string['associationunviewable'] = 'Mục này không thể cho người khác xem được cho đến khi một khóa học đi kèm với nó hoặc mục \'Đăng tải lên\' bị thay đổi';
$string['autotags'] = 'Thêm các thẻ này';
$string['autotags_help'] = 'Một một hoặc nhiều thẻ nội bộ (được ngăn cách bởi dấu phẩy) mà bạn muốn tự động thêm vào mỗi mục blog được sao chép từ blog ngoài vào blog nội bộ của bạn.';
$string['backupblogshelp'] = 'Nếu được kích hoạt thì blog sẽ được kèm vào các bản sao lưu TRANG tự động';
$string['blockexternalstitle'] = 'Các blog liên kết ngoài';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog về {$a->type} này';
$string['blogaboutthiscourse'] = 'Thêm mục về khóa học này';
$string['blogaboutthismodule'] = 'Thêm mục về {$a} này';
$string['blogadministration'] = 'Quản trị blog';
$string['blogdeleteconfirm'] = 'Xóa mục blog này?';
$string['blogdisable'] = 'Blog bị vô hiệu hóa!';
$string['blogentries'] = 'Các mục blog';
$string['blogentriesabout'] = 'Các mục blog về {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Các mục blog về {$a->course} của {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Các mục blog về {$a->mod} của {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Các mục blog về {$a->course} của {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Các mục blog về {$a->mod} này của {$a->user}';
$string['blogentrybyuser'] = 'Mục blog của {$a}';
$string['blogpreferences'] = 'Các thiết lập blog';
$string['blogs'] = 'Các blog';
$string['blogscourse'] = 'Các blog khóa học';
$string['blogssite'] = 'Các blog trang';
$string['blogtags'] = 'Các thẻ khóa học';
$string['cannotviewcourseblog'] = 'Bạn không được phép xem các blog trong khóa học này';
$string['cannotviewcourseorgroupblog'] = 'Bạn không được phép xem các blog trong khóa học/nhóm này';
$string['cannotviewsiteblog'] = 'Bạn không được phép xem tất cả blog trang';
$string['cannotviewuserblog'] = 'Bạn không được phép đọc blog người dùng';
$string['configexternalblogcrontime'] = 'Độ thường xuyên mà Moodle kiểm tra các blog ngoài để lấy bài mới.';
$string['configmaxexternalblogsperuser'] = 'Số blog ngoài mỗi người dùng được phép liên kết với blog Moodle của họ.';
$string['configuseblogassociations'] = 'Kích hoạt đi kèm các mục blog với các khóa học và mô-đun khóa học.';
$string['configuseexternalblogs'] = 'Cho phép người dùng chỉ định dòng tin blog ngoài. Moodle thường xuyên kiểm tra các dòng tin này và sao chép các mục mới vào blog nội bộ của người dùng đó.';
$string['courseblog'] = 'Blog khóa học: {$a}';
$string['courseblogdisable'] = 'Các blog của khóa học không được kích hoạt';
$string['courseblogs'] = 'Người dùng chỉ có thể thấy các blogs của những ai đã chia sẻ một khóa học';
$string['deleteblogassociations'] = 'Xóa phần đi kèm blog';
$string['deleteblogassociations_help'] = 'Nếu được chọn thì các mục blog sẽ không còn đi kèm với khóa học này hay bất kì hoạt động khóa học hay tài nguyên nào. Bản thân các mục blog sẽ không bị xóa.';
$string['deleteentry'] = 'Xóa mục';
$string['deleteexternalblog'] = 'Hủy đăng kí blog ngoài này';
$string['deleteotagswarn'] = 'Bạn có chắc là muốn gỡ bỏ tất cả các thẻ này ra khỏi tất cả bài đăng trên blog và cả trên hệ thống nữa?';
$string['description'] = 'Mô tả';
$string['description_help'] = 'Nhập một hai câu tóm tắt nội dung blog ngoại của bạn. (Nếu không cung cấp mô tả, mô tả được ghi trong blog ngoài của bạn sẽ được dùng).';
$string['donothaveblog'] = 'Bạn không có blog của riêng mình, rất tiếc.';
$string['editentry'] = 'Chỉnh sửa một mục blog';
$string['editexternalblog'] = 'Chỉnh sửa blog ngoài này';
$string['emptybody'] = 'Thân mục blog không được trống';
$string['emptyrssfeed'] = 'URL mà bạn vừa nhập không chỉ đến dòng tin RSS hợp lệ';
$string['emptytitle'] = 'Tiêu đề mục blog không được trống';
$string['emptyurl'] = 'Bạn phải chỉ định một URL đến dòng tin RSS hợp lệ';
$string['entrybody'] = 'Phần nội dung của mục';
$string['entrybodyonlydesc'] = 'Mô tả mục';
$string['entryerrornotyours'] = 'Mục này không phải của bạn';
$string['entrysaved'] = 'Mục của bạn đã được lưu';
$string['entrytitle'] = 'Tiêu đề mục';
$string['eventblogassociationadded'] = 'Phần đi kèm blog đã được tạo';
$string['eventblogassociationdeleted'] = 'Phần đi kèm đã xóa';
$string['eventblogentriesviewed'] = 'Các mục blog được xem';
$string['eventblogexternaladded'] = 'Blog ngoài được đăng kí';
$string['eventblogexternalremoved'] = 'Blog ngoài không đăng kí';
$string['eventblogexternalupdated'] = 'Blog ngoài được cập nhật';
$string['evententryadded'] = 'Mục blog được thêm';
$string['evententrydeleted'] = 'Mục blog bị xóa';
$string['evententryupdated'] = 'Mục của blog được cập nhật';
$string['externalblogcrontime'] = 'Kế hoạch trình cron blog ngoài';
$string['externalblogdeleteconfirm'] = 'Gỡ bỏ đăng ký blog liên kết ngoài này?';
$string['externalblogdeleted'] = 'Blog ngoài chưa đăng kí';
$string['externalblogs'] = 'Các blog ngoài';
$string['feedisinvalid'] = 'Dòng tin này không hợp lệ';
$string['feedisvalid'] = 'Dòng tin này hợp lệ';
$string['filterblogsby'] = 'Lọc các thực thể bởi...';
$string['filtertags'] = 'Thẻ các bộ lọc';
$string['filtertags_help'] = 'Bạn có thể sử dụng tính năng này để lọc các mục mà bạn muốn sử dụng. Nếu bạn chỉ định các thẻ ở đây (ngăn cách bởi dấu phẩy) thì chỉ các mục với các thẻ này sẽ được sao chép từ blog ngoài.';
$string['groupblog'] = 'Nhóm blog: {$a}';
$string['groupblogdisable'] = 'Blog nhóm không được kích hoạt';
$string['groupblogentries'] = 'Các mục blog liên kết với {$a->coursename} theo nhóm {$a->groupname}';
$string['groupblogs'] = 'Người dùng chỉ có thể thấy các blogs của những ai đã chia sẻ một nhóm';
$string['incorrectblogfilter'] = 'Kiểu bộ lọc blog vừa được khai báo không hợp lệ';
$string['intro'] = 'Dòng tin RSS này được khởi tạo';
$string['invalidgroupid'] = 'Group ID không hợp lệ';
$string['invalidurl'] = 'URL này không đến được';
$string['linktooriginalentry'] = 'Liên kết đến mục blog ban đầu';
$string['maxexternalblogsperuser'] = 'Số blog tối đã của blog ngoài mỗi người dùng';
$string['myprofileuserblogs'] = 'Xem tất cả thành phần của blog';
$string['name'] = 'Tên';
$string['name_help'] = 'Nhập tên mô tả blog ngoài của bạn. (Nếu không cung cấp tên, tiêu đề blog ngoài của bạn sẽ được sử dụng).';
$string['noentriesyet'] = 'Không có mục hiện hữu ở đây';
$string['noguestpost'] = 'Khách không thể gửi bài viét lên các blog!';
$string['nopermissionstodeleteentry'] = 'Bạn thiếu quyền để xóa mục blog này';
$string['norighttodeletetag'] = 'Bạn không có quyền xóa thẻ -{$a} này';
$string['nosuchentry'] = 'Không có mục blog như thế';
$string['notallowedtoedit'] = 'Bạn không được phép chỉnh sửa mục này';
$string['numberofentries'] = 'Các mục: {$a}';
$string['numberoftags'] = 'Số thẻ hiển thị';
$string['page-blog-edit'] = 'Các trang chỉnh sửa blog';
$string['page-blog-index'] = 'Các trang liệt kê blog';
$string['page-blog-x'] = 'Tất cả trang blog';
$string['pagesize'] = 'Số mục blog mỗi trang';
$string['permalink'] = 'Liên kết tĩnh';
$string['personalblogs'] = 'Người dùng chỉ có thể xem blog của họ';
$string['preferences'] = 'Tùy chọn';
$string['privacy:metadata:core_comments'] = 'Các bình luận liên kết với các mục trong blog';
$string['privacy:metadata:core_files'] = 'Các tập tin đi kèm với các mục blog';
$string['privacy:metadata:core_tag'] = 'Các tag đi kèm với các mục blog';
$string['privacy:metadata:external:filtertags'] = 'Danh sách các tag để lọc các mục';
$string['privacy:metadata:external:timemodified'] = 'Thời điểm liên kết được sửa lần cuối';
$string['privacy:metadata:external:userid'] = 'Kí danh người dùng đã thêm mục blog ngoài.';
$string['privacy:metadata:post'] = 'Thông tin liên quan tới các mục blog';
$string['privacy:metadata:post:content'] = 'Nội dung của một mục blog';
$string['privacy:metadata:post:created'] = 'Ngày mục blog được tạo';
$string['privacy:metadata:post:lastmodified'] = 'Ngày mục blog được sửa lần cuối';
$string['privacy:metadata:post:publishstate'] = 'Mục được hiện hay không';
$string['privacy:metadata:post:subject'] = 'Tiêu đề của mục blog';
$string['privacy:metadata:post:summary'] = 'Văn bản của mục blog';
$string['privacy:metadata:post:uniquehash'] = 'Một định danh độc đáo cho mục ngoài, thường là một URL.';
$string['privacy:metadata:post:userid'] = 'Kí danh của người dùng đã thêm mục blog';
$string['privacy:metadata:post:usermodified'] = 'Người dùng sửa mục lần cuối';
$string['privacy:path:blogassociations'] = 'Các bài đăng trên blog liên quan';
$string['privacy:unknown'] = 'Không xác định';
$string['publishto'] = 'Xuất bản tới';
$string['publishto_help'] = 'Có 3 lựa chọn:

* Bản thân (nháp) - Chỉ bạn và quản trị viên có thể xem mục này
* Bất cứ ai trên trang này - Bất cứ ai đăng kí trên trang này có thể đọc mục này
* Bất cứ ai trên thế giới - Bất cứ ai, kể cả khách, có thể đọc mục này';
$string['publishtocourse'] = 'Những người dùng học cùng khóa học với bạn';
$string['publishtocourseassoc'] = 'Thành viên của khóa học liên quan';
$string['publishtocourseassocparam'] = 'Thành viên của {$a}';
$string['publishtogroup'] = 'Những người dùng ở cùng nhóm với bạn';
$string['publishtogroupassoc'] = 'Những thành viên trong nhóm bạn ở trong khóa học liên quan';
$string['publishtogroupassocparam'] = 'Những thành viên trong nhóm bạn {$a}';
$string['publishtonoone'] = 'Của bạn (bản nháp)';
$string['publishtosite'] = 'Bất kỳ ai trên site này';
$string['publishtoworld'] = 'Bất kỳ ai trên thế giới';
$string['readfirst'] = 'Đọc cái này trước';
$string['relatedblogentries'] = 'Các mục blog liên quan';
$string['retrievedfrom'] = 'Được lấy từ';
$string['rssfeed'] = 'Dòng tin Blog RSS';
$string['searchterm'] = 'Tìm kiếm: {$a}';
$string['settingsupdatederror'] = 'Một lỗi đã xảy ra, các thiết lập cho blog không được cập nhật';
$string['siteblogdisable'] = 'Blog trang không được kích hoạt';
$string['siteblogheading'] = 'Trang blog';
$string['siteblogs'] = 'Tất cả người dùng có thể xem tất cả mục blog';
$string['tagdatelastused'] = 'Thẻ ngày giờ được sử dụng trước đó';
$string['tagparam'] = 'Thẻ: {$a}';
$string['tags'] = 'Các thẻ';
$string['tagsort'] = 'Sắp xếp thẻ hiển thị theo';
$string['tagtext'] = 'Văn bản thẻ';
$string['timefetched'] = 'Thời gian đồng bộ hóa vừa qua';
$string['timewithin'] = 'Hiển thị thẻ được sử dụng trong số ngày này';
$string['updateentrywithid'] = 'Cập nhật mục';
$string['url'] = 'URL dòng tin RSS';
$string['url_help'] = 'Nhập URL dòng tin RSS cho blog ngoài của bạn.';
$string['useblogassociations'] = 'Kích hoạt các phần đi kèm blog';
$string['useexternalblogs'] = 'Kích hoạt blog ngoài';
$string['userblog'] = 'Blog người dùng: {$a}';
$string['valid'] = 'Hợp lệ';
$string['viewallblogentries'] = 'Tất cả các mục về cái này {$a}';
$string['viewallmodentries'] = 'Xem tất cả mục về {$a->type} này';
$string['viewallmyentries'] = 'Xem tất cả mục của tôi';
$string['viewblogentries'] = 'Các mục về {$a->type} này';
$string['viewblogsfor'] = 'Xem toàn bộ các mục dành cho...';
$string['viewcourseblogs'] = 'Xem tất cả các mục cho khóa học này';
$string['viewentriesbyuseraboutcourse'] = 'Xem tất cả các mục về khóa học này của {$a}';
$string['viewgroupblogs'] = 'Xem các mục dành cho nhóm...';
$string['viewgroupentries'] = 'Nhóm các mục';
$string['viewmodblogs'] = 'Xem các mục dành cho mô - đun...';
$string['viewmodentries'] = 'Mô - đun các mục';
$string['viewmyentries'] = 'Xem các mục của tôi';
$string['viewmyentriesaboutcourse'] = 'Xem các mục của tôi về khóa học này';
$string['viewmyentriesaboutmodule'] = 'Xem tất cả các mục của tôi về {$a} này';
$string['viewsiteentries'] = 'Xem tất cả các mục';
$string['viewuserentries'] = 'Xem tất cả các mục của {$a}';
$string['worldblogs'] = 'Thế giới có thể đọc các mục được thiết đặt truy cập công cộng';
$string['wrongexternalid'] = 'Kí danh blog ngoài sai';
$string['wrongpostid'] = 'Kí danh bài đăng trên blog sai';
