<div id="contact-container">
    <div id="contact-left">
      <div id="contact-nav"><a href="index.html">TRANG CHỦ &gt;</a></div>
      <div id="contact-content">
        <div id="contact-title">Liên hệ</div>
        <div id="contact-form">
          <form name="contact" method="post" action="#">
            <label>Họ tên (bắt buộc)</label>
            <input type="text" name="your-name" required>
            <label>Email (bắt buộc)</label>
            <input type="email" name="your-email" required>
            <label>Chủ đề</label>
            <input type="text" name="your-Subject">
            <label>Nội dung</label>
            <br>
            <textarea name="your-message"></textarea>
            <br>
            <input type="submit" value="Gửi">
          </form>
        </div>
      </div>
    </div>
    <div id="contact-right">
      <div id="column-post">
        <div class="column-post-title">
          <h4>BÀI NGẪU NHIÊN</h4>
        </div>
        <div class="column-content">
          <ul class="column-article-list">
            <?php 
				$baiviet = new Baiviet();
				include "random-article-items.php";
			?>
          </ul>
        </div>
      </div>
    </div>
  </div>