<?php
  $xBase = rand(1, 10);
  $yBase = rand(1, 10);
  $x = 0;
  $y = 0;
?><!DOCTYPE html>
<html lang="fa" data-theme="dark" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>عملگرهای انتساب PHP</title>
  <link rel="stylesheet" href="../assets/pico.blue.min.css" />
  <link rel="stylesheet" href="../src/style.css" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <main class="container">
    <h1>عملگرهای انتساب PHP</h1>
    <nav aria-label="breadcrumb">
      <ul>
        <li><a href="..">عملگرهای PHP</a></li>
        <li>عملگرهای انتساب PHP</li>
      </ul>
    </nav>

    <article>
      <p><strong>۳ نکته مهم:</strong></p>
      <ul>
        <li>در مثال‌های پایین: <code><?= '$x' . " = $xBase;" ?></code> و <code><?= '$y' . " = $yBase;" ?></code> هستند</li>
        <li>مقدار متغیرهای بالا هر بار توسط سرور به صورت <mark>تصادفی</mark> انتخاب و تنظیم میشوند</li>
        <li>نتیجه مثال‌ها هر بار روی سرور <mark>اجرا</mark> میشوند</li>
      </ul>
    </article>

    <details open>
      <summary role="button" class="primary">انواع عملگرهای انتساب:</summary>
      <div class="overflow-auto">
        <table class="striped">
          <thead>
            <tr>
              <th>عملگر</th>
              <th>مثال</th>
              <th>مساوی است با</th>
              <th>نتیجه</th>
            </tr>
          </thead>
          <tbody>
            <?php $x = $xBase; $y = $yBase; ?>
            <tr>
              <td><kbd>=</kbd></td>
              <td><code>$x = $y</code></td>
              <td><code>$x = $y</code></td>
              <td><code>$x = <?= $x = $y; ?></code></td>
            </tr>

            <?php $x = $xBase; $y = $yBase; ?>
            <tr>
              <td><kbd>+=</kbd></td>
              <td><code>$x += $y</code></td>
              <td><code>$x = $x + $y</code></td>
              <td><code>$x = <?= $x += $y; ?></code></td>
            </tr>

            <?php $x = $xBase; $y = $yBase; ?>
            <tr>
              <td><kbd>-=</kbd></td>
              <td><code>$x -= $y</code></td>
              <td><code>$x = $x - $y</code></td>
              <td><code>$x = <?= $x -= $y; ?></code></td>
            </tr>

            <?php $x = $xBase; $y = $yBase; ?>
            <tr>
              <td><kbd>*=</kbd></td>
              <td><code>$x *= $y</code></td>
              <td><code>$x = $x * $y</code></td>
              <td><code>$x = <?= $x *= $y; ?></code></td>
            </tr>

            <?php $x = $xBase; $y = $yBase; ?>
            <tr>
              <td><kbd>/=</kbd></td>
              <td><code>$x /= $y</code></td>
              <td><code>$x = $x / $y</code></td>
              <td><code>$x = <?= $x /= $y; ?></code></td>
            </tr>

            <?php $x = $xBase; $y = $yBase; ?>
            <tr>
              <td><kbd>%=</kbd></td>
              <td><code>$x %= $y</code></td>
              <td><code>$x = $x % $y</code></td>
              <td><code>$x = <?= $x %= $y; ?></code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>
  </main>
</body>
</html>