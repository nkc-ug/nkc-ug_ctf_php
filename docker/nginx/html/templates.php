<?php

session_start();


function template_header($title = "就職活動管理")
{
$html_docs = <<<EOD
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKC-UG-CTF</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}
	
	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}
	
	.navbar {
		margin-bottom: 20px;
	}
	</style>

</head>
EOD;
print($html_docs);
}

function template_footer()
{
$html_docs = <<<EOD
	<!-- Bootstrap core js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<script src="./js/main.js"></script>
</html>
EOD;
print($html_docs);
}

function navigation()
{

	
if (isset($_SESSION['id'])) {
	$status = $_SESSION['name'];
	$status_docs = "<li><a href=\"logout.php\" class=\"dropdown-item\">ログアウト</a></li>";
}else{
	$status = "Login";
	$status_docs = <<<EOD
	<li>
		<form class="form" method="post" action="login.php">
			<input class="form-control input-sm" name="id" placeholder="UserId" value="${_GET["id"]}">
			<input class="form-control input-sm" name="password" type="password" placeholder="Password">
			<button style="margin-top: 5px;" type="submit" class="btn btn-primary btn-block">Login</button>
		</form>
	</li>
EOD;
}


$html_docs = <<<EOD
<!--navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top" style="font-size:large;">
	<div class="container-fluid">
		<a class="navbar-brand" href="#" style="font-size:x-large;">NKC-UG-CTF</a>
		
		<button class="navbar-toggler" type="button" data-bs-target="#navbars" aria-controls="navbars" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navbars">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
				<li class="nav-item">
					<a class="nav-link active" href="#">Challenges</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./" onclick="clickAlert()">Difficulty</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./" onclick="clickAlert()">Ranking</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./" onclick="clickAlert()">Notice</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right" >
				<li class="nav-item dropdown ">
					<a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" aria-expanded="false">${status}</a>
					<ul class="dropdown-menu dropdown-menu-md-end">
					${status_docs}
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
EOD;

//<script>alert("ユーザー名またはパスワードが間違っています。もう一度入力してください。")</script>

print($html_docs);
}

