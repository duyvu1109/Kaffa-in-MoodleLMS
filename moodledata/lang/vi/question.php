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
 * Strings for component 'question', language 'vi', version '3.11'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Hành động';
$string['addanotherhint'] = 'Thêm gợi ý khác';
$string['addcategory'] = 'Thêm danh mục';
$string['addmorechoiceblanks'] = 'Các ô trống để thêm {no} lựa chọn';
$string['advancedsearchoptions'] = 'Các lựa chọn tìm kiếm';
$string['alltries'] = 'Tất cả lần thử';
$string['answer'] = 'Câu trả lời';
$string['answers'] = 'Các câu trả lời';
$string['answersaved'] = 'Câu trả lời đã được lưu';
$string['attemptfinished'] = 'Thử hoàn tất';
$string['attemptfinishedsubmitting'] = 'Thử hoàn tất và đang nộp:';
$string['attemptoptions'] = 'Lựa chọn thử';
$string['availableq'] = 'Hiện hữu?';
$string['badbase'] = 'Nền xấu trước **: {$a}**';
$string['behaviour'] = 'Hành vi';
$string['behaviourbeingused'] = 'Hành vi được dùng: {$a}';
$string['broken'] = 'Đây là "liên kết hỏng", nó chỉ đến một tệp không tồn tại';
$string['byandon'] = 'bởi <em>{$a->user}</em> vào <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Không thể chép tệp sao lưu';
$string['cannotcreatepath'] = 'Không thể tạo đường dẫn: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Bạn không thể xóa hành vi \'{$a}\'. Nó được dùng bởi các lần thử câu hỏi.';
$string['cannotdeletecate'] = 'Bạn không thể xóa danh mục đó nó là danh mục mặc định cho bối cảnh này.';
$string['cannotdeleteneededbehaviour'] = 'Không thể xóa hành vi câu hỏi \'{$a}\'. Có các hành vi khác được cài đặt dựa trên nó.';
$string['cannotdeleteqtypeinuse'] = 'Bạn không thể xóa loại câu hỏi \'{$a}\'. Có các loại câu hỏi này trong ngân hàng câu hỏi.';
$string['cannotdeleteqtypeneeded'] = 'Bạn không thể xóa loại câu hỏi \'{$a}\'. Có các loại câu hỏi khác được cài đặt dựa trên nó.';
$string['cannotenable'] = 'Loại câu hỏi {$a} không thể tạo trực tiếp được.';
$string['cannotenablebehaviour'] = 'Hành vi câu hỏi {$a} không thể dùng trực tiếp được. Nó chỉ dành cho sử dụng nội.';
$string['cannotfindcate'] = 'Không thể tìm bản ghi danh mục';
$string['cannotfindquestionfile'] = 'Không thể tìm tệp dữ liệu câu hỏi trong zip';
$string['cannotgetdsfordependent'] = 'Không thể lấy tập dữ liệu được chỉ định cho một tập dữ liệu câu hỏi phụ thuộc! (câu hỏi {$a->id}, mục tập dữ liệu: {$a->item})';
$string['cannotgetdsforquestion'] = 'Không thể lấy tập dữ liệu được chỉ định cho một câu hỏi đã được tính toán! (câu hỏi {$a})';
$string['cannotimportformat'] = 'Xin lỗi, nhập định dạng này chưa được thực hiện!';
$string['cannotinsertquestioncatecontext'] = 'Không thể chèn danh mục câu hỏi mới {$a->cat} id bối cảnh không hợp lệ {$a->ctx}';
$string['cannotloadquestion'] = 'Không thể tải câu hỏi';
$string['cannotmovequestion'] = 'Bạn không thể dùng mã nguồn này để chuyển các câu hỏi có tệp đi kèm với chúng từ các vùng khác.';
$string['cannotopenforwriting'] = 'Không thể mở để ghi: {$a}';
$string['cannotpreview'] = 'Bạn không thể xem trước các câu hỏi này!';
$string['cannotread'] = 'Không thể đọc file nhập (hoặc file rỗng)';
$string['cannotretrieveqcat'] = 'Không thể lấy danh mục câu hỏi';
$string['cannotunzip'] = 'Không thể giải nén tệp.';
$string['cannotwriteto'] = 'Không thể ghi các câu hỏi được xuất ra {$a}';
$string['categories'] = 'Các danh mục';
$string['category'] = 'Danh mục';
$string['categorycurrent'] = 'Danh mục hiện tại';
$string['categorycurrentuse'] = 'Dùng danh mục này';
$string['categorydoesnotexist'] = 'Danh mục này không tồn tại';
$string['categoryinfo'] = 'Thông tin danh mục';
$string['categorymove'] = 'Danh mục  \'{$a->name} \' bao gồm  {$a->count}  các câu hỏi. Xin hãy  chọn danh mục khác để di chuyển chúng đi.';
$string['categorymoveto'] = 'Lưu vào danh mục';
$string['categorynamecantbeblank'] = 'Tên danh mục không thể trống';
$string['changeoptions'] = 'Đổi lựa chọn';
$string['check'] = 'Chọn';
$string['chooseqtypetoadd'] = 'Chọn một loại câu hỏi để thêm';
$string['clearwrongparts'] = 'Xóa các phản hồi sai';
$string['clickflag'] = 'Đặt cờ';
$string['clicktoflag'] = 'Đánh cờ câu hỏi này để tham khảo sau';
$string['clicktounflag'] = 'Xóa cờ';
$string['clickunflag'] = 'Xóa cờ';
$string['closepreview'] = 'Đóng xem trước';
$string['combinedfeedback'] = 'Phản hồi kết hợp';
$string['comment'] = 'Bình luận';
$string['commented'] = 'Đã bình luận: {$a}';
$string['commentormark'] = 'Tạo bình luận hoặc thay thế điểm';
$string['comments'] = 'Các bình luận';
$string['commentx'] = 'Bình luận: {$a}';
$string['complete'] = 'Hoàn thành';
$string['contexterror'] = 'Bạn không nên đến đây nếu đang không di chuyển một danh mục sang bối cảnh khác.';
$string['copy'] = 'Chép từ {$a} và đổi các liên kết.';
$string['correct'] = 'Đúng';
$string['correctfeedback'] = 'Cho bất kì phản hồi đúng nào';
$string['correctfeedbackdefault'] = 'Câu trả lời của bạn đúng';
$string['created'] = 'Được tạo';
$string['createdby'] = 'Được tạo bởi';
$string['createdmodifiedheader'] = 'Được tạo / lưu lần cuối';
$string['createnewquestion'] = 'Tạo câu hỏi mới ...';
$string['decimalplacesingrades'] = 'Vị trí thập phân trong điểm';
$string['defaultfor'] = 'Mặc định cho {$a}';
$string['defaultinfofor'] = 'Danh mục mặc định cho các câu hỏi được chia sẻ trong bối cảnh \'{$a}\'.';
$string['defaultmark'] = 'Điểm mặc định';
$string['defaultmarkmustbepositive'] = 'Điểm mặc định phải dương.';
$string['deletequestioncheck'] = 'Bạn có chắc muốn xóa \'{$a}\'?';
$string['deletequestionscheck'] = 'Bạn có chắc muốn xóa các câu hỏi sau?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Đang xóa hành vi câu hỏi \'{$a}\'';
$string['deletingqtype'] = 'Đang xóa loại câu hỏi \'{$a}';
$string['didnotmatchanyanswer'] = '[Không trùng bất kì câu trả lời nào]';
$string['disabled'] = 'Bị vô hiệu hóa';
$string['displayoptions'] = 'Các lựa chọn hiển thị';
$string['disterror'] = 'Phân phối {$a} đã gây ra vấn đề';
$string['donothing'] = 'Không chép hoặc chuyển các tệp hay đổi các liên kết.';
$string['editcategories'] = 'Sửa các danh mục';
$string['editcategories_help'] = 'Thay vì giữ mọi thứ trong một danh sách lớn, các câu hỏi có thể được xếp vào các danh mục và phân mục.

