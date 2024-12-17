# 01_INTRODUCTION

## Présentation de PHP

Le PHP (Hypertext Preprocessor) est un langage de programmation utilisé pour le développement web pour créer des pages dynamiques (pages générées à la demande != pages statiques). C'est un langage interprété (non compilé) côté serveur, prévue pour intéragir avec des bases de données et générant du contenue HTML envoyé au navigateur de l'utilisateur.

<ins>**Caractéristiques :**</ins>

- **Facilité d'intégration avec le HTML :**
  PHP peut être facilement intégré dans des pages HTML. Le code PHP est souvent écrit directement dans des balises `<?php ... ?>`.

- **Support de base de données :**
  PHP supporte de nombreuses bases de données, en particulier MySQL, ce qui permet de créer des sites interactifs, comme des forums ou des boutiques en ligne.

- **Sécurisation :**
  PHP propose des outils pour sécuriser les interactions avec les bases de données et la gestion des sessions, bien que des bonnes pratiques de sécurité soient nécessaires pour éviter des vulnérabilités comme les injections SQL.

- **Langage dynamique :**
  PHP est un langage dynamique avec des types de données flexibles. Il ne nécessite pas de déclaration explicite de type pour les variables.

- **Grande communauté :**
  PHP bénéficie d'une vaste communauté de développeurs et de nombreux outils et bibliothèques sont disponibles.

- **Orienté Back-End :**
  PHP est principalement utilisé pour le back-end, mais peut aussi être utilisé avec des outils front-end (comme JavaScript ou HTML5) pour des applications web complètes.

<ins>**Ecosystème et alternatives**</ins>

Dans l'écosystème du développement web, PHP est un des langages les plus utilisés pour créer des sites web dynamiques.

**CMS (Systeme de Gestion de Contenue)**

Il s'agit d'un logiciel en ligne grâce auquel il est possible de créer, de gérer et de modifier facilement un site web, sans avoir besoin de connaissances techniques en langage informatique.

Les principaux CMS basés sur PHP sont :

- Wordpress
- Joomla
- Drupal

**Frameworks**

Un Framework est une boite à outils pour un développeur web. Il contient des composants autonomes qui permettent de resoudre des problèmes souvent rencontrés par les développeurs (CRUD, arborescence, normes, sécurités, etc.) et permet donc de gagner du temps lors du développement du site.

Les principaux frameworks PHP :

- **Symphony :**
  Un framework robuste, principalement utilisé pour des applications complexes. Il est modulaire et flexible, avec de nombreuses bibliothèques.
- **Laravel :**
  Un des frameworks PHP les plus populaires, connu pour sa simplicité d'utilisation, sa gestion des migrations de base de données et son moteur de templates Blade.
- **Zend Framework :**
  Un framework orienté entreprise qui permet de créer des applications complexes et évolutives.

**Langages et logiciels**

En développement web, plusieurs langages et technologies sont souvent utilisés en complément de PHP :

- **HTML & CSS :**
  PHP génère du contenu HTML dynamique, qui peut être enrichi par des styles CSS pour l'apparence.
- **Javascript :**
  PHP et JavaScript sont souvent utilisés ensemble, PHP générant du contenu côté serveur, tandis que JavaScript gère les interactions côté client.
- **MySQL & MariaDB :**
  PHP est fréquemment utilisé avec des bases de données MySQL ou MariaDB pour stocker et récupérer des données.
- **Apache &Nginx :**
  PHP est souvent exécuté sur des serveurs web comme Apache ou Nginx, qui traitent les requêtes HTTP et servent les pages web générées par PHP.

#### Altenatives

PHP fait face à une concurrence de plus en plus forte de la part d'autres langages côté serveur, notamment :

- **Javascript (Node js) :**
  JavaScript peut désormais être utilisé côté serveur, créant un environnement de développement JavaScript full-stack.
- **Python :**
  Python, avec des frameworks comme Django et Flask, est de plus en plus utilisé pour le développement web grâce à sa simplicité et sa lisibilité.
- **Java (Spring) :**
  Java reste très utilisé pour des applications web complexes, particulièrement dans les entreprises à grande échelle.
