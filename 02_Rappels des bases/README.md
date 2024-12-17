# 02_Rappels des bases

## Syntaxe de base

<ins>**Structure d'un fichier .php**</ins>

Un fichier PHP commence par la balise `<?php` et se termine par la balise `?>`.

```php
<?php
    echo "Bienvenue sur PHP"
?>
```

<ins>**Variables, type de données et opérateurs**</ins>

- Déclaration d'une variable :

```php
$maVariable = "valeur de ma variable";
```

- Type de donnée :

| Type de Variable   | Description                                                                                 | Exemple                                                    |
| ------------------ | ------------------------------------------------------------------------------------------- | ---------------------------------------------------------- |
| **String**         | Chaîne de caractères. Utilisé pour manipuler du texte.                                      | `$nom = "John Doe";`                                       |
| **Integer (int)**  | Nombre entier, positif ou négatif, sans décimales.                                          | `$age = 25;`                                               |
| **Float (float)**  | Nombre à virgule flottante (décimal).                                                       | `$prix = 19.99;`                                           |
| **Boolean (bool)** | Valeur booléenne, soit `true` ou `false`.                                                   | `$estActif = true;`                                        |
| **Array**          | Tableau, peut contenir plusieurs éléments de différents types.                              | `$fruits = ["pomme", "banane", "cerise"];`                 |
| **Object**         | Instance d'une classe, utilisée pour la programmation orientée objet.                       | `$personne = new Personne();`                              |
| **Null**           | Absence de valeur ou variable non initialisée.                                              | `$variable = null;`                                        |
| **Resource**       | Type spécial représentant une ressource externe, comme une connexion à une base de données. | `$conn = mysqli_connect("localhost", "user", "password");` |

- Opérateurs :

**Arythmétiques**

| Opérateur | Description                                                | Exemple    |
| --------- | ---------------------------------------------------------- | ---------- |
| `+`       | Addition, additionne deux opérandes.                       | `$a + $b`  |
| `-`       | Soustraction, soustrait un opérande d'un autre.            | `$a - $b`  |
| `*`       | Multiplication, multiplie deux opérandes.                  | `$a * $b`  |
| `/`       | Division, divise un opérande par un autre.                 | `$a / $b`  |
| `%`       | Modulo, renvoie le reste d'une division.                   | `$a % $b`  |
| `**`      | Exponentiation, élève un nombre à la puissance d'un autre. | `$a ** $b` |

**Comparaison**

| Opérateur | Description                                                                                     | Exemple     |
| --------- | ----------------------------------------------------------------------------------------------- | ----------- |
| `==`      | Égale à, vérifie si deux opérandes sont égaux.                                                  | `$a == $b`  |
| `===`     | Strictement égal à, vérifie si deux opérandes sont égaux et de même type.                       | `$a === $b` |
| `!=`      | Différent de, vérifie si deux opérandes ne sont pas égaux.                                      | `$a != $b`  |
| `!==`     | Strictement différent, vérifie si les opérandes sont différents ou de types différents.         | `$a !== $b` |
| `>`       | Plus grand que, vérifie si l'opérande de gauche est plus grand que celui de droite.             | `$a > $b`   |
| `<`       | Moins que, vérifie si l'opérande de gauche est plus petit que celui de droite.                  | `$a < $b`   |
| `>=`      | Plus grand ou égal à, vérifie si l'opérande de gauche est plus grand ou égal à celui de droite. | `$a >= $b`  |
| `<=`      | Moins ou égal à, vérifie si l'opérande de gauche est plus petit ou égal à celui de droite.      | `$a <= $b`  |

**Logique**

