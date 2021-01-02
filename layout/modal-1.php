<div class="modal-wrapper" id="modal-wrapper-1">
    <div id="modal" class="text-center">
      <span><i class="fas fa-times-circle" id="modal-close-one"></i></span>
      <h2>フィルター</h2>
      <form action="quiz.php" method="post">
        <div class="select-area">
          <label for="tag">タグを選ぶ</label>
          <select name="tag" id="tag">
            <option value="ネットワーク">ネットワーク</option>
            <option value="フロントエンド">フロントエンド</option>
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
          </select>
        </div>
        <div class="select-area">
          <label for="number">問題数</label>
          <select name="number" id="number">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
          </select>
        </div>
        <div class="select-area">
          <label for="flag">問題の種類</label>
          <select name="flag" id="flag">
            <option value="0">共通問題のみ</option>
            <option value="1">自作問題のみ</option>
            <option value="1">全て含む</option>
          </select>
        </div>
        <input type="hidden" name="type" value="englishword">
        <inpit type="hidden" name="id" value="<?php $login_person_id ?>">
        <button type="submit">スタート</button>
      </form>
    </div>
</div>