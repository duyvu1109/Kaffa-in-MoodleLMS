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
 * Strings for component 'dbtransfer', language 'vi', version '3.11'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Đang kiểm tra cấu trúc bảng nguồn';
$string['copyingtable'] = 'Đang chép bảng {$a}';
$string['copyingtables'] = 'Đang chép nội dung bảng';
$string['creatingtargettables'] = 'Tạo các bảng ở CSDL đích';
$string['dbexport'] = 'Xuất CSDL';
$string['dbtransfer'] = 'Chuyển CSDL';
$string['differenttableexception'] = 'Cấu trúc bảng {$a} không phù hợp';
$string['done'] = 'Xong';
$string['exportschemaexception'] = 'Cấu trúc CSDL hiện tại không khớp với tất cả tệp install.xml. <br /> {$a}';
$string['importschemaexception'] = 'Cấu trúc CSDL hiện tại không khớp với tất cả tệp instal.xml. <br /> {$a}';
$string['importversionmismatchexception'] = 'Phiên bản hiện tại {$a->currentver} không khớp với phiên bản được xuất {$a->schemaver}.';
$string['malformedxmlexception'] = 'Tìm thấy XML không phù hợp, không thể tiếp tục';
$string['tablex'] = 'Bảng {$a}:';
$string['unknowntableexception'] = 'Tìm thấy bảng không rõ {$a} trong tập tin xuất.';
