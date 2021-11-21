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
 * Strings for component 'videotime', language 'vi', version '3.11'.
 *
 * @package     videotime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = 'Tên hoạt động';
$string['activity_name_help'] = 'Tên hiển thị trong khóa học cho mô-đun Thời gian hoạt động này.';
$string['albums'] = 'Tập album';
$string['api_not_authenticated'] = 'Vimeo API không được xác thực.';
$string['api_not_configured'] = 'Vimeo API không được xác thực.';
$string['apply'] = 'Áp dụng';
$string['authenticate_vimeo'] = 'Xác thực bằng Vimeo';
$string['authenticate_vimeo_success'] = 'Xác thực Vimeo thành công. Giờ đây, bạn có thể sử dụng các tính năng dựa trên API Vimeo.';
$string['authenticated'] = 'Đã xác thực';
$string['averageviewtime'] = 'Thời gian xem trung bình';
$string['browsevideos'] = 'Duyệt video';
$string['choose_video'] = 'Chọn video';
$string['choose_video_confirm'] = 'Bạn có chắc chắn muốn chọn video không';
$string['cleanupalbumsandtags'] = 'Dọn dẹp album và thẻ';
$string['client_id'] = 'ID người dùng Vimeo';
$string['client_id_help'] = 'ID người dùng được tạo khi bạn tạo "Ứng dụng" trong tài khoản Vimeo của mình. Truy cập https://developer.vimeo.com/apps/new để bắt đầu quá trình này.';
$string['client_secret'] = 'Vimeo bí mật người dùng';
$string['client_secret_help'] = 'Bí mật người dùng được tạo khi bạn tạo "Ứng dụng" trong tài khoản Vimeo của mình. Truy cập https://developer.vimeo.com/apps/new để bắt đầu quá trình này.';
$string['columns'] = 'Cột';
$string['columns_help'] = 'Chọn chiều rộng cho video này khi hiển thị ở chế độ xem trước. Số cột là số lượng video có thể được hiển thị trong một hàng.';
$string['completion_on_finish'] = 'Hoàn thành khi kết thúc video';
$string['completion_on_percent'] = 'Lượng hoàn thành dựa trên số phần trăm đã xem';
$string['completion_on_percent_value'] = 'Lượng hoàn thành trên giá trị phần trăm xem';
$string['completion_on_view'] = 'Thời gian xem đã Hoàn thành';
$string['completion_on_view_seconds'] = 'Hoàn thành dựa trên giây (thời gian) đã xem';
$string['configure_vimeo_first'] = 'Bạn phải xác định cấu hình Ứng dụng Vimeo trước khi xác thực.';
$string['configure_vimeo_help'] = '<ol> <li> Truy cập <a href="https://developer.vimeo.com/apps/new"> https://developer.vimeo.com/apps/new </a> và đăng nhập bằng tài khoản Vimeo của bạn  </li>
<li> Nhập tên và mô tả cho ứng dụng của bạn. Ví dụ: API kho lưu trữ thời lượng video </li>
<li> Đảm bảo chọn hộp kiểm "Không. Các tài khoản Vimeo duy nhất có quyền truy cập vào ứng dụng là chỉ riêng tôi" được chọn </li>
<li> Đồng ý với Điều khoản dịch vụ của Vimeo và nhấp vào "Tạo ứng dụng" </li>
<li> Bây giờ bạn sẽ được đưa đến ứng dụng mới của mình </li>
<li> Nhấp vào "Chỉnh sửa cài đặt" </li>
<li> Nhập mô tả Ứng dụng, mô tả này sẽ được hiển thị cho quản trị viên khi xác thực bằng Vimeo </li>
<li> Nhập URL ứng dụng, URL đó phải được đặt thành <b>{$a->redirect_url}</b> </li>
<li> Nhấp vào "Cập nhật" </li>
<li> Thêm URL trở lại, URL đó phải được đặt thành <b>{$a->redirect_url}</b> </li>
<li> Sao chép Mã nhận dạng khách hàng (gần trên cùng) và Bí mật khách hàng (Quản lý bí mật khách hàng) </li>
<li> Nhập ID khách hàng và bí mật khách hàng <a href="{$a-> configure_url} "> tại đây </a> </li> </ol>';
$string['confirmation'] = 'Xác nhận';
$string['create_vimeo_app'] = 'Tạo ứng dụng Vimeo';
$string['currentwatchtime'] = 'Thời gian xem hiện tại';
$string['datasource:videotime_sessions_data_source'] = 'Phiên thời gian video';
$string['datasource:videotime_stats_data_source'] = 'Số liệu thống kê về thời gian video';
$string['default'] = 'Mặc định';
$string['deletesessiondata'] = 'Xóa dữ liệu phiên';
$string['discover_videos'] = 'Khám phá video Vimeo';
$string['discovering_videos'] = 'Khám phá {$ a-> count} video';
$string['display_options'] = 'Tùy chọn hiển thị';
$string['done'] = 'Hoàn thành';
$string['duration'] = 'Thời lượng';
$string['embed_options'] = 'Tùy chọn nhúng';
$string['embed_options_defaults'] = 'Tùy chọn nhúng mặc định';
$string['embeds'] = 'Nhúng';
$string['estimated_request_time'] = 'Thời gian còn lại ước tính';
$string['firstsession'] = 'Phiên/Buổi đầu tiên';
$string['force'] = 'Cài đặt Bắt buộc';
$string['force_help'] = 'Nếu được chọn, mặc định này sẽ ghi đè phiên bản cài đặt.';
$string['goback'] = 'Quay lại';
$string['gradeitemnotcreatedyet'] = 'Một mục trong sổ điểm không tồn tại cho hoạt động này. Chọn <b> Đặt điểm bằng tỷ lệ phần trăm đã xem </b> ở trên, lưu và chỉnh sửa lại hoạt động này để đặt loại điểm và điểm đạt.';
$string['insert_video_metadata'] = 'Chèn siêu dữ liệu từ video (có thể ghi đè cài đặt hoạt động)';
$string['invalid_session_state'] = 'Trạng thái phiên không hợp lệ.';
$string['label_mode'] = 'chế độ Label';
$string['lastsession'] = 'Phiên cuối cùng';
$string['mode'] = 'Chế độ';
$string['mode_help'] = '<b> Chế độ bình thường </b>: Hiển thị liên kết hoạt động tiêu chuẩn, không có phần bổ sung trên trang khóa học. <br>
<b> Chế độ label</b>: Nhúng video vào bố cục khóa học, tương tự như hoạt động label. <br>
<b> Chế độ hình ảnh xem trước </b>: Hiển thị hình thu nhỏ video trên trang khóa học liên kết đến hoạt động (chỉ với Kho Thời gian Video).';
$string['modulename'] = 'Thời gian Video';
$string['modulename_help'] = 'Hoạt động Video Time Pro cho phép giáo viên
<ul>
     <li> để dễ dàng nhúng video từ Vimeo, chỉ bằng cách thêm url </li>
     <li> để thêm nội dung bên trên và bên dưới của trình phát video </li>
     <li> theo dõi thời gian xem của người dùng bằng cách sử dụng hoạt động hoàn thiện </li>
     <li> nhận thông tin chi tiết về thời gian xem của từng người dùng </li>
     <li> đặt các tùy chọn nhúng mặc định cho plugin </li>
     <li> và ghi đè các tùy chọn nhúng của phiên bản trên toàn cầu. </li>
