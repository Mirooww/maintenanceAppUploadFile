/projet
│
├── /assets
│   ├── /image                  Le dossier où l'on stock les images utiles pour le site.
│   ├── /style                  Le dossier où l'on recense mes différentes feuilles de style
│   │       └── /bootperso.css      Une sorte de bootstrap fait maison                   
│   │       └── /style.css          Ma feuille de style perso
│   └── /uploadedImage          La destination où les images uploades sont retrouves
│
├── /pages
│   ├── /layout                 Le dossier où se trouve chacun des bouts de code que l'on retrouvera sur chacune des pages
│   ├── /php
│   │     └── /uploadSystem.php     Etape 2 : Le programme qui traite le fichier inséré et qui retourne un message et selon
│   │                                         si c'est validé insére dans le fichier /uploadedImage
│   ├── afterUpload.php     Etape 3 : Retourne le message de l'étape 2, si l'image a été correctement upload ou non et pk
│   └── uploadPage.php      Etape 1 : On arrive sur cette page pour déposer notre
│
├── index.php
└── README.md
