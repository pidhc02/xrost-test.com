
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' >
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' >
<meta name='ROBOTS' content='NOARCHIVE'>

<script type='text/javascript'>
var url = 'http://dsp.testadp.com/nw/p/kbcv';
function make_url(){
  var sub_keyword = document.getElementById('sub_keyword');
  var ref_id = document.getElementById('ref_id');
  var other = document.getElementById('other');
  var cvurl = url + '?_sub_keyword=' + sub_keyword.value + '&_ref_id=' + ref_id.value;
  other.href = cvurl;
  var urltxt = document.getElementById("urltxt");
  urltxt.innerText = cvurl;
}
</script>
</head>
<body>

<hr width="30%" align="left">
・URL<br><br>
http://192.168.133.162/sol/fox_test/kbcv_page.php<br>
<br>

<hr width="30%" align="left">
・パラメータ<br><br>
<br>

<hr width="30%" align="left">
・キックバックCVリクエストURL<br><br>
ユーザ情報 ： <input type="text" name="sub_keyword" id="sub_keyword" value=""><br>
広告情報 ： <input type="text" name="ref_id" id="ref_id" value=""><br>
<a href="javascript:void(0);" onclick="javascript:make_url();">キックバックURL変更</a><br>
<br>
キックバックURL ： <div id='urltxt'>http://dsp.testadp.com/nw/p/kbcv?_sub_keyword=&_ref_id=</div><br>
<a href='http://dsp.testadp.com/nw/p/kbcv?_sub_keyword=&_ref_id=' id='other'>キックバック送信</a><br>
</body>
</html>