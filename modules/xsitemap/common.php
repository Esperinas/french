<?php
/*
 Vous ne pouvez pas modifier ou altérer aucune partie de ce commentaire ou des crédits
 des développeurs de ce code source ou de tout code source de support
 qui est considéré comme du matériel protégé (c) par le commentaire original ou les auteurs des crédits.

 Ce programme est distribué dans l'espoir qu'il sera utile,
 mais SANS AUCUNE GARANTIE ; sans même la garantie implicite de
 QUALITÉ MARCHANDE ou D'ADÉQUATION À UN USAGE PARTICULIER.
 */
/**
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author          Xoops Development Team
 */
$moduleDirName = \basename(\dirname(__DIR__, 2));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

\define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'Support de la bibliothèque GD : ');
\define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'Version de la bibliothèque GD : ');
\define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Désactivé</span> (Pas de miniatures disponibles)");
\define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Activé</span> (Miniatures disponibles)");
\define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'État du serveur');
\define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Taille maximale des posts autorisée (directive post_max_size dans php.ini) : ');
\define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Taille maximale des téléchargements autorisée (directive upload_max_filesize dans php.ini) : ');
\define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Limite de mémoire (directive memory_limit dans php.ini) : ');
\define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Version méta des téléchargements :</span> ");
\define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>OFF</span>");
\define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>ON</span>");
\define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Chemin du serveur vers la racine XOOPS : ');
\define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'État des téléchargements du serveur : ');
\define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Informations extraites du fichier PHP ini :</span>");
\define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Note. Le chemin de téléchargement *DOIT* contenir le chemin complet du serveur vers votre dossier de téléchargement.');

\define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Imprimer</span>");
\define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Créer PDF</span>");

\define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Échec de la mise à jour - impossible de renommer le champ '%s'");
\define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Échec de la mise à jour - impossible d'ajouter de nouveaux champs");
\define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Échec de la mise à jour - impossible de renommer la table '%s'");
\define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Impossible de créer la colonne dans la base de données : %s');
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'Ce module nécessite XOOPS %s+ (%s installé)');
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'Ce module nécessite PHP version %s+ (%s installé)');
\define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Impossible de supprimer les tags du module Tag');

\define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Les dossiers de téléchargement ont été supprimés');

// Messages d'erreur
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Impossible de supprimer le répertoire %s');
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Impossible de supprimer %s');
\define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Impossible de charger le plugin');

//Aide
\define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(__DIR__, 2)));
\define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Retour à l\'administration de ');
\define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Aperçu');

//\define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//aide multi-page
\define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Avertissement');
\define('CO_' . $moduleDirNameUpper . '_LICENSE', 'Licence');
\define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Support');

//Données d'exemple
\define('CO_' . $moduleDirNameUpper . '_' . 'LOAD_SAMPLEDATA', 'Importer des données d\'exemple (supprimera TOUTES les données actuelles)');
\define('CO_' . $moduleDirNameUpper . '_' . 'LOAD_SAMPLEDATA_CONFIRM', 'Voulez-vous vraiment importer des données d\'exemple ? (Cela supprimera TOUTES les données actuelles)');
\define('CO_' . $moduleDirNameUpper . '_' . 'LOAD_SAMPLEDATA_SUCCESS', 'Données d\'exemple importées avec succès');
\define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA', 'Exporter les tables vers YAML');
\define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA_SUCCESS', 'Exportation des tables vers YAML réussie');
\define('CO_' . $moduleDirNameUpper . '_' . 'CLEAR_SAMPLEDATA', 'Effacer les données d\'exemple');
\define('CO_' . $moduleDirNameUpper . '_' . 'CLEAR_SAMPLEDATA_OK', 'Les données d\'exemple ont été effacées');
\define('CO_' . $moduleDirNameUpper . '_' . 'CLEAR_SAMPLEDATA_CONFIRM', 'Voulez-vous vraiment effacer les données d\'exemple ? (Cela supprimera TOUTES les données actuelles)');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA', 'Exporter le schéma de la base de données vers YAML');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_SUCCESS', 'Exportation du schéma de la base de données vers YAML réussie');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_ERROR', 'ERREUR : L\'exportation du schéma de la base de données vers YAML a échoué');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON', 'Afficher le bouton d\'exemple ?');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC', 'Si oui, le bouton "Ajouter des données d\'exemple" sera visible par l\'administrateur. Par défaut, c\'est Oui pour la première installation.');
\define('CO_' . $moduleDirNameUpper . '_' . 'HIDE_SAMPLEDATA_BUTTONS', 'Masquer les boutons d\'importation)');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLEDATA_BUTTONS', 'Afficher les boutons d\'importation)');

\define('CO_' . $moduleDirNameUpper . '_' . 'CONFIRM', 'Confirmer');

