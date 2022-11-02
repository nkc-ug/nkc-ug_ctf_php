<!--ヘッダー部分呼び出し-->
<?php 
    
    require_once '../templates.php'; 
    template_header(); 

?>

<body>
	<!--ナビゲーションバー呼び出し-->
	<?php navigation(); ?>

	<!--メイン-->
	<main class="container">	

        <div style="background:#EEEEEE;padding-top:70px;">
            <h1>Q1.fast question</h1>
            <p>10pt</p>
            <p>
                この問題の答え（FLAG）は、flag{this_is_test_flag} です。<br>
                下の入力欄にFLAGを入力してSubmitボタンを押して、答えを送信しましょう！
            </p>
            <div class="form">
                <form method="post" action="#">
                    <input type="text" class="form-control" name="flag" placeholder="flag">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

		
	</main>
</body>
<!--フッター呼び出し-->
<?php 	template_footer(); ?>


<?php 
	
    if(!empty($_POST["flag"])){
        if($_POST["flag"] == "flag{this_is_test_flag}")
        {
            require '../conf/db_connect.php';
            $sql = $db->prepare("INSERT INTO results(uid,qid) VALUES (${_SESSION['id']},1)");	
            $sql->execute(); 
            print("<script>alert(\"正解！\")</script>");
        }
    }
      

?>