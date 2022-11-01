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

		
		<?php 

			//タイトル・説明書き
			top_desc(); 

			print_questions();

		?>

		
	</main>
</body>
<!--フッター呼び出し-->
<?php 	template_footer(); ?>
	