<?php return array (
  'plugins.importexport.users.displayName' => 'Plugin người dùng XML',
  'plugins.importexport.users.description' => 'Nhập và xuất người dùng',
  'plugins.importexport.users.cliUsage' => 'Sử dụng: {$scriptName} {$pluginName} [command] ...
Các lệnh:
	nhập [xmlFileName] [journal_path]
	xuất [xmlFileName] [journal_path]
	xuất [xmlFileName] [journal_path] [userId1] [userId2] ...
',
  'plugins.importexport.users.cliUsage.examples' => '
Ví dụ:
	Nhập người dùng vào myJournal từ myImportFile.xml:
	{$scriptName} {$pluginName} nhập myImportFile.xml myJournal

	Xuất tất cả người dùng từ myJournal:
	{$scriptName} {$pluginName} xuất myExportFile.xml myJournal

	Xuất người dùng được chỉ định bởi ID của họ:
	{$scriptName} {$pluginName} xuất myExportFile.xml myJournal 1 2
',
  'plugins.importexport.users.import.importUsers' => 'Nhập người dùng',
  'plugins.importexport.users.import.instructions' => 'Chọn tập tin dữ liệu XML chứa thông tin người dùng để nhập vào tạp chí này. Xem trợ giúp tạp chí để biết chi tiết về định dạng của tập tin này. <br /> <br /> Lưu ý rằng nếu tập tin đã nhập chứa bất kỳ username hoặc địa chỉ email nào đã tồn tại trong hệ thống, dữ liệu người dùng cho những người dùng đó sẽ không được nhập và bất kỳ vai trò mới nào sẽ được tạo sẽ được gán cho người dùng hiện tại.',
  'plugins.importexport.users.import.dataFile' => 'Tập tin dữ liệu người dùng',
  'plugins.importexport.users.import.sendNotify' => 'Gửi email thông báo cho mỗi người dùng được nhập vào với tên tài khoản và mật khẩu tương ứng.',
  'plugins.importexport.users.import.continueOnError' => 'Tiếp tục nhập người dùng khác nếu xảy ra lỗi.',
  'plugins.importexport.users.import.usersWereImported' => 'Những người dùng sau đã được nhập thành công vào hệ thống',
  'plugins.importexport.users.import.errorsOccurred' => 'Đã có lỗi xảy ra trong quá trình nhập',
  'plugins.importexport.users.import.confirmUsers' => 'Xác nhận rằng đây là những người dùng bạn muốn nhập vào hệ thống',
  'plugins.importexport.users.import.warning' => 'Cảnh báo',
  'plugins.importexport.users.import.encryptionMismatch' => 'Không thể sử dụng mật khẩu được băm với {$importHash}; OJS được định cấu hình để sử dụng {$ojsHash}. Nếu bạn tiếp tục, bạn sẽ cần đặt lại mật khẩu của người dùng đã nhập.',
  'plugins.importexport.users.unknownPress' => 'Một đường dẫn tạp chí không xác định "{$journalPath}" đã được chỉ định.',
  'plugins.importexport.users.export.exportUsers' => 'Xuất người dùng',
  'plugins.importexport.users.export.exportByRole' => 'Xuất theo vai trò',
  'plugins.importexport.users.export.exportAllUsers' => 'Xuất tất cả',
  'plugins.importexport.users.export.errorsOccurred' => 'Đã có lỗi xảy ra khi Xuất dữ liệu người dùng',
  'plugins.importexport.users.importComplete' => 'Việc nhập thành công. Người dùng có tên người dùng và địa chỉ email chưa được sử dụng đã được nhập cùng với các nhóm người dùng đi kèm.',
  'plugins.importexport.users.results' => 'Kết quả',
  'plugins.importexport.users.uploadFile' => 'Vui lòng tải lên một tập tin trong "Nhập" để tiếp tục.',
);