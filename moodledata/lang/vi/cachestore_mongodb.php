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
 * Strings for component 'cachestore_mongodb', language 'vi', version '3.11'.
 *
 * @package     cachestore_mongodb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'CSDL';
$string['database_help'] = 'Tên CSDL sử dụng.';
$string['extendedmode'] = 'Dùng khóa mở rộng';
$string['extendedmode_help'] = 'Nếu được kích hoạt các tập khóa đầy đủ sẽ được dùng khi làm việc với trình bổ trợ. Nó chưa được dùng nội bộ nhưng sẽ cho phép dễ dàng tìm kiếm và khám phá trình bổ trợ MongoDB thủ công nếu bạn chọn như vậy. Bật nó lên sẽ gây vượt ngưỡng chút vậy nên chỉ làm nếu bạn cần nó.';
$string['password'] = 'Mật khẩu';
$string['password_help'] = 'Mật khẩu của người dùng được sử dụng cho kết nối.';
$string['pleaseupgrademongo'] = 'Bạn đang sử dụng phiên bản cũ của trình mở rộng PHP Mongo (< 1.3). Hỗ trợ các phiên bản cũ trình mở rộng Mongo sẽ bị bỏ qua trong tương lai. Hãy cân nhắc nâng cấp.';
$string['pluginname'] = 'MongoDB';
$string['replicaset'] = 'Tệp replica';
$string['replicaset_help'] = 'Tên tập replica kết nối tới. Nếu được cung cấp master sẽ được xác định bằng cách dùng lệnh CSDL ismaster trên các seed, vì vậy bộ điều phối có thể dẫn đến việc kêt nối máy chủ thậm chí chưa được liệt kê.';
$string['server'] = 'Máy chủ';
$string['server_help'] = 'Đây là chuỗi kết nối cho máy chủ bạn muốn sử dụng. Nhiều máy chủ có thể được chỉ định dùng danh sách ngăn cách bởi dấu phẩy.';
$string['testserver'] = 'Thử nghiệm máy chủ';
$string['testserver_desc'] = 'Chuỗi kết nối cho máy chủ dùng để thử. Nếu một máy chủ thử nghiệm đã được chỉ định thì hiệu năng MongoDB có thể được đánh giá dùng trang hiệu năng bộ đệm trong khối quản trị.
Một ví dụ như: mongodb://127.0.0.1:27017';
$string['username'] = 'Tài khoản';
$string['username_help'] = 'Tài khoản dùng để tạo kết nối';
$string['usesafe'] = 'Dùng an toàn';
$string['usesafe_help'] = 'Nếu được kích hoạt thì lựa chọn usesafe sẽ được dùng trong các thao tác chèn, lấy, và xóa. Nếu bạn đã chỉ định một tập replica thì nó sẽ bị buộc thực thi bằng mọi giá.';
$string['usesafevalue'] = 'Dùng trị an toàn';
$string['usesafevalue_help'] = 'Bạn có thể chọn cung cấp một giá trị cụ thể để dùng an toàn. Nó sẽ xác định số máy chủ mà các thao tác phải được hoàn tất trước khi chúng được thấy rằng đã hoàn tất.';
