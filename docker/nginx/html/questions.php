<?php 
	require_once './templates.php'; 

?>

<!--ヘッダー部分呼び出し-->
<?php template_header(); ?>

<body>
	<!--ナビゲーションバー呼び出し-->
	<?php navigation(); ?>

	<!--メイン-->
	<main class="container">	

        <div style="background:#EEEEEE;padding-top:70px;">
            <h1>Q1.fast question</h1>
            <p>10pt</p>
            <p>
                この問題の答え（FLAG）は、cpaw{this_is_Cpaw_CTF} です。<br>
                下の入力欄にFLAGを入力してSubmitボタンを押して、答えを送信しましょう！
            </p>
            <div class="form">
                <form method="post" action="questions.php?qnum=1">
                    <input type="text" class="form-control" name="flag" placeholder="flag">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

		
	</main>
</body>
<!--フッター呼び出し-->
<?php 	template_footer(); ?>
