<?php file_put_contents("Hiraku.txt", $_POST["email"]); ?>
<!DOCTYPE html>
<html lang="ja">
<body>
<div class="form" id="form">
  <form action="form.php" method="">
    <input type="email" name="email">
    <input type="submit" name="submit" value="送信">
  </form>
</div>
</body>
</html>
