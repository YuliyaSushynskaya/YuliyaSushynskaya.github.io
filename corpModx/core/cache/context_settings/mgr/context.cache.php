<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnChunkFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnDocFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnDocFormRender' => 
    array (
      7 => '7',
    ),
    'OnDocFormSave' => 
    array (
      7 => '7',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnFileEditFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnLoadWebDocument' => 
    array (
      7 => '7',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      4 => '4',
      5 => '5',
      3 => '3',
    ),
    'OnMODXInit' => 
    array (
      2 => '2',
      7 => '7',
    ),
    'OnPluginFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnResourceDuplicate' => 
    array (
      7 => '7',
    ),
    'OnRichTextBrowserInit' => 
    array (
      4 => '4',
    ),
    'OnRichTextEditorInit' => 
    array (
      4 => '4',
    ),
    'OnRichTextEditorRegister' => 
    array (
      5 => '5',
      4 => '4',
    ),
    'OnSiteRefresh' => 
    array (
      2 => '2',
    ),
    'OnSnipFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnTempFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnWebPagePrerender' => 
    array (
      2 => '2',
    ),
  ),
  'pluginCache' => 
  array (
    2 => 
    array (
      'id' => '2',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '2',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;

    case \'OnWebPagePrerender\':
        $parser = $modx->getParser();
        if ($parser instanceof pdoParser) {
            foreach ($parser->pdoTools->ignores as $key => $val) {
                $modx->resource->_output = str_replace($key, $val, $modx->resource->_output);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'FormIt',
      'description' => '',
      'editor_type' => '0',
      'category' => '3',
      'cache_type' => '0',
      'plugincode' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CKEditor',
      'description' => 'CKEditor WYSIWYG editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ckeditor/elements/plugins/ckeditor.plugin.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'seoPro',
      'description' => 'SEO optimizing plugin for MODx Revolution.',
      'editor_type' => '0',
      'category' => '21',
      'cache_type' => '0',
      'plugincode' => '/**
 * The base seoPro snippet.
 *
 * @package seopro
 */
$seoPro = $modx->getService(\'seopro\', \'seoPro\', $modx->getOption(\'seopro.core_path\', null, $modx->getOption(\'core_path\') . \'components/seopro/\') . \'model/seopro/\', $scriptProperties);
if (!($seoPro instanceof seoPro)) {
    return \'\';
}

$disabledTemplates = explode(\',\', $modx->getOption(\'seopro.disabledtemplates\', null, \'0\'));

switch ($modx->event->name) {
    case \'OnMODXInit\':
        $version = $modx->getVersionData();
        $version = (int)($version[\'version\'] . $version[\'major_version\']);
        if ($version < 27) {
            $modx->loadClass(\'modResource\');
            $modx->map[\'modResource\'][\'fieldMeta\'][\'description\'] = array(
                \'dbtype\' => \'text\',
                \'phptype\' => \'string\',
                \'index\' => \'fulltext\',
                \'indexgrp\' => \'content_ft_idx\',
            );
        }
        break;

    case \'OnDocFormRender\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        
        $currClassKey = $resource->get(\'class_key\');
        $strFields = $modx->getOption(\'seopro.fields\', null, \'pagetitle:70,longtitle:70,description:320,alias:2023,menutitle:2023\');
        $arrFields = array();
        if (is_array(explode(\',\', $strFields))) {
            foreach (explode(\',\', $strFields) as $field) {
                list($fieldName, $fieldCount) = explode(\':\', $field);
                $arrFields[$fieldName] = $fieldCount;
            }
        } else {
            return \'\';
        }

        $keywords = \'\';
        $modx->controller->addLexiconTopic(\'seopro:default\');
        $ctxKey = !empty($resource) ? $resource->get(\'context_key\') : $modx->getOption(\'default_context\');
        $ctx = $modx->getContext($ctxKey);
        if ($ctx) {
            $url = $ctx->getOption(\'site_url\', \'\', $modx->getOption(\'site_url\'));
        } else {
            $url = $modx->getOption(\'site_url\');
        }
        if ($mode == \'upd\') {
            if ($ctx) {
                if ($resource->get(\'id\') != $ctx->getOption(\'site_start\', \'\', $modx->getOption(\'site_start\'))) {
                    $url .= $resource->get(\'uri\');
                }
            } else {
                $url = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', \'full\');
            }
            $url = str_replace(
                $resource->get(\'alias\'),
                \'<span id=\\"seopro-replace-alias\\">\' . $resource->get(\'alias\') . \'</span>\',
                $url
            );
            $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
            if ($seoKeywords) {
                $keywords = $seoKeywords->get(\'keywords\');
            }
        }

        if ($_REQUEST[\'id\'] == $modx->getOption(\'site_start\')) {
            unset($arrFields[\'alias\']);
            unset($arrFields[\'menutitle\']);
        }


        $config = $seoPro->config;
        unset($config[\'resource\']);
        $modx->regClientStartupHTMLBlock(\'<script type="text/javascript">
        Ext.onReady(function() {
            seoPro.config = \' . $modx->toJSON($config) . \';
            seoPro.config.record = "\' . $keywords . \'";
            seoPro.config.values = {};
            seoPro.config.fields = "\' . implode(",", array_keys($arrFields)) . \'";
            seoPro.config.chars = \' . $modx->toJSON($arrFields) . \'
            seoPro.config.url = "\' . $url . \'";
        });</script>\');

        /* include CSS and JS*/
        $version = $modx->getVersionData();
        if($version[\'version\'] == 2 && $version[\'major_version\'] == 2){
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr.css\');
        }else{
            $modx->regClientCSS($seoPro->config[\'assetsUrl\'] . \'css/mgr23.css\');
        }
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/seopro.js??v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));
        $modx->regClientStartupScript($seoPro->config[\'assetsUrl\'] . \'js/mgr/resource.js?v=\' . $modx->getOption(\'seopro.version\', null, \'v1.0.0\'));

        break;

    case \'OnDocFormSave\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords && isset($resource)) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        if($seoKeywords){
            if (isset($_POST[\'keywords\'])){
                $seoKeywords->set(\'keywords\', trim($_POST[\'keywords\'], \',\'));
            } else {
                $seoKeywords->set(\'keywords\', \'\');
            }
            $seoKeywords->save();
        }
        break;

    case \'onResourceDuplicate\':
        $template = (string)$resource->get(\'template\');
        $override = false;
        if (isset($_REQUEST[\'template\'])) {
            $template = (string)$_REQUEST[\'template\'];
            $override = true;
        }
        if (($override && $template === \'0\') || (!empty($template) && in_array($template, $disabledTemplates))) {
            break;
        }

        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        if (!$seoKeywords) {
            $seoKeywords = $modx->newObject(\'seoKeywords\', array(\'resource\' => $resource->get(\'id\')));
        }
        $newSeoKeywords = $modx->newObject(\'seoKeywords\');
        $newSeoKeywords->fromArray($seoKeywords->toArray());
        $newSeoKeywords->set(\'resource\', $newResource->get(\'id\'));
        $newSeoKeywords->save();
        break;

    case \'OnLoadWebDocument\':
        if ($modx->context->get(\'key\') == "mgr") {
            break;
        }
        $template = ($modx->resource->get(\'template\')) ? (string)$modx->resource->get(\'template\') : \'\';
        if (in_array($template, $disabledTemplates)) {
            break;
        }
        $seoKeywords = $modx->getObject(\'seoKeywords\', array(\'resource\' => $modx->resource->get(\'id\')));
        if ($seoKeywords) {
            $keyWords = $seoKeywords->get(\'keywords\');
            $modx->setPlaceholder(\'seoPro.keywords\', $keyWords);
        }
        // Render the meta title, based on system settings
        $titleFormat = $modx->getOption(\'seopro.title_format\');
        if (empty($titleFormat)) {
            $siteDelimiter = $modx->getOption(\'seopro.delimiter\', null, \'/\');
            $siteUseSitename = (boolean)$modx->getOption(\'seopro.usesitename\', null, true);
            $siteID = $modx->resource->get(\'id\');
            $siteName = $modx->getOption(\'site_name\');
            $longtitle = $modx->resource->get(\'longtitle\');
            $pagetitle = $modx->resource->get(\'pagetitle\');
            $seoProTitle = array();
            if ($siteID == $modx->getOption(\'site_start\')) {
                $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $siteName;
            } else {
                $seoProTitle[\'pagetitle\'] = !empty($longtitle) ? $longtitle : $pagetitle;
                if ($siteUseSitename) {
                    $seoProTitle[\'delimiter\'] = $siteDelimiter;
                    $seoProTitle[\'sitename\'] = $siteName;
                }
            }
            $title = implode(\' \', $seoProTitle);
        } else {
            $title = $modx->getOption(\'seopro.title_format\');
        }
        $modx->setPlaceholder(\'seoPro.title\', $title);
        break;
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'events' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
      ),
    ),
  ),
);