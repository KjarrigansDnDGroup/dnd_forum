<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.3';

// Database
$Configuration['Database']['Name'] = 'dnd_forum';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'mighty_gm';
$Configuration['Database']['Password'] = 'mighty123';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['cleditor'] = false;
$Configuration['EnabledPlugins']['ButtonBar'] = true;
$Configuration['EnabledPlugins']['Emotify'] = false;
$Configuration['EnabledPlugins']['FileUpload'] = false;
$Configuration['EnabledPlugins']['editor'] = true;
$Configuration['EnabledPlugins']['AllViewed'] = true;
$Configuration['EnabledPlugins']['PrivateCommunity'] = true;

// Garden
$Configuration['Garden']['Title'] = 'D&D - Alte Männer';
$Configuration['Garden']['Cookie']['Salt'] = 'kacKLFpPxpuFSxlN';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Invitation';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '-1';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '-1';
$Configuration['Garden']['Email']['SupportName'] = 'Alte Männer';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = 1;
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['InstallationID'] = '1D89-AB3183E7-7118ACFA';
$Configuration['Garden']['InstallationSecret'] = 'e47fec755c65a3efb4dc37f81dd2d44f7e61ddc5';
$Configuration['Garden']['Theme'] = 'default';
$Configuration['Garden']['MobileInputFormatter'] = 'TextEx';
$Configuration['Garden']['AllowFileUploads'] = true;
$Configuration['Garden']['EditContentTimeout'] = '-1';
$Configuration['Garden']['HomepageTitle'] = 'D&D - Alte Männer';
$Configuration['Garden']['Description'] = 'Jeden zweiten Dienstag im Monat ziehen die Helden mutig in die Schlacht für Ruhm und Ehre!!!';
$Configuration['Garden']['PrivateCommunity'] = true;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['editor']['ForceWysiwyg'] = false;

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Discussions']['Layout'] = 'modern';
$Configuration['Vanilla']['Comments']['AutoRefresh'] = NULL;
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = false;
$Configuration['Vanilla']['Comment']['MaxLength'] = '80000';
$Configuration['Vanilla']['Comment']['MinLength'] = '';
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = false;
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = '1';
$Configuration['Vanilla']['Categories']['HideModule'] = false;
$Configuration['Vanilla']['Categories']['Layout'] = 'modern';

// Last edited by Gwyneth (95.90.214.183)2017-01-01 13:30:56