</ul>

Chúng tôi liên tục cải tiến plugin, vì vậy hãy theo dõi các phiên bản sắp tới. Bạn có thể xem những gì chúng tôi đang làm và  yêu cầu thêm các tính năng vào lộ trình công khai của chúng tôi trên <a href="https://bdecent.de/products/videotimepro/roadmap"> https://bdecent.de/products/videotimepro/ lộ trình </a>.

Vui lòng cho chúng tôi biết nếu bạn có bất kỳ phản hồi nào cho chúng tôi.';
$string['modulenameplural'] = 'Phiên bản Thời gian Video';
$string['more'] = 'Thêm';
$string['needs_authentication'] = 'Cần xác thực lại';
$string['next_activity'] = 'Hoạt động tiếp theo';
$string['next_activity_auto'] = 'Tự động chuyển đến hoạt động tiếp theo';
$string['next_activity_auto_help'] = 'Tự động tải hoạt động tiếp theo khi học sinh hoàn thành video.';
$string['next_activity_button'] = 'Bật nút hoạt động tiếp theo';
$string['next_activity_button_help'] = 'Hiển thị một nút phía trên video liên kết đến hoạt động tiếp theo mà người dùng cần hoàn thành.';
$string['next_activity_in_course'] = 'Mặc định: Hoạt động tiếp theo trong khóa học';
$string['normal_mode'] = 'Chế độ bình thường';
$string['not_authenticated'] = 'chưa được xác thực';
$string['of'] = 'thuộc';
$string['option_autoplay'] = 'tự động phát';
$string['option_autoplay_help'] = 'Tự động bắt đầu phát lại video. Lưu ý rằng điều này sẽ không chạy trên một số thiết bị hoặc trình duyệt chặn nó.';
$string['option_byline'] = 'Hàng tên tác giả';
$string['option_byline_help'] = 'Hiển thị dòng tên tác giả bên trên video.';
$string['option_color'] = 'Màu sắc';
$string['option_color_help'] = 'Chỉ định màu của bộ điều khiển video. Màu sắc có thể bị ghi đè bởi cài đặt nhúng của video.';
$string['option_forced'] = '{$ a-> option} buộc phải trở thành: {$ a-> value}';
$string['option_height'] = 'Chiều cao';
$string['option_height_help'] = 'Chiều cao chính xác của video. Mặc định là chiều cao của phiên bản video lớn nhất hiện có.';
$string['option_maxheight'] = 'Chiều cao tối đa';
$string['option_maxheight_help'] = 'Giống như chiều cao, nhưng sẽ không vượt quá kích thước gốc của video.';
$string['option_maxwidth'] = 'chiều rộng tối đa';
$string['option_maxwidth_help'] = 'Giống như chiều rộng, nhưng video sẽ không vượt quá kích thước gốc của video.';
$string['option_muted'] = 'Đã tắt tiếng';
$string['option_muted_help'] = 'Tắt tiếng video này khi tải. Bắt buộc để tự động phát trong một số trình duyệt nhất định.';
$string['option_playsinline'] = 'Phát nội tuyến';
$string['option_playsinline_help'] = 'Phát video nội tuyến trên thiết bị di động, để tự động chuyển sang chế độ toàn màn hình khi phát lại, hãy đặt thông số này thành false.';
$string['option_portrait'] = 'Chân dung';
$string['option_portrait_help'] = 'Hiển thị chân dung trên video.';
$string['option_responsive'] = 'Thích ứng';
$string['option_responsive_help'] = 'Nếu được chọn, trình phát video sẽ phản hồi và thích ứng với kích thước trang hoặc màn hình.';
$string['option_speed'] = 'Tốc độ';
$string['option_speed_help'] = 'Hiển thị các điều khiển tốc độ trong menu tùy chọn và bật API tốc độ phát lại (khả dụng cho tài khoản PRO và Business).';
$string['option_title'] = 'Tiêu đề';
$string['option_title_help'] = 'Hiển thị tiêu đề trên video.';
$string['option_transparent'] = 'Trong suốt';
$string['option_transparent_help'] = 'Trình phát đáp ứng và nền trong suốt được bật theo mặc định, để tắt, hãy đặt thông số này thành false.';
$string['option_width'] = 'Chiều rộng';
$string['option_width_help'] = 'Chiều rộng chính xác của video. Mặc định là chiều rộng của phiên bản video lớn nhất hiện có.';
$string['percentageofvideofinished'] = 'Phần trăm video đã hoàn thành';
$string['pluginadministration'] = 'Quản lý thời gian video';
$string['pluginname'] = 'Thời gian Video';
$string['preview_mode'] = 'Xem trước chế độ hình ảnh';
$string['preview_picture'] = 'Xem trước hình ảnh';
$string['preview_picture_help'] = 'Hình ảnh hiển thị cho người dùng.';
$string['preview_picture_linked'] = 'Xem trước hình ảnh được liên kết';
$string['preview_picture_url'] = 'Xem trước URL hình ảnh';
$string['privacy:metadata'] = 'Mô-đun thời gian hoạt động video không lưu trữ bất kỳ dữ liệu cá nhân nào.';
$string['process_videos'] = 'Xử lý video';
$string['process_videos_help'] = 'Video sẽ được xử lý thông qua tác vụ đã lên lịch. Đối với các tài khoản Vimeo lớn hơn, có thể mất thời gian để xử lý đầy đủ tất cả các video.';
$string['pull_from_vimeo'] = 'Kéo siêu dữ liệu từ Vimeo';
$string['pull_from_vimeo_invalid_videoid'] = 'Không thể xác định ID video. Đảm bảo bạn đã nhập URL Vimeo (Ví dụ: https://vimeo.com/635473456).';
$string['pull_from_vimeo_loading'] = 'Đang kéo siêu dữ liệu từ Vimeo ...';
$string['pull_from_vimeo_success'] = 'Siêu dữ liệu đã được lấy thành công từ Vimeo. Một số cài đặt hoạt động đã bị ghi đè.';
$string['rate_limit'] = 'Giới hạn yêu cầu API Vimeo';
$string['refreshpage'] = 'Vui lòng làm mới trang của bạn để xem hoạt động trùng lặp';
$string['results'] = 'các kết quả';
$string['resume_playback'] = 'Tiếp tục phát lại';
$string['resume_playback_help'] = 'Tự động tiếp tục video khi người dùng quay lại hoạt động. Phát lại bắt đầu từ nơi người dùng đã dừng lại.';
$string['run_discovery_task'] = 'Chạy tác vụ "Khám phá video Vimeo" này để bắt đầu lấy dữ liệu video của bạn. Nếu không, bạn có thể đợi cho đến khi nó chạy tự động.';
$string['search:activity'] = 'VideoTime - thông tin hoạt động';
$string['search_help'] = 'Tìm kiếm tên, mô tả, album, thẻ ...';
$string['seconds'] = 'Giây';
$string['session_not_found'] = 'Không tìm thấy phiên người dùng.';
$string['set_client_id_and_secret'] = 'Đặt mật khẩu và ID khách hàng';
$string['settings'] = 'Cài đặt thời gian video';
$string['setup_repository'] = 'Thiết lập kho lưu trữ';
$string['show_description'] = 'Hiển thị mô tả';
$string['show_duration'] = 'Hiển thị thời lượng';
$string['show_tags'] = 'Hiển thị thẻ';
$string['show_title'] = 'Hiển thị tiêu đề';
$string['show_viewed_duration'] = 'Hiển thị thời lượng đã xem';
$string['showdescription'] = 'Hiển thị mô tả';
$string['showdescription_help'] = 'Mô tả được hiển thị phía trên video và có thể được hiển thị trong trang khóa học.';
$string['showing'] = 'Hiển thị';
$string['state'] = 'Trạng thái';
$string['state_finished'] = 'Đã kết thúc';
$string['state_help'] = 'Người dùng đã xem xong video chưa?';
$string['state_incomplete'] = 'chưa hoàn thiện';
$string['status'] = 'Tình trạng';
$string['store_pictures'] = 'Lưu trữ hình thu nhỏ';
$string['store_pictures_help'] = 'Nếu được bật, các hình thu nhỏ của Vimeo sẽ được lưu trữ cục bộ. Nếu không, hình ảnh sẽ được chuyển từ Vimeo ra bên ngoài.';
$string['subplugintype_videotimeplugin'] = 'Trình nhúng thời gian video';
$string['subplugintype_videotimeplugin_plural'] = 'Các Trình nhúng thời gian video';
$string['tablealias_vt'] = 'Thời gian Video';
$string['taskscheduled'] = 'Tác vụ được lên lịch cho lần chạy cron tiếp theo';
$string['timestarted'] = 'Ngày bắt đầu';
$string['todo'] = 'TODO';
$string['totaluniquevisitors'] = 'Tổng số khách truy cập';
$string['totalviews'] = 'Tổng số lượt xem';
$string['totara_video_discovery_help'] = '<p> Bạn có thể thực hiện tác vụ này theo cách thủ công bằng cách chạy lệnh CLI: </p>
<p> <b> / usr / bin / php admin / tool / task / cli / Sched_task.php --execute = \\\\ videotimeplugin_repository \\\\ task \\\\ explore_videos </b> </p>
<p> Nếu không, bạn có thể phải đợi cho đến khi tác vụ đã lên lịch chạy. </p>
<p> Bạn cũng có thể chạy lệnh để lấy thông tin album theo cách thủ công (thay vì chờ đợi): </p>
<p> <b> / usr / bin / php admin / tool / task / cli / Sched_task.php --execute = \\\\ videotimeplugin_repository \\\\ task \\\\ update_albums </b> </p>';
$string['update_albums'] = 'Cập nhật album video';
$string['upgrade_vimeo_account'] = 'LƯU Ý: Xem xét nâng cấp tài khoản Vimeo của bạn. Giới hạn yêu cầu API của bạn quá thấp.';
$string['use'] = 'Sử dụng';
$string['video_description'] = 'Ghi chú';
$string['video_description_help'] = 'Ghi chú được hiển thị bên dưới video.';
$string['videocreated'] = 'Video đã tạo';
$string['videos_discovered'] = 'Video được tìm thấy';
$string['videos_processed'] = 'Video đã xử lý';
$string['videotime:addinstance'] = 'Thêm mô-đun Thời gian video mới';
$string['videotime:view'] = 'Xem video Thời gian Video';
$string['videotime:view_report'] = 'Xem báo cáo (chỉ dành cho Pro)';
$string['videotimelink'] = 'Liên kết';
$string['videotimeurl'] = 'URL';
$string['view_report'] = 'Xem báo cáo';
$string['viewpercentgrade'] = 'Đặt điểm bằng với tỷ lệ phần trăm lượt xem.';
$string['viewpercentgrade_help'] = 'Tạo hạng mục cho video này. Học sinh sẽ nhận được điểm tương đương với tỷ lệ phần trăm xem video của họ.';
$string['views'] = 'Lượt xem';
$string['views_help'] = 'Số lần hoạt động đã được xem.';
$string['vimeo_overview'] = 'Tổng quan và thiết lập';
$string['vimeo_url'] = 'Vimeo URL';
$string['vimeo_url_help'] = 'URL đầy đủ của video Vimeo.';
$string['vimeo_url_invalid'] = 'URL Vimeo không hợp lệ. Sao chép trực tiếp từ trình duyệt web.';
$string['vimeo_url_missing'] = 'URL Vimeo chưa được đặt.';
$string['vimeo_video_not_found'] = 'Video không tồn tại trong cơ sở dữ liệu.';
$string['vimeo_video_not_processed'] = 'Video vẫn chưa được xử lý hoàn toàn. Vui lòng kiểm tra lại sau.';
$string['watch_percent'] = 'Phần trăm xem';
$string['watch_percent_help'] = 'Thời lượng dài nhất trong video mà học sinh đã xem.';
$string['watch_time'] = 'Thời lượng xem';
$string['watch_time_help'] = 'Tổng cộng học sinh đã xem video trong bao lâu (trong 5 bước).';
$string['with_play_button'] = 'với nút phát';
