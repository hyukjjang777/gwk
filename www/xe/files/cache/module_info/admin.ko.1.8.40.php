<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispAdminIndex';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = '';
$info->menu = new stdClass;
$info->menu->adminConfigurationGeneral = new stdClass;
$info->menu->adminConfigurationGeneral->title='일반';
$info->menu->adminConfigurationGeneral->type='all';
$info->menu->adminMenuSetup = new stdClass;
$info->menu->adminMenuSetup->title='관리자 설정';
$info->menu->adminMenuSetup->type='all';
$info->menu->adminConfigurationFtp = new stdClass;
$info->menu->adminConfigurationFtp->title='FTP 설정';
$info->menu->adminConfigurationFtp->type='all';
$info->action = new stdClass;
$info->action->dispAdminIndex = new stdClass;
$info->action->dispAdminIndex->type='view';
$info->action->dispAdminIndex->grant='guest';
$info->action->dispAdminIndex->standalone='true';
$info->action->dispAdminIndex->ruleset='';
$info->action->dispAdminIndex->method='';
$info->action->dispAdminIndex->check_csrf='true';
$info->menu->adminConfigurationGeneral->index='dispAdminConfigGeneral';
$info->menu->adminConfigurationGeneral->acts[0]='dispAdminConfigGeneral';
$info->action->dispAdminConfigGeneral = new stdClass;
$info->action->dispAdminConfigGeneral->type='view';
$info->action->dispAdminConfigGeneral->grant='guest';
$info->action->dispAdminConfigGeneral->standalone='true';
$info->action->dispAdminConfigGeneral->ruleset='';
$info->action->dispAdminConfigGeneral->method='';
$info->action->dispAdminConfigGeneral->check_csrf='true';
$info->menu->adminConfigurationFtp->index='dispAdminConfigFtp';
$info->menu->adminConfigurationFtp->acts[0]='dispAdminConfigFtp';
$info->action->dispAdminConfigFtp = new stdClass;
$info->action->dispAdminConfigFtp->type='view';
$info->action->dispAdminConfigFtp->grant='guest';
$info->action->dispAdminConfigFtp->standalone='true';
$info->action->dispAdminConfigFtp->ruleset='';
$info->action->dispAdminConfigFtp->method='';
$info->action->dispAdminConfigFtp->check_csrf='true';
$info->menu->adminMenuSetup->index='dispAdminSetup';
$info->menu->adminMenuSetup->acts[0]='dispAdminSetup';
$info->action->dispAdminSetup = new stdClass;
$info->action->dispAdminSetup->type='view';
$info->action->dispAdminSetup->grant='guest';
$info->action->dispAdminSetup->standalone='true';
$info->action->dispAdminSetup->ruleset='';
$info->action->dispAdminSetup->method='';
$info->action->dispAdminSetup->check_csrf='true';
$info->action->dispAdminViewServerEnv = new stdClass;
$info->action->dispAdminViewServerEnv->type='view';
$info->action->dispAdminViewServerEnv->grant='guest';
$info->action->dispAdminViewServerEnv->standalone='true';
$info->action->dispAdminViewServerEnv->ruleset='';
$info->action->dispAdminViewServerEnv->method='';
$info->action->dispAdminViewServerEnv->check_csrf='true';
$info->action->dispAdminCheckServerEnv = new stdClass;
$info->action->dispAdminCheckServerEnv->type='view';
$info->action->dispAdminCheckServerEnv->grant='guest';
$info->action->dispAdminCheckServerEnv->standalone='true';
$info->action->dispAdminCheckServerEnv->ruleset='';
$info->action->dispAdminCheckServerEnv->method='';
$info->action->dispAdminCheckServerEnv->check_csrf='true';
$info->action->procAdminRemoveIcons = new stdClass;
$info->action->procAdminRemoveIcons->type='controller';
$info->action->procAdminRemoveIcons->grant='guest';
$info->action->procAdminRemoveIcons->standalone='true';
$info->action->procAdminRemoveIcons->ruleset='';
$info->action->procAdminRemoveIcons->method='';
$info->action->procAdminRemoveIcons->check_csrf='true';
$info->action->procAdminRecompileCacheFile = new stdClass;
$info->action->procAdminRecompileCacheFile->type='controller';
$info->action->procAdminRecompileCacheFile->grant='guest';
$info->action->procAdminRecompileCacheFile->standalone='true';
$info->action->procAdminRecompileCacheFile->ruleset='';
$info->action->procAdminRecompileCacheFile->method='';
$info->action->procAdminRecompileCacheFile->check_csrf='true';
$info->action->procAdminLogout = new stdClass;
$info->action->procAdminLogout->type='controller';
$info->action->procAdminLogout->grant='guest';
$info->action->procAdminLogout->standalone='true';
$info->action->procAdminLogout->ruleset='';
$info->action->procAdminLogout->method='GET|POST';
$info->action->procAdminLogout->check_csrf='true';
$info->action->procAdminInsertDefaultDesignInfo = new stdClass;
$info->action->procAdminInsertDefaultDesignInfo->type='controller';
$info->action->procAdminInsertDefaultDesignInfo->grant='guest';
$info->action->procAdminInsertDefaultDesignInfo->standalone='true';
$info->action->procAdminInsertDefaultDesignInfo->ruleset='';
$info->action->procAdminInsertDefaultDesignInfo->method='';
$info->action->procAdminInsertDefaultDesignInfo->check_csrf='true';
$info->action->procAdminToggleFavorite = new stdClass;
$info->action->procAdminToggleFavorite->type='controller';
$info->action->procAdminToggleFavorite->grant='guest';
$info->action->procAdminToggleFavorite->standalone='true';
$info->action->procAdminToggleFavorite->ruleset='toggleFavorite';
$info->action->procAdminToggleFavorite->method='';
$info->action->procAdminToggleFavorite->check_csrf='true';
$info->action->procAdminEnviromentGatheringAgreement = new stdClass;
$info->action->procAdminEnviromentGatheringAgreement->type='controller';
$info->action->procAdminEnviromentGatheringAgreement->grant='guest';
$info->action->procAdminEnviromentGatheringAgreement->standalone='true';
$info->action->procAdminEnviromentGatheringAgreement->ruleset='';
$info->action->procAdminEnviromentGatheringAgreement->method='';
$info->action->procAdminEnviromentGatheringAgreement->check_csrf='true';
$info->action->procAdminUpdateConfig = new stdClass;
$info->action->procAdminUpdateConfig->type='controller';
$info->action->procAdminUpdateConfig->grant='guest';
$info->action->procAdminUpdateConfig->standalone='true';
$info->action->procAdminUpdateConfig->ruleset='';
$info->action->procAdminUpdateConfig->method='';
$info->action->procAdminUpdateConfig->check_csrf='true';
$info->action->procAdminDeleteLogo = new stdClass;
$info->action->procAdminDeleteLogo->type='controller';
$info->action->procAdminDeleteLogo->grant='guest';
$info->action->procAdminDeleteLogo->standalone='true';
$info->action->procAdminDeleteLogo->ruleset='';
$info->action->procAdminDeleteLogo->method='';
$info->action->procAdminDeleteLogo->check_csrf='true';
$info->action->procAdminMenuReset = new stdClass;
$info->action->procAdminMenuReset->type='controller';
$info->action->procAdminMenuReset->grant='guest';
$info->action->procAdminMenuReset->standalone='true';
$info->action->procAdminMenuReset->ruleset='';
$info->action->procAdminMenuReset->method='';
$info->action->procAdminMenuReset->check_csrf='true';
$info->action->procAdminUpdateSitelock = new stdClass;
$info->action->procAdminUpdateSitelock->type='controller';
$info->action->procAdminUpdateSitelock->grant='guest';
$info->action->procAdminUpdateSitelock->standalone='true';
$info->action->procAdminUpdateSitelock->ruleset='';
$info->action->procAdminUpdateSitelock->method='';
$info->action->procAdminUpdateSitelock->check_csrf='true';
$info->action->procAdminUpdateEmbedWhitelist = new stdClass;
$info->action->procAdminUpdateEmbedWhitelist->type='controller';
$info->action->procAdminUpdateEmbedWhitelist->grant='guest';
$info->action->procAdminUpdateEmbedWhitelist->standalone='true';
$info->action->procAdminUpdateEmbedWhitelist->ruleset='';
$info->action->procAdminUpdateEmbedWhitelist->method='';
$info->action->procAdminUpdateEmbedWhitelist->check_csrf='true';
$info->action->getAdminFTPList = new stdClass;
$info->action->getAdminFTPList->type='model';
$info->action->getAdminFTPList->grant='guest';
$info->action->getAdminFTPList->standalone='true';
$info->action->getAdminFTPList->ruleset='';
$info->action->getAdminFTPList->method='';
$info->action->getAdminFTPList->check_csrf='true';
$info->action->getAdminFTPPath = new stdClass;
$info->action->getAdminFTPPath->type='model';
$info->action->getAdminFTPPath->grant='guest';
$info->action->getAdminFTPPath->standalone='true';
$info->action->getAdminFTPPath->ruleset='';
$info->action->getAdminFTPPath->method='';
$info->action->getAdminFTPPath->check_csrf='true';
$info->action->getSiteAllList = new stdClass;
$info->action->getSiteAllList->type='model';
$info->action->getSiteAllList->grant='guest';
$info->action->getSiteAllList->standalone='true';
$info->action->getSiteAllList->ruleset='';
$info->action->getSiteAllList->method='';
$info->action->getSiteAllList->check_csrf='true';
return $info;