<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="php.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Formulaire PHP</title>
</head>
<body>
    <div class="container">
        <div class="starter-template">

            <form action="form.php" method="post">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputname">Votre nom</label>
                            <input type="text" name="name" class="form-control" id="inputname">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputname">Votre prénom</label>
                            <input type="text" name="firstname" class="form-control" id="inputfirstname">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputemail">Votre email</label>
                            <input type="text" name="email" class="form-control" id="inputemail">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputphone">Votre numéro de téléphone</label>
                            <input type="text" name="phone" class="form-control" id="inputphone">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputcountry">Votre pays</label>
                            <select name="country" class="form-control" id="selectCountry">
                                <option value="1">FRANCE</option>
                                <option value="2">ANGLETERRE</option>
                                <option value="3">CHINE</option>
                                <option value="4">ESPAGNE</option>
                                <option value="5">AMERIQUE</option>
                            </select>
                        </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="inputmessage">Votre message</label>
                            <textarea name="message" id="inputmessage" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ENVOYER</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
<p>
<?php
		if(isset($_POST) && isset($_POST['name'])
			&& isset($_POST['firstname'])
			&& isset($_POST['email'])
			&& isset($_POST['phone'])
			&& isset($_POST['country'])
			&& isset($_POST['message']))
		{
			extract($_POST);
			if(!empty($name)
				&& !empty($firstname)
				&& !empty($email)
				&& !empty($phone)
				&& !empty($country)
				&& !empty($message))
		{

			echo $name.'<br/>';
			echo $firstname.'<br/>';
			echo $phone.'<br/>';
			echo $email.'<br/>';
			echo $country.'<br/>';
			echo $message.'<br/>';
			require("functionMail.php");


		} // fin if Empty

		else { echo "Param Vide !";}
	}
	else{echo "Param Indefini !";

	}


	// fin If Get
?>
</p>
</body>
</html>