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
 * Strings for component 'grading', language 'vi', version '3.11'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' được chọn làm phương thức chấm điểm hoạt động cho khu vực \'{$a->area}\'';
$string['activemethodinfonone'] = 'Không có phương thức chấm điểm nâng cao nào được chọn cho khu vực \'{$a->area}\'. Chấm điểm trực tiếp đơn thuần sẽ được sử dụng.';
$string['changeactivemethod'] = 'Đổi phương thức chấm điểm hoạt động thành';
$string['clicktoclose'] = 'nhấn để đóng';
$string['exc_gradingformelement'] = 'Không thể khởi tạo nhân tố biểu mẫu chấm điểm';
$string['formnotavailable'] = 'Phương thức chấm điểm nâng cao đã được chọn để sử dụng nhưng biểu mẫu chấm điểm chưa có. Có thể bạn cần định nghĩa nó trước  thông qua liên kết trong khối Quản trị.';
$string['gradingformunavailable'] = 'Hãy chú ý: biểu mẫu chấm điểm nâng cao chưa sẵn sàng vào lúc này. Phương thức chấm điểm đơn thuần sẽ được sử dụng cho đến khi mẫu đơn có trạng thái hợp lệ.';
$string['gradingmanagement'] = 'Chấm điểm nâng cao';
$string['gradingmanagementtitle'] = 'Chấm điểm nâng cao: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Phương thức chấm điểm';
$string['gradingmethod_help'] = 'Chọn phương thức chấm điểm nâng cao sẽ được sử dụng để tính điểm trong bối cảnh được cho.

Để vô hiệu hóa chấm điểm nâng cao và chuyển về cơ chế chấm điểm mặc định, chọn \'Chấm điểm trực tiếp đơn thuần\'.';
$string['gradingmethodnone'] = 'Chấm điểm trực tiếp đơn thuần.';
$string['gradingmethods'] = 'Các phương thức chấm điểm';
$string['manageactionclone'] = 'Tạo biểu mẫu chấm điểm mới từ khuôn mẫu';
$string['manageactiondelete'] = 'Xóa biểu mẫu được định nghĩa hiện tại';
$string['manageactiondeleteconfirm'] = 'Bạn định xóa biểu mẫu \'{$a->formname}\' và tất cả thông tin đi kèm từ \'{$a->component} ({$a->area})\'. Hãy chắc rằng bạn hiểu được các hậu quả sau:

* Không thể hoàn tác.
* Bạn có thể chuyển sang phương thức chấm điểm khác bao gồm \'Chấm điểm trực tiếp đơn thuần\' mà không phải xóa biểu mẫu này.
* Tất cả thông tin về việc biểu mẫu chấm điểm được điền như thế nào sẽ bị mất.
* Các điểm kết quả được tính và lưu trong sổ điểm sẽ không bị ảnh hưởng. Tuy nhiên diễn giải cách thức chúng được tính như thế nào sẽ không còn.
* Thao tác này không ảnh hưởng các bản sao cuối cùng của biểu mẫu này trong các hoạt động khác.';
$string['manageactiondeletedone'] = 'Biểu mẫu đã được xóa thành công';
$string['manageactionedit'] = 'Sửa định nghĩa biểu mẫu hiện tại';
$string['manageactionnew'] = 'Định nghĩa biểu mẫu chấm điểm mới từ đầu';
$string['manageactionshare'] = 'Đăng tải biểu mẫu làm một mẫu mới';
$string['manageactionshareconfirm'] = 'Bạn định lưu bản sao biểu mẫu chấm điểm \'{$a}\'thành mẫu công khai mới. Những người dùng khác ở trang của bạn sẽ có thể tạo các biểu mẫu chấm điểm mới trong hoạt động của họ từ mẫu này.';
$string['manageactionsharedone'] = 'Biểu mẫu đã được lưu làm mẫu thành công';
$string['noitemid'] = 'Không thể chấm điểm. Mục chấm điểm không tồn tại.';
$string['nosharedformfound'] = 'Không tìm thấy mẫu';
$string['searchownforms'] = 'bao gồm các biểu mẫu của riêng tôi';
$string['searchtemplate'] = 'Tìm các biểu mẫu chấm điểm';
$string['searchtemplate_help'] = 'Bạn có thể tìm một biểu mẫu chấm điểm và sử dụng nó làm mẫu cho biểu mẫu chấm điểm mới ở đây. Đơn giản là gõ các từ sẽ xuất hiện đâu đó trong tên biểu mẫu, mô tả của nó hay thân biểu mẫu. Để tìm một cụm, gói cả câu truy vấn trong dấu ngoặc kép.

Mặc định, chỉ các biểu mẫu chấm điểm đã được lưu làm mẫu dùng chung được bao gồm trong kết quả tìm kiếm. Bạn cũng có thể bao gồm tất cả biểu mẫu chấm điểm của riêng mình trong kết quả tìm kiếm. Cách này, bạn có thể tái sử dụng biểu mẫu chấm điểm của mình một cách đơn giản mà không phải chia sẻ chúng. Chỉ những biểu mẫu được đánh dấu \'Sẵn sàng sử dụng\' có thể được tái sử dụng theo cách này.';
$string['statusdraft'] = 'Nháp';
$string['statusready'] = 'Sẵn sàng sử dụng';
$string['templatedelete'] = 'Xóa';
$string['templatedeleteconfirm'] = 'Bạn định xóa mẫu dùng chung \'{$a}\'. Xóa một mẫu không ảnh hưởng đến các mẫu hiện tại đã được tạo từ nó.';
$string['templateedit'] = 'Sửa';
$string['templatepick'] = 'Dùng mẫu này';
$string['templatepickconfirm'] = 'Bạn có muốn sử dụng biểu mẫu chấm điểm \'{$a->formname}\' làm mẫu cho biểu mẫu chấm điểm mới trong \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Dùng biểu mẫu này làm mẫu';
$string['templatesource'] = 'Vị trí: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Biểu mẫu sỡ hữu';
$string['templatetypeshared'] = 'Mẫu dùng chung';
