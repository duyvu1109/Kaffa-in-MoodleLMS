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
 * Strings for component 'cachestore_file', language 'vi', version '3.11'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Tự tạo thư mục';
$string['autocreate_help'] = 'Nếu được kích hoạt thì thư mục được chỉ định trong đường dẫn sẽ được tự động tạo nếu nó không tồn tại.';
$string['path'] = 'Đường dẫn bộ đềm';
$string['path_help'] = 'Thư mục sẽ được dùng để lưu trữ các tệp cho bộ đệm này. Nếu để trống (mặc định) một thư mục sẽ được tự động tạo trong thư mục moodledata. Nó có thể được dùng để trỏ đến một tập lưu trữ tệp đến một thư mục trên ổ đĩa có hiệu năng tốt hơn (như trong bộ nhớ).';
$string['pluginname'] = 'Bộ nhớ đệm tệp';
$string['prescan'] = 'Quét trước thư mục';
$string['prescan_help'] = 'Nếu được kích hoạt thì thư mục được quét khi bộ đệm được dùng lần đầu tiên và các yêu cầu cho các tệp được kiểm tra lần đầu so với dữ liệu quét. Nó có thể giúp nếu bạn có hệ tệp chậm và thấy rằng thao tác tệp đó đang gây ra nút cổ chai.';
$string['singledirectory'] = 'Lưu trữ đơn thư mục';
$string['singledirectory_help'] = 'Nếu các tệp được kích hoạt (các mục được lập bộ đệm) sẽ được lưu trữ trong một thư mục thay vì chia thành nhiều thư mục.<br />
Kích hoạt nó sẽ tăng tốc giao tiếp tệp nhưng chịu rủi ro gia tăng khi đạt giới hạn hệ tệp.<br />
Lời khuyên chỉ bật nếu điều sau đúng:<br />
 - Nếu bạn biết số mục trong bộ đệm đủ nhỏ và không gây ra vấn đề trên hệ tệp mà bạn đang chạy.<br />
 - Dữ liệu được lập bộ đệm không quá mắc để sinh ra. Nếu có thì giữ mặc định vẫn là lựa chọn tốt hơn vì nó giảm khả năng phát sinh vấn đề.';
