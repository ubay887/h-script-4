{strip}{if $_cfg.Account_Loginza}	{include file='account/ulogin/_box.tpl'}	<br>	<h3>{$_TRANS['or']}</h3>{/if}{if $_cfg.Account_ISP}	{include file='account/isp/_box.tpl'}	<br>	<h3>{$_TRANS['or']}</h3>{/if}<div class="block_form">	{if $tpl_errors['login_frm']|count}		<ul class="error_message">	    	{$_TRANS['Please fix the following errors']}:<br/>	        {if $tpl_errors['login_frm'][0]=='login_empty'}<li>{$_TRANS['Input Login/Password']}</li>{/if}	        {if $tpl_errors['login_frm'][0]=='login_not_found'}<li>{$_TRANS['Wrong Login/Password']}</li>{/if}	        {if $tpl_errors['login_frm'][0]=='not_active'}<li>{$_TRANS['Account e-mail is not confirmed']}</li>{/if}	        {if $tpl_errors['login_frm'][0]=='banned'}<li>{$_TRANS['Access to the account is suspended']} {$ban_date}</li>{/if}	        {if $tpl_errors['login_frm'][0]=='blocked'}<li>{$_TRANS['Account is blocked']}</li>{/if}	        {if $tpl_errors['login_frm'][0]=='captcha_wrong'}<li>{$_TRANS['Wrong code']}</li>{/if}	        {if $tpl_errors['login_frm'][0]=='GA_wrong'}<li>{$_TRANS['GA_wrong_code']}</li>{/if}	    </ul>	{/if}	<form method="post" name="login_frm" action="login">		<div class="block_form_el cfix">			{$txt_login=valueIf($_cfg.Const_NoLogins,  $_TRANS['E-Mail'], $_TRANS['Login'])}            <label for="login_frm_Login">{$_TRANS['Login']} / {$_TRANS['E-Mail']} <span class="descr_star">*</span></label>            <div class="block_form_el_right">            	<input name="Login" id="login_frm_Login" value="{$smarty.request.Login}" type="text">            </div>        </div>        <div class="block_form_el cfix">            <label for="login_frm_Pass">{$_TRANS['Password']} <span class="descr_star">*</span></label>            <div class="block_form_el_right">            	<input name="Pass" id="login_frm_Pass" value="{$smarty.request.Pass}" type="password">            </div>        </div>        <div class="block_form_el checkbox cfix">            <label for="login_frm_Pass">&nbsp;</label>            <div class="block_form_el_right">            	{$_TRANS['Remember']}            	<input name="Remember" id="login_frm_Remember" value="1" type="checkbox">            </div>        </div>        {_getFormSecurity form='login_frm' captcha=$_cfg.Account_LoginCaptcha}        {if $__Capt}        	{include file='captcha.tpl' form='login_frm' star=$edit_descr_star}        {/if}        {if $url}            <input name="URL" id="login_frm_URL" value="{$url}" type="hidden">        {/if}        <div class="block_form_el cfix">        	<label>&nbsp;</label>        	<div class="block_form_el_right">            	<input name="login_frm_btn" value="{$_TRANS['sign in']}" type="submit" class="button-green">            </div>        </div>	</form></div>{*$txt_login=valueIf($_cfg.Const_NoLogins, 'e-mail', 'Login')}{include file='edit.tpl'	url="{_link module='account/login'}"	form='login_frm'	fields=	[		'Login'=>			[				'T',				"$txt_login!!",				[					'login_empty'=>"input $txt_login/Password",					'login_not_found'=>"wrong $txt_login/Password",					'not_active'=>'account e-mail is not confirmed',					'banned'=>"access to the account is suspended $ban_date",					'blocked'=>'account is blocked'				]			],		'Pass'=>			[				'*',				'Password!!',				[				]			],		'Remember'=>			[				'CC',				'Remember me',				[				]			],		'URL'=>			$url	]	captcha=$_cfg.Account_LoginCaptcha	btn_text='Login'*}{/strip}