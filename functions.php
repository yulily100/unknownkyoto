<?php
	//アイキャッチ画像を使用する
	add_theme_support('post-thumbnails');

	// entry page
	add_image_size('entry-top',740, 416, true);

	// member page
	add_image_size( 'member-thumb', 400, 400, true );


	// カスタム投稿タイプ
	function register_member () {
		$args = array(
			'label' => 'メンバー',
			'labels' => array(
				'name' => 'メンバー一覧',
				'add_new' => '新しいメンバーを追加',
				'add_new_item' => '新しいメンバーを追加',
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
			'menu_position' => 5,
			'menu_icon'   => 'dashicons-groups',
		);
		register_post_type('member', $args);
	}
	add_action('init', 'register_member');



	// ダッシュボードのメニューをカスタマイズ
	function remove_menus () {
		global $menu;
		unset($menu[25]); // コメント
	}
	add_action('admin_menu', 'remove_menus');
?>
