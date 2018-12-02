		<div id="sp-menu">
			<div class="menu">
				<h2 id="prof">プロフィール</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/images/me.jpg" alt="me">
				<p>やっこ<br><a href="#">@end_less__</a></p>
				<p>いろんなゲームが好き</p>
			</div>
			<div class="menu">
				<h2>カテゴリー</h2>
				<ul>
					<?php
						$categories = get_categories('parent=0');
						foreach ( $categories as $val ) : 
							$cat_link = get_category_link($val->cat_ID); ?>
								<li>
									<a href="<?php echo $cat_link ?>"><?php echo $val->name ?></a>
								</li>
						<?php endforeach; ?>
				</ul>
			</div>
			<div class="menu">
				<h2>アーカイブ</h2>
				<ul>
					<?php wp_get_archives(); ?>
				</ul>
			</div>
		</div>