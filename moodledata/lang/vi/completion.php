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
 * Strings for component 'completion', language 'vi', version '3.11'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Điểm đạt được';
$string['activities'] = 'Các hoạt động';
$string['activitiescompleted'] = 'Hoạt động hoàn thành';
$string['activitiescompletednote'] = 'Chú ý: Hoạt động hoàn thành phải được thiết đặt cho một hoạt động để xuất hiện trong danh sách trên.';
$string['activitieslabel'] = 'Các hoạt dộng/ tài nguyên';
$string['activityaggregation'] = 'Điều kiện yêu cầu';
$string['activityaggregation_all'] = 'TẤT CẢ các hoạt động được chọn hoàn thành';
$string['activityaggregation_any'] = 'BẤT KÌ các hoạt động được chọn hoàn thành';
$string['activitycompletion'] = 'Hoàn thành các hoạt động';
$string['activitycompletionupdated'] = 'Lưu các thay đổi';
$string['activitygradenotrequired'] = 'Không yêu cầu điểm';
$string['affectedactivities'] = 'Thay đổi sẽ ảnh hưởng tới các hoạt động hoặc tài nguyên sau <b>{$a}</b> :';
$string['aggregationmethod'] = 'Phương pháp tính gộp (aggregation)';
$string['all'] = 'Tất cả';
$string['any'] = 'Bất kỳ';
$string['approval'] = 'Đồng ý';
$string['areyousureoverridecompletion'] = 'Bạn có chắc mình muốn ghi đè trạng thái hoàn tất của hoạt động này cho người dùng này và đánh dấu nó "{$a}"?';
$string['badautocompletion'] = 'Khi bạn chọn hoàn thành tự động, bạn cũng phải kích hoạt ít nhất một yêu cầu (bên dưới).';
$string['badcompletiongradeitemnumber'] = 'Tính năng yêu cầu điểm không thể được kích hoạt cho <b>{$a}</b> vì  chấm điểm bằng {$a} không được kích hoạt.';
$string['bulkcompletiontracking_help'] = '<strong> Không <strong> Không chỉ định hoàn thành hoạt động
<strong>Thủ công:<strong> Các học viên có thể đánh dấu thủ công hoạt động này đã hoàn thành
<strong>Kèm điều kiên:<strong> Hiện hoạt động đã hoàn tất khi đã thỏa mãn các điều kiện';
$string['checkall'] = 'Tích hoặc bỏ tích toàn bộ các hoạt động và tài nguyên';
$string['checkallsection'] = 'Tích hoặc bỏ tích toàn bộ các hoạt động và tài nguyên trong mục sau: {$a}';
$string['completed'] = 'Đã hoàn thành';
$string['completedunlocked'] = 'Các tùy chọn hoàn thành được mở';
$string['completedunlockedtext'] = 'Khi bạn lưu các thay đổi, trạng thái hoàn thành đối với tất cả học sinh sẽ bị xóa. Nếu bạn đổi ý về điều này, không lưu biểu mẫu lại.';
$string['completedwarning'] = 'Các tùy chọn hoàn thành đã khóa';
$string['completedwarningtext'] = 'Một hay nhiều học sinh ({$a}) đã đánh dấu hoạt động này như hoàn thành rồi. Thay đổi các lựa chọn hoàn thành sẽ xóa trạng thái hoàn thành của họ và có thể gây hiểu nhầm. Vì vậy các lựa chọn đã bị khóa và không nên mở khóa trừ khi thực sự cần thiết.';
$string['completion'] = 'Kiểm tra độ hoàn thành';
$string['completion-alt-auto-enabled'] = 'Hệ thống xác định phần này đã hoàn thành theo các điều kiện: {$a}';
$string['completion-alt-auto-fail'] = 'Đã hoàn thành: {$a} (không được điểm đạt)';
$string['completion-alt-auto-n'] = 'Chưa hoàn thành: {$a}';
$string['completion-alt-auto-n-override'] = 'Chưa hoàn thành: {$a->modname} (set by {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Đã hoàn thành: {$a} (được điểm đạt)';
$string['completion-alt-auto-y'] = 'Đã hoàn thành: {$a}';
$string['completion-alt-auto-y-override'] = 'Đã hoàn thành: {$a->modname} (set by {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Học viên có thể tự đánh dấu hoàn thành phần này: {$a}';
$string['completion-alt-manual-n'] = 'Chưa hoàn thành: {$a}. Chọn để đánh dấu hoàn thành.';
$string['completion-alt-manual-n-override'] = 'Chưa hoàn thành: {$a->modname} (set by {$a->overrideuser}). Chọn đánh dấu là đã hoàn thành.';
$string['completion-alt-manual-y'] = 'Đã hoàn thành: {$a}. Chọn để đánh dấu chưa hoàn thành.';
$string['completion-alt-manual-y-override'] = 'Đã hoàn thành: {$a->modname} (set by {$a->overrideuser}). Chọn đánh dấu là chưa hoàn thành.';
$string['completion-fail'] = 'Đã hoàn thành (không được điểm đạt)';
$string['completion-n'] = 'Chưa hoàn thành';
$string['completion-n-override'] = 'Chưa hoàn thành (set by {$a})';
$string['completion-pass'] = 'Đã hoàn thành (được điểm đạt)';
$string['completion-y'] = 'Đã hoàn thành';
$string['completion-y-override'] = 'Đã hoàn thành (set by {$a})';
$string['completion_automatic'] = 'Khi các điều kiện được thỏa mãn, đánh dấu hoạt động như là đã hoàn thành';
$string['completion_help'] = 'Nếu được kích hoạt, hoàn thành hoạt động được theo dõi, thủ công hoặc tự động, dựa trên các điều kiện nhất định. Nhiều điều kiện có thể được đặt nếu muốn. Nếu vậy, hoạt động sẽ chỉ được xem là hoàn thành khi TẤT CẢ điều kiện được thỏa.

