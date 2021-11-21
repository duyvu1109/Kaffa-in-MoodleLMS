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
 * Strings for component 'grades', language 'vi', version '3.11'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Các hoạt động';
$string['addcategory'] = 'Thêm phụ mục';
$string['addfeedback'] = 'Thêm phản hồi';
$string['addidnumbers'] = 'Thêm số ID';
$string['additem'] = 'Thêm mục điểm';
$string['addoutcome'] = 'Thêm một điểm đầu ra';
$string['addoutcomeitem'] = 'Thêm một mục đầu ra';
$string['addscale'] = 'Thêm thước đo điểm';
$string['aggregateextracreditmean'] = 'Điểm trung bình (với các credits thêm vào)';
$string['aggregatemax'] = 'Điểm cao nhất';
$string['aggregatemean'] = 'Điểm trung bình';
$string['aggregatemedian'] = 'Điểm giữa';
$string['aggregatemin'] = 'Điểm thấp nhất';
$string['aggregatemode'] = 'Cách tính điểm';
$string['aggregateonlygraded'] = 'Chỉ gộp điểm không trống';
$string['aggregateonlygraded_help'] = 'Điểm trống là điểm thiếu trong sổ điểm. Nó có thể có từ một bài nộp chưa được chấm hoặc từ bài trắc nghiệm chưa được thi v.v.

Thiết lập này xác định liệu các điểm trống sẽ không được bao gồm trong phép gộp hay được đếm như điếm tối thiểu, ví dụ 0 cho bài tập được chấm điểm từ 0 đến 100.';
$string['aggregateoutcomes'] = 'Bao gồm các đầu ra trong phép gộp';
$string['aggregateoutcomes_help'] = 'Nếu được kích hoạt, các đầu ra được bao gồm trong phép gộp. Nó có thể gây ra tổng chuyên mục không mong muốn.';
$string['aggregatesonly'] = 'Chỉ gộp';
$string['aggregatesum'] = 'Tổng điểm';
$string['aggregateweightedmean'] = 'Điểm trung bình khối';
$string['aggregateweightedmean2'] = 'Điểm trung bình đơn khối';
$string['aggregation'] = 'Gộp';
$string['aggregation_help'] = 'Phép gộp xác định điểm trong một chuyên mục được kết hợp như thế nào, như

* Điểm trung bình - Tổng tất cả điểm chia cho tổng số số điểm
* Điểm trung vị - Điểm trung vị khi điểm được sắp xếp theo thứ tự
* Điểm thấp nhất
* Điểm cao nhất
* Điểm yếu vị - Điểm có tần số xuất hiện nhiều nhất
* Tổng điểm - Tổng tất cả giá trị điểm, bỏ qua thang điểm';
$string['aggregationcoef'] = 'Hệ số gộp';
$string['aggregationcoefextra'] = 'Gia số';
$string['aggregationcoefextra_help'] = 'Nếu phép gộp là Tổng điểm hoặc Trung bình đơn khối và ô chọn gia số được đánh dấu, điểm tối đa của mục điểm không được cộng thêm vào điểm tối đa của chuyên mục, kết quả là có thể đạt được điểm tối đa (hoặc điểm trên tối đa nếu được quản trị trang kích hoạt) trong chuyên mục mà không cần điểm tối đa trong tất cả các mục điểm.

