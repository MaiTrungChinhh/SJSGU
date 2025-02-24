<?php return array (
  'emails.notification.subject' => 'Thông báo mới từ {$siteTitle}',
  'emails.notification.body' => 'Bạn có một thông báo mới từ {$siteTitle}:<br />
<br />
{$notificationContents}<br />
<br />
Link: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.description' => 'Email được gửi đến người dùng đã đăng ký đã chọn để gửi kiểu thông báo này qua email cho họ.',
  'emails.passwordResetConfirm.subject' => 'Xác nhận đặt lại mật khẩu',
  'emails.passwordResetConfirm.body' => 'Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu của bạn cho {$siteTitle}.<br />
<br />
Nếu bạn không thực hiện yêu cầu này, vui lòng bỏ qua email này và mật khẩu của bạn sẽ không bị thay đổi. Nếu bạn muốn đặt lại mật khẩu của mình, nhấp vào URL bên dưới.<br />
<br />
Đặt lại mật khẩu của tôi: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Email này được gửi đến người dùng đã đăng ký khi họ cho biết rằng họ đã quên mật khẩu hoặc không thể đăng nhập. Nó cung cấp một URL mà họ có thể theo dõi để đặt lại mật khẩu của họ.',
  'emails.userRegister.subject' => 'Đăng ký tạp chí',
  'emails.userRegister.body' => '{$userFullName}<br />
<br />
Bây giờ bạn đã được đăng ký là người dùng với {$contextName}. Chúng tôi đã gửi bao gồm tên người dùng và mật khẩu của bạn trong email này, điều này là cần thiết cho tất cả các công việc với tạp chí này thông qua trang web. Tại bất kỳ thời điểm nào, bạn có thể yêu cầu xóa khỏi danh sách người dùng của tạp chí bằng cách liên hệ với chúng tôi.<br />
<br />
Username: {$username}<br />
Password: {$password}<br />
<br />
Trân trọng,<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Email này được gửi đến một người dùng mới đăng ký để chào đón họ vào hệ thống và cung cấp cho họ một username và mật khẩu của họ.',
  'emails.userValidate.subject' => 'Xác thực tài khoản của bạn',
  'emails.userValidate.body' => '{$userFullName}<br />
<br />
Bạn đã tạo một tài khoản với {$contextName}, nhưng trước khi bạn có thể bắt đầu sử dụng nó, bạn cần xác thực tài khoản email của mình. Để làm điều này, chỉ cần truy cập liên kết dưới đây:<br />
<br />
{$activateUrl}<br />
<br />
Trân trọng,<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Email này được gửi đến một người dùng mới đăng ký để xác thực tài khoản email của họ.',
  'emails.reviewerRegister.subject' => 'Đăng ký làm Người phản biện cho {$contextName}',
  'emails.reviewerRegister.body' => 'Dựa theo chuyên môn của bạn, chúng tôi đã tự đăng ký tên của bạn trong cơ sở dữ liệu của người phản biện cho {$contextName}. Điều này không đòi hỏi bất kỳ hình thức cam kết nào từ phía bạn, mà chỉ cho phép chúng tôi tiếp cận bạn với một bài gửi để bạn có thể nhận xét. Khi được mời nhận xét, bạn sẽ có thể xem tiêu đề và tóm tắt của bài báo đang đề cập và bạn sẽ có thể chấp nhận hoặc từ chối lời mời. Bạn cũng có thể yêu cầu bất cứ lúc nào để xóa tên của bạn khỏi danh sách phản biện.<br />
<br />
Chúng tôi đang cung cấp cho bạn username và mật khẩu, được sử dụng trong tất cả các tương tác với tạp chí thông qua trang web. Bạn có thể muốn, ví dụ, để cập nhật hồ sơ của bạn, bao gồm cả lĩnh vực mà bạn đang quan tâm.<br />
<br />
Username: {$username}<br />
Password: {$password}<br />
<br />
Trân trọng,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Email này được gửi đến một người phản biện mới đăng ký để chào đón họ vào hệ thống và cung cấp cho họ một username và mật khẩu của họ.',
  'emails.publishNotify.subject' => 'Số mới được xuất bản',
  'emails.publishNotify.body' => 'Kính gửi quý độc giả:<br />
<br />
{$contextName} vừa xuất bản số mới nhất tại {$contextUrl}. Chúng tôi kính mời độc đọc tham khảo Mục lục tại đây và sau đó truy cập trang web của chúng tôi để xem chi tiết các bài viết và các bài bạn quan tâm.<br />
<br />
Trân trọng cảm ơn  và mong tiếp tục nhận được sự quan tâm của quý độc giả với các ấn phẩm của chúng tôi,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Email này được gửi đến những người đọc đã đăng ký thông qua liên kết "Thông báo cho người dùng" trong Trang chủ của người dùng. Nó thông báo cho độc giả về một số mới và mời họ ghé thăm tạp chí tại một URL được cung cấp.',
  'emails.lockssExistingArchive.subject' => 'Yêu cầu lưu trữ cho {$contextName}',
  'emails.lockssExistingArchive.body' => 'Kính gửi [University Librarian]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt;, là một tạp chí mà một thành viên của khoa của bạn, [name of member], phục vụ như một [title of position]. Tạp chí đang tìm cách thiết lập một kho lưu trữ tuân thủ LOCKSS (Lots of Copies Keep Stuff Safe) với thư viện này và các thư viện đại học khác.<br />
<br />
[Brief description of journal]<br />
<br />
URL tới LOCKSS Publisher Manifest cho tạp chí của chúng tôi là: {$contextUrl}/gateway/lockss<br />
<br />
Chúng tôi hiểu rằng bạn đã tham gia LOCKSS. Nếu chúng tôi có thể cung cấp bất kỳ siêu dữ liệu bổ sung nào cho mục đích đăng ký tạp chí của chúng tôi với phiên bản LOCKSS của bạn, chúng tôi sẽ vui lòng cung cấp nó.<br />
<br />
Trân trọng,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Email này yêu cầu người quản lý kho lưu trữ LOCKSS xem xét đưa tạp chí này vào kho lưu trữ của họ. Nó cung cấp URL tới LOCKSS Publisher Manifest của tạp chí.',
  'emails.lockssNewArchive.subject' => 'Yêu cầu lưu trữ cho {$contextName}',
  'emails.lockssNewArchive.body' => 'Kính gửi [University Librarian]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt;, là một tạp chí mà một thành viên của khoa của bạn, [name of member] như một [title of position]. Tạp chí đang tìm cách thiết lập một kho lưu trữ tuân thủ LOCKSS (Lots of Copies Keep Stuff Safe) với thư viện này và các thư viện đại học khác.<br />
<br />
[Brief description of journal]<br />
<br />
Chương trình LOCKSS &amp;lt;http://lockss.org/&amp;gt;, một sáng kiến thư viện/nhà xuất bản quốc tế, là một ví dụ hoạt động của kho lưu trữ và lưu trữ phân tán, chi tiết bổ sung dưới đây. Phần mềm chạy trên máy tính cá nhân thông thường là miễn phí; hệ thống dễ dàng được đưa lên mạng; rất ít yêu cầu bảo trì liên tục.<br />
<br />
Để hỗ trợ lưu trữ tạp chí của chúng tôi, chúng tôi mời bạn trở thành thành viên của cộng đồng LOCKSS, để giúp thu thập và lưu trữ các nghiên cứu do giảng viên của bạn và các học giả khác trên toàn thế giới tạo nên. Để làm như vậy, vui lòng truy cập trang web LOCKSS để biết thông tin về cách hệ thống này hoạt động. Tôi mong muốn được lắng nghe từ bạn về tính khả thi của việc cung cấp hỗ trợ lưu trữ cho tạp chí này.<br />
<br />
Trân trọng,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Email này khuyến khích người nhận tham gia sáng kiến LOCKSS và đưa tạp chí này vào kho lưu trữ. Nó cung cấp thông tin về sáng kiến LOCKSS và các cách để tham gia.',
  'emails.submissionAck.subject' => 'Cảm ơn đã gửi bài',
  'emails.submissionAck.body' => 'Kính gửi {$authorName},<br />
<br />
Cảm ơn bạn đã gửi bản thảo, &quot;{$submissionTitle}&quot; tới {$contextName}. Với hệ thống quản lý tạp chí trực tuyến mà chúng tôi đang sử dụng, bạn sẽ có thể theo dõi tiến trình của nó thông qua quy trình biên tập bằng cách đăng nhập vào trang web của tạp chí:<br />
<br />
URL của bài gửi: {$submissionUrl}<br />
Username: {$authorUsername}<br />
<br />
Nếu bạn có bất kỳ câu hỏi, xin vui lòng liên hệ với chúng tôi. Cảm ơn bạn đã coi tạp chí này là công bố nghiên cứu của bạn.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Email này, khi được bật, sẽ tự động được gửi cho tác giả khi người đó hoàn thành quá trình gửi bản thảo cho tạp chí. Nó cung cấp thông tin về việc theo dõi bài gửi qua quy trình và cảm ơn tác giả đã gửi.',
  'emails.submissionAckNotUser.subject' => 'Cảm ơn đã gửi bài',
  'emails.submissionAckNotUser.body' => 'Xin chào,<br />
<br />
{$submitterName} đã nộp bản thảo, &quot;{$submissionTitle}&quot; tới {$contextName}. <br />
<br />
Nếu bạn có bất kỳ câu hỏi, xin vui lòng liên hệ với chúng tôi. Cảm ơn bạn đã coi tạp chí này là công bố nghiên cứu của bạn.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.description' => 'Email này, khi được bật, sẽ tự động được gửi đến các tác giả khác không phải là người dùng trong OJS được chỉ định trong quá trình gửi.',
  'emails.editorAssign.subject' => 'Phân công biên tập',
  'emails.editorAssign.body' => 'Kính gửi {$editorialContactName},<br />
<br />
Bài gửi, &quot;{$submissionTitle},&quot; của {$contextName} đã được phân công cho bạn để xem qua quy trình biên tập với vai trò là Biên tập viên chuyên mục.<br />
<br />
URL bài gửi: {$submissionUrl}<br />
Username: {$editorUsername}<br />
<br />
Trân trọng.',
  'emails.editorAssign.description' => 'Email này thông báo cho Biên tập viên chuyên mục rằng Biên tập viên đã giao cho họ nhiệm vụ giám sát việc gửi qua quá trình bình duyệt. Nó cung cấp thông tin về việc nộp và cách truy cập trang tạp chí.',
  'emails.reviewRequest.subject' => 'Yêu cầu đánh giá bài báo',
  'emails.reviewRequest.body' => 'Kính gửi {$reviewerName},<br />
<br />
Tôi tin rằng bạn sẽ một người phản biện thích hợp của bản thảo, &quot;{$submissionTitle},&quot; được gửi tới {$contextName}. Bản tóm tắt của bản thảo được chèn bên dưới và tôi hy vọng rằng bạn sẽ xem xét thực hiện quá trình quan trọng này cho chúng tôi.<br />
<br />
Vui lòng đăng nhập vào trang web tạp chí trước ngày {$responseDueDate} để cho biết liệu bạn sẽ thực hiện đánh giá này hay không, cũng như truy cập vào bài gửi và ghi lại nhận xét và đề xuất của bạn. Trang web là {$contextUrl}<br />
<br />
Thời hạn của việc đánh giá là ngày {$reviewDueDate}.<br />
<br />
Nếu bạn quên username và mật khẩu đăng nhập vào trang web của tạp chí, bạn có thể sử dụng liên kết này để đặt lại mật khẩu của mình (sau đó sẽ được gửi qua email cho bạn cùng với username của bạn).{$passwordResetUrl}<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Email này từ Biên tập viên chuyên mục tới Người phản biện yêu cầu họ chấp nhận hoặc từ chối nhiệm vụ đánh giá nội dung bài gửi. Nó cung cấp thông tin về bài gửi như tiêu đề và tóm tắt, ngày đến hạn gửi bài đánh giá và cách truy cập bài gửi. Thông báo này được sử dụng khi Quy trình phản biện tiêu chuẩn được chọn trong Quản lý> Cài đặt> Quy trình làm việc> Phản biện. (Nếu không, hãy xem REVIEW_REQUEST_ATTACHED.)',
  'emails.reviewRequestRemindAuto.subject' => 'Yều cầu đánh giá bài báo',
  'emails.reviewRequestRemindAuto.body' => 'Kính gửi {$reviewerName},<br />
Đây là email để nhắc bạn về việc đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi hy vọng sẽ có phản hồi của bạn vào ngày {$responseDueDate}, và email này đã được tự động tạo và gửi cùng với ngày đó.
<br />
Tôi tin rằng bạn là một người phản biện phù hợp của bản thảo này. Bản tóm tắt của bài gửi được chèn bên dưới và tôi hy vọng rằng bạn sẽ xem xét thực hiện quá trình quan trọng này cho chúng tôi.<br />
<br />
Vui lòng đăng nhập vào trang web tạp chí để cho biết liệu bạn sẽ thực hiện đánh giá hay không, cũng như để truy cập vào bài gửi và ghi lại đánh giá và đề xuất của bạn. Trang web là {$contextUrl}<br />
<br />
Thời hạn phản biện là ngày {$reviewDueDate}.<br />
<br />
Nếu bạn quên username và mật khẩu đăng nhập vào trang web của tạp chí, bạn có thể sử dụng liên kết này để đặt lại mật khẩu của mình (sau đó sẽ được gửi qua email cho bạn cùng với username của bạn). {$passwordResetUrl}<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Email này được gửi tự động khi hết hạn xác nhận của người phản biện (xem Tùy chọn đánh giá trong Cài đặt> Quy trình làm việc> phản biện) và quyền truy cập của người phản biện không cần đăng nhập bị vô hiệu hóa. Các tác vụ theo lịch trình phải được bật và định cấu hình (xem tập tin cấu hình trang).',
  'emails.reviewRequestOneclick.subject' => 'Yêu cầu đánh giá bài viết',
  'emails.reviewRequestOneclick.body' => 'Kính gửi {$reviewerName},<br />
<br />
Tôi tin rằng bạn là một phản biện phù hợp với bản thảo, &quot;{$submissionTitle},&quot; đã được gửi tới {$contextName}. Tóm tắt của bài gửi được chèn bên dưới và tôi hy vọng rằng bạn sẽ xem xét thực hiện quy trình quan trọng này cho chúng tôi.<br />
<br />
Vui lòng đăng nhập vào trang web tạp chí trước ngày {$responseDueDate} để cho biết liệu bạn sẽ thực hiện đánh giá hay không, cũng như truy cập vào bài gửi và ghi lại đánh giá và đề xuất của bạn.<br />
<br />
Thời hạn nộp bài đánh giá là ngày {$reviewDueDate}.<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Email này từ Biên tập viên chuyên mục tới Người phản biện đề nghị rằng phản biện chấp nhận hoặc từ chối đánh giá bài gửi. Nó cung cấp thông tin về bài gửi như tiêu đề và tóm tắt, ngày đến hạn nộp đánh giá và cách truy cập bài gửi. Thông báo này được sử dụng khi Quy trình phản biện tiêu chuẩn được chọn trong Quản lý > Cài đặt > Quy trình làm việc > Phản biện và quyền truy cập của người đánh giá không cần đăng nhập được bật.',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Yêu cầu đánh giá bài báo',
  'emails.reviewRequestRemindAutoOneclick.body' => 'Kính gửi {$reviewerName},<br />
Đây là nhắc nhở  về yêu cầu của chúng tôi để bạn đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi hy vọng sẽ có phản hồi của bạn vào ngày {$responseDueDate}, và email này đã được tự động tạo và gửi cùng với ngày đó.
<br />
Tôi tin rằng bạn sẽ là người phản biện phù hợp cho bản thảo này. Tóm tắt của bài gửi được chèn bên dưới và tôi hy vọng rằng bạn sẽ xem xét thực hiện nhiệm vụ quan trọng này cho chúng tôi.<br />
<br />
Vui lòng đăng nhập vào trang web tạp chí để cho biết liệu bạn sẽ thực hiện đánh giá hay không, cũng như để truy cập vào bài gửi và ghi lại đánh giá và đề xuất của bạn.<br />
<br />
Thời hạn phản biện là ngày {$reviewDueDate}.<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Email này được gửi tự động khi hết hạn xác nhận của người phản biện (xem Tùy chọn đánh giá trong Cài đặt > Quy trình làm việc > Phản biện) và quyền truy cập của người không cần đăng nhập được bật. Các tác vụ theo lịch trình phải được bật và định cấu hình (xem tệp cấu hình trang).',
  'emails.reviewRequestAttached.subject' => 'Yêu cầu đánh giá bài báo',
  'emails.reviewRequestAttached.body' => 'Kính gửi {$reviewerName},<br />
<br />
Tôi tin rằng bạn là người phản biện phù hợp cho bản thảo, &quot;{$submissionTitle},&quot; và tôi đang yêu cầu bạn xem xét thực hiện nhiệm vụ quan trọng này cho chúng tôi. Hướng dẫn phản biện cho tạp chí này được thêm vào bên dưới và bài gửi được đính kèm với email này. Đánh giá của bạn về bài gửi, cùng với khuyến nghị của bạn, nên được gửi qua email cho chúng tôi trước ngày {$reviewDueDate}.<br />
<br />
Xin cho biết trong một email phản hồi trước ngày {$responseDueDate} cho dù bạn có thể và sẵn sàng thực hiện đánh giá.<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Review Guidelines<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.description' => 'Email này được gửi bởi Biên tập viên chuyên mục tới một phản biện để yêu cầu họ chấp nhận hoặc từ chối nhiệm vụ phản biện bài gửi. Nó bao gồm các bài gửi như một tập tin đính kèm. Thông báo này được sử dụng khi Quy trình phản biện đính kèm email được chọn trong Quản lý > Cài đặt > Quy trình làm việc > Phản biện. (Nếu không, hãy xem REVIEW_REQUEST.)',
  'emails.reviewRequestSubsequent.subject' => 'Yêu cầu đánh giá bài báo',
  'emails.reviewRequestSubsequent.body' => 'Kính gửi {$reviewerName},<br />
<br />
Liên quan tới bản thảo &quot;{$submissionTitle},&quot; được xem xét bởi {$contextName}.<br />
<br />
Sau khi xem xét phiên bản trước của bản thảo, các tác giả hiện đã gửi phiên bản sửa chữa bài báo của họ. Chúng tôi đánh giá cao nếu bạn có thể giúp đánh giá bản sửa chữa này.<br />
<br />
Vui lòng đăng nhập vào trang web tạp chí trước ngày {$responseDueDate} để cho biết liệu bạn sẽ thực hiện đánh giá hay không, cũng như truy cập vào bài gửi và ghi lại đánh giá và đề xuất của bạn. Trang web là {$contextUrl}<br />
<br />
Thời hạn đánh giá là ngày {$reviewDueDate}.<br />
<br />
Nếu bạn không nhớ username và mật khẩu cho trang web của tạp chí, bạn có thể sử dụng liên kết này để đặt lại mật khẩu của mình (sau đó sẽ được gửi qua email cho bạn cùng với username của bạn). {$passwordResetUrl}<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.description' => 'Email này từ biên tập viên chuyên mục tới phản biện để một yêu cầu người phản biện chấp nhận hoặc từ chối nhiệm vụ đánh giá bài gửi một vòng thứ hai hoặc cao hơn. Nó cung cấp thông tin về bài gửi như tiêu đề và tóm tắt, ngày đến hạn nộp đán giá và cách truy cập bài gửi. Thông báo này được sử dụng khi Quy trình phản biện tiêu chuẩn được chọn trong Quản lý > Cài đặt > Quy trình làm việc > Phản biện. (Nếu không, hãy xem REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)',
  'emails.reviewRequestOneclickSubsequent.subject' => 'Yêu cầu đánh giá bài báo',
  'emails.reviewRequestOneclickSubsequent.body' => 'Kính gửi {$reviewerName},<br />
<br />
Liên quan đến bản thảo &quot;{$submissionTitle},&quot; được xem xét bởi {$contextName}.<br />
<br />
Sau khi xem xét phiên bản trước của bản thảo, các tác giả hiện đã gửi phiên bản sửa chữa bài báo của họ. Chúng tôi đánh giá cao nếu bạn có thể giúp đánh giá bản sửa chữa này.<br />
<br />
Vui lòng đăng nhập vào trang web tạp chí trước ngày {$responseDueDate} để cho biết liệu bạn sẽ thực hiện đánh giá hay không, cũng như truy cập vào bài gửi và ghi lại đánh giá và đề xuất của bạn.<br />
<br />
Thời hạn đánh giá là ngày {$reviewDueDate}.<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.description' => 'Email này từ biên tập viên chuyên mục tới phản biện để một yêu cầu người phản biện chấp nhận hoặc từ chối nhiệm vụ đánh giá bài gửi một vòng thứ hai hoặc cao hơn. Nó cung cấp thông tin về bài gửi như tiêu đề và tóm tắt, ngày đến hạn nộp đán giá và cách truy cập bài gửi. Thông báo này được sử dụng khi Quy trình phản biện tiêu chuẩn được chọn trong Quản lý > Cài đặt > Quy trình làm việc > Phản biện.',
  'emails.reviewRequestAttachedSubsequent.subject' => 'Yêu cầu đánh giá bài báo',
  'emails.reviewRequestAttachedSubsequent.body' => 'Kính gửi {$reviewerName},<br />
<br />
Liên quan tới bản thảo &quot;{$submissionTitle},&quot; which is under consideration by {$contextName}.<br />
<br />
Sau khi xem xét phiên bản trước của bản thảo, các tác giả hiện đã gửi phiên bản sửa chữa bài báo của họ. Chúng tôi đánh giá cao nếu bạn có thể giúp đánh giá bản sửa chữa này.<br />
<br />
Hướng dẫn phản biện cho tạp chí này được thêm vào bên dưới và bài gửi được đính kèm với email này. Đánh giá của bạn về bài gửi, cùng với khuyến nghị của bạn, nên được gửi qua email cho tôi trước ngày {$reviewDueDate}.<br />
<br />
Xin cho biết trong một email phả hồi trước {$responseDueDate} cho dù bạn có thể và sẵn sàng để xem xét.<br />
<br />
Cảm ơn bạn đã xem xét yêu cầu này.<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Hướng dẫn phản biện<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.description' => 'Email này được Biên tập viên chuyên mục gửi đến Người phản biện để yêu cầu họ chấp nhận hoặc từ chối nhiệm vụ đánh giá bài gửi cho vòng đánh giá thứ hai trở lên. Nó bao gồm các bài gửi như một tập tin đính kèm. Thông báo này được sử dụng khi Quy trình phản biện đính kèm email được chọn trong Quản lý > Cài đặt > Quy trình làm việc > Phản biện. (Nếu không, hãy xem REVIEW_REQUEST_SUBSEQUENT.)',
  'emails.reviewCancel.subject' => 'Hủy yêu cầu đánh giá bài báo',
  'emails.reviewCancel.body' => 'Kính gửi {$reviewerName},<br />
<br />
Tại thời điểm này, chúng tôi đã quyết định hủy yêu cầu của chúng tôi để bạn đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi xin lỗi vì bất kỳ sự bất tiện nào mà điều này có thể gây ra cho bạn và hy vọng rằng chúng tôi sẽ có thể nhờ bạn hỗ trợ quá trình đánh giá của tạp chí trong tương lai.<br />
<br />
Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi.',
  'emails.reviewCancel.description' => 'Email này được gửi bởi Biên tập viên chuyên mục tới một phản biện người đang trong quá trình đánh giá để thông báo cho họ rằng việc đánh giá đã bị hủy.',
  'emails.reviewReinstate.subject' => 'Khôi phục yêu cầu đánh giá bài báo',
  'emails.reviewReinstate.body' => 'Kính gửi {$reviewerName},<br />
<br />
Chúng tôi muốn khôi phục yêu cầu của chúng tôi để bạn đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi hy vọng rằng bạn sẽ có thể hỗ trợ quá trình đánh giá của tạp chí này.<br />
<br />
Nếu bạn có thắc mắc, xin vui lòng liên hệ với chúng tôi.',
  'emails.reviewReinstate.description' => 'Email này được gửi bởi Biên tập viên chuyên mục tới Người phản biện đang tiến hành đánh giá bản thảo để thông báo cho họ rằng đánh giá bị hủy đã được khôi phục.',
  'emails.reviewConfirm.subject' => 'Đồng ý đánh giá',
  'emails.reviewConfirm.body' => 'Kính gửi Biên tập viên,<br />
<br />
Tôi có thể và sẵn sàng đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Cảm ơn bạn đã nghĩ đến tôi và tôi dự định hoàn thành bản đánh giá trước ngày {$reviewDueDate}.<br />
<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Email này được gửi bởi một phản biện cho Biên tập viên chuyên mục để phản hồi với yêu cầu đánh giá cũng để thông báo cho Biên tập viên chuyên mục rằng yêu cầu xem xét lại đã được chấp nhận và sẽ được hoàn thành vào ngày cụ thể.',
  'emails.reviewDecline.subject' => 'Không thể nhận đánh giá',
  'emails.reviewDecline.body' => 'Kính gửi biên tập viên,<br />
<br />
Tôi e rằng tại thời điểm này tôi không thể đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Cảm ơn bạn đã nghĩ đến  tôi, và bạn có thể liên hệ với tôi vào thời điểm khác.<br />
<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Email này được gửi bởi Người phản biện đến Biên tập viên chuyên mục để phản hồi về yêu cầu đánh giá cũng để thông báo cho Biên tập viên chuyên mục biết rằng yêu cầu đánh giá đã bị từ chối.',
  'emails.reviewAck.subject' => 'Lời cảm ơn về việc đánh giá bài báo',
  'emails.reviewAck.body' => 'Kính gửi {$reviewerName},<br />
<br />
Cảm ơn bạn đã hoàn thành việc đánh giá bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi đánh giá cao sự đóng góp của bạn cho chất lượng ấn phẩm mà chúng tôi xuất bản.',
  'emails.reviewAck.description' => 'Email này được gửi bởi một Biên tập viên chuyên mục để xác nhận đã nhận được bản đánh giá và cảm ơn người phản biện về những đóng góp của họ.',
  'emails.reviewRemind.subject' => 'Nhắc nhở nộp đánh giá',
  'emails.reviewRemind.body' => 'Kính gửi {$reviewerName},<br />
<br />
Đây là nhắc nhở về yêu cầu của chúng tôi để bạn xem xét bài gửi, &quot;{$submissionTitle},&quot; for {$contextName}. Chúng tôi hy vọng sẽ có đánh giá này vào ngày {$reviewDueDate}, và sẽ rất vui khi nhận được nó ngay khi bạn có thể gửi nó.<br />
<br />
Nếu bạn không có username và mật khẩu cho trang web của tạp chí, bạn có thể sử dụng liên kết này để đặt lại mật khẩu của mình (sau đó sẽ được gửi qua email cho bạn cùng với username của bạn). {$passwordResetUrl}<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Vui lòng xác nhận khả năng hoàn thành quy trình quan trọng này cho công việc của tạp chí. Chúng tôi mong nhận được phản hồi của bạn.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Email này được gửi bởi một Biên tập viên chuyên mục để nhắc nhở người phản biện rằng đánh giá của họ đến hạn nộp.',
  'emails.reviewRemindOneclick.subject' => 'Nhắc nhở nộp đánh giá',
  'emails.reviewRemindOneclick.body' => 'Kính gửi {$reviewerName},<br />
<br />
Đây là nhắc nhở về yêu cầu của chúng tôi để bạn xem xét bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi hy vọng sẽ có đánh giá này vào ngày {$reviewDueDate}, và sẽ rất vui khi nhận được nó ngay khi bạn có thể gửi nó.<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Vui lòng xác nhận khả năng hoàn thành quy trình quan trọng này cho công việc của tạp chí. Chúng tôi mong nhận được phản hồi của bạn.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Email này được gửi bởi một Biên tập viên chuyên mục để nhắc nhở người phản biên rằng rằng đánh giá của họ tới hạn nộp.',
  'emails.reviewRemindAuto.subject' => 'Nhắc nhở nộp đánh giá (tự động)',
  'emails.reviewRemindAuto.body' => 'Kính gửi {$reviewerName},<br />
<br />
Just a gentle reminder of our request for your review of the submission, &quot;{$submissionTitle},&quot; for {$contextName}. We were hoping to have this review by {$reviewDueDate}, and this email has been automatically generated and sent with the passing of that date. We would still be pleased to receive it as soon as you are able to prepare it.<br />
<br />
Nếu bạn không có username và mật khẩu cho trang web của tạp chí, bạn có thể sử dụng liên kết này để đặt lại mật khẩu của mình (sau đó sẽ được gửi qua email cho bạn cùng với username của bạn). {$passwordResetUrl}<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Vui lòng xác nhận khả năng hoàn thành quy trình quan trọng này cho công việc của tạp chí. Chúng tôi mong nhận được phản hồi của bạn.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Email này được gửi tự động khi hết hạn đánh giá của người phản biện (xem Tùy chọn đánh giá trong Cài đặt > Quy trình làm việc > Phản biện) và quyền truy cập của người phản biện không cần đăng nhập bị vô hiệu hóa. Các tác vụ theo lịch trình phải được bật và định cấu hình (xem tệp cấu hình trang).',
  'emails.reviewRemindAutoOneclick.subject' => 'Nhắc nhở nộp bài đánh giá (tự động)',
  'emails.reviewRemindAutoOneclick.body' => 'Kính gửi {$reviewerName},<br />
<br />
Đây là lời nhắc về yêu cầu của chúng tôi để bạn xem xét bài gửi, &quot;{$submissionTitle},&quot; cho {$contextName}. Chúng tôi hy vọng sẽ có đánh giá này vào ngày {$reviewDueDate}, và email này đã được tự động tạo và gửi cùng với ngày đó. Chúng tôi vẫn sẽ vui lòng nhận được nó ngay khi bạn gửi nó.<br />
<br />
URL bài gửi: {$submissionReviewUrl}<br />
<br />
Vui lòng xác nhận khả năng hoàn thành quy trình quan trọng này cho công việc của tạp chí. Chúng tôi mong nhận được phản hồi của bạn.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Email này được gửi tự động khi hết hạn đánh giá của người phản biện (xem Tùy chọn đánh giá trong Cài đặt > Quy trình làm việc > Phản biện) và quyền truy cập của người phản biện không cần đăng nhập được bật. Các tác vụ theo lịch trình phải được bật và định cấu hình (xem tệp cấu hình trang).',
  'emails.editorDecisionAccept.subject' => 'Quyết định của Ban biên tập',
  'emails.editorDecisionAccept.body' => 'Kính gửi {$authorName},<br />
<br />
Chúng tôi đã đạt được một quyết định liên quan đến việc bài gửi của bạn  {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Quyết định của chúng tôi là: Chấp nhận cho đăng',
  'emails.editorDecisionAccept.description' => 'Email này từ Biên tập viên hoặc Biên tập viên chuyên mục cho Tác giả thông báo cho họ về quyết định "chấp nhận cho đăng" cuối cùng liên quan đến bài gửi của họ.',
  'emails.editorDecisionSendToExternal.subject' => 'Quyết định của Ban biên tập',
  'emails.editorDecisionSendToExternal.body' => 'Kính gửi {$authorName},<br />
<br />
Chúng tôi đã đạt được một quyết định liên quan đến việc bài gửi của bạn {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Quyết định của chúng tôi là: Gửi lại để xem xét<br />
<br />
URL bài gửi: {$submissionUrl}',
  'emails.editorDecisionSendToExternal.description' => 'Email này từ Biên tập viên hoặc Biên tập chuyên mục cho Tác giả thông báo cho họ rằng bài gửi của họ đang được gửi đi đánh giá bên ngoài.',
  'emails.editorDecisionSendToProduction.subject' => 'Quyết định của Ban biên tập',
  'emails.editorDecisionSendToProduction.body' => 'Kính gửi {$authorName},<br />
<br />
Quá trình biên tập bản thảo của bạn, &quot;{$submissionTitle},&quot; đã hoàn thành. Chúng tôi đã chuyển nó sang giai đoạn chế bản.<br />
<br />
URL bài gửi: {$submissionUrl}',
  'emails.editorDecisionSendToProduction.description' => 'Email này từ Biên tập viên hoặc Biên tập chuyên mục cho Tác giả thông báo cho họ rằng bài gửi của họ đang được gửi đến giai đoạn chế bản.',
  'emails.editorDecisionRevisions.subject' => 'Quyết định của Ban biên tập',
  'emails.editorDecisionRevisions.body' => 'Kính gửi {$authorName},<br />
<br />
Chúng tôi đã đạt được một quyết định liên quan đến việc bài gửi của bạn {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Quyết định của chúng tôi là: Yêu cầu sửa chữa',
  'emails.editorDecisionRevisions.description' => 'Email này từ Biên tập viên hoặc Biên tập viên chuyên mục cho Tác giả thông báo cho họ về quyết định "yêu cầu sửa chữa" cuối cùng liên quan đến bài gửi của họ.',
  'emails.editorDecisionResubmit.subject' => 'Quyết định của Ban biên tập',
  'emails.editorDecisionResubmit.body' => 'Kính gửi {$authorName},<br />
<br />
Chúng tôi đã đạt được một quyết định liên quan đến việc bài gửi của bạn {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Quyết định của chúng tôi là: Gửi lại để xem xét',
  'emails.editorDecisionResubmit.description' => 'Email này từ Biên tập viên hoặc Biên tập viên chuyên mục cho Tác giả thông báo cho họ về quyết định "gửi lại" cuối cùng liên quan đến bài gửi của họ.',
  'emails.editorDecisionDecline.subject' => 'Quyết định của Ban biên tập',
  'emails.editorDecisionDecline.body' => 'Kính gửi {$authorName},<br />
<br />
Chúng tôi đã đạt được một quyết định liên quan đến việc bài gửi của bạn {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
Quyết định của chúng tôi là: Từ chối',
  'emails.editorDecisionDecline.description' => 'Email này từ Biên tập viên hoặc Biên tập viên chuyên mục cho Tác giả thông báo cho họ về quyết định "từ chối" cuối cùng liên quan đến bài gửi của họ.',
  'emails.editorRecommendation.subject' => 'Khuyến nghị của biên tập viên',
  'emails.editorRecommendation.body' => 'Kính gửi {$editors},<br />
<br />
The recommendation regarding the submission to {$contextName}, &quot;{$submissionTitle}&quot; is: {$recommendation}',
  'emails.editorRecommendation.description' => 'Email này từ Biên tập viên hoặc Biên tập viên chuyên mục tới các Biên tập viên hoặc Biên tập viên chuyên mục thông báo cho họ quyết định về khuyến nghị cuối cùng liên quan đến bài gửi.',
  'emails.copyeditRequest.subject' => 'Yêu cầu biên tập bản thảo',
  'emails.copyeditRequest.body' => 'Kính gửi {$participantName},<br />
<br />
Tôi muốn yêu cầu bạn thực hiện việc biên tập bản thảo &quot;{$submissionTitle}&quot; cho {$contextName} bằng cách làm theo các bước sau.<br />
1. Nhấp vào URL gửi dưới đây.<br />
2. Mở bất kỳ tập tin có sẵn ở mục Nháp và biên tập bản thảo đó, đồng thời có thể thảo luận bất kỳ điều gì nếu cần thiết trong mục thảo luận bản thảo.<br />
3. Lưu (các) tập tin đã biên tập bản thảo và tải lên.<br />
4. Thông báo cho các biên tập viên mà tất cả các file đã được chuẩn bị, và rằng quá trình chế bản có thể bắt đầu.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
URL bài gửi: {$submissionUrl}<br />
Username: {$participantUsername}',
  'emails.copyeditRequest.description' => 'Email này được gửi bởi một biên tập viên chuyên mục tới biên tập viên bản thảo rằng họ bắt đầu quá trình biên tập bản thảo. Nó cung cấp thông tin về bài gửi và làm thế nào để truy cập vào nó.',
  'emails.layoutRequest.subject' => 'Yêu cầu bản in',
  'emails.layoutRequest.body' => 'Kính gửi {$participantName},<br />
<br />
Bài gửi &quot;{$submissionTitle}&quot; đến {$contextName} bây giờ cần bản in bằng cách làm theo các bước sau.<br />
1. Nhấp vào URL gửi dưới đây.<br />
2. Đăng nhập vào tạp chí và sử dụng các tập tin sẵn sàng chế bản để tạo ra các bản in theo tiêu chuẩn của tạp chí.<br />
3. Tải các bản in thử vào tập tin Bản in<br />
4. Thông báo cho Biên tập viên bằng mục thảo luận khi chế bản rằng các bản in được tải lên và sẵn sàng.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
URL bài gửi: {$submissionUrl}<br />
Username: {$participantUsername}<br />
<br />
Nếu bạn không thể thực hiện công việc này vào lúc này hoặc có bất kỳ câu hỏi nào, xin vui lòng liên hệ với tôi. Cảm ơn bạn đã đóng góp cho tạp chí này.',
  'emails.layoutRequest.description' => 'Email này từ Biên tập viên chuyên mục gửi tới Biên tập viên trình bày thông báo cho họ rằng họ đã được giao nhiệm vụ thực hiện chỉnh sửa bố cục của bài gửi. Nó cung cấp thông tin về bài gửi và làm thế nào để truy cập vào nó.',
  'emails.layoutComplete.subject' => 'Hoàn thành bản in',
  'emails.layoutComplete.body' => 'Kính gửi {$editorialContactName},<br />
<br />
Bản in hiện đã được chuẩn bị cho bản thảo, &quot;{$submissionTitle},&quot; của {$contextName} và sẵn sàng cho hiệu đính.<br />
<br />
Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi.<br />
<br />
{$participantName}',
  'emails.layoutComplete.description' => 'Email này từ Biên tập viên trình bày cho Biên tập viên chuyên mục thông báo rằng quá trình dàn trang đã được hoàn thành.',
  'emails.emailLink.subject' => 'Bài báo quan tâm',
  'emails.emailLink.body' => 'Tôi nghĩ rằng bạn có thể quan tâm &quot;{$submissionTitle}&quot; bởi {$authorName} xuất bản trong Vol {$volume}, No {$number} ({$year}) của {$contextName} tại &quot;{$articleUrl}&quot;.',
  'emails.emailLink.description' => 'Mẫu email này cung cấp cho người đọc đã đăng ký cơ hội gửi thông tin về một bài viết cho ai đó có thể quan tâm. Nó có sẵn thông qua Công cụ đọc và phải được Quản lý tạp chí kích hoạt trong trang Quản trị công cụ đọc.',
  'emails.subscriptionNotify.subject' => 'Thông báo thuê bao',
  'emails.subscriptionNotify.body' => 'Kính gửi {$subscriberName},<br />
<br />
Bây giờ bạn đã được đăng ký như một thuê bao trong hệ thống quản lý tạp chí trực tuyến của chúng tôi cho {$contextName}, với đăng ký sau:<br />
<br />
{$subscriptionType}<br />
<br />
Để truy cập nội dung chỉ dành cho người thuê bao, chỉ cần đăng nhập vào hệ thống bằng username của bạn, &quot;{$username}&quot;.<br />
<br />
Khi bạn đã đăng nhập vào hệ thống, bạn có thể thay đổi chi tiết hồ sơ và mật khẩu của mình bất cứ lúc nào.<br />
<br />
Xin lưu ý rằng nếu bạn có thuê bao tổ chức, người dùng tại tổ chức của bạn không cần phải đăng nhập, vì các yêu cầu cho nội dung thuê bao sẽ được hệ thống xác thực tự động.<br />
<br />
Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Email này thông báo cho người đọc đã đăng ký rằng Người quản lý đã tạo thuê bao cho họ. Nó cung cấp URL của tạp chí cùng với hướng dẫn truy cập.',
  'emails.openAccessNotify.subject' => 'Truy cập mở',
  'emails.openAccessNotify.body' => 'Kính gửi  Độc giả,<br />
<br />
{$contextName} vừa có sẵn một số cho phép truy cập mở. Chúng tôi kính mời bạn tham khảo mục lục tại đây và sau đó truy cập trang web của chúng tôi ({$contextUrl}) để xem chi tiết các bài viết mà bạn quan tâm.<br />
<br />
Cám ơn sự quan tâm của bạn với các ấn phẩm của chúng tôi,<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Email này được gửi đến những độc giả đã đăng ký, những người đã yêu cầu nhận email thông báo khi một số cho truy cập mở.',
  'emails.subscriptionBeforeExpiry.subject' => 'Thông báo hết hạn thuê bao',
  'emails.subscriptionBeforeExpiry.body' => 'Kính gửi {$subscriberName},<br />
<br />
Thuê bao tại {$contextName} sắp hết hạn<br />
<br />
{$subscriptionType}<br />
Expiry date: {$expiryDate}<br />
<br />
Để đảm bảo tính liên tục khi truy cập vào tạp chí này, vui lòng truy cập trang web tạp chí và gia hạn thuê bao của bạn. Bạn có thể đăng nhập vào hệ thống bằng username của bạn, &quot;{$username}&quot;.<br />
<br />
Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Email này thông báo cho một thuê bao rằng thuê bao của họ sẽ sớm hết hạn. Nó cung cấp URL của tạp chí cùng với hướng dẫn truy cập.',
  'emails.subscriptionAfterExpiry.subject' => 'Thuê bao hết hạn',
  'emails.subscriptionAfterExpiry.body' => 'Kính gửi {$subscriberName},<br />
<br />
Thuê bao tại {$contextName} đã hết hạn.<br />
<br />
{$subscriptionType}<br />
Ngày hết hạn: {$expiryDate}<br />
<br />
Để gia hạn thuê bao của bạn, vui lòng truy cập trang web tạp chí. Bạn có thể đăng nhập vào hệ thống bằng username của bạn,&quot;{$username}&quot;.<br />
<br />
Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.description' => 'Email này thông báo cho một thuê bao rằng thuê bao của họ đã hết hạn. Nó cung cấp URL của tạp chí cùng với hướng dẫn truy cập.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Thuê bao đã hết hạn - Nhắc nhở cuối cùng',
  'emails.subscriptionAfterExpiryLast.body' => 'Kính gửi {$subscriberName},<br />
<br />
Thuê bao tại {$contextName} đã hết hạn.<br />
Xin lưu ý rằng đây là lời nhắc cuối cùng sẽ được gửi qua email cho bạn.<br />
<br />
{$subscriptionType}<br />
Ngày hết hạn: {$expiryDate}<br />
<br />
Để gia hạn thuê bao của bạn, vui lòng truy cập trang web tạp chí. Bạn có thể đăng nhập vào hệ thống bằng username của bạn, &quot;{$username}&quot;.<br />
<br />
Nếu bạn có bất kỳ câu hỏi nào, xin vui lòng liên hệ với chúng tôi.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Email này thông báo cho một thuê bao rằng thuê bao của họ đã hết hạn. Nó cung cấp URL của tạp chí cùng với hướng dẫn truy cập.',
  'emails.subscriptionPurchaseIndl.subject' => 'Đăng ký mua: Cá nhân',
  'emails.subscriptionPurchaseIndl.body' => 'Một thuê bao cá nhân đã được mua trực tuyến với {$contextName} với các chi tiết sau.<br />
<br />
Kiểu thuê bao:<br />
{$subscriptionType}<br />
<br />
User:<br />
{$userDetails}<br />
<br />
Thông tin thành viên (nếu được cung cấp):<br />
{$membership}<br />
<br />
Để xem hoặc chỉnh sửa đăng ký này, vui lòng sử dụng URL sau.<br />
<br />
URL thuê bao: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.description' => 'Email này thông báo cho Người quản lý thuê bao rằng một thuê bao cá nhân đã được mua trực tuyến. Nó cung cấp thông tin tóm tắt về đăng ký và liên kết truy cập nhanh đến đăng ký đã mua.',
  'emails.subscriptionPurchaseInstl.subject' => 'Đăng ký mua: Tổ chức',
  'emails.subscriptionPurchaseInstl.body' => 'Một thuê bao tổ chức đã được mua trực tuyến với {$contextName} với các chi tiết sau. Để kích hoạt đăng ký này, vui lòng sử dụng URL đăng ký được cung cấp và đặt trạng thái đăng ký thành \'Kích hoạt\'.<br />
<br />
Kiểu thuê bao:<br />
{$subscriptionType}<br />
<br />
Tổ chức:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Tên miền (nếu được cung cấp):<br />
{$domain}<br />
<br />
Phạm vi IP (nếu được cung cấp):<br />
{$ipRanges}<br />
<br />
Người liên hệ:<br />
{$userDetails}<br />
<br />
Thông tin thành viên (nếu được cung cấp):<br />
{$membership}<br />
<br />
Để xem hoặc chỉnh sửa đăng ký này, vui lòng sử dụng URL sau.<br />
<br />
URL thuê bao: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.description' => 'Email này thông báo cho Người quản lý thuê bao rằng một thuê bao tổ chức đã được mua trực tuyến. Nó cung cấp thông tin tóm tắt về đăng ký và liên kết truy cập nhanh đến đăng ký đã mua.',
  'emails.subscriptionRenewIndl.subject' => 'Gia hạn thuê bao: Cá nhân',
  'emails.subscriptionRenewIndl.body' => 'Một thuê bao cá nhân đã được gia hạn trực tuyến với {$contextName} với các chi tiết sau.<br />
<br />
Kiểu thuê bao:<br />
{$subscriptionType}<br />
<br />
User:<br />
{$userDetails}<br />
<br />
Thông tin thành viên (nếu được cung cấp):<br />
{$membership}<br />
<br />
Để xem hoặc chỉnh sửa đăng ký này, vui lòng sử dụng URL sau.<br />
<br />
URL thuê bao: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.description' => 'Email này thông báo cho Người quản lý thuê bao rằng một thuê bao cá nhân đã được gia hạn trực tuyến. Nó cung cấp thông tin tóm tắt về đăng ký và liên kết truy cập nhanh đến đăng ký được gia hạn.',
  'emails.subscriptionRenewInstl.subject' => 'Gia hạn thuê bao: Tổ chức',
  'emails.subscriptionRenewInstl.body' => 'An institutional subscription has been renewed online for {$contextName} with the following details.<br />
<br />
Kiểu thuê bao:<br />
{$subscriptionType}<br />
<br />
Tổ chức:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Tên miền (nếu được cung cấp):<br />
{$domain}<br />
<br />
Phạm vi IP (nếu được cung cấp):<br />
{$ipRanges}<br />
<br />
Người liên hệ:<br />
{$userDetails}<br />
<br />
Thông tin thành viên (nếu được cung cấp):<br />
{$membership}<br />
<br />
Để xem hoặc chỉnh sửa đăng ký này, vui lòng sử dụng URL sau.<br />
<br />
URL thuê bao: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.description' => 'Email này thông báo cho Người quản lý đăng ký thuê bao rằng tổ chức đăng ký thuê  bao đã được gia hạn trực tuyến. Nó cung cấp thông tin tóm tắt về đăng ký và liên kết truy cập nhanh đến đăng ký được gia hạn.',
  'emails.citationEditorAuthorQuery.subject' => 'Chỉnh sửa trích dẫn',
  'emails.citationEditorAuthorQuery.body' => 'Kính gửi {$authorFirstName},<br />
<br />
Bạn có thể vui lòng xác minh hoặc cung cấp cho chúng tôi trích dẫn thích hợp cho tham khảo sau từ bài viết của bạn,{$submissionTitle}:<br />
<br />
{$rawCitation}<br />
<br />
Trân trọng<br />
<br />
{$userFirstName}<br />
Copy-Editor, {$contextName}<br />
',
  'emails.citationEditorAuthorQuery.description' => 'Email này cho phép các biên tập viên yêu cầu thông tin bổ sung về các tài liệu tham khảo từ các tác giả.',
  'emails.revisedVersionNotify.subject' => 'Tải lên bản sửa chữa',
  'emails.revisedVersionNotify.body' => 'Kính gửi Biên tập viên,<br />
<br />
Một bản sửa chữa của bài gửi &quot;{$submissionTitle}&quot; đã được tải lên bởi tác giả {$authorName}.<br />
<br />
URL bài gửi: {$submissionUrl}<br />
<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.description' => 'Email này được tự động gửi đến biên tập viên được phân công khi tác giả tải lên phiên bản sửa chữa của bài viết.',
  'emails.notificationCenterDefault.subject' => 'Một thông báo liên quan đến {$contextName}',
  'emails.notificationCenterDefault.body' => 'Vui lòng nhập tin nhắn của bạn.',
  'emails.notificationCenterDefault.description' => 'Thông báo (trống) mặc định được sử dụng trong Trình tạo danh sách thông báo của Trung tâm thông báo.',
  'emails.editorDecisionInitialDecline.subject' => 'Quyết định của ban biên tập',
  'emails.editorDecisionInitialDecline.body' => '
			Kính gửi {$authorName},<br />
<br />
Chúng tôi đã đạt được một quyết định liên quan đến bài gửi của bạn {$contextName}, &quot;{$submissionTitle}&quot;.<br />		
<br />
Quyết định của chúng tôi là: Từ chối',
  'emails.editorDecisionInitialDecline.description' => 'Email này được gửi cho tác giả nếu biên tập viên từ chối gửi ban đầu, trước giai đoạn xem xét',
  'emails.statisticsReportNotification.subject' => 'Hoạt động cho {$month}, {$year}',
  'emails.statisticsReportNotification.body' => '
{$name}, <br />
<br />
Báo cáo tình trạng hoạt động của tạp chí vào {$month}, {$year} đã có. Số liệu thống kê quan trọng của tạp chí trong tháng này hiển thị ở dưới đây.<br />
<ul>
	<li>Bài gửi mới trong tháng này: {$newSubmissions}</li>
	<li>Bài từ chối trong tháng này: {$declinedSubmissions}</li>
	<li>Bài đồng ý đăng trong tháng này: {$acceptedSubmissions}</li>
	<li>Tổng số bài trên hệ thống: {$totalSubmissions}</li>
</ul>
Đăng nhập vào tạp chí để xem chi tiết hơn <a href="{$editorialStatsLink}">xu thế</a> và <a href="{$publicationStatsLink}">số liệu thống kê bài báo</a>. Một bản sao đầy đủ của các xu thế trong tháng này được đính kèm.<br />
<br />
Trân trọng,<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.description' => 'Email này được tự động gửi hàng tháng cho các biên tập viên và người quản lý tạp chí để cung cấp cho họ tổng quan về tình trạng hoạt động hệ thống.',
  'emails.announcement.subject' => '{$title}',
  'emails.announcement.body' => '<b>{$title}</b><br />
<br />
{$summary}<br />
<br />
Ghé thăm trang web của chúng tôi để đọc <a href="{$url}">thông báo đầy đủ</a>.',
  'emails.announcement.description' => 'Email này được gửi khi một thông báo mới được tạo.',
);