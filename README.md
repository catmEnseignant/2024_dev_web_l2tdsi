# 2024_dev_web_l2tdsi
Explications des classes:
body :
overflow-x: hidden; :  Cette propriété masque toute barre de défilement horizontale qui pourrait apparaître sur la page.
Classes d'en-tête:

headerClass :
position: fixed; :  Rend l'élément d'en-tête fixe en haut de la page, même lors du défilement.
width: 100%; :  Définit la largeur de l'en-tête sur 100 % de la fenêtre d'affichage.
top: 0; :  Positionne l'en-tête en haut de la page (avec position: fixed;).
containerClass :
margin: auto; :  Centre le contenu horizontalement dans l'en-tête.
Classes de navigation :

imgClass1 (logo Soloquizz) :
width:30%; :  Définit la largeur du logo sur 30 % du conteneur.
height: 5%; :  Définit la hauteur du logo sur 5 % du conteneur.
margin: 2px; :  Ajoute une petite marge autour du logo.

divClass1 :
margin-left: 100px; :  Ajoute une marge gauche de 100 pixels à l'élément contenant le bouton déroulant.

imgClass2 (icône d'utilisateur) :
width: 40px; :  Définit la largeur de l'icône d'utilisateur à 40 pixels.
height: 40px; :  Définit la hauteur de l'icône d'utilisateur à 40 pixels.
border-radius: 100%; :  Crée une forme circulaire pour l'icône d'utilisateur.

navClass1 (barre de navigation principale) :
z-index: relative; :  Définit l'ordre d'empilement de la barre de navigation pour s'assurer qu'elle apparaît au-dessus des autres éléments.
padding-left: 35px; :  Ajoute un padding gauche de 35 pixels à la barre de navigation.
margin-top: 70px; :  Ajoute une marge supérieure de 70 pixels à la barre de navigation (probablement après l'en-tête).
padding-top: 2px; :  Ajoute un petit padding supérieur à la barre de navigation.
background: rgb(41, 98, 255); :  Définit la couleur d'arrière-plan de la barre de navigation sur un bleu foncé.

ulClass1 (liste de navigation) :
text-align: center; :  Centre le texte à l'intérieur des éléments de la liste de navigation.

ul_a_Class1 (liens de navigation) :
font-weight: 500; :  Définit l'épaisseur de la police des liens de navigation pour qu'elle soit plus gras.
color: rgb(199, 200, 200); :  Définit la couleur des liens de navigation sur un gris clair.

navClass2 (navigation par pagination) :
margin-left: 635px; :  Ajoute une marge gauche de 635 pixels à la navigation par pagination, la positionnant probablement à droite.

Classes de contenu :

divClass2 (conteneur de pied de page) :
background-color: rgb(64, 79, 104); :  Définit la couleur d'arrière-plan du pied de page sur un bleu foncé.
padding: 2px; :  Ajoute un petit padding au contenu du pied de page.

divClass3, divClass4, divClass5 (statistiques des cartes) :
margin-left: 75px; (divClass3 seulement) - Ajoute une marge gauche de 75 pixels à la première carte (peut être ajustée pour les autres).
padding: 12px 0px; :  Ajoute un padding supérieur et inférieur aux cartes.
width:320px; :  Définit la largeur des cartes à 320 pixels.