Nếu phép gộp là Trung bình điểm (với gia số) và gia số được đặt một giá trị lớn hơn không, khoản cộng thêm là thừa số mà điểm được nhân vào trước khi cộng vào tổng sau khi tính trung bình.';
$string['aggregationcoefextrasum'] = 'Gia số';
$string['aggregationcoefextrasum_help'] = 'Nếu ô chọn gia số được đánh dấu, điểm tối đa của mục điểm không được cộng vào điểm tối đa của chuyên mục, kết quả là có thể đạt được điểm tối đa (hoặc điểm trên tối đa nếu được quản trị trang kích hoạt) trong chuyên mục mà không cần điểm tối đa trong tất cả các mục điểm.';
$string['aggregationcoefextraweight'] = 'Gia số khối';
$string['aggregationcoefextraweight_help'] = 'Nếu gia số khối được đặt một giá trị lớn hơn không, điểm sẽ là gia số trong quá trình gộp. Là thừa số mà điểm được nhân vào trước khi cộng vào tổng tính trung bình.';
$string['aggregationcoefweight'] = 'Trọng khối mục';
$string['aggregationcoefweight_help'] = 'Trọng khối mục được sử dụng trong gộp chuyên mục nhằm ảnh hưởng đến tầm quan trọng của mục được so sánh với các mục điểm khác trong cùng chuyên mục.';
$string['aggregationposition'] = 'Vị trí gộp';
$string['aggregationposition_help'] = 'Thiết lập này xác định xem cột chuyên mục và tổng khóa học được hiển thị đầu tiên hay cuối cùng trong các báo cáo sổ điểm.';
$string['aggregationsvisible'] = 'Các loại gộp hiện hữu';
$string['aggregationsvisiblehelp'] = 'Chọn tất cả loại gộp hiện hữu. Giữ phím Ctrl để chọn nhiều mục.';
$string['allstudents'] = 'Tất cả học viên';
$string['allusers'] = 'Tất cả người dùng';
$string['autosort'] = 'Sắp xếp tự động';
$string['average'] = 'Trung bình';
$string['averagesdecimalpoints'] = 'Thập phân trong cột trung bình';
$string['averagesdecimalpoints_help'] = 'Thiết lập này xác định xem số chữ số thập phân hiển thị cho mỗi trị trung bình hoặc thiết lập tổng quát số chữ số thập phân cho chuyên mục hay mục điểm được sử dụng (thừa kế).';
$string['averagesdisplaytype'] = 'Loại hiển thị cột trung bình';
$string['averagesdisplaytype_help'] = 'Thiết lập này xác định xem trung bình (mean) được hiển thị bằng điểm thực, phần trăm hay chữ, hoặc là loại hiển thị chuyên mục hay mục điểm được sử dụng (thừa kế).';
$string['badgrade'] = 'Điểm cung cấp không hợp lệ';
$string['badlyformattedscale'] = 'Nhập một danh sách các giá trị ngăn cách bởi dấu phẩy (yêu cầu ít nhất hai giá trị).';
$string['calculatedgrade'] = 'Điểm được tính';
$string['calculation'] = 'Tính toán';
$string['calculation_help'] = 'Phép tính điểm là công thức dùng để xác định điểm. Công thức nên bắt đấu với dấu bằng (=) và có thể sử dụng các toán tử, như max, min và sum. Nếu mong muốn, các mục điểm khác có thể được bao gồm trong phép tính bằng cách nhập số ID trong ngoặc vuông kép.';
$string['cannotaccessgroup'] = 'Không thể truy cập điểm của nhóm được chọn, xin lỗi.';
$string['categories'] = 'Các phụ mục';
$string['category'] = 'Phụ mục';
$string['categoryedit'] = 'Chỉnh sửa phụ mục';
$string['categoryname'] = 'Tên phụ mục';
$string['categorytotal'] = 'Tổng số trong phụ mục';
$string['categorytotalfull'] = '{$a->category} tổng cộng';
$string['categorytotalname'] = 'Tên tổng chuyên mục';
$string['changedefaults'] = 'Thay đổi mặc định';
$string['changereportdefaults'] = 'Mặc định báo cáo thay đổi';
$string['choosecategory'] = 'Chọn phụ mục';
$string['combo'] = 'Thực đơn Thẻ và Thả';
$string['componentcontrolsvisibility'] = 'Liệu mục điểm này có được ẩn kiểm soát bởi các thiết lập hoạt động';
$string['courseavg'] = 'Trung bình khóa học';
$string['coursegradesettings'] = 'Thiết lập điểm khóa học';
$string['coursename'] = 'Tên khóa';
$string['coursescales'] = 'Thước đo khóa';
$string['coursesettings'] = 'Thiết lập khóa';
$string['coursesettingsexplanation'] = 'Thiết lập khóa học xác định sổ điểm xuất hiện cho tất cả người tham gia khóa học như thế nào.';
$string['coursetotal'] = 'Tổng khóa học';
$string['createcategory'] = 'Tạo chuyên mục';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Phép gộp cha hiện tại';
$string['decimalpoints'] = 'Chữ số thập phân toàn cục';
$string['decimalpoints_help'] = 'Thiết lập này xác định số chữ số thập phân hiển thị cho từng điểm. Nó không ảnh hưởng phép tính điểm, vốn được làm chính xác đến 5 chữ số thập phân.';
$string['default'] = 'Mặc định';
$string['defaultprev'] = 'Mặc định ({$a})';
$string['deletecategory'] = 'Xóa phụ mục';
$string['disablegradehistory'] = 'Tắt chức năng lịch sử điểm';
$string['disablegradehistory_help'] = 'Vô hiệu hóa theo dõi lịch sử thay đổi trong các bảng điểm liên quan. Nó có thể tăng tốc máy chủ một chút và bảo quản không gian trong CSDL.';
$string['dropdown'] = 'Thực đơn thả';
$string['droplow'] = 'Bỏ phần thấp nhất';
$string['droplow_help'] = 'Thiết lập này kích hoạt một số điểm thấp nhất được chỉ định loại ra khỏi phép gộp.';
$string['droplowestvalue'] = 'Đặt giá trị thả điểm thấp nhất';
$string['dropped'] = 'Đã được bỏ';
$string['duplicatescale'] = 'Nhân đôi thước đo';
$string['edit'] = 'Chỉnh sửa';
$string['editcalculation'] = 'Chỉnh sửa tính toán';
$string['editcalculationverbose'] = 'Sửa phép tính cho {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Chỉnh sửa phản hồi';
$string['editgrade'] = 'Chỉnh sửa điểm';
$string['editgradeletters'] = 'Chỉnh sửa điểm chữ';
$string['editoutcome'] = 'Chỉnh sửa điểm đầu ra';
$string['editoutcomes'] = 'Chỉnh sửa các điểm đầu ra';
$string['editscale'] = 'Chỉnh sửa thước đo';
$string['edittree'] = 'Các chuyên mục và mục';
$string['editverbose'] = 'Sửa {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Kích hoạt AJAX';
$string['enableajax_help'] = 'Thêm lớp tính năng AJAX vào báo cáo chấm điểm, đơn giản hóa và tăng tốc các thao tác thông thường. Tùy thuộc vào Javascript được bật trên cấp trình duyệt người dùng.';
$string['enableoutcomes'] = 'Kích hoạt đầu ra';
$string['enableoutcomes_help'] = 'Hỗ trợ Đầu ra (còn được biết đến như là Năng lực, Mục tiêu, Chuẩn hay Tiêu chuẩn) nghĩa là chúng ta có thể chấm các thử sử dụng một hay nhiều thang điểm kết theo các phát biểu đầu ra. Kích hoạt đầu ra khiến việc chấm điểm đặc biệt như vậy khả thi trên toàn trang.';
$string['encoding'] = 'Mã hóa';
$string['errorcalculationbroken'] = 'Có lẽ tham chiếu vòng hay công thức tính hỏng';
$string['errorcalculationnoequal'] = 'Công thức phải bắt đầu với dấu bằng (=1+2)';
$string['errorcalculationunknown'] = 'Công thức không hợp lệ';
$string['errornocalculationallowed'] = 'Các phép tính không được cho phép đối với mục này';
$string['errorsavegrade'] = 'Không thể lưu điểm, xin lỗi.';
$string['errorsettinggrade'] = 'Lỗi lưu điểm "{$a->itemname}" cho id người dùng {$a->userid}';
$string['eventusergraded'] = 'Điểm người dùng được chỉnh sửa trong sổ điểm';
$string['excluded'] = 'Ngoại trừ';
$string['excluded_help'] = 'Nếu được chọn, điểm sẽ không được bao gồm trong bất kì phép gộp nào.';
$string['expand'] = 'Mở rộng chuyên mục';
$string['export'] = 'Xuất';
$string['exportalloutcomes'] = 'Xuất tất cả đầu ra';
$string['exportfeedback'] = 'Bao gồm phản hồi trong bản xuất';
$string['exportonlyactive'] = 'Ngoại trừ những người dùng bị đình chỉ';
$string['exportonlyactive_help'] = 'Chỉ bao gồm học sinh trong bản xuất mà';
$string['exportplugins'] = 'Trình bổ trợ xuất';
$string['exportsettings'] = 'Thiết lập xuất';
$string['exportto'] = 'Xuất ra';
$string['extracreditvalue'] = 'Giá trị gia số đối với {$a}';
$string['feedback'] = 'Phản hồi';
$string['feedback_help'] = 'Khung này cho phép thêm bất kì bình luận nào về điểm.';
$string['feedbackforgradeitems'] = 'Phản hồi đối với {$a}';
$string['feedbacks'] = 'Các phản hồi';
$string['finalgrade'] = 'Điểm cuối cùng';
$string['finalgrade_help'] = 'Nếu ô chọn thay thế được chọn, điểm có thể được thêm vào hoặc sửa đổi';
$string['fixedstudents'] = 'Cột học sinh tĩnh';
$string['fixedstudents_help'] = 'Cho phép điểm cuộn ngang mà không mất tầm nhìn cột học sinh, bằng cách làm cho nó tĩnh.';
$string['full'] = 'Đầy đủ';
$string['fullmode'] = 'Xem đầy đủ';
$string['generalsettings'] = 'Thiết lập chung';
$string['grade'] = 'Điểm';
$string['gradeadministration'] = 'Quản trị điểm';
$string['gradeanalysis'] = 'Phân tích điểm';
$string['gradebook'] = 'Sổ điểm';
$string['gradebookhistories'] = 'Lịch sử điểm';
$string['gradeboundary'] = 'Giới hạn điểm bằng chữ';
$string['gradeboundary_help'] = 'Thiết lập này xác định phần trăm tối thiểu mà điểm sẽ được gán bằng chữ.';
$string['gradecategory'] = 'Chuyên mục điểm';
$string['gradecategoryonmodform'] = 'Chuyên mục điểm';
$string['gradecategoryonmodform_help'] = 'Thiết lập này kiểm soát chuyên mục mà điểm của hoạt động này được đưa vào sổ điểm.';
$string['gradecategorysettings'] = 'Các thiết lập chuyên mục điểm';
$string['gradedisplay'] = 'Hiển thị điểm';
$string['gradedisplaytype'] = 'Loại hiển thị điểm';
$string['gradedisplaytype_help'] = 'Thiết lập này xác định điểm được hiển thị như thế nào trong bản chấm điểm và báo cáo người dùng.

