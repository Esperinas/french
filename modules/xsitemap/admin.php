<?php
/*
 * ****************************************************************************
 * xsitemap - MODULE POUR XOOPS CMS
 * Copyright (c) Urbanspaceman (http://www.takeaweb.it)
 *
 * Vous ne pouvez pas modifier ou altérer aucune partie de ce commentaire ou des crédits
 * des développeurs de ce code source ou de tout code source de support
 * qui est considéré comme du matériel protégé (c) par le commentaire original ou les auteurs des crédits.
 * Ce programme est distribué dans l'espoir qu'il sera utile,
 * mais SANS AUCUNE GARANTIE ; sans même la garantie implicite de
 * QUALITÉ MARCHANDE ou D'ADÉQUATION À UN USAGE PARTICULIER.
 */

/**
 * Module: xsitemap
 *
 * @package    module\Xsitemap\language
 * @author     Urbanspaceman (http://www.takeaweb.it)
 * @copyright  Urbanspaceman (http://www.takeaweb.it)
 * @copyright  XOOPS Project (https://xoops.org)
 * @license    http://www.fsf.org/copyleft/gpl.html GNU public license
 * @since      1.00
 */
//Menu
define('_AM_XSITEMAP_MANAGER_INDEX', 'Accueil');
define('_AM_XSITEMAP_THEREARE_PLUGIN_ONLINE', "Il y a <span class='green bold'>%s</span> Plugins actifs");
define('_AM_XSITEMAP_THEREARE_PLUGIN_OFFLINE', "Il y a <span class='red bold'>%s</span> Plugins inactifs");
define('_AM_XSITEMAP_THEREARE_PLUGIN', "Il y a <span class='bold'>%s</span> Plugins au total dans la base de données");
define('_AM_XSITEMAP_PLUGIN_ONLINE_NAMES', "<span class='bold'>Plugins actifs :</span> %s");
define('_AM_XSITEMAP_PLUGIN_OFFLINE_NAMES', "<span class='bold'>Plugins inactifs :</span> %s");
define('_AM_XSITEMAP_MANAGER_ABOUT', 'À propos');
define('_AM_XSITEMAP_MANAGER_PREFERENCES', 'Préférences');
define('_AM_XSITEMAP_MANAGER_UPDATE', 'Mise à jour');
define('_AM_XSITEMAP_MANAGER_PERMISSIONS', 'Permissions');
//Index
define('_AM_XSITEMAP_MANAGER_PLUGIN', 'Plugins');
//Général
define('_AM_XSITEMAP_BYTES_WRITTEN', '%s octets écrits dans le fichier.');
define('_AM_XSITEMAP_FORMOK', 'Enregistré avec succès');
define('_AM_XSITEMAP_FORMDELOK', 'Supprimé avec succès');
define('_AM_XSITEMAP_FORMSUREDEL', "Êtes-vous sûr de vouloir supprimer : <span style='color: red; font-weight: bold;'> %s </span>");
define('_AM_XSITEMAP_FORMSURERENEW', "Êtes-vous sûr de vouloir mettre à jour : <span style='color: red; font-weight: bold;'> %s </span>");
define('_AM_XSITEMAP_FORMUPLOAD', 'Télécharger');
define('_AM_XSITEMAP_FORMIMAGE_PATH', 'Fichiers dans %s');
define('_AM_XSITEMAP_FORMACTION', 'Action');
define('_AM_XSITEMAP_OFF', 'Inactif');
define('_AM_XSITEMAP_ON', 'Actif');
define('_AM_XSITEMAP_CLICK_TO', 'Cliquez pour %s le plugin');
define('_AM_XSITEMAP_EDIT', 'Modifier');
define('_AM_XSITEMAP_DELETE', 'Supprimer');
define('_AM_XSITEMAP_CREATE_PLUGIN', 'Créer un Plugin');
define('_AM_XSITEMAP_CREATE', 'Créer');
define('_AM_XSITEMAP_PLUGIN_ADD', 'Ajouter un plugin');
define('_AM_XSITEMAP_PLUGIN_EDIT', 'Modification d\'un plugin');
define('_AM_XSITEMAP_PLUGIN_ID', 'ID');
define('_AM_XSITEMAP_PLUGIN_NAME', 'Nom du module');
define('_AM_XSITEMAP_PLUGIN_MOD_VERSION', 'Version (max. 5 caractères)');
define('_AM_XSITEMAP_PLUGIN_MOD_TABLE', "Table des catégories du module (ex: pour le module News, la table est 'topics') ");
define('_AM_XSITEMAP_PLUGIN_CAT_ID', "Champ pour la catégorie principale (ex: pour le module News, le champ est 'topic_id')");
define('_AM_XSITEMAP_PLUGIN_CAT_PID', "Champ pour la catégorie parent (ex: pour le module News, le champ est 'topic_pid')");
define('_AM_XSITEMAP_PLUGIN_CAT_NAME', "Champ pour le nom de la catégorie (ex: pour le module News, le champ est 'topic_title')");
define('_AM_XSITEMAP_PLUGIN_WEIGHT', "Tri <br> (ex: pour trier par titre les catégories du module news, entrez 'topic_title')");
define('_AM_XSITEMAP_PLUGIN_WHERE', "Conditions WHERE supplémentaires <br> (sans WHERE, ex:  '`topic_online`=1')");
define('_AM_XSITEMAP_PLUGIN_CALL', "Appel (l'appel est le chemin invoqué par le lien dans le plan du site. Pour le module news, ex: 'index.php?Storytopic=')");
define('_AM_XSITEMAP_PLUGIN_SUBMITTER', 'Auteur');
define('_AM_XSITEMAP_PLUGIN_DATE_CREATED', 'Créé');
define('_AM_XSITEMAP_PLUGIN_ONLINE', 'En ligne');
define('_AM_XSITEMAP_PLUGIN_VERSION_SHORT', 'Version');
define('_AM_XSITEMAP_PLUGIN_MOD_TABLE_SHORT', 'Table Catégories');
define('_AM_XSITEMAP_PLUGIN_CAT_ID_SHORT', 'ID catégorie principale');
define('_AM_XSITEMAP_PLUGIN_CAT_PID_SHORT', 'ID sous-catégories');
define('_AM_XSITEMAP_PLUGIN_CAT_NAME_SHORT', 'Nom catégorie');
define('_AM_XSITEMAP_PLUGIN_WEIGHT_SHORT', 'Tri');
define('_AM_XSITEMAP_PLUGIN_WHERE_SHORT', 'Conditions WHERE');
define('_AM_XSITEMAP_PLUGIN_CALL_SHORT', 'Appel');
//Permissions
define('_AM_XSITEMAP_PERMISSIONS_ACCESS', 'Autorisé à voir');
define('_AM_XSITEMAP_PERMISSIONS_SUBMIT', 'Permission d\'envoyer');
//About.php
define('_AM_XSITEMAP_ABOUT_RELEASEDATE', 'Date de sortie');
define('_AM_XSITEMAP_ABOUT_AUTHOR', 'Auteur');
define('_AM_XSITEMAP_ABOUT_CREDITS', 'Crédits');
define('_AM_XSITEMAP_ABOUT_CREDITS_TEXT', "Le graphisme de Xsitemap est basé sur la feuille de style et les images créées par <a href='http://www.astuteo.com'> ASTUTEO </a>");
define('_AM_XSITEMAP_ABOUT_TNX', 'Remerciements');
define(
    '_AM_XSITEMAP_ABOUT_TNX_TEXT',
    'Je tiens à remercier <b>chanoir</b> et <b>GIJoe</b> pour avoir développé les modules SITEMAP originaux qui ont inspiré ce nouveau <b>XSITEMAP</b>. Je remercie également <b>trabis</b> et <b>Alessandro</b> pour l\'aide apportée durant les phases de développement, je remercie aussi l\'<b>Équipe de Développement de Module</b> pour avoir créé le module <b>TDMCreate</b> qui a été d\'une importance fondamentale pour la réalisation de <b>XSITEMAP</b>'
);
define('_AM_XSITEMAP_ABOUT_README', 'Informations');
define('_AM_XSITEMAP_ABOUT_MANUAL', 'Aide');
define('_AM_XSITEMAP_ABOUT_LICENSE', 'Licence');
define('_AM_XSITEMAP_ABOUT_MODULE_STATUS', 'Statut');
define('_AM_XSITEMAP_ABOUT_MODULE_PLUGIN', 'Formulaires supportés');
define('_AM_XSITEMAP_ABOUT_MODULE_DESC', 'Description');
define('_AM_XSITEMAP_ABOUT_MODULE_DESC_TEXT', 'Module pour afficher le Plan du site');
define('_AM_XSITEMAP_ABOUT_WEBSITE', 'Site web');
define('_AM_XSITEMAP_ABOUT_AUTHOR_NAME', 'Auteur');
define('_AM_XSITEMAP_ABOUT_AUTHOR_WORD', 'Mot de l\'auteur');
define('_AM_XSITEMAP_ABOUT_CHANGELOG', 'Journal des modifications');
define('_AM_XSITEMAP_ABOUT_MODULE_INFO', 'À propos du module');
define('_AM_XSITEMAP_ABOUT_AUTHOR_INFO', 'À propos de l\'auteur');
define('_AM_XSITEMAP_ABOUT_DISCLAIMER', 'Avertissement');
define('_AM_XSITEMAP_ABOUT_DISCLAIMER_TEXT', 'GPL - Aucune garantie');
define('_AM_XSITEMAP_ABOUT_BY', "Propulsé par <a href ='http://www.takeaweb.it'> TAKEAWEB </a>");
//add by urbanspaceman 22/08/2009
define('_AM_XSITEMAP_ABOUT_TRANSLATION', 'Traduction');
define('_AM_XSITEMAP_ABOUT_TRANSLATION_TEXT', '<ul><li>Italiano : Urbanspaceman</li><li>PortgueseBr : Artsgeral</li><li>English : dbman</li></ul>');
//add by urbanspaceman 26/08/2009
//xml.php
define('_AM_XSITEMAP_XML', 'XML');
define('_AM_XSITEMAP_MANAGER_XML', 'Gestion XML');
define('_AM_XSITEMAP_XML_LASTUPD', 'Dernière mise à jour');
define('_AM_XSITEMAP_XML_LOCATION', 'Emplacement du fichier');
define('_AM_XSITEMAP_XML_FILE_SIZE', 'Taille du fichier');
define('_AM_XSITEMAP_UPDATE_XML', 'Mettre à jour le fichier XML');
define('_AM_XSITEMAP_XML_UPDATE', 'Fichier XML mis à jour avec succès');
define('_AM_XSITEMAP_XML_ERROR_UPDATE', 'Erreur lors de la mise à jour du fichier XML');
define('_AM_XSITEMAP_XML_VIEW_XML', 'Voir le fichier XML');
// Messages d'erreur
define('_AM_XSITEMAP_ERROR_BAD_DEL_PATH', 'Impossible de supprimer le répertoire %s');
define('_AM_XSITEMAP_ERROR_BAD_PHP', 'Ce module nécessite PHP version %s+ (%s installé)');
define('_AM_XSITEMAP_ERROR_BAD_REMOVE', 'Impossible de supprimer %s');
define('_AM_XSITEMAP_ERROR_BAD_XOOPS', 'Ce module nécessite XOOPS %s+ (%s installé)');
define('_AM_XSITEMAP_ERROR_NO_PLUGIN', 'Impossible de charger le plugin');
//1.52
// About.php
define('_AM_XSITEMAP_ABOUT_UPDATEDATE', 'Mis à jour : ');
define('_AM_XSITEMAP_ABOUT_DESCRIPTION', 'Description : ');
define('_AM_XSITEMAP_ADMIN_ABOUT', 'À propos');
// Text for Admin footer
define('_AM_XSITEMAP_FOOTER', "<div class='center smallsmall italic pad5'>xsitemap est maintenu par la <a class='tooltip' rel='external' href='https://xoops.org/' title='Visitez la communauté XOOPS'>Communauté XOOPS</a></div>");
define('_AM_XSITEMAP_UPGRADEFAILED0', "Échec de la mise à jour - impossible de renommer le champ '%s'");
define('_AM_XSITEMAP_UPGRADEFAILED1', "Échec de la mise à jour - impossible d'ajouter de nouveaux champs");
define('_AM_XSITEMAP_UPGRADEFAILED2', "Échec de la mise à jour - impossible de renommer la table '%s'");
define('_AM_XSITEMAP_ERROR_COLUMN', 'Impossible de créer la colonne dans la base de données : %s');
define('_AM_XSITEMAP_ERROR_TAG_REMOVAL', 'Impossible de supprimer les tags du module Tag');
//plugin.php
define('_AM_XSITEMAP_PLUGIN_STATUS_A', 'Actif');
define('_AM_XSITEMAP_PLUGIN_STATUS_NA', 'Désactivé');