Mỗi danh mục có một bối cảnh xác định nơi các câu hỏi trong danh mục có thể được sử dụng:

* Bối cảnh hoạt động - Chỉ những câu hỏi hiện hữu trong mô-đun hoạt động
* Bối cảnh khóa học - Các câu hỏi hiện hữu trong tất cả mô-đun hoạt động trong khóa học
* Bối cảnh danh mục khóa học - Các câu hỏi hiện hữu trong tất cả mô-đun hoạt động và các khóa học trong danh mục khóa học
* Bối cảnh hệ thống - Các câu hỏi hiện hữu trong tất cả khóa học và hoạt động trên trang

Các danh mục cũng được sử dụng cho các câu hỏi ngẫu nhiên, như các câu hỏi được chọn từ một danh mục cụ thể.';
$string['editcategory'] = 'Sửa danh mục';
$string['editingcategory'] = 'Đang sửa danh mục';
$string['editingquestion'] = 'Đang sửa câu hỏi';
$string['editquestion'] = 'Sửa câu hỏi';
$string['editquestions'] = 'Sửa các câu hỏi';
$string['editthiscategory'] = 'Sửa danh mục này';
$string['emptyxml'] = 'Lỗi không rõ - imsmanifest.xml trống';
$string['enabled'] = 'Được kích hoạt';
$string['errordeletingquestionsfromcategory'] = 'Lỗi xóa các câu hỏi khỏi danh mục {$a}.';
$string['errorduringregrade'] = 'Không thể chấm lại câu hỏi {$a->qid}, đang đến trạng thái {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Lỗi: không thể chép tệp {$a}.';
$string['errorfilecannotbemoved'] = 'Lỗi: không thể chuyển tệp {$a}.';
$string['errorfileschanged'] = 'Lỗi: các tệp liên kết từ các câu hỏi đã thay đổi từ lúc biểu mẫu này được hiển thị.';
$string['errormanualgradeoutofrange'] = 'Điểm {$a->grade} không nằm trong khoảng 0 và {$a->maxgrade} cho câu hỏi {$a->name}. Điểm và lời phê chưa được lưu.';
$string['errormovingquestions'] = 'Lỗi trong khi chuyển các câu hỏi có id {$a}';
$string['errorpostprocess'] = 'Lỗi đã xảy ra trong quá trình hậu xử lí!';
$string['errorpreprocess'] = 'Lỗi đã xảy ra trong quá trình tiền xử lí!';
$string['errorprocess'] = 'Lỗi đã xảy ra trong quá trình xử lí';
$string['errorprocessingresponses'] = 'Lỗi đã xảy ra trong khi xử lí phản hồi của bạn ({$a}). Nhấn tiếp tục để trở về trang mà bạn từng đến và thử lại.';
$string['errorsavingflags'] = 'Lỗi lưu trạng thái cờ.';
$string['eventquestioncategorycreated'] = 'Danh mục câu hỏi đã được tạo';
$string['export'] = 'Xuất';
$string['exportcategory'] = 'Xuất danh mục';
$string['exportcategory_help'] = 'Thiết lập này xác định danh mục mà các câu hỏi xuất ra sẽ được lấy từ đâu.

