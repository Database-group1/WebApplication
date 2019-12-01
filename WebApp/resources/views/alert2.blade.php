<!DOCTYPE html>
<html>
<head><title>jQuery テスト</title></head>

<body>
これはテストです

<!--
<script>
    alert("Hello Vanilla Javascript!!");
</script> -->

<button id="button">ボタン</button>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
/*jQuery.noConflict();
$(function() {
    alert('jQuery')
}); */

$('#button').on('click', function() {
    alert('Hello!');
});
</script>

</body>
</html>
