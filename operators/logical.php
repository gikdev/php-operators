<?php
  function boolmoji($result) { echo($result ? '✅' : '❌'); }
  function boolword($result) { echo($result ? 'true' : 'false'); }
  $x = false;
  $y = true;
?><!DOCTYPE html>
<html lang="fa" data-theme="dark" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>عملگرهای منطقی PHP</title>
  <link rel="stylesheet" href="../assets/pico.blue.min.css" />
  <link rel="stylesheet" href="../src/style.css" />
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
  <main class="container">
    <h1>عملگرهای منطقی PHP</h1>
    <nav aria-label="breadcrumb">
      <ul>
        <li><a href="..">عملگرهای PHP</a></li>
        <li>عملگرهای منطقی PHP</li>
      </ul>
    </nav>

    <article>
      <p><strong>۲ نکته مهم:</strong></p>
      <ul>
        <li>در مثال‌های پایین: <code dir="ltr">$x = <?= boolword($x) ?>;</code> و <code>$y = <?= boolword($y) ?>;</code> هستند</li>
        <li>نتیجه مثال‌ها هر بار روی سرور <mark>اجرا</mark> میشوند</li>
      </ul>
    </article>

    <details>
      <summary role="button" class="primary">توضیح عملگرهای منطقی:</summary>
      <div class="overflow-auto">
        <table class="striped">
          <thead>
            <tr>
              <th>نام</th>
              <th>عملگر</th>
              <th>توضیح</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>And</code></td>
              <td><kbd>&&</kbd> / <kbd>and</kbd></td>
              <td>وقتی <code>true</code> برمیگردونه که هر دو عملوند <code>true</code> باشن</td>
            </tr>
            <tr>
              <td><code>Or</code></td>
              <td><kbd>or</kbd> / <kbd>||</kbd></td>
              <td>وقتی <code>true</code> برمیگردونه که حداقل یکی از دو عملوند <code>true</code> باشن</td>
            </tr>
            <tr>
              <td><code>Exclusive Or</code></td>
              <td><kbd>xor</kbd></td>
              <td>فقط وقتی <code>true</code> برمیگردونه که فقط یکی از عملوندها <code>true</code> باشه</td>
            </tr>
            <tr>
              <td><code>Not</code></td>
              <td><kbd>!</kbd></td>
              <td>مقدار را برعکس میکند</td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>

    <details open>
      <summary role="button" class="primary">انواع عملگرهای منطقی:</summary>
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
              <td><kbd>&&</kbd> / <kbd>and</kbd></td>
              <td><code>And</code></td>
              <td><code><?php boolmoji($x and $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>or</kbd> / <kbd>||</kbd></td>
              <td><code>Or</code></td>
              <td><code><?php boolmoji($x or $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>xor</kbd></td>
              <td><code>$x xor $y</code></td>
              <td><code><?php boolmoji($x xor $y) ?></code></td>
            </tr>
            <tr>
              <td><kbd>!</kbd></td>
              <td><code>!$x</code></td>
              <td><code><?php boolmoji(!$x) ?></code></td>
            </tr>
            <tr>
              <td><kbd>!</kbd></td>
              <td><code>!$y</code></td>
              <td><code><?php boolmoji(!$y) ?></code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </details>
  </main>
</body>
</html>