//Choix de lettres
\define('CO_' . $moduleDirNameUpper . '_' . 'BROWSETOTOPIC', "<span style='font-weight: bold;'>Parcourir les éléments par ordre alphabétique</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'OTHER', 'Autre');
\define('CO_' . $moduleDirNameUpper . '_' . 'ALL', 'Tous');

// définitions des blocs
\define('CO_' . $moduleDirNameUpper . '_' . 'ACCESSRIGHTS', 'Droits d\'accès');
\define('CO_' . $moduleDirNameUpper . '_' . 'ACTION', 'Action');
\define('CO_' . $moduleDirNameUpper . '_' . 'ACTIVERIGHTS', 'Droits actifs');
\define('CO_' . $moduleDirNameUpper . '_' . 'BADMIN', 'Administration des blocs');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLKDESC', 'Description');
\define('CO_' . $moduleDirNameUpper . '_' . 'CBCENTER', 'Centre milieu');
\define('CO_' . $moduleDirNameUpper . '_' . 'CBLEFT', 'Centre gauche');
\define('CO_' . $moduleDirNameUpper . '_' . 'CBRIGHT', 'Centre droit');
\define('CO_' . $moduleDirNameUpper . '_' . 'SBLEFT', 'Gauche');
\define('CO_' . $moduleDirNameUpper . '_' . 'SBRIGHT', 'Droit');
\define('CO_' . $moduleDirNameUpper . '_' . 'SIDE', 'Alignement');
\define('CO_' . $moduleDirNameUpper . '_' . 'TITLE', 'Titre');
\define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLE', 'Visible');
\define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLEIN', 'Visible dans');
\define('CO_' . $moduleDirNameUpper . '_' . 'WEIGHT', 'Poids');

\define('CO_' . $moduleDirNameUpper . '_' . 'PERMISSIONS', 'Permissions');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS', 'Administration des blocs');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_DESC', 'Administration des blocs/groupes');

\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_MANAGMENT', 'Gérer');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADDBLOCK', 'Ajouter un nouveau bloc');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_EDITBLOCK', 'Modifier un bloc');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_CLONEBLOCK', 'Cloner un bloc');

//myblocksadmin
\define('CO_' . $moduleDirNameUpper . '_' . 'AGDS', 'Groupes d\'administration');
\define('CO_' . $moduleDirNameUpper . '_' . 'BCACHETIME', 'Durée du cache');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADMIN', 'Administration des blocs');
\define('CO_' . $moduleDirNameUpper . '_' . 'UPDATE_SUCCESS', 'Mise à jour réussie');

//Administration des modèles
\define('CO_' . $moduleDirNameUpper . '_' . 'TPLSETS', 'Gestion des modèles');
\define('CO_' . $moduleDirNameUpper . '_' . 'GENERATE', 'Générer');
\define('CO_' . $moduleDirNameUpper . '_' . 'FILENAME', 'Nom du fichier');

//Menu
\define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE', 'Migrer');
\define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_YES', 'Le dossier "%s" existe');
\define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_NO', 'Le dossier "%s" n\'existe pas. Créez le dossier spécifié avec CHMOD 777.');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS', 'Afficher le bouton des outils de développement ?');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC', 'Si oui, l\'onglet "Migrer" et d\'autres outils de développement seront visibles par l\'administrateur.');
\define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_FEEDBACK', 'Retour');
\define('CO_' . $moduleDirNameUpper . '_' . 'MIGRATE_OK', 'Base de données migrée vers le schéma actuel.');
\define('CO_' . $moduleDirNameUpper . '_' . 'MIGRATE_WARNING', 'Attention ! Ceci est destiné uniquement aux développeurs. Confirmez l\'écriture du fichier de schéma à partir de la base de données actuelle.');
\define('CO_' . $moduleDirNameUpper . '_' . 'MIGRATE_SCHEMA_OK', 'Fichier de schéma actuel écrit');

//Vérification de la dernière version
\define('CO_' . $moduleDirNameUpper . '_' . 'NEW_VERSION', 'Nouvelle version : ');

//DirectoryChecker
\define('CO_' . $moduleDirNameUpper . '_' . 'AVAILABLE', "<span style='color: green;'>Disponible</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'NOTAVAILABLE', "<span style='color: red;'>Non disponible</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'NOTWRITABLE', "<span style='color: red;'>Devrait avoir la permission ( %d ), mais a ( %d )</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'CREATETHEDIR', 'Créez-le');
\define('CO_' . $moduleDirNameUpper . '_' . 'SETMPERM', 'Définir la permission');
\define('CO_' . $moduleDirNameUpper . '_' . 'DIRCREATED', 'Le répertoire a été créé');
\define('CO_' . $moduleDirNameUpper . '_' . 'DIRNOTCREATED', 'Le répertoire ne peut pas être créé');
\define('CO_' . $moduleDirNameUpper . '_' . 'PERMSET', 'La permission a été définie');
\define('CO_' . $moduleDirNameUpper . '_' . 'PERMNOTSET', 'La permission ne peut pas être définie');

//FileChecker
\define('CO_' . $moduleDirNameUpper . '_' . 'FILECOPIED', 'Le fichier a été copié');
\define('CO_' . $moduleDirNameUpper . '_' . 'FILENOTCOPIED', 'Le fichier ne peut pas être copié');

\define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH', 'Nombre de caractères pour tronquer le champ texte long');
\define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH_DESC', 'Définir le nombre maximum de caractères pour tronquer les champs texte longs');

//configuration d'image
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH', 'Largeur d\'affichage de l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH_DSC', 'Largeur d\'affichage pour l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT', 'Hauteur d\'affichage de l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT_DSC', 'Hauteur d\'affichage pour l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- Configuration d\'image EXTERNE ---</span> ');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG_DSC', '');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH', 'Chemin de téléchargement des images');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH_DSC', 'Chemin pour télécharger les images');

\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_FILE_SIZE', 'Taille du fichier image (en octets)');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_FILE_SIZE_DSC','La taille maximale du fichier image (en octets)');


//Statistiques du module
\define('CO_' . $moduleDirNameUpper . '_' . 'STATS_SUMMARY', 'Statistiques du module');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_CATEGORIES', 'Catégories :');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_ITEMS', 'Éléments');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_OFFLINE', 'Hors ligne');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_PUBLISHED', 'Publié');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_REJECTED', 'Rejeté');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_SUBMITTED', 'Soumis');

\define('CO_' . $moduleDirNameUpper . '_' . 'ERROR403', 'Vous n\'êtes pas autorisé à voir cette page !');
