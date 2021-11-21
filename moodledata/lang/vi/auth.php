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
 * Strings for component 'auth', language 'vi', version '3.11'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Các trình bổ trợ chứng thực có sẵn';
$string['allowaccountssameemail'] = 'Cho phép các tài khoản có cùng email';
$string['allowaccountssameemail_desc'] = 'Nếu kích hoạt, hơn một tài khoản của người dùng có thể dùng chung địa chỉ email. Điều này có thể gặp phải các vấn đề về bảo mật và quyền riêng tư, ví dụ như email xác nhận thay đổi mật khẩu.';
$string['alternatelogin'] = 'Nếu bạn nhập một URL ở đây, nó sẽ được sử dụng làm trang đăng nhập cho trang này. Trang nên chứa một biểu mẫu có thuộc tính action được đặt là <strong>\'{$a}\'</strong> và trả về các mục <strong>username</strong> và <strong>password</strong>.<br />Hãy cẩn thận không nhập URL sai bởi có thể bạn sẽ tự khóa chính mình ra khỏi trang.<br />Để trống thiết lập này để sử dụng trang đăng nhập mặc định.';
$string['alternateloginurl'] = 'URL đăng nhập thay thế';
$string['auth_changepasswordhelp'] = 'Trợ giúp đổi mật khẩu';
$string['auth_changepasswordhelp_expl'] = 'Hiển thị trợ giúp mất mật khẩu cho những người dùng làm mất mật khẩu {$a} của mình. Nó sẽ được hiển thị thay cho <strong>URL đổi mật khẩu</strong> hoặc đổi mật khẩu nội bộ Moodle.';
$string['auth_changepasswordurl'] = 'Đổi URL đặt mật khẩu';
$string['auth_changepasswordurl_expl'] = 'Chỉ định url cho những người dùng làm mất mật khẩu {$a} của mình. Đặt <strong>Dùng trang đổi mật khẩu chuẩn</strong> thành <strong>Không</strong>.';
$string['auth_changingemailaddress'] = 'Bạn đã yêu cầu thay đổi địa chỉ email, từ {$a->oldemail} sang {$a->newemail}. Vì lí do bảo mật, chúng tôi gửi thư đến địa chỉ mới nhằm xác nhận xem có thuộc sở hữu của bạn. Địa chỉ email của bạn sẽ được cập nhật ngay khi bạn mở URL được gửi trong thư.';
$string['auth_common_settings'] = 'Thiết lập chung';
$string['auth_data_mapping'] = 'Bản đồ hoá dữ liệu';
$string['auth_fieldlock'] = 'Giá trị khoá';
$string['auth_fieldlock_expl'] = '<p><b>Trị khóa:</b> Nếu được kích hoạt, sẽ ngăn người dùng và quản trị viên Moodle chỉnh sửa mục trực tiếp. Dùng lựa chọn này nếu bạn đang duy trì dữ liệu này trong hệ thống khóa ngoài. </p>';
$string['auth_fieldlockfield'] = 'Trị khóa ({$a})';
$string['auth_fieldlocks'] = 'Khoá các trường của người dùng';
$string['auth_fieldlocks_help'] = '<p>Bạn có thể khóa các mục dữ liệu người dùng. Hữu dụng với các trang mà dữ liệu người dùng được duy trì thủ công bởi các quản trị viên bằng cách chỉnh sửa bản ghi người dùng hay đăng tải sử dụng tính năng \'Đăng tải người dùng\'. Nếu bạn khóa các trường vốn được Moodle yêu cầu, hãy đảm bảo rằng bạn cung cấp dữ liệu đó khi tạo lập tài khoản người dùng bằng không các tài khoản sẽ không sử dụng được.</p><p>Xem xét đặt chế độ khóa sang \'Mở khóa nếu trống\' để tránh vấn đề này.</p>';
$string['auth_fieldmapping'] = 'Sơ đồ dữ liệu ({$a})';
$string['auth_invalidnewemailkey'] = 'Lỗi: nếu bạn đang cố xác nhận thay đổi địa chỉ email, bạn có thể mắc lỗi trong việc sao chép URL mà chúng tôi gửi qua email cho bạn. Hãy sao chép địa chỉ đó và thử lại.';
$string['auth_multiplehosts'] = 'Có thể nhập nhiều hosts hay địa chỉ (thí dụ: host1.com; host2.com; host3.com) hay (xxx.xxx.xxx.xxx; xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Phương thức xác thực {$a} chưa được thiết lập.';
$string['auth_outofnewemailupdateattempts'] = 'Bạn đã hết số lần thử cập nhật địa chỉ email của mình. Yêu cầu cập nhật của bạn đã bị hủy.';
$string['auth_passwordisexpired'] = 'Mật khẩu hết hạn. Bạn có muốn đổi mật khẩu bây giờ không?';
$string['auth_passwordwillexpire'] = 'Mật khẩu của bạn sẽ hết hạn trong {$a} ngày. Bạn có muốn đổi mật khẩu ngay bây giờ?';
$string['auth_remove_delete'] = 'Xoá toàn bộ phần cục bộ';
$string['auth_remove_keep'] = 'Giữ phần cục bộ';
$string['auth_remove_suspend'] = 'Tạm treo phần cục bộ';
$string['auth_remove_user'] = 'Chỉ định bạn muốn làm gì với tài khoản người dùng bên trong suốt quá trình đồng bộ hóa khối khi người dùng bị xóa từ nguồn bên ngoài. Chỉ những người dùng bị đình chỉ được phục hồi tự động nếu họ tái xuất hiện ở nguồn bên ngoài.';
$string['auth_remove_user_key'] = 'Bỏ người dùng bên ngoài';
$string['auth_sync_script'] = 'Đoạn mã đồng bộ hoá cron';
$string['auth_updatelocal'] = 'Cập nhật cục bộ (local)';
$string['auth_updatelocal_expl'] = '<p><b>Cập nhật cục bộ:</b> Nếu được kích hoạt, mục sẽ được cập nhật (từ xác thực ngoài) mỗi khi người dùng đăng nhập hoặc có đồng bộ hóa người dùng. Các mục được thiết đặt cập nhật cục bộ nên khóa lại.</p>';
$string['auth_updatelocalfield'] = 'Cập nhật cục bộ ({$a})';
$string['auth_updateremote'] = 'Cập nhật ngoại biên (external)';
$string['auth_updateremote_expl'] = '<p><b>Cập nhật ngoài:</b> Nếu được kích hoạt, xác thực ngoại sẽ được cập nhật khi bản ghi người dùng được cập nhật. Các mục nên được giải khóa để cho phép chỉnh sửa.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Chú ý:</b> Cập nhật dư liệu LDAP bên ngoại yêu cầu bạn thiết đặt binddn và bindpw cho một người dùng bind có quyền chỉnh sửa tất cả bản ghi người dùng. Hiện tại nó không lưu giữ các thuộc tính đa trị, và sẽ xóa các giá trị gia tăng khi cập nhật. </p>';
$string['auth_updateremotefield'] = 'Cập nhật ngoại biên  ({$a})';
$string['auth_user_create'] = 'Kích hoạt chức năng tạo người dùng';
$string['auth_user_creation'] = 'Người dùng mới (vô danh) có thể tạo tài khoản từ nguồn xác thực ngoại và xác nhận qua email. Nếu bạn kích hoạt, nhớ thiết lập các lựa chọn mô-đun chuyên biệt dành cho việc tạo lập người dùng.';
$string['auth_usernameexists'] = 'Tài khoản được chọn đã tồn tại. Hãy chọn một cái khác.';
$string['auth_usernotexist'] = 'Không thể cập nhật tài khoản không tồn tại này: {$a}';
$string['authenticationoptions'] = 'Tùy chọn xác thực';
$string['authinstructions'] = 'Để trống nhằm hiển thị chỉ dẫn đăng nhập mặc định trên trang đăng nhập. Nếu bạn muốn cung cấp chỉ dẫn đăng nhập tùy ý, nhập chúng vào đây.';
$string['authloginviaemail'] = 'Cho phép đăng nhập qua email';
$string['authloginviaemail_desc'] = 'Cho phép người dùng sử dụng tên tài khoản và địa chỉ email (nếu duy nhất) để đăng nhập trang.';
$string['auto_add_remote_users'] = 'Tự động thêm người dùng từ xa';
$string['changepassword'] = 'Thay URL mật khẩu';
$string['changepasswordhelp'] = 'Tại đây bạn có thể chỉ định vị trí mà người dùng có thể phục hồi hay thay đổi tài khoản/mật khẩu nếu họ quên. Nó sẽ cung cấp cho người dùng một nút trên trang đăng nhập và trên trang của họ. Nếu để trống nút đó sẽ không hiển thị.';
$string['chooseauthmethod'] = 'Chọn một phương thức chứng thực';
$string['chooseauthmethod_help'] = 'Thiết lập này xác định phương thức xác thực được sử dụng khi người dùng đăng nhập. Chỉ nên chọn các trình bổ trợ có kích hoạt xác thực, bằng không người dùng sẽ không thể đăng nhập. Để chặn người dùng đăng nhập, chọn "Không đăng nhập".';
$string['createpassword'] = 'Tạo mật khẩu và thông báo người dùng';
$string['createpasswordifneeded'] = 'Tạo mật khẩu nếu cần';
$string['emailchangecancel'] = 'Huỷ việc thay đổi điện thư';
$string['emailchangepending'] = 'Chờ duyệt thay đổi. Mở liên kết được gửi cho bạn tại {$a->preference_newemail}.';
$string['emailnowexists'] = 'Địa chỉ email mà bạn cố đưa vào hồ sơ của mình đã được đưa vào ai khác kể từ yêu cầu ban đầu. Yêu cầu thay đổi địa chỉ email của bạn vì thế mà bị hủy, nhưng bạn có thể thử lại với địa chỉ khác.';
$string['emailupdate'] = 'Cập nhật địa chỉ điện thư';
$string['emailupdatemessage'] = 'Gửi {$a->fullname},

