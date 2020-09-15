# Youtube-dl-STI project
Ce projet a été codé dans le cadre d'un devoir de SIN. La première version a été faite pendant les vacances 2020 (hors du cadre scolaire).
Je l'ai donc remodelé pour lui donner un style STI :)
Voici le lien de la version originale (toujours en développement) :
https://github.com/Elieroc/youtube-dl
Le projet a été développé en HTML, CSS et PHP. Il utilise un framework officiel nommé youtube-dl (https://youtube-dl.org/).

# What is it ?
Il permet de télécharger ou d'écouter des vidéos trouvés sur internet au format .mp3 et pas que sur Youtube !

# How to use this tool ?
Il suffit de trouver une vidéo sur internet, de copier son lien et de le coller dans le champs fait pour puis cliquer sur le bouton "GO".
Patientez un peu puis vous devriez voir apparaître une nouvelle page qui vous propose de télécharger la musique ou de l'écouter directement en ligne.

# How to host the website
Mon Raspberry Pi 3B+ personnel héberge le site à l'aide d'un serveur web apache et d'un serveur php.
Le tout tourne sur Raspbian Lite pour gagner un maximum de performance. Un nom de domaine gratuit de chez no-ip à été mis en place (websti2d.ddns.net).

# Security
Les entrées utilisateur sont très dangereuses sur les sites web. C'est pour cela que la fonction escapeshellarg() a été utilisée.
Celle-ci évite qu'un utilisateur malveillant execute des commandes sur le serveur.

# Warning !
Télécharger des musiques non libres de droits est interdit. Je ne pourrai donc pas être tenu responsable de vos actes.

# What are the future features ?
Les prochaines mises à jour comporteront :
  - Possibilité de télécharger des vidéos au format .mp4
  - Mise en place d'une base de données pour enregistrer le nom des musiques avec leur lien pour trouver les musiques depuis le site.
  
# My other projects :
  - Crypta : https://github.com/Elieroc/cr7pt4
  - SuperPyKeylogger (projet privé, merci de me donner votre identifiant github si intéressé):
    https://github.com/Elieroc/keylog-py
