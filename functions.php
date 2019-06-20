<?php
	//アイキャッチ画像を使用する
	add_theme_support('post-thumbnails');

	//サイズを指定して切り抜きをする(縦：100px 横100px)
	set_post_thumbnail_size(300, 300, false);

	// entry page
	add_image_size('archive-image',770, 480, true);
	add_image_size('recent-image',300, 200, true);
?>
