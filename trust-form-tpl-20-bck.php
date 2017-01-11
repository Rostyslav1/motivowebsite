<?php
function trust_form_show_input() {
 
  /*
	global $trust_form;
	$col_name  = $trust_form->get_col_name();
	$validate  = $trust_form->get_validate();
	$config    = $trust_form->get_config();
	$attention = $trust_form->get_attention();

	$count          = 1;
	$template_url   = get_bloginfo('template_url');
	 $trust_form_ext = new Trust_Form_Front_Extended($trust_form->id);

	$nonce = wp_nonce_field('trust_form', 'trust_form_input_nonce_field');

	$html = <<<EOT



<form action="#trust-form" method="post" class="m-pop-up__form-register l-pop-up-register-form" id="video-public">
<a class="m-pop-up__logo l-pop-up-logo" href="#" title="logo">
	<img src="{$template_url}/src/img/video-digima-logo-black.png" alt="logo">
</a>
<div id="js-message-validation">
<p class="para__xmedium m-pop-up__text m-pop-up__text--no-margin">{$trust_form->get_input_top()}</p>
</div>
<div id="js-wrapper-form">
	<div class="public-video-row">
EOT

	;
	foreach ($col_name as $key => $name) {
		$html .= $trust_form_ext->get_element($key);
		$err_msg = $trust_form->get_err_msg($key);
		if (isset($err_msg) && is_array($err_msg)) {
			$html .= '<div class="error">';
			foreach ($err_msg as $msg) {
				$html .= $msg.'<br />';
			}
			$html .= '</div>';
		}

		if ($count%2 == 0) {
			$html .= '</div><div class="public-video-row">';
		} else {
			$html .= '<div style="display: inline-block; width: 2%;"></div>';
		}
		$count++;
	}
	$html .= <<<EOT
	</div>
<div class="m-pop-up__privacy" id="js-privacy">
	<a href="#" class="m-pop-up__privacy-link">【個人情報の取り扱いについて】</a>
	<p class="m-pop-up__privacy-text">個人情報の取り扱いにつきましては、<span><a href="https://www.digima.com/privacy" target="_blank">「 個人情報保護方針」</a></span>に記載しておりますので、ご確認の上、同意される場合はチェックしていただき「確認する」をクリックしてください。</p>
	<label class="m-pop-up__checkbox">
	<input type="checkbox" name="privacy">個人情報保護方針への同意</label>
</div>

</div>
<input type="hidden" name="form_id" value={$trust_form->id} />
{$nonce}
EOT

	;

	$html = apply_filters('tr_input_footer', $html);
	$html .= <<<EOT
<div class="m-pop-up__btn-wrapper" id="js-btn-submit">
<input type="submit" class="btn__small m-pop-up__btn m-pop-up__btn--larger" name="send-to-confirm" value="確認"/>
</div>

</form>

EOT
	;
*/
	return $html;
	//return substr(do_shortcode('[digima session-key="42"]'), 0, -6).$html.'</div>';
}

function trust_form_show_confirm() {/*
	global $trust_form;
	$col_name  = $trust_form->get_col_name();
	$validates = $trust_form->get_validate();

	$nonce     = wp_nonce_field('trust_form', 'trust_form_confirm_nonce_field');

	$count          = 1;
	$template_url   = get_bloginfo('template_url');

	$html = <<<EOT

<form action="#trust-form" method="post" class="m-pop-up__form-register l-pop-up-register-form" id="video-public">
<a class="m-pop-up__logo l-pop-up-logo" href="#" title="logo">
	<img src="{$template_url}/src/img/video-digima-logo-black.png" alt="logo">
</a>
<div id="js-message-verification">
<p class="para__medium m-subsciption-form__message m-subsciption-form__message--no-margin">{$trust_form->get_form('confirm_top')}</p>
</div>
<div id="js-wrapper-form">
	<div class="public-video-row">
EOT

	;
	foreach ($col_name as $key => $name) {
		$html .= $trust_form_ext->get_element_disabled($key);
		$err_msg = $trust_form->get_err_msg($key);
		if (isset($err_msg) && is_array($err_msg)) {
			$html .= '<div class="error">';
			foreach ($err_msg as $msg) {
				$html .= $msg.'<br />';
			}
			$html .= '</div>';
		}

		if ($count%2 == 0) {
			$html .= '</div><div class="public-video-row">';
		}
		$count++;
	}
	$html .= <<<EOT
	</div>

</div>
<input type="hidden" name="form_id" value={$trust_form->id} />
{$nonce}
EOT

	;

	$html = apply_filters('tr_input_footer', $html);
	$html .= <<<EOT
<div class="m-pop-up__btn-wrapper m-pop-up__btn-wrapper--btn-check" id="js-btn-check" style="display:block">
	<input type="submit" class="btn__small m-pop-up__btn m-pop-up__btn" id="js-form-back" name="return" value="戻る" />
	<input type="submit" class="btn__small m-pop-up__btn m-pop-up__btn" id="js-form-sucess" name="send-to-finish" value="登録完了" />
</div>

</form>

EOT
	;

	return $html;
	//return substr(do_shortcode('[digima session-key="42"]'), 0, -6).$html.'</div>';
  */
}

function trust_form_show_finish() {
	global $trust_form;
	// in this form we will return only success message
	return true;
}
?>
