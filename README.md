# 2024_dev_web_l2tdsi
20220BG6C Mamadou Issa Diedhiou MCS 


# Mes explications CSS

## Explication du code CSS en français

1. Balise body

- `overflow-x: hidden;`  :  Cette ligne empêche le défilement horizontal sur la page. Ce qui veut dire l'utilisateur ne pourra pas faire défiler la page latéralement.

2. Classe .header

- `position: fixed;`  :  Cette propriété fixe l'élément avec la classe `.header` en haut de la page. Il restera visible même en scrollant vers le bas.
- `width: 100%;`  :  Définit la largeur de l'en-tête à 100% de la fenêtre du navigateur.
- `top: 0;`  :  Positionne l'en-tête en haut de la page (à 0 pixel du bord supérieur).

3. Classe .containerClass

- `margin: auto;`  :  Centre horizontalement l'élément avec la classe `.containerClass` à l'intérieur de son élément parent.

4. Classe .imgClass1

- `width: 30%;`  :  Définit la largeur de l'image à 30% de la largeur de la fenêtre du navigateur.
- `height: 5%;`  :  Définit la hauteur de l'image à 5% de la hauteur de la fenêtre du navigateur.
- `margin: 2px;`  :  Ajoute une marge de 2 pixels autour de l'image.

5. Classe .divClass1

- `margin-left: 100px;`  :  Ajoute une marge gauche de 100 pixels à l'élément avec la classe `.divClass1`.

6. Classe .imgClass2

- `width: 40px;`  :  Définit la largeur de l'image à 40 pixels.
- `height: 40px;`  :  Définit la hauteur de l'image à 40 pixels.
- `border-radius: 100%;`  :  Crée une image circulaire en arrondissant les coins avec un rayon de 100% (équivalent à la moitié de la largeur et de la hauteur).

7. Classe .navClass1

- `z-index: relative;`  :  Définit l'ordre d'empilement de l'élément. Cette propriété n'a pas d'effet ici car aucun autre élément n'a de positionnement spécifique.
- `padding-left: 35px;`  :  Ajoute un padding de 35 pixels à gauche de l'élément. Le padding ajoute de l'espace à l'intérieur des bordures sans modifier la taille de l'élément.
- `margin-top: 70px;`  :  Ajoute une marge de 70 pixels en haut de l'élément.
- `padding-top: 2px;`  :  Ajoute un padding de 2 pixels en haut de l'élément.
- `background: rgb(41, 98, 255);`  :  Définit la couleur de fond de l'élément en bleu (avec les valeurs RGB 41, 98, 255).

8. Classe .ulClass1

- `text-align: center;`  :  Centre horizontalement le texte à l'intérieur des listes non ordonnées (`<ul>`) contenues dans l'élément avec la classe `.navClass1`.

9. Classe .ul_aClass1

- `color: rgb(199, 200, 200);`  :  Définit la couleur du texte des liens hypertexte (`<a>`) à l'intérieur des listes non ordonnées contenues dans l'élément avec la classe `.navClass1` en gris clair (avec les valeurs RGB 199, 200, 200).

10. Classe .navClass2

- `margin-left: 635px;`  :  Positionne l'élément avec la classe `.navClass2` à 635 pixels du bord gauche de la fenêtre du navigateur.

11. Classes .divClass2 à .divClass5

- Ces classes appliquent différents styles à des éléments `div`. Les propriétés utilisées incluent :
- `background-color` : Couleur de fond de l'élément.
- `padding` : Marge intérieure de l'élément.
- `margin` : Marge extérieure de l'élément.
- `width` : Largeur de l'élément.
- `color` : Couleur du texte de l'élément.
- `border-left`: Style de la bordure gauche de l'élément.
- `border-bottom-left-radius` et `border-top-left-radius` : Rayon d'arrondi des coins inférieur gauche et supérieur gauche de l'élément.

12. Classe .divAdmin

- `display: flex;`  :  Définit l'élément avec la classe `.divAdmin` pour utiliser une mise en page flexbox. Le flexbox permet un meilleur contrôle sur la disposition des éléments enfants à l'intérieur de l'élément parent.
- `margin: 20px 0px;`  :  Ajoute une marge de 20 pixels en haut et en bas de l'élément.

13. Classes .divBreakClass1 à .divBreakClass6

- Ces classes semblent servir à créer des sections ou des séparateurs sur la page. Elles utilisent différentes propriétés pour styliser ces éléments :
- `padding` : Marge intérieure de l'élément.
- `margin` : Marge extérieure de l'élément.
- `width` : Largeur de l'élément.
- `background` : Couleur de fond de l'élément.
- `font-size` : Taille du texte à l'intérieur de l'élément.
- `font-weight` : Épaisseur (gras) du texte à l'intérieur de l'élément.
- `text-decoration: none;`  :  Spécifiquement utilisée sur la classe `.divBreakClass6`, cette propriété supprime le soulignement des liens hypertexte à l'intérieur de l'élément.

