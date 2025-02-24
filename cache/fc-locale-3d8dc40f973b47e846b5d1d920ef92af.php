<?php return array (
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Kích hoạt tùy chọn này để sử dụng phiên bản plugin tôn trọng luật pháp về quyền riêng tư, tức là ghi nhật ký địa chỉ IP được băm, thông báo cho người dùng về theo dõi và cung cấp tùy chọn từ chối cho người dùng. Lưu ý: khi sử dụng tùy chọn này, bạn sẽ không thể sử dụng các tính năng địa lý của plugin.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Để đảm bảo quyền riêng tư dữ liệu, bạn phải chỉ định một tệp có thể đọc và ghi được bởi người dùng web để chứa giá trị muối được tạo ngẫu nhiên. Tập tin này KHÔNG được sao lưu để đảm bảo bảo vệ quyền riêng tư. Muối được tạo ngẫu nhiên bằng cách sử dụng: hàm mcrypt_create_iv, yêu cầu mcrypt PHP; hàm openssl_random_pseudo_bytes, yêu cầu PHP openssl; tệp /dev/urandom, chỉ hoạt động trên các hệ thống *nix; hoặc hàm mt_rand, không an toàn về mặt mật mã. Do đó, nếu bạn đang sử dụng máy chủ Windows, vui lòng đảm bảo rằng bạn đã cài đặt PHP mcrypt hoặc openssl được bật để có thông tin nhạy cảm được tạo bằng mật mã.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'Tệp muối không thể ghi được.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Đường dẫn tệp cho ẩn danh',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Tùy chọn bảo mật dữ liệu',
  'plugins.generic.usageStats.settings.saved' => 'Đã lưu cài đặt cho plugin thống kê sử dụng',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'Regex mặc định được sử dụng có thể phân tích cú pháp các tệp nhật ký truy cập apache ở định dạng kết hợp và cả tệp nhật ký của plugin. Nếu các tệp nhật ký truy cập của bạn ở định dạng khác, bạn sẽ phải chèn một biểu thức chính có khả năng phân tích cú pháp chúng và đưa ra các giá trị mong đợi. Xem UsageStatsLoader::_getDataFromLogEntry() để biết thêm thông tin.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Phân tích cú pháp tệp nhật ký regex',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Kích hoạt tùy chọn này sẽ làm cho plugin tạo các tệp nhật ký truy cập bên trong thư mục tệp. Những tập tin này nên được sử dụng để trích xuất dữ liệu thống kê sử dụng. Nếu bạn không muốn tạo thêm tệp nhật ký truy cập, bạn có thể tắt tùy chọn này và sử dụng tệp truy cập nhật ký máy chủ của riêng bạn.',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Tạo tệp nhật ký',
  'plugins.generic.usageStats.settings.logging' => 'Tùy chọn nhật ký truy cập',
  'plugins.generic.usageStats.optout.description.long.ojs2' => '
		<h3> Thông tin Bảo mật Chung </h3>
<p> Vui lòng tham khảo <a href="{$privacyStatementUrl}"> tuyên bố về quyền riêng tư </a> chung của chúng tôi. </p>
<h3> Thống kê sử dụng </h3>
<p> Để có thể phân tích việc sử dụng và tác động của tạp chí của chúng tôi và các bài báo đã xuất bản, chúng tôi thu thập và ghi lại quyền truy cập vào trang chủ của tạp chí, các số báo, bài báo, phòng trưng bày và các tệp bổ sung. Trong quá trình này, tất cả dữ liệu được ẩn danh. Không có thông tin cá nhân được ghi lại. Địa chỉ IP được ẩn danh bằng cách được băm (sử dụng <em> SHA 256 </em>) kết hợp với <em> muối dài 64 ký tự an toàn </em> được tự động <em> tạo ngẫu nhiên và ghi đè hàng ngày < / em>. Do đó, địa chỉ IP không thể được tạo lại. </p>
<p> Thông tin sau được thu thập bên cạnh các địa chỉ IP ẩn danh: </p>
<ul>
<li> Loại truy cập (tức là quản trị) </li>
<li> Yêu cầu thời gian </li>
<li> URL được yêu cầu </li>
<li> Mã trạng thái HTTP </li>
<li> Trình duyệt </li>
</ul>
<p> Dữ liệu thu thập được chỉ được sử dụng cho mục đích đánh giá. Không có địa chỉ IP nào được ánh xạ tới ID người dùng. Về mặt kỹ thuật, không thể theo dõi một tập dữ liệu cụ thể đến một địa chỉ IP cụ thể. </p>',
  'plugins.generic.usageStats.optout.description.long.omp' => '
		<h3> Thông tin Bảo mật Chung </h3>
<p> Vui lòng tham khảo <a href="{$privacyStatementUrl}"> tuyên bố về quyền riêng tư </a> chung của chúng tôi. </p>
<h3> Thống kê sử dụng </h3>
<p> Để có thể phân tích việc sử dụng và tác động của các ấn phẩm của chúng tôi, chúng tôi thu thập và ghi nhật ký truy cập vào trang chủ, danh mục, loạt bài, sách và tệp. Trong quá trình này, tất cả dữ liệu được ẩn danh. Không có thông tin cá nhân được ghi lại. Địa chỉ IP được ẩn danh bằng cách được băm (sử dụng <em> SHA 256 </em>) kết hợp với <em> muối dài 64 ký tự an toàn </em> được tự động <em> tạo ngẫu nhiên và ghi đè hàng ngày < / em>. Do đó, địa chỉ IP không thể được tạo lại. </p>
<p> Thông tin sau được thu thập bên cạnh các địa chỉ IP ẩn danh: </p>
<ul>
<li> Loại truy cập (tức là quản trị) </li>
<li> Yêu cầu thời gian </li>
<li> URL được yêu cầu </li>
<li> Mã trạng thái HTTP </li>
<li> Trình duyệt </li>
</ul>
<p> Dữ liệu thu thập được chỉ được sử dụng cho mục đích đánh giá. Không có địa chỉ IP nào được ánh xạ tới ID người dùng. Về mặt kỹ thuật, không thể theo dõi một tập dữ liệu cụ thể đến một địa chỉ IP cụ thể. </p>',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.omp' => 'Mỗi \'press\' có thể ghi đè các cài đặt này từ  trang bổ trợ của \'press\'.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.ojs2' => 'Mỗi tạp chí có thể ghi đè các cài đặt này từ trang bổ trợ của tạp chí.',
  'plugins.generic.usageStats.downloads' => 'Tải xuống',
  'plugins.generic.usageStats.monthInitials' => 'Tháng 1 Tháng 2 Tháng 3 Tháng 4 Tháng 5 Tháng 6 Tháng 7 Tháng 8 Tháng 9 Tháng 10 Tháng 11 Tháng 12',
  'plugins.generic.usageStats.noStats' => 'Dữ liệu tải xuống chưa có sẵn.',
  'plugins.generic.usageStats.statsSum' => 'Tổng tất cả các tệp đã tải xuống tệp',
  'plugins.reports.usageStats.metricType.full' => 'Thống kê Dự án Tri thức Công cộng (COUNTER. sẵn sàng)',
  'plugins.reports.usageStats.metricType' => 'PKP/COUNTER',
  'plugins.generic.usageStats.optout.cookie' => '
		<p> Nếu muốn, bạn có thể chọn không tham gia quá trình thu thập dữ liệu. Bằng cách nhấp vào nút chọn không tham gia bên dưới, bạn có thể chủ động quyết định không tham gia vào phân tích thống kê. Khi nhấp vào nút chọn không tham gia, một <em> cookie </em> đang được tạo trên hệ thống của bạn để lưu trữ quyết định của bạn. Nếu cài đặt bảo mật của trình duyệt dẫn đến việc cookie tự động bị xóa, bạn sẽ phải chọn không tham gia lại vào lần tiếp theo khi bạn truy cập trang web này. Cookie chỉ hợp lệ cho một trình duyệt. Nếu bạn sử dụng một trình duyệt khác, bạn sẽ phải từ chối một lần nữa. Không có thông tin cá nhân được lưu trữ trong cookie này. Hợp đồng thuê cookie này có hiệu lực trong một năm kể từ lần truy cập cuối cùng của bạn. </p>
<p> Xin lưu ý rằng nhật ký máy chủ chung không bị ảnh hưởng bởi quyết định chọn không tham gia quy trình đánh giá chi tiết của bạn. Vui lòng tham khảo <a href="{$privacyStatementUrl}"> tuyên bố về quyền riêng tư </a> chung của chúng tôi. </p>',
  'plugins.generic.usageStats.optout' => 'Chọn không tham gia',
  'plugins.generic.usageStats.optin' => 'Chọn tham gia',
  'plugins.generic.usageStats.optout.done' => '
		<p> Bạn đã chọn không tham gia thu thập thống kê sử dụng thành công. Trong khi bạn nhìn thấy thông báo này, sẽ không có thống kê nào được thu thập về việc bạn sử dụng trang web này. Nhấp vào nút bên dưới để hoàn nguyên quyết định của bạn. </p>',
  'plugins.generic.usageStats.optout.shortDesc' => 'Chúng tôi ghi lại số liệu thống kê sử dụng ẩn danh. Vui lòng đọc <a href="{$privacyInfo}"> thông tin bảo mật </a> để biết chi tiết.',
  'plugins.generic.usageStats.optout.title' => 'Thông tin thống kê sử dụng',
  'plugins.generic.usageStats.optout.description' => 'Thông tin bảo mật thống kê sử dụng',
  'plugins.generic.usageStats.optout.displayName' => 'Thông tin bảo mật thống kê sử dụng',
  'plugins.reports.usageStats.report.description' => 'PKP Báo cáo thống kê sử dụng mặc định (COUNTER sẵn sàng)',
  'plugins.reports.usageStats.report.displayName' => 'Báo cáo thống kê sử dụng PKP',
  'plugins.generic.usageStats.description' => 'Trình bày  dữ liệu đối tượng sử dụng thống kê. Có thể sử dụng tệp nhật ký truy cập máy chủ để trích xuất số liệu thống kê.',
  'plugins.generic.usageStats.displayName' => 'Thống kê sử dụng',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'Thư mục {$directory} không trống. Điều này có thể chỉ ra một quá trình trước đó bị lỗi hoặc một quá trình đang chạy đồng thời. Tệp này sẽ được tự động xử lý lại nếu bạn cũng đang sử dụng SchedTasksAutoStage.xml, nếu không, bạn sẽ cần phải di chuyển thủ công bất kỳ tệp nào trong thư mục xử lý trở lại thư mục giai đoạn.',
  'plugins.generic.usageStats.pluginNotEnabled' => 'Plugin thống kê sử dụng bị tắt. Không có tệp nhật ký nào được xử lý.',
  'plugins.generic.usageStats.loadDataError' => 'Không thể tải dữ liệu được trích xuất từ tệp {$file}. Tệp đã được chuyển sang giai đoạn một lần nữa.',
  'plugins.generic.usageStats.removeUrlError' => 'Số dòng {$lineNumber} từ tệp {$file} chứa một url mà hệ thống không thể xóa url cơ sở khỏi đó.',
  'plugins.generic.usageStats.invalidLogEntry' => 'Số dòng {$lineNumber} từ tệp {$file} không phải là mục nhập nhật ký hợp lệ và tệp đã bị từ chối.',
  'plugins.generic.usageStats.openFileFailed' => 'Tệp {$file} không thể mở và đã bị từ chối.',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Tác vụ trình tải tệp thống kê sử dụng',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Xác định số lượng dữ liệu tối đa để hiển thị cùng một lúc cho một điểm trục x cụ thể. Giá trị cao hơn có thể tạo ra các biểu đồ khó hiểu. Một cái gì đó từ 3 đến 5 là an toàn.',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Đường thẳng',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Thanh',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Chọn loại biểu đồ để hiển thị thống kê tải xuống',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Hiển thị biểu đồ thống kê gửi cho người đọc',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Các cài đặt này sẽ chỉ được áp dụng cho thống kê sử dụng trên {$contextName}.',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Tùy chọn hiển thị Thống kê',
  'plugins.generic.usageStats.settings.compressArchives' => 'Nén lưu trữ',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Kích hoạt tùy chọn này để nén các tệp nhật ký đã lưu trữ bằng công cụ gzip (bạn sẽ phải định cấu hình cài đặt gzip bên trong config.inc.php). Nếu bạn có một trang web có lưu lượng truy cập cao, bạn nên kích hoạt tính năng này, vì vậy bạn có thể tiết kiệm thêm dung lượng đĩa.',
  'plugins.generic.usageStats.settings.archives' => 'Lưu trữ',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'Cột tùy chọn "Thành phố" yêu cầu cột tùy chọn "Khu vực".',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Bật hoặc tắt tính năng thu thập thông tin tùy chọn sau. Điều này sẽ ảnh hưởng đến các báo cáo thống kê có thể mà bạn có thể truy xuất và cũng sẽ ảnh hưởng đến kích thước cơ sở dữ liệu. KHÔNG ĐƯỢC THAY ĐỔI trừ khi bạn hoàn toàn hiểu những gì bạn đang làm.',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Thông tin thống kê tùy chọn',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Tôn trọng quyền riêng tư của dữ liệu',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Việc bật quyền riêng tư dữ liệu sẽ loại trừ Khu vực dưới dạng thống kê tùy chọn.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Việc bật quyền riêng tư dữ liệu sẽ loại trừ Thành phố dưới dạng thống kê tùy chọn.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Để kích hoạt quyền riêng tư dữ liệu yêu cầu phải có tệp muối.',
);