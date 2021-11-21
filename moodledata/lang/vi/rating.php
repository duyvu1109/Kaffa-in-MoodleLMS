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
 * Strings for component 'rating', language 'vi', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Trung bình điểm đánh giá';
$string['aggregatecount'] = 'Số đánh giá';
$string['aggregatemax'] = 'Điểm đánh giá tối đa';
$string['aggregatemin'] = 'Điểm đánh giá tối thiểu';
$string['aggregatenone'] = 'Không có đánh giá';
$string['aggregatesum'] = 'Tổng điểm đánh giá';
$string['aggregatetype'] = 'Loại gộp';
$string['aggregatetype_help'] = 'Loại gộp xác định điểm đánh giá được kết hợp như thế nào để hình thành điểm cuối cùng trong sổ điểm.

* Trung bình điểm đánh giá - Trung bình của tất cả điểm đánh giá
* Số đánh giá - Số mục được đánh giá trở thành điểm cuối cùng. Chú ý tổng không thể vượt quá số điểm tối đa cho hoạt động.
* Tối đa - Điểm đánh giá cao nhất trở thành điểm cuối cùng
* Tối thiểu - Điểm đánh giá tối thiểu trở thành điểm cuối cùng
* Tổng - Tất cả đánh giá được cộng lại. Chú ý tổng không thể vượt quá số điểm tối đa cho hoạt động.

Nếu "Không đánh giá" được chọn, thì hoạt động sẽ không xuất hiện trong sổ điểm.';
$string['allratingsforitem'] = 'Tất cả đánh giá đã được gửi';
$string['capabilitychecknotavailable'] = 'Kiểm tra tương thích không hiện hữu cho đến khi hoạt động được lưu';
$string['couldnotdeleteratings'] = 'Xin lỗi, nó không thể xóa được vì người ta đã đánh giá nó';
$string['noratings'] = 'Không có đánh giá được gửi đi';
$string['noviewanyrate'] = 'Bạn chỉ có thể xem các kết quả đối với các mục bạn đã tạo';
$string['noviewrate'] = 'Bạn không có quyền xem các đánh giá mục';
$string['rate'] = 'Đánh giá';
$string['ratepermissiondenied'] = 'Bạn không được phép đánh giá mục này';
$string['rating'] = 'Điểm đánh giá';
$string['ratinginvalid'] = 'Điểm đánh giá không hợp lệ';
$string['ratings'] = 'Điểm đánh giá';
$string['ratingtime'] = 'Giới hạn điểm đánh giá vào các mục với ngày trong khoảng:';
$string['rolewarning'] = 'Các vai trò được phép đánh giá';
$string['rolewarning_help'] = 'Để gửi điểm đánh giá người dùng yêu cầu quyền moodle/rating:rate và bất kì quyền chuyên biệt mô-đun nào. Người dùng được giao các vai trò sau sẽ có thể đánh giá các mục. Danh sách các vai trò có thể được bỏ qua liên kết cho phép trong khối quản trị.';
$string['scaleselectionrequired'] = 'Khi chọn một loại gộp điểm đánh giá bạn cũng phải chọn sử dụng thang điểm hoặc đặt số điểm tối đa.';
