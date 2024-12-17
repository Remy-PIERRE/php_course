# 03_Gestion des formulaires

Les formulaires HTML permettent aux utilisateurs de soumettre des données vers un serveur web. En PHP, on utilise des superglobales comme $\_GET et $\_POST pour récupérer ces données. Le choix de la méthode (GET ou POST) dépend des exigences de l'application, de la nature des données et de la sécurité.

## Le formulaire

```html
<form action="main.php" method="POST">
  <label for="email">E-mail :</label>
  <input type="email" id="email" name="email" required />

  <label for="password">Mot de passe :</label>
  <input type="text" id="password" name="password" required />

  <button type="submit">Envoyer</button>
</form>
```

- `action` : Indique la page vers laquelle va être envoyé le formulaire.
- `method` : Précise la méthode HTTP utilisée pour envoyer le formulaire ("GET" ou "POST").

## Méthode GET

La méthode GET envoie les données du formulaire dans l'URL du navigateur sous forme de paramètres de chaîne de requête. Les données sont visibles et limitées à 2048 caractères.

<ins>**Avantages :**</ins>

- Les données sont visibles dans l'URL, ce qui peut être utile pour la recherche ou le partage de liens.
- Idéale pour les actions "sans effet secondaire" (c'est-à-dire des requêtes de lecture, comme la recherche).

<ins>**Inconvénients :**</ins>

- Limité à 2048 caractères.
- Les données sont visibles dans l'URL, ce qui peut poser un problème de sécurité pour des informations sensibles.

<in>**Utilisation :**</in>

On peut récupèrer les valeurs envoyées depuis le formulaire et les traiter grace à la superglobal `$_GET`.

```php
<?php
    // si $_GET n'est pas nulle ... //
    if (isset($_GET['email'])) {
        $email = $_GET['email'];

        echo "Bonjour, votre email est " . htmlspecialchars($email) . ".";
    }
?>
```

## Méthode POST

La méthode POST envoie les données dans le corps de la requête HTTP, et non dans l'URL. Les données sont donc cachées aux yeux de l'utilisateur et peuvent être de taille bien plus grande que celles envoyées par GET.

<ins>**Avantages :**</ins>

- Les données ne sont pas visibles dans l'URL, ce qui les rend plus sécurisées (mais elles peuvent encore être interceptées si la connexion n'est pas sécurisée).
- Idéale pour les formulaires contenant des informations sensibles (comme des mots de passe) ou des données volumineuses.
- Pas de limite de taille des données (par rapport à GET).

<ins>**Inconvénients :**</ins>

- Les données ne peuvent pas être partagées facilement via l'URL.

<in>**Utilisation :**</in>

On peut récupèrer les valeurs envoyées depuis le formulaire et les traiter grace à la superglobal `$_POST`.

```php
<?php
    // si $_POST n'est pas nulle ... //
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $psw = $_POST["password"];

        // On test le mot de passe "1234" //
        if ($psw == "1234") {
            echo "Le mot de passe est valide.";
        }
        else {
            echo "Le mot de passe n'est pas valide.";
        }
    }
?>
```
