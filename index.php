<!doctype html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <title>Formulaire</title>
	</head>
    <body>
		<form id='forml' class='background' method='post' action='form_validation.php' spellcheck='true' autocomplete='on'>
			<p>*Tous les champs sont requis</p>
			<label for='nom'>Nom:*</label>
			<input name='name' id='nom' type='text' accesskey='a 0' tabindex='1'>
			<label for='prénom'>Prénom:*</label>
			<input name='firstname' id='prénom' type='text' accesskey='b 1' tabindex='2'>
			<label for='e_mail'>Adresse mail:*</label>
			<input name='mail' id='e_mail' type='email' accesskey='c 2' tabindex='3' spellcheck='false'>
			<label for='message'>Votre message:*</label>
			<textarea name='why' id='message' accesskey='d 3' tabindex='4'></textarea>
			<input id='button_validate' class='background2' type='submit' accesskey='e 4' tabindex='5' value='Valider'>
			<input id='button_reset' class='background2' type='reset' accesskey='f 5' tabindex='6' value='Annuler'>
		</form>
	</body>
</html>																																																																																														