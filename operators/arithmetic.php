<?php
  $x = rand(1, 10);
  $y = rand(1, 10);
?><!DOCTYPE html>
<html lang="fa" data-theme="dark" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>عملگرهای ریاضی PHP</title>
  <link rel="stylesheet" href="../assets/pico.blue.min.css" />
  <link rel="stylesheet" href="../src/style.css" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <main class="container">
    <h1>عملگرهای ریاضی PHP</h1>
    <nav aria-label="breadcrumb">
      <ul>
        <li><a href="..">عملگرهای PHP</a></li>
        <li>عملگرهای ریاضی PHP</li>
      </ul>
    </nav>

    <article>
      <p><strong>۳ نکته مهم:</strong></p>
      <ul>
        <li>در مثال‌های پایین: <code><?= '$x' . " = $x;" ?></code> و <code><?= '$y' . " = $y;" ?></code> هستند</li>
        <li>مقدار متغیرهای بالا هر بار توسط سرور به صورت <mark>تصادفی</mark> انتخاب و تنظیم میشوند</li>
        <li>نتیجه مثال‌ها هر بار روی سرور <mark>اجرا</mark> میشوند</li>
      </ul>
    </article>

    <details open>
      <summary role="button" class="primary">انواع عملگرهای ریاضی:</summary>
      <div class="overflow-auto">
        <table class="striped">
          <thead>
            <tr>
              <th>عملگر</th>
              <th>توضیح</th>
              <th>مثال</th>
              <th>نتیجه</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><kbd>+</kbd></td>
              <td>جمع</td>
              <td><code>$x + $y</code></td>
              <td><code><?= $x + $y; ?></code></td>
            </tr>
            <tr>
              <td><kbd>-</kbd></td>
              <td>تفریق</td>
              <td><code>$x - $y</code></td>
              <td><code><?= $x - $y; ?></code></td>
            </tr>
            <tr>
              <td><kbd>*</kbd></td>
              <td>ضرب</td>
              <td><code>$x * $y</code></td>
              <td><code><?= $x * $y; ?></code></td>
            </tr>
            <tr>
              <td><kbd>/</kbd></td>
              <td>تقسیم</td>
              <td><code>$x / $y</code></td>
              <td><code><?= $x / $y; ?></code></td>
            </tr>
            <tr>
              <td><kbd>%</kbd></td>
              <td>باقیمانده</td>
              <td><code>$x % $y</code></td>
              <td><code><?= $x % $y; ?></code></td>
            </tr>
            <tr>
              <td><kbd>**</kbd></td>
              <td>توان</td>
              <td><code>$x ** $y</code></td>
              <td><code><?= $x ** $y; ?></code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>
  </main>
</body>
</html>