<?php define('__XE__', true); require_once('/home/hosting_users/gwkadmin/www/config/config.inc.php'); $oContext = Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="153" parent_srl="0" menu_name_key='전체' text="<?php if(true) { $_names = array("en"=>'전체',"ko"=>'전체',"jp"=>'전체',"zh-CN"=>'전체',"zh-TW"=>'전체',"fr"=>'전체',"de"=>'전체',"ru"=>'전체',"es"=>'전체',"tr"=>'전체',"vi"=>'전체',"mn"=>'전체',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_CgTK29":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_CgTK29'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="69" parent_srl="0" menu_name_key='교회' text="<?php if(true) { $_names = array("en"=>'전체',"ko"=>'전체',"jp"=>'전체',"zh-CN"=>'전체',"zh-TW"=>'전체',"fr"=>'전체',"de"=>'전체',"ru"=>'전체',"es"=>'전체',"tr"=>'전체',"vi"=>'전체',"mn"=>'전체',"en"=>'교회',"ko"=>'교회',"jp"=>'교회',"zh-CN"=>'교회',"zh-TW"=>'교회',"fr"=>'교회',"de"=>'교회',"ru"=>'교회',"es"=>'교회',"tr"=>'교회',"vi"=>'교회',"mn"=>'교회',); print $_names[$lang_type]; }?>" url="<?php print(true?"board":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="146" parent_srl="0" menu_name_key='사회' text="<?php if(true) { $_names = array("en"=>'전체',"ko"=>'전체',"jp"=>'전체',"zh-CN"=>'전체',"zh-TW"=>'전체',"fr"=>'전체',"de"=>'전체',"ru"=>'전체',"es"=>'전체',"tr"=>'전체',"vi"=>'전체',"mn"=>'전체',"en"=>'교회',"ko"=>'교회',"jp"=>'교회',"zh-CN"=>'교회',"zh-TW"=>'교회',"fr"=>'교회',"de"=>'교회',"ru"=>'교회',"es"=>'교회',"tr"=>'교회',"vi"=>'교회',"mn"=>'교회',"en"=>'사회',"ko"=>'사회',"jp"=>'사회',"zh-CN"=>'사회',"zh-TW"=>'사회',"fr"=>'사회',"de"=>'사회',"ru"=>'사회',"es"=>'사회',"tr"=>'사회',"vi"=>'사회',"mn"=>'사회',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_QBLP07":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_QBLP07'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="148" parent_srl="0" menu_name_key='문화' text="<?php if(true) { $_names = array("en"=>'전체',"ko"=>'전체',"jp"=>'전체',"zh-CN"=>'전체',"zh-TW"=>'전체',"fr"=>'전체',"de"=>'전체',"ru"=>'전체',"es"=>'전체',"tr"=>'전체',"vi"=>'전체',"mn"=>'전체',"en"=>'교회',"ko"=>'교회',"jp"=>'교회',"zh-CN"=>'교회',"zh-TW"=>'교회',"fr"=>'교회',"de"=>'교회',"ru"=>'교회',"es"=>'교회',"tr"=>'교회',"vi"=>'교회',"mn"=>'교회',"en"=>'사회',"ko"=>'사회',"jp"=>'사회',"zh-CN"=>'사회',"zh-TW"=>'사회',"fr"=>'사회',"de"=>'사회',"ru"=>'사회',"es"=>'사회',"tr"=>'사회',"vi"=>'사회',"mn"=>'사회',"en"=>'문화',"ko"=>'문화',"jp"=>'문화',"zh-CN"=>'문화',"zh-TW"=>'문화',"fr"=>'문화',"de"=>'문화',"ru"=>'문화',"es"=>'문화',"tr"=>'문화',"vi"=>'문화',"mn"=>'문화',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_IZQg30":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_IZQg30'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="150" parent_srl="0" menu_name_key='오피니언' text="<?php if(true) { $_names = array("en"=>'전체',"ko"=>'전체',"jp"=>'전체',"zh-CN"=>'전체',"zh-TW"=>'전체',"fr"=>'전체',"de"=>'전체',"ru"=>'전체',"es"=>'전체',"tr"=>'전체',"vi"=>'전체',"mn"=>'전체',"en"=>'교회',"ko"=>'교회',"jp"=>'교회',"zh-CN"=>'교회',"zh-TW"=>'교회',"fr"=>'교회',"de"=>'교회',"ru"=>'교회',"es"=>'교회',"tr"=>'교회',"vi"=>'교회',"mn"=>'교회',"en"=>'사회',"ko"=>'사회',"jp"=>'사회',"zh-CN"=>'사회',"zh-TW"=>'사회',"fr"=>'사회',"de"=>'사회',"ru"=>'사회',"es"=>'사회',"tr"=>'사회',"vi"=>'사회',"mn"=>'사회',"en"=>'문화',"ko"=>'문화',"jp"=>'문화',"zh-CN"=>'문화',"zh-TW"=>'문화',"fr"=>'문화',"de"=>'문화',"ru"=>'문화',"es"=>'문화',"tr"=>'문화',"vi"=>'문화',"mn"=>'문화',"en"=>'오피니언',"ko"=>'오피니언',"jp"=>'오피니언',"zh-CN"=>'오피니언',"zh-TW"=>'오피니언',"fr"=>'오피니언',"de"=>'오피니언',"ru"=>'오피니언',"es"=>'오피니언',"tr"=>'오피니언',"vi"=>'오피니언',"mn"=>'오피니언',); print $_names[$lang_type]; }?>" url="<?php print(true?"board_deyG62":"")?>" href="<?php print(true?getSiteUrl('', '','mid','board_deyG62'):"")?>" is_shortcut="N" desc="" open_window="N" expand="N" normal_btn="" hover_btn="" active_btn="" link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>