<div class="content-none">

  <!-- ここに冒頭文を書く -->
  <p class="none-text">
	<?php if( is_404() ){
		// 404ページの場合
		echo 'White Thingsをご覧頂きありがとうございます。大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。お手数をおかけしますが、以下からもう一度目的のページをお探し下さい。';
	}elseif( is_search() ){
		// 検索結果ページの場合
		$r = get_search_query();
		echo 'White Thingsをご覧頂きありがとうございます。「'.$r.'」で検索しましたがページが見つかりませんでした。お手数をおかけしますが、以下からもう一度目的のページをお探し下さい。';
	} ?>
  </p>
