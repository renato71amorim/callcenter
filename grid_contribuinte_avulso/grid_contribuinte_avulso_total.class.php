<?php

class grid_contribuinte_avulso_total
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;

   var $nm_data;

   //----- 
   function __construct($sc_page)
   {
      $this->sc_page = $sc_page;
      $this->nm_data = new nm_data("pt_br");
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_contribuinte_avulso']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_contribuinte_avulso']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->codigo = $Busca_temp['codigo']; 
          $tmp_pos = strpos($this->codigo, "##@@");
          if ($tmp_pos !== false && !is_array($this->codigo))
          {
              $this->codigo = substr($this->codigo, 0, $tmp_pos);
          }
          $this->nome = $Busca_temp['nome']; 
          $tmp_pos = strpos($this->nome, "##@@");
          if ($tmp_pos !== false && !is_array($this->nome))
          {
              $this->nome = substr($this->nome, 0, $tmp_pos);
          }
          $this->bairro = $Busca_temp['bairro']; 
          $tmp_pos = strpos($this->bairro, "##@@");
          if ($tmp_pos !== false && !is_array($this->bairro))
          {
              $this->bairro = substr($this->bairro, 0, $tmp_pos);
          }
          $this->cidade = $Busca_temp['cidade']; 
          $tmp_pos = strpos($this->cidade, "##@@");
          if ($tmp_pos !== false && !is_array($this->cidade))
          {
              $this->cidade = substr($this->cidade, 0, $tmp_pos);
          }
          $this->ddd = $Busca_temp['ddd']; 
          $tmp_pos = strpos($this->ddd, "##@@");
          if ($tmp_pos !== false && !is_array($this->ddd))
          {
              $this->ddd = substr($this->ddd, 0, $tmp_pos);
          }
          $this->fone1 = $Busca_temp['fone1']; 
          $tmp_pos = strpos($this->fone1, "##@@");
          if ($tmp_pos !== false && !is_array($this->fone1))
          {
              $this->fone1 = substr($this->fone1, 0, $tmp_pos);
          }
          $this->fone2 = $Busca_temp['fone2']; 
          $tmp_pos = strpos($this->fone2, "##@@");
          if ($tmp_pos !== false && !is_array($this->fone2))
          {
              $this->fone2 = substr($this->fone2, 0, $tmp_pos);
          }
          $this->valor = $Busca_temp['valor']; 
          $tmp_pos = strpos($this->valor, "##@@");
          if ($tmp_pos !== false && !is_array($this->valor))
          {
              $this->valor = substr($this->valor, 0, $tmp_pos);
          }
          $this->data_inicio = $Busca_temp['data_inicio']; 
          $tmp_pos = strpos($this->data_inicio, "##@@");
          if ($tmp_pos !== false && !is_array($this->data_inicio))
          {
              $this->data_inicio = substr($this->data_inicio, 0, $tmp_pos);
          }
          $data_inicio_2 = $Busca_temp['data_inicio_input_2']; 
          $this->data_inicio_2 = $Busca_temp['data_inicio_input_2']; 
          $this->data_ultima = $Busca_temp['data_ultima']; 
          $tmp_pos = strpos($this->data_ultima, "##@@");
          if ($tmp_pos !== false && !is_array($this->data_ultima))
          {
              $this->data_ultima = substr($this->data_ultima, 0, $tmp_pos);
          }
          $data_ultima_2 = $Busca_temp['data_ultima_input_2']; 
          $this->data_ultima_2 = $Busca_temp['data_ultima_input_2']; 
      } 
   }

   //---- 
   function quebra_geral_sc_free_total($res_limit=false)
   {
      global $nada, $nm_lang ;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['tot_geral'] = array() ;  
      $nm_comando = "select count(*), count(codigo), sum(valor) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['where_pesq']; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      if ($rt->fields[0] == 0)
      { 
          if (!isset($Contrl_Interat) && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['where_pesq_filtro']) && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['where_pesq_fast']) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['interativ_search']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['interativ_search']))
          {
              $Contrl_Interat = 1;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['where_pesq']       = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['where_sem_interativ'];
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['interativ_search'] = array();
              $this->quebra_geral_sc_free_total();
          }
          
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $rt->fields[1] = (string)$rt->fields[1]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['tot_geral'][2] = $rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $rt->fields[2] = (string)$rt->fields[2]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['tot_geral'][3] = $rt->fields[2]; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_contribuinte_avulso']['contr_total_geral'] = "OK";
   } 

   function Ajust_statistic($comando)
   {
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_vfp) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_odbc))
      {
          $comando = str_replace(array('count(distinct ','varp(','stdevp(','variance(','stddev('), array('sum(','sum(','sum(','sum(','sum('), $comando);
      }
      if ($this->Ini->nm_tp_variance == "P")
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite) && $this->Ini->sqlite_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
      }
      if ($this->Ini->nm_tp_variance == "A")
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite) && $this->Ini->sqlite_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
      }
      return $comando;
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
}

?>