Các định dạng nhập nhất định, như GIFT và Moodle XML, cho phép danh mục và dữ liệu bối cảnh được bao gồm trong tệp xuất, cho phép chúng (tùy ý) được tái tạo trên bản nhập. Nếu được yêu cầu, nên chọn các ô chọn phù hợp .';
$string['exporterror'] = 'Lỗi xảy ra trong quá trình xuất!';
$string['exportfilename'] = 'các câu hỏi';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Xuất các câu hỏi ra tệp';
$string['exportquestions_help'] = 'Tính năng này cho phép xuất hoàn toàn danh mục (và bất kì phân mục nào) các câu hỏi ra tệp. Hãy lưu ý, tùy vào định dạng tệp được chọn, một số dữ liệu câu hỏi và các loại câu hỏi nhất định có thể không được xuất.';
$string['feedback'] = 'Phản hồi';
$string['filecantmovefrom'] = 'Các tệp câu hỏi không thể được di chuyển bởi bạn không được phép xóa các tệp từ nơi mà bạn đang thử chuyển các câu hỏi đi.';
$string['filecantmoveto'] = 'Các tệp câu hỏi không thể được di chuyển hoặc sao chép bởi bạn không được phép thêm tệp vào nơi mà bạn đang thử chuyển các câu hỏi sang.';
$string['fileformat'] = 'Định dạng tệp';
$string['filesareacourse'] = 'khu vực tập tin khóa học';
$string['filesareasite'] = 'khu vực tập tin trang';
$string['filestomove'] = 'Chuyển / sao chép các tệp sang {$a}?';
$string['fillincorrect'] = 'Điền các phản hồi đúng';
$string['firsttry'] = 'Thử lần đầu';
$string['flagged'] = 'Đã được gắn cờ';
$string['flagthisquestion'] = 'Gắn cờ câu hỏi này';
$string['formquestionnotinids'] = 'Biểu mẫu chứa câu hỏi không nằm trong các id câu hỏi';
$string['fractionsnomax'] = 'Một trong các câu hỏi nên có điểm 100% để có thể đạt điểm đủ cho câu hỏi này.';
$string['generalfeedback'] = 'Phản hồi chung';
$string['generalfeedback_help'] = 'Phản hồi chung được hiển thị cho học viên sau khi họ hoàn thành câu hỏi. Khác với phản hồi chuyên biệt, vốn phụ thuộc vào loại câu hỏi và phản hồi mà học viên đưa ra, cùng  một văn bản phản hồi chung được hiển thị với tất cả học viên.

