# 05_PDO (PHP Data Objects)

PDO (PHP Data Objects) est une interface d'accès aux bases de données qui permet à PHP de se connecter à plusieurs types de bases de données, y compris MySQL, PostgreSQL, SQLite, etc. Contrairement à mysql\_\* ou mysqli\_\*, PDO permet une approche orientée objet pour l'interaction avec la base de données, et il offre une meilleure sécurité grâce à l'utilisation de requêtes préparées pour éviter les injections SQL.

## Création de la base de données

Avant d'utiliser PDO, assurez-vous que WAMP est installé et configuré sur votre machine.

- Lancer WAMP : Ouvrir WAMP, et s'assurer que le serveur Apache et MySQL sont en ligne (icone Wamp doirt petre verte).
- Accéder à phpMyAdmin : Accéder à http://localhost/phpmyadmin depuis le navigateur.
- Créer une base de données : Dans l'onglet "Bases de données", créer une nouvelle base de données.
- Créer une table : Créer une table simple (ex. : table user, avec id, name & age).

## Connexion à la base de données

```php
<?php
    // Paramètres //
    $host = 'localhost';
    $dbname = 'pdo_test';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $username = 'root';
    $password = '';

    try {
        // Création de l'instance de PDO //
        $pdo = new PDO($dsn, $username, $password);

        // Définition du mode d'erreur //
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connexion réussie à la base de données MySQL !";
    } catch (PDOException $error) {
        // En cas d'échec de la connexion, afficher l'erreur
        echo "Erreur de connexion : " . $error->getMessage();
    }
?>
```

## Insérer des données

- Exemple avec une seule insertion :

```php
<?php
    try {
        // Les données à insérer //
        $name = "John";
        $age = 20;

        // La requête est préparée par sécurité //
        $sql = "INSERT INTO users (name, age) VALUES (:name, :age)";
        $req = $pdo->prepare($sql);

        // Lier les valeurs aux paramètres //
        $req->bindParam(':name', $name);
        $req->bindParam(':age', $age);

        // Exécuter la requête //
        $req->execute();

        echo "Nouvel utilisateur ajouté avec succès.";
    } catch (PDOException $error) {
        echo "Erreur : " . $error->getMessage();
    }
?>
```

- Exemple avec plusieurs insertions :

```php
<?php
    // Les données à insérer //
    $users = [
        [
            "name" => "John",
            "age" => 20
        ],
        [
            "name" => "Simon",
            "age" => 45
        ],
        [
            "name" => "Clara",
            "age" => 12
        ]
    ];


    try {
        // La requête est préparée par sécurité //
        $sql = "INSERT INTO users (name, age) VALUES (:name, :age)";
        $req = $pdo->prepare($sql);

        // Exécuter la requête //
        foreach($users as $user) {
            $req->execute($user);
        }

        echo "Nouveaux utilisateurs ajoutés avec succès.";
    } catch (PDOException $error) {
        echo "Erreur : " . $error->getMessage();
    }
?>
```

## Récupérer des données

```php
<?php
    try {
        $sql = "SELECT id, name, age FROM users";
        // Aucune donnée exterieur n'est insérée dans la requpete SQL, inutile de la préparer dans ce cas //
        $req = $pdo->query($sql);

        // fetch permet de boucler sur chacune des lignes contenue dans la réponse //
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
            echo ("id: " . $row["id"] . ", name : " . $row["name"] . ", age : " . $row["age"] . "<br>");
        }
    } catch (PDOException $error) {;
        echo "Erreur : " . $error->getMessage();
    }
?>
```

- Variante :

```php
<?php
    try {
        $sql = "SELECT id, name, age FROM users";
        $req = $pdo->prepare($sql);
        // Sélectionner le mode de réponse //
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute();
        // Insérer la réponse et l'insérer dans un tableau //
        $res = $req->fetchAll();

        // Afficher le résultat //
        foreach ($res as $row) {
            echo ("id: " . $row["id"] . ", name : " . $row["name"] . ", age : " . $row["age"] . "<br>");
        }
    } catch (PDOException $error) {;
        echo "Erreur : " . $error->getMessage();
    }
?>
```