| Opérateur | Description                                                                            | Exemple           |
| --------- | -------------------------------------------------------------------------------------- | ----------------- |
| `=`       | Affectation, assigne une valeur à une variable.                                        | `$a = 5`          |
| `+=`      | Addition et affectation, ajoute la valeur de l'opérande à la variable.                 | `$a += 5`         |
| `-=`      | Soustraction et affectation, soustrait la valeur de l'opérande à la variable.          | `$a -= 5`         |
| `*=`      | Multiplication et affectation, multiplie la variable par la valeur de l'opérande.      | `$a *= 5`         |
| `/=`      | Division et affectation, divise la variable par la valeur de l'opérande.               | `$a /= 5`         |
| `%=`      | Modulo et affectation, applique l'opérateur modulo et assigne le résultat.             | `$a %= 5`         |
| `.=`      | Concatenation et affectation, ajoute une chaîne de caractères à la fin de la variable. | `$a .= " monde";` |

**Type**

| Opérateur  | Description                                | Exemple      |
| ---------- | ------------------------------------------ | ------------ |
| `(int)`    | Cast (conversion) en entier.               | `(int)$a`    |
| `(bool)`   | Cast (conversion) en booléen.              | `(bool)$a`   |
| `(float)`  | Cast (conversion) en flottant.             | `(float)$a`  |
| `(string)` | Cast (conversion) en chaîne de caractères. | `(string)$a` |

## Contrôles de flux

<ins>**Conditions :**</ins>

Les structures conditionnelles permettent d'exécuter un bloc de code seulement si une condition est vraie.

**if, else, elseif :**

```php
<?php
    if ($age < 18) {
        echo "Vous êtes mineur.";
    }
    elseif ($age < 60) {
        echo "Vous petes adulte.";
    }
    else {
        echo "Vous êtes senior.";
    }
?>
```

**switch :**

```php
<?php
    switch($jour) {
        case "1":
            echo "Lundi, la semaine commence.";
            break;
        case "5":
            echo "Vendredi, bientot le week-end.";
            break;
        case "6":
        case "7":
            echo "C'est le week-end !";
            break;
        default:
            echo "Au travail !";
    }
?>
```

<ins>**Boucles :**</ins>

**for :**

```php
<?php
    for ($index = 0; $index < 5; $index++) {
        echo "Valeur de index : $index<br>";
    }
?>
```

**foreach :**

```php
<?php
    $tableau = [1, 2, 3, 4];

    foreach ($tableau as $valeur) {
        echo $valeur . "<br>";
    }
?>
```

**while :**

```php
<?php
    $index = 0;

    while ($index < 5) {
        echo "Valeur de index : $index<br>";
        $index++;
    }
?>
```

## Fonctions

<ins>**Déclaration :**</ins>

```php
<?php
    function sum($a, $b) {
        return $a + $b;
    }

    // Affiche 5 //
    echo sum(2, 3);
?>
```

<ins>**Passage de paramètre :**</ins>

```php
<?php
    function increament($number) {
        return ++$number;
    }

    $value = 5;
    $value = increament($value);

    // Affiche 6 //
    echo $value;
?>
```

<ins>**Fonction anonyme :**</ins>

```php
<?php
    $sum = function($a, $b) {
        return $a + $b;
    };

    // Affiche 11 //
    echo $sum(5, 6);
?>
```

## Tableaux

<ins>**Déclaration :**</ins>

```php
<?php
    $countries = array(
        "France",
        "Italie",
        "Allemagne"
    );

    // En utilisant la syntaxe de tableau courte //
    $cities = [
        "Paris",
        "Lyon",
        "Marseille"
    ];
?>
```

<ins>**Tableau indexé :**</ins>

```php
<?php
    $tab = [1, 2, 3];

    // Affiche 1 //
    echo $tab[0];
?>
```

<ins>**Tableau associatif :**</ins>

```php
<?php
    $person = [
        "name" => "Dupont",
        "age" => 25
    ];

    // Affiche Dupont //
    echo $person["name"];
?>
```

<ins>**Parcourir un tableau :**</ins>

```php
<?php
    foreach ($tab as $element) {
        echo $element . "<br>";
    }
?>
```

