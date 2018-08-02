<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQueryradio button</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 // Lấy giá trị của radio checked
    $("#isSelect").click(function () {
    	var a=$('input:radio[name=sex]:checked').val();
     	alert(a);
     	window.location.href="size.php?gt="+a+"";
    });
  
 // Chọn Nam
    $("#selectMale").click(function () {
  $('input:radio[name=sex]:nth(0)').attr('checked',true);
  //$('input:radio[name=sex]')[0].checked = true;
    });
  
 // Chọn Nữ
    $("#selectFemale").click(function () {
  $('input:radio[name=sex]:nth(1)').attr('checked',true);
  //$('input:radio[name=sex]')[1].checked = true;
    });
  
  // Chọn KXD
    $("#selectUnknown").click(function () {
  $('input:radio[name=sex]:nth(2)').attr('checked',true);
  //$('input:radio[name=sex]')[2].checked = true;
    });
  
 // Xóa 
    $("#reset").click(function () {
  $('input:radio[name=sex]').attr('checked',false);
    });
});
</script>
</head>
  
<body>
<h1>jQuery thao tác với radio button</h1>
<form action="">
<input type="radio" name="sex" value="Nam"/>Nam
<input type="radio" name="sex" value="Nữ"/>Nữ
<input type="radio" name="sex" value="Unknown"/>Không xác định
<br>
<br>
<br>
<input type='button' value='Lấy giá trị đang checked' id='isSelect'>
<input type='button' value='Chọn Nam' id='selectMale'>
<input type='button' value='Chọn Nữ' id='selectFemale'>
<input type='button' value='Chọn KXD' id='selectUnknown'>
<input type='button' value='Xóa' id='reset'>
</form>
</body>
</html>