Một dấu chọn kế bên tên hoạt động trên trang khóa học chỉ ra khi nào hoạt động hoàn tất.';
$string['completion_manual'] = 'Học viên có thể tự đánh dấu là đã hoàn thành hoạt động';
$string['completion_none'] = 'Không chỉ rõ việc hoàn thành hoạt động';
$string['completionactivitydefault'] = 'Dùng hoạt động mặc định';
$string['completiondefault'] = 'Theo dõi hoàn thành mặc định';
$string['completiondisabled'] = 'Tắt, không hiện những cài đặt hoạt động';
$string['completionduration'] = 'Ghi danh';
$string['completionenabled'] = 'Được kích hoạt, kiểm soát thông qua các thiết lập hoàn thành và hoạt động';
$string['completionexpected'] = 'Ngày hoàn thành dự kiến là';
$string['completionexpected_help'] = 'Thiết lập này chỉ định ngày giờ hoạt động hoàn thành theo mong đợi. Ngày giờ không được hiển thị cho học sinh và chỉ được hiển thị trong báo cáo hoàn thành hoạt động.';
$string['completionexpectedfor'] = '{$a->instancename}  nên được hoàn tất';
$string['completionicons'] = 'Các hộp đánh dấu hoàn thành';
$string['completionicons_help'] = 'Một dấu chọn kế bên tên hoạt động có thể được sử dụng để chỉ ra khi nào hoạt động hoàn thành.

Nếu khung có viền nét đứt hiển thị, dấu chọn sẽ xuất hiện tự động khi bạn hoàn thành hoạt động theo các điều kiện được đặt bởi giáo viên.