<ins>**Manipulation d'un tableau :**</ins>

Voici quelques exemples de méthodes permettant de manipuler un tableau.

**array_push :**

Permet d'ajouter un nouvel élément à la fin d'un tableau.

```php
<?php
    $tab = ["poire", "pomme", "banane"];

    array_push($tab, "cerise", "fraise");

    // Affiche [1=> "poire", 2 => "pomme", 3 => "banane", 4 => "cerise", 5 => "fraise"] //
    var_dump($tab) ;
?>
```

**unset :**

Permet de supprimer un élément du tableau.

```php
<?php
    $tab = array(
        1 => 'one',
        2 => 'two',
        3 => 'three'
    );

    unset($tab[2]);

    // Affiche [1=> "one", 3 => "three"]
    var_dump($tab) ;
?>
```

**array_map :**

Permet d'appliquer une fonction à tous les éléments d'un tableau.

```php
<?php
    $tab = [1, 2, 3, 4, 10];

    $newTab = array_map(function($element) {
        return $element + 1;
    }, $tab);

    // Affiche [1=> 2, 2 => 3, 3 => 4, 4 => 5, 5 => 11] //
    var_dump($newTab);
?>
```

<ins>**Tableaux 2D :**</ins>

Un tableau peux contenir plusieurs tableaux. On appel cette structure un tableau 2D ou tableau multidimensionnel. Ils sont particulièrement utiles pour organiser des données en matrices ou en grilles, comme pour stocker des informations sous forme de lignes et de colonnes.

**Déclaration :**

```php
$films =[
    0=> ["title"=>"star wars","year"=>"1977"],
    1=> ["title"=>"The Matrix","year"=>"1999"],
];

var_dump($films) ;
```

```php
$film1["title"] ="star wars";
$film1["year"] ="1977";

$film2["title"] ="The Matrix";
$film2["year"] ="1999";

$tab[] = $film1;
$tab[] = $film2;

var_dump($tab) ;
```

```php
$tab3[0]["title"] ="star wars";
$tab3[0]["year"] ="1977";
$tab3[1]["title"] ="The Matrix";
$tab3[1]["year"] ="1999";

var_dump($tab3) ;
```

# Afficher un tableau 2D ?

```php
foreach ( $tab3 as $film){
    echo $film["title"]."<br>";
    echo $film["year"]."<br>";
}
```

**Accéder à un élément du tableau :**

```php
// Accéder au premier élément de la première ligne //
echo $tab2D[0][0]; // Affiche "1"

// Accéder au deuxième élément de la deuxième ligne //
echo $tab2D[1][1]; // Affiche "5"
```

**Ajouter un élément :**

```php
// Ajouter une nouvelle ligne avec 3 éléments //
$tab2D[] = [7, 8, 9];

// Ajouter un élément à la première ligne //
$tab2D[0][] = 10;
```

**Boucler sur le tableau :**

```php
$tab2D = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($tab2D as $row) {
    foreach ($row as $column) {
        echo $column . " ";
    }

    echo "<br>";
}
```

**Tableau 2D associatif :**

Un tableau 2D n'a pas forcément besoin d'utiliser des indices numériques pour les lignes ou les colonnes. Vous pouvez aussi utiliser des clés associatives pour chaque ligne ou chaque colonne.

```php
$tab2DAssoc = [
    "row1" => ["name" => "John", "age" => 25],
    "row2" => ["name" => "Doe", "age" => 30]
];

// Accéder à un élément spécifique //
echo $tab2DAssoc["row1"]["name"];
```

## Programmation orientée objet

Une classe définit un modèle pour créer des objets.

```php
<?php
    class Car {
        public $brand;
        public $color;

        public function __construct($brand, $color) {
            $this->brand = $brand;
            $this->color = $color;
        }
    }

    $myCar = new Car("Toyota", "rouge");

    // Affiche Toyota //
    echo $myCar->brand;
?>
```