* Thực - Điểm thật sự
* Phần trăm
* Chữ - Chữ hay từ được sử dụng để biểu thị một khoảng điểm';
$string['gradeexport'] = 'Xuất điểm';
$string['gradeexportcustomprofilefields'] = 'Xuất điểm có tùy chọn mục hồ sơ';
$string['gradeexportcustomprofilefields_desc'] = 'Bao gồm các mục hồ sơ tùy chọn này trong bản xuất điểm, ngăn cách bởi dấu phẩy.';
$string['gradeexportdecimalpoints'] = 'Chữ số thập phân bản điểm xuất';
$string['gradeexportdecimalpoints_desc'] = 'Số chữ số thập phân để hiển thị bản xuất. Nó có thể được thay thế trong quá trình xuất.';
$string['gradeexportdisplaytype'] = 'Loại hiển thị bản xuất điểm';
$string['gradeexportdisplaytype_desc'] = 'Điểm có thể hiển thị bằng điểm thực, phần trăm (nối điểm tối thiểu và điểm tối đa) hoặc bằng chữ (A, B, C v.v..) trong quá trình xuất. Nó có thể được thay thế trong quá trình xuất.';
$string['gradeexportuserprofilefields'] = 'Các mục hồ sơ người dùng trong bản xuất điểm';
$string['gradeexportuserprofilefields_desc'] = 'Bao gồm những mục hồ sơ người này trong bản xuất điểm, ngăn cách bởi dấu phẩy.';
$string['gradehistorylifetime'] = 'Tuổi thọ lịch sử điểm';
$string['gradehistorylifetime_help'] = 'Nó chỉ định độ dài thời gian mà bạn muốn giữ lịch sử thay đổi các bảng điểm liên quan. Khuyến nghị giữ càng lâu càng tốt. Nếu bạn gặp phải vấn đề về tốc độ';
$string['gradeimport'] = 'Nhập điểm';
$string['gradeimportfailed'] = 'Nhập điểm bất thành trong quá trình chuyển giao. Chi tiết:';
$string['gradeitem'] = 'Mục điểm';
$string['gradeitemadvanced'] = 'Các tùy chọn mục điểm nâng cao';
$string['gradeitemadvanced_help'] = 'Chọn tất cả nhân tố sẽ được hiển thị nâng cao khi chỉnh sửa các mục điểm.';
$string['gradeitemislocked'] = 'Hoạt động này bị khóa trong sổ điểm. Các thay đổi về điểm trong hoạt động này sẽ không được sao chép sang sổ điểm cho đến khi nó được mở khóa.';
$string['gradeitemlocked'] = 'Khóa việc cho điểm';
$string['gradeitems'] = 'Các mục điểm';
$string['gradeitemsettings'] = 'Các thiết lập mục điểm';
$string['gradeitemsinc'] = 'Các mục điểm bao gồm';
$string['gradeletter'] = 'Điểm chữ';
$string['gradeletter_help'] = 'Điểm bằng chữ là các kí tự, A, B, C, ..., hoặc các từ, ví dụ Xuất sắc, Ưu, Đạt, ..., được sử dụng để biểu thị một khoảng điểm.';
$string['gradeletters'] = 'Các điểm số';
$string['gradelocked'] = 'Điểm đã khóa';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Điểm tối đa';
$string['grademax_help'] = 'Thiết lập này xác định điểm tối đa khi dùng điểm giá trị. Điểm tối đa cho một mục điểm nền hoạt động được đặt trên trang thiết lập hoạt động.';
$string['grademin'] = 'Điểm tối thiểu';
$string['grademin_help'] = 'Thiết lập này xác định điểm tối thiểu khi dùng điểm giá trị.';
$string['gradeoutcomeitem'] = 'Mục điểm đầu ra';
$string['gradepass'] = 'Điểm để qua';
$string['gradepass_help'] = 'Thiết lập này xác định điểm tối thiểu để đạt. Giá trị được dùng trong hoạt động và hoàn thành khóa học, và sổ điểm, nơi điểm đạt được đánh dấu màu xanh và điểm trượt màu đỏ.';
$string['gradepointdefault'] = 'Mặc định số điểm';
$string['gradepointdefault_help'] = 'Thiết lập này xác định giá trị mặc định cho số điểm có trong một hoạt động.';
$string['gradepointdefault_validateerror'] = 'Thiết lập này phải là một số nguyên giữa 1 và số điểm tối đa';
$string['gradepointmax'] = 'Số điểm tối đa';
$string['gradepointmax_help'] = 'Thiết lập này xác định giá trị số điểm tối đa có trong một hoạt động.';
$string['gradepointmax_validateerror'] = 'Thiết lập này phải là một số nguyên giữa 1 và 10000.';
$string['gradepreferences'] = 'Những cài đặt điểm số';
$string['gradepublishing'] = 'Kích hoạt đăng tải';
$string['gradepublishing_help'] = 'Kích hoạt đăng tải trong các bản xuất và nhập:
Điểm được xuất có thể truy cập qua URL, mà không cần đăng nhập vào trang Moodle. Điểm có thể nhập thông qua truy cập URL (có nghĩa là một trang Moodle có thể nhập điểm được đăng tải bởi một trang khác). Mặc định chỉ quản trị viên có thể sử dụng tính năng này, hãy phổ biến cho người dùng trước khi thêm các quyền hạn được yêu cầu vào các vai trò khác (mối nguy chia sẻ đánh dấu và trình tăng tốc tải về, giới hạn IP, vv.).';
$string['gradereport'] = 'Báo cáo điểm';
$string['graderreport'] = 'Báo cáo chấm điểm';
$string['grades'] = 'Điểm';
$string['gradesforuser'] = 'Điểm cho {$a->user}';
$string['gradesonly'] = 'Chỉ có điểm';
$string['gradessettings'] = 'Các thiết lập điểm';
$string['gradetype'] = 'Loại điểm';
$string['gradetype_help'] = 'Có 4 loại điểm:

