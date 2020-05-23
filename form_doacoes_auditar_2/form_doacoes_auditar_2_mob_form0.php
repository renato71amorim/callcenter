<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - doacoes_auditar"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - doacoes_auditar"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
<?php
header("X-XSS-Protection: 1; mode=block");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_dataemissao button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_datavencimento button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_timestamp button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_doacoes_auditar_2/form_doacoes_auditar_2_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_doacoes_auditar_2_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_doacoes_auditar_2_mob_jquery.php');

?>

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
     $(".scBtnGrpClick").mouseup(function(){
          event.preventDefault();
          if(event.target !== event.currentTarget) return;
          if($(this).find("a").prop('href') != '')
          {
              $(this).find("a").click();
          }
          else
          {
              eval($(this).find("a").prop('onclick'));
          }
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   var fixedQuickSearchSize = {};
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     if ("boolean" == typeof fixedQuickSearchSize[sIdInput] && fixedQuickSearchSize[sIdInput]) {
       return;
     }
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     if (0 != oInput.height()) {
       oInput.css({
         'height': Math.max(oInput.height(), 16) + 'px',
       });
     }
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     fixedQuickSearchSize[sIdInput] = true;
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_doacoes_auditar_2']['error_buffer']) && '' != $_SESSION['scriptcase']['form_doacoes_auditar_2']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_doacoes_auditar_2']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_doacoes_auditar_2_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_doacoes_auditar_2_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_doacoes_auditar_2_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_doacoes_auditar_2_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 't', '', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-16", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-17", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-18", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-19", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "scBtnFn_sys_format_copy()", "scBtnFn_sys_format_copy()", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-21", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-22", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-23", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-24", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-25", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-26", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['codigoidentificador']))
           {
               $this->nmgp_cmp_readonly['codigoidentificador'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigoidentificador']))
    {
        $this->nm_new_label['codigoidentificador'] = "Codigo Identificador";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigoidentificador = $this->codigoidentificador;
   $sStyleHidden_codigoidentificador = '';
   if (isset($this->nmgp_cmp_hidden['codigoidentificador']) && $this->nmgp_cmp_hidden['codigoidentificador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigoidentificador']);
       $sStyleHidden_codigoidentificador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigoidentificador = 'display: none;';
   $sStyleReadInp_codigoidentificador = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["codigoidentificador"]) &&  $this->nmgp_cmp_readonly["codigoidentificador"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigoidentificador']);
       $sStyleReadLab_codigoidentificador = '';
       $sStyleReadInp_codigoidentificador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigoidentificador']) && $this->nmgp_cmp_hidden['codigoidentificador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigoidentificador" value="<?php echo $this->form_encode_input($codigoidentificador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_codigoidentificador_line" id="hidden_field_data_codigoidentificador" style="<?php echo $sStyleHidden_codigoidentificador; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigoidentificador_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_codigoidentificador_label"><span id="id_label_codigoidentificador"><?php echo $this->nm_new_label['codigoidentificador']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['php_cmp_required']['codigoidentificador']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['php_cmp_required']['codigoidentificador'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["codigoidentificador"]) &&  $this->nmgp_cmp_readonly["codigoidentificador"] == "on")) { 

 ?>
<input type="hidden" name="codigoidentificador" value="<?php echo $this->form_encode_input($codigoidentificador) . "\"><span id=\"id_ajax_label_codigoidentificador\">" . $codigoidentificador . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_codigoidentificador" class="sc-ui-readonly-codigoidentificador css_codigoidentificador_line" style="<?php echo $sStyleReadLab_codigoidentificador; ?>"><?php echo $this->codigoidentificador; ?></span><span id="id_read_off_codigoidentificador" class="css_read_off_codigoidentificador" style="white-space: nowrap;<?php echo $sStyleReadInp_codigoidentificador; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigoidentificador_obj" style="" id="id_sc_field_codigoidentificador" type=text name="codigoidentificador" value="<?php echo $this->form_encode_input($codigoidentificador) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigoidentificador']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigoidentificador']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigoidentificador']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigoidentificador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigoidentificador_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigo']))
    {
        $this->nm_new_label['codigo'] = "Codigo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigo = $this->codigo;
   $sStyleHidden_codigo = '';
   if (isset($this->nmgp_cmp_hidden['codigo']) && $this->nmgp_cmp_hidden['codigo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigo']);
       $sStyleHidden_codigo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigo = 'display: none;';
   $sStyleReadInp_codigo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codigo']) && $this->nmgp_cmp_readonly['codigo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigo']);
       $sStyleReadLab_codigo = '';
       $sStyleReadInp_codigo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigo']) && $this->nmgp_cmp_hidden['codigo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigo" value="<?php echo $this->form_encode_input($codigo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_codigo_line" id="hidden_field_data_codigo" style="<?php echo $sStyleHidden_codigo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_codigo_label"><span id="id_label_codigo"><?php echo $this->nm_new_label['codigo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigo"]) &&  $this->nmgp_cmp_readonly["codigo"] == "on") { 

 ?>
<input type="hidden" name="codigo" value="<?php echo $this->form_encode_input($codigo) . "\">" . $codigo . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigo" class="sc-ui-readonly-codigo css_codigo_line" style="<?php echo $sStyleReadLab_codigo; ?>"><?php echo $this->codigo; ?></span><span id="id_read_off_codigo" class="css_read_off_codigo" style="white-space: nowrap;<?php echo $sStyleReadInp_codigo; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigo_obj" style="" id="id_sc_field_codigo" type=text name="codigo" value="<?php echo $this->form_encode_input($codigo) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigo']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nome']))
    {
        $this->nm_new_label['nome'] = "Nome";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nome = $this->nome;
   $sStyleHidden_nome = '';
   if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nome']);
       $sStyleHidden_nome = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nome = 'display: none;';
   $sStyleReadInp_nome = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nome']) && $this->nmgp_cmp_readonly['nome'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nome']);
       $sStyleReadLab_nome = '';
       $sStyleReadInp_nome = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nome']) && $this->nmgp_cmp_hidden['nome'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome" value="<?php echo $this->form_encode_input($nome) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nome_line" id="hidden_field_data_nome" style="<?php echo $sStyleHidden_nome; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nome_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_nome_label"><span id="id_label_nome"><?php echo $this->nm_new_label['nome']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome"]) &&  $this->nmgp_cmp_readonly["nome"] == "on") { 

 ?>
