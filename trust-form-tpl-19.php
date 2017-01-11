<?php
function trust_form_show_input() {
  
	global $trust_form;
	$col_name = $trust_form->get_col_name();
	$validate = $trust_form->get_validate();
	$config = $trust_form->get_config();
	$attention = $trust_form->get_attention();
	
	$nonce = wp_nonce_field('trust_form','trust_form_input_nonce_field');
	$html = <<<EOT
<div id="trust-form" class="contact-form contact-form-input" >
<p class="more wow fadeIn message-container-input" data-wow-delay="0.3s">{$trust_form->get_input_top()}</p>
<br/>
<form action="#trust-form" method="post">
<div class="form">
<div class="row wow fadeInUp">
EOT;
    $count          = 1;
	foreach ( $col_name as $key => $name ) {
        //$html .= $key.' '.$name.' ';
//		$html .= '<tr><th scope="row"><div class="subject"><span class="content">'.$name.'</span>'.(isset($validate[$key]['required']) && $validate[$key]['required'] == 'true' ? '<span class="require">'.$config['require'].'</span>' : '' ).'</div><div class="submessage">'.$attention[$key].'</div></th><td><div>'.$trust_form->get_element( $key ).'</div>';
        //$html .= '<td>'.$trust_form->get_element($key);
        if ($count%2 != 0){
        	$html .= '<div class="col-sm-6 col-md-5 col-lg-4 col-lg-offset-2 col-md-offset-1"><input class="pl-uppercase" name="'.$key.'" placeholder="'.$name.'">';
        } else {
        	$html .= '<div class="col-sm-6 col-md-5 col-lg-4 "><input class="pl-uppercase" name="'.$key.'" placeholder="'.$name.'">';
        }
		$err_msg = $trust_form->get_err_msg($key);
		if ( isset($err_msg) && is_array($err_msg) ) {
			$html .= '<div class="error">';
			foreach ( $err_msg as $msg ) {
				$html .= $msg.'<br />';
			}
			$html .= '</div>';
		}
        $html .= '</div>';
        if ($count%2 == 0) {
			$html .= '</div><div class="row wow fadeInUp">';
		}
        $count++;
	}
	$html .= <<<EOT
</div>
{$nonce}
EOT;
$html = apply_filters( 'tr_input_footer', $html );
$html .= <<<EOT
</div>
<div class="button_confirm">
	<div class="content">
		<p class="wow fadeIn">
			<span>【個人情報の取り扱いについて】</span>
			<br>
			個人情報の取り扱いにつきましては、
			<span>「 個人情報保護方針」</span>に記載しておりますので、ご確認頂き、<br>
			同意される場合は チェックして頂き「送信」ボタンをクリックして下さい。
		</p>
	</div>

	<div class="checkbx">
		<label>
			<input class="checkbox" type="checkbox" name="checkbox-test">
			<span class="checkbox-custom wow zoomIn"></span>
			<span class="label wow fadeIn" data-wow-delay="0.4s"> 個人情報保護方針への同意</span>
		</label>
	</div>
	<input type="submit" name="send-to-confirm" value="Confirm" class="fadeInUp submit wow">
</div>
<br/>
</div>
</form>
</div>
EOT;
  //{$trust_form->get_form('input_bottom')}
	return $html;
}
function trust_form_show_confirm() {
	global $trust_form;
	$col_name = $trust_form->get_col_name();
	$validates = $trust_form->get_validate();
	$nonce = wp_nonce_field('trust_form','trust_form_confirm_nonce_field');
	$html = <<<EOT
<div id="trust-form" class="contact-form contact-form-input" >
<p class="more wow message-container-input" data-wow-delay="0.3s">{$trust_form->get_input_top()}</p>
<br/>
<form action="#trust-form" method="post">
<div class="form">
<div class="row wow fadeInUp">
EOT;
	$count = 1;
	foreach ( $col_name as $key => $name ) {
		foreach ( $validates as $validate ) {
			if ( array_key_exists('e_mail_confirm', $validate) && in_array( $name, $validate ) )
				continue 2;
		}
		if ($count%2 != 0){
        	$html .= '<div class="col-sm-6 col-md-5 col-lg-4 col-lg-offset-2 col-md-offset-1"><div class="form-confirm">'.$trust_form->get_input_data($key).'</div></div>';
        } else {
        	$html .= '<div class="col-sm-6 col-md-5 col-lg-4 "><div class="form-confirm">'.$trust_form->get_input_data($key).'</div></div>';
        	$html .= '</div><div class="row wow fadeInUp">';
        }
		// $html .= '<tr><th><div class="subject">'.$name.'</div></th><td><div>'.$trust_form->get_input_data($key).'</div>';
		// $html .= '</td></tr>';
		$count++;
	}
	$html .= <<<EOT
</div>
{$nonce}
EOT;
$html = apply_filters( 'tr_confirm_footer', $html );
$html .= <<<EOT
<div id="confirm-button" class="wow fadeInUp submit-container">
  <input type="submit" name="return-to-input" value="return" class="button">
  <input type="submit" name="send-to-finish" value="send" style="background-color: #02a2dd">
 </div>
<br/>
</form>
</div>


EOT;
	return $html;
}
function trust_form_show_finish() {
	global $trust_form;
	
	$html = <<<EOT
<div id="trust-form" class="contact-form contact-form-finish" >
<p class="more wow message-container-confirm">{$trust_form->get_form('finish')}</p>
</div>
EOT;
	return $html;
}
?>