* Không - Không có điểm nào khả thi
* Giá trị - Một giá trị số với trị tối đa và tối thiểu
* Thang - Một mục trong danh sách
* Văn bản - Chỉ có phản hồi

Chỉ giá trị và các loại thang điểm có thể gộp. Loại điểm cho một mục điểm nền hoạt động được đặt trên trang thiết lập hoạt động.';
$string['groupavg'] = 'Trung bình nhóm';
$string['hidden'] = 'Ẩn';
$string['hidden_help'] = 'Nếu được chọn, điểm được ẩn khỏi học sinh. Một ngày giờ ẩn đến khi nào có thể được đặt nếu muốn, để công bố điểm sau khi điểm hoàn tất.';
$string['hiddenasdate'] = 'Hiện ngày giờ nộp đối với các điểm ẩn';
$string['hiddenasdate_help'] = 'Nếu người  dùng không thể xem điểm ẩn hiện ngày giờ nộp thay cho \'-\'.';
$string['hiddenuntil'] = 'Ẩn đến khi';
$string['hiddenuntildate'] = 'Ẩn đến khi: {$a}';
$string['hideadvanced'] = 'Ẩn các tinh năng nâng cao';
$string['hidecategory'] = 'Ẩn';
$string['hideforcedsettings'] = 'Ẩn các thiết lập bắt buộc';
$string['hideforcedsettings_help'] = 'Không hiện các thiêt lập bắt buộc trong Giao diện điểm';
$string['hidetotalifhiddenitems'] = 'Ẩn tổng cộng nếu chúng chứa các mục ẩn';
$string['hidetotalifhiddenitems_help'] = 'Thiết lập này chỉ định liệu các tổng chứa các mục điểm ẩn có được hiển thị cho học sinh hay được thay thế bằng dấu gạch nối (-). Nếu được hiển thị, tổng có thể được tính có loại trừ hoặc bao gồm các mục ẩn.

