<?php return array (
  'plugins.importexport.native.displayName' => 'Plugin XML gốc',
  'plugins.importexport.native.description' => 'Nhập và xuất các bài báo và các số xuất bản theo định dạng XML gốc của OJS.',
  'plugins.importexport.native.import' => 'Nhập',
  'plugins.importexport.native.import.instructions' => 'Tải lên tệp XML để nhập',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Chọn các bài báo để xuất',
  'plugins.importexport.native.exportSubmissions' => 'Xuất các bài báo',
  'plugins.importexport.native.exportIssues' => 'Xuất các số',
  'plugins.importexport.native.results' => 'Kết quả',
  'plugins.inportexport.native.uploadFile' => 'Vui lòng tải lên một tập tin trong "Nhập" để tiếp tục.',
  'plugins.importexport.native.importComplete' => 'Việc nhập thành công. Các hạng mục sau đây đã được nhập:',
  'plugins.importexport.native.cliUsage' => 'Sử dụng: {$scriptName} {$pluginName} [command] ...
Các lệnh:
	nhập [xmlFileName] [journal_path] [user_name] ...
	xuất [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	xuất [xmlFileName] [journal_path] article [articleId]
	xuất [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	xuất [xmlFileName] [journal_path] issue [issueId]

Các tham số bổ sung được yêu cầu để nhập dữ liệu như sau, tùy thuộc
vào nút gốc của tài liệu XML.

Nếu nút gốc là <article> hoặc <articles>, tham số bổ sung được yêu cầu.
Các định dạng sau được chấp nhận:

{$scriptName} {$pluginName} nhập [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} nhập [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} nhập [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]
',
  'plugins.importexport.native.error.unknownSection' => 'Chuyên mục không xác định {$param}',
  'plugins.importexport.native.error.unknownUser' => 'Người dùng được chỉ định, "{$userName}", không tồn tại.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Tiêu đề của chuyên mục "{$section1Title}" và tiêu đề của chuyên mục "{$section2Title}" trong số "{$issueTitle}" phù hợp với sự  khác nhau của các chuyên mục hiện có của tạp chí.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Tiêu đề của chuyên mục "{$sectionTitle}" trong số "{$issueTitle}" phù hợp với các chuyên mục hiện có, nhưng một tiêu đề khác của chuyên mục này không khớp với tiêu đề khác của các chuyên mục hiện có của tạp chí.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'Viết tắt của chuyên mục "{$section1Abbrev}" và viết tắt của chuyên mục "{$section2Abbrev}" của số "{$issueTitle}" phù hợp trong sự khác nhau với các chuyên mục hiện có của tạp chí.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'Viết tắt của chuyên mục "{$sectionAbbrev}" trong số "{$issueTitle}"phù hợp với các chuyên mục hiện có, nhưng một viết tắt khác của chuyên mục này không khớp với viết tắt của các chuyên mục tạp chí hiện có.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Không có hoặc nhiều hơn một số xuất bản khớp với nhận dạng số xuất bản đã cho "{$issueIdentification}".',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'Số xuất bản hiện tại với id {$issueId} phù hợp với nhận dạng số xuất bản đã cho "{$issueIdentification}".  Số xuất bản này sẽ không được sửa đổi, nhưng các bài báo có thể được thêm vào.',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'Phần tử nhận dạng số xuất bản bị thiếu cho bài báo "{$articleTitle}".',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'Bài báo "{$articleTitle}" được chứa trong một số xuất bản, nhưng không có ngày xuất bản.',
);