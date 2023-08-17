
# ![Logo de Laravel](https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg)Cadriciel Web 

# Travail pratique 2 (15%)

L’objectif de ce travail pratique est de créer un site qui affiche des faits sur… les chats.  
Le site devra avoir une page d’accueil qui affiche un **fait aléatoire** (et des images de chats) et une page qui permet de voir une **liste** de tous les faits. Vous devrez aussi avoir une page contenant un formulaire permettant d'ajouter un fait et vous devrez implémenter la suppression d'un fait.

- Le projet doit être réalisé en équipe de 2 ou 3 personnes maximum.

- Le projet devra aussi utiliser des _layout_ (1) et _components_ (minimum 2). Les pages du projet doivent toutes avoir un style visuel cohérent.

- Vous n'avez pas à vous souciez de la connexion de l'utilisateur pour l'ajout et la suppression.

- Lors de l’_installation_ de votre site par un autre développeur, ce dernier devra être en mesure de lancer les migrations afin de créer les tables de la base de données de façon automatique et un seeder devra ajouter des « faits », qui peuvent être du Lorem Ipsum ou des faits réels entrés manuellement (voir aussi le bonus #2)

- Vous devez générer au moins 20 faits.

<br>


### Exigences pour la remise

- Pour la remise, faites un _zip_ du dossier de votre projet Laravel sans le dossier `/vendor` avec le nom : **cadw_tp2_NOM1_prenom1_NOM2_prenom2.zip**

### Ce que votre projet DOIT inclure:
(le pluriel est utilisé par défaut pour ne pas révéler d'indices)
- Un _layout_ et au moins 2 _components_
	- L'utilisation de _layout_ et _components_ dans les vues aura un impact sur les points liés à l'organisation et la qualité du code.
- Des migrations et _seeders_
- L'utilisation obligatoire de modèles
- Un style visuel cohérent entre les pages

<br>

---

## Exigences pour les pages
### Accueil
- Affichage d'un fait au hasard
- Les images de chats affichées sur la page d'accueil peuvent provenir de https://placekitten.com ou https://random.cat (ou autre)
- Lien vers la page d'ajout et vers la liste de tous les faits

### Liste des faits
- Affiche tous les faits
- Affiche l'id et les 60 premiers caractères de chaque fait (en faisant usage d'un accesseur)
	- Indice: la classe [Illuminate\Support\Str](https://laravel.com/api/5.5/Illuminate/Support/Str.html) pourrait être utile
- Bouton de suppression pour chaque fait
- Bouton de modification pour chaque fait (si vous complétez le bonus #1)

### Ajout d'un fait
- Formulaire d'ajout d'un fait
- Validation des champs
- Messages d'erreurs personnalisés

### Bonus #1 (1pt): modification d'un fait
- Formulaire de modification d'un fait **pré-populé**
- Validation des champs
- Messages d'erreurs personnalisés

### Bonus #2 (0.5pt): utilisation du fichier JSON fourni
- Plutôt que d'insérer du Lorem Ipsum à l'aide d'une _factory_, utilisez les données provenant du fichier JSON fourni lors du _seeding_ (le fichier contient des faits réels sur les chats, en anglais)

<br>

---

## Critères d'évaluation

| Critère | Points |
| :--- | :---: |
| Migrations et BDD | 2 |
| Page d'accueil avec fait aléatoire | 2 |
| Page de la liste des faits | 2 |
| Ajout et suppression | 4 |
| Utilisation de _layout_/_components_ | 2 | 
| Style visuel (CSS, SCSS, Bootstrap, Tailwind, etc.) | 3 |
| Qualité générale du code, documentation et remise | 5 | 
| **BONUS #1** : modification d'un fait | 1 |
| **BONUS #2** : données réelles provenant du JSON | 0.5 |
| **Total** | **20** (+1.5) | 