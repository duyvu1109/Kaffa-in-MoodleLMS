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
 * Strings for component 'cachestore_memcached', language 'vi', version '3.11'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Bộ đệm ghi';
$string['bufferwrites_help'] = 'Kích hoạt hay vô hiệu hóa bộ đệm I/O. Kích hoạt bộ đệm I/O làm các lệnh lưu trữ thành "đệm" thay vì được gửi đi. Bất kỳ hoạt động nào nhận dữ liệu làm cho bộ đệm này được gửi đến kết nối từ xa. Thoát hay đóng kết nối cũng sẽ làm cho dữ liệu bộ đệm đẩy đến kết nối từ xa.';
$string['clustered'] = 'Kích hoạt chuỗi máy chủ';
$string['clustered_help'] = 'Được dùng nhằm cho phép chức năng đọc một, đa ấn định (read-one, set-multi).

Trường hợp sử dụng dự định là tạo bộ lưu trữ cải thiện cho các thiết lập cân bằng tải. Bộ lưu trữ sẽ lấy từ một máy chủ (thường là localhost), nhưng đặt đến nhiều (tất cả máy chủ trong bể cân bằng tải). Với các bộ đệm có độ đọc cao so với các tỷ lệ được ấn định, nó tiết kiệm đáng kể lưu lượng mạng quá ngưỡng.

Khi thiết lập này được kích hoạt, máy chủ được liệt kê bên trên sẽ được dùng để lấy.';
$string['clusteredheader'] = 'Tách máy chủ';
$string['hash'] = 'Phương thức hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Mặc định (một lần một thời điểm)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Chỉ định thuật toán hashing được dùng cho các khóa mục. Mỗi thuật hash có ưu và nhược riêng. Theo mặc định nếu bạn không biết hoặc không quan tâm.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Khóa tiền tố';
$string['prefix_help'] = 'Nó có thể được dùng để tạo một "miền" cho các khóa mục của bạn nhằm cho phép tạo nhiều bộ lưu trữ memcached trên một bản cài memcached đơn thuần. Nó không thể dài hơn 16 ký tự nhằm đảm bảo không mắc phải các vấn đề về độ dài khóa .';
$string['prefixinvalid'] = 'Tiền tố không hợp lệ. Bạn chỉ có thể dùng a-z A-Z 0-9-_.';
$string['serialiser_igbinary'] = 'Bộ chuyển hóa igbinary.';
$string['serialiser_json'] = 'Bộ chuyển hóa JSON.';
$string['serialiser_php'] = 'Bộ chuyển hóa PHP mặc định.';
$string['servers'] = 'Các máy chủ';
$string['servers_help'] = 'Nó đặt các máy chủ được ưu hóa bởi bộ tiếp hợp memcached này.
Các máy chủ nên được định nghĩa trên mỗi dòng và bao gồm địa chỉ máy chủ, và cổng, độ khối tùy ý.
Nếu không cung cấp cổng thì cổng mặc định (11211) được dùng.

Ví dụ:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Nếu *Kích hoạt chuỗi máy chủ* được kích hoạt bên dưới, phải có duy nhất một máy chủ được liệt kê ở đây. Thường thường nó sẽ là tên luôn luôn phân giải máy chủ cục bộ, như 127.0.0.1 hay localhost.';
$string['serversclusterinvalid'] = 'Ít nhất một máy chủ được yêu cầu khi chuỗi được kích hoạt.';
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
$string['testservers_desc'] = 'Một hay nhiều các chuỗi kết nối để các máy chủ memcache thử. Nếu một máy chủ thử nghiệm đã được chỉ định thì tốc độ memcache có thể được đánh giá dùng trang hiệu năng bộ đệm trong khối quản trị.
Ví dụ: 127.0.0.1:11211';
$string['usecompression'] = 'Sử dụng nén';
$string['usecompression_help'] = 'Kích hoạt hay vô hiệu hóa nén lượng tải. Khi được kích hoạt, các giá trị mục dài hơn một ngưỡng nhất định (hiện tại là 100 bytes) sẽ được nén trong quá trình lưu trữ và được giải nén trong lúc lấy một cách âm thầm.';
$string['useserialiser'] = 'Sử dụng bộ chuỗi hóa';
$string['useserialiser_help'] = 'Chỉ định bộ chuyển hóa dùng để chuyển hóa các giá trị không đơn thuần.
Các bộ chuyển hóa hợp lệ là Memcached::SERIALIZER_PHP hay Memcached::SERIALIZER_IGBINARY.
Cái sau chỉ được hỗ trợ khi memcached được thiết lập với lựa chọn --enable-memcached-igbinary và trình mở rộng igbinary được nạp.';
