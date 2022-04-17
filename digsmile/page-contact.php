<?php 
// 各ページのURL
$top = esc_url(home_url('/'));
$about = esc_url(home_url('about'));
$works = esc_url(home_url('works'));
$culture = esc_url(home_url('culture'));
$topics = esc_url(home_url('topics'));
$blog = esc_url(home_url('blog'));
$contact = esc_url(home_url('contact'));
?>
<?php 
// var_dump($wp_query);
// var_dump($posts);

?>
<?php get_header(); ?>

			<!-- l-mv-sub  -->
			<div class="l-mv-sub p-mv-sub js-mv">
				<div class="p-mv-sub__background js-inview"></div>
				<figure class="p-mv-sub__img c-image-show js-inview">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact_mv_pc.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact_mv_sp.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">contact</h1>
					<div class="p-mv-sub__subtitle">お問い合わせ</div>
				</div>
			</div><!-- l-mv-sub  -->

			<div class="l-breadcrumb p-breadcrumb">
				<div class="p-breadcrumb__inner l-inner">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="" href="" class="">
							<span property="name">トップ</span>
						</a>
					</span>&nbsp;&gt;&nbsp; <span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="" href="" class="current-item">
							<span property="name">CONTACT</span>
						</a>
					</span>
				</div>
			</div>
			<main class="l-min-height">
				<section class="l-contact-sub p-contact-sub">
					<div class="p-contact-sub__inner">
						<div class="p-contact-sub__description"> ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。 </div>
						<div class="p-contact-sub__form p-form">
							<dl class="p-form__items">
								<div class="p-form__item">
									<dt class="p-form__title--required">お問合せ種別</dt>
									<dd class="p-form__content p-form__radio">
										<span class="mwform-radio-field horizontal-item">
											<label>
												<input type="radio" name="your-radio" value="制作実績">
												<span class="mwform-radio-field-text">制作実績</span>
											</label>
										</span>
										<span class="mwform-radio-field horizontal-item">
											<label>
												<input type="radio" name="your-radio" value="採用">
												<span class="mwform-radio-field-text">採用</span>
											</label>
										</span>
										<span class="mwform-radio-field horizontal-item">
											<label>
												<input type="radio" name="your-radio" value="IR">
												<span class="mwform-radio-field-text">IR</span>
											</label>
										</span>
										<span class="mwform-radio-field horizontal-item">
											<label>
												<input type="radio" name="your-radio" value="その他">
												<span class="mwform-radio-field-text">その他</span>
											</label>
										</span>
										<input type="hidden" name="__children[your-radio][]" value="{&quot;\u5236\u4f5c\u5b9f\u7e3e&quot;:&quot;\u5236\u4f5c\u5b9f\u7e3e&quot;,&quot;\u63a1\u7528&quot;:&quot;\u63a1\u7528&quot;,&quot;IR&quot;:&quot;IR&quot;,&quot;\u305d\u306e\u4ed6&quot;:&quot;\u305d\u306e\u4ed6&quot;}">
									</dd>
								</div>
								<div class="p-form__item">
									<dt class="p-form__title">当サイトを知ったきっかけ</dt>
									<dd class="p-form__content p-form__checkbox">
										<span class="mwform-checkbox-field horizontal-item">
											<label>
												<input type="checkbox" name="your-check[data][]" value="検索">
												<span class="mwform-checkbox-field-text">検索</span>
											</label>
										</span>
										<span class="mwform-checkbox-field horizontal-item">
											<label>
												<input type="checkbox" name="your-check[data][]" value="広告">
												<span class="mwform-checkbox-field-text">広告</span>
											</label>
										</span>
										<span class="mwform-checkbox-field horizontal-item">
											<label>
												<input type="checkbox" name="your-check[data][]" value="ご紹介">
												<span class="mwform-checkbox-field-text">ご紹介</span>
											</label>
										</span>
										<input type="hidden" name="your-check[separator]" value=",">
										<input type="hidden" name="__children[your-check][]" value="{&quot;\u691c\u7d22&quot;:&quot;\u691c\u7d22&quot;,&quot;\u5e83\u544a&quot;:&quot;\u5e83\u544a&quot;,&quot;\u3054\u7d39\u4ecb&quot;:&quot;\u3054\u7d39\u4ecb&quot;}">
									</dd>
								</div>
								<div class="p-form__item">
									<dt class="p-form__title">ご職業</dt>
									<dd class="p-form__content">
										<select name="your-select">
											<option value="" selected="selected">選択してください</option>
											<option value="学生">学生</option>
											<option value="社会人">社会人</option>
											<option value="フリーター">フリーター</option>
											<option value="その他">その他</option>
										</select>
									</dd>
								</div>
								<div class="p-form__item">
									<dt class="p-form__title--required">
										<label for="your-name">お名前</label>
									</dt>
									<dd class="p-form__content">
										<input type="text" name="your-name" id="your-name" size="60" value="">
									</dd>
								</div>
								<div class="p-form__item">
									<dt class="p-form__title--required">
										<label for="your-email">メールアドレス</label>
									</dt>
									<dd class="p-form__content">
										<input type="email" name="your-email" id="your-email" size="60" value="" data-conv-half-alphanumeric="true">
									</dd>
								</div>
								<div class="p-form__item p-form__tel">
									<dt class="p-form__title--required">
										<label for="your-tel">電話番号</label>
									</dt>
									<dd class="p-form__content">
										<span class="mwform-tel-field">
											<input type="text" name="your-tel[data][0]" size="6" maxlength="5" value="" data-conv-half-alphanumeric="true"> - <input type="text" name="your-tel[data][1]" size="5" maxlength="4" value="" data-conv-half-alphanumeric="true"> - <input type="text" name="your-tel[data][2]" size="5" maxlength="4" value="" data-conv-half-alphanumeric="true">
										</span>
										<input type="hidden" name="your-tel[separator]" value="-">
									</dd>
								</div>
								<div class="p-form__item">
									<dt class="p-form__title--required">
										<label for="your-textarea">お問い合せ内容</label>
									</dt>
									<dd class="p-form__content">
										<textarea name="your-textarea" id="your-textarea" cols="50" rows="5"></textarea>
									</dd>
								</div>
								<div class="p-form__item">
									<dt class="p-form__title">PRIVACY&nbsp;POLICY</dt>
									<dd class="p-form__content p-form-privacy">
										<div class="p-form-privacy__title">個人情報保護方針</div> 株式会社DIGSMILE（以下、当社）では、個人情報の重要性を認識し、以下の基準に従って、適切な管理、保護に努めます。<br>
										<br> 1.個人情報の収集、利用<br> 当社では、お客様との取引、サービスの提供のために個人情報を適法に収集し、収集した目的の範囲内で、個人情報を利用いたします。<br>
										<br> 2.個人情報の第三者への開示と提供<br> 収集したお客様の個人情報は、法的な要請等によらない限り、お客様の承諾を得ない第三者に対して提供・開示はいたしません。<br> 業務の都合上、業務委託先に個人情報を提供する場合は、機密保持契約等によって業務委託先に個人情報保護を義務付けるとともに、業務委託先が適切に個人情報を取り扱うように管理いたします。<br>
										<br> 3.個人情報の保護<br> 当社では、個人情報の紛失、破壊、改ざん、不正アクセス、および漏えい等を防止するため、適切な対策を行います。<br>
										<br> 4.法令および関連規範の遵守<br> 当社は、個人情報の取り扱いに関して、個人情報保護法をはじめとする個人情報に関する法令および関連する規範を遵守します。<br>
										<br> 5.個人情報の開示・訂正・削除<br> 当社では、個人情報の開示・訂正・削除等の依頼があった場合、情報提供者本人であることを確認の上、すみやかに対応いたします。<br>
										<br> 法令や当社方針により、プライバシー・ポリシーを予告なく改訂することがあります。<br>
										<br> お問い合わせ窓口<br> 当社の個人情報の取扱いに関するお問い合わせは下記までご連絡お願いいたします。<br> 株式会社ファイアープレイス<br> 044-589-4333
									</dd>
								</div>
							</dl>
							<div class="p-form__approval">
								<span class="mwform-checkbox-field horizontal-item">
									<label>
										<input type="checkbox" name="your-approval[data][]" value="個人情報の取り扱いについて同意のうえ送信します。">
										<span class="mwform-checkbox-field-text">個人情報の取り扱いについて同意のうえ送信します。</span>
									</label>
								</span>
							</div>
							<div class="p-form__btn">
								<button type="submit" name="submitConfirm" value="confirm" class="c-btn">確認画面へ</button>
							</div>
						</div>
					</div>
				</section>
			</main>

<?php get_footer(); ?>