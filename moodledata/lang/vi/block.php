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
 * Strings for component 'block', language 'vi', version '3.11'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Chuyển nó sang khu bốc xếp';
$string['anypagematchingtheabove'] = 'Bất kì trang nào khớp như trên';
$string['appearsinsubcontexts'] = 'Xuất hiện trong các văn cảnh phụ.';
$string['assignrolesinblock'] = 'Phân quyền trong khối {$a}';
$string['blocksettings'] = 'Thiết lập khối';
$string['bracketfirst'] = '{$a} (đầu tiên)';
$string['bracketlast'] = '{$a} (cuối cùng)';
$string['configureblock'] = 'Thiết lập khối {$a}';
$string['contexts'] = 'Bối cảnh trang';
$string['contexts_help'] = 'Bối cảnh là những trang chuyên biệt hơn mà khối này có thể hiển thị bên trong vị trí khối ban đầu. Bạn sẽ các lựa chọn khác nhau tùy thuộc vào vị trí khối ban đầu và vị trí hiện tại của bạn. Ví dụ, bạn có thể giới hạn một khối chỉ xuất hiện trên các trang diễn đàn trong khóa học bằng cách thêm khối vào khóa học (khiến nó xuất hiện trên tất cả trang con), sau đó vào diễn đàn và chỉnh sửa lại các thiết lập khối để giới hạn hiển thị các trang diễn đàn.';
$string['createdat'] = 'Vị trí khối ban đầu';
$string['createdat_help'] = 'Vị trí ban đầu nơi mà khối đã được tạo. Thiết lập khối có thể khiến nó xuất hiện ở vị trí (bối cảnh) khác bên trong vị trí ban đầu. Ví dụ, một khối được tạo trên trang khóa học có thể hiển thị trong các hoạt động bên trong khóa học đó. Một khối được tạo trên trang chủ có thể được hiển thị toàn trang.';
$string['defaultregion'] = 'Vùng mặc định';
$string['defaultregion_help'] = 'Chủ đề có thể xác định một hoặc nhiều vùng khối có tên mà các khối được hiển thị. Thiết lập này xác định những cái nào mà bạn muốn khối này xuất hiện mặc định. Vùng có thể được thay thế ở các trang chuyên biệt nếu có yêu cầu.';
$string['defaultweight'] = 'Hạ đặt mặc định';
$string['defaultweight_help'] = 'Hạ đặt mặc định cho phép bạn chọn nơi khối xuất hiện trong vùng mặc định, hoặc là trên cùng hoặc dưới cùng. Vị trí cuối cùng được tính từ tất cả các khối trong vùng đó (ví dụ, chỉ một khối có thể ở trên cùng). Giá trị này có thể được thay thế trên các trang chuyên biệt nếu cần.';
$string['deleteblock'] = 'Xóa khối {$a}';
$string['deleteblockcheck'] = 'Bạn có chắc rằng muốn xóa khối có tiêu đề {$a}?';
$string['deleteblockwarning'] = '<p>Bạn định xóa một khối có thể xuất hiện ở đâu đó.</p><p>Vị trí khối ban đầu: {$a->location}<br />Hiển thị trên các loại trang: {$a->pagetype}</p><p>Bạn có muốn tiếp tục?</p>';
$string['deletecheck'] = 'Xóa khối {$a}?';
$string['dockblock'] = 'Bốc xếp khối {$a}?';
$string['hideblock'] = 'Ẩn khối {$a}';
$string['hidedockpanel'] = 'Ẩn bảng bốc xếp';
$string['hidepanel'] = 'Ẩn bảng';
$string['moveblock'] = 'Chuyển khối {$a}';
$string['moveblockafter'] = 'Chuyển đến sau khối {$a}';
$string['moveblockbefore'] = 'Chuyển đến trước khối {$a}';
$string['moveblockinregion'] = 'Chuyển đến khu vực {$a}';
$string['movingthisblockcancel'] = 'Đang chuyển khối ({$a}) này';
$string['myblocks'] = 'Các khối của tôi';
$string['onthispage'] = 'Trên trang này';
$string['pagetypes'] = 'Các thể loại trang';
$string['pagetypewarning'] = 'Loại trang được chỉ định trước đó không còn được lựa chọn. Hãy chọn loại trang phù hợp nhất bên dưới.';
$string['privacy:metadata:userpref:hiddenblock'] = 'Lưu trữ khi người dùng kéo sập/ẩn khối.';
$string['privacy:request:blockishidden'] = 'Chỉ rõ khối có bị sập/ẩn không.';
$string['region'] = 'Vùng';
$string['restrictpagetypes'] = 'Hiển thị trên các loại trang';
$string['showblock'] = 'Hiện khối {$a}';
$string['showoncontextandsubs'] = 'Hiển thị trên \'{$a}\' và bất kì trang nào bên trong nó';
$string['showoncontextonly'] = 'Chỉ hiển thị trên \'{$a}\'';
$string['showonentiresite'] = 'Hiển thị toàn trang';
$string['showonfrontpageandsubs'] = 'Hiển thị trên trang chủ và bất kì trang nào được thêm vào trang chủ';
$string['showonfrontpageonly'] = 'Chỉ hiển thị trên trang chủ';
$string['subpages'] = 'Chọn các trang';
$string['thisspecificpage'] = 'Trang chuyên biệt này';
$string['undockall'] = 'Bốc dỡ tất cả';
$string['undockblock'] = 'Dỡ bỏ khối {$a}';
$string['undockitem'] = 'Dỡ bỏ mục này';
$string['visible'] = 'Hiện hữu';
$string['weight'] = 'Hạ đặt';
$string['wherethisblockappears'] = 'Nơi khối này xuất hiện';
