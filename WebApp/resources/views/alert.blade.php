<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>モーダル</title>
  <link rel="stylesheet" href="{{ asset('/css/modal.css') }}">
</head>

<body>
  <div id="open">
    詳細をみる
  </div>
  <div id="mask" class="hidden"></div>
  <section id="modal" class="hidden">
    <p>He said that that that that that boy used in the sentence was wrong.<br>あの少年がその文で使ったあのthatは間違っていたと彼は言った。</p>
    <div id="close">
      閉じる
    </div>
  </section>
  <div id="open">
  　次はこっち
  </div>
  <div id="mask" class="hidden"></div>
  <section id="modal" class="hidden">
    <p>これはテストです</p>
    <div id="close">
    　閉じる
    </div>
  </section>
<script>
'use strict';
{
  const open = document.getElementById('open');
  const close = document.getElementById('close');
  const modal = document.getElementById('modal');
  const mask = document.getElementById('mask');

  open.addEventListener('click', function () {
    modal.classList.remove('hidden');
    mask.classList.remove('hidden');
  });
  close.addEventListener('click', function () {
    modal.classList.add('hidden');
    mask.classList.add('hidden');
  });
  mask.addEventListener('click', function () {
    modal.classList.add('hidden');
    mask.classList.add('hidden');
  });
}
  </script>
</body>

</html>