//説明書き
function top_desc()
{
$html_docs = <<<EOD
<div style="background:#EEEEEE;padding-top:70px;">
	<h1>NKC-UG-CTF</h1>
	<div>
	<div style="font-size:xx-large;">Thank you for accepting my challenge!!</div><br>
	<strong>過度なアクセスや出題サーバーへの攻撃はご遠慮ください</strong><br>
	お問い合わせは、お近くのスタッフへお願いいたします。<br><br>
	
	すべてのflagは次の形式です : <strong>cpaw{example}</strong><br>
	例：<strong>cpaw{nkc-ug-ctf}</strong><br>
	
	<details>
		<summary class="text-danger">詳しい説明はこちら！</summary>
		<div>
		
		<p style="font-size:large;">～CTFとは～</p>
		<p>本来のCTFとは、Capture the flagと呼ばれるセキュリティコンテストの一つで、<br>
		ITに関する技術や知識を競うコンテストです。</p>
		
		<p style="font-size:large;">～ルール～</p>
		<p>以下のルールに従ってください。<br><br>
		問題からflagの文字列を探し、各問題のページでflagを送信すれば得点が入ります。<br>
		このCTFは名学祭期間中の３日間開催されています。<br>
		解き方を公開するのはマナー違反です。解き終わった方同士で盛り上がりましょう！</p>
		
		<p>ジャンルは以下の11種類に分類され出題されます。<br>
			※クリックして展開</p>
			<div>==========================================================</div>
			<details>
			<summary>Web</summary>
			<div>
				ウェブサイトの脆弱性を探し、攻撃・解析することでflagを見つける問題です。<br>
				SQLインジェクション、クロスサイトスクリプティングなどと呼ばれる攻撃を仕掛け、flagを見つけ出すなどの問題があります。<br>
				出題者コメント「メジャーな問題ばかりですね！」
			</div>
			</details>
			
			<details>
			<summary>Crypto</summary>
			<div>
				暗号を解読しflagを求める問題です。<br>
				シーザー(カエサル)暗号や、オリジナルの暗号などが問題に使われます。<br>
				出題者コメント「カエサルなのかシーザーなのか...」
			</div>
			</details>
			
			<details>
			<summary>Binary</summary>
			<div>
				実行ファイル(exeファイルなど)を解析し、flagを探し出す問題です。<br>
				バイナリエディタや使用するか逆コンパイルすると問題が解けるかもしれません。<br>
				出題者コメント「初めて触ったバイナリエディタはDump4wでした」
			</div>
			</details>
			
			<details>
			<summary>Pwn(pwnable)</summary>
			<div>
				プログラムの脆弱性を攻撃し、flagを取る問題です。<br>
				
				<br>
				出題者コメント「エンジニア必須のスキル！※個人的な見解です」
			</div>
			</details>
			
			<details>
			<summary>Forensic</summary>
			<div>
				様々なデータの中に隠されているflagを探し出す問題です。<br>
				削除・破損しているデータを復元しflagを探したり、大量のデータの中からflagのデータを見つけ出したりする問題です。<br>
				出題者コメント「木を隠すなら森の中...」
			</div>
			</details>
			
			<details>
			<summary>Steganography</summary>
			<div>
				音声・画像・動画などのデータに隠されたflagを探し出す問題です。<br>
				画像のバイナリデータにflagが埋め込まれていたり、音声の波形がflagの文字になっていたりとユニークな方法でflagを探しだす問題が多いらしいです。<br>
				出題者コメント「よく見る有名な動画の中にも暗号が埋め込まれているかも?!」
			</div>
			</details>
			
			<details>
			<summary>Recon</summary>
			<div>
				特定の人物の情報を集めて答える問題です。<br>
				その人の住んでいる国の地域をSNSなどで情報収集し特定するなど、近年問題視されているSNSの危険性などを実感できるジャンルです。<br>
				出題者コメント「私を見つけられるかな？」
			</div>
			</details>
			
			<details>
			<summary>Trivia</summary>
			<div>
				雑学問題です。<br>
				クイズが出されて回答するというのが通常の形式のようです。<br>
				出題者コメント「Google大先生！お世話になります！！」
			</div>
			</details>
			
			<details>
			<summary>Misc</summary>
			<div>
				「その他」問題です。<br>
				ジャンル分けされていない問題などはすべてMiscに分類されます。<br>
				出題者コメント「出題数範囲が広くなると半分近くがその他になりがち」
			</div>
			</details>
			<div>==========================================================</div>
		</div>
	</details>
	</div>
</div>
EOD;
	print($html_docs);
}


//問1
function level1(){
	$html_docs = <<<EOD
	<div class="panel panel-default">
	
		<div class="panel-heading">
			<h3>Level 1</h3>
			
			<div class="progress">
				<div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					100%
				</div>
			</div>
		</div>
		
		<table class="table table-condensed">
			<thead>
				<tr>
				<!--<th class="col-md-1">#</th>-->
				<th>Title</th>
				<th class="col-md-1">Points</th>
				<th class="col-md-1">Solved</th>
				</tr>
			</thead>
			
			<tbody>
				
				<tr>
					<td><a href="./questions.php?qnum=1">[Misc] Test Problem</a></td>
					<td>10</td>
					<td class="text-success">OK</td>
				</tr>
				<tr>
					<td><a href="./questions.php?qnum=1">[Misc] Test Problem</a></td>
					<td>10</td>
					<td class="text-success">OK</td>
				</tr>
				<tr>
					<td><a href="./questions.php?qnum=1">[Misc] Test Problem</a></td>
					<td>10</td>
					<td class="text-success">OK</td>
				</tr>
				
			</tbody>
		</table>

	</div>
EOD;
	print($html_docs);

}

function f()
{
	require './conf/db_connect.php';
	$html_docs = <<<EOD
	www
EOD;
	print($html_docs);
	$db = null;
}

?>