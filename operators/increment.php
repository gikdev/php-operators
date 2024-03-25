<?php
  $baseX = rand(1, 5);
  $baseY = rand(1, 5);
  $x = 0;
  $y = 0;
?><!DOCTYPE html>
<html lang="fa" data-theme="dark" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>عملگرهای افزایشی/کاهشی PHP</title>
  <link rel="stylesheet" href="../assets/pico.blue.min.css" />
  <link rel="stylesheet" href="../src/style.css" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <main class="container">
    <h1>عملگرهای افزایشی/کاهشی PHP</h1>
    <nav aria-label="breadcrumb">
      <ul>
        <li><a href="..">عملگرهای PHP</a></li>
        <li>عملگرهای افزایشی/کاهشی PHP</li>
      </ul>
    </nav>

    <article>
      <p><strong>۳ نکته مهم:</strong></p>
      <ul>
        <li>در مثال‌های پایین: <code><?= '$x' . " = $baseX;" ?></code> و <code><?= '$y' . " = $baseY;" ?></code> هستند</li>
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
              <td>نام</td>
              <th>توضیح</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><kbd>++$x</kbd></td>
              <td><code>pre-increment</code></td>
              <td>اول به <code>$x</code> یکی اضافه میکنه، بعد مقدارشو برمیگردونه</td>
            </tr>
            <tr>
              <td><kbd>$x++</kbd></td>
              <td><code>post-increment</code></td>
              <td>اول مقدارشو برمیگردونه، بعد به <code>$x</code> یکی اضافه میکنه</td>
            </tr>
            <tr>
              <td><kbd>--$x</kbd></td>
              <td><code>pre-decrement</code></td>
              <td>اول از <code>$x</code> یکی کم میکنه، بعد مقدارشو برمیگردونه</td>
            </tr>
            <tr>
              <td><kbd>$x--</kbd></td>
              <td><code>post-decrement</code></td>
              <td>اول مقدارشو برمیگردونه، بعد از <code>$x</code> یکی کم میکنه</td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>

    <details open>
      <summary role="button" class="primary">انواع عملگرهای افزایشی/کاهشی:</summary>
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
            <?php $x = $baseX; $y = $baseY; ?>
            <tr>
              <td><kbd>++$x</kbd></td>
              <td><code>++$x</code></td>
              <td><code><?= ++$x ?></code></td>
            </tr>
            <?php $x = $baseX; $y = $baseY; ?>
            <tr>
              <td><kbd>$x++</kbd></td>
              <td><code>$x++</code></td>
              <td><code><?= $x++ ?></code></td>
            </tr>
            <?php $x = $baseX; $y = $baseY; ?>
            <tr>
              <td><kbd>--$x</kbd></td>
              <td><code>--$x</code></td>
              <td><code><?= --$x ?></code></td>
            </tr>
            <?php $x = $baseX; $y = $baseY; ?>
            <tr>
              <td><kbd>$x--</kbd></td>
              <td><code>$x--</code></td>
              <td><code><?= $x-- ?></code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>
  </main>
</body>
</html>