Bạn đã yêu cầu thay đổi địa chỉ email cho tài khoản người dùng của bạn tại {$a->site}. Hãy mở URL sau trong trình duyệt của bạn nhằm xác nhận  thay đổi này.

{$a->url}';
$string['emailupdatesuccess'] = 'Địa chỉ email của người dùng <em>{$a->fullname}</em> đã được cập nhật thành <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Xác định thư điện đã được cập nhật tại {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Mật khẩu phải có ít nhất là {$a} ký tự định dạng khác nhau.';
$string['errorminpassworddigits'] = 'Mật khẩu phải có ít nhất là {$a} ký tự số.';
$string['errorminpasswordlength'] = 'Mật khẩu phải có chiều dài ít nhất là {$a} ký tự.';
$string['errorminpasswordlower'] = 'Mật khẩu phải có ít nhất là {$a} ký tự viết thường.';
$string['errorminpasswordnonalphanum'] = 'Mật khẩu phải có ít nhất là {$a} ký tự dạng chữ.';
$string['errorminpasswordupper'] = 'Mật khẩu phải có ít nhất là {$a} ký tự viết hoa.';
$string['errorpasswordreused'] = 'Mật khẩu này đã được dùng trước đó, và không được phép tái sử dụng';
$string['errorpasswordupdate'] = 'Lỗi khi cập nhật mật khẩu, mật khẩu chưa được đổi';
$string['eventuserloggedin'] = 'Người dùng đã đăng nhập';
$string['eventuserloggedinas'] = 'Người dùng đăng nhập như một người dùng khác';
$string['eventuserloginfailed'] = 'Người dùng đăng nhập bất thành';
$string['forcechangepassword'] = 'Bắt buộc thay đổi mật khẩu';
$string['forcechangepassword_help'] = 'Bắt buộc thay đổi mật khẩu khi người dùng đăng nhập Moodle lần kế tiếp';
$string['forcechangepasswordfirst_help'] = 'Bắt buộc thay đổi mật khẩu khi người dùng đăng nhập Moodle lần đầu';
$string['forgottenpassword'] = 'Nếu bạn nhập một URL ở đây, nó sẽ được sử dụng làm trang phục hồi mật khẩu cho trang này. Việc này dự định cho các trang nơi mà mật khẩu được kiểm soát hoàn toàn ngoài Moodle. Để trống nhằm sử dụng phục hồi mật khẩu mặc định.';
$string['forgottenpasswordurl'] = 'Quên URL mật khẩu';
$string['getrecaptchaapi'] = 'Để dùng reCAPTCHA bạn phải có khóa API từ <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Nút đăng nhập cho khách';
$string['incorrectpleasetryagain'] = 'Sai. Vui lòng thử lại.';
$string['infilefield'] = 'Trường phải có trong tập tin';
$string['informminpassworddigits'] = 'ít nhất {$a} con số';
$string['informminpasswordlength'] = 'ít nhất {$a} ký tự';
$string['informminpasswordlower'] = 'ít nhất {$a} ký tự viết thường';
$string['informminpasswordnonalphanum'] = 'ít nhất {$a} ký tự không phải số';
$string['informminpasswordreuselimit'] = 'Mật khẩu có thể được tái sử dụng sau {$a} lần đổi';
$string['informminpasswordupper'] = 'ít nhất {$a} ký tự viết hoa';
$string['informpasswordpolicy'] = 'Mật khẩu phải có {$a}';
$string['instructions'] = 'Hướng dẫn';
$string['internal'] = 'Cục bộ';
$string['limitconcurrentlogins'] = 'Giới hạn số đăng nhập đồng thời';
$string['limitconcurrentlogins_desc'] = 'Nếu được kích hoạt thì số trình duyệt đăng nhập đồng thời cho mỗi người dùng bị giới hạn. Phiên hoạt động cũ nhất sẽ bị ngắt khi đạt ngưỡng, chú ý rằng người dùng có thể mất tất cả công việc chưa được lưu lại. Thiết lập này không tương thích với các trình bổ trợ xác thực đăng nhập một lần (SSO).';
$string['locked'] = 'Đã khoá';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'Mật khẩu không thể thay đổi';
$string['nopasswordchangeforced'] = 'Bạn không thể tiếp tục mà không thay đổi mật khẩu của mình, tuy nhiên không có trang tương ứng để thay đổi nó. Hãy liên hệ Quản trị viên Moodle của bạn.';
$string['noprofileedit'] = 'Hồ sơ không thể được cập nhật';
$string['ntlmsso_attempting'] = 'Đang thử Đăng nhập một lần thông qua NTLM..';
$string['ntlmsso_failed'] = 'Không thể tự động đăng nhập, hãy thử trang đăng nhập thông thường...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO chưa được kích hoạt.';
$string['passwordhandling'] = 'Kiểm soát trường mật khẩu';
$string['plaintext'] = 'Văn bản đơn giản';
$string['pluginnotenabled'] = 'Plugin chứng thực \'{$a}\' chưa được kích hoạt.';
$string['pluginnotinstalled'] = 'Plugin chứng thực \'{$a}\' chưa được cài.';
$string['potentialidps'] = 'Đăng nhập bằng tài khoản của bạn trên:';
$string['privacy:metadata:userpref:createpassword'] = 'Chỉ ra cần tạo mật khẩu cho người dùng';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Số lần người dùng đăng nhập bất thành';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Số lần người dùng đăng nhập bất thành kể từ lần cuối đăng nhập thành công';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Ngày mà lần cuối đăng nhập bất thành được lưu lại';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA nhằm ngăn ngừa việc lạm dụng các phần mềm tự động. Đơn giản là nhập các từ trong khung, theo thứ tự và ngăn cách bởi một khoảng trắng.