Nếu các mục ẩn được loại trừ, tổng sẽ khác với tổng mà giáo viên thấy được trong báo cáo chấm điểm, vì giáo viên luôn luôn thấy các tổng được tính từ tất cả các mục, dù ẩn hay không. nếu các mục ẩn được bao gồm, học sinh có thể tính các mục ẩn.';
$string['hidetotalshowexhiddenitems'] = 'Hiện tổng loại trừ các mục ẩn';
$string['hidetotalshowinchiddenitems'] = 'Hiện tổng bao gồm các mục ẩn';
$string['hideverbose'] = 'Ẩn {$a->category} {$a->itemmodule} {$a->itemname}';
$string['identifier'] = 'Nhận dạng người dùng bởi';
$string['idnumbers'] = 'Số ID';
$string['ignore'] = 'Bỏ qua';
$string['import'] = 'Nhập';
$string['importcsv'] = 'Nhập CSV';
$string['importcustom'] = 'Nhập làm các đầu ra tùy chọn (chỉ khóa học này)';
$string['importerror'] = 'Một lỗi đã xảy ra, mã nguồn này không được gọi với đúng tham số.';
$string['importfailed'] = 'Nhập bất thành. Không có dữ liệu được nhập.';
$string['importfeedback'] = 'Nhập phản hồi';
$string['importfile'] = 'Nhập tệp';
$string['importfilemissing'] = 'Không nhận được tệp, trở lại biểu mẫu và đảm bảo đăng tải một tệp hợp lệ.';
$string['importoutcomenofile'] = 'Tệp đăng tải trống hoặc bị lỗi. Hãy xác minh đây là tệp hợp lệ. Vấn đề được phát hiện tại dòng {$a}; nó được phát sinh bởi các dòng dữ liệu không có nhiều cột như dòng đầu tiên (dòng header) hoặc nếu tệp được nhập thiếu các header yêu cầu. Xem tệp được xuất làm ví dụ cho một tệp có header hợp lệ.';
$string['importoutcomes'] = 'Nhập các đầu ra';
$string['importoutcomes_help'] = 'Đầu ra có thể được nhập thông qua tệp csv với định dạng như tệp csv xuất đầu ra.';
$string['importoutcomesuccess'] = 'Đã nhập đầu ra outcome "{$a->name}" với ID #{$a->id}';
$string['importplugins'] = 'Nhập các trình bổ trợ';
$string['importpreview'] = 'Nhập xem trước';
$string['importsettings'] = 'Các thiết lập nhập';
$string['importskippednomanagescale'] = 'Bạn không được phép thêm một thang mới, vì vậy đầu ra "{$a}" bị bỏ qua vì nó yêu cầu tạo một thang mới';
$string['importskippedoutcome'] = 'Một đầu ra với tên ngắn "{$a}" đã tồn tại trong bối cảnh này, cái có trong tệp nhập bị bỏ qua.';
$string['importstandard'] = 'Nhập làm các đầu ra chuẩn';
$string['importsuccess'] = 'Nhập điểm thành công';
$string['importxml'] = 'Nhập XML';
$string['includescalesinaggregation'] = 'Bao gồm các thang trong phép gộp';
$string['includescalesinaggregation_help'] = 'Bạn có thể thay đổi liệu các thang được kèm như số trong tất cả các điểm gộp toàn sổ điểm trong tất cả khóa học. THẬN TRỌNG: thay đổi thiết lập này sẽ buộc tất cả điểm đã được gộp được tính lại.';
$string['incorrectcustomscale'] = '(Thang tùy chọn không hợp lệ, hãy đổi.)';
$string['incorrectminmax'] = 'Tối thiểu phải nhỏ hơn tối đa';
$string['inherit'] = 'Thừa kế';
$string['item'] = 'Mục';
$string['iteminfo'] = 'Thông tin mục';
$string['iteminfo_help'] = 'Thiết lập này cung cấp không gian để nhập thông tin về mục. Thông tin không được hiển thị ở bất kì đâu.';
$string['itemname'] = 'Tên mục';
$string['items'] = 'Các mục';
$string['itemsedit'] = 'Sửa mục điểm';
$string['keephigh'] = 'Giữ cao nhất';
$string['keephigh_help'] = 'Nếu được đặt, tùy chọn này sẽ chỉ giữ X điểm cao nhất, X là giá trị được chọn cho tùy chọn này.';
$string['keymanager'] = 'Trình quản lí khóa';
$string['lessthanmin'] = 'Điểm được nhập cho {$a->itemname} đối với {$a->username} nhỏ hơn mức tối thiểu cho phép';
$string['letter'] = 'Chữ';
$string['letterpercentage'] = 'Chữ (phần trăm)';
$string['letterreal'] = 'Chữ (thật)';
$string['letters'] = 'Chữ';
$string['linkedactivity'] = 'Hoạt động liên kết';
$string['linkedactivity_help'] = 'Thiết lập này chỉ định một hoạt động mà mục đầu ra này được liên kết. Có thể được sử dụng để đánh giá năng lực học sinh trên tiêu chuẩn không thuộc điểm hoạt động.';
$string['linktoactivity'] = 'Liên kết hoạt động {$a->name}';
$string['lock'] = 'Khóa';
$string['locked'] = 'Bị khóa';
$string['locked_help'] = 'Nếu được chọn, điểm không còn được cập nhật tự động bởi hoạt động liên quan.';
$string['locktime'] = 'Khóa sau';
$string['locktimedate'] = 'Khóa sau: {$a}';
$string['lockverbose'] = 'Khóa {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Thấp nhất';
$string['manualitem'] = 'Mục thủ công';
$string['mapfrom'] = 'Nối từ';
$string['mappings'] = 'Các móc nối mục điểm';
$string['mapto'] = 'Nối đến';
$string['max'] = 'Cao nhất';
$string['maxgrade'] = 'Điểm tối đa';
$string['meanall'] = 'Tất cả điểm';
$string['meangraded'] = 'Điểm không trống';
$string['meanselection'] = 'Các điểm được chọn cho cột trung bình';
$string['meanselection_help'] = 'Thiết lập này xác định liệu các ô không có điểm có được bao gồm khi tính trung bình (mean) cho mỗi chuyên mục hay mục điểm.';
$string['median'] = 'Trung vị';
$string['min'] = 'Thấp nhất';
$string['missingscale'] = 'Thang phải được chọn';
$string['mode'] = 'Yếu vị';
$string['modgrade'] = 'Điểm';
$string['modgrade_help'] = 'Chọn loại điểm được sử dụng cho hoạt động này. Nếu "thang" được chọn, thì bạn có thể chọn thang từ thanh thả "thang". Nếu sử dụng "số điểm", thì bạn có htể nhập điểm tối đa có trong hoạt động này.';
$string['modgradeerrorbadpoint'] = 'Giá trị điểm không hợp lệ. Phải là một số nguyên giữa 0 và {$a}';
$string['modgradeerrorbadscale'] = 'Thang được chọn không hợp lệ. Hãy chắc rằng bạn chọn một thang từ các lựa chọn bên dưới.';
$string['modgrademaxgrade'] = 'Số điểm tối đa';
$string['modgradetype'] = 'Loại';
$string['modgradetypenone'] = 'Không';
$string['modgradetypepoint'] = 'Số điểm';
$string['modgradetypescale'] = 'Thang';
$string['morethanmax'] = 'Điểm được nhập đối với {$a->itemname} cho {$a->username} nhiều hơn mức tối đa cho phép';
$string['moveselectedto'] = 'Chuyển các mục được chọn sang';
$string['multfactor'] = 'Nhân tử';
$string['multfactor_help'] = 'Nhân tử là thừa số mà tất cả điểm cho mục điểm này sẽ được nhân, với một giá trị tối đa thuộc điểm tối đa. Ví dụ, nếu nhân tử là 2 và điểm tối đa là 100, thì tất cả điểm nhỏ hơn 50 được nhân cho 2, và tất cả điểm 50 và trên nữa được chuyển thành 100.';
$string['multfactorvalue'] = 'Giá trị nhân tử cho {$a}';
$string['mypreferences'] = 'Tùy chỉnh của tôi';
$string['myreportpreferences'] = 'Tùy chỉnh báo cáo của tôi';
$string['navmethod'] = 'Phương thức điều hướng';
$string['neverdeletehistory'] = 'Không bao giờ xóa lịch sử';
$string['newcategory'] = 'Chuyên mục mới';
$string['newitem'] = 'Mục điểm mới';
$string['newoutcomeitem'] = 'Mục đầu ra mới';
$string['no'] = 'Không';
$string['nocategories'] = 'Các chuyên mục điểm không thể thêm hoặc tìm thấy đối với khóa học này';
$string['nocourses'] = 'Chưa có khóa học nào';
$string['noforce'] = 'Không bắt buộc';
$string['noidnumber'] = 'Không có số ID';
$string['nonunlockableverbose'] = 'Điểm này không thể mở khóa cho đến khi {$a->itemname} được mở khóa.';
$string['nooutcome'] = 'Không đầu ra';
$string['nooutcomes'] = 'Các mục đầu ra phải được liên kết đến một đầu ra khóa học, nhưng không có các đầu ra cho khóa học này. Bạn có muốn thêm một cái?';
$string['nopublish'] = 'Không đăng tải';
$string['norolesdefined'] = 'Không có các vai trò được định nghĩa trong Quản trị > Điểm > Thiết lập chung > Vai trò về điểm';
$string['noscales'] = 'Các đầu ra phải được liên kết đến một thang điểm khóa học hay thang toàn cục, nhưng không có. Bạn có muốn thêm một cái?';
$string['numberofgrades'] = 'Số lượng điểm';
$string['operations'] = 'Các thao tác';
$string['options'] = 'Tùy chọn';
$string['others'] = 'Khác';
$string['outcome'] = 'Đầu ra';
$string['outcome_help'] = 'Thiết lập này xác định đầu ra mà mục điểm này sẽ biểu thị trong sổ điểm.';
$string['outcomeassigntocourse'] = 'Phân một đầu ra khác vào khóa học này';
$string['outcomeconfirmdelete'] = 'Bạn có chắc muốn xóa đầu ra "{$a}"?';
$string['outcomecreate'] = 'Thêm đầu ra mới';
$string['outcomedelete'] = 'Xóa đầu ra';
$string['outcomefullname'] = 'Tên đầy đủ';
$string['outcomeitem'] = 'Mục đầu ra';
$string['outcomeitemsedit'] = 'Sửa mục đầu ra';
$string['outcomes'] = 'Các đầu ra';
$string['outcomescourse'] = 'Các đầu ra được dùng trong khóa học';
$string['outcomescoursecustom'] = 'Tùy chọn được dùng (không xóa)';
$string['outcomescoursenotused'] = 'Chuẩn không được dùng';
$string['outcomescourseused'] = 'Chuẩn được dùng (không xóa)';
$string['outcomescustom'] = 'Tùy chọn đầu ra';
$string['outcomeshortname'] = 'Tên tắt';
$string['outcomesstandard'] = 'Các đầu ra chuẩn';
$string['outcomesstandardavailable'] = 'Các đầu ra chuẩn hiện hữu';
$string['outcomestandard'] = 'Đầu ra chuẩn';
$string['outcomestandard_help'] = 'Một đầu ra chuẩn hiện hữu toàn trang, cho tất cả khóa học.';
$string['overallaverage'] = 'Trung bình tổng';
$string['overridden'] = 'Bị thay thế';
$string['overridden_help'] = 'Nếu được chọn, điểm không còn thay đổi được từ bên trong hoạt động liên quan.';
$string['overriddennotice'] = 'Điểm cuối cùng của bạn từ hoạt động này đã được sửa đổi bằng tay.';
$string['overridesitedefaultgradedisplaytype'] = 'Thay thế các mặc định trang';
$string['overridesitedefaultgradedisplaytype_help'] = 'Nếu được chọn, điểm bằng chữ và khoảng giới hạn đối với khóa học có thể được đặt, hơn là sử dụng mặc định trang.';
$string['parentcategory'] = 'Chuyên mục cha';
$string['percent'] = 'Phần trăm';
$string['percentage'] = 'Phần trăm';
$string['percentageletter'] = 'Phần trăm (chữ)';
$string['percentagereal'] = 'Phần trăm (thực)';
$string['plusfactor'] = 'Độ dời';
$string['plusfactor_help'] = 'Độ dời là một số được cộng vào mỗi điểm cho mục điểm này, sau khi nhân tử được áp dụng.';
$string['plusfactorvalue'] = 'Giá trị độ dời cho {$a}';
$string['points'] = 'số điểm';
$string['positionfirst'] = 'Đầu tiên';
$string['positionlast'] = 'Cuối cùng';
$string['preferences'] = 'Tùy chỉnh';
$string['prefgeneral'] = 'Chung';
$string['prefrows'] = 'Các dòng đặc biệt';
$string['prefshow'] = 'Hiện/ẩn chức năng chuyển đổi';
$string['previewrows'] = 'Xem trước các dòng';
$string['profilereport'] = 'Báo cáo hồ sơ người dùng';
$string['profilereport_help'] = 'Báo cáo điểm được sử dụng trên trang hồ sơ người dùng.';
$string['publishing'] = 'Đang đăng tải';
$string['quickfeedback'] = 'Phản hồi nhanh';
$string['quickgrading'] = 'Chấm điểm nhanh';
$string['quickgrading_help'] = 'Nếu được kích hoạt, khi chỉnh sửa được bất, một khung nhập văn bản xuất hiện cho mỗi mục điểm, cho phép nhiều điểm được chỉnh sửa cùng lúc. Các thay đổi được lưu và đánh dấu khi nút cập nhật được nhấn.

