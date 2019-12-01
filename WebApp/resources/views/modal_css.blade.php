<!DOCTYPE html>
<html>
<head>
  <title>CSS モーダルテスト</title>
  <link rel="stylesheet" href="{{ asset('/css/modal_css.css') }}">
</head>

<body>

<a href="#modal-01">モーダル1</a>
<a href="#modal-02">モーダル2</a>

<div class="modal-wrapper" id="modal-01">
  <a href="#!" class="modal-overlay"></a>
  <div class="modal-window">
    <div class="modal-content">
      <h4>Modal window</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut cursus felis. Etiam hendrerit turpis at massa auctor semper.
      </p>
    </div>
    <a href="#!" class="modal-close">×</a>
  </div>
</div>

<div class="modal-wrapper" id="modal-02">
  <a href="#!" class="modal-overlay"></a>
  <div class="modal-window">
    <div class="modal-content">
      <h4>Modal window2</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut cursus felis. Etiam hendrerit turpis at massa auctor semper.
      </p>
    </div>
    <a href="#!" class="modal-close">×</a>
  </div>
</div>

</body>
</html>
