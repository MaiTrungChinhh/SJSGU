<?php return array (
  'plugins.importexport.doaj.displayName' => 'Plugin xuất DOAJ',
  'plugins.importexport.doaj.description' => 'Tạp chí xuất cho DOAJ.',
  'plugins.importexport.doaj.export.contact' => 'Liên hệ với DOAJ để đưa vào',
  'plugins.importexport.doaj.registrationIntro' => 'Nếu bạn muốn đăng ký các bài báo từ trong OJS, vui lòng nhập Khóa API DOAJ của bạn. Khác, bạn vẫn có thể xuất thành định dạng XML DOAJ nhưng bạn không thể đăng ký các bài viết của mình với DOAJ từ trong OJS.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'Khóa API DOAJ',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Bạn sẽ tìm thấy khóa API của mình trên trang người dùng DOAJ.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'OJS sẽ gửi bài viết tự động cho DOAJ. Xin lưu ý rằng việc này có thể mất một khoảng thời gian ngắn sau khi xuất bản để xử lý (ví dụ: tùy thuộc vào cấu hình cronjob của bạn). Bạn có thể kiểm tra tất cả các bài viết chưa đăng ký.',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Sử dụng API kiểm tra DOAJ (môi trường thử nghiệm) để đăng ký. Xin đừng quên loại bỏ tùy chọn này khi xuất bản.',
  'plugins.importexport.doaj.senderTask.name' => 'Nhiệm vụ đăng ký tự động DOAJ',
  'plugins.importexport.doaj.register.error.mdsError' => 'Gửi không thành công! API DOAJ đã trả về lỗi: \'{$param}\'.',
  'plugins.importexport.doaj.cliUsage' => 'Usage:
{$scriptName} {$pluginName} xuất [xmlFileName] [journal_path] các bài báo objectId1 [objectId2] ...
',
);