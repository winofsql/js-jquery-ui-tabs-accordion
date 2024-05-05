<?php 

$ui_type = "black-tie";
#$ui_type = "smoothness";
#$ui_type = "ui-lightness";
#$ui_type = "ui-darkness";
#$ui_type = "start";
#$ui_type = "redmond";
#$ui_type = "sunny";
#$ui_type = "overcast";
#$ui_type = "le-frog";
#$ui_type = "flick";
#$ui_type = "pepper-grinder";
#$ui_type = "eggplant";
#$ui_type = "dark-hive";
#$ui_type = "cupertino";
#$ui_type = "south-street";
#$ui_type = "blitzer";
#$ui_type = "humanity";
#$ui_type = "hot-sneaks";
#$ui_type = "excite-bike";
#$ui_type = "vader";
#$ui_type = "dot-luv";
#$ui_type = "mint-choc";
#$ui_type = "trontastic";
#$ui_type = "swanky-purse";

?>
<!DOCTYPE html>
<html>
<head>
<title>jQuery BUild Input</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/<?= $ui_type ?>/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<script>

$(function(){

  var target_tab = 0;
  if ( typeof(localStorage["old_active"]) != 'undefined' ) {
    target_tab = parseInt(localStorage["old_active"]);
  }
  $( "#tab-box" ).tabs({
    show: true,
    active: target_tab,
    activate: function( event, ui ) {
      localStorage["old_active"] = $( this ).tabs( "option", "active" );
    }
  });

  var target_acc2 = 0;
  if ( typeof(localStorage["target_acc2"]) != 'undefined' ) {
    target_acc2 = parseInt(localStorage["target_acc2"]);
  }
  $( "#tabs-2" ).accordion({
    heightStyle: "content",
    active: target_acc2,
    activate: function( event, ui ) {
      localStorage["target_acc2"] = $( this ).accordion( "option", "active" );
    }
  });

  var target_acc3 = 0;
  if ( typeof(localStorage["target_acc3"]) != 'undefined' ) {
    target_acc6 = parseInt(localStorage["target_acc3"]);
  }
  $( "#tabs-3" ).accordion({
    heightStyle: "content",
    active: target_acc3,
    activate: function( event, ui ) {
      localStorage["target_acc3"] = $( this ).accordion( "option", "active" );
    }
  });

});

</script>

</head>
<body>
<h1 class="alert alert-primary">jQuery UI の Tabs と Accordion</h1>

<div id="tab-box">

  <ul>
    <li><a href="#tabs-1" >サンプル1</a></li>
    <li><a href="#tabs-2" >サンプル2</a></li>
    <li><a href="#tabs-3" >サンプル3</a></li>
  </ul>
  

  <div id="tabs-1"><!-- アコーディオン無し -->
  
<pre>
● <span >基本セット</span>
● <span >入力コントロール</span>
● <span >アンカー(リンク)作成</span>
● <span >属性の参照</span>
● <span >JSON 読み込み</span>
</pre>

  </div><!-- tabs-1 の終わり -->

  <div id="tabs-2">
    <b id="t2_1" >JavaScript</b>
<pre>
● <span >String メソッド</span>
● <span >IMG 要素のみで、サムネイルと大きな画像を開く</span>
● <span >FORM 送信時、クリックしたボタンを判断する</span>
● <span >IFRAME 内にアクセスする</span>
</pre>

    <b id="t2_2" >処理</b>
<pre>
● <span >FORM の accept-charset を動的に変更して３つのページに同時送信</span>
</pre>
    
    <b id="t2_3" >FORM テンプレート</b>
<pre>
● <span >GET メソッド</span>
● <span >コンボボックス・ラジオ・チェックボックス選択</span>
● <span >入力(jQuery)</span>
● <span >入力(jQueryと一般JavaScript混在)</span>
</pre>

    <b id="t2_4" >特殊</b>
<pre>
● <span >VIDEO 要素に WEBカメラを表示</span>
● <span >CANVAS へ表示</span>
● <span >画像としてダウンロード</span>
● <span >スピーチ</span>
● <span >音声認識</span>
</pre>

  </div><!-- tabs-2 の終わり -->

  <div id="tabs-3">
    <b id="t3_1" >Form アクション( JavaScript )</b>
<pre>
● <span >チェック無し</span>
● <span >required</span>● <span >pattern="[0-9]+"</span>
● <span >onsubmit / function check()</span>
● <span >文字数チェック</span>
</pre>

    <b id="t3_2" >HTML</b>
<pre>
● <span onclick='getsrc("table-4-search",600)'>Bootstrap テーブル</span>
</pre>

  </div><!-- tabs-3 の終わり -->

</div>

</body>
</html>



<?//php phpinfo() ?>