  <section class="home-section">
    <div class="hs__header" style="display: none;">
      <div class="searchbox">
        <form>
          <input id="tf_search" type="text" name="" placeholder="Nhập nội dung của bạn...">
          <input id="btn_search" type="submit" name="" value="Tìm ngay">
        </form>
      </div>
    </div>
    <div class="hs__content">
      <div class="user-info">
        <h1>THÔNG TIN CỦA BẠN</h1>
        <div class="">
          <p>Họ và tên: </p>
          <input id="user-name" type="text"/>
        </div>
        <div class="">
          <p>Mật khẩu mới: </p>
          <input id="newpass" type="password" placeholder="...">
        </div>
        <div class="">
          <p>Nhập lại: </p>
          <input id="repass" type="password" placeholder="...">
        </div>
        <button id="btn_update">Cập nhật</button>
      </div>

    </div>
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/app/js/Student/Account/Account.js"></script>