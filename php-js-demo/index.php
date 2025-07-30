<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP + JS 响应演示</title>
</head>
<body>
  <h1>PHP + JS 响应式 Demo</h1>
  <?php
  $name = htmlspecialchars($_GET['name'] ?? '访客');
  echo "<p>欢迎，{$name}！</p>";
  ?>
  <button id="btn">获取当前时间</button>
  <p id="time"></p>

  <script>
    document.getElementById('btn').addEventListener('click', () => {
      fetch('time.php')
        .then(res => res.text())
        .then(txt => { document.getElementById('time').innerText = txt; });
    });
  </script>
</body>
</html>