Chú ý rằng khi một điểm được chỉnh sửa trong báo cáo chấm điểm, một cờ thay thế được đặt, nghĩa là điểm không thể được thay thể từ hoạt động liên quan nữa.';
$string['range'] = 'Khoảng';
$string['rangedecimals'] = 'Khoảng chữ số thập phân';
$string['rangedecimals_help'] = 'Số chữ số thập phân để hiện thị cho khoảng.';
$string['rangesdecimalpoints'] = 'Số thập phân được hiện theo khoảng.';
$string['rangesdecimalpoints_help'] = 'Thiết lập này xác định số chữ số thập phân để hiển thị cho từng khoảng hoặc thiết lập chữ số thập phân toàn cục cho chuyên mục hay mục điểm được dùng (thừa kế).';
$string['rangesdisplaytype'] = 'Loại hiển thị khoảng';
$string['rangesdisplaytype_help'] = 'Thiết lập này xác định liệu khoảng được hiển thị như điểm thực, phần trăm hay chữ, hoặc loại hiển thị chiên mục hay mục điểm được sử dụng (thừa kế).';
$string['rank'] = 'Hạng';
$string['real'] = 'Thực';
$string['realletter'] = 'Thực (chữ)';
$string['realpercentage'] = 'Thực (phần trăm)';
$string['recovergradesdefault'] = 'Phục hồi mặc định điểm';
$string['recovergradesdefault_help'] = 'Mặc định phục hồi các điểm cũ khi tái ghi danh một người dùng vào khóa học.';
$string['regradeanyway'] = 'Chấm lại xác nhận';
$string['removeallcoursegrades'] = 'Xóa tất cả điểm';
$string['removeallcourseitems'] = 'Xóa tất cả mục và chuyên mục';
$string['report'] = 'Báo cáo';
$string['reportdefault'] = 'Mặc định báo cáo ({$a})';
$string['reportsettings'] = 'Thiết lập báo cáo';
$string['rowpreviewnum'] = 'Xem trước các dòng';
$string['savechanges'] = 'Lưu các thay đổi';
$string['savepreferences'] = 'Lưu tùy chỉnh';
$string['scaleconfirmdelete'] = 'Bạn có chắc muốn xóa thang "{$a}"?';
$string['seeallcoursegrades'] = 'Xem tất cả điểm khóa học';
$string['select'] = 'Chọn {$a}';
$string['selectalloroneuser'] = 'Chọn tất cả hoặc một người dùng';
$string['selectauser'] = 'Chọn một người dùng';
$string['separator'] = 'Dấu ngăn cách';
$string['sepcolon'] = 'Dấu hai chấm';
$string['sepcomma'] = 'Dấu phẩy';
$string['sepsemicolon'] = 'Dấu chấm phẩy';
$string['septab'] = 'Tab';
$string['setting'] = 'Thiết lập';
$string['settings'] = 'Cài đặt';
$string['showactivityicons'] = 'Hiện các biểu tượng hoạt động';
$string['showactivityicons_help'] = 'Nếu được kích hoạt, các biểu tượng hoạt động được hiển thị bên tên hoạt động.';
$string['showallhidden'] = 'Hiện phần ẩn';
$string['showanalysisicon'] = 'Hiện biểu tượng phân tích điểm';
$string['showanalysisicon_desc'] = 'Liệu có hiện biểu tượng phân tích điểm theo mặc định. Nếu mô-đun hoạt động hỗ trợ, biểu tượng phân tích điểm liên kết đến một trang có diễn giải chi tiết hơn về điểm và cách thức đạt được như thế nào.';
$string['showanalysisicon_help'] = 'Nếu mô-đun hoạt động hỗ trợ, biểu tượng phân tích điểm liên kết đến một trang có diễn giải chi tiết hơn về điểm và cách thực đạt được như thế nào.';
$string['showaverage'] = 'Hiện trung bình';
$string['showaverage_help'] = 'Hiện cột trung bình? Học sinh có thể ước tính điểm của học sinh khác nếu trung bình được tính từ một số nhỏ các điểm. Vì lí do hiệu năng trung binh chỉ xấp xỉ nếu nó phụ thuộc bất kì mục ẩn nào.';
$string['showaverages'] = 'Hiện cột trung bình';
$string['showaverages_help'] = 'Nếu được kích hoạt, báo cáo chấm điểm sẽ chứa thêm một cột hiển thị trung bình (mean) cho từng chuyên mục và mục điểm.';
$string['showcalculations'] = 'Hiện các phép tính';
$string['showcalculations_help'] = 'Nếu được kích hoạt, khi chỉnh sửa được bật, một biểu tượng máy tính được hiển thị cho từng mục điểm và chuyên mục, với thông tin gợi ý trên các mục được tính và một chỉ thị trực quan báo rằng cột đó được tính.';
$string['showeyecons'] = 'Hiện các biểu tượng hiện/ẩn';
$string['showeyecons_help'] = 'Nếu được kích hoạt, khi chỉnh sửa được bật, một biểu tượng hiện/ẩn được hiển thị cho từng điểm để kiểm soát sự hiện hữu của nó với học sinh.';
$string['showfeedback'] = 'Hiện phản hồi';
$string['showfeedback_help'] = 'Hiện cột phản hồi?';
$string['showgrade'] = 'Hiện điểm';
$string['showgrade_help'] = 'Hiện cột điểm?';
$string['showgroups'] = 'Hiện các nhóm';
$string['showhiddenitems'] = 'Hiện các mục ẩn';
$string['showhiddenitems_help'] = 'Liệu các mục điểm ẩn được ẩn hoàn toàn hoặc tên các mục điểm ẩn hiện hữu với học sinh.

