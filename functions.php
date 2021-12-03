<?php 
		require_once __DIR__ .'/inc/themes.php';
		include_once __DIR__ .'/inc/cmb2.php';
		

		function whatapps_chat_app(){ ?>			
			<div class="whatapps_chat">
				<div class="float-wa">
					<p>Butuh bantuan! Klik Me</p>
					<img width="70" src="<?=get_template_directory_uri().'/images/wa-icon.png'?>" alt="wa-icon">
				</div>
			</div>
			<div class="whatapps_container" style="display: none">
				<div class="top_wa">
					<div class="cs_ava">
						<img width="55" height="55" src="<?=get_template_directory_uri().'/images/avatar.png'?>" alt="avatar">
					</div>
					<div class="cs_pros">
						<div class="cs_name">pxa admin</div>
						<div class="cs_status"><div class="b-act <?=(get_option('_pxa_whatsapp_status')) ?>"></div><?=(get_option('_pxa_whatsapp_status')?get_option('_pxa_whatsapp_status'):'online') ?></div>
					</div>
				</div>
				<?php if(get_option('_pxa_whatsapp_status') == 'online') : ?>
				<div class="body_wa">
					<textarea id="text_wa" placeholder=" <?=__('ada yang bisa dibantu?','pxa')?>"></textarea>
				</div>				
				<div class="footer_wa">
					<input type="button" value="<?=__('Kirim','pxa')?>">
				</div>
			<?php endif; ?>
		</div>
<?php 
		}

	