Bạn có thể sử dụng phản hồi chung để cho học viên một câu trả lời hoàn toàn ổn và có lẽ là một liên kết xem thêm thông tin để họ có thể dùng nếu không hiểu câu hỏi.';
$string['getcategoryfromfile'] = 'Lấy danh mục từ tệp';
$string['getcontextfromfile'] = 'Lấy bối cảnh từ tệp';
$string['hintn'] = 'Gợi ý {no}';
$string['hintnoptions'] = 'Lựa chọn gợi ý {no}';
$string['hinttext'] = 'Đoạn gợi ý';
$string['howquestionsbehave'] = 'Hành vi của các câu hỏi như thế nào';
$string['howquestionsbehave_help'] = 'Học viên có thể tương tác với câu hỏi trong bài trắc nghiệm theo nhiều cách khác nhau. Ví dụ, bạn có thể muốn học viên nhập một câu trả lời cho từng câu hỏi và rồi nộp cả bài trắc nghiệm, trước khi bất kì thứ gì được chẩm điểm hoặc nhận phản hồi. Đó sẽ là chế độ \'Phản hồi hoãn\'.

Hay bạn có thể muốn học viên nộp từng câu hỏi khi họ gặp để nhận phản hồi trực tiếp, và nếu họ không đúng trực tiếp, thì có thêm lần thử khác với số điểm ít hơn. Đó sẽ là chế độ \'Tương tác với nhiều lần thử\'.

Chúng có lẽ là hai chế độ hành vi thường được dùng nhất.';
$string['ignorebroken'] = 'Bỏ qua các liên kết hỏng';
$string['import'] = 'Nhập';
$string['importcategory'] = 'Nhập danh mục';
$string['importcategory_help'] = 'Thiết lập này xác định danh mục mà các câu hỏi được nhập sẽ vào.

Các định dạng nhập nhất định, như GIFT và Moodle XML, có thể bao gồm danh mục và dữ liệu bối cảnh trong tệp nhập. Để tận dụng dữ liệu này, hơn là danh mục được chọn, nên chọn các ô phù hợp. Nếu các danh mục được chỉ định trong tệp nhập không tồn tại, chúng sẽ được tạo.';
$string['importerror'] = 'Một lỗi xảy ra trong khi xử lí nhập';
$string['importerrorquestion'] = 'Lỗi nhập câu hỏi';
$string['importfromcoursefiles'] = '... hoặc chọn tệp khóa học để nhập.';
$string['importfromupload'] = 'Chọn tệp để đăng tải ...';
$string['importingquestions'] = 'Đang nhập {$a} câu hỏi từ tệp';
$string['importparseerror'] = 'Lỗi tìm thấy khi phân tích tệp nhập. Không có câu hỏi được nhập. Để nhập bất kì câu hỏi tốt nào hãy thử lại thiết lập \'Dừng khi lỗi\' thành \'Không\'';
$string['importquestions'] = 'Nhập câu hỏi từ tệp';
$string['importquestions_help'] = 'Tính năng này cho phép các câu hỏi ở nhiều định dạng có thể được nhập thông qua tệp văn bản. Chú ý tệp phải sử dụng bảng mã UTF-8.';
$string['importwrongfiletype'] = 'Loại tệp bạn chọn ({$a->actualtype}) không khớp với loại mong muốn của định dạng nhập này ({$a->expectedtype}).';
$string['impossiblechar'] = 'Kí tự {$a} bất khả thi được phát hiện như kí tự ngoặc';
$string['includesubcategories'] = 'Cũng hiện câu hỏi từ các phân mục';
$string['incorrect'] = 'Sai';
$string['incorrectfeedback'] = 'Cho bất kì phản hồi sai nào';
$string['incorrectfeedbackdefault'] = 'Câu trả lời của bạn sai.';
$string['information'] = 'Thông tin';
$string['invalidanswer'] = 'Câu trả lời không hoàn chỉnh';
$string['invalidarg'] = 'Không có tham số hợp lệ được cung cấp hoặc thiết lập máy chủ sai';
$string['invalidcategoryidforparent'] = 'ID danh mục không hợp lệ đối với mục cha!';
$string['invalidcategoryidtomove'] = 'ID danh mục không lệ để di chuyển!';
$string['invalidconfirm'] = 'Chuỗi xác nhận sai';
$string['invalidcontextinhasanyquestions'] = 'Bối cảnh không hợp lệ được đưa vào question_context_has_any_questions.';
$string['invalidgrade'] = 'Điểm ({$a}) không khớp các lựa chọn điểm - câu hỏi được bỏ qua.';
$string['invalidpenalty'] = 'Hình phạt không hợp lệ';
$string['invalidwizardpage'] = 'Không có trang thuật sĩ được chỉ định hoặc sai!';
$string['lastmodifiedby'] = 'Lần cuối được sửa bởi';
$string['lasttry'] = 'Lần cuối thử';
$string['makechildof'] = 'Làm con của \'{$a}\'';
$string['makecopy'] = 'Tạo bản sao';
$string['maketoplevelitem'] = 'Chuyển sang cấp cao';
$string['manualgradeoutofrange'] = 'Điểm này nằm ngoài khoảng hợp lệ.';
$string['manuallygraded'] = 'Được chấm điểm thủ công {$a->mark} với lời phê: {$a->comment}';
$string['mark'] = 'Điểm';
$string['markedoutof'] = 'Đạt điểm';
$string['markedoutofmax'] = 'Đạt điểm {$a}';
$string['markoutofmax'] = 'Đạt điểm {$a->mark} trên {$a->max}';
$string['marks'] = 'Điểm';
$string['matchgrades'] = '';
$string['matchgrades_help'] = 'Điểm được nhập phải khớp với một trong các danh sách cố định các điểm hợp lệ - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (cũng có trị âm). Nếu không, có hai lựa chọn:

