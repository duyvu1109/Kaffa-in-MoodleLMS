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
 * Strings for component 'cachestore_memcache', language 'vi', version '3.11'.
 *
 * @package     cachestore_memcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clustered'] = 'Kích hoạt chuỗi máy chủ';
$string['clustered_help'] = 'Được dùng nhằm cho phép chức năng đọc một, đa ấn định (read-one, set-multi).

Trường hợp sử dụng dự định là tạo bộ lưu trữ cải thiện cho các thiết lập cân bằng tải. Bộ lưu trữ sẽ lấy từ một máy chủ (thường là localhost), nhưng đặt đến nhiều (tất cả máy chủ trong bể cân bằng tải). Với các bộ đệm có độ đọc cao so với các tỷ lệ được ấn định, nó tiết kiệm đáng kể lưu lượng mạng quá ngưỡng.

Khi thiết lập này được kích hoạt, máy chủ được liệt kê bên trên sẽ được dùng để lấy.';
$string['clusteredheader'] = 'Tách máy chủ';
$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Tiền tố khóa';
$string['prefix_help'] = 'Tiền tố này được dùng cho tất cả tên khóa trên máy chủ memcache.
* Nếu bạn chỉ có một thực thể Moodle dùng máy chủ này, bạn có thể để mặc định.
* Vì giới hạn độ dài khóa, cho phép tối đa 5 ký tự.';
$string['prefixinvalid'] = 'Tiền tố không hợp lệ. Bạn chỉ có thể dùng a-z A-Z 0-9-_';
$string['servers'] = 'Các máy chủ';
$string['servers_help'] = 'Nó đặt các máy chủ được ưu hóa bởi bộ tiếp hợp memcache này.
Các máy chủ nên được định nghĩa trên mỗi dòng và bao gồm địa chỉ máy chủ, và cổng, độ khối tùy ý.
Nếu không cung cấp cổng thì cổng mặc định (11211) được dùng.

Ví dụ:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Nếu *Kích hoạt chuỗi máy chủ* được kích hoạt bên dưới, phải có duy nhất một máy chủ được liệt kê ở đây. Thường thường nó sẽ là tên luôn luôn phân giải máy chủ cục bộ, như 127.0.0.1 hay localhost.';
$string['serversclusterinvalid'] = 'Chính xác một máy chủ được yêu cầu khi chuỗi được kích hoạt.';
$string['sessionhandlerconflict'] = 'Cảnh báo: Một thực thể memcache ({$a}) đang được thiết lập để sử dụng cùng máy chủ được memcache làm các phiên hoạt động. Xóa tất cả bộ đệm sẽ dẫn đến việc các phiên hoạt động cũng bị xóa.';
$string['setservers'] = 'Đặt các máy chủ';
$string['setservers_help'] = 'Đây là danh sách máy chủ sẽ được cập nhật khi dữ liệu bị sửa đổi trong bộ đệm. Thông thường tên đầy đủ của mỗi máy chủ trong bể.
Nó **phải** bao gồm máy chủ được liệt kê trong *Các máy chủ* bên trên, thậm chí là do tên máy chủ khác.
Các máy chủ nên được định nghĩa trên mỗi dòng và bao gồm địa chỉ máy chủ, và cổng tùy ý.
Nếu không cung cấp cổng thì cổng mặc định (11211) được dùng.

Ví dụ:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Thử nghiệm máy chủ';
$string['testservers_desc'] = 'Một hay nhiều các chuỗi kết nối để các máy chủ memcache thử. Nếu một máy chủ thử nghiệm đã được chỉ định thì hiệu năng memcache có thể được đánh giá dùng trang hiệu năng bộ đệm trong khối quản trị.
Ví dụ: 127.0.0.1:11211';
