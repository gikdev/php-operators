<?php
  function boolmoji($result) {
    echo($result ? '✅' : '❌');
  }
  $x = rand(1, 5);
  $y = strval(rand(1, 5));
?><!DOCTYPE html>
<html lang="fa" data-theme="dark" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>عملگرهای مقایسه‌ای PHP</title>
  <link rel="stylesheet" href="../assets/pico.blue.min.css" />
  <link rel="stylesheet" href="../src/style.css" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <main class="container">
    <h1>عملگرهای مقایسه‌ای PHP</h1>
    <nav aria-label="breadcrumb">
      <ul>
        <li><a href="..">عملگرهای PHP</a></li>
        <li>عملگرهای مقایسه‌ای PHP</li>
      </ul>
    </nav>

    <article>
      <p><strong>۳ نکته مهم:</strong></p>
      <ul>
        <li>در مثال‌های پایین: <code><?= '$x' . " = $x;" ?></code> و <code><?= '$y' . " = '$y';" ?></code> هستند</li>
        <li>مقدار متغیرهای بالا هر بار توسط سرور به صورت <mark>تصادفی</mark> انتخاب و تنظیم میشوند</li>
        <li>نتیجه مثال‌ها هر بار روی سرور <mark>اجرا</mark> میشوند</li>
      </ul>
    </article>

    <details>
      <summary role="button" class="primary">توضیح عملگرهای مقایسه‌ای:</summary>
      <div class="overflow-auto">
        <table class="striped">
          <thead>
            <tr>
              <th>عملگر</th>
              <th>توضیح</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><kbd>==</kbd></td>
              <td>آیا مقدار مساوی است؟ (بدون توجه به نوع عملوندها)</td>
            </tr>
            <tr>
              <td><kbd>===</kbd></td>
              <td>آیا مقدار و نوع مساوی است؟</td>
            </tr>
            <tr>
              <td><kbd>!=</kbd></td>
              <td>آیا مقدار مساوی نیست؟ (بدون توجه به نوع عملوندها)</td>
            </tr>
            <tr>
              <td><kbd>!==</kbd></td>
              <td>آیا مقدار و نوع مساوی نیست؟</td>
            </tr>
            <tr>
              <td><kbd>&lt;&gt;</kbd></td>
              <td>آیا مقدار مساوی نیست؟ (بدون توجه به نوع عملوندها)</td>
            </tr>
            <tr>
              <td><kbd>&lt;</kbd></td>
              <td>آیا x از y کوچک‌تر است؟</td>
            </tr>
            <tr>
              <td><kbd>&gt;</kbd></td>
              <td>آیا x از y بزرگ‌تر است؟</td>
            </tr>
            <tr>
              <td><kbd>&lt;=</kbd></td>
              <td>آیا x از y کوچک‌تر یا با آن مساوی است؟</td>
            </tr>
            <tr>
              <td><kbd>&gt;=</kbd></td>
              <td>آیا x از y بزرگ‌تر یا با آن مساوی است؟</td>
            </tr>
            <tr>
              <td><kbd>&lt;=&gt;</kbd></td>
              <td>مقدار <code>1</code> اگر <code>x</code> بزرگتر باشد، مقدار <code>-1</code> اگر <code>y</code> بزرگتر باشد و مقدار <code>0</code> اگر مساوی باشند</td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>

    <details open>
      <summary role="button" class="primary">انواع عملگرهای مقایسه‌ای:</summary>
      <div class="overflow-auto">
        <table class="striped">
          <thead>
            <tr>
              <th>عملگر</th>
              <th>مثال</th>
              <th>نتیجه</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><kbd>==</kbd></td>
              <td><code>$x == $y</code></td>
              <td><code><?php boolmoji($x == $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>===</kbd></td>
              <td><code>$x === $y</code></td>
              <td><code><?php boolmoji($x === $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>!=</kbd></td>
              <td><code>$x != $y</code></td>
              <td><code><?php boolmoji($x != $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>!==</kbd></td>
              <td><code>$x !== $y</code></td>
              <td><code><?php boolmoji($x !== $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>&lt;&gt;</kbd></td>
              <td><code>$x &lt;&gt; $y</code></td>
              <td><code><?php boolmoji($x <> $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>&lt;</kbd></td>
              <td><code>$x &lt; $y</code></td>
              <td><code><?php boolmoji($x < $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>&gt;</kbd></td>
              <td><code>$x &gt; $y</code></td>
              <td><code><?php boolmoji($x > $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>&lt;=</kbd></td>
              <td><code>$x &lt;= $y</code></td>
              <td><code><?php boolmoji($x <= $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>&gt;=</kbd></td>
              <td><code>$x &gt;= $y</code></td>
              <td><code><?php boolmoji($x >= $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>&lt;=&gt;</kbd></td>
              <td><code>$x &lt;=&gt; $y</code></td>
              <td><code><?= ($x <=> $y) ?></code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>
  </main>
</body>
</html>