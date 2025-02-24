<?php return array (
  'emails.orcidRequestAuthorAuthorization.description' => 'Mẫu email này được sử dụng để yêu cầu quyền truy cập bản ghi ORCID từ các tác giả.',
  'emails.orcidRequestAuthorAuthorization.body' => 'Kính gửi {$authorName},<br>
<br>
Bạn đã được liệt kê như là một tác giả của bản thảo "{$submissionTitle}" to {$contextName}.
<br>
<br>
Vui lòng cho phép chúng tôi thêm id ORCID của bạn vào bài đăng này và cũng để thêm bài đăng vào hồ sơ ORCID của bạn trên xuất bản.<br>
Truy cập liên kết đến trang web ORCID chính thức, đăng nhập với hồ sơ của bạn và cho phép truy cập bằng cách làm theo các hướng dẫn.<br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Đăng ký hoặc kết nối ORCID iD của bạn</a><br/>
<br>
<br>
<a href="{$orcidAboutUrl}">Tìm hiểu thêm về ORCID tại {$contextName}</a><br/>
<br>
Nếu bạn có bất kỳ câu hỏi, xin vui lòng liên hệ với tôi.<br>
<br>
{$principalContactSignature}<br>
',
  'emails.orcidRequestAuthorAuthorization.subject' => 'Yêu cầu truy cập bản ghi ORCID',
  'emails.orcidCollectAuthorId.description' => 'Mẫu email này được sử dụng để thu thập id ORCID từ các tác giả.',
  'emails.orcidCollectAuthorId.body' => 'Kính gửi {$authorName},<br/>
<br/>
Bạn đã được liệt kê như là một tác giả trên một bản thảo để {$contextName}.<br/>
Để xác nhận quyền tác giả của bạn, vui lòng thêm id ORCID của bạn vào bài đăng này bằng cách truy cập liên kết được cung cấp bên dưới.<br/>
<br/>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Register or connect your ORCID iD</a><br/>
<br/>
<br>
<a href="{$orcidAboutUrl}">Thông tin thêm về ORCID tại {$contextName}</a><br/>
<br/>
Nếu bạn có bất kỳ câu hỏi, xin vui lòng liên hệ với tôi.<br/>
<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.subject' => 'Gửi ORCID',
);