Nếu khung có viền nét liền hiển thị, bạn có thể nhấn vào nó để chọn khung khi nghĩ rằng mình đã hoàn thành hoạt động. (Nhấn lại để bỏ chọn nếu đổi ý.) Chọn tùy ý và đơn giản chỉ là một cách để theo dõi quá trình của bạn trong khóa học.';
$string['completionmenuitem'] = 'Hoàn thành';
$string['completionnotenabled'] = 'Việc hoàn thành không được kích hoạt';
$string['completionnotenabledforcourse'] = 'Việc hoàn thành không được kích hoạt cho khóa học này';
$string['completionnotenabledforsite'] = 'Việc hoàn thành không được kích hoạt cho hê thống này';
$string['completionondate'] = 'Ngày giờ';
$string['completionondatevalue'] = 'Người dùng phải còn ghi danh cho đến khi';
$string['completionsettingslocked'] = 'Cài đặt hoàn thành đã khóa';
$string['completionupdated'] = 'Nâng cấp hoàn tất cho hoạt động <b>{$a}</b>';
$string['completionusegrade'] = 'Yêu cầu điểm số';
$string['completionusegrade_desc'] = 'Học viên phải nhận điểm số để hoàn thành hoạt động này';
$string['completionusegrade_help'] = 'Nếu được kích hoạt, hoạt động được xem như hoàn thành khi học sinh đạt điểm. Biểu tượng đạt và trượt có thể hiển thị nếu điểm đạt cho hoạt động được đặt.';
$string['completionview'] = 'Yêu cầu phải xem';
$string['completionview_desc'] = 'Học viên phải xem hoạt động này để hoàn thành nó';
$string['configcompletiondefault'] = 'Thiết lập mặc định đối với theo dõi hoàn thành khi tạo các hoạt động mới.';
$string['configenablecompletion'] = 'Khi được kích hoạt, nó giúp bật tính năng theo dõi hoàn thành (quá trình) ở cấp khóa học.';
$string['confirmselfcompletion'] = 'Tự xác nhận đã hoàn thành';
$string['courseaggregation'] = 'Điều kiện yêu cầu';
$string['courseaggregation_all'] = 'TẤT CẢ khóa học được chọn hoàn thành';
$string['courseaggregation_any'] = 'BẤT KÌ khóa học được chọn hoàn thành';
$string['coursealreadycompleted'] = 'Bạn đã hoàn thành khóa học này';
$string['coursecomplete'] = 'Khóa học hoàn thành';
$string['coursecompleted'] = 'Khóa học đã hoàn thành';
$string['coursecompletion'] = 'Hoàn thành khóa học';
$string['coursecompletioncondition'] = 'Điều kiện: {$a}';
$string['coursegrade'] = 'Điểm số khóa học';
$string['coursesavailable'] = 'Khóa học hiện có';
$string['coursesavailableexplaination'] = 'Chú ý: Các điều kiện hoàn thành khóa học phải được đặt cho một khóa học để xuất hiện trong danh sách trên.';
$string['criteria'] = 'Tiêu chuẩn';
$string['criteriagroup'] = 'Nhóm tiêu chuẩn';
$string['criteriarequiredall'] = 'Yêu cầu phải thỏa mãn tất cả các tiêu chuẩn dưới đây';
$string['criteriarequiredany'] = 'Yêu cầu nào dưới đây cũng phải thỏa mãn';
$string['csvdownload'] = 'Tải ở định dạng bảng (UTF-8 .csv)';
$string['datepassed'] = 'Ngày đã qua';
$string['days'] = 'Các ngày';
$string['daysoftotal'] = '{$a->days} trong {$a->total}';
$string['defaultcompletion'] = 'Mặc định hoàn tất hoạt động';
$string['defaultcompletionupdated'] = 'Đã lưu các thay đổi';
$string['deletecompletiondata'] = 'Xóa dữ liệu hoàn thành';
$string['dependencies'] = 'Phần phụ thuộc';
$string['dependenciescompleted'] = 'Hoàn thành các khóa học khác';
$string['editcoursecompletionsettings'] = 'Chỉnh sửa các cài đặt hoàn thành khóa học';
$string['enablecompletion'] = 'Mở việc theo dõi sự hoàn thành';
$string['enablecompletion_help'] = 'Nếu được kích hoạt, các điều kiện hoàn thành khóa học có thể đặt trong thiết lập hoạt động và/hoặc các điều kiện hoàn thành khóa học có thể được đặt.';
$string['enrolmentduration'] = 'Thời gian ghi danh';
$string['enrolmentdurationlength'] = 'Người dùng phải giữ ghi danh trong';
$string['err_noactivities'] = 'Thông tin hoàn thành không được kích hoạt cho bất kì hoạt động nào, vì vậy không thể hiển thị gì. Bạn có thể kích hoạt thông tin hoàn thành bằng cách chỉnh sửa các thiết lập cho hoạt động.';
$string['err_nocourses'] = 'Hoàn thành khóa học không được kích hoạt cho bất kì khóa học khác nào, vì vậy không thể hiển thị gì. Bạn có thể kích hoạt hoàn thành khóa học trong các thiết lập khóa học.';
$string['err_nograde'] = 'Chưa cài đặt điểm số đạt cho học phần này. Để kích hoạt loại điều kiện này bạn phải tạo điểm qua học phần cho học phần này.';
$string['err_noroles'] = 'Không có quyền với khả năng moodle/course:markcomplete trong khóa học này.';
$string['err_nousers'] = 'Không có học sinh trong khóa học hay nhóm này có thông tin hoàn thành được hiển thị. (Mặc định, thông tin hoàn thành chỉ được hiển thị với học sinh, nếu không có học sinh, bạn sẽ thấy lỗi này. Quản trị viên có thể thay thế lựa chọn này thông qua màn hình quản trị.)';
$string['err_settingslocked'] = 'Một hay nhiều học sinh đã hoàn thành tiêu chuẩn vì vậy các thiết lập đã bị khóa. Mở khóa các thiết lập tiêu chuẩn hoàn thành sẽ xóa bất kì dữ liệu người dùng hiện có và có thể gây hiểu nhầm.';
$string['err_system'] = 'Lỗi nội bộ đã xảy ra trong hệ thống hoàn thành. (Quản trị hệ thống có thể kích hoạt thông tin kiểm lỗi để xem thêm chi tiết.)';
$string['eventcoursecompleted'] = 'Khóa học đã hoàn thành';
$string['eventcoursecompletionupdated'] = 'Khóa học hoàn thành được cập nhật';
$string['eventcoursemodulecompletionupdated'] = 'Hoàn thành mô-đun khóa học được cập nhật';
$string['excelcsvdownload'] = 'Tải về định dạng tương thích Excel (.csv)';
$string['fraction'] = 'Phân số';
$string['graderequired'] = 'Điểm khóa học yêu cầu';
$string['gradexrequired'] = 'Yêu cầu {$a}';
$string['hiddenrules'] = 'Một số thiết đặt cụ thể cho  <b>{$a}</b> đã bị ẩn. Để xem được hãy chọn các hoạt động khác';
$string['inprogress'] = 'Đang tiến hành';
$string['manual'] = 'Thủ công';
$string['manualcompletionby'] = 'Hoàn thành thủ công bởi những người khác';
$string['manualcompletionbynote'] = 'Chú ý: Khả năng moodle/course:markcomplete phải được cấp cho một vài trò để xuất hiện trong danh sách.';
$string['manualselfcompletion'] = 'Tự hoàn thành';
$string['manualselfcompletionnote'] = 'Chú ý: Khối tự hoàn thành nên được thêm vào khóa học nếu tự hoàn thành thủ công được kích hoạt.';
$string['markcomplete'] = 'Đánh dấu hoàn thành';
$string['markedcompleteby'] = 'Được {$a} đánh dấu là đã hoàn thành';
$string['markingyourselfcomplete'] = 'Tự đánh dấu đã hoàn thành';
$string['moredetails'] = 'Chi tiết';
$string['nocriteriaset'] = 'Không có tiêu chuẩn hoàn thành nào được cài cho khóa học này';
$string['nogradeitem'] = 'Không thể kích hoạt yêu cầu điểm cho  <b>{$a}</b>  vì hoạt động không được tính điểm.';
$string['notcompleted'] = 'Chưa hoàn thành';
$string['notenroled'] = 'Bạn chưa ghi danh vào khóa học này';
$string['nottracked'] = 'Hiện tại bạn không bị theo dõi bởi hoàn thành khóa học';
$string['notyetstarted'] = 'Chưa bắt đầu';
$string['overallaggregation'] = 'Các yêu cầu hoàn thành';
$string['overallaggregation_all'] = 'Khóa học hoàn thành khi TẤT CẢ điều kiện thỏa.';
$string['overallaggregation_any'] = 'Khóa học hoàn thành khi BẤT KÌ điều kiện nào thỏa';
$string['pending'] = 'Đang ngưng';
$string['periodpostenrolment'] = 'Giai đoạn sau ghi danh';
$string['privacy:metadata:completionstate'] = 'Nếu hoạt động đã hoàn thành';
$string['privacy:metadata:course'] = 'Kí danh khóa học';
$string['privacy:metadata:coursecompletedsummary'] = 'Lưu trữ thông tin về người dùng đã hoàn thành điều kiện trong một khóa học';
$string['privacy:metadata:coursemoduleid'] = 'Kí danh hoạt động';
$string['privacy:metadata:coursemodulesummary'] = 'Lưu trữ dữ liệu hoàn tất hoạt động cho một người dùng';
$string['privacy:metadata:coursesummary'] = 'Lưu trữ dữ liệu hoàn tất khóa học cho một người dùng.';
$string['privacy:metadata:gradefinal'] = 'Nhận điểm cuối kì để hoàn tất khóa học';
$string['privacy:metadata:overrideby'] = 'Kí danh người dùng đã ghi đè hoàn tất hoạt động';
$string['privacy:metadata:timecompleted'] = 'Thời điểm khóa họcđã hoàn tất';
$string['privacy:metadata:timeenrolled'] = 'Thời điểm người dùng ghi danh khóa học';
$string['privacy:metadata:timemodified'] = 'Thời điểm hoàn tất hoạt động được chỉnh sửa';
$string['privacy:metadata:timestarted'] = 'Thời điểm khóa học bắt đầu';
$string['privacy:metadata:unenroled'] = 'Nếu người dùng đã bị loại tên khỏi khóa học';
$string['privacy:metadata:userid'] = 'Kí danh người dùng với khóa học và dữ liệu hoàn tất hoạt động';
$string['privacy:metadata:viewed'] = 'Nếu hoạt động đã được xem';
$string['progress'] = 'Quá trình người học';
$string['progress-title'] = '{$a->người dùng}, {$a->hoạt động}: {$a->trạng thái} {$a->ngày}';
$string['progresstotal'] = 'Quá trình: {$a->complete} / {$a->total}';
$string['remainingenroledfortime'] = 'Ghi danh được lưu lại trong một thời đoạn';
$string['remainingenroleduntildate'] = 'Ghi danh được lưu lại cho đến một ngày xác định';
$string['reportpage'] = 'Cho người dùng xem {$a->from} từ {$a->to}  của {$a->total}.';
$string['requiredcriteria'] = 'Điều kiện yêu cầu';
$string['resetactivities'] = 'Dọn toàn bộ các hoạt động và tài nguyên đã chọn';
$string['restoringcompletiondata'] = 'Đang viết dữ liệu hoàn tất';
$string['roleaggregation'] = 'Điều kiện yêu cầu';
$string['roleaggregation_all'] = 'TẤT CẢ vai trò được chọn để đánh dấu khi điều kiện thỏa';
$string['roleaggregation_any'] = 'BẤT KÌ vai trò nào được chọn để đánh dấu khi điều kiện thỏa';
$string['roleidnotfound'] = 'Không tìm thấy kí danh với vai trò {$a}';
$string['saved'] = 'Đã lưu';
$string['seedetails'] = 'Xem chi tiết';
$string['select'] = 'Chọn';
$string['self'] = 'Tự động';
$string['selfcompletion'] = 'Tự động hoàn thành';
$string['showinguser'] = 'Hiển thị người ùng';
$string['unenrolingfromcourse'] = 'Rút tên khỏi khóa học';
$string['unenrolment'] = 'Rút tên';
$string['unit'] = 'Đơn vị';
$string['unlockcompletion'] = 'Mở khóa các cài đặt hoàn thành';
$string['unlockcompletiondelete'] = 'Mở khóa các cài đặt hoàn thành và xóa dữ liệu hoàn thành của người dùng';
$string['updateactivities'] = 'Nâng cấp trạng thái hoàn tất của các hoạt động đã chọn';
$string['usernotenroled'] = 'Người dùng không ghi danh khóa học này';
$string['viewcoursereport'] = 'Xem báo cáo khóa học';
$string['viewingactivity'] = 'Xem {$a}';
$string['withconditions'] = 'Cùng với các điều kiện';
$string['writingcompletiondata'] = 'Đang viết dữ liệu hoàn tất';
$string['xdays'] = '{$a} ngày';
$string['yourprogress'] = 'Quá trình học của bạn';