<input type="hidden" name="nome" value="<?php echo $this->form_encode_input($nome) . "\">" . $nome . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome" class="sc-ui-readonly-nome css_nome_line" style="<?php echo $sStyleReadLab_nome; ?>"><?php echo $this->nome; ?></span><span id="id_read_off_nome" class="css_read_off_nome" style="white-space: nowrap;<?php echo $sStyleReadInp_nome; ?>">
 <input class="sc-js-input scFormObjectOdd css_nome_obj" style="" id="id_sc_field_nome" type=text name="nome" value="<?php echo $this->form_encode_input($nome) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sexo']))
    {
        $this->nm_new_label['sexo'] = "Sexo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sexo = $this->sexo;
   $sStyleHidden_sexo = '';
   if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sexo']);
       $sStyleHidden_sexo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sexo = 'display: none;';
   $sStyleReadInp_sexo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sexo']) && $this->nmgp_cmp_readonly['sexo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sexo']);
       $sStyleReadLab_sexo = '';
       $sStyleReadInp_sexo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sexo']) && $this->nmgp_cmp_hidden['sexo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sexo" value="<?php echo $this->form_encode_input($sexo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sexo_line" id="hidden_field_data_sexo" style="<?php echo $sStyleHidden_sexo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sexo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sexo_label"><span id="id_label_sexo"><?php echo $this->nm_new_label['sexo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sexo"]) &&  $this->nmgp_cmp_readonly["sexo"] == "on") { 

 ?>
<input type="hidden" name="sexo" value="<?php echo $this->form_encode_input($sexo) . "\">" . $sexo . ""; ?>
<?php } else { ?>
<span id="id_read_on_sexo" class="sc-ui-readonly-sexo css_sexo_line" style="<?php echo $sStyleReadLab_sexo; ?>"><?php echo $this->sexo; ?></span><span id="id_read_off_sexo" class="css_read_off_sexo" style="white-space: nowrap;<?php echo $sStyleReadInp_sexo; ?>">
 <input class="sc-js-input scFormObjectOdd css_sexo_obj" style="" id="id_sc_field_sexo" type=text name="sexo" value="<?php echo $this->form_encode_input($sexo) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sexo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sexo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipo']))
    {
        $this->nm_new_label['tipo'] = "Tipo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo = $this->tipo;
   $sStyleHidden_tipo = '';
   if (isset($this->nmgp_cmp_hidden['tipo']) && $this->nmgp_cmp_hidden['tipo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo']);
       $sStyleHidden_tipo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo = 'display: none;';
   $sStyleReadInp_tipo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo']) && $this->nmgp_cmp_readonly['tipo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo']);
       $sStyleReadLab_tipo = '';
       $sStyleReadInp_tipo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo']) && $this->nmgp_cmp_hidden['tipo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipo" value="<?php echo $this->form_encode_input($tipo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipo_line" id="hidden_field_data_tipo" style="<?php echo $sStyleHidden_tipo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipo_label"><span id="id_label_tipo"><?php echo $this->nm_new_label['tipo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo"]) &&  $this->nmgp_cmp_readonly["tipo"] == "on") { 

 ?>
<input type="hidden" name="tipo" value="<?php echo $this->form_encode_input($tipo) . "\">" . $tipo . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipo" class="sc-ui-readonly-tipo css_tipo_line" style="<?php echo $sStyleReadLab_tipo; ?>"><?php echo $this->tipo; ?></span><span id="id_read_off_tipo" class="css_read_off_tipo" style="white-space: nowrap;<?php echo $sStyleReadInp_tipo; ?>">
 <input class="sc-js-input scFormObjectOdd css_tipo_obj" style="" id="id_sc_field_tipo" type=text name="tipo" value="<?php echo $this->form_encode_input($tipo) ?>"
 size=1 maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ddd']))
    {
        $this->nm_new_label['ddd'] = "DDD";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ddd = $this->ddd;
   $sStyleHidden_ddd = '';
   if (isset($this->nmgp_cmp_hidden['ddd']) && $this->nmgp_cmp_hidden['ddd'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ddd']);
       $sStyleHidden_ddd = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ddd = 'display: none;';
   $sStyleReadInp_ddd = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ddd']) && $this->nmgp_cmp_readonly['ddd'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ddd']);
       $sStyleReadLab_ddd = '';
       $sStyleReadInp_ddd = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ddd']) && $this->nmgp_cmp_hidden['ddd'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ddd" value="<?php echo $this->form_encode_input($ddd) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ddd_line" id="hidden_field_data_ddd" style="<?php echo $sStyleHidden_ddd; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ddd_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ddd_label"><span id="id_label_ddd"><?php echo $this->nm_new_label['ddd']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ddd"]) &&  $this->nmgp_cmp_readonly["ddd"] == "on") { 

 ?>
<input type="hidden" name="ddd" value="<?php echo $this->form_encode_input($ddd) . "\">" . $ddd . ""; ?>
<?php } else { ?>
<span id="id_read_on_ddd" class="sc-ui-readonly-ddd css_ddd_line" style="<?php echo $sStyleReadLab_ddd; ?>"><?php echo $this->ddd; ?></span><span id="id_read_off_ddd" class="css_read_off_ddd" style="white-space: nowrap;<?php echo $sStyleReadInp_ddd; ?>">
 <input class="sc-js-input scFormObjectOdd css_ddd_obj" style="" id="id_sc_field_ddd" type=text name="ddd" value="<?php echo $this->form_encode_input($ddd) ?>"
 size=2 maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ddd_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ddd_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fone1']))
    {
        $this->nm_new_label['fone1'] = "Fone 1";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fone1 = $this->fone1;
   $sStyleHidden_fone1 = '';
   if (isset($this->nmgp_cmp_hidden['fone1']) && $this->nmgp_cmp_hidden['fone1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fone1']);
       $sStyleHidden_fone1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fone1 = 'display: none;';
   $sStyleReadInp_fone1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fone1']) && $this->nmgp_cmp_readonly['fone1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fone1']);
       $sStyleReadLab_fone1 = '';
       $sStyleReadInp_fone1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fone1']) && $this->nmgp_cmp_hidden['fone1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fone1" value="<?php echo $this->form_encode_input($fone1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fone1_line" id="hidden_field_data_fone1" style="<?php echo $sStyleHidden_fone1; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fone1_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fone1_label"><span id="id_label_fone1"><?php echo $this->nm_new_label['fone1']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fone1"]) &&  $this->nmgp_cmp_readonly["fone1"] == "on") { 

 ?>
<input type="hidden" name="fone1" value="<?php echo $this->form_encode_input($fone1) . "\">" . $fone1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fone1" class="sc-ui-readonly-fone1 css_fone1_line" style="<?php echo $sStyleReadLab_fone1; ?>"><?php echo $this->fone1; ?></span><span id="id_read_off_fone1" class="css_read_off_fone1" style="white-space: nowrap;<?php echo $sStyleReadInp_fone1; ?>">
 <input class="sc-js-input scFormObjectOdd css_fone1_obj" style="" id="id_sc_field_fone1" type=text name="fone1" value="<?php echo $this->form_encode_input($fone1) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone1_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fone2']))
    {
        $this->nm_new_label['fone2'] = "Fone 2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fone2 = $this->fone2;
   $sStyleHidden_fone2 = '';
   if (isset($this->nmgp_cmp_hidden['fone2']) && $this->nmgp_cmp_hidden['fone2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fone2']);
       $sStyleHidden_fone2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fone2 = 'display: none;';
   $sStyleReadInp_fone2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fone2']) && $this->nmgp_cmp_readonly['fone2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fone2']);
       $sStyleReadLab_fone2 = '';
       $sStyleReadInp_fone2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fone2']) && $this->nmgp_cmp_hidden['fone2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fone2" value="<?php echo $this->form_encode_input($fone2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fone2_line" id="hidden_field_data_fone2" style="<?php echo $sStyleHidden_fone2; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fone2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fone2_label"><span id="id_label_fone2"><?php echo $this->nm_new_label['fone2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fone2"]) &&  $this->nmgp_cmp_readonly["fone2"] == "on") { 

 ?>
<input type="hidden" name="fone2" value="<?php echo $this->form_encode_input($fone2) . "\">" . $fone2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_fone2" class="sc-ui-readonly-fone2 css_fone2_line" style="<?php echo $sStyleReadLab_fone2; ?>"><?php echo $this->fone2; ?></span><span id="id_read_off_fone2" class="css_read_off_fone2" style="white-space: nowrap;<?php echo $sStyleReadInp_fone2; ?>">
 <input class="sc-js-input scFormObjectOdd css_fone2_obj" style="" id="id_sc_field_fone2" type=text name="fone2" value="<?php echo $this->form_encode_input($fone2) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fone2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fone2_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operador']))
    {
        $this->nm_new_label['operador'] = "Operador";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operador = $this->operador;
   $sStyleHidden_operador = '';
   if (isset($this->nmgp_cmp_hidden['operador']) && $this->nmgp_cmp_hidden['operador'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operador']);
       $sStyleHidden_operador = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operador = 'display: none;';
   $sStyleReadInp_operador = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operador']) && $this->nmgp_cmp_readonly['operador'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operador']);
       $sStyleReadLab_operador = '';
       $sStyleReadInp_operador = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operador']) && $this->nmgp_cmp_hidden['operador'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operador" value="<?php echo $this->form_encode_input($operador) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_operador_line" id="hidden_field_data_operador" style="<?php echo $sStyleHidden_operador; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_operador_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_operador_label"><span id="id_label_operador"><?php echo $this->nm_new_label['operador']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["operador"]) &&  $this->nmgp_cmp_readonly["operador"] == "on") { 

 ?>
<input type="hidden" name="operador" value="<?php echo $this->form_encode_input($operador) . "\">" . $operador . ""; ?>
<?php } else { ?>
<span id="id_read_on_operador" class="sc-ui-readonly-operador css_operador_line" style="<?php echo $sStyleReadLab_operador; ?>"><?php echo $this->operador; ?></span><span id="id_read_off_operador" class="css_read_off_operador" style="white-space: nowrap;<?php echo $sStyleReadInp_operador; ?>">
 <input class="sc-js-input scFormObjectOdd css_operador_obj" style="" id="id_sc_field_operador" type=text name="operador" value="<?php echo $this->form_encode_input($operador) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['operador']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['operador']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['operador']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operador_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operador_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['usuario']))
    {
        $this->nm_new_label['usuario'] = "Usuario";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $usuario = $this->usuario;
   $sStyleHidden_usuario = '';
   if (isset($this->nmgp_cmp_hidden['usuario']) && $this->nmgp_cmp_hidden['usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['usuario']);
       $sStyleHidden_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_usuario = 'display: none;';
   $sStyleReadInp_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['usuario']) && $this->nmgp_cmp_readonly['usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['usuario']);
       $sStyleReadLab_usuario = '';
       $sStyleReadInp_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['usuario']) && $this->nmgp_cmp_hidden['usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="usuario" value="<?php echo $this->form_encode_input($usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_usuario_line" id="hidden_field_data_usuario" style="<?php echo $sStyleHidden_usuario; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_usuario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_usuario_label"><span id="id_label_usuario"><?php echo $this->nm_new_label['usuario']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usuario"]) &&  $this->nmgp_cmp_readonly["usuario"] == "on") { 

 ?>
<input type="hidden" name="usuario" value="<?php echo $this->form_encode_input($usuario) . "\">" . $usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_usuario" class="sc-ui-readonly-usuario css_usuario_line" style="<?php echo $sStyleReadLab_usuario; ?>"><?php echo $this->usuario; ?></span><span id="id_read_off_usuario" class="css_read_off_usuario" style="white-space: nowrap;<?php echo $sStyleReadInp_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_usuario_obj" style="" id="id_sc_field_usuario" type=text name="usuario" value="<?php echo $this->form_encode_input($usuario) ?>"
 size=20 maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usuario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['codigorua']))
    {
        $this->nm_new_label['codigorua'] = "Codigo Rua";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $codigorua = $this->codigorua;
   $sStyleHidden_codigorua = '';
   if (isset($this->nmgp_cmp_hidden['codigorua']) && $this->nmgp_cmp_hidden['codigorua'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['codigorua']);
       $sStyleHidden_codigorua = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_codigorua = 'display: none;';
   $sStyleReadInp_codigorua = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['codigorua']) && $this->nmgp_cmp_readonly['codigorua'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['codigorua']);
       $sStyleReadLab_codigorua = '';
       $sStyleReadInp_codigorua = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['codigorua']) && $this->nmgp_cmp_hidden['codigorua'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="codigorua" value="<?php echo $this->form_encode_input($codigorua) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_codigorua_line" id="hidden_field_data_codigorua" style="<?php echo $sStyleHidden_codigorua; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_codigorua_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_codigorua_label"><span id="id_label_codigorua"><?php echo $this->nm_new_label['codigorua']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["codigorua"]) &&  $this->nmgp_cmp_readonly["codigorua"] == "on") { 

 ?>
<input type="hidden" name="codigorua" value="<?php echo $this->form_encode_input($codigorua) . "\">" . $codigorua . ""; ?>
<?php } else { ?>
<span id="id_read_on_codigorua" class="sc-ui-readonly-codigorua css_codigorua_line" style="<?php echo $sStyleReadLab_codigorua; ?>"><?php echo $this->codigorua; ?></span><span id="id_read_off_codigorua" class="css_read_off_codigorua" style="white-space: nowrap;<?php echo $sStyleReadInp_codigorua; ?>">
 <input class="sc-js-input scFormObjectOdd css_codigorua_obj" style="" id="id_sc_field_codigorua" type=text name="codigorua" value="<?php echo $this->form_encode_input($codigorua) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['codigorua']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['codigorua']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['codigorua']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_codigorua_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_codigorua_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['logadouro']))
    {
        $this->nm_new_label['logadouro'] = "Logadouro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $logadouro = $this->logadouro;
   $sStyleHidden_logadouro = '';
   if (isset($this->nmgp_cmp_hidden['logadouro']) && $this->nmgp_cmp_hidden['logadouro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['logadouro']);
       $sStyleHidden_logadouro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_logadouro = 'display: none;';
   $sStyleReadInp_logadouro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['logadouro']) && $this->nmgp_cmp_readonly['logadouro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['logadouro']);
       $sStyleReadLab_logadouro = '';
       $sStyleReadInp_logadouro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['logadouro']) && $this->nmgp_cmp_hidden['logadouro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="logadouro" value="<?php echo $this->form_encode_input($logadouro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_logadouro_line" id="hidden_field_data_logadouro" style="<?php echo $sStyleHidden_logadouro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_logadouro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_logadouro_label"><span id="id_label_logadouro"><?php echo $this->nm_new_label['logadouro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["logadouro"]) &&  $this->nmgp_cmp_readonly["logadouro"] == "on") { 

 ?>
<input type="hidden" name="logadouro" value="<?php echo $this->form_encode_input($logadouro) . "\">" . $logadouro . ""; ?>
<?php } else { ?>
<span id="id_read_on_logadouro" class="sc-ui-readonly-logadouro css_logadouro_line" style="<?php echo $sStyleReadLab_logadouro; ?>"><?php echo $this->logadouro; ?></span><span id="id_read_off_logadouro" class="css_read_off_logadouro" style="white-space: nowrap;<?php echo $sStyleReadInp_logadouro; ?>">
 <input class="sc-js-input scFormObjectOdd css_logadouro_obj" style="" id="id_sc_field_logadouro" type=text name="logadouro" value="<?php echo $this->form_encode_input($logadouro) ?>"
 size=50 maxlength=63 alt="{datatype: 'text', maxLength: 63, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_logadouro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_logadouro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['numero']))
    {
        $this->nm_new_label['numero'] = "Numero";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $numero = $this->numero;
   $sStyleHidden_numero = '';
   if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['numero']);
       $sStyleHidden_numero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_numero = 'display: none;';
   $sStyleReadInp_numero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['numero']) && $this->nmgp_cmp_readonly['numero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['numero']);
       $sStyleReadLab_numero = '';
       $sStyleReadInp_numero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['numero']) && $this->nmgp_cmp_hidden['numero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="numero" value="<?php echo $this->form_encode_input($numero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_numero_line" id="hidden_field_data_numero" style="<?php echo $sStyleHidden_numero; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_numero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_numero_label"><span id="id_label_numero"><?php echo $this->nm_new_label['numero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["numero"]) &&  $this->nmgp_cmp_readonly["numero"] == "on") { 

 ?>
<input type="hidden" name="numero" value="<?php echo $this->form_encode_input($numero) . "\">" . $numero . ""; ?>
<?php } else { ?>
<span id="id_read_on_numero" class="sc-ui-readonly-numero css_numero_line" style="<?php echo $sStyleReadLab_numero; ?>"><?php echo $this->numero; ?></span><span id="id_read_off_numero" class="css_read_off_numero" style="white-space: nowrap;<?php echo $sStyleReadInp_numero; ?>">
 <input class="sc-js-input scFormObjectOdd css_numero_obj" style="" id="id_sc_field_numero" type=text name="numero" value="<?php echo $this->form_encode_input($numero) ?>"
 size=8 maxlength=8 alt="{datatype: 'text', maxLength: 8, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_numero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_numero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['complemento']))
    {
        $this->nm_new_label['complemento'] = "Complemento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $complemento = $this->complemento;
   $sStyleHidden_complemento = '';
   if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['complemento']);
       $sStyleHidden_complemento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_complemento = 'display: none;';
   $sStyleReadInp_complemento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['complemento']) && $this->nmgp_cmp_readonly['complemento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['complemento']);
       $sStyleReadLab_complemento = '';
       $sStyleReadInp_complemento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['complemento']) && $this->nmgp_cmp_hidden['complemento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_complemento_line" id="hidden_field_data_complemento" style="<?php echo $sStyleHidden_complemento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_complemento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_complemento_label"><span id="id_label_complemento"><?php echo $this->nm_new_label['complemento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["complemento"]) &&  $this->nmgp_cmp_readonly["complemento"] == "on") { 

 ?>
<input type="hidden" name="complemento" value="<?php echo $this->form_encode_input($complemento) . "\">" . $complemento . ""; ?>
<?php } else { ?>
<span id="id_read_on_complemento" class="sc-ui-readonly-complemento css_complemento_line" style="<?php echo $sStyleReadLab_complemento; ?>"><?php echo $this->complemento; ?></span><span id="id_read_off_complemento" class="css_read_off_complemento" style="white-space: nowrap;<?php echo $sStyleReadInp_complemento; ?>">
 <input class="sc-js-input scFormObjectOdd css_complemento_obj" style="" id="id_sc_field_complemento" type=text name="complemento" value="<?php echo $this->form_encode_input($complemento) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_complemento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_complemento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pontodereferencia']))
    {
        $this->nm_new_label['pontodereferencia'] = "Ponto De Referencia";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pontodereferencia = $this->pontodereferencia;
   $sStyleHidden_pontodereferencia = '';
   if (isset($this->nmgp_cmp_hidden['pontodereferencia']) && $this->nmgp_cmp_hidden['pontodereferencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pontodereferencia']);
       $sStyleHidden_pontodereferencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pontodereferencia = 'display: none;';
   $sStyleReadInp_pontodereferencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pontodereferencia']) && $this->nmgp_cmp_readonly['pontodereferencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pontodereferencia']);
       $sStyleReadLab_pontodereferencia = '';
       $sStyleReadInp_pontodereferencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pontodereferencia']) && $this->nmgp_cmp_hidden['pontodereferencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pontodereferencia" value="<?php echo $this->form_encode_input($pontodereferencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pontodereferencia_line" id="hidden_field_data_pontodereferencia" style="<?php echo $sStyleHidden_pontodereferencia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pontodereferencia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pontodereferencia_label"><span id="id_label_pontodereferencia"><?php echo $this->nm_new_label['pontodereferencia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pontodereferencia"]) &&  $this->nmgp_cmp_readonly["pontodereferencia"] == "on") { 

 ?>
<input type="hidden" name="pontodereferencia" value="<?php echo $this->form_encode_input($pontodereferencia) . "\">" . $pontodereferencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_pontodereferencia" class="sc-ui-readonly-pontodereferencia css_pontodereferencia_line" style="<?php echo $sStyleReadLab_pontodereferencia; ?>"><?php echo $this->pontodereferencia; ?></span><span id="id_read_off_pontodereferencia" class="css_read_off_pontodereferencia" style="white-space: nowrap;<?php echo $sStyleReadInp_pontodereferencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_pontodereferencia_obj" style="" id="id_sc_field_pontodereferencia" type=text name="pontodereferencia" value="<?php echo $this->form_encode_input($pontodereferencia) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pontodereferencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pontodereferencia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['bairro']))
    {
        $this->nm_new_label['bairro'] = "Bairro";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $bairro = $this->bairro;
   $sStyleHidden_bairro = '';
   if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['bairro']);
       $sStyleHidden_bairro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_bairro = 'display: none;';
   $sStyleReadInp_bairro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['bairro']) && $this->nmgp_cmp_readonly['bairro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['bairro']);
       $sStyleReadLab_bairro = '';
       $sStyleReadInp_bairro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['bairro']) && $this->nmgp_cmp_hidden['bairro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_bairro_line" id="hidden_field_data_bairro" style="<?php echo $sStyleHidden_bairro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_bairro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_bairro_label"><span id="id_label_bairro"><?php echo $this->nm_new_label['bairro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["bairro"]) &&  $this->nmgp_cmp_readonly["bairro"] == "on") { 

 ?>
<input type="hidden" name="bairro" value="<?php echo $this->form_encode_input($bairro) . "\">" . $bairro . ""; ?>
<?php } else { ?>
<span id="id_read_on_bairro" class="sc-ui-readonly-bairro css_bairro_line" style="<?php echo $sStyleReadLab_bairro; ?>"><?php echo $this->bairro; ?></span><span id="id_read_off_bairro" class="css_read_off_bairro" style="white-space: nowrap;<?php echo $sStyleReadInp_bairro; ?>">
 <input class="sc-js-input scFormObjectOdd css_bairro_obj" style="" id="id_sc_field_bairro" type=text name="bairro" value="<?php echo $this->form_encode_input($bairro) ?>"
 size=50 maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_bairro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_bairro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['localidade']))
    {
        $this->nm_new_label['localidade'] = "Localidade";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $localidade = $this->localidade;
   $sStyleHidden_localidade = '';
   if (isset($this->nmgp_cmp_hidden['localidade']) && $this->nmgp_cmp_hidden['localidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['localidade']);
       $sStyleHidden_localidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_localidade = 'display: none;';
   $sStyleReadInp_localidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['localidade']) && $this->nmgp_cmp_readonly['localidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['localidade']);
       $sStyleReadLab_localidade = '';
       $sStyleReadInp_localidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['localidade']) && $this->nmgp_cmp_hidden['localidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="localidade" value="<?php echo $this->form_encode_input($localidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_localidade_line" id="hidden_field_data_localidade" style="<?php echo $sStyleHidden_localidade; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_localidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_localidade_label"><span id="id_label_localidade"><?php echo $this->nm_new_label['localidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["localidade"]) &&  $this->nmgp_cmp_readonly["localidade"] == "on") { 

 ?>
<input type="hidden" name="localidade" value="<?php echo $this->form_encode_input($localidade) . "\">" . $localidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_localidade" class="sc-ui-readonly-localidade css_localidade_line" style="<?php echo $sStyleReadLab_localidade; ?>"><?php echo $this->localidade; ?></span><span id="id_read_off_localidade" class="css_read_off_localidade" style="white-space: nowrap;<?php echo $sStyleReadInp_localidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_localidade_obj" style="" id="id_sc_field_localidade" type=text name="localidade" value="<?php echo $this->form_encode_input($localidade) ?>"
 size=35 maxlength=35 alt="{datatype: 'text', maxLength: 35, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_localidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_localidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['setor_rua']))
    {
        $this->nm_new_label['setor_rua'] = "Setor Rua";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $setor_rua = $this->setor_rua;
   $sStyleHidden_setor_rua = '';
   if (isset($this->nmgp_cmp_hidden['setor_rua']) && $this->nmgp_cmp_hidden['setor_rua'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['setor_rua']);
       $sStyleHidden_setor_rua = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_setor_rua = 'display: none;';
   $sStyleReadInp_setor_rua = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['setor_rua']) && $this->nmgp_cmp_readonly['setor_rua'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['setor_rua']);
       $sStyleReadLab_setor_rua = '';
       $sStyleReadInp_setor_rua = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['setor_rua']) && $this->nmgp_cmp_hidden['setor_rua'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="setor_rua" value="<?php echo $this->form_encode_input($setor_rua) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_setor_rua_line" id="hidden_field_data_setor_rua" style="<?php echo $sStyleHidden_setor_rua; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_setor_rua_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_setor_rua_label"><span id="id_label_setor_rua"><?php echo $this->nm_new_label['setor_rua']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["setor_rua"]) &&  $this->nmgp_cmp_readonly["setor_rua"] == "on") { 

 ?>
<input type="hidden" name="setor_rua" value="<?php echo $this->form_encode_input($setor_rua) . "\">" . $setor_rua . ""; ?>
<?php } else { ?>
<span id="id_read_on_setor_rua" class="sc-ui-readonly-setor_rua css_setor_rua_line" style="<?php echo $sStyleReadLab_setor_rua; ?>"><?php echo $this->setor_rua; ?></span><span id="id_read_off_setor_rua" class="css_read_off_setor_rua" style="white-space: nowrap;<?php echo $sStyleReadInp_setor_rua; ?>">
 <input class="sc-js-input scFormObjectOdd css_setor_rua_obj" style="" id="id_sc_field_setor_rua" type=text name="setor_rua" value="<?php echo $this->form_encode_input($setor_rua) ?>"
 size=19 alt="{datatype: 'integer', maxLength: 19, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['setor_rua']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['setor_rua']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['setor_rua']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_setor_rua_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_setor_rua_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cep']))
    {
        $this->nm_new_label['cep'] = "CEP";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cep = $this->cep;
   $sStyleHidden_cep = '';
   if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cep']);
       $sStyleHidden_cep = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cep = 'display: none;';
   $sStyleReadInp_cep = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cep']) && $this->nmgp_cmp_readonly['cep'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cep']);
       $sStyleReadLab_cep = '';
       $sStyleReadInp_cep = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cep']) && $this->nmgp_cmp_hidden['cep'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cep_line" id="hidden_field_data_cep" style="<?php echo $sStyleHidden_cep; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cep_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cep_label"><span id="id_label_cep"><?php echo $this->nm_new_label['cep']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cep"]) &&  $this->nmgp_cmp_readonly["cep"] == "on") { 

 ?>
<input type="hidden" name="cep" value="<?php echo $this->form_encode_input($cep) . "\">" . $cep . ""; ?>
<?php } else { ?>
<span id="id_read_on_cep" class="sc-ui-readonly-cep css_cep_line" style="<?php echo $sStyleReadLab_cep; ?>"><?php echo $this->cep; ?></span><span id="id_read_off_cep" class="css_read_off_cep" style="white-space: nowrap;<?php echo $sStyleReadInp_cep; ?>">
 <input class="sc-js-input scFormObjectOdd css_cep_obj" style="" id="id_sc_field_cep" type=text name="cep" value="<?php echo $this->form_encode_input($cep) ?>"
 size=9 maxlength=9 alt="{datatype: 'text', maxLength: 9, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cep_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cep_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['dataemissao']))
    {
        $this->nm_new_label['dataemissao'] = "Data Emissao";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_dataemissao = $this->dataemissao;
   if (strlen($this->dataemissao_hora) > 8 ) {$this->dataemissao_hora = substr($this->dataemissao_hora, 0, 8);}
   $this->dataemissao .= ' ' . $this->dataemissao_hora;
   $dataemissao = $this->dataemissao;
   $sStyleHidden_dataemissao = '';
   if (isset($this->nmgp_cmp_hidden['dataemissao']) && $this->nmgp_cmp_hidden['dataemissao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['dataemissao']);
       $sStyleHidden_dataemissao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_dataemissao = 'display: none;';
   $sStyleReadInp_dataemissao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['dataemissao']) && $this->nmgp_cmp_readonly['dataemissao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['dataemissao']);
       $sStyleReadLab_dataemissao = '';
       $sStyleReadInp_dataemissao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['dataemissao']) && $this->nmgp_cmp_hidden['dataemissao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="dataemissao" value="<?php echo $this->form_encode_input($dataemissao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_dataemissao_line" id="hidden_field_data_dataemissao" style="<?php echo $sStyleHidden_dataemissao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_dataemissao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_dataemissao_label"><span id="id_label_dataemissao"><?php echo $this->nm_new_label['dataemissao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["dataemissao"]) &&  $this->nmgp_cmp_readonly["dataemissao"] == "on") { 

 ?>
<input type="hidden" name="dataemissao" value="<?php echo $this->form_encode_input($dataemissao) . "\">" . $dataemissao . ""; ?>
<?php } else { ?>
<span id="id_read_on_dataemissao" class="sc-ui-readonly-dataemissao css_dataemissao_line" style="<?php echo $sStyleReadLab_dataemissao; ?>"><?php echo $dataemissao; ?></span><span id="id_read_off_dataemissao" class="css_read_off_dataemissao" style="white-space: nowrap;<?php echo $sStyleReadInp_dataemissao; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_dataemissao_obj" style="" id="id_sc_field_dataemissao" type=text name="dataemissao" value="<?php echo $this->form_encode_input($dataemissao) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['dataemissao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['dataemissao']['date_format']; ?>', timeSep: '<?php echo $this->field_config['dataemissao']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['dataemissao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_dataemissao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_dataemissao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->dataemissao = $old_dt_dataemissao;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['datavencimento']))
    {
        $this->nm_new_label['datavencimento'] = "Data Vencimento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_datavencimento = $this->datavencimento;
   if (strlen($this->datavencimento_hora) > 8 ) {$this->datavencimento_hora = substr($this->datavencimento_hora, 0, 8);}
   $this->datavencimento .= ' ' . $this->datavencimento_hora;
   $datavencimento = $this->datavencimento;
   $sStyleHidden_datavencimento = '';
   if (isset($this->nmgp_cmp_hidden['datavencimento']) && $this->nmgp_cmp_hidden['datavencimento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['datavencimento']);
       $sStyleHidden_datavencimento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_datavencimento = 'display: none;';
   $sStyleReadInp_datavencimento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['datavencimento']) && $this->nmgp_cmp_readonly['datavencimento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['datavencimento']);
       $sStyleReadLab_datavencimento = '';
       $sStyleReadInp_datavencimento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['datavencimento']) && $this->nmgp_cmp_hidden['datavencimento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="datavencimento" value="<?php echo $this->form_encode_input($datavencimento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_datavencimento_line" id="hidden_field_data_datavencimento" style="<?php echo $sStyleHidden_datavencimento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_datavencimento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_datavencimento_label"><span id="id_label_datavencimento"><?php echo $this->nm_new_label['datavencimento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["datavencimento"]) &&  $this->nmgp_cmp_readonly["datavencimento"] == "on") { 

 ?>
<input type="hidden" name="datavencimento" value="<?php echo $this->form_encode_input($datavencimento) . "\">" . $datavencimento . ""; ?>
<?php } else { ?>
<span id="id_read_on_datavencimento" class="sc-ui-readonly-datavencimento css_datavencimento_line" style="<?php echo $sStyleReadLab_datavencimento; ?>"><?php echo $datavencimento; ?></span><span id="id_read_off_datavencimento" class="css_read_off_datavencimento" style="white-space: nowrap;<?php echo $sStyleReadInp_datavencimento; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_datavencimento_obj" style="" id="id_sc_field_datavencimento" type=text name="datavencimento" value="<?php echo $this->form_encode_input($datavencimento) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['datavencimento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['datavencimento']['date_format']; ?>', timeSep: '<?php echo $this->field_config['datavencimento']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['datavencimento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_datavencimento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_datavencimento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->datavencimento = $old_dt_datavencimento;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['timestamp']))
    {
        $this->nm_new_label['timestamp'] = "Time Stamp";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_timestamp = $this->timestamp;
   if (strlen($this->timestamp_hora) > 8 ) {$this->timestamp_hora = substr($this->timestamp_hora, 0, 8);}
   $this->timestamp .= ' ' . $this->timestamp_hora;
   $timestamp = $this->timestamp;
   $sStyleHidden_timestamp = '';
   if (isset($this->nmgp_cmp_hidden['timestamp']) && $this->nmgp_cmp_hidden['timestamp'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['timestamp']);
       $sStyleHidden_timestamp = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_timestamp = 'display: none;';
   $sStyleReadInp_timestamp = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['timestamp']) && $this->nmgp_cmp_readonly['timestamp'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['timestamp']);
       $sStyleReadLab_timestamp = '';
       $sStyleReadInp_timestamp = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['timestamp']) && $this->nmgp_cmp_hidden['timestamp'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="timestamp" value="<?php echo $this->form_encode_input($timestamp) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_timestamp_line" id="hidden_field_data_timestamp" style="<?php echo $sStyleHidden_timestamp; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_timestamp_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_timestamp_label"><span id="id_label_timestamp"><?php echo $this->nm_new_label['timestamp']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["timestamp"]) &&  $this->nmgp_cmp_readonly["timestamp"] == "on") { 

 ?>
<input type="hidden" name="timestamp" value="<?php echo $this->form_encode_input($timestamp) . "\">" . $timestamp . ""; ?>
<?php } else { ?>
<span id="id_read_on_timestamp" class="sc-ui-readonly-timestamp css_timestamp_line" style="<?php echo $sStyleReadLab_timestamp; ?>"><?php echo $timestamp; ?></span><span id="id_read_off_timestamp" class="css_read_off_timestamp" style="white-space: nowrap;<?php echo $sStyleReadInp_timestamp; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_timestamp_obj" style="" id="id_sc_field_timestamp" type=text name="timestamp" value="<?php echo $this->form_encode_input($timestamp) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['timestamp']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['timestamp']['date_format']; ?>', timeSep: '<?php echo $this->field_config['timestamp']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['timestamp']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_timestamp_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_timestamp_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->timestamp = $old_dt_timestamp;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valor']))
    {
        $this->nm_new_label['valor'] = "Valor";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor = $this->valor;
   $sStyleHidden_valor = '';
   if (isset($this->nmgp_cmp_hidden['valor']) && $this->nmgp_cmp_hidden['valor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor']);
       $sStyleHidden_valor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor = 'display: none;';
   $sStyleReadInp_valor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor']) && $this->nmgp_cmp_readonly['valor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor']);
       $sStyleReadLab_valor = '';
       $sStyleReadInp_valor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor']) && $this->nmgp_cmp_hidden['valor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor" value="<?php echo $this->form_encode_input($valor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_valor_line" id="hidden_field_data_valor" style="<?php echo $sStyleHidden_valor; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_valor_label"><span id="id_label_valor"><?php echo $this->nm_new_label['valor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor"]) &&  $this->nmgp_cmp_readonly["valor"] == "on") { 

 ?>
<input type="hidden" name="valor" value="<?php echo $this->form_encode_input($valor) . "\">" . $valor . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor" class="sc-ui-readonly-valor css_valor_line" style="<?php echo $sStyleReadLab_valor; ?>"><?php echo $this->valor; ?></span><span id="id_read_off_valor" class="css_read_off_valor" style="white-space: nowrap;<?php echo $sStyleReadInp_valor; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_obj" style="" id="id_sc_field_valor" type=text name="valor" value="<?php echo $this->form_encode_input($valor) ?>"
 size=12 alt="{datatype: 'integer', maxLength: 12, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['obs']))
    {
        $this->nm_new_label['obs'] = "Obs";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $obs = $this->obs;
   $sStyleHidden_obs = '';
   if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['obs']);
       $sStyleHidden_obs = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_obs = 'display: none;';
   $sStyleReadInp_obs = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['obs']) && $this->nmgp_cmp_readonly['obs'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['obs']);
       $sStyleReadLab_obs = '';
       $sStyleReadInp_obs = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['obs']) && $this->nmgp_cmp_hidden['obs'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_obs_line" id="hidden_field_data_obs" style="<?php echo $sStyleHidden_obs; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_obs_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_obs_label"><span id="id_label_obs"><?php echo $this->nm_new_label['obs']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["obs"]) &&  $this->nmgp_cmp_readonly["obs"] == "on") { 

 ?>
<input type="hidden" name="obs" value="<?php echo $this->form_encode_input($obs) . "\">" . $obs . ""; ?>
<?php } else { ?>
<span id="id_read_on_obs" class="sc-ui-readonly-obs css_obs_line" style="<?php echo $sStyleReadLab_obs; ?>"><?php echo $this->obs; ?></span><span id="id_read_off_obs" class="css_read_off_obs" style="white-space: nowrap;<?php echo $sStyleReadInp_obs; ?>">
 <input class="sc-js-input scFormObjectOdd css_obs_obj" style="" id="id_sc_field_obs" type=text name="obs" value="<?php echo $this->form_encode_input($obs) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_obs_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_obs_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mesmensal']))
    {
        $this->nm_new_label['mesmensal'] = "Mes Mensal";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mesmensal = $this->mesmensal;
   $sStyleHidden_mesmensal = '';
   if (isset($this->nmgp_cmp_hidden['mesmensal']) && $this->nmgp_cmp_hidden['mesmensal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mesmensal']);
       $sStyleHidden_mesmensal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mesmensal = 'display: none;';
   $sStyleReadInp_mesmensal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mesmensal']) && $this->nmgp_cmp_readonly['mesmensal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mesmensal']);
       $sStyleReadLab_mesmensal = '';
       $sStyleReadInp_mesmensal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mesmensal']) && $this->nmgp_cmp_hidden['mesmensal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mesmensal" value="<?php echo $this->form_encode_input($mesmensal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mesmensal_line" id="hidden_field_data_mesmensal" style="<?php echo $sStyleHidden_mesmensal; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mesmensal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mesmensal_label"><span id="id_label_mesmensal"><?php echo $this->nm_new_label['mesmensal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mesmensal"]) &&  $this->nmgp_cmp_readonly["mesmensal"] == "on") { 

 ?>
<input type="hidden" name="mesmensal" value="<?php echo $this->form_encode_input($mesmensal) . "\">" . $mesmensal . ""; ?>
<?php } else { ?>
<span id="id_read_on_mesmensal" class="sc-ui-readonly-mesmensal css_mesmensal_line" style="<?php echo $sStyleReadLab_mesmensal; ?>"><?php echo $this->mesmensal; ?></span><span id="id_read_off_mesmensal" class="css_read_off_mesmensal" style="white-space: nowrap;<?php echo $sStyleReadInp_mesmensal; ?>">
 <input class="sc-js-input scFormObjectOdd css_mesmensal_obj" style="" id="id_sc_field_mesmensal" type=text name="mesmensal" value="<?php echo $this->form_encode_input($mesmensal) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['mesmensal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['mesmensal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['mesmensal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mesmensal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mesmensal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['status']))
    {
        $this->nm_new_label['status'] = "Status";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $status = $this->status;
   $sStyleHidden_status = '';
   if (isset($this->nmgp_cmp_hidden['status']) && $this->nmgp_cmp_hidden['status'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['status']);
       $sStyleHidden_status = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_status = 'display: none;';
   $sStyleReadInp_status = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['status']) && $this->nmgp_cmp_readonly['status'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['status']);
       $sStyleReadLab_status = '';
       $sStyleReadInp_status = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['status']) && $this->nmgp_cmp_hidden['status'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="status" value="<?php echo $this->form_encode_input($status) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_status_line" id="hidden_field_data_status" style="<?php echo $sStyleHidden_status; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_status_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_status_label"><span id="id_label_status"><?php echo $this->nm_new_label['status']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["status"]) &&  $this->nmgp_cmp_readonly["status"] == "on") { 

 ?>
<input type="hidden" name="status" value="<?php echo $this->form_encode_input($status) . "\">" . $status . ""; ?>
<?php } else { ?>
<span id="id_read_on_status" class="sc-ui-readonly-status css_status_line" style="<?php echo $sStyleReadLab_status; ?>"><?php echo $this->status; ?></span><span id="id_read_off_status" class="css_read_off_status" style="white-space: nowrap;<?php echo $sStyleReadInp_status; ?>">
 <input class="sc-js-input scFormObjectOdd css_status_obj" style="" id="id_sc_field_status" type=text name="status" value="<?php echo $this->form_encode_input($status) ?>"
 size=5 maxlength=5 alt="{datatype: 'text', maxLength: 5, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_status_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_status_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['lead_id']))
    {
        $this->nm_new_label['lead_id'] = "Lead Id";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $lead_id = $this->lead_id;
   $sStyleHidden_lead_id = '';
   if (isset($this->nmgp_cmp_hidden['lead_id']) && $this->nmgp_cmp_hidden['lead_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['lead_id']);
       $sStyleHidden_lead_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_lead_id = 'display: none;';
   $sStyleReadInp_lead_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['lead_id']) && $this->nmgp_cmp_readonly['lead_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['lead_id']);
       $sStyleReadLab_lead_id = '';
       $sStyleReadInp_lead_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['lead_id']) && $this->nmgp_cmp_hidden['lead_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="lead_id" value="<?php echo $this->form_encode_input($lead_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_lead_id_line" id="hidden_field_data_lead_id" style="<?php echo $sStyleHidden_lead_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_lead_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_lead_id_label"><span id="id_label_lead_id"><?php echo $this->nm_new_label['lead_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["lead_id"]) &&  $this->nmgp_cmp_readonly["lead_id"] == "on") { 

 ?>
<input type="hidden" name="lead_id" value="<?php echo $this->form_encode_input($lead_id) . "\">" . $lead_id . ""; ?>
<?php } else { ?>
<span id="id_read_on_lead_id" class="sc-ui-readonly-lead_id css_lead_id_line" style="<?php echo $sStyleReadLab_lead_id; ?>"><?php echo $this->lead_id; ?></span><span id="id_read_off_lead_id" class="css_read_off_lead_id" style="white-space: nowrap;<?php echo $sStyleReadInp_lead_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_lead_id_obj" style="" id="id_sc_field_lead_id" type=text name="lead_id" value="<?php echo $this->form_encode_input($lead_id) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['lead_id']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['lead_id']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['lead_id']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_lead_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_lead_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-27", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-28", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-29", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-30", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_doacoes_auditar_2_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_doacoes_auditar_2_mob");
 parent.scAjaxDetailHeight("form_doacoes_auditar_2_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_doacoes_auditar_2_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_doacoes_auditar_2_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-15").length && $("#sc_b_new_t.sc-unique-btn-15").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-16").length && $("#sc_b_ins_t.sc-unique-btn-16").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-18").length && $("#sc_b_upd_t.sc-unique-btn-18").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-19").length && $("#sc_b_del_t.sc-unique-btn-19").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-22").length && $("#sc_b_sai_t.sc-unique-btn-22").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-23").length && $("#sc_b_sai_t.sc-unique-btn-23").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-25").length && $("#sc_b_sai_t.sc-unique-btn-25").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-26").length && $("#sc_b_sai_t.sc-unique-btn-26").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-27").length && $("#sc_b_ini_b.sc-unique-btn-27").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-28").length && $("#sc_b_ret_b.sc-unique-btn-28").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-29").length && $("#sc_b_avc_b.sc-unique-btn-29").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-30").length && $("#sc_b_fim_b.sc-unique-btn-30").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-20").length && $("#sys_separator.sc-unique-btn-20").is(":visible")) {
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_copy() {
		if ($("#sc_b_clone_t.sc-unique-btn-21").length && $("#sc_b_clone_t.sc-unique-btn-21").is(":visible")) {
			nm_move ('clone');
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_doacoes_auditar_2_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