* Hiện ẩn - Tên mục điểm ẩn được hiện nhưng điểm thì ẩn
* Chỉ ẩn đến khi - Các mục điểm có ngày giờ "ẩn đến khi" được đặt thì ẩn hoàn toàn đến ngày giờ đó, cả mục sẽ được hiện sau đó
* Không hiện - Các mục điểm ẩn hoàn toàn';
$string['showhiddenuntilonly'] = 'Chỉ ẩn đến khi';
$string['showlettergrade'] = 'Hiện điểm bằng chữ';
$string['showlettergrade_help'] = 'Hiện cột điểm bằng chữ?';
$string['showlocks'] = 'Hiện các khóa';
$string['showlocks_help'] = 'Nếu được kích hoạt, khi chỉnh sửa được bật, một biểu tượng khóa/mở khóa được hiển thị cho từng điểm để kiểm soát liệu điểm có thể được tự động cập nhật bởi hoạt động liên quan.';
$string['shownohidden'] = 'Không hiện';
$string['shownumberofgrades'] = 'Hiện trung bình số số điểm';
$string['shownumberofgrades_help'] = 'Nếu được kích hoạt, số số điểm được dùng khi tính trung bình (mean) được hiển thị trong ngoặc sau mỗi trị trung bình.';
$string['showonlyactiveenrol'] = 'Chỉ hiện các ghi danh hoạt động';
$string['showonlyactiveenrol_help'] = 'Thiết lập này xác định, chỉ những người dùng đã ghi danh có hoạt động sẽ hiển thị trong báo cáo sổ điểm. Nếu được kích hoạt những người dùng bị đình chỉ sẽ không được hiển thị trong sổ điểm.';
$string['showpercentage'] = 'Hiện phần trăm';
$string['showpercentage_help'] = 'Hiện giá trị phần trăm của mỗi mục điểm?';
$string['showquickfeedback'] = 'Hiện phản hồi nhanh';
$string['showquickfeedback_help'] = 'Nếu được kích hoạt, khi chỉnh sửa được bật, một khung nhập văn bản phản hồi có viền nét đứt xuất hiện cho từng điểm, cho phép phản hồi nhiều điểm cùng chỉnh sửa một lúc. Các thay đổi được lưu và đánh dấu khi nút cập nhật được nhấn.

