<?php
	/**
	 * Component: Form Notifications
	 */

	// $globalNotificationsMessageEnabled = get_field('globalNotificationsMessageEnabled', 'option') || false;
	$notificationsMessageEnabled = get_field('notificationsMessageEnabled') || false;
	
	if ($notificationsMessageEnabled ) : 

		$notificationsBgColor = get_field('notificationsBgColor');
		$notificationsTxtColor = get_field('notificationsTxtColor');
		$notificationsPlacement = get_field('notificationsPlacement'); 
		$notificationsTitle = get_field('notificationsTitle');
		$notificationsContent = get_field('notificationsContent');
		$notificationsEnableExitButton = get_field('notificationsEnableExitButton');
		$notificationsHasButton = get_field('notificationsHasButton');
		$notificationsHasButtonLength = count($notificationsHasButton); // length
		$notificationsIsActive = 'is-active';

	// elseif ($globalNotificationsMessageEnabled) :
		
	// 	$globalSessionStorageName = get_field('globalSessionStorageName', 'option');
	// 	$notificationsBgColor = get_field('notificationsBgColor', 'option');
	// 	$notificationsTxtColor = get_field('notificationsTxtColor', 'option');
	// 	$notificationsPlacement = get_field('notificationsPlacement', 'option'); 
	// 	$notificationsTitle = get_field('notificationsTitle', 'option');
	// 	$notificationsContent = get_field('notificationsContent', 'option');
	// 	$notificationsEnableExitButton = get_field('notificationsEnableExitButton', 'option');
	// 	$notificationsHasButton = get_field('notificationsHasButton', 'option');
	// 	$notificationsHasButtonLength = count($notificationsHasButton);

	else :
		
		$notificationsIsActive = '';
		return false;
	
	endif;

	if ($WP_ENV !== 'production') {
	// console_log($globalNotificationsMessageEnabled, '$globalNotificationsMessageEnabled');
	// console_log($globalSessionStorageName, '$globalSessionStorageName');
	// 	console_log($notificationsMessageEnabled, '$notificationsMessageEnabled');
	// 	console_log($notificationsBgColor, '$notificationsBgColor');
	// 	console_log($notificationsTxtColor, '$notificationsTxtColor');
	// 	console_log($notificationsPlacement, '$notificationsPlacement');
	// 	console_log($notificationsEnableExitButton, '$notificationsEnableExitButton');
	// 	console_log($notificationsTitle, '$notificationsTitle');
	// 	console_log($notificationsContent, '$notificationsContent');
	// 	console_log($notificationsHasButton, '$notificationsHasButton');
	// 	console_log($notificationsHasButtonLength, '$notificationsHasButtonLength');
	}
?>

<!-- Notification Message -->
<div data-module="component-notifications" class="component-notifications <?php if($globalNotificationsMessageEnabled): echo 'gdpr-enabled '; endif;  echo $notificationsPlacement.' '.$notificationsBgColor.' '.$notificationsIsActive; ?>">
	<?php if($notificationsEnableExitButton) : ?>
		<button class="delete is-large close-component-notifications"></button>
	<?php endif; ?>
	<div class="section columns level container">
		<div class="docked-start content is-marginless-bottom">
			<?php if ($notificationsTitle) :?>
				<h4 class="has-text-weight-bold is-marginless-bottom <?php echo $notificationsTxtColor ?>"><?php echo $notificationsTitle ?></h4>
			<?php endif; ?>
			<p class="has-text-weight-light is-marginless-bottom <?php echo $notificationsTxtColor ?>"><?php echo $notificationsContent ?></p>
		</div>
		<div class="docked-end">
			<div class="field is-grouped">

			<?php
				if ($notificationsHasButton && $notificationsHasButtonLength >= 1) :  
					for ($i = 0; $i < $notificationsHasButtonLength; $i++) : ?>
						<span class="control"><a data-onclick="<?php echo $notificationsHasButton[$i]['dataOnClick'] ?>" href="<?php echo $notificationsHasButton[$i]['btnUrl'] ?>" class="button notifications-cta has-text-weight-bold <?php echo $notificationsHasButton[$i]['btnColor'].' '.$notificationsHasButton[$i]['btnIsOutlined'] ?>">
							<?php echo $notificationsHasButton[$i]['btnText'] ?>
						</a></span>
			<?php
					endfor;
				endif; ?>
			</div>

		</div>
	</div>

</div>
