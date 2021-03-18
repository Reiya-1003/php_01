<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>今日の誕生月占い〜</title>
  <link rel='stylesheet' href='/css/style.css' type='text/css' />
  <link rel='stylesheet' href='/css/style.css?v=2' type='text/css' />
</head>
<body>
<div id="container"><!-- container end --></div>
  <div id="title">今日の誕生月占い</div>
  <div id="bana" ><img src="img/tuki.jpg"></img></div>
 <form action="uranai.php" method = "POST">
 <link rel='stylesheet' href='css/style.css' type='text/css' />
  <link rel='stylesheet' href='css/style.css?v=2' type='text/css' />
    <p id="select">あなたの誕生月
      <select name= "tuki">
        <option value="1月のあなたは、、、みんなから頼りにされる日　リーダーシップを発揮しよう！">1月</option>
        <option value="2月のあなたは、、、1人で突っ走らないで調和を大切に">2月</option>
        <option value="3月のあなたは、、、現実と向き合い堅実に行動しよう">3月</option>
        <option value="4月のあなたは、、、大切な人との時間が充実しそう">4月</option>
		　  <option value="5月のあなたは、、、笑顔でいれば素敵な縁があるかも">5月</option>
		    <option value="6月のあなたは、、、初心に戻ることで新しい発見が">6月</option>
		    <option value="7月のあなたは、、、夢を言葉にすると実現できる予感">7月</option>
		    <option value="8月のあなたは、、、率先して行動すると幸運が訪れる">8月</option>
		    <option value="9月のあなたは、、、誤字や伝達ミスが増えそう・・・丁寧に説明しよう">9月</option>
		    <option value="10月のあなたは、、、自分の弱点を見つめ直すといい日">10月</option>
		    <option value="11月のあなたは、、、手を出しすぎずひとつの事に集中を">11月</option>
		    <option value="12月のあなたは、、、大事な決断は周りの意見を聞こう">12月</option>
      </select>
    </p>
	<p id="button" class="btn btn--orange btn--circle btn--circle-a btn--shadow">
    <input type="submit" name="submit" value="占う！！"/></p>

  </form>
  
</body>
</html>

<link rel='stylesheet' href='../css/style.css' type='text/css' />
  <link rel='stylesheet' href='../css/style.css=2' type='text/css' />
  
<!-- 以下php -->


<?php
if(isset($_POST["tuki"])) {
	$tuki = $_POST["tuki"];

echo "<div id='iro'>";
echo $tuki;
echo "</div>";
}
?>