Chú ý rằng khi phản hồi được chỉnh sửa trong báo cáo chấm điểm, một cờ thay thế được đặt, nghĩa là phản hồi không thể thay đổi từ hoạt động liên quan được nữa.';
$string['showrange'] = 'Hiện các khoảng';
$string['showrange_help'] = 'Hiện cột khoảng?';
$string['showranges'] = 'Hiện các khoảng';
$string['showranges_help'] = 'Nếu được kích hoạt, báo cáo chấm điểm sẽ chứa thêm một cột hiển thị khoảng cho từng chuyên mục và mục điểm.';
$string['showrank'] = 'Hiện hạng';
$string['showrank_help'] = 'Hiện vị trí của học sinh tương quan với phần còn lại của lớp đối với từng mục điểm?';
$string['showuserimage'] = 'Hiện ảnh hồ sơ người dùng';
$string['showuserimage_help'] = 'Liệu có hiện ảnh hồ sơ người dùng bên tên trong báo cáo chấm điểm.';
$string['showverbose'] = 'Hiện {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Hiện trọng khối';
$string['showweight_help'] = 'Hiện cột điểm khối?';
$string['simpleview'] = 'Xem đơn giản';
$string['sitewide'] = 'Toàn trang';
$string['sort'] = 'sắp xếp';
$string['sortasc'] = 'Sắp xếp theo thứ tự tăng dần';
$string['sortbyfirstname'] = 'Sắp xếp theo tên';
$string['sortbylastname'] = 'Sắp xếp theo họ';
$string['sortdesc'] = 'Sắp xếp theo thứ tự giảm dần';
$string['standarddeviation'] = 'Độ lệch chuẩn';
$string['stats'] = 'Thống kê';
$string['student'] = 'Học sinh';
$string['studentsperpage'] = 'Học sinh mỗi trang';
$string['studentsperpage_help'] = 'Thiết lập này xác định số học sinh được hiển thị trên mỗi trang trong báo cáo chấm điểm.';
$string['studentsperpagereduced'] = 'Số học sinh tối đa giảm từ {$a->originalstudentsperpage} thành {$a->studentsperpage}. Xem xét tăng thiết lập PHP  max_input_vars từ {$a->maxinputvars}.';
$string['subcategory'] = 'Chuyên mục bình thường';
$string['submissions'] = 'Các bài nộp';
$string['submittedon'] = 'Đã nộp: {$a}';
$string['tabs'] = 'Các thẻ';
$string['total'] = 'Tổng cộng';
$string['typenone'] = 'Không';
$string['typescale'] = 'Thang';
$string['typescale_help'] = 'Thiết lập này xác định thang được dùng khi sử dụng loại thang điểm. Thang cho một mục điểm nền hoạt động được đặt trên trang hoạt động.';
$string['typetext'] = 'Văn bản';
$string['typevalue'] = 'Giá trị';
$string['uncategorised'] = 'Chưa được phân chuyên mục';
$string['unchangedgrade'] = 'Điểm không đổi';
$string['unenrolledusersinimport'] = 'Bản nhập này bao gồm các điểm sau đối với những người dùng hiện không ghi danh khóa học này: {$a}';
$string['unlimitedgrades'] = 'Điểm không giới hạn';
$string['unlimitedgrades_help'] = 'Mặc định điểm được giới hạn bởi giá trị tối đa và tối thiểu của mục điểm. Kích hoạt thiết lập này xóa đi giới hạn đó, và cho phép điểm trên 100% được nhập trực tiếp vào sổ điểm. Khuyến nghị chỉ nên kích hoạt thiết lập này lúc thấp điểm, vì tất cả điểm sẽ được tính lại, vốn có thể tăng tải cao cho máy chủ.';
$string['unlock'] = 'Mở khóa';
$string['unlockverbose'] = 'Mở khóa {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Chưa được dùng';
$string['updatedgradesonly'] = 'Chỉ xuất điểm mới hoặc đã được cập nhật';
$string['uploadgrades'] = 'Đăng tải điểm';
$string['usedgradeitem'] = 'Mục điểm được dùng';
$string['usenoscale'] = 'Không dùng thang điểm';
$string['user'] = 'Người dùng';
$string['userenrolmentsuspended'] = 'Ghi danh người dùng bị đình chỉ';
$string['usergrade'] = 'Người dùng {$a->fullname} ({$a->useridnumber}) ở mục {$a->gradeidnumber}';
$string['userid'] = 'ID người dùng';
$string['usermappingerror'] = 'Lỗi móc nối người dùng: Không thể tìm người dùng có "{$a->value}" của {$a->field}.';
$string['usermappingerrorcurrentgroup'] = 'Người dùng không phải thành viên nhóm hiện tại.';
$string['usermappingerrorusernotfound'] = 'Lỗi móc nối người dùng. Không thể tìm người dùng';
$string['userpreferences'] = 'Tùy chỉnh người dùng';
$string['verbosescales'] = 'Các thang điểm dài dòng';
$string['viewgrades'] = 'Xem điểm';
$string['weight'] = 'khối';
$string['weights'] = 'Khối';
$string['weightuc'] = 'Khối';
$string['writinggradebookinfo'] = 'Thiết lập ghi sổ điểm';
$string['xml'] = 'XML';
$string['yes'] = 'Có';
