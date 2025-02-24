<?php return array (
  'plugins.importexport.crossref.displayName' => 'Plugin xuất CrossRef XML',
  'plugins.importexport.crossref.description' => 'Xuất siêu dữ liệu bài báo ở định dạng CrossRef XML.',
  'plugins.importexport.crossref.requirements' => 'Yêu cầu',
  'plugins.importexport.crossref.requirements.satisfied' => 'Tất cả các yêu cầu plugin được thỏa mãn.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'Một nhà xuất bản tạp chí chưa được cấu hình! Bạn phải thêm một tổ chức nhà xuất bản trên <a href="{$journalSettingsUrl}" target="_blank">Trang cài đặt tạp chí</a>.',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'Một ISSN của tạp chí chưa được cấu hình! Bạn phải thêm ISSN trên <a href="{$journalSettingsUrl}" target="_blank">Trang cài đặt tạp chí</a>.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'Các bài báo không được chọn để gán DOI trong plugin định danh công khai DOI, do đó không có khả năng gửi hoặc xuất trong plugin này.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Các mục sau đây là bắt buộc để gửi DOI cho CrossRef thành công.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Tên người gửi',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Email người gửi',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Vui lòng nhập tên người gửi.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Vui lòng nhập email người gửi.',
  'plugins.importexport.crossref.registrationIntro' => 'Nếu bạn muốn sử dụng plugin này để đăng ký trực tiếp Nhận dạng đối tượng kỹ thuật số (DOIs) với CrossRef, bạn sẽ cần username và mật khẩu (có sẵn từ <a href="http://www.crossref.org" target="_blank">CrossRef</a>) để làm như vậy. Nếu bạn không có username và mật khẩu của riêng mình, bạn vẫn có thể xuất sang định dạng CrossRef XML, nhưng bạn không thể đăng ký DOI của mình với CrossRef từ trong OJS.',
  'plugins.importexport.crossref.settings.form.username' => 'Tên người dùng (username)',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Vui lòng nhập username bạn nhận được từ CrossRef.',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS sẽ tự động gửi DOI được chỉ định cho CrossRef. Xin lưu ý rằng việc này có thể mất một khoảng thời gian ngắn sau khi xuất bản để xử lý (ví dụ: tùy thuộc vào cấu hình cronjob của bạn). Bạn có thể kiểm tra tất cả các DOI chưa đăng ký.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Sử dụng API thử nghiệm CrossRef (môi trường thử nghiệm) cho ủy thác gửi DOI. Xin đừng quên loại bỏ tùy chọn này khi thực hiện xuất bản chính thức.',
  'plugins.importexport.crossref.settings.form.validation' => 'Xác thực XML. Sử dụng tùy chọn này để tải xuống XML cho đăng ký DOI thủ công.',
  'plugins.importexport.crossref.issues.description' => 'Lưu ý: Chỉ các số (và không phải bài báo của nó) sẽ được xem xét để xuất/đăng ký tại đây.',
  'plugins.importexport.crossref.status.failed' => 'Thất bại',
  'plugins.importexport.crossref.status.registered' => 'Hoạt động',
  'plugins.importexport.crossref.status.markedRegistered' => 'Đã đánh dấu hoạt động',
  'plugins.importexport.crossref.action.register' => 'Gửi DOI',
  'plugins.importexport.crossref.statusLegend' => '
		<p>Tình trạng gửi DOI:</p>
		<p>
		- Không được gửi DOI: không có nỗ lực gửi DOI nào được thực hiện cho DOI này.<br />
		- Hoạt động: DOI đã được gửi và đang giải quyết chính xác.<br />
		- Thất bại: gửi DOI đã thất bại.<br />
		- Đã đánh dấu hoạt động: DOI được đánh dấu thủ công là hoạt động.
		</p>
		<p>Chỉ trạng thái của lần gửi DOI cuối cùng được hiển thị.</p>
		<p>Nếu một gửi DOI không thành công, vui lòng giải quyết vấn đề và thử đăng ký lại DOI.</p>',
  'plugins.importexport.crossref.action.export' => 'Tải xuống XML',
  'plugins.importexport.crossref.action.markRegistered' => 'Đánh dấu hoạt động',
  'plugins.importexport.crossref.senderTask.name' => 'Nhiệm vụ đăng ký tự động CrossRef',
  'plugins.importexport.crossref.cliUsage' => 'Usage:
{$scriptName} {$pluginName} xuất [xmlFileName] [journal_path] bài báo objectId1 [objectId2] ...
{$scriptName} {$pluginName} đăng ký [journal_path] bài báo objectId1 [objectId2] ...
',
  'plugins.importexport.crossref.register.error.mdsError' => 'Đăng ký không hoàn toàn thành công! Máy chủ đăng ký DOI trả về một lỗi.',
  'plugins.importexport.crossref.register.success.warning' => 'Đăng ký thành công nhưng cảnh báo sau đã xảy ra: \'{$ param}\'.',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'Không cósố  nào khớp với ID số được chỉ định "{$issueId}".',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'Không có bài báo nào khớp với ID bài báo được chỉ định "{$articleId}".',
);