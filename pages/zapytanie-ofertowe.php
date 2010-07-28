<div id="motto" class="clearfix">
	<div class="grid_16 clearfix">
		<div class="see-more">
			<h2>Zapytanie ofertowe</h2>
			<a class="smore more red" href="index.php?action=page&id=kontakt" >Skontaktuj się z nami &raquo;</a>
		</div>
		
		<p class="display">Zadaj pytanie a my odpiszemy lub oddzwonimy do Ciebie!</p>
	</div>
</div>

<div id="content" class="clearfix">
	<div class="grid_16 clearfix">
<?php

require_once 'forms/Contact.php';
$form = new Form_Contact();

require_once 'Zend/View.php';
$view = new Zend_View();
$form->setView($view);

if (!empty($_POST)) 
{
	if ($form->isValid($_POST))
	{
		$content = '<dl>';
		foreach($form->getElements() as $element)
		{
			$label = $element->getLabel();
			$value = $element->getValue();

			$content .= sprintf('<dt><b>%s</b></dt><dl>%s</dl>', $label, $value);
		}
		$content .= '</dl>';

		require_once 'Zend/Mail.php';
		$mail = new Zend_Mail();
		$mail->setFrom('biuro@krak-plast.pl', 'Jacek Zawada');
		$mail->addTo('biuro@krak-plast.pl');
		$mail->addTo('widmogrod@gmail.com');
		$mail->setSubject('Formularz zapytaniowy');
		$mail->setBodyHtml($content,'UTF-8');

		try {
			$mail->send();
			print '<p class="success">Dziękujemy, wiadomość została wysłana.</p>';
		} catch (Zend_Mail_Exception $e) {
			print '<p class="failure">Przepraszamy, nie udało sie wysłać wiadomości powód: <em>'.$e->getMessage().'</em></p>';
		}
	}
}

print $form->render();

?>
	</div>
</div>

