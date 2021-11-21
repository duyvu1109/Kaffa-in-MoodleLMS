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
 * Strings for component 'auth_db', language 'vi', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdescription'] = 'Phương pháp này sử dụng một bảng cơ sở dũ liệu bên ngoài để kiêm tra khi nào một tên đăng nhập và mật khẩu đưa ra là hợp lệ. Nếu tài khoản là một cái mới thì thông tin từ các trường khác cũng có thể được copy sang Moodle.';
$string['auth_dbextrafields'] = 'Những trường này là tuỳ chọn. Bạn có thể chọn điền vào trước một số thông tin người sử dụng Moodle với thông tin từ <b> các trường cơ sở dữ liệu bên ngoài </b> mà bạn chỉ ra ở đây. <p>Nếu bạn để lại những chỗ trống, thì các thông tin mặc định sẽ đươc sử dụng.</p><p> Trong trường hợp khác, người sử dụng sẽ có khả năng soạn thảo tất cả các trường đó sau khi họ đăng nhập.</p>';
$string['auth_dbfieldpass'] = 'Tên của trường đang chứa các mật khẩu';
$string['auth_dbfielduser'] = 'Tên của trường đang chứa các tên đăng nhập';
$string['auth_dbhost'] = 'The computer hosting the database server.';
$string['auth_dbname'] = 'Tên của chính cơ sở dữ liệu';
$string['auth_dbpass'] = 'Mật khẩu phù hợp với tên đăng nhập ở trên';
$string['auth_dbpasstype'] = 'Chỉ rõ định dạng mà trường mật khẩu đang sử dụng. Mã hoá MD5 thì hữu ích đối với sự kết nối tới các ứng dụng web thông thường khác giống như PostNuke';
$string['auth_dbtable'] = 'Tên của bảng trong cơ sở dữ liệu';
$string['auth_dbtype'] = 'Kiểu cơ sở dữ liệu (Xem <a href="../lib/adodb/readme.htm#drivers"> tài liệu hướng dẫn ADOdb </a> chi tiết)';
$string['auth_dbtype_key'] = 'Cơ sở dữ liệu';
$string['auth_dbuser'] = 'Ghi tên đăng nhập truy cập cơ sở dữ liệu';
$string['pluginname'] = 'Sử dụng một cơ sở dữ liệu bên ngoài';
