<?php
//
class form_vicidial_users_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $user_id;
   var $user;
   var $pass;
   var $full_name;
   var $user_level;
   var $user_group;
   var $phone_login;
   var $phone_pass;
   var $delete_users;
   var $delete_user_groups;
   var $delete_lists;
   var $delete_campaigns;
   var $delete_ingroups;
   var $delete_remote_agents;
   var $load_leads;
   var $campaign_detail;
   var $ast_admin_access;
   var $ast_delete_phones;
   var $delete_scripts;
   var $modify_leads;
   var $hotkeys_active;
   var $change_agent_campaign;
   var $agent_choose_ingroups;
   var $closer_campaigns;
   var $scheduled_callbacks;
   var $agentonly_callbacks;
   var $agentcall_manual;
   var $vicidial_recording;
   var $vicidial_transfers;
   var $delete_filters;
   var $alter_agent_interface_options;
   var $closer_default_blended;
   var $delete_call_times;
   var $modify_call_times;
   var $modify_users;
   var $modify_campaigns;
   var $modify_lists;
   var $modify_scripts;
   var $modify_filters;
   var $modify_ingroups;
   var $modify_usergroups;
   var $modify_remoteagents;
   var $modify_servers;
   var $view_reports;
   var $vicidial_recording_override;
   var $alter_custdata_override;
   var $qc_enabled;
   var $qc_user_level;
   var $qc_pass;
   var $qc_finish;
   var $qc_commit;
   var $add_timeclock_log;
   var $modify_timeclock_log;
   var $delete_timeclock_log;
   var $alter_custphone_override;
   var $vdc_agent_api_access;
   var $modify_inbound_dids;
   var $delete_inbound_dids;
   var $active;
   var $alert_enabled;
   var $download_lists;
   var $agent_shift_enforcement_override;
   var $manager_shift_enforcement_override;
   var $shift_override_flag;
   var $export_reports;
   var $delete_from_dnc;
   var $email;
   var $user_code;
   var $territory;
   var $allow_alerts;
   var $agent_choose_territories;
   var $custom_one;
   var $custom_two;
   var $custom_three;
   var $custom_four;
   var $custom_five;
   var $voicemail_id;
   var $agent_call_log_view_override;
   var $callcard_admin;
   var $agent_choose_blended;
   var $realtime_block_user_info;
   var $custom_fields_modify;
   var $force_change_password;
   var $agent_lead_search_override;
   var $modify_shifts;
   var $modify_phones;
   var $modify_carriers;
   var $modify_labels;
   var $modify_statuses;
   var $modify_voicemail;
   var $modify_audiostore;
   var $modify_moh;
   var $modify_tts;
   var $preset_contact_search;
   var $modify_contacts;
   var $modify_same_user_level;
   var $admin_hide_lead_data;
   var $admin_hide_phone_data;
   var $agentcall_email;
   var $modify_email_accounts;
   var $failed_login_count;
   var $last_login_date;
   var $last_login_date_hora;
   var $last_ip;
   var $pass_hash;
   var $alter_admin_interface_options;
   var $max_inbound_calls;
   var $modify_custom_dialplans;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['full_name']))
          {
              $this->full_name = $this->NM_ajax_info['param']['full_name'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['pass']))
          {
              $this->pass = $this->NM_ajax_info['param']['pass'];
          }
          if (isset($this->NM_ajax_info['param']['phone_login']))
          {
              $this->phone_login = $this->NM_ajax_info['param']['phone_login'];
          }
          if (isset($this->NM_ajax_info['param']['phone_pass']))
          {
              $this->phone_pass = $this->NM_ajax_info['param']['phone_pass'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['user']))
          {
              $this->user = $this->NM_ajax_info['param']['user'];
          }
          if (isset($this->NM_ajax_info['param']['user_group']))
          {
              $this->user_group = $this->NM_ajax_info['param']['user_group'];
          }
          if (isset($this->NM_ajax_info['param']['user_id']))
          {
              $this->user_id = $this->NM_ajax_info['param']['user_id'];
          }
          if (isset($this->NM_ajax_info['param']['user_level']))
          {
              $this->user_level = $this->NM_ajax_info['param']['user_level'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_vicidial_users($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_vicidial_users_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_vicidial_users']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_vicidial_users']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_vicidial_users'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_vicidial_users']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_vicidial_users']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_vicidial_users') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_vicidial_users']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - vicidial_users";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_vicidial_users")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';



      $_SESSION['scriptcase']['error_icon']['form_vicidial_users']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_vicidial_users'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_vicidial_users']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_vicidial_users'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_vicidial_users'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_form'];
          if (!isset($this->user_id)){$this->user_id = $this->nmgp_dados_form['user_id'];} 
          if (!isset($this->delete_users)){$this->delete_users = $this->nmgp_dados_form['delete_users'];} 
          if (!isset($this->delete_user_groups)){$this->delete_user_groups = $this->nmgp_dados_form['delete_user_groups'];} 
          if (!isset($this->delete_lists)){$this->delete_lists = $this->nmgp_dados_form['delete_lists'];} 
          if (!isset($this->delete_campaigns)){$this->delete_campaigns = $this->nmgp_dados_form['delete_campaigns'];} 
          if (!isset($this->delete_ingroups)){$this->delete_ingroups = $this->nmgp_dados_form['delete_ingroups'];} 
          if (!isset($this->delete_remote_agents)){$this->delete_remote_agents = $this->nmgp_dados_form['delete_remote_agents'];} 
          if (!isset($this->load_leads)){$this->load_leads = $this->nmgp_dados_form['load_leads'];} 
          if (!isset($this->campaign_detail)){$this->campaign_detail = $this->nmgp_dados_form['campaign_detail'];} 
          if (!isset($this->ast_admin_access)){$this->ast_admin_access = $this->nmgp_dados_form['ast_admin_access'];} 
          if (!isset($this->ast_delete_phones)){$this->ast_delete_phones = $this->nmgp_dados_form['ast_delete_phones'];} 
          if (!isset($this->delete_scripts)){$this->delete_scripts = $this->nmgp_dados_form['delete_scripts'];} 
          if (!isset($this->modify_leads)){$this->modify_leads = $this->nmgp_dados_form['modify_leads'];} 
          if (!isset($this->hotkeys_active)){$this->hotkeys_active = $this->nmgp_dados_form['hotkeys_active'];} 
          if (!isset($this->change_agent_campaign)){$this->change_agent_campaign = $this->nmgp_dados_form['change_agent_campaign'];} 
          if (!isset($this->agent_choose_ingroups)){$this->agent_choose_ingroups = $this->nmgp_dados_form['agent_choose_ingroups'];} 
          if (!isset($this->closer_campaigns)){$this->closer_campaigns = $this->nmgp_dados_form['closer_campaigns'];} 
          if (!isset($this->scheduled_callbacks)){$this->scheduled_callbacks = $this->nmgp_dados_form['scheduled_callbacks'];} 
          if (!isset($this->agentonly_callbacks)){$this->agentonly_callbacks = $this->nmgp_dados_form['agentonly_callbacks'];} 
          if (!isset($this->agentcall_manual)){$this->agentcall_manual = $this->nmgp_dados_form['agentcall_manual'];} 
          if (!isset($this->vicidial_recording)){$this->vicidial_recording = $this->nmgp_dados_form['vicidial_recording'];} 
          if (!isset($this->vicidial_transfers)){$this->vicidial_transfers = $this->nmgp_dados_form['vicidial_transfers'];} 
          if (!isset($this->delete_filters)){$this->delete_filters = $this->nmgp_dados_form['delete_filters'];} 
          if (!isset($this->alter_agent_interface_options)){$this->alter_agent_interface_options = $this->nmgp_dados_form['alter_agent_interface_options'];} 
          if (!isset($this->closer_default_blended)){$this->closer_default_blended = $this->nmgp_dados_form['closer_default_blended'];} 
          if (!isset($this->delete_call_times)){$this->delete_call_times = $this->nmgp_dados_form['delete_call_times'];} 
          if (!isset($this->modify_call_times)){$this->modify_call_times = $this->nmgp_dados_form['modify_call_times'];} 
          if (!isset($this->modify_users)){$this->modify_users = $this->nmgp_dados_form['modify_users'];} 
          if (!isset($this->modify_campaigns)){$this->modify_campaigns = $this->nmgp_dados_form['modify_campaigns'];} 
          if (!isset($this->modify_lists)){$this->modify_lists = $this->nmgp_dados_form['modify_lists'];} 
          if (!isset($this->modify_scripts)){$this->modify_scripts = $this->nmgp_dados_form['modify_scripts'];} 
          if (!isset($this->modify_filters)){$this->modify_filters = $this->nmgp_dados_form['modify_filters'];} 
          if (!isset($this->modify_ingroups)){$this->modify_ingroups = $this->nmgp_dados_form['modify_ingroups'];} 
          if (!isset($this->modify_usergroups)){$this->modify_usergroups = $this->nmgp_dados_form['modify_usergroups'];} 
          if (!isset($this->modify_remoteagents)){$this->modify_remoteagents = $this->nmgp_dados_form['modify_remoteagents'];} 
          if (!isset($this->modify_servers)){$this->modify_servers = $this->nmgp_dados_form['modify_servers'];} 
          if (!isset($this->view_reports)){$this->view_reports = $this->nmgp_dados_form['view_reports'];} 
          if (!isset($this->vicidial_recording_override)){$this->vicidial_recording_override = $this->nmgp_dados_form['vicidial_recording_override'];} 
          if (!isset($this->alter_custdata_override)){$this->alter_custdata_override = $this->nmgp_dados_form['alter_custdata_override'];} 
          if (!isset($this->qc_enabled)){$this->qc_enabled = $this->nmgp_dados_form['qc_enabled'];} 
          if (!isset($this->qc_user_level)){$this->qc_user_level = $this->nmgp_dados_form['qc_user_level'];} 
          if (!isset($this->qc_pass)){$this->qc_pass = $this->nmgp_dados_form['qc_pass'];} 
          if (!isset($this->qc_finish)){$this->qc_finish = $this->nmgp_dados_form['qc_finish'];} 
          if (!isset($this->qc_commit)){$this->qc_commit = $this->nmgp_dados_form['qc_commit'];} 
          if (!isset($this->add_timeclock_log)){$this->add_timeclock_log = $this->nmgp_dados_form['add_timeclock_log'];} 
          if (!isset($this->modify_timeclock_log)){$this->modify_timeclock_log = $this->nmgp_dados_form['modify_timeclock_log'];} 
          if (!isset($this->delete_timeclock_log)){$this->delete_timeclock_log = $this->nmgp_dados_form['delete_timeclock_log'];} 
          if (!isset($this->alter_custphone_override)){$this->alter_custphone_override = $this->nmgp_dados_form['alter_custphone_override'];} 
          if (!isset($this->vdc_agent_api_access)){$this->vdc_agent_api_access = $this->nmgp_dados_form['vdc_agent_api_access'];} 
          if (!isset($this->modify_inbound_dids)){$this->modify_inbound_dids = $this->nmgp_dados_form['modify_inbound_dids'];} 
          if (!isset($this->delete_inbound_dids)){$this->delete_inbound_dids = $this->nmgp_dados_form['delete_inbound_dids'];} 
          if (!isset($this->active)){$this->active = $this->nmgp_dados_form['active'];} 
          if (!isset($this->alert_enabled)){$this->alert_enabled = $this->nmgp_dados_form['alert_enabled'];} 
          if (!isset($this->download_lists)){$this->download_lists = $this->nmgp_dados_form['download_lists'];} 
          if (!isset($this->agent_shift_enforcement_override)){$this->agent_shift_enforcement_override = $this->nmgp_dados_form['agent_shift_enforcement_override'];} 
          if (!isset($this->manager_shift_enforcement_override)){$this->manager_shift_enforcement_override = $this->nmgp_dados_form['manager_shift_enforcement_override'];} 
          if (!isset($this->shift_override_flag)){$this->shift_override_flag = $this->nmgp_dados_form['shift_override_flag'];} 
          if (!isset($this->export_reports)){$this->export_reports = $this->nmgp_dados_form['export_reports'];} 
          if (!isset($this->delete_from_dnc)){$this->delete_from_dnc = $this->nmgp_dados_form['delete_from_dnc'];} 
          if (!isset($this->email)){$this->email = $this->nmgp_dados_form['email'];} 
          if (!isset($this->user_code)){$this->user_code = $this->nmgp_dados_form['user_code'];} 
          if (!isset($this->territory)){$this->territory = $this->nmgp_dados_form['territory'];} 
          if (!isset($this->allow_alerts)){$this->allow_alerts = $this->nmgp_dados_form['allow_alerts'];} 
          if (!isset($this->agent_choose_territories)){$this->agent_choose_territories = $this->nmgp_dados_form['agent_choose_territories'];} 
          if (!isset($this->custom_one)){$this->custom_one = $this->nmgp_dados_form['custom_one'];} 
          if (!isset($this->custom_two)){$this->custom_two = $this->nmgp_dados_form['custom_two'];} 
          if (!isset($this->custom_three)){$this->custom_three = $this->nmgp_dados_form['custom_three'];} 
          if (!isset($this->custom_four)){$this->custom_four = $this->nmgp_dados_form['custom_four'];} 
          if (!isset($this->custom_five)){$this->custom_five = $this->nmgp_dados_form['custom_five'];} 
          if (!isset($this->voicemail_id)){$this->voicemail_id = $this->nmgp_dados_form['voicemail_id'];} 
          if (!isset($this->agent_call_log_view_override)){$this->agent_call_log_view_override = $this->nmgp_dados_form['agent_call_log_view_override'];} 
          if (!isset($this->callcard_admin)){$this->callcard_admin = $this->nmgp_dados_form['callcard_admin'];} 
          if (!isset($this->agent_choose_blended)){$this->agent_choose_blended = $this->nmgp_dados_form['agent_choose_blended'];} 
          if (!isset($this->realtime_block_user_info)){$this->realtime_block_user_info = $this->nmgp_dados_form['realtime_block_user_info'];} 
          if (!isset($this->custom_fields_modify)){$this->custom_fields_modify = $this->nmgp_dados_form['custom_fields_modify'];} 
          if (!isset($this->force_change_password)){$this->force_change_password = $this->nmgp_dados_form['force_change_password'];} 
          if (!isset($this->agent_lead_search_override)){$this->agent_lead_search_override = $this->nmgp_dados_form['agent_lead_search_override'];} 
          if (!isset($this->modify_shifts)){$this->modify_shifts = $this->nmgp_dados_form['modify_shifts'];} 
          if (!isset($this->modify_phones)){$this->modify_phones = $this->nmgp_dados_form['modify_phones'];} 
          if (!isset($this->modify_carriers)){$this->modify_carriers = $this->nmgp_dados_form['modify_carriers'];} 
          if (!isset($this->modify_labels)){$this->modify_labels = $this->nmgp_dados_form['modify_labels'];} 
          if (!isset($this->modify_statuses)){$this->modify_statuses = $this->nmgp_dados_form['modify_statuses'];} 
          if (!isset($this->modify_voicemail)){$this->modify_voicemail = $this->nmgp_dados_form['modify_voicemail'];} 
          if (!isset($this->modify_audiostore)){$this->modify_audiostore = $this->nmgp_dados_form['modify_audiostore'];} 
          if (!isset($this->modify_moh)){$this->modify_moh = $this->nmgp_dados_form['modify_moh'];} 
          if (!isset($this->modify_tts)){$this->modify_tts = $this->nmgp_dados_form['modify_tts'];} 
          if (!isset($this->preset_contact_search)){$this->preset_contact_search = $this->nmgp_dados_form['preset_contact_search'];} 
          if (!isset($this->modify_contacts)){$this->modify_contacts = $this->nmgp_dados_form['modify_contacts'];} 
          if (!isset($this->modify_same_user_level)){$this->modify_same_user_level = $this->nmgp_dados_form['modify_same_user_level'];} 
          if (!isset($this->admin_hide_lead_data)){$this->admin_hide_lead_data = $this->nmgp_dados_form['admin_hide_lead_data'];} 
          if (!isset($this->admin_hide_phone_data)){$this->admin_hide_phone_data = $this->nmgp_dados_form['admin_hide_phone_data'];} 
          if (!isset($this->agentcall_email)){$this->agentcall_email = $this->nmgp_dados_form['agentcall_email'];} 
          if (!isset($this->modify_email_accounts)){$this->modify_email_accounts = $this->nmgp_dados_form['modify_email_accounts'];} 
          if (!isset($this->failed_login_count)){$this->failed_login_count = $this->nmgp_dados_form['failed_login_count'];} 
          if (!isset($this->last_login_date)){$this->last_login_date = $this->nmgp_dados_form['last_login_date'];} 
          if (!isset($this->last_ip)){$this->last_ip = $this->nmgp_dados_form['last_ip'];} 
          if (!isset($this->pass_hash)){$this->pass_hash = $this->nmgp_dados_form['pass_hash'];} 
          if (!isset($this->alter_admin_interface_options)){$this->alter_admin_interface_options = $this->nmgp_dados_form['alter_admin_interface_options'];} 
          if (!isset($this->max_inbound_calls)){$this->max_inbound_calls = $this->nmgp_dados_form['max_inbound_calls'];} 
          if (!isset($this->modify_custom_dialplans)){$this->modify_custom_dialplans = $this->nmgp_dados_form['modify_custom_dialplans'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_vicidial_users", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_vicidial_users_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_vicidial_users_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_vicidial_users/form_vicidial_users_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_vicidial_users_erro.class.php"); 
      }
      $this->Erro      = new form_vicidial_users_erro();
      $this->Erro->Ini = $this->Ini;
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao']))
         { 
             if ($this->user_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_vicidial_users']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      if (isset($this->user)) { $this->nm_limpa_alfa($this->user); }
      if (isset($this->pass)) { $this->nm_limpa_alfa($this->pass); }
      if (isset($this->full_name)) { $this->nm_limpa_alfa($this->full_name); }
      if (isset($this->user_level)) { $this->nm_limpa_alfa($this->user_level); }
      if (isset($this->user_group)) { $this->nm_limpa_alfa($this->user_group); }
      if (isset($this->phone_login)) { $this->nm_limpa_alfa($this->phone_login); }
      if (isset($this->phone_pass)) { $this->nm_limpa_alfa($this->phone_pass); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- user_level
      $this->field_config['user_level']               = array();
      $this->field_config['user_level']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['user_level']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['user_level']['symbol_dec'] = '';
      $this->field_config['user_level']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['user_level']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- user_id
      $this->field_config['user_id']               = array();
      $this->field_config['user_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['user_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['user_id']['symbol_dec'] = '';
      $this->field_config['user_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['user_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- qc_user_level
      $this->field_config['qc_user_level']               = array();
      $this->field_config['qc_user_level']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['qc_user_level']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['qc_user_level']['symbol_dec'] = '';
      $this->field_config['qc_user_level']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['qc_user_level']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- failed_login_count
      $this->field_config['failed_login_count']               = array();
      $this->field_config['failed_login_count']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['failed_login_count']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['failed_login_count']['symbol_dec'] = '';
      $this->field_config['failed_login_count']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['failed_login_count']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- last_login_date
      $this->field_config['last_login_date']                 = array();
      $this->field_config['last_login_date']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['last_login_date']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['last_login_date']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['last_login_date']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'last_login_date');
      //-- max_inbound_calls
      $this->field_config['max_inbound_calls']               = array();
      $this->field_config['max_inbound_calls']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['max_inbound_calls']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['max_inbound_calls']['symbol_dec'] = '';
      $this->field_config['max_inbound_calls']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['max_inbound_calls']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['Gera_log_access'] = false;
      }

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_full_name' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'full_name');
          }
          if ('validate_user' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'user');
          }
          if ('validate_pass' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pass');
          }
          if ('validate_user_level' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'user_level');
          }
          if ('validate_user_group' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'user_group');
          }
          if ('validate_phone_login' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'phone_login');
          }
          if ('validate_phone_pass' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'phone_pass');
          }
          form_vicidial_users_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_vicidial_users_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->user = sc_strip_script($this->user, $_SESSION['scriptcase']['charset']);
          $this->user = sc_strip_tags($this->user, $_SESSION['scriptcase']['charset']);
          $this->pass = sc_strip_script($this->pass, $_SESSION['scriptcase']['charset']);
          $this->pass = sc_strip_tags($this->pass, $_SESSION['scriptcase']['charset']);
          $this->full_name = sc_strip_script($this->full_name, $_SESSION['scriptcase']['charset']);
          $this->full_name = sc_strip_tags($this->full_name, $_SESSION['scriptcase']['charset']);
          $this->user_group = sc_strip_script($this->user_group, $_SESSION['scriptcase']['charset']);
          $this->user_group = sc_strip_tags($this->user_group, $_SESSION['scriptcase']['charset']);
          $this->phone_login = sc_strip_script($this->phone_login, $_SESSION['scriptcase']['charset']);
          $this->phone_login = sc_strip_tags($this->phone_login, $_SESSION['scriptcase']['charset']);
          $this->phone_pass = sc_strip_script($this->phone_pass, $_SESSION['scriptcase']['charset']);
          $this->phone_pass = sc_strip_tags($this->phone_pass, $_SESSION['scriptcase']['charset']);
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_vicidial_users']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_vicidial_users_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_vicidial_users_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_vicidial_users_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_vicidial_users.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - vicidial_users") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_vicidial_users_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_vicidial_users"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
       if ($this->SC_log_atv)
       {
           $this->NM_gera_log_output();
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $delim  = "'";
       $delim1 = "'";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date1'];
       }
       $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       $usr = isset($_SESSION['usr_login']) ? $_SESSION['usr_login'] : "";
       if (in_array(strtolower($this->Ini->nm_con_unicep['tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sc_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Ini->nm_db_unicep->qstr($usr) . ", 'form_vicidial_users', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Ini->nm_db_unicep->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sc_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Ini->nm_db_unicep->qstr($usr) . ", 'form_vicidial_users', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Ini->nm_db_unicep->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Ini->nm_db_unicep->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Ini->nm_db_unicep->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_vicidial_users_pack_ajax_response();
               exit; 
           }
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
           $this->Ini->nm_db_unicep->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'full_name':
               return "Full Name";
               break;
           case 'user':
               return "User";
               break;
           case 'pass':
               return "Pass";
               break;
           case 'user_level':
               return "User Level";
               break;
           case 'user_group':
               return "User Group";
               break;
           case 'phone_login':
               return "Phone Login";
               break;
           case 'phone_pass':
               return "Phone Pass";
               break;
           case 'user_id':
               return "User Id";
               break;
           case 'delete_users':
               return "Delete Users";
               break;
           case 'delete_user_groups':
               return "Delete User Groups";
               break;
           case 'delete_lists':
               return "Delete Lists";
               break;
           case 'delete_campaigns':
               return "Delete Campaigns";
               break;
           case 'delete_ingroups':
               return "Delete Ingroups";
               break;
           case 'delete_remote_agents':
               return "Delete Remote Agents";
               break;
           case 'load_leads':
               return "Load Leads";
               break;
           case 'campaign_detail':
               return "Campaign Detail";
               break;
           case 'ast_admin_access':
               return "Ast Admin Access";
               break;
           case 'ast_delete_phones':
               return "Ast Delete Phones";
               break;
           case 'delete_scripts':
               return "Delete Scripts";
               break;
           case 'modify_leads':
               return "Modify Leads";
               break;
           case 'hotkeys_active':
               return "Hotkeys Active";
               break;
           case 'change_agent_campaign':
               return "Change Agent Campaign";
               break;
           case 'agent_choose_ingroups':
               return "Agent Choose Ingroups";
               break;
           case 'closer_campaigns':
               return "Closer Campaigns";
               break;
           case 'scheduled_callbacks':
               return "Scheduled Callbacks";
               break;
           case 'agentonly_callbacks':
               return "Agentonly Callbacks";
               break;
           case 'agentcall_manual':
               return "Agentcall Manual";
               break;
           case 'vicidial_recording':
               return "Vicidial Recording";
               break;
           case 'vicidial_transfers':
               return "Vicidial Transfers";
               break;
           case 'delete_filters':
               return "Delete Filters";
               break;
           case 'alter_agent_interface_options':
               return "Alter Agent Interface Options";
               break;
           case 'closer_default_blended':
               return "Closer Default Blended";
               break;
           case 'delete_call_times':
               return "Delete Call Times";
               break;
           case 'modify_call_times':
               return "Modify Call Times";
               break;
           case 'modify_users':
               return "Modify Users";
               break;
           case 'modify_campaigns':
               return "Modify Campaigns";
               break;
           case 'modify_lists':
               return "Modify Lists";
               break;
           case 'modify_scripts':
               return "Modify Scripts";
               break;
           case 'modify_filters':
               return "Modify Filters";
               break;
           case 'modify_ingroups':
               return "Modify Ingroups";
               break;
           case 'modify_usergroups':
               return "Modify Usergroups";
               break;
           case 'modify_remoteagents':
               return "Modify Remoteagents";
               break;
           case 'modify_servers':
               return "Modify Servers";
               break;
           case 'view_reports':
               return "View Reports";
               break;
           case 'vicidial_recording_override':
               return "Vicidial Recording Override";
               break;
           case 'alter_custdata_override':
               return "Alter Custdata Override";
               break;
           case 'qc_enabled':
               return "Qc Enabled";
               break;
           case 'qc_user_level':
               return "Qc User Level";
               break;
           case 'qc_pass':
               return "Qc Pass";
               break;
           case 'qc_finish':
               return "Qc Finish";
               break;
           case 'qc_commit':
               return "Qc Commit";
               break;
           case 'add_timeclock_log':
               return "Add Timeclock Log";
               break;
           case 'modify_timeclock_log':
               return "Modify Timeclock Log";
               break;
           case 'delete_timeclock_log':
               return "Delete Timeclock Log";
               break;
           case 'alter_custphone_override':
               return "Alter Custphone Override";
               break;
           case 'vdc_agent_api_access':
               return "Vdc Agent Api Access";
               break;
           case 'modify_inbound_dids':
               return "Modify Inbound Dids";
               break;
           case 'delete_inbound_dids':
               return "Delete Inbound Dids";
               break;
           case 'active':
               return "Active";
               break;
           case 'alert_enabled':
               return "Alert Enabled";
               break;
           case 'download_lists':
               return "Download Lists";
               break;
           case 'agent_shift_enforcement_override':
               return "Agent Shift Enforcement Override";
               break;
           case 'manager_shift_enforcement_override':
               return "Manager Shift Enforcement Override";
               break;
           case 'shift_override_flag':
               return "Shift Override Flag";
               break;
           case 'export_reports':
               return "Export Reports";
               break;
           case 'delete_from_dnc':
               return "Delete From Dnc";
               break;
           case 'email':
               return "Email";
               break;
           case 'user_code':
               return "User Code";
               break;
           case 'territory':
               return "Territory";
               break;
           case 'allow_alerts':
               return "Allow Alerts";
               break;
           case 'agent_choose_territories':
               return "Agent Choose Territories";
               break;
           case 'custom_one':
               return "Custom One";
               break;
           case 'custom_two':
               return "Custom Two";
               break;
           case 'custom_three':
               return "Custom Three";
               break;
           case 'custom_four':
               return "Custom Four";
               break;
           case 'custom_five':
               return "Custom Five";
               break;
           case 'voicemail_id':
               return "Voicemail Id";
               break;
           case 'agent_call_log_view_override':
               return "Agent Call Log View Override";
               break;
           case 'callcard_admin':
               return "Callcard Admin";
               break;
           case 'agent_choose_blended':
               return "Agent Choose Blended";
               break;
           case 'realtime_block_user_info':
               return "Realtime Block User Info";
               break;
           case 'custom_fields_modify':
               return "Custom Fields Modify";
               break;
           case 'force_change_password':
               return "Force Change Password";
               break;
           case 'agent_lead_search_override':
               return "Agent Lead Search Override";
               break;
           case 'modify_shifts':
               return "Modify Shifts";
               break;
           case 'modify_phones':
               return "Modify Phones";
               break;
           case 'modify_carriers':
               return "Modify Carriers";
               break;
           case 'modify_labels':
               return "Modify Labels";
               break;
           case 'modify_statuses':
               return "Modify Statuses";
               break;
           case 'modify_voicemail':
               return "Modify Voicemail";
               break;
           case 'modify_audiostore':
               return "Modify Audiostore";
               break;
           case 'modify_moh':
               return "Modify Moh";
               break;
           case 'modify_tts':
               return "Modify Tts";
               break;
           case 'preset_contact_search':
               return "Preset Contact Search";
               break;
           case 'modify_contacts':
               return "Modify Contacts";
               break;
           case 'modify_same_user_level':
               return "Modify Same User Level";
               break;
           case 'admin_hide_lead_data':
               return "Admin Hide Lead Data";
               break;
           case 'admin_hide_phone_data':
               return "Admin Hide Phone Data";
               break;
           case 'agentcall_email':
               return "Agentcall Email";
               break;
           case 'modify_email_accounts':
               return "Modify Email Accounts";
               break;
           case 'failed_login_count':
               return "Failed Login Count";
               break;
           case 'last_login_date':
               return "Last Login Date";
               break;
           case 'last_ip':
               return "Last Ip";
               break;
           case 'pass_hash':
               return "Pass Hash";
               break;
           case 'alter_admin_interface_options':
               return "Alter Admin Interface Options";
               break;
           case 'max_inbound_calls':
               return "Max Inbound Calls";
               break;
           case 'modify_custom_dialplans':
               return "Modify Custom Dialplans";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_vicidial_users']) || !is_array($this->NM_ajax_info['errList']['geral_form_vicidial_users']))
              {
                  $this->NM_ajax_info['errList']['geral_form_vicidial_users'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_vicidial_users'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'full_name' == $filtro)
        $this->ValidateField_full_name($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'user' == $filtro)
        $this->ValidateField_user($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pass' == $filtro)
        $this->ValidateField_pass($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'user_level' == $filtro)
        $this->ValidateField_user_level($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'user_group' == $filtro)
        $this->ValidateField_user_group($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'phone_login' == $filtro)
        $this->ValidateField_phone_login($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'phone_pass' == $filtro)
        $this->ValidateField_phone_pass($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_full_name(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->full_name) > 50) 
          { 
              $hasError = true;
              $Campos_Crit .= "Full Name " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['full_name']))
              {
                  $Campos_Erros['full_name'] = array();
              }
              $Campos_Erros['full_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['full_name']) || !is_array($this->NM_ajax_info['errList']['full_name']))
              {
                  $this->NM_ajax_info['errList']['full_name'] = array();
              }
              $this->NM_ajax_info['errList']['full_name'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'full_name';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_full_name

    function ValidateField_user(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->user) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "User " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['user']))
              {
                  $Campos_Erros['user'] = array();
              }
              $Campos_Erros['user'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['user']) || !is_array($this->NM_ajax_info['errList']['user']))
              {
                  $this->NM_ajax_info['errList']['user'] = array();
              }
              $this->NM_ajax_info['errList']['user'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'user';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_user

    function ValidateField_pass(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pass) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Pass " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pass']))
              {
                  $Campos_Erros['pass'] = array();
              }
              $Campos_Erros['pass'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pass']) || !is_array($this->NM_ajax_info['errList']['pass']))
              {
                  $this->NM_ajax_info['errList']['pass'] = array();
              }
              $this->NM_ajax_info['errList']['pass'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pass';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pass

    function ValidateField_user_level(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->user_level === "" || is_null($this->user_level))  
      { 
          $this->user_level = 0;
          $this->sc_force_zero[] = 'user_level';
      } 
      }
      nm_limpa_numero($this->user_level, $this->field_config['user_level']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->user_level != '')  
          { 
              $iTestSize = 3;
              if (strlen($this->user_level) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "User Level: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['user_level']))
                  {
                      $Campos_Erros['user_level'] = array();
                  }
                  $Campos_Erros['user_level'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['user_level']) || !is_array($this->NM_ajax_info['errList']['user_level']))
                  {
                      $this->NM_ajax_info['errList']['user_level'] = array();
                  }
                  $this->NM_ajax_info['errList']['user_level'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->user_level, 3, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "User Level; " ; 
                  if (!isset($Campos_Erros['user_level']))
                  {
                      $Campos_Erros['user_level'] = array();
                  }
                  $Campos_Erros['user_level'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['user_level']) || !is_array($this->NM_ajax_info['errList']['user_level']))
                  {
                      $this->NM_ajax_info['errList']['user_level'] = array();
                  }
                  $this->NM_ajax_info['errList']['user_level'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'user_level';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_user_level

    function ValidateField_user_group(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->user_group) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "User Group " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['user_group']))
              {
                  $Campos_Erros['user_group'] = array();
              }
              $Campos_Erros['user_group'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['user_group']) || !is_array($this->NM_ajax_info['errList']['user_group']))
              {
                  $this->NM_ajax_info['errList']['user_group'] = array();
              }
              $this->NM_ajax_info['errList']['user_group'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'user_group';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_user_group

    function ValidateField_phone_login(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->phone_login) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Phone Login " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['phone_login']))
              {
                  $Campos_Erros['phone_login'] = array();
              }
              $Campos_Erros['phone_login'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['phone_login']) || !is_array($this->NM_ajax_info['errList']['phone_login']))
              {
                  $this->NM_ajax_info['errList']['phone_login'] = array();
              }
              $this->NM_ajax_info['errList']['phone_login'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'phone_login';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_phone_login

    function ValidateField_phone_pass(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->phone_pass) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "Phone Pass " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['phone_pass']))
              {
                  $Campos_Erros['phone_pass'] = array();
              }
              $Campos_Erros['phone_pass'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['phone_pass']) || !is_array($this->NM_ajax_info['errList']['phone_pass']))
              {
                  $this->NM_ajax_info['errList']['phone_pass'] = array();
              }
              $this->NM_ajax_info['errList']['phone_pass'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'phone_pass';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_phone_pass

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['full_name'] = $this->full_name;
    $this->nmgp_dados_form['user'] = $this->user;
    $this->nmgp_dados_form['pass'] = $this->pass;
    $this->nmgp_dados_form['user_level'] = $this->user_level;
    $this->nmgp_dados_form['user_group'] = $this->user_group;
    $this->nmgp_dados_form['phone_login'] = $this->phone_login;
    $this->nmgp_dados_form['phone_pass'] = $this->phone_pass;
    $this->nmgp_dados_form['user_id'] = $this->user_id;
    $this->nmgp_dados_form['delete_users'] = $this->delete_users;
    $this->nmgp_dados_form['delete_user_groups'] = $this->delete_user_groups;
    $this->nmgp_dados_form['delete_lists'] = $this->delete_lists;
    $this->nmgp_dados_form['delete_campaigns'] = $this->delete_campaigns;
    $this->nmgp_dados_form['delete_ingroups'] = $this->delete_ingroups;
    $this->nmgp_dados_form['delete_remote_agents'] = $this->delete_remote_agents;
    $this->nmgp_dados_form['load_leads'] = $this->load_leads;
    $this->nmgp_dados_form['campaign_detail'] = $this->campaign_detail;
    $this->nmgp_dados_form['ast_admin_access'] = $this->ast_admin_access;
    $this->nmgp_dados_form['ast_delete_phones'] = $this->ast_delete_phones;
    $this->nmgp_dados_form['delete_scripts'] = $this->delete_scripts;
    $this->nmgp_dados_form['modify_leads'] = $this->modify_leads;
    $this->nmgp_dados_form['hotkeys_active'] = $this->hotkeys_active;
    $this->nmgp_dados_form['change_agent_campaign'] = $this->change_agent_campaign;
    $this->nmgp_dados_form['agent_choose_ingroups'] = $this->agent_choose_ingroups;
    $this->nmgp_dados_form['closer_campaigns'] = $this->closer_campaigns;
    $this->nmgp_dados_form['scheduled_callbacks'] = $this->scheduled_callbacks;
    $this->nmgp_dados_form['agentonly_callbacks'] = $this->agentonly_callbacks;
    $this->nmgp_dados_form['agentcall_manual'] = $this->agentcall_manual;
    $this->nmgp_dados_form['vicidial_recording'] = $this->vicidial_recording;
    $this->nmgp_dados_form['vicidial_transfers'] = $this->vicidial_transfers;
    $this->nmgp_dados_form['delete_filters'] = $this->delete_filters;
    $this->nmgp_dados_form['alter_agent_interface_options'] = $this->alter_agent_interface_options;
    $this->nmgp_dados_form['closer_default_blended'] = $this->closer_default_blended;
    $this->nmgp_dados_form['delete_call_times'] = $this->delete_call_times;
    $this->nmgp_dados_form['modify_call_times'] = $this->modify_call_times;
    $this->nmgp_dados_form['modify_users'] = $this->modify_users;
    $this->nmgp_dados_form['modify_campaigns'] = $this->modify_campaigns;
    $this->nmgp_dados_form['modify_lists'] = $this->modify_lists;
    $this->nmgp_dados_form['modify_scripts'] = $this->modify_scripts;
    $this->nmgp_dados_form['modify_filters'] = $this->modify_filters;
    $this->nmgp_dados_form['modify_ingroups'] = $this->modify_ingroups;
    $this->nmgp_dados_form['modify_usergroups'] = $this->modify_usergroups;
    $this->nmgp_dados_form['modify_remoteagents'] = $this->modify_remoteagents;
    $this->nmgp_dados_form['modify_servers'] = $this->modify_servers;
    $this->nmgp_dados_form['view_reports'] = $this->view_reports;
    $this->nmgp_dados_form['vicidial_recording_override'] = $this->vicidial_recording_override;
    $this->nmgp_dados_form['alter_custdata_override'] = $this->alter_custdata_override;
    $this->nmgp_dados_form['qc_enabled'] = $this->qc_enabled;
    $this->nmgp_dados_form['qc_user_level'] = $this->qc_user_level;
    $this->nmgp_dados_form['qc_pass'] = $this->qc_pass;
    $this->nmgp_dados_form['qc_finish'] = $this->qc_finish;
    $this->nmgp_dados_form['qc_commit'] = $this->qc_commit;
    $this->nmgp_dados_form['add_timeclock_log'] = $this->add_timeclock_log;
    $this->nmgp_dados_form['modify_timeclock_log'] = $this->modify_timeclock_log;
    $this->nmgp_dados_form['delete_timeclock_log'] = $this->delete_timeclock_log;
    $this->nmgp_dados_form['alter_custphone_override'] = $this->alter_custphone_override;
    $this->nmgp_dados_form['vdc_agent_api_access'] = $this->vdc_agent_api_access;
    $this->nmgp_dados_form['modify_inbound_dids'] = $this->modify_inbound_dids;
    $this->nmgp_dados_form['delete_inbound_dids'] = $this->delete_inbound_dids;
    $this->nmgp_dados_form['active'] = $this->active;
    $this->nmgp_dados_form['alert_enabled'] = $this->alert_enabled;
    $this->nmgp_dados_form['download_lists'] = $this->download_lists;
    $this->nmgp_dados_form['agent_shift_enforcement_override'] = $this->agent_shift_enforcement_override;
    $this->nmgp_dados_form['manager_shift_enforcement_override'] = $this->manager_shift_enforcement_override;
    $this->nmgp_dados_form['shift_override_flag'] = $this->shift_override_flag;
    $this->nmgp_dados_form['export_reports'] = $this->export_reports;
    $this->nmgp_dados_form['delete_from_dnc'] = $this->delete_from_dnc;
    $this->nmgp_dados_form['email'] = $this->email;
    $this->nmgp_dados_form['user_code'] = $this->user_code;
    $this->nmgp_dados_form['territory'] = $this->territory;
    $this->nmgp_dados_form['allow_alerts'] = $this->allow_alerts;
    $this->nmgp_dados_form['agent_choose_territories'] = $this->agent_choose_territories;
    $this->nmgp_dados_form['custom_one'] = $this->custom_one;
    $this->nmgp_dados_form['custom_two'] = $this->custom_two;
    $this->nmgp_dados_form['custom_three'] = $this->custom_three;
    $this->nmgp_dados_form['custom_four'] = $this->custom_four;
    $this->nmgp_dados_form['custom_five'] = $this->custom_five;
    $this->nmgp_dados_form['voicemail_id'] = $this->voicemail_id;
    $this->nmgp_dados_form['agent_call_log_view_override'] = $this->agent_call_log_view_override;
    $this->nmgp_dados_form['callcard_admin'] = $this->callcard_admin;
    $this->nmgp_dados_form['agent_choose_blended'] = $this->agent_choose_blended;
    $this->nmgp_dados_form['realtime_block_user_info'] = $this->realtime_block_user_info;
    $this->nmgp_dados_form['custom_fields_modify'] = $this->custom_fields_modify;
    $this->nmgp_dados_form['force_change_password'] = $this->force_change_password;
    $this->nmgp_dados_form['agent_lead_search_override'] = $this->agent_lead_search_override;
    $this->nmgp_dados_form['modify_shifts'] = $this->modify_shifts;
    $this->nmgp_dados_form['modify_phones'] = $this->modify_phones;
    $this->nmgp_dados_form['modify_carriers'] = $this->modify_carriers;
    $this->nmgp_dados_form['modify_labels'] = $this->modify_labels;
    $this->nmgp_dados_form['modify_statuses'] = $this->modify_statuses;
    $this->nmgp_dados_form['modify_voicemail'] = $this->modify_voicemail;
    $this->nmgp_dados_form['modify_audiostore'] = $this->modify_audiostore;
    $this->nmgp_dados_form['modify_moh'] = $this->modify_moh;
    $this->nmgp_dados_form['modify_tts'] = $this->modify_tts;
    $this->nmgp_dados_form['preset_contact_search'] = $this->preset_contact_search;
    $this->nmgp_dados_form['modify_contacts'] = $this->modify_contacts;
    $this->nmgp_dados_form['modify_same_user_level'] = $this->modify_same_user_level;
    $this->nmgp_dados_form['admin_hide_lead_data'] = $this->admin_hide_lead_data;
    $this->nmgp_dados_form['admin_hide_phone_data'] = $this->admin_hide_phone_data;
    $this->nmgp_dados_form['agentcall_email'] = $this->agentcall_email;
    $this->nmgp_dados_form['modify_email_accounts'] = $this->modify_email_accounts;
    $this->nmgp_dados_form['failed_login_count'] = $this->failed_login_count;
    $this->nmgp_dados_form['last_login_date'] = $this->last_login_date;
    $this->nmgp_dados_form['last_ip'] = $this->last_ip;
    $this->nmgp_dados_form['pass_hash'] = $this->pass_hash;
    $this->nmgp_dados_form['alter_admin_interface_options'] = $this->alter_admin_interface_options;
    $this->nmgp_dados_form['max_inbound_calls'] = $this->max_inbound_calls;
    $this->nmgp_dados_form['modify_custom_dialplans'] = $this->modify_custom_dialplans;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['user_level'] = $this->user_level;
      nm_limpa_numero($this->user_level, $this->field_config['user_level']['symbol_grp']) ; 
      $this->Before_unformat['user_id'] = $this->user_id;
      nm_limpa_numero($this->user_id, $this->field_config['user_id']['symbol_grp']) ; 
      $this->Before_unformat['qc_user_level'] = $this->qc_user_level;
      nm_limpa_numero($this->qc_user_level, $this->field_config['qc_user_level']['symbol_grp']) ; 
      $this->Before_unformat['failed_login_count'] = $this->failed_login_count;
      nm_limpa_numero($this->failed_login_count, $this->field_config['failed_login_count']['symbol_grp']) ; 
      $this->Before_unformat['last_login_date'] = $this->last_login_date;
      nm_limpa_data($this->last_login_date, $this->field_config['last_login_date']['date_sep']) ; 
      nm_limpa_hora($this->last_login_date_hora, $this->field_config['last_login_date']['time_sep']) ; 
      $this->Before_unformat['max_inbound_calls'] = $this->max_inbound_calls;
      nm_limpa_numero($this->max_inbound_calls, $this->field_config['max_inbound_calls']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "user_level")
      {
          nm_limpa_numero($this->user_level, $this->field_config['user_level']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "user_id")
      {
          nm_limpa_numero($this->user_id, $this->field_config['user_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "qc_user_level")
      {
          nm_limpa_numero($this->qc_user_level, $this->field_config['qc_user_level']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "failed_login_count")
      {
          nm_limpa_numero($this->failed_login_count, $this->field_config['failed_login_count']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "max_inbound_calls")
      {
          nm_limpa_numero($this->max_inbound_calls, $this->field_config['max_inbound_calls']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ('' !== $this->user_level || (!empty($format_fields) && isset($format_fields['user_level'])))
      {
          nmgp_Form_Num_Val($this->user_level, $this->field_config['user_level']['symbol_grp'], $this->field_config['user_level']['symbol_dec'], "0", "S", $this->field_config['user_level']['format_neg'], "", "", "-", $this->field_config['user_level']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_full_name();
          $this->ajax_return_values_user();
          $this->ajax_return_values_pass();
          $this->ajax_return_values_user_level();
          $this->ajax_return_values_user_group();
          $this->ajax_return_values_phone_login();
          $this->ajax_return_values_phone_pass();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['user_id']['keyVal'] = form_vicidial_users_pack_protect_string($this->nmgp_dados_form['user_id']);
          }
   } // ajax_return_values

          //----- full_name
   function ajax_return_values_full_name($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("full_name", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->full_name);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['full_name'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- user
   function ajax_return_values_user($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("user", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->user);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['user'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pass
   function ajax_return_values_pass($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pass", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pass);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pass'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- user_level
   function ajax_return_values_user_level($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("user_level", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->user_level);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['user_level'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- user_group
   function ajax_return_values_user_group($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("user_group", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->user_group);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['user_group'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- phone_login
   function ajax_return_values_phone_login($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("phone_login", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->phone_login);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['phone_login'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- phone_pass
   function ajax_return_values_phone_pass($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("phone_pass", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->phone_pass);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['phone_pass'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']))
          {
               $sc_where_pos = " WHERE ((user_id < $this->user_id))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->user_id)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opcao'] = '';

   }

   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      $this->SC_log_atv = false;
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_key($this->nmgp_opcao);
      }
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_old();
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['full_name'] = $this->full_name;
      $NM_val_form['user'] = $this->user;
      $NM_val_form['pass'] = $this->pass;
      $NM_val_form['user_level'] = $this->user_level;
      $NM_val_form['user_group'] = $this->user_group;
      $NM_val_form['phone_login'] = $this->phone_login;
      $NM_val_form['phone_pass'] = $this->phone_pass;
      $NM_val_form['user_id'] = $this->user_id;
      $NM_val_form['delete_users'] = $this->delete_users;
      $NM_val_form['delete_user_groups'] = $this->delete_user_groups;
      $NM_val_form['delete_lists'] = $this->delete_lists;
      $NM_val_form['delete_campaigns'] = $this->delete_campaigns;
      $NM_val_form['delete_ingroups'] = $this->delete_ingroups;
      $NM_val_form['delete_remote_agents'] = $this->delete_remote_agents;
      $NM_val_form['load_leads'] = $this->load_leads;
      $NM_val_form['campaign_detail'] = $this->campaign_detail;
      $NM_val_form['ast_admin_access'] = $this->ast_admin_access;
      $NM_val_form['ast_delete_phones'] = $this->ast_delete_phones;
      $NM_val_form['delete_scripts'] = $this->delete_scripts;
      $NM_val_form['modify_leads'] = $this->modify_leads;
      $NM_val_form['hotkeys_active'] = $this->hotkeys_active;
      $NM_val_form['change_agent_campaign'] = $this->change_agent_campaign;
      $NM_val_form['agent_choose_ingroups'] = $this->agent_choose_ingroups;
      $NM_val_form['closer_campaigns'] = $this->closer_campaigns;
      $NM_val_form['scheduled_callbacks'] = $this->scheduled_callbacks;
      $NM_val_form['agentonly_callbacks'] = $this->agentonly_callbacks;
      $NM_val_form['agentcall_manual'] = $this->agentcall_manual;
      $NM_val_form['vicidial_recording'] = $this->vicidial_recording;
      $NM_val_form['vicidial_transfers'] = $this->vicidial_transfers;
      $NM_val_form['delete_filters'] = $this->delete_filters;
      $NM_val_form['alter_agent_interface_options'] = $this->alter_agent_interface_options;
      $NM_val_form['closer_default_blended'] = $this->closer_default_blended;
      $NM_val_form['delete_call_times'] = $this->delete_call_times;
      $NM_val_form['modify_call_times'] = $this->modify_call_times;
      $NM_val_form['modify_users'] = $this->modify_users;
      $NM_val_form['modify_campaigns'] = $this->modify_campaigns;
      $NM_val_form['modify_lists'] = $this->modify_lists;
      $NM_val_form['modify_scripts'] = $this->modify_scripts;
      $NM_val_form['modify_filters'] = $this->modify_filters;
      $NM_val_form['modify_ingroups'] = $this->modify_ingroups;
      $NM_val_form['modify_usergroups'] = $this->modify_usergroups;
      $NM_val_form['modify_remoteagents'] = $this->modify_remoteagents;
      $NM_val_form['modify_servers'] = $this->modify_servers;
      $NM_val_form['view_reports'] = $this->view_reports;
      $NM_val_form['vicidial_recording_override'] = $this->vicidial_recording_override;
      $NM_val_form['alter_custdata_override'] = $this->alter_custdata_override;
      $NM_val_form['qc_enabled'] = $this->qc_enabled;
      $NM_val_form['qc_user_level'] = $this->qc_user_level;
      $NM_val_form['qc_pass'] = $this->qc_pass;
      $NM_val_form['qc_finish'] = $this->qc_finish;
      $NM_val_form['qc_commit'] = $this->qc_commit;
      $NM_val_form['add_timeclock_log'] = $this->add_timeclock_log;
      $NM_val_form['modify_timeclock_log'] = $this->modify_timeclock_log;
      $NM_val_form['delete_timeclock_log'] = $this->delete_timeclock_log;
      $NM_val_form['alter_custphone_override'] = $this->alter_custphone_override;
      $NM_val_form['vdc_agent_api_access'] = $this->vdc_agent_api_access;
      $NM_val_form['modify_inbound_dids'] = $this->modify_inbound_dids;
      $NM_val_form['delete_inbound_dids'] = $this->delete_inbound_dids;
      $NM_val_form['active'] = $this->active;
      $NM_val_form['alert_enabled'] = $this->alert_enabled;
      $NM_val_form['download_lists'] = $this->download_lists;
      $NM_val_form['agent_shift_enforcement_override'] = $this->agent_shift_enforcement_override;
      $NM_val_form['manager_shift_enforcement_override'] = $this->manager_shift_enforcement_override;
      $NM_val_form['shift_override_flag'] = $this->shift_override_flag;
      $NM_val_form['export_reports'] = $this->export_reports;
      $NM_val_form['delete_from_dnc'] = $this->delete_from_dnc;
      $NM_val_form['email'] = $this->email;
      $NM_val_form['user_code'] = $this->user_code;
      $NM_val_form['territory'] = $this->territory;
      $NM_val_form['allow_alerts'] = $this->allow_alerts;
      $NM_val_form['agent_choose_territories'] = $this->agent_choose_territories;
      $NM_val_form['custom_one'] = $this->custom_one;
      $NM_val_form['custom_two'] = $this->custom_two;
      $NM_val_form['custom_three'] = $this->custom_three;
      $NM_val_form['custom_four'] = $this->custom_four;
      $NM_val_form['custom_five'] = $this->custom_five;
      $NM_val_form['voicemail_id'] = $this->voicemail_id;
      $NM_val_form['agent_call_log_view_override'] = $this->agent_call_log_view_override;
      $NM_val_form['callcard_admin'] = $this->callcard_admin;
      $NM_val_form['agent_choose_blended'] = $this->agent_choose_blended;
      $NM_val_form['realtime_block_user_info'] = $this->realtime_block_user_info;
      $NM_val_form['custom_fields_modify'] = $this->custom_fields_modify;
      $NM_val_form['force_change_password'] = $this->force_change_password;
      $NM_val_form['agent_lead_search_override'] = $this->agent_lead_search_override;
      $NM_val_form['modify_shifts'] = $this->modify_shifts;
      $NM_val_form['modify_phones'] = $this->modify_phones;
      $NM_val_form['modify_carriers'] = $this->modify_carriers;
      $NM_val_form['modify_labels'] = $this->modify_labels;
      $NM_val_form['modify_statuses'] = $this->modify_statuses;
      $NM_val_form['modify_voicemail'] = $this->modify_voicemail;
      $NM_val_form['modify_audiostore'] = $this->modify_audiostore;
      $NM_val_form['modify_moh'] = $this->modify_moh;
      $NM_val_form['modify_tts'] = $this->modify_tts;
      $NM_val_form['preset_contact_search'] = $this->preset_contact_search;
      $NM_val_form['modify_contacts'] = $this->modify_contacts;
      $NM_val_form['modify_same_user_level'] = $this->modify_same_user_level;
      $NM_val_form['admin_hide_lead_data'] = $this->admin_hide_lead_data;
      $NM_val_form['admin_hide_phone_data'] = $this->admin_hide_phone_data;
      $NM_val_form['agentcall_email'] = $this->agentcall_email;
      $NM_val_form['modify_email_accounts'] = $this->modify_email_accounts;
      $NM_val_form['failed_login_count'] = $this->failed_login_count;
      $NM_val_form['last_login_date'] = $this->last_login_date;
      $NM_val_form['last_ip'] = $this->last_ip;
      $NM_val_form['pass_hash'] = $this->pass_hash;
      $NM_val_form['alter_admin_interface_options'] = $this->alter_admin_interface_options;
      $NM_val_form['max_inbound_calls'] = $this->max_inbound_calls;
      $NM_val_form['modify_custom_dialplans'] = $this->modify_custom_dialplans;
      if ($this->user_id === "" || is_null($this->user_id))  
      { 
          $this->user_id = 0;
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->user_level === "" || is_null($this->user_level))  
      { 
          $this->user_level = 0;
          $this->sc_force_zero[] = 'user_level';
      } 
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      if ($this->qc_user_level === "" || is_null($this->qc_user_level))  
      { 
          $this->qc_user_level = 0;
          $this->sc_force_zero[] = 'qc_user_level';
      } 
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->failed_login_count === "" || is_null($this->failed_login_count))  
      { 
          $this->failed_login_count = 0;
          $this->sc_force_zero[] = 'failed_login_count';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->max_inbound_calls === "" || is_null($this->max_inbound_calls))  
      { 
          $this->max_inbound_calls = 0;
          $this->sc_force_zero[] = 'max_inbound_calls';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_mysql, $this->Ini->nm_bases_sqlite);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->user_before_qstr = $this->user;
          $this->user = substr($this->Db->qstr($this->user), 1, -1); 
          $this->pass_before_qstr = $this->pass;
          $this->pass = substr($this->Db->qstr($this->pass), 1, -1); 
          $this->full_name_before_qstr = $this->full_name;
          $this->full_name = substr($this->Db->qstr($this->full_name), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->user_group_before_qstr = $this->user_group;
          $this->user_group = substr($this->Db->qstr($this->user_group), 1, -1); 
          $this->phone_login_before_qstr = $this->phone_login;
          $this->phone_login = substr($this->Db->qstr($this->phone_login), 1, -1); 
          $this->phone_pass_before_qstr = $this->phone_pass;
          $this->phone_pass = substr($this->Db->qstr($this->phone_pass), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->closer_campaigns_before_qstr = $this->closer_campaigns;
          $this->closer_campaigns = substr($this->Db->qstr($this->closer_campaigns), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->email_before_qstr = $this->email;
          $this->email = substr($this->Db->qstr($this->email), 1, -1); 
          $this->user_code_before_qstr = $this->user_code;
          $this->user_code = substr($this->Db->qstr($this->user_code), 1, -1); 
          $this->territory_before_qstr = $this->territory;
          $this->territory = substr($this->Db->qstr($this->territory), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          $this->custom_one_before_qstr = $this->custom_one;
          $this->custom_one = substr($this->Db->qstr($this->custom_one), 1, -1); 
          $this->custom_two_before_qstr = $this->custom_two;
          $this->custom_two = substr($this->Db->qstr($this->custom_two), 1, -1); 
          $this->custom_three_before_qstr = $this->custom_three;
          $this->custom_three = substr($this->Db->qstr($this->custom_three), 1, -1); 
          $this->custom_four_before_qstr = $this->custom_four;
          $this->custom_four = substr($this->Db->qstr($this->custom_four), 1, -1); 
          $this->custom_five_before_qstr = $this->custom_five;
          $this->custom_five = substr($this->Db->qstr($this->custom_five), 1, -1); 
          $this->voicemail_id_before_qstr = $this->voicemail_id;
          $this->voicemail_id = substr($this->Db->qstr($this->voicemail_id), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
          }
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->last_login_date == "")  
              { 
                  $this->last_login_date = "null"; 
                  $NM_val_null[] = "last_login_date";
              } 
          }
          $this->last_ip_before_qstr = $this->last_ip;
          $this->last_ip = substr($this->Db->qstr($this->last_ip), 1, -1); 
          $this->pass_hash_before_qstr = $this->pass_hash;
          $this->pass_hash = substr($this->Db->qstr($this->pass_hash), 1, -1); 
          if ($this->nmgp_opcao == "alterar") 
          {
          }
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where user_id = $this->user_id ";
          $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where user_id = $this->user_id "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_vicidial_users_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
              $Cmd_Unique = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where (user = '" . $this->user . "') AND (user_id <> $this->user_id)";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (false === $rsUni)
              {
                  $dbErrorMessage = $this->Db->ErrorMsg();
                  $dbErrorCode = $this->Db->ErrorNo();
                  $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) {
                      $this->sc_erro_update = $dbErrorMessage;
                      $this->NM_rollback_db();
                      if ($this->NM_ajax_flag) {
                          form_vicidial_users_pack_ajax_response();
                      }
                      exit;
                  }
              }
              elseif (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " User"); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'user';
                  $rsUni->Close();
              }
              else
              {
                  $rsUni->Close();
              }
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "user = '$this->user', pass = '$this->pass', full_name = '$this->full_name', user_level = $this->user_level, user_group = '$this->user_group', phone_login = '$this->phone_login', phone_pass = '$this->phone_pass'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "user = '$this->user', pass = '$this->pass', full_name = '$this->full_name', user_level = $this->user_level, user_group = '$this->user_group', phone_login = '$this->phone_login', phone_pass = '$this->phone_pass'"; 
              } 
              if (isset($NM_val_form['delete_users']) && $NM_val_form['delete_users'] != $this->nmgp_dados_select['delete_users']) 
              { 
                  $SC_fields_update[] = "delete_users = '$this->delete_users'"; 
              } 
              if (isset($NM_val_form['delete_user_groups']) && $NM_val_form['delete_user_groups'] != $this->nmgp_dados_select['delete_user_groups']) 
              { 
                  $SC_fields_update[] = "delete_user_groups = '$this->delete_user_groups'"; 
              } 
              if (isset($NM_val_form['delete_lists']) && $NM_val_form['delete_lists'] != $this->nmgp_dados_select['delete_lists']) 
              { 
                  $SC_fields_update[] = "delete_lists = '$this->delete_lists'"; 
              } 
              if (isset($NM_val_form['delete_campaigns']) && $NM_val_form['delete_campaigns'] != $this->nmgp_dados_select['delete_campaigns']) 
              { 
                  $SC_fields_update[] = "delete_campaigns = '$this->delete_campaigns'"; 
              } 
              if (isset($NM_val_form['delete_ingroups']) && $NM_val_form['delete_ingroups'] != $this->nmgp_dados_select['delete_ingroups']) 
              { 
                  $SC_fields_update[] = "delete_ingroups = '$this->delete_ingroups'"; 
              } 
              if (isset($NM_val_form['delete_remote_agents']) && $NM_val_form['delete_remote_agents'] != $this->nmgp_dados_select['delete_remote_agents']) 
              { 
                  $SC_fields_update[] = "delete_remote_agents = '$this->delete_remote_agents'"; 
              } 
              if (isset($NM_val_form['load_leads']) && $NM_val_form['load_leads'] != $this->nmgp_dados_select['load_leads']) 
              { 
                  $SC_fields_update[] = "load_leads = '$this->load_leads'"; 
              } 
              if (isset($NM_val_form['campaign_detail']) && $NM_val_form['campaign_detail'] != $this->nmgp_dados_select['campaign_detail']) 
              { 
                  $SC_fields_update[] = "campaign_detail = '$this->campaign_detail'"; 
              } 
              if (isset($NM_val_form['ast_admin_access']) && $NM_val_form['ast_admin_access'] != $this->nmgp_dados_select['ast_admin_access']) 
              { 
                  $SC_fields_update[] = "ast_admin_access = '$this->ast_admin_access'"; 
              } 
              if (isset($NM_val_form['ast_delete_phones']) && $NM_val_form['ast_delete_phones'] != $this->nmgp_dados_select['ast_delete_phones']) 
              { 
                  $SC_fields_update[] = "ast_delete_phones = '$this->ast_delete_phones'"; 
              } 
              if (isset($NM_val_form['delete_scripts']) && $NM_val_form['delete_scripts'] != $this->nmgp_dados_select['delete_scripts']) 
              { 
                  $SC_fields_update[] = "delete_scripts = '$this->delete_scripts'"; 
              } 
              if (isset($NM_val_form['modify_leads']) && $NM_val_form['modify_leads'] != $this->nmgp_dados_select['modify_leads']) 
              { 
                  $SC_fields_update[] = "modify_leads = '$this->modify_leads'"; 
              } 
              if (isset($NM_val_form['hotkeys_active']) && $NM_val_form['hotkeys_active'] != $this->nmgp_dados_select['hotkeys_active']) 
              { 
                  $SC_fields_update[] = "hotkeys_active = '$this->hotkeys_active'"; 
              } 
              if (isset($NM_val_form['change_agent_campaign']) && $NM_val_form['change_agent_campaign'] != $this->nmgp_dados_select['change_agent_campaign']) 
              { 
                  $SC_fields_update[] = "change_agent_campaign = '$this->change_agent_campaign'"; 
              } 
              if (isset($NM_val_form['agent_choose_ingroups']) && $NM_val_form['agent_choose_ingroups'] != $this->nmgp_dados_select['agent_choose_ingroups']) 
              { 
                  $SC_fields_update[] = "agent_choose_ingroups = '$this->agent_choose_ingroups'"; 
              } 
              if (isset($NM_val_form['closer_campaigns']) && $NM_val_form['closer_campaigns'] != $this->nmgp_dados_select['closer_campaigns']) 
              { 
                  $SC_fields_update[] = "closer_campaigns = '$this->closer_campaigns'"; 
              } 
              if (isset($NM_val_form['scheduled_callbacks']) && $NM_val_form['scheduled_callbacks'] != $this->nmgp_dados_select['scheduled_callbacks']) 
              { 
                  $SC_fields_update[] = "scheduled_callbacks = '$this->scheduled_callbacks'"; 
              } 
              if (isset($NM_val_form['agentonly_callbacks']) && $NM_val_form['agentonly_callbacks'] != $this->nmgp_dados_select['agentonly_callbacks']) 
              { 
                  $SC_fields_update[] = "agentonly_callbacks = '$this->agentonly_callbacks'"; 
              } 
              if (isset($NM_val_form['agentcall_manual']) && $NM_val_form['agentcall_manual'] != $this->nmgp_dados_select['agentcall_manual']) 
              { 
                  $SC_fields_update[] = "agentcall_manual = '$this->agentcall_manual'"; 
              } 
              if (isset($NM_val_form['vicidial_recording']) && $NM_val_form['vicidial_recording'] != $this->nmgp_dados_select['vicidial_recording']) 
              { 
                  $SC_fields_update[] = "vicidial_recording = '$this->vicidial_recording'"; 
              } 
              if (isset($NM_val_form['vicidial_transfers']) && $NM_val_form['vicidial_transfers'] != $this->nmgp_dados_select['vicidial_transfers']) 
              { 
                  $SC_fields_update[] = "vicidial_transfers = '$this->vicidial_transfers'"; 
              } 
              if (isset($NM_val_form['delete_filters']) && $NM_val_form['delete_filters'] != $this->nmgp_dados_select['delete_filters']) 
              { 
                  $SC_fields_update[] = "delete_filters = '$this->delete_filters'"; 
              } 
              if (isset($NM_val_form['alter_agent_interface_options']) && $NM_val_form['alter_agent_interface_options'] != $this->nmgp_dados_select['alter_agent_interface_options']) 
              { 
                  $SC_fields_update[] = "alter_agent_interface_options = '$this->alter_agent_interface_options'"; 
              } 
              if (isset($NM_val_form['closer_default_blended']) && $NM_val_form['closer_default_blended'] != $this->nmgp_dados_select['closer_default_blended']) 
              { 
                  $SC_fields_update[] = "closer_default_blended = '$this->closer_default_blended'"; 
              } 
              if (isset($NM_val_form['delete_call_times']) && $NM_val_form['delete_call_times'] != $this->nmgp_dados_select['delete_call_times']) 
              { 
                  $SC_fields_update[] = "delete_call_times = '$this->delete_call_times'"; 
              } 
              if (isset($NM_val_form['modify_call_times']) && $NM_val_form['modify_call_times'] != $this->nmgp_dados_select['modify_call_times']) 
              { 
                  $SC_fields_update[] = "modify_call_times = '$this->modify_call_times'"; 
              } 
              if (isset($NM_val_form['modify_users']) && $NM_val_form['modify_users'] != $this->nmgp_dados_select['modify_users']) 
              { 
                  $SC_fields_update[] = "modify_users = '$this->modify_users'"; 
              } 
              if (isset($NM_val_form['modify_campaigns']) && $NM_val_form['modify_campaigns'] != $this->nmgp_dados_select['modify_campaigns']) 
              { 
                  $SC_fields_update[] = "modify_campaigns = '$this->modify_campaigns'"; 
              } 
              if (isset($NM_val_form['modify_lists']) && $NM_val_form['modify_lists'] != $this->nmgp_dados_select['modify_lists']) 
              { 
                  $SC_fields_update[] = "modify_lists = '$this->modify_lists'"; 
              } 
              if (isset($NM_val_form['modify_scripts']) && $NM_val_form['modify_scripts'] != $this->nmgp_dados_select['modify_scripts']) 
              { 
                  $SC_fields_update[] = "modify_scripts = '$this->modify_scripts'"; 
              } 
              if (isset($NM_val_form['modify_filters']) && $NM_val_form['modify_filters'] != $this->nmgp_dados_select['modify_filters']) 
              { 
                  $SC_fields_update[] = "modify_filters = '$this->modify_filters'"; 
              } 
              if (isset($NM_val_form['modify_ingroups']) && $NM_val_form['modify_ingroups'] != $this->nmgp_dados_select['modify_ingroups']) 
              { 
                  $SC_fields_update[] = "modify_ingroups = '$this->modify_ingroups'"; 
              } 
              if (isset($NM_val_form['modify_usergroups']) && $NM_val_form['modify_usergroups'] != $this->nmgp_dados_select['modify_usergroups']) 
              { 
                  $SC_fields_update[] = "modify_usergroups = '$this->modify_usergroups'"; 
              } 
              if (isset($NM_val_form['modify_remoteagents']) && $NM_val_form['modify_remoteagents'] != $this->nmgp_dados_select['modify_remoteagents']) 
              { 
                  $SC_fields_update[] = "modify_remoteagents = '$this->modify_remoteagents'"; 
              } 
              if (isset($NM_val_form['modify_servers']) && $NM_val_form['modify_servers'] != $this->nmgp_dados_select['modify_servers']) 
              { 
                  $SC_fields_update[] = "modify_servers = '$this->modify_servers'"; 
              } 
              if (isset($NM_val_form['view_reports']) && $NM_val_form['view_reports'] != $this->nmgp_dados_select['view_reports']) 
              { 
                  $SC_fields_update[] = "view_reports = '$this->view_reports'"; 
              } 
              if (isset($NM_val_form['vicidial_recording_override']) && $NM_val_form['vicidial_recording_override'] != $this->nmgp_dados_select['vicidial_recording_override']) 
              { 
                  $SC_fields_update[] = "vicidial_recording_override = '$this->vicidial_recording_override'"; 
              } 
              if (isset($NM_val_form['alter_custdata_override']) && $NM_val_form['alter_custdata_override'] != $this->nmgp_dados_select['alter_custdata_override']) 
              { 
                  $SC_fields_update[] = "alter_custdata_override = '$this->alter_custdata_override'"; 
              } 
              if (isset($NM_val_form['qc_enabled']) && $NM_val_form['qc_enabled'] != $this->nmgp_dados_select['qc_enabled']) 
              { 
                  $SC_fields_update[] = "qc_enabled = '$this->qc_enabled'"; 
              } 
              if (isset($NM_val_form['qc_user_level']) && $NM_val_form['qc_user_level'] != $this->nmgp_dados_select['qc_user_level']) 
              { 
                  $SC_fields_update[] = "qc_user_level = $this->qc_user_level"; 
              } 
              if (isset($NM_val_form['qc_pass']) && $NM_val_form['qc_pass'] != $this->nmgp_dados_select['qc_pass']) 
              { 
                  $SC_fields_update[] = "qc_pass = '$this->qc_pass'"; 
              } 
              if (isset($NM_val_form['qc_finish']) && $NM_val_form['qc_finish'] != $this->nmgp_dados_select['qc_finish']) 
              { 
                  $SC_fields_update[] = "qc_finish = '$this->qc_finish'"; 
              } 
              if (isset($NM_val_form['qc_commit']) && $NM_val_form['qc_commit'] != $this->nmgp_dados_select['qc_commit']) 
              { 
                  $SC_fields_update[] = "qc_commit = '$this->qc_commit'"; 
              } 
              if (isset($NM_val_form['add_timeclock_log']) && $NM_val_form['add_timeclock_log'] != $this->nmgp_dados_select['add_timeclock_log']) 
              { 
                  $SC_fields_update[] = "add_timeclock_log = '$this->add_timeclock_log'"; 
              } 
              if (isset($NM_val_form['modify_timeclock_log']) && $NM_val_form['modify_timeclock_log'] != $this->nmgp_dados_select['modify_timeclock_log']) 
              { 
                  $SC_fields_update[] = "modify_timeclock_log = '$this->modify_timeclock_log'"; 
              } 
              if (isset($NM_val_form['delete_timeclock_log']) && $NM_val_form['delete_timeclock_log'] != $this->nmgp_dados_select['delete_timeclock_log']) 
              { 
                  $SC_fields_update[] = "delete_timeclock_log = '$this->delete_timeclock_log'"; 
              } 
              if (isset($NM_val_form['alter_custphone_override']) && $NM_val_form['alter_custphone_override'] != $this->nmgp_dados_select['alter_custphone_override']) 
              { 
                  $SC_fields_update[] = "alter_custphone_override = '$this->alter_custphone_override'"; 
              } 
              if (isset($NM_val_form['vdc_agent_api_access']) && $NM_val_form['vdc_agent_api_access'] != $this->nmgp_dados_select['vdc_agent_api_access']) 
              { 
                  $SC_fields_update[] = "vdc_agent_api_access = '$this->vdc_agent_api_access'"; 
              } 
              if (isset($NM_val_form['modify_inbound_dids']) && $NM_val_form['modify_inbound_dids'] != $this->nmgp_dados_select['modify_inbound_dids']) 
              { 
                  $SC_fields_update[] = "modify_inbound_dids = '$this->modify_inbound_dids'"; 
              } 
              if (isset($NM_val_form['delete_inbound_dids']) && $NM_val_form['delete_inbound_dids'] != $this->nmgp_dados_select['delete_inbound_dids']) 
              { 
                  $SC_fields_update[] = "delete_inbound_dids = '$this->delete_inbound_dids'"; 
              } 
              if (isset($NM_val_form['active']) && $NM_val_form['active'] != $this->nmgp_dados_select['active']) 
              { 
                  $SC_fields_update[] = "active = '$this->active'"; 
              } 
              if (isset($NM_val_form['alert_enabled']) && $NM_val_form['alert_enabled'] != $this->nmgp_dados_select['alert_enabled']) 
              { 
                  $SC_fields_update[] = "alert_enabled = '$this->alert_enabled'"; 
              } 
              if (isset($NM_val_form['download_lists']) && $NM_val_form['download_lists'] != $this->nmgp_dados_select['download_lists']) 
              { 
                  $SC_fields_update[] = "download_lists = '$this->download_lists'"; 
              } 
              if (isset($NM_val_form['agent_shift_enforcement_override']) && $NM_val_form['agent_shift_enforcement_override'] != $this->nmgp_dados_select['agent_shift_enforcement_override']) 
              { 
                  $SC_fields_update[] = "agent_shift_enforcement_override = '$this->agent_shift_enforcement_override'"; 
              } 
              if (isset($NM_val_form['manager_shift_enforcement_override']) && $NM_val_form['manager_shift_enforcement_override'] != $this->nmgp_dados_select['manager_shift_enforcement_override']) 
              { 
                  $SC_fields_update[] = "manager_shift_enforcement_override = '$this->manager_shift_enforcement_override'"; 
              } 
              if (isset($NM_val_form['shift_override_flag']) && $NM_val_form['shift_override_flag'] != $this->nmgp_dados_select['shift_override_flag']) 
              { 
                  $SC_fields_update[] = "shift_override_flag = '$this->shift_override_flag'"; 
              } 
              if (isset($NM_val_form['export_reports']) && $NM_val_form['export_reports'] != $this->nmgp_dados_select['export_reports']) 
              { 
                  $SC_fields_update[] = "export_reports = '$this->export_reports'"; 
              } 
              if (isset($NM_val_form['delete_from_dnc']) && $NM_val_form['delete_from_dnc'] != $this->nmgp_dados_select['delete_from_dnc']) 
              { 
                  $SC_fields_update[] = "delete_from_dnc = '$this->delete_from_dnc'"; 
              } 
              if (isset($NM_val_form['email']) && $NM_val_form['email'] != $this->nmgp_dados_select['email']) 
              { 
                  $SC_fields_update[] = "email = '$this->email'"; 
              } 
              if (isset($NM_val_form['user_code']) && $NM_val_form['user_code'] != $this->nmgp_dados_select['user_code']) 
              { 
                  $SC_fields_update[] = "user_code = '$this->user_code'"; 
              } 
              if (isset($NM_val_form['territory']) && $NM_val_form['territory'] != $this->nmgp_dados_select['territory']) 
              { 
                  $SC_fields_update[] = "territory = '$this->territory'"; 
              } 
              if (isset($NM_val_form['allow_alerts']) && $NM_val_form['allow_alerts'] != $this->nmgp_dados_select['allow_alerts']) 
              { 
                  $SC_fields_update[] = "allow_alerts = '$this->allow_alerts'"; 
              } 
              if (isset($NM_val_form['agent_choose_territories']) && $NM_val_form['agent_choose_territories'] != $this->nmgp_dados_select['agent_choose_territories']) 
              { 
                  $SC_fields_update[] = "agent_choose_territories = '$this->agent_choose_territories'"; 
              } 
              if (isset($NM_val_form['custom_one']) && $NM_val_form['custom_one'] != $this->nmgp_dados_select['custom_one']) 
              { 
                  $SC_fields_update[] = "custom_one = '$this->custom_one'"; 
              } 
              if (isset($NM_val_form['custom_two']) && $NM_val_form['custom_two'] != $this->nmgp_dados_select['custom_two']) 
              { 
                  $SC_fields_update[] = "custom_two = '$this->custom_two'"; 
              } 
              if (isset($NM_val_form['custom_three']) && $NM_val_form['custom_three'] != $this->nmgp_dados_select['custom_three']) 
              { 
                  $SC_fields_update[] = "custom_three = '$this->custom_three'"; 
              } 
              if (isset($NM_val_form['custom_four']) && $NM_val_form['custom_four'] != $this->nmgp_dados_select['custom_four']) 
              { 
                  $SC_fields_update[] = "custom_four = '$this->custom_four'"; 
              } 
              if (isset($NM_val_form['custom_five']) && $NM_val_form['custom_five'] != $this->nmgp_dados_select['custom_five']) 
              { 
                  $SC_fields_update[] = "custom_five = '$this->custom_five'"; 
              } 
              if (isset($NM_val_form['voicemail_id']) && $NM_val_form['voicemail_id'] != $this->nmgp_dados_select['voicemail_id']) 
              { 
                  $SC_fields_update[] = "voicemail_id = '$this->voicemail_id'"; 
              } 
              if (isset($NM_val_form['agent_call_log_view_override']) && $NM_val_form['agent_call_log_view_override'] != $this->nmgp_dados_select['agent_call_log_view_override']) 
              { 
                  $SC_fields_update[] = "agent_call_log_view_override = '$this->agent_call_log_view_override'"; 
              } 
              if (isset($NM_val_form['callcard_admin']) && $NM_val_form['callcard_admin'] != $this->nmgp_dados_select['callcard_admin']) 
              { 
                  $SC_fields_update[] = "callcard_admin = '$this->callcard_admin'"; 
              } 
              if (isset($NM_val_form['agent_choose_blended']) && $NM_val_form['agent_choose_blended'] != $this->nmgp_dados_select['agent_choose_blended']) 
              { 
                  $SC_fields_update[] = "agent_choose_blended = '$this->agent_choose_blended'"; 
              } 
              if (isset($NM_val_form['realtime_block_user_info']) && $NM_val_form['realtime_block_user_info'] != $this->nmgp_dados_select['realtime_block_user_info']) 
              { 
                  $SC_fields_update[] = "realtime_block_user_info = '$this->realtime_block_user_info'"; 
              } 
              if (isset($NM_val_form['custom_fields_modify']) && $NM_val_form['custom_fields_modify'] != $this->nmgp_dados_select['custom_fields_modify']) 
              { 
                  $SC_fields_update[] = "custom_fields_modify = '$this->custom_fields_modify'"; 
              } 
              if (isset($NM_val_form['force_change_password']) && $NM_val_form['force_change_password'] != $this->nmgp_dados_select['force_change_password']) 
              { 
                  $SC_fields_update[] = "force_change_password = '$this->force_change_password'"; 
              } 
              if (isset($NM_val_form['agent_lead_search_override']) && $NM_val_form['agent_lead_search_override'] != $this->nmgp_dados_select['agent_lead_search_override']) 
              { 
                  $SC_fields_update[] = "agent_lead_search_override = '$this->agent_lead_search_override'"; 
              } 
              if (isset($NM_val_form['modify_shifts']) && $NM_val_form['modify_shifts'] != $this->nmgp_dados_select['modify_shifts']) 
              { 
                  $SC_fields_update[] = "modify_shifts = '$this->modify_shifts'"; 
              } 
              if (isset($NM_val_form['modify_phones']) && $NM_val_form['modify_phones'] != $this->nmgp_dados_select['modify_phones']) 
              { 
                  $SC_fields_update[] = "modify_phones = '$this->modify_phones'"; 
              } 
              if (isset($NM_val_form['modify_carriers']) && $NM_val_form['modify_carriers'] != $this->nmgp_dados_select['modify_carriers']) 
              { 
                  $SC_fields_update[] = "modify_carriers = '$this->modify_carriers'"; 
              } 
              if (isset($NM_val_form['modify_labels']) && $NM_val_form['modify_labels'] != $this->nmgp_dados_select['modify_labels']) 
              { 
                  $SC_fields_update[] = "modify_labels = '$this->modify_labels'"; 
              } 
              if (isset($NM_val_form['modify_statuses']) && $NM_val_form['modify_statuses'] != $this->nmgp_dados_select['modify_statuses']) 
              { 
                  $SC_fields_update[] = "modify_statuses = '$this->modify_statuses'"; 
              } 
              if (isset($NM_val_form['modify_voicemail']) && $NM_val_form['modify_voicemail'] != $this->nmgp_dados_select['modify_voicemail']) 
              { 
                  $SC_fields_update[] = "modify_voicemail = '$this->modify_voicemail'"; 
              } 
              if (isset($NM_val_form['modify_audiostore']) && $NM_val_form['modify_audiostore'] != $this->nmgp_dados_select['modify_audiostore']) 
              { 
                  $SC_fields_update[] = "modify_audiostore = '$this->modify_audiostore'"; 
              } 
              if (isset($NM_val_form['modify_moh']) && $NM_val_form['modify_moh'] != $this->nmgp_dados_select['modify_moh']) 
              { 
                  $SC_fields_update[] = "modify_moh = '$this->modify_moh'"; 
              } 
              if (isset($NM_val_form['modify_tts']) && $NM_val_form['modify_tts'] != $this->nmgp_dados_select['modify_tts']) 
              { 
                  $SC_fields_update[] = "modify_tts = '$this->modify_tts'"; 
              } 
              if (isset($NM_val_form['preset_contact_search']) && $NM_val_form['preset_contact_search'] != $this->nmgp_dados_select['preset_contact_search']) 
              { 
                  $SC_fields_update[] = "preset_contact_search = '$this->preset_contact_search'"; 
              } 
              if (isset($NM_val_form['modify_contacts']) && $NM_val_form['modify_contacts'] != $this->nmgp_dados_select['modify_contacts']) 
              { 
                  $SC_fields_update[] = "modify_contacts = '$this->modify_contacts'"; 
              } 
              if (isset($NM_val_form['modify_same_user_level']) && $NM_val_form['modify_same_user_level'] != $this->nmgp_dados_select['modify_same_user_level']) 
              { 
                  $SC_fields_update[] = "modify_same_user_level = '$this->modify_same_user_level'"; 
              } 
              if (isset($NM_val_form['admin_hide_lead_data']) && $NM_val_form['admin_hide_lead_data'] != $this->nmgp_dados_select['admin_hide_lead_data']) 
              { 
                  $SC_fields_update[] = "admin_hide_lead_data = '$this->admin_hide_lead_data'"; 
              } 
              if (isset($NM_val_form['admin_hide_phone_data']) && $NM_val_form['admin_hide_phone_data'] != $this->nmgp_dados_select['admin_hide_phone_data']) 
              { 
                  $SC_fields_update[] = "admin_hide_phone_data = '$this->admin_hide_phone_data'"; 
              } 
              if (isset($NM_val_form['agentcall_email']) && $NM_val_form['agentcall_email'] != $this->nmgp_dados_select['agentcall_email']) 
              { 
                  $SC_fields_update[] = "agentcall_email = '$this->agentcall_email'"; 
              } 
              if (isset($NM_val_form['modify_email_accounts']) && $NM_val_form['modify_email_accounts'] != $this->nmgp_dados_select['modify_email_accounts']) 
              { 
                  $SC_fields_update[] = "modify_email_accounts = '$this->modify_email_accounts'"; 
              } 
              if (isset($NM_val_form['failed_login_count']) && $NM_val_form['failed_login_count'] != $this->nmgp_dados_select['failed_login_count']) 
              { 
                  $SC_fields_update[] = "failed_login_count = $this->failed_login_count"; 
              } 
              if (isset($NM_val_form['last_login_date']) && $NM_val_form['last_login_date'] != $this->nmgp_dados_select['last_login_date']) 
              { 
                  $SC_fields_update[] = "last_login_date = " . $this->Ini->date_delim . $this->last_login_date . $this->Ini->date_delim1 . ""; 
              } 
              if (isset($NM_val_form['last_ip']) && $NM_val_form['last_ip'] != $this->nmgp_dados_select['last_ip']) 
              { 
                  $SC_fields_update[] = "last_ip = '$this->last_ip'"; 
              } 
              if (isset($NM_val_form['pass_hash']) && $NM_val_form['pass_hash'] != $this->nmgp_dados_select['pass_hash']) 
              { 
                  $SC_fields_update[] = "pass_hash = '$this->pass_hash'"; 
              } 
              if (isset($NM_val_form['alter_admin_interface_options']) && $NM_val_form['alter_admin_interface_options'] != $this->nmgp_dados_select['alter_admin_interface_options']) 
              { 
                  $SC_fields_update[] = "alter_admin_interface_options = '$this->alter_admin_interface_options'"; 
              } 
              if (isset($NM_val_form['max_inbound_calls']) && $NM_val_form['max_inbound_calls'] != $this->nmgp_dados_select['max_inbound_calls']) 
              { 
                  $SC_fields_update[] = "max_inbound_calls = $this->max_inbound_calls"; 
              } 
              if (isset($NM_val_form['modify_custom_dialplans']) && $NM_val_form['modify_custom_dialplans'] != $this->nmgp_dados_select['modify_custom_dialplans']) 
              { 
                  $SC_fields_update[] = "modify_custom_dialplans = '$this->modify_custom_dialplans'"; 
              } 
              $aDoNotUpdate = array();
              $comando .= implode(",", $SC_fields_update);  
              $comando .= " WHERE user_id = $this->user_id ";  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_vicidial_users_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->user = $this->user_before_qstr;
              $this->pass = $this->pass_before_qstr;
              $this->full_name = $this->full_name_before_qstr;
              $this->user_group = $this->user_group_before_qstr;
              $this->phone_login = $this->phone_login_before_qstr;
              $this->phone_pass = $this->phone_pass_before_qstr;
              $this->closer_campaigns = $this->closer_campaigns_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->user_code = $this->user_code_before_qstr;
              $this->territory = $this->territory_before_qstr;
              $this->custom_one = $this->custom_one_before_qstr;
              $this->custom_two = $this->custom_two_before_qstr;
              $this->custom_three = $this->custom_three_before_qstr;
              $this->custom_four = $this->custom_four_before_qstr;
              $this->custom_five = $this->custom_five_before_qstr;
              $this->voicemail_id = $this->voicemail_id_before_qstr;
              $this->last_ip = $this->last_ip_before_qstr;
              $this->pass_hash = $this->pass_hash_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['user'])) { $this->user = $NM_val_form['user']; }
              elseif (isset($this->user)) { $this->nm_limpa_alfa($this->user); }
              if     (isset($NM_val_form) && isset($NM_val_form['pass'])) { $this->pass = $NM_val_form['pass']; }
              elseif (isset($this->pass)) { $this->nm_limpa_alfa($this->pass); }
              if     (isset($NM_val_form) && isset($NM_val_form['full_name'])) { $this->full_name = $NM_val_form['full_name']; }
              elseif (isset($this->full_name)) { $this->nm_limpa_alfa($this->full_name); }
              if     (isset($NM_val_form) && isset($NM_val_form['user_level'])) { $this->user_level = $NM_val_form['user_level']; }
              elseif (isset($this->user_level)) { $this->nm_limpa_alfa($this->user_level); }
              if     (isset($NM_val_form) && isset($NM_val_form['user_group'])) { $this->user_group = $NM_val_form['user_group']; }
              elseif (isset($this->user_group)) { $this->nm_limpa_alfa($this->user_group); }
              if     (isset($NM_val_form) && isset($NM_val_form['phone_login'])) { $this->phone_login = $NM_val_form['phone_login']; }
              elseif (isset($this->phone_login)) { $this->nm_limpa_alfa($this->phone_login); }
              if     (isset($NM_val_form) && isset($NM_val_form['phone_pass'])) { $this->phone_pass = $NM_val_form['phone_pass']; }
              elseif (isset($this->phone_pass)) { $this->nm_limpa_alfa($this->phone_pass); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('full_name', 'user', 'pass', 'user_level', 'user_group', 'phone_login', 'phone_pass'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "user_id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
              $Cmd_Unique = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where user = '" . $this->user . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (false === $rsUni)
              {
                  $dbErrorMessage = $this->Db->ErrorMsg();
                  $dbErrorCode = $this->Db->ErrorNo();
                  $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                  {
                      $this->sc_erro_insert = $dbErrorMessage;
                      $this->nmgp_opcao     = 'refresh_insert';
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_vicidial_users_pack_ajax_response();
                          exit;
                      }
                  }
              }
              elseif (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " User"); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'user';
                  $rsUni->Close();
              }
              else
              {
                  $rsUni->Close();
              }
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_vicidial_users_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->user_level != "")
                  { 
                       $compl_insert     .= ", user_level";
                       $compl_insert_val .= ", $this->user_level";
                  } 
                  if ($this->agent_choose_ingroups != "")
                  { 
                       $compl_insert     .= ", agent_choose_ingroups";
                       $compl_insert_val .= ", '$this->agent_choose_ingroups'";
                  } 
                  if ($this->scheduled_callbacks != "")
                  { 
                       $compl_insert     .= ", scheduled_callbacks";
                       $compl_insert_val .= ", '$this->scheduled_callbacks'";
                  } 
                  if ($this->vicidial_recording != "")
                  { 
                       $compl_insert     .= ", vicidial_recording";
                       $compl_insert_val .= ", '$this->vicidial_recording'";
                  } 
                  if ($this->vicidial_transfers != "")
                  { 
                       $compl_insert     .= ", vicidial_transfers";
                       $compl_insert_val .= ", '$this->vicidial_transfers'";
                  } 
                  if ($this->vicidial_recording_override != "")
                  { 
                       $compl_insert     .= ", vicidial_recording_override";
                       $compl_insert_val .= ", '$this->vicidial_recording_override'";
                  } 
                  if ($this->alter_custdata_override != "")
                  { 
                       $compl_insert     .= ", alter_custdata_override";
                       $compl_insert_val .= ", '$this->alter_custdata_override'";
                  } 
                  if ($this->qc_user_level != "")
                  { 
                       $compl_insert     .= ", qc_user_level";
                       $compl_insert_val .= ", $this->qc_user_level";
                  } 
                  if ($this->alter_custphone_override != "")
                  { 
                       $compl_insert     .= ", alter_custphone_override";
                       $compl_insert_val .= ", '$this->alter_custphone_override'";
                  } 
                  if ($this->active != "")
                  { 
                       $compl_insert     .= ", active";
                       $compl_insert_val .= ", '$this->active'";
                  } 
                  if ($this->agent_shift_enforcement_override != "")
                  { 
                       $compl_insert     .= ", agent_shift_enforcement_override";
                       $compl_insert_val .= ", '$this->agent_shift_enforcement_override'";
                  } 
                  if ($this->agent_choose_territories != "")
                  { 
                       $compl_insert     .= ", agent_choose_territories";
                       $compl_insert_val .= ", '$this->agent_choose_territories'";
                  } 
                  if ($this->agent_call_log_view_override != "")
                  { 
                       $compl_insert     .= ", agent_call_log_view_override";
                       $compl_insert_val .= ", '$this->agent_call_log_view_override'";
                  } 
                  if ($this->agent_choose_blended != "")
                  { 
                       $compl_insert     .= ", agent_choose_blended";
                       $compl_insert_val .= ", '$this->agent_choose_blended'";
                  } 
                  if ($this->force_change_password != "")
                  { 
                       $compl_insert     .= ", force_change_password";
                       $compl_insert_val .= ", '$this->force_change_password'";
                  } 
                  if ($this->agent_lead_search_override != "")
                  { 
                       $compl_insert     .= ", agent_lead_search_override";
                       $compl_insert_val .= ", '$this->agent_lead_search_override'";
                  } 
                  if ($this->preset_contact_search != "")
                  { 
                       $compl_insert     .= ", preset_contact_search";
                       $compl_insert_val .= ", '$this->preset_contact_search'";
                  } 
                  if ($this->modify_same_user_level != "")
                  { 
                       $compl_insert     .= ", modify_same_user_level";
                       $compl_insert_val .= ", '$this->modify_same_user_level'";
                  } 
                  if ($this->last_login_date != "")
                  { 
                       $compl_insert     .= ", last_login_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->last_login_date . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->alter_admin_interface_options != "")
                  { 
                       $compl_insert     .= ", alter_admin_interface_options";
                       $compl_insert_val .= ", '$this->alter_admin_interface_options'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "user, pass, full_name, user_group, phone_login, phone_pass, delete_users, delete_user_groups, delete_lists, delete_campaigns, delete_ingroups, delete_remote_agents, load_leads, campaign_detail, ast_admin_access, ast_delete_phones, delete_scripts, modify_leads, hotkeys_active, change_agent_campaign, closer_campaigns, agentonly_callbacks, agentcall_manual, delete_filters, alter_agent_interface_options, closer_default_blended, delete_call_times, modify_call_times, modify_users, modify_campaigns, modify_lists, modify_scripts, modify_filters, modify_ingroups, modify_usergroups, modify_remoteagents, modify_servers, view_reports, qc_enabled, qc_pass, qc_finish, qc_commit, add_timeclock_log, modify_timeclock_log, delete_timeclock_log, vdc_agent_api_access, modify_inbound_dids, delete_inbound_dids, alert_enabled, download_lists, manager_shift_enforcement_override, shift_override_flag, export_reports, delete_from_dnc, email, user_code, territory, allow_alerts, custom_one, custom_two, custom_three, custom_four, custom_five, voicemail_id, callcard_admin, realtime_block_user_info, custom_fields_modify, modify_shifts, modify_phones, modify_carriers, modify_labels, modify_statuses, modify_voicemail, modify_audiostore, modify_moh, modify_tts, modify_contacts, admin_hide_lead_data, admin_hide_phone_data, agentcall_email, modify_email_accounts, failed_login_count, last_ip, pass_hash, max_inbound_calls, modify_custom_dialplans $compl_insert) VALUES (" . $NM_seq_auto . "'$this->user', '$this->pass', '$this->full_name', '$this->user_group', '$this->phone_login', '$this->phone_pass', '$this->delete_users', '$this->delete_user_groups', '$this->delete_lists', '$this->delete_campaigns', '$this->delete_ingroups', '$this->delete_remote_agents', '$this->load_leads', '$this->campaign_detail', '$this->ast_admin_access', '$this->ast_delete_phones', '$this->delete_scripts', '$this->modify_leads', '$this->hotkeys_active', '$this->change_agent_campaign', '$this->closer_campaigns', '$this->agentonly_callbacks', '$this->agentcall_manual', '$this->delete_filters', '$this->alter_agent_interface_options', '$this->closer_default_blended', '$this->delete_call_times', '$this->modify_call_times', '$this->modify_users', '$this->modify_campaigns', '$this->modify_lists', '$this->modify_scripts', '$this->modify_filters', '$this->modify_ingroups', '$this->modify_usergroups', '$this->modify_remoteagents', '$this->modify_servers', '$this->view_reports', '$this->qc_enabled', '$this->qc_pass', '$this->qc_finish', '$this->qc_commit', '$this->add_timeclock_log', '$this->modify_timeclock_log', '$this->delete_timeclock_log', '$this->vdc_agent_api_access', '$this->modify_inbound_dids', '$this->delete_inbound_dids', '$this->alert_enabled', '$this->download_lists', '$this->manager_shift_enforcement_override', '$this->shift_override_flag', '$this->export_reports', '$this->delete_from_dnc', '$this->email', '$this->user_code', '$this->territory', '$this->allow_alerts', '$this->custom_one', '$this->custom_two', '$this->custom_three', '$this->custom_four', '$this->custom_five', '$this->voicemail_id', '$this->callcard_admin', '$this->realtime_block_user_info', '$this->custom_fields_modify', '$this->modify_shifts', '$this->modify_phones', '$this->modify_carriers', '$this->modify_labels', '$this->modify_statuses', '$this->modify_voicemail', '$this->modify_audiostore', '$this->modify_moh', '$this->modify_tts', '$this->modify_contacts', '$this->admin_hide_lead_data', '$this->admin_hide_phone_data', '$this->agentcall_email', '$this->modify_email_accounts', $this->failed_login_count, '$this->last_ip', '$this->pass_hash', $this->max_inbound_calls, '$this->modify_custom_dialplans' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->user_level != "")
                  { 
                       $compl_insert     .= ", user_level";
                       $compl_insert_val .= ", $this->user_level";
                  } 
                  if ($this->agent_choose_ingroups != "")
                  { 
                       $compl_insert     .= ", agent_choose_ingroups";
                       $compl_insert_val .= ", '$this->agent_choose_ingroups'";
                  } 
                  if ($this->scheduled_callbacks != "")
                  { 
                       $compl_insert     .= ", scheduled_callbacks";
                       $compl_insert_val .= ", '$this->scheduled_callbacks'";
                  } 
                  if ($this->vicidial_recording != "")
                  { 
                       $compl_insert     .= ", vicidial_recording";
                       $compl_insert_val .= ", '$this->vicidial_recording'";
                  } 
                  if ($this->vicidial_transfers != "")
                  { 
                       $compl_insert     .= ", vicidial_transfers";
                       $compl_insert_val .= ", '$this->vicidial_transfers'";
                  } 
                  if ($this->vicidial_recording_override != "")
                  { 
                       $compl_insert     .= ", vicidial_recording_override";
                       $compl_insert_val .= ", '$this->vicidial_recording_override'";
                  } 
                  if ($this->alter_custdata_override != "")
                  { 
                       $compl_insert     .= ", alter_custdata_override";
                       $compl_insert_val .= ", '$this->alter_custdata_override'";
                  } 
                  if ($this->qc_user_level != "")
                  { 
                       $compl_insert     .= ", qc_user_level";
                       $compl_insert_val .= ", $this->qc_user_level";
                  } 
                  if ($this->alter_custphone_override != "")
                  { 
                       $compl_insert     .= ", alter_custphone_override";
                       $compl_insert_val .= ", '$this->alter_custphone_override'";
                  } 
                  if ($this->active != "")
                  { 
                       $compl_insert     .= ", active";
                       $compl_insert_val .= ", '$this->active'";
                  } 
                  if ($this->agent_shift_enforcement_override != "")
                  { 
                       $compl_insert     .= ", agent_shift_enforcement_override";
                       $compl_insert_val .= ", '$this->agent_shift_enforcement_override'";
                  } 
                  if ($this->agent_choose_territories != "")
                  { 
                       $compl_insert     .= ", agent_choose_territories";
                       $compl_insert_val .= ", '$this->agent_choose_territories'";
                  } 
                  if ($this->agent_call_log_view_override != "")
                  { 
                       $compl_insert     .= ", agent_call_log_view_override";
                       $compl_insert_val .= ", '$this->agent_call_log_view_override'";
                  } 
                  if ($this->agent_choose_blended != "")
                  { 
                       $compl_insert     .= ", agent_choose_blended";
                       $compl_insert_val .= ", '$this->agent_choose_blended'";
                  } 
                  if ($this->force_change_password != "")
                  { 
                       $compl_insert     .= ", force_change_password";
                       $compl_insert_val .= ", '$this->force_change_password'";
                  } 
                  if ($this->agent_lead_search_override != "")
                  { 
                       $compl_insert     .= ", agent_lead_search_override";
                       $compl_insert_val .= ", '$this->agent_lead_search_override'";
                  } 
                  if ($this->preset_contact_search != "")
                  { 
                       $compl_insert     .= ", preset_contact_search";
                       $compl_insert_val .= ", '$this->preset_contact_search'";
                  } 
                  if ($this->modify_same_user_level != "")
                  { 
                       $compl_insert     .= ", modify_same_user_level";
                       $compl_insert_val .= ", '$this->modify_same_user_level'";
                  } 
                  if ($this->last_login_date != "")
                  { 
                       $compl_insert     .= ", last_login_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->last_login_date . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->alter_admin_interface_options != "")
                  { 
                       $compl_insert     .= ", alter_admin_interface_options";
                       $compl_insert_val .= ", '$this->alter_admin_interface_options'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "user, pass, full_name, user_group, phone_login, phone_pass, delete_users, delete_user_groups, delete_lists, delete_campaigns, delete_ingroups, delete_remote_agents, load_leads, campaign_detail, ast_admin_access, ast_delete_phones, delete_scripts, modify_leads, hotkeys_active, change_agent_campaign, closer_campaigns, agentonly_callbacks, agentcall_manual, delete_filters, alter_agent_interface_options, closer_default_blended, delete_call_times, modify_call_times, modify_users, modify_campaigns, modify_lists, modify_scripts, modify_filters, modify_ingroups, modify_usergroups, modify_remoteagents, modify_servers, view_reports, qc_enabled, qc_pass, qc_finish, qc_commit, add_timeclock_log, modify_timeclock_log, delete_timeclock_log, vdc_agent_api_access, modify_inbound_dids, delete_inbound_dids, alert_enabled, download_lists, manager_shift_enforcement_override, shift_override_flag, export_reports, delete_from_dnc, email, user_code, territory, allow_alerts, custom_one, custom_two, custom_three, custom_four, custom_five, voicemail_id, callcard_admin, realtime_block_user_info, custom_fields_modify, modify_shifts, modify_phones, modify_carriers, modify_labels, modify_statuses, modify_voicemail, modify_audiostore, modify_moh, modify_tts, modify_contacts, admin_hide_lead_data, admin_hide_phone_data, agentcall_email, modify_email_accounts, failed_login_count, last_ip, pass_hash, max_inbound_calls, modify_custom_dialplans $compl_insert) VALUES (" . $NM_seq_auto . "'$this->user', '$this->pass', '$this->full_name', '$this->user_group', '$this->phone_login', '$this->phone_pass', '$this->delete_users', '$this->delete_user_groups', '$this->delete_lists', '$this->delete_campaigns', '$this->delete_ingroups', '$this->delete_remote_agents', '$this->load_leads', '$this->campaign_detail', '$this->ast_admin_access', '$this->ast_delete_phones', '$this->delete_scripts', '$this->modify_leads', '$this->hotkeys_active', '$this->change_agent_campaign', '$this->closer_campaigns', '$this->agentonly_callbacks', '$this->agentcall_manual', '$this->delete_filters', '$this->alter_agent_interface_options', '$this->closer_default_blended', '$this->delete_call_times', '$this->modify_call_times', '$this->modify_users', '$this->modify_campaigns', '$this->modify_lists', '$this->modify_scripts', '$this->modify_filters', '$this->modify_ingroups', '$this->modify_usergroups', '$this->modify_remoteagents', '$this->modify_servers', '$this->view_reports', '$this->qc_enabled', '$this->qc_pass', '$this->qc_finish', '$this->qc_commit', '$this->add_timeclock_log', '$this->modify_timeclock_log', '$this->delete_timeclock_log', '$this->vdc_agent_api_access', '$this->modify_inbound_dids', '$this->delete_inbound_dids', '$this->alert_enabled', '$this->download_lists', '$this->manager_shift_enforcement_override', '$this->shift_override_flag', '$this->export_reports', '$this->delete_from_dnc', '$this->email', '$this->user_code', '$this->territory', '$this->allow_alerts', '$this->custom_one', '$this->custom_two', '$this->custom_three', '$this->custom_four', '$this->custom_five', '$this->voicemail_id', '$this->callcard_admin', '$this->realtime_block_user_info', '$this->custom_fields_modify', '$this->modify_shifts', '$this->modify_phones', '$this->modify_carriers', '$this->modify_labels', '$this->modify_statuses', '$this->modify_voicemail', '$this->modify_audiostore', '$this->modify_moh', '$this->modify_tts', '$this->modify_contacts', '$this->admin_hide_lead_data', '$this->admin_hide_phone_data', '$this->agentcall_email', '$this->modify_email_accounts', $this->failed_login_count, '$this->last_ip', '$this->pass_hash', $this->max_inbound_calls, '$this->modify_custom_dialplans' $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->user_level != "")
                  { 
                       $compl_insert     .= ", user_level";
                       $compl_insert_val .= ", $this->user_level";
                  } 
                  if ($this->agent_choose_ingroups != "")
                  { 
                       $compl_insert     .= ", agent_choose_ingroups";
                       $compl_insert_val .= ", '$this->agent_choose_ingroups'";
                  } 
                  if ($this->scheduled_callbacks != "")
                  { 
                       $compl_insert     .= ", scheduled_callbacks";
                       $compl_insert_val .= ", '$this->scheduled_callbacks'";
                  } 
                  if ($this->vicidial_recording != "")
                  { 
                       $compl_insert     .= ", vicidial_recording";
                       $compl_insert_val .= ", '$this->vicidial_recording'";
                  } 
                  if ($this->vicidial_transfers != "")
                  { 
                       $compl_insert     .= ", vicidial_transfers";
                       $compl_insert_val .= ", '$this->vicidial_transfers'";
                  } 
                  if ($this->vicidial_recording_override != "")
                  { 
                       $compl_insert     .= ", vicidial_recording_override";
                       $compl_insert_val .= ", '$this->vicidial_recording_override'";
                  } 
                  if ($this->alter_custdata_override != "")
                  { 
                       $compl_insert     .= ", alter_custdata_override";
                       $compl_insert_val .= ", '$this->alter_custdata_override'";
                  } 
                  if ($this->qc_user_level != "")
                  { 
                       $compl_insert     .= ", qc_user_level";
                       $compl_insert_val .= ", $this->qc_user_level";
                  } 
                  if ($this->alter_custphone_override != "")
                  { 
                       $compl_insert     .= ", alter_custphone_override";
                       $compl_insert_val .= ", '$this->alter_custphone_override'";
                  } 
                  if ($this->active != "")
                  { 
                       $compl_insert     .= ", active";
                       $compl_insert_val .= ", '$this->active'";
                  } 
                  if ($this->agent_shift_enforcement_override != "")
                  { 
                       $compl_insert     .= ", agent_shift_enforcement_override";
                       $compl_insert_val .= ", '$this->agent_shift_enforcement_override'";
                  } 
                  if ($this->agent_choose_territories != "")
                  { 
                       $compl_insert     .= ", agent_choose_territories";
                       $compl_insert_val .= ", '$this->agent_choose_territories'";
                  } 
                  if ($this->agent_call_log_view_override != "")
                  { 
                       $compl_insert     .= ", agent_call_log_view_override";
                       $compl_insert_val .= ", '$this->agent_call_log_view_override'";
                  } 
                  if ($this->agent_choose_blended != "")
                  { 
                       $compl_insert     .= ", agent_choose_blended";
                       $compl_insert_val .= ", '$this->agent_choose_blended'";
                  } 
                  if ($this->force_change_password != "")
                  { 
                       $compl_insert     .= ", force_change_password";
                       $compl_insert_val .= ", '$this->force_change_password'";
                  } 
                  if ($this->agent_lead_search_override != "")
                  { 
                       $compl_insert     .= ", agent_lead_search_override";
                       $compl_insert_val .= ", '$this->agent_lead_search_override'";
                  } 
                  if ($this->preset_contact_search != "")
                  { 
                       $compl_insert     .= ", preset_contact_search";
                       $compl_insert_val .= ", '$this->preset_contact_search'";
                  } 
                  if ($this->modify_same_user_level != "")
                  { 
                       $compl_insert     .= ", modify_same_user_level";
                       $compl_insert_val .= ", '$this->modify_same_user_level'";
                  } 
                  if ($this->last_login_date != "")
                  { 
                       $compl_insert     .= ", last_login_date";
                       $compl_insert_val .= ", " . $this->Ini->date_delim . $this->last_login_date . $this->Ini->date_delim1 . "";
                  } 
                  if ($this->alter_admin_interface_options != "")
                  { 
                       $compl_insert     .= ", alter_admin_interface_options";
                       $compl_insert_val .= ", '$this->alter_admin_interface_options'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "user, pass, full_name, user_group, phone_login, phone_pass, delete_users, delete_user_groups, delete_lists, delete_campaigns, delete_ingroups, delete_remote_agents, load_leads, campaign_detail, ast_admin_access, ast_delete_phones, delete_scripts, modify_leads, hotkeys_active, change_agent_campaign, closer_campaigns, agentonly_callbacks, agentcall_manual, delete_filters, alter_agent_interface_options, closer_default_blended, delete_call_times, modify_call_times, modify_users, modify_campaigns, modify_lists, modify_scripts, modify_filters, modify_ingroups, modify_usergroups, modify_remoteagents, modify_servers, view_reports, qc_enabled, qc_pass, qc_finish, qc_commit, add_timeclock_log, modify_timeclock_log, delete_timeclock_log, vdc_agent_api_access, modify_inbound_dids, delete_inbound_dids, alert_enabled, download_lists, manager_shift_enforcement_override, shift_override_flag, export_reports, delete_from_dnc, email, user_code, territory, allow_alerts, custom_one, custom_two, custom_three, custom_four, custom_five, voicemail_id, callcard_admin, realtime_block_user_info, custom_fields_modify, modify_shifts, modify_phones, modify_carriers, modify_labels, modify_statuses, modify_voicemail, modify_audiostore, modify_moh, modify_tts, modify_contacts, admin_hide_lead_data, admin_hide_phone_data, agentcall_email, modify_email_accounts, failed_login_count, last_ip, pass_hash, max_inbound_calls, modify_custom_dialplans $compl_insert) VALUES (" . $NM_seq_auto . "'$this->user', '$this->pass', '$this->full_name', '$this->user_group', '$this->phone_login', '$this->phone_pass', '$this->delete_users', '$this->delete_user_groups', '$this->delete_lists', '$this->delete_campaigns', '$this->delete_ingroups', '$this->delete_remote_agents', '$this->load_leads', '$this->campaign_detail', '$this->ast_admin_access', '$this->ast_delete_phones', '$this->delete_scripts', '$this->modify_leads', '$this->hotkeys_active', '$this->change_agent_campaign', '$this->closer_campaigns', '$this->agentonly_callbacks', '$this->agentcall_manual', '$this->delete_filters', '$this->alter_agent_interface_options', '$this->closer_default_blended', '$this->delete_call_times', '$this->modify_call_times', '$this->modify_users', '$this->modify_campaigns', '$this->modify_lists', '$this->modify_scripts', '$this->modify_filters', '$this->modify_ingroups', '$this->modify_usergroups', '$this->modify_remoteagents', '$this->modify_servers', '$this->view_reports', '$this->qc_enabled', '$this->qc_pass', '$this->qc_finish', '$this->qc_commit', '$this->add_timeclock_log', '$this->modify_timeclock_log', '$this->delete_timeclock_log', '$this->vdc_agent_api_access', '$this->modify_inbound_dids', '$this->delete_inbound_dids', '$this->alert_enabled', '$this->download_lists', '$this->manager_shift_enforcement_override', '$this->shift_override_flag', '$this->export_reports', '$this->delete_from_dnc', '$this->email', '$this->user_code', '$this->territory', '$this->allow_alerts', '$this->custom_one', '$this->custom_two', '$this->custom_three', '$this->custom_four', '$this->custom_five', '$this->voicemail_id', '$this->callcard_admin', '$this->realtime_block_user_info', '$this->custom_fields_modify', '$this->modify_shifts', '$this->modify_phones', '$this->modify_carriers', '$this->modify_labels', '$this->modify_statuses', '$this->modify_voicemail', '$this->modify_audiostore', '$this->modify_moh', '$this->modify_tts', '$this->modify_contacts', '$this->admin_hide_lead_data', '$this->admin_hide_phone_data', '$this->agentcall_email', '$this->modify_email_accounts', $this->failed_login_count, '$this->last_ip', '$this->pass_hash', $this->max_inbound_calls, '$this->modify_custom_dialplans' $compl_insert_val)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_vicidial_users_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->user_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->user_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->user = $this->user_before_qstr;
              $this->pass = $this->pass_before_qstr;
              $this->full_name = $this->full_name_before_qstr;
              $this->user_group = $this->user_group_before_qstr;
              $this->phone_login = $this->phone_login_before_qstr;
              $this->phone_pass = $this->phone_pass_before_qstr;
              $this->closer_campaigns = $this->closer_campaigns_before_qstr;
              $this->email = $this->email_before_qstr;
              $this->user_code = $this->user_code_before_qstr;
              $this->territory = $this->territory_before_qstr;
              $this->custom_one = $this->custom_one_before_qstr;
              $this->custom_two = $this->custom_two_before_qstr;
              $this->custom_three = $this->custom_three_before_qstr;
              $this->custom_four = $this->custom_four_before_qstr;
              $this->custom_five = $this->custom_five_before_qstr;
              $this->voicemail_id = $this->voicemail_id_before_qstr;
              $this->last_ip = $this->last_ip_before_qstr;
              $this->pass_hash = $this->pass_hash_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->user_id = substr($this->Db->qstr($this->user_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where user_id = $this->user_id"; 
          $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where user_id = $this->user_id "); 
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where user_id = $this->user_id "; 
              $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where user_id = $this->user_id "); 
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_vicidial_users_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['parms'] = "user_id?#?$this->user_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->user_id = null === $this->user_id ? null : substr($this->Db->qstr($this->user_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['parms'] = ""; 
          $nmgp_select = "SELECT user_id, user, pass, full_name, user_level, user_group, phone_login, phone_pass, delete_users, delete_user_groups, delete_lists, delete_campaigns, delete_ingroups, delete_remote_agents, load_leads, campaign_detail, ast_admin_access, ast_delete_phones, delete_scripts, modify_leads, hotkeys_active, change_agent_campaign, agent_choose_ingroups, closer_campaigns, scheduled_callbacks, agentonly_callbacks, agentcall_manual, vicidial_recording, vicidial_transfers, delete_filters, alter_agent_interface_options, closer_default_blended, delete_call_times, modify_call_times, modify_users, modify_campaigns, modify_lists, modify_scripts, modify_filters, modify_ingroups, modify_usergroups, modify_remoteagents, modify_servers, view_reports, vicidial_recording_override, alter_custdata_override, qc_enabled, qc_user_level, qc_pass, qc_finish, qc_commit, add_timeclock_log, modify_timeclock_log, delete_timeclock_log, alter_custphone_override, vdc_agent_api_access, modify_inbound_dids, delete_inbound_dids, active, alert_enabled, download_lists, agent_shift_enforcement_override, manager_shift_enforcement_override, shift_override_flag, export_reports, delete_from_dnc, email, user_code, territory, allow_alerts, agent_choose_territories, custom_one, custom_two, custom_three, custom_four, custom_five, voicemail_id, agent_call_log_view_override, callcard_admin, agent_choose_blended, realtime_block_user_info, custom_fields_modify, force_change_password, agent_lead_search_override, modify_shifts, modify_phones, modify_carriers, modify_labels, modify_statuses, modify_voicemail, modify_audiostore, modify_moh, modify_tts, preset_contact_search, modify_contacts, modify_same_user_level, admin_hide_lead_data, admin_hide_phone_data, agentcall_email, modify_email_accounts, failed_login_count, last_login_date, last_ip, pass_hash, alter_admin_interface_options, max_inbound_calls, modify_custom_dialplans from " . $this->Ini->nm_tabela ; 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              $aWhere[] = "user_id = $this->user_id"; 
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "user_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes['update'] = "off";
              $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes['delete'] = "off";
              return; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->user_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['user_id'] = $this->user_id;
              $this->user = $rs->fields[1] ; 
              $this->nmgp_dados_select['user'] = $this->user;
              $this->pass = $rs->fields[2] ; 
              $this->nmgp_dados_select['pass'] = $this->pass;
              $this->full_name = $rs->fields[3] ; 
              $this->nmgp_dados_select['full_name'] = $this->full_name;
              $this->user_level = $rs->fields[4] ; 
              $this->nmgp_dados_select['user_level'] = $this->user_level;
              $this->user_group = $rs->fields[5] ; 
              $this->nmgp_dados_select['user_group'] = $this->user_group;
              $this->phone_login = $rs->fields[6] ; 
              $this->nmgp_dados_select['phone_login'] = $this->phone_login;
              $this->phone_pass = $rs->fields[7] ; 
              $this->nmgp_dados_select['phone_pass'] = $this->phone_pass;
              $this->delete_users = $rs->fields[8] ; 
              $this->nmgp_dados_select['delete_users'] = $this->delete_users;
              $this->delete_user_groups = $rs->fields[9] ; 
              $this->nmgp_dados_select['delete_user_groups'] = $this->delete_user_groups;
              $this->delete_lists = $rs->fields[10] ; 
              $this->nmgp_dados_select['delete_lists'] = $this->delete_lists;
              $this->delete_campaigns = $rs->fields[11] ; 
              $this->nmgp_dados_select['delete_campaigns'] = $this->delete_campaigns;
              $this->delete_ingroups = $rs->fields[12] ; 
              $this->nmgp_dados_select['delete_ingroups'] = $this->delete_ingroups;
              $this->delete_remote_agents = $rs->fields[13] ; 
              $this->nmgp_dados_select['delete_remote_agents'] = $this->delete_remote_agents;
              $this->load_leads = $rs->fields[14] ; 
              $this->nmgp_dados_select['load_leads'] = $this->load_leads;
              $this->campaign_detail = $rs->fields[15] ; 
              $this->nmgp_dados_select['campaign_detail'] = $this->campaign_detail;
              $this->ast_admin_access = $rs->fields[16] ; 
              $this->nmgp_dados_select['ast_admin_access'] = $this->ast_admin_access;
              $this->ast_delete_phones = $rs->fields[17] ; 
              $this->nmgp_dados_select['ast_delete_phones'] = $this->ast_delete_phones;
              $this->delete_scripts = $rs->fields[18] ; 
              $this->nmgp_dados_select['delete_scripts'] = $this->delete_scripts;
              $this->modify_leads = $rs->fields[19] ; 
              $this->nmgp_dados_select['modify_leads'] = $this->modify_leads;
              $this->hotkeys_active = $rs->fields[20] ; 
              $this->nmgp_dados_select['hotkeys_active'] = $this->hotkeys_active;
              $this->change_agent_campaign = $rs->fields[21] ; 
              $this->nmgp_dados_select['change_agent_campaign'] = $this->change_agent_campaign;
              $this->agent_choose_ingroups = $rs->fields[22] ; 
              $this->nmgp_dados_select['agent_choose_ingroups'] = $this->agent_choose_ingroups;
              $this->closer_campaigns = $rs->fields[23] ; 
              $this->nmgp_dados_select['closer_campaigns'] = $this->closer_campaigns;
              $this->scheduled_callbacks = $rs->fields[24] ; 
              $this->nmgp_dados_select['scheduled_callbacks'] = $this->scheduled_callbacks;
              $this->agentonly_callbacks = $rs->fields[25] ; 
              $this->nmgp_dados_select['agentonly_callbacks'] = $this->agentonly_callbacks;
              $this->agentcall_manual = $rs->fields[26] ; 
              $this->nmgp_dados_select['agentcall_manual'] = $this->agentcall_manual;
              $this->vicidial_recording = $rs->fields[27] ; 
              $this->nmgp_dados_select['vicidial_recording'] = $this->vicidial_recording;
              $this->vicidial_transfers = $rs->fields[28] ; 
              $this->nmgp_dados_select['vicidial_transfers'] = $this->vicidial_transfers;
              $this->delete_filters = $rs->fields[29] ; 
              $this->nmgp_dados_select['delete_filters'] = $this->delete_filters;
              $this->alter_agent_interface_options = $rs->fields[30] ; 
              $this->nmgp_dados_select['alter_agent_interface_options'] = $this->alter_agent_interface_options;
              $this->closer_default_blended = $rs->fields[31] ; 
              $this->nmgp_dados_select['closer_default_blended'] = $this->closer_default_blended;
              $this->delete_call_times = $rs->fields[32] ; 
              $this->nmgp_dados_select['delete_call_times'] = $this->delete_call_times;
              $this->modify_call_times = $rs->fields[33] ; 
              $this->nmgp_dados_select['modify_call_times'] = $this->modify_call_times;
              $this->modify_users = $rs->fields[34] ; 
              $this->nmgp_dados_select['modify_users'] = $this->modify_users;
              $this->modify_campaigns = $rs->fields[35] ; 
              $this->nmgp_dados_select['modify_campaigns'] = $this->modify_campaigns;
              $this->modify_lists = $rs->fields[36] ; 
              $this->nmgp_dados_select['modify_lists'] = $this->modify_lists;
              $this->modify_scripts = $rs->fields[37] ; 
              $this->nmgp_dados_select['modify_scripts'] = $this->modify_scripts;
              $this->modify_filters = $rs->fields[38] ; 
              $this->nmgp_dados_select['modify_filters'] = $this->modify_filters;
              $this->modify_ingroups = $rs->fields[39] ; 
              $this->nmgp_dados_select['modify_ingroups'] = $this->modify_ingroups;
              $this->modify_usergroups = $rs->fields[40] ; 
              $this->nmgp_dados_select['modify_usergroups'] = $this->modify_usergroups;
              $this->modify_remoteagents = $rs->fields[41] ; 
              $this->nmgp_dados_select['modify_remoteagents'] = $this->modify_remoteagents;
              $this->modify_servers = $rs->fields[42] ; 
              $this->nmgp_dados_select['modify_servers'] = $this->modify_servers;
              $this->view_reports = $rs->fields[43] ; 
              $this->nmgp_dados_select['view_reports'] = $this->view_reports;
              $this->vicidial_recording_override = $rs->fields[44] ; 
              $this->nmgp_dados_select['vicidial_recording_override'] = $this->vicidial_recording_override;
              $this->alter_custdata_override = $rs->fields[45] ; 
              $this->nmgp_dados_select['alter_custdata_override'] = $this->alter_custdata_override;
              $this->qc_enabled = $rs->fields[46] ; 
              $this->nmgp_dados_select['qc_enabled'] = $this->qc_enabled;
              $this->qc_user_level = $rs->fields[47] ; 
              $this->nmgp_dados_select['qc_user_level'] = $this->qc_user_level;
              $this->qc_pass = $rs->fields[48] ; 
              $this->nmgp_dados_select['qc_pass'] = $this->qc_pass;
              $this->qc_finish = $rs->fields[49] ; 
              $this->nmgp_dados_select['qc_finish'] = $this->qc_finish;
              $this->qc_commit = $rs->fields[50] ; 
              $this->nmgp_dados_select['qc_commit'] = $this->qc_commit;
              $this->add_timeclock_log = $rs->fields[51] ; 
              $this->nmgp_dados_select['add_timeclock_log'] = $this->add_timeclock_log;
              $this->modify_timeclock_log = $rs->fields[52] ; 
              $this->nmgp_dados_select['modify_timeclock_log'] = $this->modify_timeclock_log;
              $this->delete_timeclock_log = $rs->fields[53] ; 
              $this->nmgp_dados_select['delete_timeclock_log'] = $this->delete_timeclock_log;
              $this->alter_custphone_override = $rs->fields[54] ; 
              $this->nmgp_dados_select['alter_custphone_override'] = $this->alter_custphone_override;
              $this->vdc_agent_api_access = $rs->fields[55] ; 
              $this->nmgp_dados_select['vdc_agent_api_access'] = $this->vdc_agent_api_access;
              $this->modify_inbound_dids = $rs->fields[56] ; 
              $this->nmgp_dados_select['modify_inbound_dids'] = $this->modify_inbound_dids;
              $this->delete_inbound_dids = $rs->fields[57] ; 
              $this->nmgp_dados_select['delete_inbound_dids'] = $this->delete_inbound_dids;
              $this->active = $rs->fields[58] ; 
              $this->nmgp_dados_select['active'] = $this->active;
              $this->alert_enabled = $rs->fields[59] ; 
              $this->nmgp_dados_select['alert_enabled'] = $this->alert_enabled;
              $this->download_lists = $rs->fields[60] ; 
              $this->nmgp_dados_select['download_lists'] = $this->download_lists;
              $this->agent_shift_enforcement_override = $rs->fields[61] ; 
              $this->nmgp_dados_select['agent_shift_enforcement_override'] = $this->agent_shift_enforcement_override;
              $this->manager_shift_enforcement_override = $rs->fields[62] ; 
              $this->nmgp_dados_select['manager_shift_enforcement_override'] = $this->manager_shift_enforcement_override;
              $this->shift_override_flag = $rs->fields[63] ; 
              $this->nmgp_dados_select['shift_override_flag'] = $this->shift_override_flag;
              $this->export_reports = $rs->fields[64] ; 
              $this->nmgp_dados_select['export_reports'] = $this->export_reports;
              $this->delete_from_dnc = $rs->fields[65] ; 
              $this->nmgp_dados_select['delete_from_dnc'] = $this->delete_from_dnc;
              $this->email = $rs->fields[66] ; 
              $this->nmgp_dados_select['email'] = $this->email;
              $this->user_code = $rs->fields[67] ; 
              $this->nmgp_dados_select['user_code'] = $this->user_code;
              $this->territory = $rs->fields[68] ; 
              $this->nmgp_dados_select['territory'] = $this->territory;
              $this->allow_alerts = $rs->fields[69] ; 
              $this->nmgp_dados_select['allow_alerts'] = $this->allow_alerts;
              $this->agent_choose_territories = $rs->fields[70] ; 
              $this->nmgp_dados_select['agent_choose_territories'] = $this->agent_choose_territories;
              $this->custom_one = $rs->fields[71] ; 
              $this->nmgp_dados_select['custom_one'] = $this->custom_one;
              $this->custom_two = $rs->fields[72] ; 
              $this->nmgp_dados_select['custom_two'] = $this->custom_two;
              $this->custom_three = $rs->fields[73] ; 
              $this->nmgp_dados_select['custom_three'] = $this->custom_three;
              $this->custom_four = $rs->fields[74] ; 
              $this->nmgp_dados_select['custom_four'] = $this->custom_four;
              $this->custom_five = $rs->fields[75] ; 
              $this->nmgp_dados_select['custom_five'] = $this->custom_five;
              $this->voicemail_id = $rs->fields[76] ; 
              $this->nmgp_dados_select['voicemail_id'] = $this->voicemail_id;
              $this->agent_call_log_view_override = $rs->fields[77] ; 
              $this->nmgp_dados_select['agent_call_log_view_override'] = $this->agent_call_log_view_override;
              $this->callcard_admin = $rs->fields[78] ; 
              $this->nmgp_dados_select['callcard_admin'] = $this->callcard_admin;
              $this->agent_choose_blended = $rs->fields[79] ; 
              $this->nmgp_dados_select['agent_choose_blended'] = $this->agent_choose_blended;
              $this->realtime_block_user_info = $rs->fields[80] ; 
              $this->nmgp_dados_select['realtime_block_user_info'] = $this->realtime_block_user_info;
              $this->custom_fields_modify = $rs->fields[81] ; 
              $this->nmgp_dados_select['custom_fields_modify'] = $this->custom_fields_modify;
              $this->force_change_password = $rs->fields[82] ; 
              $this->nmgp_dados_select['force_change_password'] = $this->force_change_password;
              $this->agent_lead_search_override = $rs->fields[83] ; 
              $this->nmgp_dados_select['agent_lead_search_override'] = $this->agent_lead_search_override;
              $this->modify_shifts = $rs->fields[84] ; 
              $this->nmgp_dados_select['modify_shifts'] = $this->modify_shifts;
              $this->modify_phones = $rs->fields[85] ; 
              $this->nmgp_dados_select['modify_phones'] = $this->modify_phones;
              $this->modify_carriers = $rs->fields[86] ; 
              $this->nmgp_dados_select['modify_carriers'] = $this->modify_carriers;
              $this->modify_labels = $rs->fields[87] ; 
              $this->nmgp_dados_select['modify_labels'] = $this->modify_labels;
              $this->modify_statuses = $rs->fields[88] ; 
              $this->nmgp_dados_select['modify_statuses'] = $this->modify_statuses;
              $this->modify_voicemail = $rs->fields[89] ; 
              $this->nmgp_dados_select['modify_voicemail'] = $this->modify_voicemail;
              $this->modify_audiostore = $rs->fields[90] ; 
              $this->nmgp_dados_select['modify_audiostore'] = $this->modify_audiostore;
              $this->modify_moh = $rs->fields[91] ; 
              $this->nmgp_dados_select['modify_moh'] = $this->modify_moh;
              $this->modify_tts = $rs->fields[92] ; 
              $this->nmgp_dados_select['modify_tts'] = $this->modify_tts;
              $this->preset_contact_search = $rs->fields[93] ; 
              $this->nmgp_dados_select['preset_contact_search'] = $this->preset_contact_search;
              $this->modify_contacts = $rs->fields[94] ; 
              $this->nmgp_dados_select['modify_contacts'] = $this->modify_contacts;
              $this->modify_same_user_level = $rs->fields[95] ; 
              $this->nmgp_dados_select['modify_same_user_level'] = $this->modify_same_user_level;
              $this->admin_hide_lead_data = $rs->fields[96] ; 
              $this->nmgp_dados_select['admin_hide_lead_data'] = $this->admin_hide_lead_data;
              $this->admin_hide_phone_data = $rs->fields[97] ; 
              $this->nmgp_dados_select['admin_hide_phone_data'] = $this->admin_hide_phone_data;
              $this->agentcall_email = $rs->fields[98] ; 
              $this->nmgp_dados_select['agentcall_email'] = $this->agentcall_email;
              $this->modify_email_accounts = $rs->fields[99] ; 
              $this->nmgp_dados_select['modify_email_accounts'] = $this->modify_email_accounts;
              $this->failed_login_count = $rs->fields[100] ; 
              $this->nmgp_dados_select['failed_login_count'] = $this->failed_login_count;
              $this->last_login_date = $rs->fields[101] ; 
              if (substr($this->last_login_date, 10, 1) == "-") 
              { 
                 $this->last_login_date = substr($this->last_login_date, 0, 10) . " " . substr($this->last_login_date, 11);
              } 
              if (substr($this->last_login_date, 13, 1) == ".") 
              { 
                 $this->last_login_date = substr($this->last_login_date, 0, 13) . ":" . substr($this->last_login_date, 14, 2) . ":" . substr($this->last_login_date, 17);
              } 
              $this->nmgp_dados_select['last_login_date'] = $this->last_login_date;
              $this->last_ip = $rs->fields[102] ; 
              $this->nmgp_dados_select['last_ip'] = $this->last_ip;
              $this->pass_hash = $rs->fields[103] ; 
              $this->nmgp_dados_select['pass_hash'] = $this->pass_hash;
              $this->alter_admin_interface_options = $rs->fields[104] ; 
              $this->nmgp_dados_select['alter_admin_interface_options'] = $this->alter_admin_interface_options;
              $this->max_inbound_calls = $rs->fields[105] ; 
              $this->nmgp_dados_select['max_inbound_calls'] = $this->max_inbound_calls;
              $this->modify_custom_dialplans = $rs->fields[106] ; 
              $this->nmgp_dados_select['modify_custom_dialplans'] = $this->modify_custom_dialplans;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->user_id = (string)$this->user_id; 
              $this->user_level = (string)$this->user_level; 
              $this->qc_user_level = (string)$this->qc_user_level; 
              $this->failed_login_count = (string)$this->failed_login_count; 
              $this->max_inbound_calls = (string)$this->max_inbound_calls; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['parms'] = "user_id?#?$this->user_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->user_id = "";  
              $this->nmgp_dados_form["user_id"] = $this->user_id;
              $this->user = "";  
              $this->nmgp_dados_form["user"] = $this->user;
              $this->pass = "";  
              $this->nmgp_dados_form["pass"] = $this->pass;
              $this->full_name = "";  
              $this->nmgp_dados_form["full_name"] = $this->full_name;
              $this->user_level = "";  
              $this->nmgp_dados_form["user_level"] = $this->user_level;
              $this->user_group = "";  
              $this->nmgp_dados_form["user_group"] = $this->user_group;
              $this->phone_login = "";  
              $this->nmgp_dados_form["phone_login"] = $this->phone_login;
              $this->phone_pass = "";  
              $this->nmgp_dados_form["phone_pass"] = $this->phone_pass;
              $this->delete_users = "";  
              $this->nmgp_dados_form["delete_users"] = $this->delete_users;
              $this->delete_user_groups = "";  
              $this->nmgp_dados_form["delete_user_groups"] = $this->delete_user_groups;
              $this->delete_lists = "";  
              $this->nmgp_dados_form["delete_lists"] = $this->delete_lists;
              $this->delete_campaigns = "";  
              $this->nmgp_dados_form["delete_campaigns"] = $this->delete_campaigns;
              $this->delete_ingroups = "";  
              $this->nmgp_dados_form["delete_ingroups"] = $this->delete_ingroups;
              $this->delete_remote_agents = "";  
              $this->nmgp_dados_form["delete_remote_agents"] = $this->delete_remote_agents;
              $this->load_leads = "";  
              $this->nmgp_dados_form["load_leads"] = $this->load_leads;
              $this->campaign_detail = "";  
              $this->nmgp_dados_form["campaign_detail"] = $this->campaign_detail;
              $this->ast_admin_access = "";  
              $this->nmgp_dados_form["ast_admin_access"] = $this->ast_admin_access;
              $this->ast_delete_phones = "";  
              $this->nmgp_dados_form["ast_delete_phones"] = $this->ast_delete_phones;
              $this->delete_scripts = "";  
              $this->nmgp_dados_form["delete_scripts"] = $this->delete_scripts;
              $this->modify_leads = "";  
              $this->nmgp_dados_form["modify_leads"] = $this->modify_leads;
              $this->hotkeys_active = "";  
              $this->nmgp_dados_form["hotkeys_active"] = $this->hotkeys_active;
              $this->change_agent_campaign = "";  
              $this->nmgp_dados_form["change_agent_campaign"] = $this->change_agent_campaign;
              $this->agent_choose_ingroups = "";  
              $this->nmgp_dados_form["agent_choose_ingroups"] = $this->agent_choose_ingroups;
              $this->closer_campaigns = "";  
              $this->nmgp_dados_form["closer_campaigns"] = $this->closer_campaigns;
              $this->scheduled_callbacks = "";  
              $this->nmgp_dados_form["scheduled_callbacks"] = $this->scheduled_callbacks;
              $this->agentonly_callbacks = "";  
              $this->nmgp_dados_form["agentonly_callbacks"] = $this->agentonly_callbacks;
              $this->agentcall_manual = "";  
              $this->nmgp_dados_form["agentcall_manual"] = $this->agentcall_manual;
              $this->vicidial_recording = "";  
              $this->nmgp_dados_form["vicidial_recording"] = $this->vicidial_recording;
              $this->vicidial_transfers = "";  
              $this->nmgp_dados_form["vicidial_transfers"] = $this->vicidial_transfers;
              $this->delete_filters = "";  
              $this->nmgp_dados_form["delete_filters"] = $this->delete_filters;
              $this->alter_agent_interface_options = "";  
              $this->nmgp_dados_form["alter_agent_interface_options"] = $this->alter_agent_interface_options;
              $this->closer_default_blended = "";  
              $this->nmgp_dados_form["closer_default_blended"] = $this->closer_default_blended;
              $this->delete_call_times = "";  
              $this->nmgp_dados_form["delete_call_times"] = $this->delete_call_times;
              $this->modify_call_times = "";  
              $this->nmgp_dados_form["modify_call_times"] = $this->modify_call_times;
              $this->modify_users = "";  
              $this->nmgp_dados_form["modify_users"] = $this->modify_users;
              $this->modify_campaigns = "";  
              $this->nmgp_dados_form["modify_campaigns"] = $this->modify_campaigns;
              $this->modify_lists = "";  
              $this->nmgp_dados_form["modify_lists"] = $this->modify_lists;
              $this->modify_scripts = "";  
              $this->nmgp_dados_form["modify_scripts"] = $this->modify_scripts;
              $this->modify_filters = "";  
              $this->nmgp_dados_form["modify_filters"] = $this->modify_filters;
              $this->modify_ingroups = "";  
              $this->nmgp_dados_form["modify_ingroups"] = $this->modify_ingroups;
              $this->modify_usergroups = "";  
              $this->nmgp_dados_form["modify_usergroups"] = $this->modify_usergroups;
              $this->modify_remoteagents = "";  
              $this->nmgp_dados_form["modify_remoteagents"] = $this->modify_remoteagents;
              $this->modify_servers = "";  
              $this->nmgp_dados_form["modify_servers"] = $this->modify_servers;
              $this->view_reports = "";  
              $this->nmgp_dados_form["view_reports"] = $this->view_reports;
              $this->vicidial_recording_override = "";  
              $this->nmgp_dados_form["vicidial_recording_override"] = $this->vicidial_recording_override;
              $this->alter_custdata_override = "";  
              $this->nmgp_dados_form["alter_custdata_override"] = $this->alter_custdata_override;
              $this->qc_enabled = "";  
              $this->nmgp_dados_form["qc_enabled"] = $this->qc_enabled;
              $this->qc_user_level = "";  
              $this->nmgp_dados_form["qc_user_level"] = $this->qc_user_level;
              $this->qc_pass = "";  
              $this->nmgp_dados_form["qc_pass"] = $this->qc_pass;
              $this->qc_finish = "";  
              $this->nmgp_dados_form["qc_finish"] = $this->qc_finish;
              $this->qc_commit = "";  
              $this->nmgp_dados_form["qc_commit"] = $this->qc_commit;
              $this->add_timeclock_log = "";  
              $this->nmgp_dados_form["add_timeclock_log"] = $this->add_timeclock_log;
              $this->modify_timeclock_log = "";  
              $this->nmgp_dados_form["modify_timeclock_log"] = $this->modify_timeclock_log;
              $this->delete_timeclock_log = "";  
              $this->nmgp_dados_form["delete_timeclock_log"] = $this->delete_timeclock_log;
              $this->alter_custphone_override = "";  
              $this->nmgp_dados_form["alter_custphone_override"] = $this->alter_custphone_override;
              $this->vdc_agent_api_access = "";  
              $this->nmgp_dados_form["vdc_agent_api_access"] = $this->vdc_agent_api_access;
              $this->modify_inbound_dids = "";  
              $this->nmgp_dados_form["modify_inbound_dids"] = $this->modify_inbound_dids;
              $this->delete_inbound_dids = "";  
              $this->nmgp_dados_form["delete_inbound_dids"] = $this->delete_inbound_dids;
              $this->active = "";  
              $this->nmgp_dados_form["active"] = $this->active;
              $this->alert_enabled = "";  
              $this->nmgp_dados_form["alert_enabled"] = $this->alert_enabled;
              $this->download_lists = "";  
              $this->nmgp_dados_form["download_lists"] = $this->download_lists;
              $this->agent_shift_enforcement_override = "";  
              $this->nmgp_dados_form["agent_shift_enforcement_override"] = $this->agent_shift_enforcement_override;
              $this->manager_shift_enforcement_override = "";  
              $this->nmgp_dados_form["manager_shift_enforcement_override"] = $this->manager_shift_enforcement_override;
              $this->shift_override_flag = "";  
              $this->nmgp_dados_form["shift_override_flag"] = $this->shift_override_flag;
              $this->export_reports = "";  
              $this->nmgp_dados_form["export_reports"] = $this->export_reports;
              $this->delete_from_dnc = "";  
              $this->nmgp_dados_form["delete_from_dnc"] = $this->delete_from_dnc;
              $this->email = "";  
              $this->nmgp_dados_form["email"] = $this->email;
              $this->user_code = "";  
              $this->nmgp_dados_form["user_code"] = $this->user_code;
              $this->territory = "";  
              $this->nmgp_dados_form["territory"] = $this->territory;
              $this->allow_alerts = "";  
              $this->nmgp_dados_form["allow_alerts"] = $this->allow_alerts;
              $this->agent_choose_territories = "";  
              $this->nmgp_dados_form["agent_choose_territories"] = $this->agent_choose_territories;
              $this->custom_one = "";  
              $this->nmgp_dados_form["custom_one"] = $this->custom_one;
              $this->custom_two = "";  
              $this->nmgp_dados_form["custom_two"] = $this->custom_two;
              $this->custom_three = "";  
              $this->nmgp_dados_form["custom_three"] = $this->custom_three;
              $this->custom_four = "";  
              $this->nmgp_dados_form["custom_four"] = $this->custom_four;
              $this->custom_five = "";  
              $this->nmgp_dados_form["custom_five"] = $this->custom_five;
              $this->voicemail_id = "";  
              $this->nmgp_dados_form["voicemail_id"] = $this->voicemail_id;
              $this->agent_call_log_view_override = "";  
              $this->nmgp_dados_form["agent_call_log_view_override"] = $this->agent_call_log_view_override;
              $this->callcard_admin = "";  
              $this->nmgp_dados_form["callcard_admin"] = $this->callcard_admin;
              $this->agent_choose_blended = "";  
              $this->nmgp_dados_form["agent_choose_blended"] = $this->agent_choose_blended;
              $this->realtime_block_user_info = "";  
              $this->nmgp_dados_form["realtime_block_user_info"] = $this->realtime_block_user_info;
              $this->custom_fields_modify = "";  
              $this->nmgp_dados_form["custom_fields_modify"] = $this->custom_fields_modify;
              $this->force_change_password = "";  
              $this->nmgp_dados_form["force_change_password"] = $this->force_change_password;
              $this->agent_lead_search_override = "";  
              $this->nmgp_dados_form["agent_lead_search_override"] = $this->agent_lead_search_override;
              $this->modify_shifts = "";  
              $this->nmgp_dados_form["modify_shifts"] = $this->modify_shifts;
              $this->modify_phones = "";  
              $this->nmgp_dados_form["modify_phones"] = $this->modify_phones;
              $this->modify_carriers = "";  
              $this->nmgp_dados_form["modify_carriers"] = $this->modify_carriers;
              $this->modify_labels = "";  
              $this->nmgp_dados_form["modify_labels"] = $this->modify_labels;
              $this->modify_statuses = "";  
              $this->nmgp_dados_form["modify_statuses"] = $this->modify_statuses;
              $this->modify_voicemail = "";  
              $this->nmgp_dados_form["modify_voicemail"] = $this->modify_voicemail;
              $this->modify_audiostore = "";  
              $this->nmgp_dados_form["modify_audiostore"] = $this->modify_audiostore;
              $this->modify_moh = "";  
              $this->nmgp_dados_form["modify_moh"] = $this->modify_moh;
              $this->modify_tts = "";  
              $this->nmgp_dados_form["modify_tts"] = $this->modify_tts;
              $this->preset_contact_search = "";  
              $this->nmgp_dados_form["preset_contact_search"] = $this->preset_contact_search;
              $this->modify_contacts = "";  
              $this->nmgp_dados_form["modify_contacts"] = $this->modify_contacts;
              $this->modify_same_user_level = "";  
              $this->nmgp_dados_form["modify_same_user_level"] = $this->modify_same_user_level;
              $this->admin_hide_lead_data = "";  
              $this->nmgp_dados_form["admin_hide_lead_data"] = $this->admin_hide_lead_data;
              $this->admin_hide_phone_data = "";  
              $this->nmgp_dados_form["admin_hide_phone_data"] = $this->admin_hide_phone_data;
              $this->agentcall_email = "";  
              $this->nmgp_dados_form["agentcall_email"] = $this->agentcall_email;
              $this->modify_email_accounts = "";  
              $this->nmgp_dados_form["modify_email_accounts"] = $this->modify_email_accounts;
              $this->failed_login_count = "";  
              $this->nmgp_dados_form["failed_login_count"] = $this->failed_login_count;
              $this->last_login_date = "";  
              $this->last_login_date_hora = "" ;  
              $this->nmgp_dados_form["last_login_date"] = $this->last_login_date;
              $this->last_ip = "";  
              $this->nmgp_dados_form["last_ip"] = $this->last_ip;
              $this->pass_hash = "";  
              $this->nmgp_dados_form["pass_hash"] = $this->pass_hash;
              $this->alter_admin_interface_options = "";  
              $this->nmgp_dados_form["alter_admin_interface_options"] = $this->alter_admin_interface_options;
              $this->max_inbound_calls = "";  
              $this->nmgp_dados_form["max_inbound_calls"] = $this->max_inbound_calls;
              $this->modify_custom_dialplans = "";  
              $this->nmgp_dados_form["modify_custom_dialplans"] = $this->modify_custom_dialplans;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
  }
// 
   function NM_gera_log_key($evt) 
   {
       $this->SC_log_arr = array();
       $this->SC_log_atv = true;
       if ($evt == "incluir")
       {
           $this->SC_log_evt = "insert";
       }
       if ($evt == "alterar")
       {
           $this->SC_log_evt = "update";
       }
       if ($evt == "excluir")
       {
           $this->SC_log_evt = "delete";
       }
       $this->SC_log_arr['keys']['user_id'] =  $this->user_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dados_select'];
           $this->SC_log_arr['fields']['user']['0'] =  $nmgp_dados_select['user'];
           $this->SC_log_arr['fields']['pass']['0'] =  $nmgp_dados_select['pass'];
           $this->SC_log_arr['fields']['full_name']['0'] =  $nmgp_dados_select['full_name'];
           $this->SC_log_arr['fields']['user_level']['0'] =  $nmgp_dados_select['user_level'];
           $this->SC_log_arr['fields']['user_group']['0'] =  $nmgp_dados_select['user_group'];
           $this->SC_log_arr['fields']['phone_login']['0'] =  $nmgp_dados_select['phone_login'];
           $this->SC_log_arr['fields']['phone_pass']['0'] =  $nmgp_dados_select['phone_pass'];
           $this->SC_log_arr['fields']['delete_users']['0'] =  $nmgp_dados_select['delete_users'];
           $this->SC_log_arr['fields']['delete_user_groups']['0'] =  $nmgp_dados_select['delete_user_groups'];
           $this->SC_log_arr['fields']['delete_lists']['0'] =  $nmgp_dados_select['delete_lists'];
           $this->SC_log_arr['fields']['delete_campaigns']['0'] =  $nmgp_dados_select['delete_campaigns'];
           $this->SC_log_arr['fields']['delete_ingroups']['0'] =  $nmgp_dados_select['delete_ingroups'];
           $this->SC_log_arr['fields']['delete_remote_agents']['0'] =  $nmgp_dados_select['delete_remote_agents'];
           $this->SC_log_arr['fields']['load_leads']['0'] =  $nmgp_dados_select['load_leads'];
           $this->SC_log_arr['fields']['campaign_detail']['0'] =  $nmgp_dados_select['campaign_detail'];
           $this->SC_log_arr['fields']['ast_admin_access']['0'] =  $nmgp_dados_select['ast_admin_access'];
           $this->SC_log_arr['fields']['ast_delete_phones']['0'] =  $nmgp_dados_select['ast_delete_phones'];
           $this->SC_log_arr['fields']['delete_scripts']['0'] =  $nmgp_dados_select['delete_scripts'];
           $this->SC_log_arr['fields']['modify_leads']['0'] =  $nmgp_dados_select['modify_leads'];
           $this->SC_log_arr['fields']['hotkeys_active']['0'] =  $nmgp_dados_select['hotkeys_active'];
           $this->SC_log_arr['fields']['change_agent_campaign']['0'] =  $nmgp_dados_select['change_agent_campaign'];
           $this->SC_log_arr['fields']['agent_choose_ingroups']['0'] =  $nmgp_dados_select['agent_choose_ingroups'];
           $this->SC_log_arr['fields']['closer_campaigns']['0'] =  $nmgp_dados_select['closer_campaigns'];
           $this->SC_log_arr['fields']['scheduled_callbacks']['0'] =  $nmgp_dados_select['scheduled_callbacks'];
           $this->SC_log_arr['fields']['agentonly_callbacks']['0'] =  $nmgp_dados_select['agentonly_callbacks'];
           $this->SC_log_arr['fields']['agentcall_manual']['0'] =  $nmgp_dados_select['agentcall_manual'];
           $this->SC_log_arr['fields']['vicidial_recording']['0'] =  $nmgp_dados_select['vicidial_recording'];
           $this->SC_log_arr['fields']['vicidial_transfers']['0'] =  $nmgp_dados_select['vicidial_transfers'];
           $this->SC_log_arr['fields']['delete_filters']['0'] =  $nmgp_dados_select['delete_filters'];
           $this->SC_log_arr['fields']['alter_agent_interface_options']['0'] =  $nmgp_dados_select['alter_agent_interface_options'];
           $this->SC_log_arr['fields']['closer_default_blended']['0'] =  $nmgp_dados_select['closer_default_blended'];
           $this->SC_log_arr['fields']['delete_call_times']['0'] =  $nmgp_dados_select['delete_call_times'];
           $this->SC_log_arr['fields']['modify_call_times']['0'] =  $nmgp_dados_select['modify_call_times'];
           $this->SC_log_arr['fields']['modify_users']['0'] =  $nmgp_dados_select['modify_users'];
           $this->SC_log_arr['fields']['modify_campaigns']['0'] =  $nmgp_dados_select['modify_campaigns'];
           $this->SC_log_arr['fields']['modify_lists']['0'] =  $nmgp_dados_select['modify_lists'];
           $this->SC_log_arr['fields']['modify_scripts']['0'] =  $nmgp_dados_select['modify_scripts'];
           $this->SC_log_arr['fields']['modify_filters']['0'] =  $nmgp_dados_select['modify_filters'];
           $this->SC_log_arr['fields']['modify_ingroups']['0'] =  $nmgp_dados_select['modify_ingroups'];
           $this->SC_log_arr['fields']['modify_usergroups']['0'] =  $nmgp_dados_select['modify_usergroups'];
           $this->SC_log_arr['fields']['modify_remoteagents']['0'] =  $nmgp_dados_select['modify_remoteagents'];
           $this->SC_log_arr['fields']['modify_servers']['0'] =  $nmgp_dados_select['modify_servers'];
           $this->SC_log_arr['fields']['view_reports']['0'] =  $nmgp_dados_select['view_reports'];
           $this->SC_log_arr['fields']['vicidial_recording_override']['0'] =  $nmgp_dados_select['vicidial_recording_override'];
           $this->SC_log_arr['fields']['alter_custdata_override']['0'] =  $nmgp_dados_select['alter_custdata_override'];
           $this->SC_log_arr['fields']['qc_enabled']['0'] =  $nmgp_dados_select['qc_enabled'];
           $this->SC_log_arr['fields']['qc_user_level']['0'] =  $nmgp_dados_select['qc_user_level'];
           $this->SC_log_arr['fields']['qc_pass']['0'] =  $nmgp_dados_select['qc_pass'];
           $this->SC_log_arr['fields']['qc_finish']['0'] =  $nmgp_dados_select['qc_finish'];
           $this->SC_log_arr['fields']['qc_commit']['0'] =  $nmgp_dados_select['qc_commit'];
           $this->SC_log_arr['fields']['add_timeclock_log']['0'] =  $nmgp_dados_select['add_timeclock_log'];
           $this->SC_log_arr['fields']['modify_timeclock_log']['0'] =  $nmgp_dados_select['modify_timeclock_log'];
           $this->SC_log_arr['fields']['delete_timeclock_log']['0'] =  $nmgp_dados_select['delete_timeclock_log'];
           $this->SC_log_arr['fields']['alter_custphone_override']['0'] =  $nmgp_dados_select['alter_custphone_override'];
           $this->SC_log_arr['fields']['vdc_agent_api_access']['0'] =  $nmgp_dados_select['vdc_agent_api_access'];
           $this->SC_log_arr['fields']['modify_inbound_dids']['0'] =  $nmgp_dados_select['modify_inbound_dids'];
           $this->SC_log_arr['fields']['delete_inbound_dids']['0'] =  $nmgp_dados_select['delete_inbound_dids'];
           $this->SC_log_arr['fields']['active']['0'] =  $nmgp_dados_select['active'];
           $this->SC_log_arr['fields']['alert_enabled']['0'] =  $nmgp_dados_select['alert_enabled'];
           $this->SC_log_arr['fields']['download_lists']['0'] =  $nmgp_dados_select['download_lists'];
           $this->SC_log_arr['fields']['agent_shift_enforcement_override']['0'] =  $nmgp_dados_select['agent_shift_enforcement_override'];
           $this->SC_log_arr['fields']['manager_shift_enforcement_override']['0'] =  $nmgp_dados_select['manager_shift_enforcement_override'];
           $this->SC_log_arr['fields']['shift_override_flag']['0'] =  $nmgp_dados_select['shift_override_flag'];
           $this->SC_log_arr['fields']['export_reports']['0'] =  $nmgp_dados_select['export_reports'];
           $this->SC_log_arr['fields']['delete_from_dnc']['0'] =  $nmgp_dados_select['delete_from_dnc'];
           $this->SC_log_arr['fields']['email']['0'] =  $nmgp_dados_select['email'];
           $this->SC_log_arr['fields']['user_code']['0'] =  $nmgp_dados_select['user_code'];
           $this->SC_log_arr['fields']['territory']['0'] =  $nmgp_dados_select['territory'];
           $this->SC_log_arr['fields']['allow_alerts']['0'] =  $nmgp_dados_select['allow_alerts'];
           $this->SC_log_arr['fields']['agent_choose_territories']['0'] =  $nmgp_dados_select['agent_choose_territories'];
           $this->SC_log_arr['fields']['custom_one']['0'] =  $nmgp_dados_select['custom_one'];
           $this->SC_log_arr['fields']['custom_two']['0'] =  $nmgp_dados_select['custom_two'];
           $this->SC_log_arr['fields']['custom_three']['0'] =  $nmgp_dados_select['custom_three'];
           $this->SC_log_arr['fields']['custom_four']['0'] =  $nmgp_dados_select['custom_four'];
           $this->SC_log_arr['fields']['custom_five']['0'] =  $nmgp_dados_select['custom_five'];
           $this->SC_log_arr['fields']['voicemail_id']['0'] =  $nmgp_dados_select['voicemail_id'];
           $this->SC_log_arr['fields']['agent_call_log_view_override']['0'] =  $nmgp_dados_select['agent_call_log_view_override'];
           $this->SC_log_arr['fields']['callcard_admin']['0'] =  $nmgp_dados_select['callcard_admin'];
           $this->SC_log_arr['fields']['agent_choose_blended']['0'] =  $nmgp_dados_select['agent_choose_blended'];
           $this->SC_log_arr['fields']['realtime_block_user_info']['0'] =  $nmgp_dados_select['realtime_block_user_info'];
           $this->SC_log_arr['fields']['custom_fields_modify']['0'] =  $nmgp_dados_select['custom_fields_modify'];
           $this->SC_log_arr['fields']['force_change_password']['0'] =  $nmgp_dados_select['force_change_password'];
           $this->SC_log_arr['fields']['agent_lead_search_override']['0'] =  $nmgp_dados_select['agent_lead_search_override'];
           $this->SC_log_arr['fields']['modify_shifts']['0'] =  $nmgp_dados_select['modify_shifts'];
           $this->SC_log_arr['fields']['modify_phones']['0'] =  $nmgp_dados_select['modify_phones'];
           $this->SC_log_arr['fields']['modify_carriers']['0'] =  $nmgp_dados_select['modify_carriers'];
           $this->SC_log_arr['fields']['modify_labels']['0'] =  $nmgp_dados_select['modify_labels'];
           $this->SC_log_arr['fields']['modify_statuses']['0'] =  $nmgp_dados_select['modify_statuses'];
           $this->SC_log_arr['fields']['modify_voicemail']['0'] =  $nmgp_dados_select['modify_voicemail'];
           $this->SC_log_arr['fields']['modify_audiostore']['0'] =  $nmgp_dados_select['modify_audiostore'];
           $this->SC_log_arr['fields']['modify_moh']['0'] =  $nmgp_dados_select['modify_moh'];
           $this->SC_log_arr['fields']['modify_tts']['0'] =  $nmgp_dados_select['modify_tts'];
           $this->SC_log_arr['fields']['preset_contact_search']['0'] =  $nmgp_dados_select['preset_contact_search'];
           $this->SC_log_arr['fields']['modify_contacts']['0'] =  $nmgp_dados_select['modify_contacts'];
           $this->SC_log_arr['fields']['modify_same_user_level']['0'] =  $nmgp_dados_select['modify_same_user_level'];
           $this->SC_log_arr['fields']['admin_hide_lead_data']['0'] =  $nmgp_dados_select['admin_hide_lead_data'];
           $this->SC_log_arr['fields']['admin_hide_phone_data']['0'] =  $nmgp_dados_select['admin_hide_phone_data'];
           $this->SC_log_arr['fields']['agentcall_email']['0'] =  $nmgp_dados_select['agentcall_email'];
           $this->SC_log_arr['fields']['modify_email_accounts']['0'] =  $nmgp_dados_select['modify_email_accounts'];
           $this->SC_log_arr['fields']['failed_login_count']['0'] =  $nmgp_dados_select['failed_login_count'];
           $this->SC_log_arr['fields']['last_login_date']['0'] =  $nmgp_dados_select['last_login_date'];
           $this->SC_log_arr['fields']['last_ip']['0'] =  $nmgp_dados_select['last_ip'];
           $this->SC_log_arr['fields']['pass_hash']['0'] =  $nmgp_dados_select['pass_hash'];
           $this->SC_log_arr['fields']['alter_admin_interface_options']['0'] =  $nmgp_dados_select['alter_admin_interface_options'];
           $this->SC_log_arr['fields']['max_inbound_calls']['0'] =  $nmgp_dados_select['max_inbound_calls'];
           $this->SC_log_arr['fields']['modify_custom_dialplans']['0'] =  $nmgp_dados_select['modify_custom_dialplans'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['user']['1'] =  $this->user;
       $this->SC_log_arr['fields']['pass']['1'] =  $this->pass;
       $this->SC_log_arr['fields']['full_name']['1'] =  $this->full_name;
       $this->SC_log_arr['fields']['user_level']['1'] =  $this->user_level;
       $this->SC_log_arr['fields']['user_group']['1'] =  $this->user_group;
       $this->SC_log_arr['fields']['phone_login']['1'] =  $this->phone_login;
       $this->SC_log_arr['fields']['phone_pass']['1'] =  $this->phone_pass;
       $this->SC_log_arr['fields']['delete_users']['1'] =  $this->delete_users;
       $this->SC_log_arr['fields']['delete_user_groups']['1'] =  $this->delete_user_groups;
       $this->SC_log_arr['fields']['delete_lists']['1'] =  $this->delete_lists;
       $this->SC_log_arr['fields']['delete_campaigns']['1'] =  $this->delete_campaigns;
       $this->SC_log_arr['fields']['delete_ingroups']['1'] =  $this->delete_ingroups;
       $this->SC_log_arr['fields']['delete_remote_agents']['1'] =  $this->delete_remote_agents;
       $this->SC_log_arr['fields']['load_leads']['1'] =  $this->load_leads;
       $this->SC_log_arr['fields']['campaign_detail']['1'] =  $this->campaign_detail;
       $this->SC_log_arr['fields']['ast_admin_access']['1'] =  $this->ast_admin_access;
       $this->SC_log_arr['fields']['ast_delete_phones']['1'] =  $this->ast_delete_phones;
       $this->SC_log_arr['fields']['delete_scripts']['1'] =  $this->delete_scripts;
       $this->SC_log_arr['fields']['modify_leads']['1'] =  $this->modify_leads;
       $this->SC_log_arr['fields']['hotkeys_active']['1'] =  $this->hotkeys_active;
       $this->SC_log_arr['fields']['change_agent_campaign']['1'] =  $this->change_agent_campaign;
       $this->SC_log_arr['fields']['agent_choose_ingroups']['1'] =  $this->agent_choose_ingroups;
       $this->SC_log_arr['fields']['closer_campaigns']['1'] =  $this->closer_campaigns;
       $this->SC_log_arr['fields']['scheduled_callbacks']['1'] =  $this->scheduled_callbacks;
       $this->SC_log_arr['fields']['agentonly_callbacks']['1'] =  $this->agentonly_callbacks;
       $this->SC_log_arr['fields']['agentcall_manual']['1'] =  $this->agentcall_manual;
       $this->SC_log_arr['fields']['vicidial_recording']['1'] =  $this->vicidial_recording;
       $this->SC_log_arr['fields']['vicidial_transfers']['1'] =  $this->vicidial_transfers;
       $this->SC_log_arr['fields']['delete_filters']['1'] =  $this->delete_filters;
       $this->SC_log_arr['fields']['alter_agent_interface_options']['1'] =  $this->alter_agent_interface_options;
       $this->SC_log_arr['fields']['closer_default_blended']['1'] =  $this->closer_default_blended;
       $this->SC_log_arr['fields']['delete_call_times']['1'] =  $this->delete_call_times;
       $this->SC_log_arr['fields']['modify_call_times']['1'] =  $this->modify_call_times;
       $this->SC_log_arr['fields']['modify_users']['1'] =  $this->modify_users;
       $this->SC_log_arr['fields']['modify_campaigns']['1'] =  $this->modify_campaigns;
       $this->SC_log_arr['fields']['modify_lists']['1'] =  $this->modify_lists;
       $this->SC_log_arr['fields']['modify_scripts']['1'] =  $this->modify_scripts;
       $this->SC_log_arr['fields']['modify_filters']['1'] =  $this->modify_filters;
       $this->SC_log_arr['fields']['modify_ingroups']['1'] =  $this->modify_ingroups;
       $this->SC_log_arr['fields']['modify_usergroups']['1'] =  $this->modify_usergroups;
       $this->SC_log_arr['fields']['modify_remoteagents']['1'] =  $this->modify_remoteagents;
       $this->SC_log_arr['fields']['modify_servers']['1'] =  $this->modify_servers;
       $this->SC_log_arr['fields']['view_reports']['1'] =  $this->view_reports;
       $this->SC_log_arr['fields']['vicidial_recording_override']['1'] =  $this->vicidial_recording_override;
       $this->SC_log_arr['fields']['alter_custdata_override']['1'] =  $this->alter_custdata_override;
       $this->SC_log_arr['fields']['qc_enabled']['1'] =  $this->qc_enabled;
       $this->SC_log_arr['fields']['qc_user_level']['1'] =  $this->qc_user_level;
       $this->SC_log_arr['fields']['qc_pass']['1'] =  $this->qc_pass;
       $this->SC_log_arr['fields']['qc_finish']['1'] =  $this->qc_finish;
       $this->SC_log_arr['fields']['qc_commit']['1'] =  $this->qc_commit;
       $this->SC_log_arr['fields']['add_timeclock_log']['1'] =  $this->add_timeclock_log;
       $this->SC_log_arr['fields']['modify_timeclock_log']['1'] =  $this->modify_timeclock_log;
       $this->SC_log_arr['fields']['delete_timeclock_log']['1'] =  $this->delete_timeclock_log;
       $this->SC_log_arr['fields']['alter_custphone_override']['1'] =  $this->alter_custphone_override;
       $this->SC_log_arr['fields']['vdc_agent_api_access']['1'] =  $this->vdc_agent_api_access;
       $this->SC_log_arr['fields']['modify_inbound_dids']['1'] =  $this->modify_inbound_dids;
       $this->SC_log_arr['fields']['delete_inbound_dids']['1'] =  $this->delete_inbound_dids;
       $this->SC_log_arr['fields']['active']['1'] =  $this->active;
       $this->SC_log_arr['fields']['alert_enabled']['1'] =  $this->alert_enabled;
       $this->SC_log_arr['fields']['download_lists']['1'] =  $this->download_lists;
       $this->SC_log_arr['fields']['agent_shift_enforcement_override']['1'] =  $this->agent_shift_enforcement_override;
       $this->SC_log_arr['fields']['manager_shift_enforcement_override']['1'] =  $this->manager_shift_enforcement_override;
       $this->SC_log_arr['fields']['shift_override_flag']['1'] =  $this->shift_override_flag;
       $this->SC_log_arr['fields']['export_reports']['1'] =  $this->export_reports;
       $this->SC_log_arr['fields']['delete_from_dnc']['1'] =  $this->delete_from_dnc;
       $this->SC_log_arr['fields']['email']['1'] =  $this->email;
       $this->SC_log_arr['fields']['user_code']['1'] =  $this->user_code;
       $this->SC_log_arr['fields']['territory']['1'] =  $this->territory;
       $this->SC_log_arr['fields']['allow_alerts']['1'] =  $this->allow_alerts;
       $this->SC_log_arr['fields']['agent_choose_territories']['1'] =  $this->agent_choose_territories;
       $this->SC_log_arr['fields']['custom_one']['1'] =  $this->custom_one;
       $this->SC_log_arr['fields']['custom_two']['1'] =  $this->custom_two;
       $this->SC_log_arr['fields']['custom_three']['1'] =  $this->custom_three;
       $this->SC_log_arr['fields']['custom_four']['1'] =  $this->custom_four;
       $this->SC_log_arr['fields']['custom_five']['1'] =  $this->custom_five;
       $this->SC_log_arr['fields']['voicemail_id']['1'] =  $this->voicemail_id;
       $this->SC_log_arr['fields']['agent_call_log_view_override']['1'] =  $this->agent_call_log_view_override;
       $this->SC_log_arr['fields']['callcard_admin']['1'] =  $this->callcard_admin;
       $this->SC_log_arr['fields']['agent_choose_blended']['1'] =  $this->agent_choose_blended;
       $this->SC_log_arr['fields']['realtime_block_user_info']['1'] =  $this->realtime_block_user_info;
       $this->SC_log_arr['fields']['custom_fields_modify']['1'] =  $this->custom_fields_modify;
       $this->SC_log_arr['fields']['force_change_password']['1'] =  $this->force_change_password;
       $this->SC_log_arr['fields']['agent_lead_search_override']['1'] =  $this->agent_lead_search_override;
       $this->SC_log_arr['fields']['modify_shifts']['1'] =  $this->modify_shifts;
       $this->SC_log_arr['fields']['modify_phones']['1'] =  $this->modify_phones;
       $this->SC_log_arr['fields']['modify_carriers']['1'] =  $this->modify_carriers;
       $this->SC_log_arr['fields']['modify_labels']['1'] =  $this->modify_labels;
       $this->SC_log_arr['fields']['modify_statuses']['1'] =  $this->modify_statuses;
       $this->SC_log_arr['fields']['modify_voicemail']['1'] =  $this->modify_voicemail;
       $this->SC_log_arr['fields']['modify_audiostore']['1'] =  $this->modify_audiostore;
       $this->SC_log_arr['fields']['modify_moh']['1'] =  $this->modify_moh;
       $this->SC_log_arr['fields']['modify_tts']['1'] =  $this->modify_tts;
       $this->SC_log_arr['fields']['preset_contact_search']['1'] =  $this->preset_contact_search;
       $this->SC_log_arr['fields']['modify_contacts']['1'] =  $this->modify_contacts;
       $this->SC_log_arr['fields']['modify_same_user_level']['1'] =  $this->modify_same_user_level;
       $this->SC_log_arr['fields']['admin_hide_lead_data']['1'] =  $this->admin_hide_lead_data;
       $this->SC_log_arr['fields']['admin_hide_phone_data']['1'] =  $this->admin_hide_phone_data;
       $this->SC_log_arr['fields']['agentcall_email']['1'] =  $this->agentcall_email;
       $this->SC_log_arr['fields']['modify_email_accounts']['1'] =  $this->modify_email_accounts;
       $this->SC_log_arr['fields']['failed_login_count']['1'] =  $this->failed_login_count;
       $this->SC_log_arr['fields']['last_login_date']['1'] =  $this->last_login_date;
       $this->SC_log_arr['fields']['last_ip']['1'] =  $this->last_ip;
       $this->SC_log_arr['fields']['pass_hash']['1'] =  $this->pass_hash;
       $this->SC_log_arr['fields']['alter_admin_interface_options']['1'] =  $this->alter_admin_interface_options;
       $this->SC_log_arr['fields']['max_inbound_calls']['1'] =  $this->max_inbound_calls;
       $this->SC_log_arr['fields']['modify_custom_dialplans']['1'] =  $this->modify_custom_dialplans;
   }
// 
   function NM_gera_log_compress() 
   {
       foreach ($this->SC_log_arr['fields'] as $fild => $data_f)
       {
           if ($data_f[0] == $data_f[1] || ($data_f[0] == "" && $data_f[1] == "null"))
           {
               unset($this->SC_log_arr['fields'][$fild]);
           }
       }
   }
// 
   function NM_gera_log_output() 
   {
       $Log_output = "";
       $prim_delim = "";
       foreach ($this->SC_log_arr as $type => $dats)
       {
           if ($type == "keys")
           {
               $Log_output .= "--> keys <-- ";
               foreach ($dats as $key => $data)
               {
                   $Log_output .=  $prim_delim . $key . " : " . $data;
                   $prim_delim  = "||";
               }
           }
           if ($type == "fields")
           {
               $Log_output .= $prim_delim . "--> fields <-- ";
               $prim_delim = "";
               if (empty($dats) && $this->SC_log_evt == "update")
               {
                   return;
               }
               foreach ($dats as $key => $data)
               {
                   foreach ($data as $tp => $val)
                   {
                      $tpok = ($tp == 0) ? " (old) " : " (new) ";
                      $Log_output .= $prim_delim . $key . $tpok . " : " . $val;
                      $prim_delim  = "||";
                   }
               }
           }
       }
       $this->NM_gera_log_insert("Scriptcase", $this->SC_log_evt, $Log_output);
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_vicidial_users_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_vicidial_users_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_vicidial_users_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pass", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "full_name", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user_level", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user_group", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "phone_login", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "phone_pass", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_users", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_user_groups", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_lists", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_campaigns", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_ingroups", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_remote_agents", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "load_leads", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "campaign_detail", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ast_admin_access", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ast_delete_phones", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_scripts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_leads", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "hotkeys_active", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "change_agent_campaign", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agent_choose_ingroups", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "closer_campaigns", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "scheduled_callbacks", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agentonly_callbacks", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agentcall_manual", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "vicidial_recording", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "vicidial_transfers", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_filters", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alter_agent_interface_options", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "closer_default_blended", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_call_times", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_call_times", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_users", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_campaigns", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_lists", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_scripts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_filters", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_ingroups", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_usergroups", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_remoteagents", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_servers", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "view_reports", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "vicidial_recording_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alter_custdata_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qc_enabled", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qc_user_level", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qc_pass", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qc_finish", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "qc_commit", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "add_timeclock_log", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_timeclock_log", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_timeclock_log", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alter_custphone_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "vdc_agent_api_access", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_inbound_dids", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_inbound_dids", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "active", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alert_enabled", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "download_lists", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agent_shift_enforcement_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "manager_shift_enforcement_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "shift_override_flag", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "export_reports", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "delete_from_dnc", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "user_code", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "territory", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "allow_alerts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agent_choose_territories", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "custom_one", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "custom_two", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "custom_three", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "custom_four", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "custom_five", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "voicemail_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agent_call_log_view_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "callcard_admin", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agent_choose_blended", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "realtime_block_user_info", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "custom_fields_modify", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "force_change_password", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agent_lead_search_override", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_shifts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_phones", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_carriers", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_labels", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_statuses", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_voicemail", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_audiostore", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_moh", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_tts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "preset_contact_search", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_contacts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_same_user_level", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "admin_hide_lead_data", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "admin_hide_phone_data", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "agentcall_email", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_email_accounts", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "failed_login_count", $arg_search, $data_search);
      }
      {
          $this->SC_monta_condicao($comando, "last_login_date", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "last_ip", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pass_hash", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "alter_admin_interface_options", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "max_inbound_calls", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "modify_custom_dialplans", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_vicidial_users = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['total'] = $qt_geral_reg_form_vicidial_users;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_vicidial_users_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_vicidial_users_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "user_id";$nm_numeric[] = "user_level";$nm_numeric[] = "qc_user_level";$nm_numeric[] = "failed_login_count";$nm_numeric[] = "max_inbound_calls";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
      $Nm_datas['last_login_date'] = "datetime";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'" . $campo . "%'" . $nm_fim_lower;
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " not" . $op_like . $nm_ini_lower . "'%" . $campo . "%'" . $nm_fim_lower;
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_vicidial_users_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_vicidial_users_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_vicidial_users_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/usr__NM__ico__NM__iconfinder_voicecall_6235.png">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_vicidial_users']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
