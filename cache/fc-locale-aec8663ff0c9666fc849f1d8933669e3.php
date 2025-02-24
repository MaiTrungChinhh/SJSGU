<?php return array (
  'admin.hostedContexts' => 'Các tạp chí lưu trữ',
  'admin.settings.redirect' => 'Chuyển hướng tạp chí',
  'admin.settings.redirectInstructions' => 'Các yêu cầu đến trang web chính sẽ được chuyển hướng đến tạp chí này. Điều này có thể hữu ích nếu trang web chỉ có một tạp chí duy nhất.',
  'admin.settings.defaultMetricDescription' => '
		Cài đặt OJS của bạn được cấu hình để ghi lại nhiều hơn một số liệu sử dụng. Thống kê sử dụng sẽ được hiển thị trong một số bối cảnh.
	Có những trường hợp phải sử dụng một thống kê sử dụng duy nhất, ví dụ: để hiển thị một danh sách theo thứ tự các bài viết 
	được sử dụng nhiều nhất hoặc để xếp hạng kết quả tìm kiếm. Vui lòng chọn một trong các số liệu được cấu hình làm mặc định.
	',
  'admin.languages.confirmDisable' => 'Bạn có chắc chắn muốn tắt ngôn ngữ này? Điều này có thể ảnh hưởng đến bất kỳ tạp chí hiện đang sử dụng ngôn ngữ này.',
  'admin.languages.primaryLocaleInstructions' => 'Đây sẽ là ngôn ngữ mặc định cho trang web và bất kỳ tạp chí nào được lưu trữ.',
  'admin.languages.supportedLocalesInstructions' => 'Chọn tất cả các ngôn ngữ để hỗ trợ trên trang web. Các ngôn ngữ được chọn sẽ có sẵn để sử dụng bởi tất cả các tạp chí được lưu trữ trên trang web và cũng xuất hiện trong menu chọn ngôn ngữ để xuất hiện trên mỗi trang con của trang web (có thể được ghi đè trên các trang dành riêng cho tạp chí). Nếu nhiều ngôn ngữ không được chọn, menu chuyển đổi ngôn ngữ sẽ không xuất hiện và cài đặt ngôn ngữ mở rộng sẽ không có sẵn cho các tạp chí.',
  'admin.locale.maybeIncomplete' => 'Ngôn ngữ được đánh dấu có thể không đầy đủ.',
  'admin.languages.confirmUninstall' => 'Bạn có chắc chắn muốn gỡ cài đặt ngôn ngữ này? Điều này có thể ảnh hưởng đến bất kỳ tạp chí được lưu trữ hiện đang sử dụng ngôn ngữ này.',
  'admin.languages.installNewLocalesInstructions' => 'Chọn bất kỳ ngôn ngữ bổ sung để cài đặt hỗ trợ trong hệ thống này. Ngôn ngữ phải được cài đặt trước khi chúng có thể được sử dụng bởi các tạp chí được lưu trữ. Xem tài liệu OJS để biết thông tin hỗ trợ về việc thêm các ngôn ngữ mới.',
  'admin.auth.ojs' => 'Cơ sở dữ liệu người dùng OJS',
  'admin.auth.enableSyncProfiles' => 'Cho phép đồng bộ hóa hồ sơ người dùng (nếu được hỗ trợ bởi plugin xác thực này). Thông tin hồ sơ người dùng sẽ được cập nhật tự động từ nguồn từ xa khi người dùng đăng nhập và thay đổi hồ sơ (bao gồm thay đổi mật khẩu) được thực hiện trong OJS sẽ được cập nhật tự động trên nguồn từ xa. Nếu tùy chọn này không được bật, thông tin hồ sơ OJS sẽ được giữ tách biệt với thông tin hồ sơ nguồn từ xa.',
  'admin.auth.enableSyncPasswords' => 'Cho phép sửa đổi mật khẩu người dùng (nếu được hỗ trợ bởi plugin xác thực này). Bật tùy chọn này cho phép người dùng sửa đổi mật khẩu của họ từ trong OJS và sử dụng tính năng "quên mật khẩu" của OJS để đặt lại mật khẩu đã quên. Các chức năng này sẽ không khả dụng đối với người dùng có nguồn xác thực này nếu tùy chọn này không được bật.',
  'admin.auth.enableCreateUsers' => 'Cho phép tạo người dùng (nếu được hỗ trợ bởi plugin xác thực này). Người dùng được tạo trong OJS với nguồn xác thực này sẽ được tự động thêm vào nguồn xác thực từ xa nếu họ chưa tồn tại. Ngoài ra, nếu nguồn này là nguồn xác thực mặc định, tài khoản OJS được tạo thông qua đăng ký người dùng cũng sẽ được thêm vào nguồn xác thực từ xa.',
  'admin.systemVersion' => 'Phiên bản OJS',
  'admin.systemConfiguration' => 'Cấu hình OJS',
  'admin.systemConfigurationDescription' => 'Cài đặt cấu hình OJS từ <tt>config.inc.php</tt>.',
  'admin.journals.createInstructions' => 'Bạn sẽ tự động được cấp quyền là người quản lý của tạp chí này. Sau khi tạo một tạp chí mới, bạn sẽ được chuyển hướng đến trình hướng dẫn cài đặt của nó, để hoàn tất thiết lập tạp chí ban đầu.',
  'admin.journals.journalSettings' => 'Cài đặt tạp chí',
  'admin.journals.noneCreated' => 'Không có tạp chí nào được tạo.',
  'admin.contexts.create' => 'Tạo tạp chí',
  'admin.journals.urlWillBe' => 'Đây phải là một từ ngắn hoặc từ viết tắt xác định tạp chí. URL của tạp chí sẽ là {$sampleUrl}.',
  'admin.contexts.form.titleRequired' => 'Bắt buộc phải có tiêu đề.',
  'admin.contexts.form.pathRequired' => 'Bắt buộc phải có đường dẫn.',
  'admin.contexts.form.pathAlphaNumeric' => 'Đường dẫn chỉ có thể bao gồm chữ cái, số và ký tự _ và -. Nó phải bắt đầu và kết thúc bằng một chữ cái hoặc số.',
  'admin.contexts.form.pathExists' => 'Đường dẫn bạn cung cấp đã được sử dụng bởi một tạp chí khác.',
  'admin.journals.enableJournalInstructions' => 'Cho phép tạp chí này xuất hiện công khai trên trang web',
  'admin.contexts.contextDescription' => 'Mô tả tạp chí',
  'admin.journal.pathImportInstructions' => 'Đường dẫn tạp chí hiện có hoặc đường dẫn để tạo (ví dụ: "ojs").',
  'admin.journals.importSubscriptions' => 'Nhập thuê bao',
  'admin.journals.transcode' => 'Mã hoá siêu dữ liệu bài viết theo ISO8859-1',
  'admin.journals.redirect' => 'Tạo mã để ánh xạ các URL của OJS 1 thành các URL của OJS 2',
  'admin.journals.form.importPathRequired' => 'Bắt buộc phải có Đường dẫn nhập dữ liệu.',
  'admin.journals.importErrors' => 'Quá trình nhập thất bại',
  'admin.mergeUsers' => 'Hợp nhất người dùng',
  'admin.mergeUsers.mergeUser' => 'Hợp nhất người dùng',
  'admin.mergeUsers.into.description' => 'Chọn một người dùng có thuộc tính tác giả, biên tập viên, v.v. của người dùng trước đó.',
  'admin.mergeUsers.from.description' => 'Chọn một (hoặc một số) người dùng để hợp nhất vào một tài khoản người dùng khác (ví dụ: khi ai đó có hai tài khoản người dùng). (Các) tài khoản được chọn trước sẽ bị xóa và mọi nội dung bài nộp, phân quyền, v.v. sẽ được quy cho tài khoản thứ hai.',
  'admin.mergeUsers.allUsers' => 'Tất cả người dùng đã đăng ký',
  'admin.mergeUsers.confirm' => 'Bạn có chắc chắn muốn hợp nhất (các) tài khoản {$oldAccountCount} đã chọn vào tài khoản với tên người dùng "{$newUsername}" không? Các tài khoản {$oldAccountCount} đã chọn sẽ không tồn tại sau đó. Hành động này là không thể đảo ngược.',
  'admin.mergeUsers.noneEnrolled' => 'Không có người dùng đã đăng ký.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Nhắc nhở hết hạn thuê bao',
  'admin.scheduledTask.openAccessNotification' => 'Thông báo truy cập mở',
  'admin.scheduledTask.reviewReminder' => 'Nhắc nhở phản biện',
  'admin.contexts.form.edit.success' => '{$name} đã được chỉnh sửa thành công.',
  'admin.contexts.form.create.success' => '{$name} đã được tạo thành công.',
  'admin.languages.downloadUnavailable' => '
xuống gói ngôn ngữ từ máy chủ web Dự án Tri thức Công đồng hiện "
khả dụng vì:</p>
"

chủ của bạn không có hoặc cho phép thực thi tiện ích GNU "tar"

không thể sửa đổi tệp đăng ký ngôn ngữ, điển hình là "


thể tải xuống các gói ngôn ngữ theo cách thủ công từ <a href="
web PKP</a>.</p>"',
  'admin.settings.config.success' => 'Các cài đặt cấu hình trang web đã được cập nhật thành công.',
  'admin.settings.appearance.success' => 'Các cài đặt giao diện trang web đã được cập nhật thành công.',
  'admin.settings.info.success' => 'Thông tin trang web đã được cập nhật thành công.',
);