* Lỗi nếu điểm không được liệt kê - Nếu một câu hỏi chứa bất kì điểm nào không tìm thấy trong danh sách thì một lỗi được hiển thị, câu hỏi đó sẽ không được nhập
* Điểm gần nhất nếu không được liệt kê - Nếu một điểm được thấy không khớp với một trị trong danh sách, điểm được chuyển thành trị khớp gần nhất trong danh sách';
$string['matchgradeserror'] = 'Lỗi nếu điểm không được liệt kê';
$string['matchgradesnearest'] = 'Điểm gần nhất nếu không được liệt kê';
$string['missingcourseorcmid'] = 'Cần cung cấp id khóa học hoặc cmid để print_question.';
$string['missingcourseorcmidtolink'] = 'Cần cung cấp id khóa học hoặc cmid để  get_question_edit_link.';
$string['missingimportantcode'] = 'Loại câu hỏi thiếu mã quan trọng: {$a}.';
$string['modified'] = 'Lần cuối được lưu';
$string['move'] = 'Chuyển từ {$a} và đổi các liên kết';
$string['movecategory'] = 'Chuyển danh mục';
$string['movedquestionsandcategories'] = 'Đã chuyển các câu hỏi và danh mục câu hỏi từ {$a->oldplace} sang {$a->newplace}.';
$string['movelinksonly'] = 'Vừa đổi nơi liên kết trỏ đến, không chuyển hoặc sao chép các tệp.';
$string['moveq'] = 'Chuyển câu hỏi';
$string['moveto'] = 'Chuyển sang >>';
$string['movingcategory'] = 'Đang chuyển danh mục';
$string['movingcategoryandfiles'] = 'Bạn có chắc muốn chuyển danh mục {$a->name} và tất cả danh mục con sang bối cảnh dành cho "{$a->contextto}"?<br /> Chúng tôi đã phát hiện {$a->urlcount} tệp liên kết từ các câu hỏi trong {$a->fromareaname}, bạn có muốn chép hoặc chuyển chúng sang {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Bạn có chắc muốn chuyển danh mục "{$a->name}" và tất cả danh mục con sang bối cảnh dành cho "{$a->contextto}"?';
$string['movingquestions'] = 'Đang chuyển các câu hỏi và tệp';
$string['movingquestionsandfiles'] = 'Bạn có chắc muốn chuyển câu hỏi {$a->questions} sang bối cảnh dành cho <strong>"{$a->tocontext}"</strong>?<br /> Chúng tôi phát hiện <strong>{$a->urlcount} tệp</strong> liên kết từ các câu hỏi này trong {$a->fromareaname}, bạn có muốn chép hoặc chuyển chúng sang {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Bạn có chắc muốn chuyển câu hỏi {$a->questions} sang bối cảnh dành cho <strong>"{$a->tocontext}"</strong>?<br />  <strong>Không có tệp</strong> liên kết từ các câu hỏi này trong {$a->fromareaname}.';
$string['nocate'] = 'Không có danh mục {$a} như vậy!';
$string['nopermissionadd'] = 'Bạn không được phép thêm câu hỏi ở đây.';
$string['nopermissionmove'] = 'Bạn không được phép chuyển câu hỏi từ đây. Bạn phải lưu câu hỏi trong danh mục này hoặc lưu nó thành câu hỏi mới.';
$string['noquestions'] = 'Không tìm thấy câu hỏi nào có thể xuất được. Hãy chắc rằng bạn chọn một danh mục xuất có chứa câu hỏi.';
$string['noquestionsinfile'] = 'Không có câu hỏi nào trong file nhập';
$string['noresponse'] = '[Không phản hồi]';
$string['notanswered'] = 'Không trả lời';
$string['notchanged'] = 'Không thay đổi từ lần thử cuối';
$string['notenoughanswers'] = 'Loại câu hỏi này yêu cầu ít nhất {$a} câu hỏi';
$string['notenoughdatatoeditaquestion'] = 'Không có id câu hỏi, hoặc id danh mục và loại câu hỏi được chỉ định';
$string['notflagged'] = 'Không gắn cờ';
$string['notgraded'] = 'Không chấm điểm';
$string['notshown'] = 'Không hiện';
$string['notyetanswered'] = 'Chưa trả lời';
$string['notyourpreview'] = 'Bản xem trước này không thuộc về bạn';
$string['numqas'] = 'Số lần thử câu hỏi';
$string['numquestions'] = 'Không có câu hỏi';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} ẩn)';
$string['options'] = 'Lựa chọn';
$string['page-question-category'] = 'Trang danh mục câu hỏi';
$string['page-question-edit'] = 'Trang sửa câu hỏi';
$string['page-question-export'] = 'Trang xuất câu hỏi';
$string['page-question-import'] = 'Trang nhập câu hỏi';
$string['page-question-x'] = 'Bất kì trang câu hỏi nào';
$string['parent'] = 'Cha';
$string['parentcategory'] = 'Danh mục cha';
$string['parentcategory_help'] = 'Danh mục cha là cái mà danh mục mới sẽ được đặt vào. "Cao" nghĩa là danh mục này không chứa trong bất kì danh mục nào. Các bối cảnh danh mục được hiện đậm. Phải có ít nhất một danh mục trong mỗi bối cảnh.';
$string['parenthesisinproperclose'] = 'Dấu ngoặc trước ** chưa được đóng hợp lí trong {$a}**';
$string['parenthesisinproperstart'] = 'Dấu ngoặc trước ** chưa được bắt đầu hợp lí trong {$a}**';
$string['parsingquestions'] = 'Đang phân tích câu hỏi từ tệp nhập.';
$string['partiallycorrect'] = 'Đúng một phần';
$string['partiallycorrectfeedback'] = 'Dành cho bất kì phàn hồi đúng một phần nào';
$string['partiallycorrectfeedbackdefault'] = 'Câu trả lời của bạn đúng một phần.';
$string['penaltyfactor'] = 'Hệ số phạt';
$string['penaltyfactor_help'] = 'Thiết lập này xác định phần điểm có được trừ cho mỗi phản hồi sai. Nó chỉ áp dụng nếu bài trắc nghiệm chạy ở chế độ thích nghi.

