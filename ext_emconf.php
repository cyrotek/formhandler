<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "formhandler".
 *
 * Auto generated 05-03-2014 13:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Formhandler',
    'description' => 'The swiss army knife for all kinds of mailforms, completely new written using the MVC concept. Result: Flexibility, Flexibility, Flexibility  :-).',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '2.3.1',
    'state' => 'stable',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Dev-Team Typoheads',
    'author_email' => 'dev@typoheads.at',
    'author_company' => 'Typoheads GmbH',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-0.0.0',
            'typo3' => '7.6.0-7.6.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    '_md5_values_when_last_written' => 'a:216:{s:12:"ext_icon.gif";s:4:"0d47";s:17:"ext_localconf.php";s:4:"2fea";s:14:"ext_tables.php";s:4:"247d";s:14:"ext_tables.sql";s:4:"07fe";s:7:"tca.php";s:4:"dbf8";s:58:"Classes/AjaxHandler/Tx_Formhandler_AbstractAjaxHandler.php";s:4:"98c4";s:57:"Classes/AjaxHandler/Tx_Formhandler_AjaxHandler_JQuery.php";s:4:"0c4c";s:50:"Classes/Component/Tx_Formhandler_AbstractClass.php";s:4:"a580";s:54:"Classes/Component/\Typoheads\Formhandler\Component\AbstractComponent.php";s:4:"cfda";s:54:"Classes/Component/\Typoheads\Formhandler\Component\Manager.php";s:4:"f0d8";s:56:"Classes/Controller/Tx_Formhandler_AbstractController.php";s:4:"27c4";s:51:"Classes/Controller/\Typoheads\Formhandler\Controller\Configuration.php";s:4:"63ab";s:45:"Classes/Controller/Tx_Formhandler_Content.php";s:4:"1342";s:53:"Classes/Controller/Tx_Formhandler_Controller_Form.php";s:4:"34f8";s:57:"Classes/Controller/Tx_Formhandler_ControllerInterface.php";s:4:"2569";s:48:"Classes/Controller/Tx_Formhandler_Dispatcher.php";s:4:"7492";s:66:"Classes/Controller/Module/class.tx_formhandler_mod1_pagination.php";s:4:"bc78";s:35:"Classes/Controller/Module/clear.gif";s:4:"f58d";s:34:"Classes/Controller/Module/conf.php";s:4:"8605";s:35:"Classes/Controller/Module/index.php";s:4:"b0a0";s:40:"Classes/Controller/Module/moduleicon.gif";s:4:"0d47";s:63:"Classes/Controller/Module/Tx_Formhandler_Controller_Backend.php";s:4:"a288";s:72:"Classes/Controller/Module/Tx_Formhandler_Controller_BackendClearLogs.php";s:4:"7e73";s:52:"Classes/Debugger/Tx_Formhandler_AbstractDebugger.php";s:4:"7ad8";s:51:"Classes/Debugger/Tx_Formhandler_Debugger_DevLog.php";s:4:"e691";s:50:"Classes/Debugger/Tx_Formhandler_Debugger_Print.php";s:4:"e1f7";s:52:"Classes/Finisher/Tx_Formhandler_AbstractFinisher.php";s:4:"ec93";s:51:"Classes/Finisher/Tx_Formhandler_Finisher_AutoDB.php";s:4:"5e76";s:55:"Classes/Finisher/Tx_Formhandler_Finisher_ClearCache.php";s:4:"ffa7";s:47:"Classes/Finisher/Tx_Formhandler_Finisher_DB.php";s:4:"9cea";s:56:"Classes/Finisher/Tx_Formhandler_Finisher_DifferentDB.php";s:4:"2e8a";s:61:"Classes/Finisher/Tx_Formhandler_Finisher_GenerateAuthCode.php";s:4:"a210";s:49:"Classes/Finisher/Tx_Formhandler_Finisher_Mail.php";s:4:"18de";s:53:"Classes/Finisher/Tx_Formhandler_Finisher_Redirect.php";s:4:"603f";s:60:"Classes/Finisher/Tx_Formhandler_Finisher_RestoreLanguage.php";s:4:"6ce1";s:56:"Classes/Finisher/Tx_Formhandler_Finisher_SetLanguage.php";s:4:"0dae";s:52:"Classes/Finisher/Tx_Formhandler_Finisher_StoreGP.php";s:4:"79a4";s:63:"Classes/Finisher/Tx_Formhandler_Finisher_StoreUploadedFiles.php";s:4:"ca85";s:56:"Classes/Finisher/Tx_Formhandler_Finisher_SubmittedOK.php";s:4:"3277";s:50:"Classes/Generator/Tx_Formhandler_Generator_CSV.php";s:4:"c64d";s:52:"Classes/Generator/Tx_Formhandler_Generator_TCPDF.php";s:4:"44dd";s:57:"Classes/Generator/FE/Tx_Formhandler_AbstractGenerator.php";s:4:"c439";s:53:"Classes/Generator/FE/Tx_Formhandler_Generator_Csv.php";s:4:"c01c";s:62:"Classes/Generator/FE/Tx_Formhandler_Generator_PdfGenerator.php";s:4:"a8aa";s:55:"Classes/Generator/FE/Tx_Formhandler_Generator_Print.php";s:4:"634f";s:55:"Classes/Generator/FE/Tx_Formhandler_Generator_TcPdf.php";s:4:"42e9";s:59:"Classes/Generator/FE/Tx_Formhandler_Generator_WebkitPdf.php";s:4:"3849";s:58:"Classes/Interceptor/Tx_Formhandler_AbstractInterceptor.php";s:4:"3c21";s:67:"Classes/Interceptor/Tx_Formhandler_Interceptor_AntiSpamFormTime.php";s:4:"c270";s:64:"Classes/Interceptor/Tx_Formhandler_Interceptor_CombineFields.php";s:4:"4c9e";s:63:"Classes/Interceptor/Tx_Formhandler_Interceptor_Filtreatment.php";s:4:"e79e";s:61:"Classes/Interceptor/Tx_Formhandler_Interceptor_IPBlocking.php";s:4:"cb07";s:62:"Classes/Interceptor/Tx_Formhandler_Interceptor_ParseValues.php";s:4:"f9a0";s:58:"Classes/Interceptor/Tx_Formhandler_Interceptor_StdWrap.php";s:4:"c076";s:66:"Classes/Interceptor/Tx_Formhandler_Interceptor_TranslateFields.php";s:4:"f161";s:48:"Classes/Logger/Tx_Formhandler_AbstractLogger.php";s:4:"2e6d";s:43:"Classes/Logger/Tx_Formhandler_Logger_DB.php";s:4:"cc61";s:47:"Classes/Logger/Tx_Formhandler_Logger_DevLog.php";s:4:"4719";s:48:"Classes/Mailer/Tx_Formhandler_AbstractMailer.php";s:4:"e34a";s:49:"Classes/Mailer/Tx_Formhandler_Mailer_HtmlMail.php";s:4:"24f3";s:52:"Classes/Mailer/Tx_Formhandler_Mailer_TYPO3Mailer.php";s:4:"88ca";s:49:"Classes/Mailer/Tx_Formhandler_MailerInterface.php";s:4:"d35f";s:60:"Classes/PreProcessor/AbstractPreProcessor.php";s:4:"a4c5";s:65:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_ClearSession.php";s:4:"8356";s:67:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_ClearTempFiles.php";s:4:"6546";s:59:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_LoadDB.php";s:4:"b5ed";s:70:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_LoadDefaultValues.php";s:4:"3cef";s:64:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_LoadGetPost.php";s:4:"a803";s:69:"Classes/PreProcessor/Tx_Formhandler_PreProcessor_ValidateAuthCode.php";s:4:"c205";s:50:"Classes/Session/Tx_Formhandler_AbstractSession.php";s:4:"8722";s:46:"Classes/Session/\Typoheads\Formhandler\Session\PHP.php";s:4:"fd48";s:48:"Classes/Session/Tx_Formhandler_Session_TYPO3.php";s:4:"2615";s:51:"Classes/Utils/Tx_Formhandler_CompatibilityFuncs.php";s:4:"b24d";s:40:"Classes/Utils/\Typoheads\Formhandler\Utility\Globals.php";s:4:"bfa2";s:47:"Classes/Utils/Tx_Formhandler_Template_TCPDF.php";s:4:"b2ef";s:45:"Classes/Utils/Typoheads\Formhandler\Utils\GeneralUtility.php";s:4:"5540";s:53:"Classes/Utils/Tx_Formhandler_Utils_AjaxRemoveFile.php";s:4:"3177";s:49:"Classes/Utils/Tx_Formhandler_Utils_AjaxSubmit.php";s:4:"486e";s:51:"Classes/Utils/Tx_Formhandler_Utils_AjaxValidate.php";s:4:"d6f1";s:54:"Classes/Validator/Tx_Formhandler_AbstractValidator.php";s:4:"c1f1";s:51:"Classes/Validator/Tx_Formhandler_Validator_Ajax.php";s:4:"7a13";s:54:"Classes/Validator/Tx_Formhandler_Validator_Default.php";s:4:"e4a6";s:67:"Classes/Validator/ErrorChecks/Tx_Formhandler_AbstractErrorCheck.php";s:4:"6276";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenItems.php";s:4:"0e88";s:73:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenLength.php";s:4:"22f2";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenValue.php";s:4:"5dea";s:76:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_BetweenWordCount.php";s:4:"943b";s:67:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Captcha.php";s:4:"ea0b";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsAll.php";s:4:"162e";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsNone.php";s:4:"02cb";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsOne.php";s:4:"8bc0";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_ContainsOnly.php";s:4:"c07b";s:64:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Date.php";s:4:"f3bb";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_DateRange.php";s:4:"e407";s:65:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Email.php";s:4:"4aa5";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_EmailExists.php";s:4:"a59c";s:66:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Equals.php";s:4:"7e65";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_EqualsField.php";s:4:"7f8a";s:76:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileAllowedTypes.php";s:4:"6415";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMaxCount.php";s:4:"6abc";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMaxSize.php";s:4:"91ea";s:76:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMaxTotalSize.php";s:4:"1f0a";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMinCount.php";s:4:"3ebb";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileMinSize.php";s:4:"3560";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_FileRequired.php";s:4:"7b4a";s:65:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Float.php";s:4:"9fb1";s:67:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Integer.php";s:4:"4c65";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_IsInDBTable.php";s:4:"12bb";s:74:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_IsNotInDBTable.php";s:4:"9381";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_IsOlderThan.php";s:4:"d12e";s:73:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_IsYoungerThan.php";s:4:"fde9";s:71:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_JmRecaptcha.php";s:4:"eef5";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MathGuard.php";s:4:"70a6";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxItems.php";s:4:"4ca2";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxLength.php";s:4:"a8f1";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxValue.php";s:4:"9fef";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MaxWordCount.php";s:4:"9494";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinItems.php";s:4:"b336";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinLength.php";s:4:"b6f7";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinValue.php";s:4:"6113";s:72:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_MinWordCount.php";s:4:"d318";s:75:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_NotDefaultValue.php";s:4:"593d";s:74:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_NotEqualsField.php";s:4:"aa39";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_PregMatch.php";s:4:"6fef";s:68:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Required.php";s:4:"ffd2";s:69:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_SrFreecap.php";s:4:"bbb9";s:64:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Time.php";s:4:"d35a";s:63:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_Url.php";s:4:"aafa";s:80:"Classes/Validator/ErrorChecks/Tx_Formhandler_ErrorCheck_WtCalculatingCaptcha.php";s:4:"335a";s:44:"Classes/View/Tx_Formhandler_AbstractView.php";s:4:"0809";s:51:"Classes/View/Tx_Formhandler_View_AjaxValidation.php";s:4:"4cfa";s:45:"Classes/View/Tx_Formhandler_View_AntiSpam.php";s:4:"03e1";s:41:"Classes/View/Tx_Formhandler_View_Form.php";s:4:"c8b3";s:41:"Classes/View/Tx_Formhandler_View_Mail.php";s:4:"f38d";s:40:"Classes/View/Tx_Formhandler_View_PDF.php";s:4:"ce26";s:48:"Classes/View/Tx_Formhandler_View_SubmittedOK.php";s:4:"be45";s:32:"Configuration/Settings/setup.txt";s:4:"9a7b";s:32:"Resources/CSS/backend/styles.css";s:4:"f4c6";s:36:"Resources/HTML/backend/template.html";s:4:"379a";s:32:"Resources/Images/ajax-loader.gif";s:4:"7b97";s:31:"Resources/Images/ce_wiz_pi1.png";s:4:"b5ce";s:26:"Resources/Images/notok.png";s:4:"4249";s:23:"Resources/Images/ok.png";s:4:"c9b5";s:33:"Resources/Images/pagetreeicon.png";s:4:"8b07";s:38:"Resources/JS/addFields_predefinedJS.js";s:4:"17f6";s:32:"Resources/Language/locallang.xml";s:4:"4a7a";s:35:"Resources/Language/locallang_db.xml";s:4:"0f94";s:38:"Resources/Language/locallang_debug.xml";s:4:"642b";s:43:"Resources/Language/locallang_exceptions.xml";s:4:"b3cc";s:36:"Resources/Language/locallang_mod.xml";s:4:"895a";s:36:"Resources/Language/locallang_tca.xml";s:4:"ce0d";s:44:"Resources/PHP/class.formhandler_htmlmail.php";s:4:"8bab";s:35:"Resources/PHP/class.tx_dynaflex.php";s:4:"ad13";s:47:"Resources/PHP/class.tx_formhandler_tcafuncs.php";s:4:"33fa";s:46:"Resources/PHP/class.tx_formhandler_wizicon.php";s:4:"d0aa";s:30:"Resources/PHP/parsecsv.lib.php";s:4:"efdc";s:55:"Resources/PHP/Hooks/class.tx_formhandler_clearCache.php";s:4:"f55b";s:52:"Resources/PHP/Hooks/class.tx_formhandler_stdwrap.php";s:4:"67f3";s:55:"Resources/PHP/Hooks/class.tx_formhandler_stdwrap_4x.php";s:4:"70ba";s:43:"Resources/PHP/filtreatment/Filtreatment.php";s:4:"d1c7";s:33:"Resources/PHP/tcpdf/CHANGELOG.TXT";s:4:"16fa";s:33:"Resources/PHP/tcpdf/composer.json";s:4:"3a97";s:31:"Resources/PHP/tcpdf/LICENSE.TXT";s:4:"5c87";s:30:"Resources/PHP/tcpdf/README.TXT";s:4:"2b27";s:29:"Resources/PHP/tcpdf/tcpdf.php";s:4:"ed4b";s:40:"Resources/PHP/tcpdf/tcpdf_autoconfig.php";s:4:"46dc";s:41:"Resources/PHP/tcpdf/tcpdf_barcodes_1d.php";s:4:"a30e";s:41:"Resources/PHP/tcpdf/tcpdf_barcodes_2d.php";s:4:"c9ea";s:36:"Resources/PHP/tcpdf/tcpdf_import.php";s:4:"6bb8";s:36:"Resources/PHP/tcpdf/tcpdf_parser.php";s:4:"5c54";s:43:"Resources/PHP/tcpdf/config/tcpdf_config.php";s:4:"70a6";s:37:"Resources/PHP/tcpdf/fonts/courier.php";s:4:"2894";s:38:"Resources/PHP/tcpdf/fonts/courierb.php";s:4:"baad";s:39:"Resources/PHP/tcpdf/fonts/courierbi.php";s:4:"f938";s:38:"Resources/PHP/tcpdf/fonts/courieri.php";s:4:"afdc";s:40:"Resources/PHP/tcpdf/fonts/freemono.ctg.z";s:4:"80bd";s:38:"Resources/PHP/tcpdf/fonts/freemono.php";s:4:"a01c";s:36:"Resources/PHP/tcpdf/fonts/freemono.z";s:4:"92ff";s:41:"Resources/PHP/tcpdf/fonts/freemonob.ctg.z";s:4:"1011";s:39:"Resources/PHP/tcpdf/fonts/freemonob.php";s:4:"8424";s:37:"Resources/PHP/tcpdf/fonts/freemonob.z";s:4:"c68d";s:42:"Resources/PHP/tcpdf/fonts/freemonobi.ctg.z";s:4:"40eb";s:40:"Resources/PHP/tcpdf/fonts/freemonobi.php";s:4:"ea67";s:38:"Resources/PHP/tcpdf/fonts/freemonobi.z";s:4:"eee9";s:41:"Resources/PHP/tcpdf/fonts/freemonoi.ctg.z";s:4:"8906";s:39:"Resources/PHP/tcpdf/fonts/freemonoi.php";s:4:"b1b4";s:37:"Resources/PHP/tcpdf/fonts/freemonoi.z";s:4:"375a";s:40:"Resources/PHP/tcpdf/fonts/freesans.ctg.z";s:4:"f1ed";s:38:"Resources/PHP/tcpdf/fonts/freesans.php";s:4:"7cc3";s:36:"Resources/PHP/tcpdf/fonts/freesans.z";s:4:"23ad";s:41:"Resources/PHP/tcpdf/fonts/freesansb.ctg.z";s:4:"0934";s:39:"Resources/PHP/tcpdf/fonts/freesansb.php";s:4:"c232";s:37:"Resources/PHP/tcpdf/fonts/freesansb.z";s:4:"6b0c";s:42:"Resources/PHP/tcpdf/fonts/freesansbi.ctg.z";s:4:"db98";s:40:"Resources/PHP/tcpdf/fonts/freesansbi.php";s:4:"84f2";s:38:"Resources/PHP/tcpdf/fonts/freesansbi.z";s:4:"660f";s:41:"Resources/PHP/tcpdf/fonts/freesansi.ctg.z";s:4:"6b76";s:39:"Resources/PHP/tcpdf/fonts/freesansi.php";s:4:"c17d";s:37:"Resources/PHP/tcpdf/fonts/freesansi.z";s:4:"17a4";s:39:"Resources/PHP/tcpdf/fonts/helvetica.php";s:4:"2a31";s:40:"Resources/PHP/tcpdf/fonts/helveticab.php";s:4:"3daa";s:41:"Resources/PHP/tcpdf/fonts/helveticabi.php";s:4:"c22f";s:40:"Resources/PHP/tcpdf/fonts/helveticai.php";s:4:"e0a7";s:44:"Resources/PHP/tcpdf/include/tcpdf_colors.php";s:4:"f782";s:45:"Resources/PHP/tcpdf/include/tcpdf_filters.php";s:4:"e175";s:47:"Resources/PHP/tcpdf/include/tcpdf_font_data.php";s:4:"8f83";s:43:"Resources/PHP/tcpdf/include/tcpdf_fonts.php";s:4:"4d41";s:44:"Resources/PHP/tcpdf/include/tcpdf_images.php";s:4:"4537";s:44:"Resources/PHP/tcpdf/include/tcpdf_static.php";s:4:"86ed";s:51:"Resources/PHP/tcpdf/include/barcodes/datamatrix.php";s:4:"15de";s:47:"Resources/PHP/tcpdf/include/barcodes/pdf417.php";s:4:"1ac1";s:43:"Resources/PHP/tcpdf/tools/tcpdf_addfont.php";s:4:"8a55";s:29:"Resources/XML/flexform_ds.xml";s:4:"0b15";s:14:"doc/index.html";s:4:"4367";s:14:"doc/manual.sxw";s:4:"a3c4";s:32:"pi1/class.tx_formhandler_pi1.php";s:4:"920e";}',
];
