<?php 
global $mailSendInfo;
session_start();
$_SESSION['type_mail'] = (!isset($_SESSION['type_mail'])) ? 0 : $_SESSION['type_mail'];
$mailSendInfo = array(
	'sended' => false,
	'error' => ''
);

if(count($_POST) > 0){
	require_once('class.phpmailer.php');

	$mailer = new PHPMailer();
	$mailer->CharSet = 'UTF-8';
	$mailer->From      = 'info@svyatobor.kiev.ua';
	$mailer->FromName  = 'Святобор';
	$mailer->isHTML(true);

$recipients = array(
// 'kas@svyatobor.kiev.ua',
// 'kvadratni.metry.ukraina@gmail.com',
// 'musiienko.a@gmail.com',
// 'elenaburyshyn@gmail.com',
// 'plaza.ua@ukr.net',
// 'liv@svyatobor.kiev.ua',
// 'mas@udp.ua',
// 'bev@svyatobor.kiev.ua',
	/**/
'Bev@svyatobor.kiev.ua',
'Kas@svyatobor.kiev.ua',
'plaza.ua@ukr.net',
'Liv@svyatobor.kiev.ua',
'Musiienko.a@gmail.com',


 'context@qmedia.com.ua',
  'chuprina@qmedia.com.ua',
  'a.scriptsov@qmedia.com.ua',
  'befrees.svl@gmail.com',
);

	switch ($_POST['type']) {
		case 'callback':
			$mailer->Subject = 'Заявка на обратный звонок с www.ready.svyatobor.kiev.ua';

			$fio = $_POST['fio'];
			$phone = $_POST['phone'];
			$result = $_SERVER['REQUEST_URI'];
			$mailer->Body = '
<table>
<tr>
  <td>ФИО:</td>
  <td>'.$fio.'</td>
</tr>
<tr>
  <td>телефон:</td>
  <td>'.$phone.'</td>
</tr>
</table>
<p>'.$result.'</p>';

			for($i = 0; $i < count($recipients); $i++){
				$mailer->AddAddress($recipients[$i]);

					if(!$mailer->send()) 
					{
						$mailSendInfo['sended'] = false;
						$mailSendInfo['error'] = $mailer->ErrorInfo;
					} 
					else 
					{
					    $mailSendInfo['sended'] = true;
					    $_SESSION['sended'] = '1';
					}
					$mailer->ClearAddresses();
				}

				if($_SESSION['sended']=='1'){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: ". $_SERVER['HTTP_ORIGIN'].$_SERVER['REQUEST_URI']);
					die();
				}

			/** Send extra mail */
			// $mailer->clearAllRecipients();
			// $mailer->AddAddress( 'context@qmedia.com.ua' );
			// $mailer->AddAddress( 'chuprina@qmedia.com.ua' );
			// $mailer->AddAddress( 'a.scriptsov@qmedia.com.ua' );
			// // $mailer->AddAddress( 'olefiroo@gmail.com' );
			// $mailer->send();
			break;
		case 'require_watch':
			$mailer->Subject = 'Записаться на просмотр —  II очередь';

			$fio = $_POST['fio'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$msg = $_POST['msg'];
			$result = $_SERVER['REQUEST_URI'];
			$mailer->Body = '
			<table>
				<tr>
				  <td>ФИО:</td>
				  <td>'.$fio.'</td>
				</tr>
				<tr>
				  <td>телефон:</td>
				  <td>'.$phone.'</td>
				</tr>
				<tr>
				  <td>email:</td>
				  <td>'.$email.'</td>
				</tr>
				<tr>
				  <td>сообщение:</td>
				  <td>'.$msg.'</td>
				</tr>
			</table>
			<p>'.$result.'</p>';
			for($i = 0; $i < count($recipients); $i++){
				$mailer->AddAddress($recipients[$i]);

					if(!$mailer->send()) 
					{
						$mailSendInfo['sended'] = false;
						$mailSendInfo['error'] = $mailer->ErrorInfo;
					} 
					else 
					{
					    $mailSendInfo['sended'] = true;
					    $_SESSION['sended'] = '1';
					    $_SESSION['type_mail'] = '2';
					}
					$mailer->ClearAddresses();
				}
				if($_SESSION['sended']=='1'){
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: ". $_SERVER['HTTP_ORIGIN'].$_SERVER['REQUEST_URI']);
					die();
				}
			/** Send extra mail */
			// $mailer->clearAllRecipients();
			// $mailer->AddAddress( 'context@qmedia.com.ua' );
			// $mailer->AddAddress( 'chuprina@qmedia.com.ua' );
			// $mailer->AddAddress( 'a.scriptsov@qmedia.com.ua' );
			// $mailer->AddAddress( 'befrees.svl@gmail.com' );
			// // $mailer->AddAddress( 'olefiroo@gmail.com' );
			// $mailer->send();
			break;
		case 'require_watch1':
			$mailer->Subject = 'Заказать обратный звонок —  II очередь';

			$fio = $_POST['fio'];
			$phone = $_POST['phone'];
			$result = $_SERVER['REQUEST_URI'];
			$mailer->Body = '
				<table>
					<tr>
					  <td>ФИО:</td>
					  <td>'.$fio.'</td>
					</tr>
					<tr>
					  <td>телефон:</td>
					  <td>'.$phone.'</td>
					</tr>
				</table>
				<p>'.$result.'</p>';

			for($i = 0; $i < count($recipients); $i++){
				$mailer->AddAddress($recipients[$i]);

					if(!$mailer->send()) 
					{
						$mailSendInfo['sended'] = false;
						$mailSendInfo['error'] = $mailer->ErrorInfo;
					} 
					else 
					{
					    $mailSendInfo['sended'] = true;
					    $_SESSION['sended'] = '1';
					    $_SESSION['type_mail'] = '1';
					}
					$mailer->ClearAddresses();
				}

				if($_SESSION['sended']=='1'){
					
					header("HTTP/1.1 301 Moved Permanently");
					header("Location: ". $_SERVER['HTTP_ORIGIN'].$_SERVER['REQUEST_URI']);
					die();
				}
			// /** Send extra mail */
			// $mailer->clearAllRecipients();
			// $mailer->AddAddress( 'context@qmedia.com.ua' );
			// $mailer->AddAddress( 'chuprina@qmedia.com.ua' );
			// $mailer->AddAddress( 'a.scriptsov@qmedia.com.ua' );
			// // $mailer->addAddress( 'mas@udp.ua' );
			// // $mailer->addAddress( 'nvv@svyatobor.kiev.ua' );
			// // $mailer->addAddress( 'kas@svyatobor.kiev.ua' );
			// // $mailer->addAddress( 'andrew.kryshtal@gmail.com' );
			// // $mailer->AddCC('plaza.ua@ukr.net');
			// // $mailer->AddCC('liv@svyatobor.kiev.ua');
			// // $mailer->AddCC('a.kryshtal@qmedia.com.ua');
			// $mailer->send();
			break;
	}
}

function mailSendInfo(){
	// print_r($_SESSION);
	$out = isset($_SESSION['type_mail']) ? $_SESSION['type_mail'] : false;
	// echo $out;
	if(isset($_SESSION['sended']) && $_SESSION['sended'] == '1'){
		$_SESSION['sended'] = '0';
		return $out;
	}
	return false;
}

?>