<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
<section class="contact-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="content-page-wrapper page-contact-wrapper">
					<h1 class="wow fadeIn">Get in touch with us for more information!</h1>
					<p class="wow fadeIn" data-wow-delay="0.1s">お探しのページは一時的にアクセスできない状況にあるか、移動または削除されたか可能性があります。<br>
						ブラウザの再読込を行ってもこのページが表示される場合は、サイト内検索からページをお探しいただくか、ブラウザの戻るボタンまたはページ内コンテンツより移動してください。</p>
					<p class="blue wow fadeIn" data-wow-delay="0.2s">以下ご入力の上、コンテンツをダウンロードしてください。</p>
				</div>
				<?php //the_content(); ?>
				<form>
					<div class="form-contact clearfix">
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>お問合わせ内容</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<select name="contact-select">
									<option>Motivo Recruitment</option>
									<option>Motivo Recruitment</option>
									<option>Motivo Recruitment</option>
								</select>
							</div>
						</div>
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>会社URL</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<input type="text" placeholder='www.motivo.jp'>
							</div>
						</div>
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>電話番号</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<input type="text" placeholder="03-5720-5223">
							</div>
						</div>
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>お役職</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<input type="text" placeholder="開発部">
							</div>
						</div>
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>お役職</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<input type="text" placeholder="- 最も近しいご役職を以下からお選びください -">
							</div>
						</div>
						<div class="row wow fadeIn double-input">
							<div class="col-lg-3 col-md-12 col-sm-4">
								<p>お名前</p>
							</div>
							<div class="col-lg-7 col-md-12 col-sm-8">
								<div class="row">
									<div class="col-sm-6"><input type="text" placeholder="性"></div>
									<div class="col-sm-6"><input type="text" placeholder="名"></div>
								</div>
							</div>
						</div>
						<div class="row wow fadeIn double-input">
							<div class="col-lg-3 col-md-12 col-sm-4">
								<p>お名前</p>
							</div>
							<div class="col-lg-7 col-md-12 col-sm-8">
								<div class="row">
									<div class="col-sm-6"><input type="text" placeholder="セイ"></div>
									<div class="col-sm-6"><input type="text" placeholder="メイ"></div>
								</div>
							</div>
						</div>
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>メールアドレス</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<input type="text" placeholder="メールアドレス">
							</div>
						</div>
						<div class="row wow fadeIn">
							<div class="col-lg-3 col-sm-4">
								<p>お問合わせ詳細</p>
							</div>
							<div class="col-lg-7 col-sm-8">
								<textarea placeholder="メッセージ"></textarea>
							</div>
						</div>

					</div>

					<div class="button_confirm">
								<div class="content wow fadeIn">
									<p class="bluefont">【個人情報の取り扱いについて】</p>
									<p>
										個人情報の取り扱いにつきましては、「個人情報保護方針」に記載しておりますので、<br>
	ご確認頂き、同意される場合はチェックをして頂き「同意して送信」ボタンをクリックしてください。*
										</p>
									</div>

									<div class="checkbx wow fadeIn">
										<label>
											<input class="checkbox" type="checkbox" name="checkbox-test">
											<span class="checkbox-custom"></span>
											<span class="label"> 個人情報保護方針への同意</span>
										</label>
									</div>
									<input class="submit wow fadeInUp" type="submit" value="確認">
								</div>

				</form>
			</div>


			<div class="col-lg-3 col-md-4 padding-null">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>


<!-- <section id="content" role="main">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title"><?php _e( 'Not Found', 'motivo' ); ?></h1>
</header>
<section class="entry-content">
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'motivo' ); ?></p>
</section>
</article>
</section> -->
<?php get_footer(); ?>