Nếu bạn không chắc về những từ này, có thể lấy CAPTCHA khác hoặc CAPTCHA âm thanh.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Câu hỏi bảo mật';
$string['selfregistration'] = 'Tự đăng ký';
$string['selfregistration_help'] = 'Nếu một trình bổ trợ xác thực, như tự đăng kí dựa theo email, được lựa chọn, nó sẽ cho phép các người dùng tiềm năng tự đăng kí và tạo tài khoản. Gây ra khả năng spammer tạo tài khoản sử dụng bài viết diễn đàn, mục blog v.v để spam. Để tránh rủi ro này, tự đăng kí nên được vô hiệu hóa hoặc giới hạn bởi thiết lập <em>Các tên miền email được cho phép</em>.';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Bạn có thể ẩn hoặc hiện nút đăng nhập khách trên trang đăng nhập.';
$string['stdchangepassword'] = 'Sử dụng trang chuẩn để thay đổi mật khẩu.';
$string['stdchangepassword_expl'] = 'Nếu hệ thống xác thực ngoại cho phép thay đổi mật khẩu thông qua Moodle, chuyển nó sang Yes. Thiết lập này thay thế \'Thay đổi URL mật khẩu\'.';
$string['stdchangepassword_explldap'] = 'CHÚ Ý: Khuyến khích bạn sử dụng LDAP thông qua hầm SSL mã hóa (ldaps://) nếu máy chủ LDAP là từ xa.';
$string['suspended'] = 'Tài khoản bị đình chỉ';
$string['suspended_help'] = 'Các tài khoản người dùng bị đình chỉ không thể đăng nhập để sử dụng các dịch vụ web, và bất cứ tin nhắn nào gửi đi đều bị bỏ qua.';
$string['testsettings'] = 'Các thiết lập thử nghiệm';
$string['testsettingsheading'] = 'Thử nghiệm các thiết lập xác thực - {$a}';
$string['unlocked'] = 'Mở khoá';
$string['unlockedifempty'] = 'Mở khoá nếu để trống';
$string['update_never'] = 'Không thời hạn';
$string['update_oncreate'] = 'Khi được tạo';
$string['update_onlogin'] = 'Mỗi lần đăng nhập';
$string['update_onupdate'] = 'Khi cập nhật';
$string['user_activatenotsupportusertype'] = 'xác thực: ldap user_activate() không hỗ trợ loại người dùng được chọn:  {$a}';
$string['user_disablenotsupportusertype'] = 'xác thực: ldap user_disable() không hỗ trợ lại người dùng được chọn (..còn nữa)';
$string['username'] = 'Tên tài khoản';
$string['username_help'] = 'Xin lưu ý rằng một số trình bổ trợ xác thực sẽ không cho phép bạn thay tên tài khoản.';