Hệ số phát nên là một con số giữa 0 và 1. Một hệ số phạt là 1 có nghĩa là học viên phải có câu trả lời đúng trong phản hồi đầu tiên của anh ta để nhận điểm cuối cùng. Một hệ số phạt là 0 có nghĩa là học viên có thể thử nhiều tùy ý và vẫn nhận đủ điểm.';
$string['penaltyforeachincorrecttry'] = 'Phạt cho mỗi lần thử sai';
$string['penaltyforeachincorrecttry_help'] = 'Khi các câu hỏi chạy sử dụng hành vi \'Tương tác với nhiều lần thử\' hoặc \'Chế độ thích nghi\', học viên sẽ có vài lần thử để có câu trả lời đúng, và lựa chọn này kiểm soát mức phạt dành cho họ đối với mỗi lần thử sai.

Phạt là một phần tổng điểm câu hỏi, vì vậy nếu câu hỏi đáng giá 3 điểm, và mức phạt là 0.3333333, thì học viên sẽ đạt điểm 3 nếu có câu trả lời đúng ở lần đầu tiên, 2 nếu đúng ở lần thử thứ hai, và 1 nếu đúng ở lần thử thứ ba.';
$string['permissionedit'] = 'Sửa câu hỏi này';
$string['permissionmove'] = 'Chuyển câu hỏi này';
$string['permissionsaveasnew'] = 'Lưu nó thành câu hỏi mới';
$string['permissionto'] = 'Bạn có quyền:';
$string['previewquestion'] = 'Xem trước câu hỏi: {$a}';
$string['published'] = 'được chia sẻ';
$string['qtypeveryshort'] = 'T';
$string['questionbank'] = 'Ngân hàng câu hỏi';
$string['questionbehaviouradminsetting'] = 'Thiết lập hành vi câu hỏi';
$string['questionbehavioursdisabled'] = 'Các hành vi câu hỏi để vô hiệu hóa';
$string['questionbehavioursdisabledexplained'] = 'Nhập một danh sách ngăn cách bởi dấu phẩy các hành vi bạn không muốn xuất hiện trong thực đơn thả';
$string['questionbehavioursorder'] = 'Thứ tự các hành vi câu hỏi';
$string['questionbehavioursorderexplained'] = 'Nhập một danh sách ngăn cách bởi dấu phẩy các hành vi theo thứ tự bạn muốn chúng xuất hiện trong thực đơn thả';
$string['questioncategory'] = 'Danh mục câu hỏi';
$string['questioncatsfor'] = 'Các danh mục câu hỏi cho \'{$a}\'';
$string['questiondoesnotexist'] = 'Câu hỏi này không tồn tại';
$string['questionidmismatch'] = 'Các id câu hỏi không trùng khớp';
$string['questionname'] = 'Tên câu hỏi';
$string['questionnamecopy'] = '{$a} (bản sao)';
$string['questionno'] = 'Câu hỏi {$a}';
$string['questionpreviewdefaults'] = 'Mặc định xem trước câu hỏi';
$string['questionpreviewdefaults_desc'] = 'Mặc định được sử dụng khi người dùng xem trước một câu hỏi lần đầu tiên trong ngân hàng câu hỏi. Khi người dùng đã xem câu hỏi, tùy chỉnh cá nhân của họ được lưu làm tùy chỉnh người dùng.';
$string['questions'] = 'Các câu hỏi';
$string['questionsinuse'] = '(* Các câu hỏi được đánh dấu bởi một dấu * là đã sử dụng trong một số bài trắc nghiệm. Những câu hỏi này sẽ không bị xóa từ những bài trắc nghiệm này nhưng chỉ xóa từ danh sách danh mục.)';
$string['questionsmovedto'] = 'Các câu hỏi vẫn còn sử dụng được chuyển sang "{$a}" trong danh mục khóa học cha.';
$string['questionsrescuedfrom'] = 'Các câu hỏi được lưu từ bối cảnh {$a}.';
$string['questionsrescuedfrominfo'] = 'Những câu hỏi này (một số có thể ẩn) đã được lưu khi bối cảnh {$a} bị xóa vì chúng vẫn được sử dụng bởi một số bài trắc nghiệm hay các hoạt động khác.';
$string['questiontext'] = 'Đoạn văn câu hỏi';
$string['questiontype'] = 'Loại câu hỏi';
$string['questionvariant'] = 'Biến thể câu hỏi';
$string['questionx'] = 'Câu hỏi {$a}';
$string['requiresgrading'] = 'Yêu cầu chấm điểm';
$string['responsehistory'] = 'Lịch sử phản hồi';
$string['restart'] = 'Bắt đầu lại';
$string['restartwiththeseoptions'] = 'Bắt đầu lại với những lựa chọn này';
$string['reviewresponse'] = 'Xem lại phản hồi';
$string['rightanswer'] = 'Câu trả lời đúng';
$string['rightanswer_help'] = 'một bản tóm tắt phản hồi đúng được tự động tạo. Nó có thể được giới hạn, vì bạn có thể muốn xem xét giải thích lời giải đúng trong phản hồi chung cho câu hỏi, và tắt lựa chọn này.';
$string['save'] = 'Lưu';
$string['savechangesandcontinueediting'] = 'Lưu các thay đổi và tiếp tục sửa';
$string['saved'] = 'Đã được lưu: {$a}';
$string['saveflags'] = 'Lưu trạng thái các cờ';
$string['selectacategory'] = 'Chọn danh mục:';
$string['selectaqtypefordescription'] = 'Chọn loại câu hỏi để xem mô tả của nó.';
$string['selectcategoryabove'] = 'Lựa chọn một danh mục ở trên';
$string['selectquestionsforbulk'] = 'Chọn các câu hỏi để hành động hàng loạt';
$string['settingsformultipletries'] = 'Nhiều lần thử';
$string['shareincontext'] = 'Chia sẻ trong bối cảnh dành cho {$a}';
$string['showhidden'] = 'Cũng hiện các câu hỏi cũ';
$string['showmarkandmax'] = 'Hiện điểm và tối đa';
$string['showmaxmarkonly'] = 'Chỉ hiện điểm tối đa';
$string['shown'] = 'Đã được hiện';
$string['shownumpartscorrect'] = 'Hiện số phản hồi đúng';
$string['shownumpartscorrectwhenfinished'] = 'Hiện số phản hồi đúng khi câu hỏi hoàn tất';
$string['showquestiontext'] = 'Hiện đoạn văn câu hỏi trong danh sách câu hỏi';
$string['specificfeedback'] = 'Phản hồi chuyên biệt';
$string['specificfeedback_help'] = 'Phản hồi phụ thuộc vào phản hồi mà học sinh đưa ra.';
$string['started'] = 'Đã bắt đầu';
$string['state'] = 'Trạng thái';
$string['step'] = 'Bước';
$string['stoponerror'] = 'Dừng khi lỗi';
$string['stoponerror_help'] = 'Thiết lập này xác định liệu quá trình nhập có dừng khi phát hiện lỗi, kết quả là không có câu hỏi nào được nhập, hoặc nếu bất kì câu hỏi nào chứa lỗi được bỏ qua và bất kì câu hỏi nào hợp lệ được nhập.';
$string['submissionoutofsequence'] = 'Truy cập ngoài chuỗi tuần tự. Không nhấn nút trở về khi làm việc với các câu hỏi trắc nghiệm.';
$string['submissionoutofsequencefriendlymessage'] = 'Bạn đã nhập dữ liệu ngoài chuỗi tuần tự thông thường. Điều này có thể xảy ra nếu bạn sử dụng các nút Trở về hoặc Tới; không dùng chúng trong quá trình thử nghiệm. Nó cũng có thể xảy ra nếu bạn nhấn vào một thứ gì đó trong khi trang đang tải. Nhấn <strong>Tiếp tục</strong> để trở lại.';
$string['submit'] = 'Nộp';
$string['submitandfinish'] = 'Nộp và hoàn thành';
$string['submitted'] = 'Nộp: {$a}';
$string['technicalinfo'] = 'Thông tin kĩ thuật';
$string['technicalinfo_help'] = 'Thông tin kĩ thuật này có lẽ chỉ hữu ích với các nhà phát triển làm việc trên các loại câu hỏi mới. Nó cũng hữu ích khi thử chẩn đoán vấn đề với các câu hỏi.';
$string['technicalinfomaxfraction'] = 'Phần tối đa: {$a}';
$string['technicalinfominfraction'] = 'Phần tối thiểu: {$a}';
$string['technicalinfoquestionsummary'] = 'Tóm tắt câu hỏi: {$a}';
$string['technicalinforightsummary'] = 'Tóm tắt câu trả lời đúng: {$a}';
$string['technicalinfostate'] = 'Tình trạng câu hỏi: {$a}';
$string['tofilecategory'] = 'Ghi danh mục vào tệp';
$string['tofilecontext'] = 'Ghi bối cảnh vào tệp';
$string['uninstallbehaviour'] = 'Gỡ bỏ hành vi câu hỏi này.';
$string['uninstallqtype'] = 'Gỡ bỏ loại câu hỏi này.';
$string['unknown'] = 'Không rõ';
$string['unknownbehaviour'] = 'Hành vi không rõ: {$a}.';
$string['unknownorunhandledtype'] = 'Loại câu hỏi không rõ hoặc chưa nắm được: {$a}';
$string['unknownquestion'] = 'Câu hỏi không rõ: {$a}.';
$string['unknownquestioncatregory'] = 'Danh mục câu hỏi không rõ: {$a}.';
$string['unknownquestiontype'] = 'Loại câu hỏi không rõ: {$a}.';
$string['unknowntolerance'] = 'Loại tha bổng không rõ {$a}';
$string['unpublished'] = 'chưa được chia sẻ';
$string['unusedcategorydeleted'] = 'Danh mục này bị xóa bởi vì sau khi xóa khóa học, các câu hỏi của nó không được sử dụng nữa.';
$string['updatedisplayoptions'] = 'Cập nhật lựa chọn hiển thị';
$string['whethercorrect'] = 'Nếu đúng';
$string['whethercorrect_help'] = 'Nó bao quát cả hai mô tả bằng văn bản \'Đúng\', \'Đúng một phần\' hoặc \'Sai\', và bất kì đánh dấu bằng màu nào chứa cùng thông tin.';
$string['whichtries'] = 'Lần thử nào';
$string['withselected'] = 'Với cái được chọn';
$string['xoutofmax'] = '{$a->mark} trên {$a->max}';
$string['yougotnright'] = 'Bạn đã chọn đúng {$a->num}.';
$string['youmustselectaqtype'] = 'Bạn phải chọn một loại câu hỏi.';
$string['yourfileshoulddownload'] = 'Tệp xuất của bạn sẽ bắt đầu tải về trong chốc lát. Nếu không, hãy <a href="{$a}">nhấn vào đây</a>.';
