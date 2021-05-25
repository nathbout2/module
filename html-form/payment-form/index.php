<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form>
        <h1>Formulaire de paiment</h1>
        <p>Les champs obligatoires sont suivis par un <strong><abbr title="required">*</abbr></strong>.</p>    
            <section>
                <h2>Informations de contact</h2>
                <fieldset>
                    <legend>Civilité</legend>
                        <ul>
                            <li>
                                <label for="title_1">
                                    <input type="radio" id="title_1" name="title" value="M."> Monsieur
                                </label>
                            </li>
                            <li>
                                <label for="title_2">
                                    <input type="radio" id="title_2" name="title" value="Mme."> Madame
                                </label>
                            </li>
                        </ul>
                </fieldset>
                <p>
      <label for="name">
        <span>Nom : </span>
        <strong><abbr title="required">*</abbr></strong>
      </label>
      <input type="text" id="name" name="username">
    </p>
                <p>
                <label for="mail">
        <span>e-mail :</span>
        <strong><abbr title="required">*</abbr></strong>
      </label>
      <input type="email" id="mail" name="usermail">
    </p>
    <p>
      <label for="pwd">
        <span>Mot de passe :</span>
        <strong><abbr title="required">*</abbr></strong>
      </label>
      <input type="password" id="pwd" name="password">
    </p>  
     </section>
     <section>
    <h2>Informations de paiement</h2>
    <p>
      <label for="card">
        <span>Type de carte :</span>
      </label>
      <select id="card" name="usercard">
        <option value="visa">Visa</option>
        <option value="mc">Mastercard</option>
        <option value="amex">American Express</option>
      </select>
    </p>
    <p>
      <label for="number">
        <span>Numéro de carte :</span>
        <strong><abbr title="required">*</abbr></strong>
      </label>
      <input type="text" id="number" name="cardnumber">
    </p>
    <p>
      <label for="date">
        <span>Validité :</span>
        <strong><abbr title="required">*</abbr></strong>
        <em>format mm/aa</em>
      </label>
      <input type="text" id="date" name="expiration">
    </p>
    
</section>

<p> <button type="submit">Valider le paiement</button> </p>
    
    </form>
</body>
</html>