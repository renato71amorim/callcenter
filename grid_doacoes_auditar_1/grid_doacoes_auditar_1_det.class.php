<?php
//--- 
class grid_doacoes_auditar_1_det
{
   var $Ini;
   var $Erro;
   var $Db;
   var $nm_data;
   var $NM_raiz_img; 
   var $nmgp_botoes; 
   var $nm_location;
   var $codigoidentificador;
   var $codigo;
   var $nome;
   var $sexo;
   var $tipo;
   var $ddd;
   var $fone1;
   var $fone2;
   var $operador;
   var $usuario;
   var $codigorua;
   var $logadouro;
   var $numero;
   var $complemento;
   var $pontodereferencia;
   var $bairro;
   var $localidade;
   var $setor_rua;
   var $cep;
   var $dataemissao;
   var $datavencimento;
   var $timestamp;
   var $valor;
   var $obs;
   var $mesmensal;
   var $status;
   var $lead_id;
 function monta_det()
 {
    global 
           $nm_saida, $nm_lang, $nmgp_cor_print, $nmgp_tipo_pdf;
    $this->nmgp_botoes['det_pdf'] = "on";
    $this->nmgp_botoes['pdf'] = "on";
    $this->nmgp_botoes['det_print'] = "on";
    $this->nmgp_botoes['print'] = "on";
    $this->nmgp_botoes['html'] = "on";
    $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
    if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_doacoes_auditar_1']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_doacoes_auditar_1']['btn_display']))
    {
        foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_doacoes_auditar_1']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
        {
            $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
        }
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['embutida_form']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['embutida_form'])
    {
    $this->nmgp_botoes['det_pdf']   = "off";
    $this->nmgp_botoes['det_print'] = "off";
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['campos_busca']))
    { 
        $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['campos_busca'];
        if ($_SESSION['scriptcase']['charset'] != "UTF-8")
        {
            $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
        $this->sexo = $Busca_temp['sexo']; 
        $tmp_pos = strpos($this->sexo, "##@@");
        if ($tmp_pos !== false && !is_array($this->sexo))
        {
            $this->sexo = substr($this->sexo, 0, $tmp_pos);
        }
        $this->codigoidentificador = $Busca_temp['codigoidentificador']; 
        $tmp_pos = strpos($this->codigoidentificador, "##@@");
        if ($tmp_pos !== false && !is_array($this->codigoidentificador))
        {
            $this->codigoidentificador = substr($this->codigoidentificador, 0, $tmp_pos);
        }
        $this->codigoidentificador_2 = $Busca_temp['codigoidentificador_input_2']; 
        $this->codigo = $Busca_temp['codigo']; 
        $tmp_pos = strpos($this->codigo, "##@@");
        if ($tmp_pos !== false && !is_array($this->codigo))
        {
            $this->codigo = substr($this->codigo, 0, $tmp_pos);
        }
        $this->codigo_2 = $Busca_temp['codigo_input_2']; 
        $this->nome = $Busca_temp['nome']; 
        $tmp_pos = strpos($this->nome, "##@@");
        if ($tmp_pos !== false && !is_array($this->nome))
        {
            $this->nome = substr($this->nome, 0, $tmp_pos);
        }
    } 
    $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['where_orig'];
    $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['where_pesq'];
    $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['where_pesq_filtro'];
    $this->nm_field_dinamico = array();
    $this->nm_order_dinamico = array();
    $this->nm_data = new nm_data("pt_br");
    $this->NM_raiz_img  = ""; 
    if ($this->Ini->sc_export_ajax_img)
    { 
        $this->NM_raiz_img = $this->Ini->root; 
    } 
    $this->sc_proc_grid = false; 
    include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
    $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['seq_dir'] = 0; 
    $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['sub_dir'] = array(); 
   $Str_date = strtolower($_SESSION['scriptcase']['reg_conf']['date_format']);
   $Lim   = strlen($Str_date);
   $Ult   = "";
   $Arr_D = array();
   for ($I = 0; $I < $Lim; $I++)
   {
       $Char = substr($Str_date, $I, 1);
       if ($Char != $Ult)
       {
           $Arr_D[] = $Char;
       }
       $Ult = $Char;
   }
   $Prim = true;
   $Str  = "";
   foreach ($Arr_D as $Cada_d)
   {
       $Str .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
       $Str .= $Cada_d;
       $Prim = false;
   }
   $Str = str_replace("a", "Y", $Str);
   $Str = str_replace("y", "Y", $Str);
   $nm_data_fixa = date($Str); 
   $this->nm_data->SetaData(date("Y/m/d H:i:s"), "YYYY/MM/DD HH:II:SS"); 
   $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
       $nmgp_select = "SELECT CodigoIdentificador, Codigo, Nome, Sexo, Tipo, DDD, Fone1, Fone2, Operador, Usuario, CodigoRua, Logadouro, Numero, Complemento, PontoDeReferencia, Bairro, Localidade, Setor_Rua, CEP, DataEmissao, DataVencimento, `TimeStamp` as sc_def_col_1, Valor, Obs, MesMensal, Status, lead_id from " . $this->Ini->nm_tabela; 
   $parms_det = explode("*PDet*", $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['chave_det']) ; 
   foreach ($parms_det as $key => $cada_par)
   {
       $parms_det[$key] = $this->Db->qstr($parms_det[$key]);
       $parms_det[$key] = substr($parms_det[$key], 1, strlen($parms_det[$key]) - 2);
   } 
   $nmgp_select .= " where  CodigoIdentificador = $parms_det[0]" ;  
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
   $rs = $this->Db->Execute($nmgp_select) ; 
   if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
   { 
       $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit ; 
   }  
   $this->codigoidentificador = $rs->fields[0] ;  
   $this->codigoidentificador = (string)$this->codigoidentificador;
   $this->codigo = $rs->fields[1] ;  
   $this->codigo = (string)$this->codigo;
   $this->nome = $rs->fields[2] ;  
   $this->sexo = $rs->fields[3] ;  
   $this->tipo = $rs->fields[4] ;  
   $this->ddd = $rs->fields[5] ;  
   $this->fone1 = $rs->fields[6] ;  
   $this->fone2 = $rs->fields[7] ;  
   $this->operador = $rs->fields[8] ;  
   $this->operador = (string)$this->operador;
   $this->usuario = $rs->fields[9] ;  
   $this->codigorua = $rs->fields[10] ;  
   $this->codigorua = (string)$this->codigorua;
   $this->logadouro = $rs->fields[11] ;  
   $this->numero = $rs->fields[12] ;  
   $this->complemento = $rs->fields[13] ;  
   $this->pontodereferencia = $rs->fields[14] ;  
   $this->bairro = $rs->fields[15] ;  
   $this->localidade = $rs->fields[16] ;  
   $this->setor_rua = $rs->fields[17] ;  
   $this->setor_rua = (string)$this->setor_rua;
   $this->cep = $rs->fields[18] ;  
   $this->dataemissao = $rs->fields[19] ;  
   $this->datavencimento = $rs->fields[20] ;  
   $this->timestamp = $rs->fields[21] ;  
   $this->valor = $rs->fields[22] ;  
   $this->valor = (strpos(strtolower($this->valor), "e")) ? (float)$this->valor : $this->valor; 
   $this->valor = (string)$this->valor;
   $this->obs = $rs->fields[23] ;  
   $this->mesmensal = $rs->fields[24] ;  
   $this->mesmensal = (string)$this->mesmensal;
   $this->status = $rs->fields[25] ;  
   $this->lead_id = $rs->fields[26] ;  
   $this->lead_id = (string)$this->lead_id;
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['cmp_acum']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['cmp_acum']))
   {
       $parms_acum = explode(";", $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['cmp_acum']);
       foreach ($parms_acum as $cada_par)
       {
          $cada_val = explode("=", $cada_par);
          $this->$cada_val[0] = $cada_val[1];
       }
   }
