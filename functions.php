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

	// 日本語URL禁止
	function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
	}
	add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );
?>
