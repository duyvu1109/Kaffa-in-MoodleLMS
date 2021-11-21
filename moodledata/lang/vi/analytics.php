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
 * Strings for component 'analytics', language 'vi', version '3.11'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Có thể phân tích {$a->analysableid} không được dùng: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Có thể phân tích {$a->analysableid} không hợp lệ đối với mục tiêu này: {$a->analysableid}';
$string['analysisinprogress'] = 'Vẫn đang được phân tích bởi lệnh trước đây';
$string['analytics'] = 'Tính năng phân tích';
$string['analyticsdisabled'] = 'Tính năng phân tích bị vô hiệu. Bạn có thể kích hoạt trong "Quản trị trang > Các tính năng nâng cao).';
$string['analyticslogstore'] = 'Các ghi chép được sử dụng cho các phân tích';
$string['analyticslogstore_help'] = 'Các ghi chép sẽ được sử dụng bởi các phân tích API cho các hoạt động thực của người sử dụng.';
$string['analyticssettings'] = 'Các thiết đặt phân tích';
$string['analyticssiteinfo'] = 'Thông tin trang';
$string['calclifetime'] = 'Giữ các tính toán phân tích cho';
$string['configlcalclifetime'] = 'Mục này cho phép thiết lập lưu trữ số liệu tính toán trong bao lâu - nó sẽ không xóa dự báo, những sẽ xóa số liệu để tính toán lên các dự báo. Sử dụng lựa chọn mặc định ở đây là tốt nhất vì nó sẽ giữ dung lượng ổ cứng của bạn trong kiểm soát, tuy nhiên nếu bạn sử dụng các bảng tính cho các mục đích khác thì bạn có thể tăng giá trị này lên.';
$string['defaultpredictionsprocessor'] = 'Hệ thống xử lí dự báo mặc định';
$string['defaultpredictoroption'] = 'Hệ thống xử lí mặc định ({$a})';
$string['defaulttimesplittingmethods'] = 'Khoảng phân tích mặc định cho đánh giá mô hình';
$string['defaulttimesplittingmethods_help'] = 'Khoảng phân tích xác định khi nào thì hệ thống tính toán các dự báo và một phần của lưu trữ hoạt động sẽ được cân nhắc cho các dự báo này. Mô hình đánh giá sẽ lặp lại qua khoảng phân tích này trừ khi có các khoảng phân tích khác được chỉ định.';
$string['disabledmodel'] = 'Mẫu vô hiệu';
$string['erroralreadypredict'] = 'Tập tin {$a} đã được dùng để tạo các dự báo.';
$string['errorcannotreaddataset'] = 'Không thể đọc bộ dữ liệu tập tin {$a}';
$string['errorcannotusetimesplitting'] = 'Khoảng phân tích được chỉ định không thể sử dụng được cho mô hình này.';
$string['errorcannotwritedataset'] = 'Không thể viết bộ dữ liệu tập tin {$a}';
$string['errorexportmodelresult'] = 'Không thể xuất mẫu học máy.';
$string['errorimport'] = 'Lỗi nhập tập tin JSON được cung cấp.';
$string['errorimportmissingclasses'] = 'Các mục phân tích dưới đây là không có cho trang này: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Mẫu được cung cấp yêu cầu các trình bổ trợ sau phải được cài đặt: {$a}. Lưu ý rằng các phiên bản không cần phải tương thích với các phiên bản đã cài đặt trên trang của bạn. Cài đặt trình bổ trợ  phiên bản tương tự hoặc mới hơn đều ổn trong hầu hết các trường hợp.';
$string['errorimportversionmismatches'] = 'Phiên bản của các thành phần sau khác với phiên bản cài đặt trên trang này: {$a}. Bạn có thể chọn "Bỏ qua không tương thích phiên bản" để bỏ qua những khác biệt này.';
$string['errorinvalidcontexts'] = 'Một số văn cảnh đã chọn không thể sử dụng trong mục tiêu này.';
$string['errorinvalidindicator'] = 'Chỉ số {$a} không hợp lệ';
$string['errorinvalidtarget'] = 'Mục tiêu không hợp lệ {$a}';
$string['errorinvalidtimesplitting'] = 'Chu kỳ phân tích không hợp lệ; xin hãy đảm bảo bạn thêm tên lớp học đủ điều kiện.';
$string['errornocontextrestrictions'] = 'Mục tiêu được chọn không hỗ trợ các hạn chế văn cảnh.';
$string['errornoexportconfig'] = 'Có vấn đề trong khâu xuất mẫu cấu hình.';
$string['errornoexportconfigrequirements'] = 'Chỉ các mẫu không cố định với một chu kỳ phân tích là có thể được xuất.';
$string['errornoindicators'] = 'Mẫu này không có bất kì bộ chỉ nào.';
$string['errornopredictresults'] = 'Không có kết quả nào từ lệnh xử lý dự đoán trước. Kiểm tra thư mục chứa kết quả để có thêm thông tin.';
$string['errornoroles'] = 'Vai trò của học viên hoặc giảng viên chưa được chỉ định. Chỉ định chúng trong trang thiết đặt phân tích.';
$string['errornotarget'] = 'Mẫu này không có bất kì mục tiêu nào.';
$string['errornotimesplittings'] = 'Mẫu này không có các khoảng trống phân tích.';
$string['errorpredictioncontextnotavailable'] = 'Văn cảnh dự báo này không còn có sẵn nữa.';
$string['errorpredictionformat'] = 'Mẫu tính dự báo sai';
$string['errorpredictionnotfound'] = 'Không tìm thấy dự báo';
$string['errorpredictionsprocessor'] = 'Lỗi bộ xử lí dự báo: {$a}';
$string['errorpredictwrongformat'] = 'Kết quả tính toán dự báo không thể giải mã được: "{$a}"';
$string['errorprocessornotready'] = 'Bộ xử lí dự báo được chọn chưa sẵn sàng: {$a}';
$string['errorsamplenotavailable'] = 'Mẫu dự bão không còn có sẵn nữa.';
$string['errorunexistingmodel'] = 'Mẫu không tồn tại: {$a}';
$string['errorunexistingtimesplitting'] = 'Khoảng trống phân tích được chọn không có sẵn.';
$string['errorunknownaction'] = 'Thao tác chưa định nghĩa';
$string['eventinsightsviewed'] = 'Xem bên trong';
$string['eventpredictionactionstarted'] = 'Bắt đầu quá trình dự báo';
$string['fixedack'] = 'Chấp nhận';
$string['incorrectlyflagged'] = 'Gắn cờ sai';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Hệ thống tạo lập tất cả bên trong cho bạn';
$string['insightinfomessageplain'] = 'Hệ thống tạo lập phần bên trong cho bạn: "{$a}"';
$string['insightmessagesubject'] = 'Phần bên trong mới cho "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Không thể phân tích bằng cách dùng {$a} khoảng trống phân tích.';
$string['invalidtimesplitting'] = 'Mẫu với ID {$a} cần một khoảng trống phân tích trước khi dùng cho đào tạo.';
$string['levelinstitution'] = 'Trình độ học vấn';
$string['levelinstitutionisced0'] = 'Giáo dục từ nhỏ ("thấp hơn sơ cấp"  dành cho trình độ học vấn).';
$string['levelinstitutionisced1'] = 'Giáo dục sơ cấp';
$string['levelinstitutionisced2'] = 'Thấp hơn giáo dục trung cấp';
$string['levelinstitutionisced3'] = 'Cao hơn giáo dục trung cấp';
$string['levelinstitutionisced4'] = 'Đào tạo sau cấp ba không phải đại học (có thể bao gồm đào tạo tại doanh nghiệp hoặc cộng đồng, phi chính phủ)';
$string['levelinstitutionisced5'] = 'Đào tạo đại học ngắn (có thể bao gồm đào tạo tại doanh nghiệp, cộng đồng/tại các tổ chức NGO)';
$string['levelinstitutionisced6'] = 'Cử nhân hoặc trình độ tương đương';
$string['levelinstitutionisced7'] = 'Thạc sĩ hoặc trình độ tương đương';
$string['levelinstitutionisced8'] = 'Tiến sĩ hoặc trình độ tương đương';
$string['modeinstruction'] = 'Phương thức giảng dạy';
$string['modeinstructionblendedhybrid'] = 'Hòa trộn hoặc lai';
$string['modeinstructionfacetoface'] = 'Trực tiếp';
$string['modeinstructionfullyonline'] = 'Trực tuyến toàn thời gian';
$string['modeloutputdir'] = 'Thư mục chứa kết quả các mô hình';
$string['modeloutputdirinfo'] = 'Thư mục chứa tất cả thông tin xử lý dự báo. Cần thiết cho xử lý lỗi và nghiên cứu.';
$string['modeloutputdirwithdefaultinfo'] = 'Thư mục chứa tất cả thông tin xử lý dự báo. Cần thiết để xử lý lỗi và nghiên cứu. Nếu trống, khi đó "{$a}" sẽ được sử dụng như mặc định.';
$string['modeltimelimit'] = 'Giới hạn thời gian phân tích mỗi mẫu';
$string['modeltimelimitinfo'] = 'Thiết đặt này giới hạn thời gian mỗi mẫu dành cho phân tích nội dung trang.';
$string['neutral'] = 'Trung lập';
$string['neverdelete'] = 'Đừng bao giờ xóa các tính toán';
$string['nocourses'] = 'Không có khóa học nào cần phân tích';
$string['nodata'] = 'Không có dữ liệu nào cần phân tích';
$string['noevaluationbasedassumptions'] = 'Không thể đánh giá các mẫu dựa trên suy đoán.';
$string['noinsights'] = 'Không có báo cáo sâu';
$string['noinsightsmodel'] = 'Mô hình này không tính toán sâu';
$string['nonewdata'] = 'Không có dữ liệu mới có sẵn. Mẫu sẽ được phân tích sau khoảng trống phân tích tiếp theo.';
$string['nonewranges'] = 'Chưa có các dự báo mới. Mẫu sẽ được phân tích sau khoảng trống phân tích tiếp theo.';
$string['nopredictionsyet'] = 'Chưa có các dự báo có sẵn';
$string['noranges'] = 'Chưa có dự báo';
$string['notapplicable'] = 'Không thể áp dụng';
$string['notrainingbasedassumptions'] = 'Các mô hình dựa vào giả định không cần đào tạo';
$string['notuseful'] = 'Không hữu dụng';
$string['novaliddata'] = 'Không có sẵn dữ liệu hợp lệ';
$string['novalidsamples'] = 'Không có sẵn các mẫu hợp lệ';
$string['onlycli'] = 'Thực thi các quá trình phân tích chỉ thông qua câu lệnh';
$string['onlycliinfo'] = 'Các quá trình phân tích như đánh giá mẫu, đào tạo các thuật toán máy học hoặc tạo dự báo cần thời gian. Chúng chạy giống như các nhiệm vụ cron hoặc bắt buộc thông qua câu lệnh. Nếu vô hiệu hóa, các quá trình phân tích có thể chạy thủ công qua giao diện web.';
$string['percentonline'] = 'Phần trăm trực tuyến';
$string['percentonline_help'] = 'Nếu tổ chức của bạn cung cấp các khóa học trộn lẫn hoặc lai thì bao nhiêu phần trăm công việc của học viên sẽ được thực hiện trên Moodle? Nhập một số trong khoảng từ 0 tới 100.';
$string['predictionsprocessor'] = 'Bộ xử lí dự báo';
$string['predictionsprocessor_help'] = 'Xử lý dự báo là thuật toán máy tự học chạy ngầm phía sau mà nó xử lý các số liệu tạo ra bởi tính toán các chỉ số của mô hình và mục tiêu. Mỗi mô hình có thể có cách xử lý khác nhau. Mô hình cụ thể ở đây sẽ là mặc định.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Tính toán bộ chỉ';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Văn cảnh';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Kết thúc thời gian tính toán';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Lớp tính toán bộ chỉ';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID mẫu';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Bảng gốc mẫu';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Thời gian bắt đầu tính toán';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Khi dự báo được tạo';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Giá trị tính';
$string['privacy:metadata:analytics:predictionactions'] = 'Các thao tác dự báo';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Tên thao tác';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Kí danh dự báo';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Khi thao tác dự báo được thực hiện';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Người dùng thực hiện thao tác';
$string['privacy:metadata:analytics:predictions'] = 'Các dự báo';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Bộ chỉ các tính toán';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Văn cảnh';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Kí danh mẫu';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Dự báo';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Điểm dự báo';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Chỉ mục của khoảng phân tích';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Kí danh mẫu';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Khi dự báo được tạo';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Thời gian kết thúc tính toán';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Thời gian bắt đầu tính toán';
$string['processingsitecontents'] = 'Đang xử lí văn cảnh trang';
$string['successfullyanalysed'] = 'Phân tích thành công';
$string['timesplittingmethod'] = 'Khoảng trống phân tích';
$string['timesplittingmethod_help'] = 'Chu kỳ phân tích xác định khi nào hệ thống sẽ tính toán các dự báo và một phần của nhật kí hoạt động sẽ được cân nhắc cho những dự báo đó. Ví dụ, thời lượng khóa học có thể được chia thành các phần, cùng với một dự báo được tạo ở cuối mỗi phần.';
$string['typeinstitution'] = 'Loại hình cơ sở';
$string['typeinstitutionacademic'] = 'Tính học thuật';
$string['typeinstitutionngo'] = 'Tổ chức phi chính phủ (NGO)';
$string['typeinstitutiontraining'] = 'Đào tạo doanh nghiệp';
$string['useful'] = 'Hữu ích';
$string['viewdetails'] = 'Xem các chi tiết';
$string['viewinsight'] = 'Xem bên trong';
$string['viewinsightdetails'] = 'Xem các chi tiết bên trong';
$string['viewprediction'] = 'Xem các chi tiết dự báo';
$string['washelpful'] = 'Thông tin này có ích không?';