//--- 
   $nm_saida->saida("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"\r\n");
   $nm_saida->saida("            \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">\r\n");
   $nm_saida->saida("<html" . $_SESSION['scriptcase']['reg_conf']['html_dir'] . ">\r\n");
   $nm_saida->saida("<HEAD>\r\n");
   $nm_saida->saida("   <TITLE>" . $this->Ini->Nm_lang['lang_othr_detl_titl'] . " - doacoes_auditar</TITLE>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Content-Type\" content=\"text/html; charset=" . $_SESSION['scriptcase']['charset_html'] . "\" />\r\n");
   $nm_saida->saida(" <META http-equiv=\"Expires\" content=\"Fri, Jan 01 1900 00:00:00 GMT\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Last-Modified\" content=\"" . gmdate("D, d M Y H:i:s") . " GMT\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"no-store, no-cache, must-revalidate\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"post-check=0, pre-check=0\"/>\r\n");
   $nm_saida->saida(" <META http-equiv=\"Pragma\" content=\"no-cache\"/>\r\n");
   $nm_saida->saida(" <link rel=\"shortcut icon\" href=\"../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png\">\r\n");
   if ($_SESSION['scriptcase']['proc_mobile'])
   {
       $nm_saida->saida(" <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />\r\n");
   }

           $nm_saida->saida("   <script type=\"text/javascript\" src=\"grid_doacoes_auditar_1_jquery.js\"></script>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\" src=\"grid_doacoes_auditar_1_ajax.js\"></script>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\" src=\"grid_doacoes_auditar_1_message.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery/js/jquery.js\"></script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/malsup-blockui/jquery.blockUI.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("  var sc_pathToTB = '" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/';\r\n");
           $nm_saida->saida("  var sc_tbLangClose = \"" . html_entity_decode($this->Ini->Nm_lang['lang_tb_close'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\";\r\n");
           $nm_saida->saida("  var sc_tbLangEsc = \"" . html_entity_decode($this->Ini->Nm_lang['lang_tb_esc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\";\r\n");
           $nm_saida->saida(" </script>\r\n");
   $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox-compressed.js\"></script>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("     var sc_ajaxBg = '" . $this->Ini->Color_bg_ajax . "';\r\n");
           $nm_saida->saida("     var sc_ajaxBordC = '" . $this->Ini->Border_c_ajax . "';\r\n");
           $nm_saida->saida("     var sc_ajaxBordS = '" . $this->Ini->Border_s_ajax . "';\r\n");
           $nm_saida->saida("     var sc_ajaxBordW = '" . $this->Ini->Border_w_ajax . "';\r\n");
           $nm_saida->saida("   </script>\r\n");
   $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox.css\" type=\"text/css\" media=\"screen\" />\r\n");
   if (($this->Ini->sc_export_ajax || $this->Ini->Export_det_zip) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['det_print'] == "print")
   {
       if (strtoupper($nmgp_cor_print) == "PB")
       {
           $NM_css_file = $this->Ini->str_schema_all . "_grid_bw.css";
           $NM_css_dir  = $this->Ini->str_schema_all . "_grid_bw" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
       }
       else
       {
           $NM_css_file = $this->Ini->str_schema_all . "_grid.css";
           $NM_css_dir  = $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
       }
       $NM_css_cmp  = $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_det_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) . ".css";
       $nm_saida->saida("  <style type=\"text/css\">\r\n");
       if (is_file($this->Ini->path_css . $NM_css_file))
       {
           $NM_css_attr = file($this->Ini->path_css . $NM_css_file);
           foreach ($NM_css_attr as $NM_line_css)
           {
               $nm_saida->saida(" " . $NM_line_css . " \r\n");
           }
       }
       if (is_file($this->Ini->path_css . $NM_css_dir))
       {
           $NM_css_attr = file($this->Ini->path_css . $NM_css_dir);
           foreach ($NM_css_attr as $NM_line_css)
           {
               $nm_saida->saida(" " . $NM_line_css . " \r\n");
           }
       }
       if (is_file($this->Ini->root . $NM_css_cmp))
       {
           $NM_css_attr = file($this->Ini->root . $NM_css_cmp);
           foreach ($NM_css_attr as $NM_line_css)
           {
               $nm_saida->saida(" " . $NM_line_css . " \r\n");
           }
       }
       $nm_saida->saida("  </style>\r\n");
   }
   elseif (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['det_print'] == "print" && strtoupper($nmgp_cor_print) == "PB") || $nmgp_tipo_pdf == "pb")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid_bw.css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid_bw" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_det_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) . ".css\" />\r\n");
   }
   else
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid.css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "_lib/css/" . $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_det_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) . ".css\" />\r\n");
   }
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/font-awesome/css/all.min.css\" type=\"text/css\" media=\"screen\" />\r\n");
   if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
   { 
       $nm_saida->saida(" <link href=\"" . $this->Ini->str_google_fonts . "\" rel=\"stylesheet\" /> \r\n");
   } 
   if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['pdf_det'] && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['det_print'] != "print")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/buttons/" . $this->Ini->Str_btn_css . "\" /> \r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"../_lib/css/" . $_SESSION['scriptcase']['erro']['str_schema'] . "\" type=\"text/css\" media=\"screen\" />\r\n");
       $nm_saida->saida(" <link rel=\"stylesheet\" href=\"../_lib/css/" . $_SESSION['scriptcase']['erro']['str_schema_dir'] . "\" type=\"text/css\" media=\"screen\" />\r\n");
   }
   $nm_saida->saida("</HEAD>\r\n");
   if (!$this->Ini->Export_html_zip && !$this->Ini->Export_det_zip && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['det_print'] == "print")
   {
       $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/buttons/" . $this->Ini->Str_btn_css . "\" /> \r\n");
       $nm_saida->saida("  <body class=\"scGridPage\"  style=\"-webkit-print-color-adjust: exact;\">\r\n");
       $nm_saida->saida("   <TABLE id=\"sc_table_print\" cellspacing=0 cellpadding=0 align=\"center\" valign=\"top\" >\r\n");
       $nm_saida->saida("     <TR>\r\n");
       $nm_saida->saida("       <TD>\r\n");
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "prit_web_page()", "prit_web_page()", "Bprint_print", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("           $Cod_Btn \r\n");
       $nm_saida->saida("       </TD>\r\n");
       $nm_saida->saida("     </TR>\r\n");
       $nm_saida->saida("   </TABLE>\r\n");
       $nm_saida->saida("  <script type=\"text/javascript\">\r\n");
       $nm_saida->saida("     function prit_web_page()\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        document.getElementById('sc_table_print').style.display = 'none';\r\n");
       $nm_saida->saida("        var is_safari = navigator.userAgent.indexOf(\"Safari\") > -1;\r\n");
       $nm_saida->saida("        var is_chrome = navigator.userAgent.indexOf('Chrome') > -1\r\n");
       $nm_saida->saida("        if ((is_chrome) && (is_safari)) {is_safari=false;}\r\n");
       $nm_saida->saida("        window.print();\r\n");
       $nm_saida->saida("        if (is_safari) {setTimeout(\"window.close()\", 1000);} else {window.close();}\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("  </script>\r\n");
   }
   else
   {
       $nm_saida->saida("  <body class=\"scGridPage\">\r\n");
   }
   $nm_saida->saida("  " . $this->Ini->Ajax_result_set . "\r\n");
           $nm_saida->saida("  <div id=\"id_div_process\" style=\"display: none; margin: 10px; whitespace: nowrap\" class=\"scFormProcessFixed\"><span class=\"scFormProcess\"><img border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" />&nbsp;" . $this->Ini->Nm_lang['lang_othr_prcs'] . "...</span></div>\r\n");
           $nm_saida->saida("  <div id=\"id_div_process_block\" style=\"display: none; margin: 10px; whitespace: nowrap\"><span class=\"scFormProcess\"><img border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" />&nbsp;" . $this->Ini->Nm_lang['lang_othr_prcs'] . "...</span></div>\r\n");
   $nm_saida->saida("<table border=0 align=\"center\" valign=\"top\" ><tr><td style=\"padding: 0px\"><div class=\"scGridBorder\"><table width='100%' cellspacing=0 cellpadding=0><tr><td>\r\n");
   $nm_saida->saida("<tr><td class=\"scGridTabelaTd\">\r\n");
   $nm_saida->saida("<style>\r\n");
   $nm_saida->saida("#lin1_col1 { padding-left:9px; padding-top:7px;  height:27px; overflow:hidden; text-align:left;}			 \r\n");
   $nm_saida->saida("#lin1_col2 { padding-right:9px; padding-top:7px; height:27px; text-align:right; overflow:hidden;   font-size:12px; font-weight:normal;}\r\n");
   $nm_saida->saida("</style>\r\n");
   $nm_saida->saida("<div style=\"width: 100%\">\r\n");
   $nm_saida->saida(" <div class=\"scGridHeader\" style=\"height:11px; display: block; border-width:0px; \"></div>\r\n");
   $nm_saida->saida(" <div style=\"height:37px; border-width:0px 0px 1px 0px;  border-style: dashed; border-color:#ddd; display: block\">\r\n");
   $nm_saida->saida(" 	<table style=\"width:100%; border-collapse:collapse; padding:0;\">\r\n");
   $nm_saida->saida("    	<tr>\r\n");
   $nm_saida->saida("        	<td id=\"lin1_col1\" class=\"scGridHeaderFont\"><span>" . $this->Ini->Nm_lang['lang_othr_detl_titl'] . " - doacoes_auditar</span></td>\r\n");
   $nm_saida->saida("            <td id=\"lin1_col2\" class=\"scGridHeaderFont\"><span></span></td>\r\n");
   $nm_saida->saida("        </tr>\r\n");
   $nm_saida->saida("    </table>		 \r\n");
   $nm_saida->saida(" </div>\r\n");
   $nm_saida->saida("</div>\r\n");
   $nm_saida->saida("  </TD>\r\n");
   $nm_saida->saida(" </TR>\r\n");
   if(isset($_SESSION['scriptcase']['proc_mobile']) && $_SESSION['scriptcase']['proc_mobile'])
   {
       $this->nmgp_barra_det_top_mobile();
   }
   else
   {
       $this->nmgp_barra_det_top_normal();
   }
   $nm_saida->saida("<tr><td class=\"scGridTabelaTd\" id='idDetailTable'>\r\n");
   $nm_saida->saida("<TABLE style=\"padding: 0px; spacing: 0px; border-width: 0px;\" class=\"scGridTabela\" align=\"center\" valign=\"top\" width=\"100%\">\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['codigoidentificador'])) ? $this->New_label['codigoidentificador'] : "Codigo Identificador"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->codigoidentificador))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_codigoidentificador_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_codigoidentificador_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['codigo'])) ? $this->New_label['codigo'] : "Codigo"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->codigo))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_codigo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_codigo_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['nome'])) ? $this->New_label['nome'] : "Nome"; 
   $conteudo = trim(sc_strip_script($this->nome)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_nome_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_nome_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['sexo'])) ? $this->New_label['sexo'] : "Sexo"; 
   $conteudo = trim(sc_strip_script($this->sexo)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_sexo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_sexo_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['tipo'])) ? $this->New_label['tipo'] : "Tipo"; 
   $conteudo = trim(sc_strip_script($this->tipo)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_tipo_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_tipo_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['ddd'])) ? $this->New_label['ddd'] : "DDD"; 
   $conteudo = trim(sc_strip_script($this->ddd)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_ddd_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_ddd_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['fone1'])) ? $this->New_label['fone1'] : "Fone 1"; 
   $conteudo = trim(sc_strip_script($this->fone1)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_fone1_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_fone1_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['fone2'])) ? $this->New_label['fone2'] : "Fone 2"; 
   $conteudo = trim(sc_strip_script($this->fone2)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_fone2_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_fone2_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['operador'])) ? $this->New_label['operador'] : "Operador"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->operador))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_operador_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_operador_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['usuario'])) ? $this->New_label['usuario'] : "Usuario"; 
   $conteudo = trim(sc_strip_script($this->usuario)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_usuario_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_usuario_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['codigorua'])) ? $this->New_label['codigorua'] : "Codigo Rua"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->codigorua))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_codigorua_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_codigorua_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['logadouro'])) ? $this->New_label['logadouro'] : "Logadouro"; 
   $conteudo = trim(sc_strip_script($this->logadouro)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_logadouro_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_logadouro_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['numero'])) ? $this->New_label['numero'] : "Numero"; 
   $conteudo = trim(sc_strip_script($this->numero)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_numero_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_numero_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['complemento'])) ? $this->New_label['complemento'] : "Complemento"; 
   $conteudo = trim(sc_strip_script($this->complemento)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_complemento_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_complemento_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['pontodereferencia'])) ? $this->New_label['pontodereferencia'] : "Ponto De Referencia"; 
   $conteudo = trim(sc_strip_script($this->pontodereferencia)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_pontodereferencia_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_pontodereferencia_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['bairro'])) ? $this->New_label['bairro'] : "Bairro"; 
   $conteudo = trim(sc_strip_script($this->bairro)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_bairro_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_bairro_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['localidade'])) ? $this->New_label['localidade'] : "Localidade"; 
   $conteudo = trim(sc_strip_script($this->localidade)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_localidade_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_localidade_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['setor_rua'])) ? $this->New_label['setor_rua'] : "Setor Rua"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->setor_rua))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_setor_rua_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_setor_rua_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['cep'])) ? $this->New_label['cep'] : "CEP"; 
   $conteudo = trim(sc_strip_script($this->cep)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_cep_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_cep_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['dataemissao'])) ? $this->New_label['dataemissao'] : "Data Emissao"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->dataemissao))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (substr($conteudo, 10, 1) == "-") 
               { 
                  $conteudo = substr($conteudo, 0, 10) . " " . substr($conteudo, 11);
               } 
               if (substr($conteudo, 13, 1) == ".") 
               { 
                  $conteudo = substr($conteudo, 0, 13) . ":" . substr($conteudo, 14, 2) . ":" . substr($conteudo, 17);
               } 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD HH:II:SS");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_dataemissao_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_dataemissao_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['datavencimento'])) ? $this->New_label['datavencimento'] : "Data Vencimento"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->datavencimento))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (substr($conteudo, 10, 1) == "-") 
               { 
                  $conteudo = substr($conteudo, 0, 10) . " " . substr($conteudo, 11);
               } 
               if (substr($conteudo, 13, 1) == ".") 
               { 
                  $conteudo = substr($conteudo, 0, 13) . ":" . substr($conteudo, 14, 2) . ":" . substr($conteudo, 17);
               } 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD HH:II:SS");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_datavencimento_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_datavencimento_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['timestamp'])) ? $this->New_label['timestamp'] : "Time Stamp"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->timestamp))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
               if (substr($conteudo, 10, 1) == "-") 
               { 
                  $conteudo = substr($conteudo, 0, 10) . " " . substr($conteudo, 11);
               } 
               if (substr($conteudo, 13, 1) == ".") 
               { 
                  $conteudo = substr($conteudo, 0, 13) . ":" . substr($conteudo, 14, 2) . ":" . substr($conteudo, 17);
               } 
               $conteudo_x =  $conteudo;
               nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
               if (is_numeric($conteudo_x) && $conteudo_x > 0) 
               { 
                   $this->nm_data->SetaData($conteudo, "YYYY-MM-DD HH:II:SS");
                   $conteudo = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
               } 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_timestamp_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_timestamp_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['valor'])) ? $this->New_label['valor'] : "Valor"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->valor))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_valor_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_valor_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['obs'])) ? $this->New_label['obs'] : "Obs"; 
   $conteudo = trim(sc_strip_script($this->obs)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_obs_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_obs_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['mesmensal'])) ? $this->New_label['mesmensal'] : "Mes Mensal"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->mesmensal))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_mesmensal_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_mesmensal_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "";
   }
   else
   {
       $this->SC_nowrap = "";
   }
   $SC_Label = (isset($this->New_label['status'])) ? $this->New_label['status'] : "Status"; 
   $conteudo = trim(sc_strip_script($this->status)); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_status_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldEvenVert css_status_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("  <TR class=\"scGridLabel\">\r\n");
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['opcao'] == "pdf")
   {
       $this->SC_nowrap = "NOWRAP";
   }
   else
   {
       $this->SC_nowrap = "NOWRAP";
   }
   $SC_Label = (isset($this->New_label['lead_id'])) ? $this->New_label['lead_id'] : "Lead Id"; 
   $conteudo = trim(NM_encode_input(sc_strip_script($this->lead_id))); 
          if ($conteudo === "") 
          { 
              $conteudo = "&nbsp;" ; 
          } 
          else    
          { 
              nmgp_Form_Num_Val($conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
   $nm_saida->saida("    <TD class=\"scGridLabelFont css_lead_id_det_label\"  >" . nl2br($SC_Label) . "</TD>\r\n");
   $nm_saida->saida("    <TD class=\"scGridFieldOddVert css_lead_id_det_line\"  " . $this->SC_nowrap . " ALIGN=\"\" VALIGN=\"\">" . $conteudo . "</TD>\r\n");
   $nm_saida->saida("   \r\n");
   $nm_saida->saida("  </TR>\r\n");
   $nm_saida->saida("</TABLE>\r\n");
   if(isset($_SESSION['scriptcase']['proc_mobile']) && $_SESSION['scriptcase']['proc_mobile'])
   {
   }
   $rs->Close(); 
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
   $nm_saida->saida(" </div>\r\n");
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
   $nm_saida->saida(" </div>\r\n");
   $nm_saida->saida("  </td>\r\n");
   $nm_saida->saida(" </tr>\r\n");
   $nm_saida->saida(" </table>\r\n");
//--- 
//--- 
   $nm_saida->saida("<form name=\"F3\" method=post\r\n");
   $nm_saida->saida("                  target=\"_self\"\r\n");
   $nm_saida->saida("                  action=\"./\">\r\n");
   $nm_saida->saida("<input type=hidden name=\"nmgp_opcao\" value=\"igual\"/>\r\n");
   $nm_saida->saida("<input type=hidden name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/>\r\n");
   $nm_saida->saida("<input type=hidden name=\"script_case_session\" value=\"" . NM_encode_input(session_id()) . "\"/>\r\n");
   $nm_saida->saida("</form>\r\n");
   $nm_saida->saida("<form name=\"F6\" method=\"post\" \r\n");
   $nm_saida->saida("                  action=\"./\" \r\n");
   $nm_saida->saida("                  target=\"_self\" style=\"display: none\"> \r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"script_case_session\" value=\"" . NM_encode_input(session_id()) . "\"/> \r\n");
   $nm_saida->saida("</form> \r\n");
   $nm_saida->saida("<form name=\"Fprint\" method=\"post\" \r\n");
   $nm_saida->saida("                  action=\"grid_doacoes_auditar_1_iframe_prt.php\" \r\n");
   $nm_saida->saida("                  target=\"jan_print\" style=\"display: none\"> \r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"path_botoes\" value=\"" . $this->Ini->path_botoes . "\"/> \r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"opcao\" value=\"det_print\"/>\r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"nmgp_opcao\" value=\"det_print\"/>\r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"cor_print\" value=\"PB\"/>\r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"nmgp_cor_print\" value=\"PB\"/>\r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"nmgp_password\" value=\"\"/>\r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida(" <input type=\"hidden\" name=\"script_case_session\" value=\"" . NM_encode_input(session_id()) . "\"/> \r\n");
   $nm_saida->saida("</form> \r\n");
   $nm_saida->saida("<script language=JavaScript>\r\n");
   $nm_saida->saida("   function nm_submit_modal(parms, t_parent) \r\n");
   $nm_saida->saida("   { \r\n");
   $nm_saida->saida("      if (t_parent == 'S' && typeof parent.tb_show == 'function')\r\n");
   $nm_saida->saida("      { \r\n");
   $nm_saida->saida("           parent.tb_show('', parms, '');\r\n");
   $nm_saida->saida("      } \r\n");
   $nm_saida->saida("      else\r\n");
   $nm_saida->saida("      { \r\n");
   $nm_saida->saida("         tb_show('', parms, '');\r\n");
   $nm_saida->saida("      } \r\n");
   $nm_saida->saida("   } \r\n");
   $nm_saida->saida("   function nm_move(tipo) \r\n");
   $nm_saida->saida("   { \r\n");
   $nm_saida->saida("      document.F6.target = \"_self\"; \r\n");
   $nm_saida->saida("      document.F6.submit() ;\r\n");
   $nm_saida->saida("      return;\r\n");
   $nm_saida->saida("   } \r\n");
   $nm_saida->saida("   function nm_mostra_doc(campo1)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       NovaJanela = window.open (\"grid_doacoes_auditar_1_doc.php?nmgp_parms=\" + campo1, \"ScriptCase\", \"resizable\");\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_gp_move(x, y, z, p, g, crt, ajax, chart_level, page_break_pdf, SC_module_export, use_pass_pdf, pdf_all_cab, pdf_all_label, pdf_label_group, pdf_zip) \r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       if (\"pdf_det\" == x && \"S\" == ajax)\r\n");
   $nm_saida->saida("       {\r\n");
   $nm_saida->saida("           $('#TB_window').remove();\r\n");
   $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
   $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=pdf_det&sAdd=__E__nmgp_tipo_pdf=\" + z + \"__E__sc_parms_pdf=\" + p + \"__E__sc_create_charts=\" + crt + \"__E__sc_graf_pdf=\" + g + \"__E__chart_level=\" + chart_level + \"__E__Det_use_pass_pdf=\" + use_pass_pdf + \"__E__Det_pdf_zip=\" + pdf_zip + \"&nm_opc=pdf_det&KeepThis=true&TB_iframe=true&modal=true\", '');\r\n");
   $nm_saida->saida("       }\r\n");
   $nm_saida->saida("       else\r\n");
   $nm_saida->saida("       {\r\n");
   $nm_saida->saida("           window.location = \"" . $this->Ini->path_link . "grid_doacoes_auditar_1/index.php?nmgp_opcao=pdf_det&nmgp_tipo_pdf=\" + z + \"&nmgp_parms_pdf=\" + p +  \"&nmgp_graf_pdf=\" + g + \"&Det_use_pass_pdf=\" + use_pass_pdf + \"&Det_pdf_zip=\" + pdf_zip + \"&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&script_case_session=" . session_id() . "\";\r\n");
   $nm_saida->saida("       }\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("   function nm_gp_print_conf(tp, cor, res_cons, password, ajax, str_type, bol_param)\r\n");
   $nm_saida->saida("   {\r\n");
   $nm_saida->saida("       if (\"D\" == ajax)\r\n");
   $nm_saida->saida("       {\r\n");
   $nm_saida->saida("           $('#TB_window').remove();\r\n");
   $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
   $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\"+ str_type +\"&sAdd=__E__nmgp_tipo_print=\" + tp + \"__E__nmgp_cor_print=\" + cor + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
   $nm_saida->saida("       }\r\n");
   $nm_saida->saida("       else\r\n");
   $nm_saida->saida("       {\r\n");
   $nm_saida->saida("          document.Fprint.nmgp_password.value = password;\r\n");
   $nm_saida->saida("          document.Fprint.cor_print.value = cor;\r\n");
   $nm_saida->saida("          document.Fprint.nmgp_cor_print.value = cor;\r\n");
   $nm_saida->saida("          if (password != \"\")\r\n");
   $nm_saida->saida("          {\r\n");
   $nm_saida->saida("              document.Fprint.action=\"./\";\r\n");
   $nm_saida->saida("              document.Fprint.target=\"_self\";\r\n");
   $nm_saida->saida("          }\r\n");
   $nm_saida->saida("          else\r\n");
   $nm_saida->saida("          {\r\n");
   $nm_saida->saida("              window.open('','jan_print','location=no,menubar=no,resizable,scrollbars,status=no,toolbar=no');\r\n");
   $nm_saida->saida("          }\r\n");
   $nm_saida->saida("          document.Fprint.submit() ;\r\n");
   $nm_saida->saida("      }\r\n");
   $nm_saida->saida("   }\r\n");
   $nm_saida->saida("</script>\r\n");
   $nm_saida->saida("</body>\r\n");
   $nm_saida->saida("</html>\r\n");
 }
   function nmgp_barra_det_top_normal()
   {
      global $nm_saida;
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['det_print'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['pdf_det']) 
   { 
       $nm_saida->saida("   <tr><td class=\"scGridTabelaTd\">\r\n");
       $nm_saida->saida("    <table class=\"scGridToolbar\" style=\"padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top;\" valign=\"top\" width=\"100%\"><tr>\r\n");
       $nm_saida->saida("     <td class=\"scGridToolbarPadding\" nowrap valign=\"middle\" align=\"left\" width=\"33%\">\r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"scGridToolbarPadding\" nowrap valign=\"middle\" align=\"center\" width=\"33%\"> \r\n");
       if ($this->nmgp_botoes['det_pdf'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bpdf", "", "", "Dpdf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_config_pdf.php?nm_opc=pdf_det&nm_target=0&nm_cor=cor&papel=1&orientacao=1&largura=1200&conf_larg=S&conf_fonte=10&language=pt_br&conf_socor=S&sc_ver_93=" . s . "&password=n&pdf_zip=N&KeepThis=false&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       if ($this->nmgp_botoes['det_print'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "", "", "Dprint_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_config_print.php?nm_opc=detalhe&nm_cor=PB&password=n&language=pt_br&KeepThis=true&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bvoltar", "document.F3.submit();", "document.F3.submit();", "sc_b_sai_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("           $Cod_Btn \r\n");
       $nm_saida->saida("         </td> \r\n");
       $nm_saida->saida("          <td class=\"scGridToolbarPadding\" nowrap valign=\"middle\" align=\"right\" width=\"33%\"> \r\n");
       $nm_saida->saida("     </td>\r\n");
       $nm_saida->saida("    </tr></table>\r\n");
       $nm_saida->saida("   </td></tr>\r\n");
   } 
   }
   function nmgp_barra_det_top_mobile()
   {
      global $nm_saida;
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['det_print'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_doacoes_auditar_1']['pdf_det']) 
   { 
       $nm_saida->saida("   <tr><td class=\"scGridTabelaTd\">\r\n");
       $nm_saida->saida("    <table class=\"scGridToolbar\" style=\"padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top;\" valign=\"top\" width=\"100%\"><tr>\r\n");
       $nm_saida->saida("     <td class=\"scGridToolbarPadding\" nowrap valign=\"middle\" align=\"left\" width=\"33%\">\r\n");
       if ($this->nmgp_botoes['det_pdf'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bpdf", "", "", "Dpdf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_config_pdf.php?nm_opc=pdf_det&nm_target=0&nm_cor=cor&papel=1&orientacao=1&largura=1200&conf_larg=S&conf_fonte=10&language=pt_br&conf_socor=S&sc_ver_93=" . s . "&password=n&pdf_zip=N&KeepThis=false&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       if ($this->nmgp_botoes['det_print'] == "on")
       {
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "", "", "Dprint_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->path_link . "grid_doacoes_auditar_1/grid_doacoes_auditar_1_config_print.php?nm_opc=detalhe&nm_cor=PB&password=n&language=pt_br&KeepThis=true&TB_iframe=true&modal=true", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
       }
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bvoltar", "document.F3.submit();", "document.F3.submit();", "sc_b_sai_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("           $Cod_Btn \r\n");
       $nm_saida->saida("     </td>\r\n");
       $nm_saida->saida("    </tr></table>\r\n");
       $nm_saida->saida("   </td></tr>\r\n");
   } 
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont2 >= $tam_campo)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
}
