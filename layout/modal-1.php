<div class="modal-wrapper" id="modal-wrapper-1">
    <div id="modal" class="text-center">
      <span><i class="fas fa-times-circle" id="modal-close-one"></i></span>
      <h2>フィルター</h2>
      <form action="play/controller.php" method="post">
        <div class="select-area">
          <p class="text-left label-content"><label for="tag">タグを選ぶ</label></p>
          <select name="tag" id="tag">
          <option value="IT基礎">IT基礎</option>
            <option value="ネットワーク">ネットワーク</option>
            <option value="プログラミング言語">プログラミング言語</option>
          </select>
        </div>
        <div class="select-area">
          <p class="text-left label-content"><label for="number">問題数</label></p>
          <select name="number" id="number">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
          </select>
        </div>
        <div class="select-area">
          <p class="text-left label-content"><label for="email">問題の種類</label></p>
          <select name="flag" id="flag">
            <option value="1">共通問題のみ</option>
            <option value="0">自作問題のみ</option>
          </select>
        </div>
        <input type="hidden" name="genre" value="english">
        <button type="submit">スタート</button>
      </form>
    </div>
</div>
