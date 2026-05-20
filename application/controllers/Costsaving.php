<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Costsaving extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->model('cost_model');
      $this->load->helper('url');
      $this->load->library('user_agent');
      $this->load->library('form_validation');
  }
  public function insertcostsaving()
  {
    try {
      $data = array();
      $request = json_decode(json_encode($_POST), false);
      $this->form_validation->set_rules('organization', 'Organization', 'required|min_length[3]');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('avg_processing_cost_per_hour', 'Average Processing Cost Per Hour', 'required|numeric');
      $this->form_validation->set_rules('document_mistake_percent_per_year', 'Document Mistake Percent Per Year', 'required|numeric|callback_percentage_check');
      $this->form_validation->set_rules('avg_cost_per_mistake', 'Average Cost Per Mistake', 'required|numeric');
      $this->form_validation->set_rules('mistakes_reduction', 'Mistakes Reduction','required|numeric|greater_than_equal_to[1]|less_than_equal_to[99]');
      $this->form_validation->set_rules('process_name[]', 'Process Name', 'required|min_length[3]');
      $this->form_validation->set_rules('document_name[]','Document Name', 'min_length[3]');
      $this->form_validation->set_rules('total_documents_per_year[]', 'Total Documents Per Year', 'required|numeric');
      $this->form_validation->set_rules('document_captured_processing[]', 'Document Captured Processing', 'required|in_list[Manual/ excel based processing without any software,Semi-automatic: Automatic for some and manual for others,Automatic processing without manual intevention]');
      $this->form_validation->set_rules('document_manually_capturing_percentage[]', 'Document Manually Capturing Percentage', 'required|numeric|callback_percentage_check');
      $this->form_validation->set_rules('avg_minutes_per_document_data_capture[]', 'Avg Minutes Per Document Data Capture', 'required|numeric');
      $this->form_validation->set_rules('document_processed_after_capturing_percentage[]', 'Document Processed After Capturing Percentage', 'required|numeric|callback_percentage_check');
      $this->form_validation->set_rules('avg_minutes_per_document_processing[]', 'Avg Minutes Per Document Processing', 'required|numeric');
      $this->form_validation->set_rules('accuracy_of_automatic_reading[]', 'Accuracy Of Automatic Reading', 'required|numeric|callback_percentage_check');
      $this->form_validation->set_rules('after_capturing_data[]', 'Data Captured', 'required|in_list[Manual/ excel based processing without any software,Semi-automatic processing: Combination of automatic and manual,Automatic processing without manual intevention]');
      if ($this->form_validation->run() === FALSE) {
          $data = [
              'status' => false,
              'message' => validation_errors(),
              'data' => null
          ];
          echo json_encode($data);
          exit();
      }else{
        $organization = $request->organization;
        $email = $request->email;
        $avg_processing_cost_per_hour = $request->avg_processing_cost_per_hour;
        $document_mistake_percent_per_year = $request->document_mistake_percent_per_year;
        $avg_cost_per_mistake = $request->avg_cost_per_mistake;
        $mistakes_reduction = $request->mistakes_reduction;
        $cost_saving = array(
          'organization' => $organization,
          'email' => $email,
          'avg_processing_cost_per_hour' => $avg_processing_cost_per_hour,
          'document_mistake_percent_per_year' => $document_mistake_percent_per_year,
          'avg_cost_per_mistake' => $avg_cost_per_mistake,
          'mistakes_reduction' => $mistakes_reduction,
          'ip_address' => $this->input->ip_address(),
          'user_agent' => $this->agent->browser(),
      );
      if (!$this->db->insert('cost_saving_calculation', $cost_saving)) {
        $data['message'] = "Insert failed";
        $data['status'] = false;
        }
      }
      $insert_id = $this->db->insert_id();
      $process_name=$request->process_name;
      $document_name= $request->document_name;
      $total_documents_per_year= $request->total_documents_per_year;
      $document_captured_processing=$request->document_captured_processing;
      $document_manually_capturing_percentage= $request->document_manually_capturing_percentage;
      $avg_minutes_per_document_data_capture= $request->avg_minutes_per_document_data_capture;
      $after_capturing_data=$request->after_capturing_data;
      $document_processed_after_capturing_percentage=$request->document_processed_after_capturing_percentage;
      $avg_minutes_per_document_processing= $request->avg_minutes_per_document_processing;
      $accuracy_of_automatic_reading= $request->accuracy_of_automatic_reading;
      $costsaving_processing = array();
      if(count($process_name)>0)
      {
        foreach ($process_name as $key => $val) {
          if (empty($process_name[$key])) {
              $data['message'] = "Give Process Name";
              $data['status'] = false;
            }
          $saving_lesser_mistake_cal = ($total_documents_per_year[$key] * ($document_mistake_percent_per_year/100) * $avg_cost_per_mistake * ($mistakes_reduction/100)); 
          $labour_per_seventy_cal = ((($total_documents_per_year[$key] *
          ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
          ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(70/100) ;

          $labour_per_eighty_cal = ((($total_documents_per_year[$key] *
          ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
          ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(80/100) ;

          $labour_per_ninety_cal = ((($total_documents_per_year[$key] *
          ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
          ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(90/100) ;

          $labour_per_ninetyfive_cal = ((($total_documents_per_year[$key] *
          ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
          ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(95/100) ;

          $data_level_efficincy_cal=((($total_documents_per_year[$key] * (1-($document_manually_capturing_percentage[$key]/100)) * $avg_minutes_per_document_data_capture[$key]) +
          ($total_documents_per_year[$key] * (1-($document_processed_after_capturing_percentage[$key]/100)) * $avg_minutes_per_document_processing[$key]))/60) 
          * $avg_processing_cost_per_hour * ((95/100)-($accuracy_of_automatic_reading[$key]/100));

          $totalcost_reduction_seventy_cal = (round($labour_per_seventy_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
          $totalcost_reduction_eighty_cal = (round($labour_per_eighty_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
          $totalcost_reduction_ninety_cal = (round($labour_per_ninety_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
          $totalcost_reduction_ninetyfive_cal = (round($labour_per_ninetyfive_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal)); 
              $costsaving_processing[]=array(
              'cost_saving_calculation_id' => $insert_id,
              'process_name' => $process_name[$key],
              'document_name' => $document_name[$key],
              'total_documents_per_year' => $total_documents_per_year[$key],
              'document_captured_processing' => $document_captured_processing[$key],
              'document_manually_capturing_percentage' => $document_manually_capturing_percentage[$key],
              'avg_minutes_per_document_data_capture' => $avg_minutes_per_document_data_capture[$key],
              'after_capturing_data' => $after_capturing_data[$key],
              'document_processed_after_capturing_percentage' => $document_processed_after_capturing_percentage[$key],
              'avg_minutes_per_document_processing' => $avg_minutes_per_document_processing[$key],
              'accuracy_of_automatic_reading' => $accuracy_of_automatic_reading[$key],
              'labour_cost_passthrough_per_seventy'=> round($labour_per_seventy_cal),
              'labour_cost_passthrough_per_eighty' => round($labour_per_eighty_cal),
              'labour_cost_passthrough_per_ninety' => round($labour_per_ninety_cal),
              'labour_cost_passthrough_per_ninetyfive' => round($labour_per_ninetyfive_cal),
              'labour_cost_efficiency'=>round($data_level_efficincy_cal),
              'saving_lesser_mistake' => round($saving_lesser_mistake_cal),  
              'totalcost_reduction_per_seventy' => round($totalcost_reduction_seventy_cal), 
              'totalcost_reduction_per_eighty' => round($totalcost_reduction_eighty_cal), 
              'totalcost_reduction_per_ninety' => round($totalcost_reduction_ninety_cal), 
              'totalcost_reduction_per_ninetyfive' => round($totalcost_reduction_ninetyfive_cal), 
              );
          }
        }
        $res = $this->db->insert_batch('cost_saving_processing', $costsaving_processing);
        if (isset($res) && $res) {
            $costdata = $this->cost_model->get_cost_saving($insert_id);
            $sum_seventy = $this->cost_model->sum_totalcost_reduction_per_seventy($insert_id);
            $sum_eighty = $this->cost_model->sum_totalcost_reduction_per_eighty($insert_id);
            $sum_ninety = $this->cost_model->sum_totalcost_reduction_per_ninety($insert_id);
            $sum_ninetyfive = $this->cost_model->sum_totalcost_reduction_per_ninetyfive($insert_id);
            $data['message'] = "Inserted successfully.";
            $data['status'] = true;
            $data['cost'] = $costdata;
            $data['cost_cal_id'] = $insert_id;
            $data['sum_seventy'] = $sum_seventy;
            $data['sum_eighty'] = $sum_eighty;
            $data['sum_ninety'] = $sum_ninety;
            $data['sum_ninetyfive'] = $sum_ninetyfive;
        } else {
            $data['message'] = "Insert failed.Giver Proper Valida Data";
            $data['data'] = "Cost saving processing error occurred.";
            $data['status'] = false;
        }
      echo json_encode($data);
      exit;
    } catch (Exception $e) {
      $data['message'] = $e->getMessage();
      $data['status'] = false;
      $data['error'] = true;
      echo json_encode($data);
    }
  }
  public function fetchcostsaving()
  {
    try {
      $id = $this->input->post("ID");
      if (empty($id) || !is_numeric($id)) {
          $response = [
              'status' => 'error',
              'message' => 'Invalid or missing ID',
              'data' => null
          ];
      } else {
          $data['costcaldata'] = $this->cost_model->fetch_get_cost_saving($id);
          $data['costdata'] = $this->cost_model->get_cost_saving_cal($id);
          if (!$data['costcaldata'] || !$data['costdata']) {
              $response = [
                  'status' => 'error',
                  'message' => 'Data Not Showing failed',
              ];
          } else {
              $response = [
                  'status' => 'success',
                  'data' => $data
              ];
          }
      }
      echo json_encode($response);
      exit;
    }catch (Exception $e) {
      $data['message'] = $e->getMessage();
      $data['status'] = false;
      $data['error'] = true;
      echo json_encode($data);
    }
  }
    public function updatecostsaving()
  {
    try {
        $data = array();
        $request = json_decode(json_encode($_POST), false);
        $costid= $request->costid;
        $current_record = $this->db->get_where('cost_saving_calculation', array('id' => $costid))->row_array();
        $this->form_validation->set_rules('organization', 'Organization', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('avg_processing_cost_per_hour', 'Average Processing Cost Per Hour', 'required|numeric');
        $this->form_validation->set_rules('document_mistake_percent_per_year', 'Document Mistake Percent Per Year', 'required|numeric|callback_percentage_check');
        $this->form_validation->set_rules('avg_cost_per_mistake', 'Average Cost Per Mistake', 'required|numeric');
        $this->form_validation->set_rules('mistakes_reduction', 'Mistakes Reduction','required|numeric|greater_than_equal_to[1]|less_than_equal_to[99]');
        $this->form_validation->set_rules('process_name[]', 'Process Name', 'required|min_length[3]');
        $this->form_validation->set_rules('document_name[]','Document Name', 'min_length[3]');
        $this->form_validation->set_rules('total_documents_per_year[]', 'Total Documents Per Year', 'required|numeric');
        $this->form_validation->set_rules('document_captured_processing[]', 'Document Captured Processing', 'required|in_list[Manual/ excel based processing without any software,Semi-automatic: Automatic for some and manual for others,Automatic processing without manual intevention]');
        $this->form_validation->set_rules('document_manually_capturing_percentage[]', 'Document Manually Capturing Percentage', 'required|numeric|callback_percentage_check');
        $this->form_validation->set_rules('avg_minutes_per_document_data_capture[]', 'Avg Minutes Per Document Data Capture', 'required|numeric');
        $this->form_validation->set_rules('document_processed_after_capturing_percentage[]', 'Document Processed After Capturing Percentage', 'required|numeric|callback_percentage_check');
        $this->form_validation->set_rules('avg_minutes_per_document_processing[]', 'Avg Minutes Per Document Processing', 'required|numeric');
        $this->form_validation->set_rules('accuracy_of_automatic_reading[]', 'Accuracy Of Automatic Reading', 'required|numeric|callback_percentage_check');
        $this->form_validation->set_rules('after_capturing_data[]', 'Data Captured', 'required|in_list[Manual/ excel based processing without any software,Semi-automatic processing: Combination of automatic and manual,Automatic processing without manual intevention]');
        if ($this->form_validation->run() === FALSE) {
            $data = [
                'status' => false,
                'message' => validation_errors(),
                'data' => null
            ];
            echo json_encode($data);
            exit();
        }else{
          $organization = $request->organization;
          $email = $request->email;
          $avg_processing_cost_per_hour = $request->avg_processing_cost_per_hour;
          $document_mistake_percent_per_year = $request->document_mistake_percent_per_year;
          $avg_cost_per_mistake = $request->avg_cost_per_mistake;
          $mistakes_reduction = $request->mistakes_reduction;
          $cost_saving = array(
              'organization' => $organization,
              'email' => $email,
              'avg_processing_cost_per_hour' => $avg_processing_cost_per_hour,
              'document_mistake_percent_per_year' => $document_mistake_percent_per_year,
              'avg_cost_per_mistake' => $avg_cost_per_mistake,
              'mistakes_reduction' => $mistakes_reduction,
          );
          $this->db->where('id', $costid);
          $update_after_cost = $this->db->update('cost_saving_calculation', $cost_saving);
          $updated_record = $this->db->get_where('cost_saving_calculation', array('id' => $costid))->row_array();
          $changed_record = false;
          foreach ($cost_saving as $key => $value) {
              if ($current_record[$key] !== $updated_record[$key]) {
                  $changed_record = true;
                  break;
              }
            }
        }
        $cost_saving_processing_before = $this->db->get_where('cost_saving_processing', ['cost_saving_calculation_id' => $costid])->result_array();
        $cost_sqlid=$request->cost_sqlid;
        $process_name=$request->process_name;
        $document_name= $request->document_name;
        $total_documents_per_year= $request->total_documents_per_year;
        $document_captured_processing=$request->document_captured_processing;
        $document_manually_capturing_percentage= $request->document_manually_capturing_percentage;
        $avg_minutes_per_document_data_capture= $request->avg_minutes_per_document_data_capture;
        $after_capturing_data=$request->after_capturing_data;
        $document_processed_after_capturing_percentage=$request->document_processed_after_capturing_percentage;
        $avg_minutes_per_document_processing= $request->avg_minutes_per_document_processing;
        $accuracy_of_automatic_reading= $request->accuracy_of_automatic_reading;
        $costsaving_processing = array();
        if(count($process_name)>0)
        {
          foreach($process_name as $key=>$val)
            {
              if($process_name[$key]!="")
                {
                $saving_lesser_mistake_cal = ($total_documents_per_year[$key] * ($document_mistake_percent_per_year/100) * $avg_cost_per_mistake * ($mistakes_reduction/100)); 
                $labour_per_seventy_cal = ((($total_documents_per_year[$key] *
                ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
                ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(70/100) ;
      
                $labour_per_eighty_cal = ((($total_documents_per_year[$key] *
                ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
                ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(80/100) ;
      
                $labour_per_ninety_cal = ((($total_documents_per_year[$key] *
                ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
                ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(90/100) ;
      
                $labour_per_ninetyfive_cal = ((($total_documents_per_year[$key] *
                ($document_manually_capturing_percentage[$key]/100) * $avg_minutes_per_document_data_capture[$key]) + ($total_documents_per_year[$key] *
                ($document_processed_after_capturing_percentage[$key]/100) * $avg_minutes_per_document_processing[$key]))/60) * $avg_processing_cost_per_hour *(95/100) ;
      
                $data_level_efficincy_cal=((($total_documents_per_year[$key] * (1-($document_manually_capturing_percentage[$key]/100)) * $avg_minutes_per_document_data_capture[$key]) +
                ($total_documents_per_year[$key] * (1-($document_processed_after_capturing_percentage[$key]/100)) * $avg_minutes_per_document_processing[$key]))/60) 
                * $avg_processing_cost_per_hour * ((95/100)-($accuracy_of_automatic_reading[$key]/100));
      
                $totalcost_reduction_seventy_cal = (round($labour_per_seventy_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
                $totalcost_reduction_eighty_cal = (round($labour_per_eighty_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
                $totalcost_reduction_ninety_cal = (round($labour_per_ninety_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
                $totalcost_reduction_ninetyfive_cal = (round($labour_per_ninetyfive_cal) + round($data_level_efficincy_cal) +round($saving_lesser_mistake_cal));
                if (empty($cost_sqlid[$key])) {
                  $costsaving_insert[]=array(
                    'cost_saving_calculation_id' => $costid,
                    'process_name' => $process_name[$key],
                    'document_name' => $document_name[$key],
                    'total_documents_per_year' => $total_documents_per_year[$key],
                    'document_captured_processing' => $document_captured_processing[$key],
                    'document_manually_capturing_percentage' => $document_manually_capturing_percentage[$key],
                    'avg_minutes_per_document_data_capture' => $avg_minutes_per_document_data_capture[$key],
                    'after_capturing_data' => $after_capturing_data[$key],
                    'document_processed_after_capturing_percentage' => $document_processed_after_capturing_percentage[$key],
                    'avg_minutes_per_document_processing' => $avg_minutes_per_document_processing[$key],
                    'accuracy_of_automatic_reading' => $accuracy_of_automatic_reading[$key],
                    'labour_cost_passthrough_per_seventy'=> round($labour_per_seventy_cal),
                    'labour_cost_passthrough_per_eighty' => round($labour_per_eighty_cal),
                    'labour_cost_passthrough_per_ninety' => round($labour_per_ninety_cal),
                    'labour_cost_passthrough_per_ninetyfive' => round($labour_per_ninetyfive_cal),
                    'labour_cost_efficiency'=>round($data_level_efficincy_cal),
                    'saving_lesser_mistake' => round($saving_lesser_mistake_cal),  
                    'totalcost_reduction_per_seventy' => round($totalcost_reduction_seventy_cal), 
                    'totalcost_reduction_per_eighty' => round($totalcost_reduction_eighty_cal), 
                    'totalcost_reduction_per_ninety' => round($totalcost_reduction_ninety_cal), 
                    'totalcost_reduction_per_ninetyfive' => round($totalcost_reduction_ninetyfive_cal), 
                  );
                    $this->db->insert_batch('cost_saving_processing', $costsaving_insert);
                } else {
                  $costsaving_processing[]=array(
                    'id'=>$cost_sqlid[$key],
                    'process_name' => $process_name[$key],
                    'document_name' => $document_name[$key],
                    'total_documents_per_year' => $total_documents_per_year[$key],
                    'document_captured_processing' => $document_captured_processing[$key],
                    'document_manually_capturing_percentage' => $document_manually_capturing_percentage[$key],
                    'avg_minutes_per_document_data_capture' => $avg_minutes_per_document_data_capture[$key],
                    'after_capturing_data' => $after_capturing_data[$key],
                    'document_processed_after_capturing_percentage' => $document_processed_after_capturing_percentage[$key],
                    'avg_minutes_per_document_processing' => $avg_minutes_per_document_processing[$key],
                    'accuracy_of_automatic_reading' => $accuracy_of_automatic_reading[$key],
                    'labour_cost_passthrough_per_seventy'=> round($labour_per_seventy_cal),
                    'labour_cost_passthrough_per_eighty' => round($labour_per_eighty_cal),
                    'labour_cost_passthrough_per_ninety' => round($labour_per_ninety_cal),
                    'labour_cost_passthrough_per_ninetyfive' => round($labour_per_ninetyfive_cal),
                    'labour_cost_efficiency'=>round($data_level_efficincy_cal),
                    'saving_lesser_mistake' => round($saving_lesser_mistake_cal),  
                    'totalcost_reduction_per_seventy' => round($totalcost_reduction_seventy_cal), 
                    'totalcost_reduction_per_eighty' => round($totalcost_reduction_eighty_cal), 
                    'totalcost_reduction_per_ninety' => round($totalcost_reduction_ninety_cal), 
                    'totalcost_reduction_per_ninetyfive' => round($totalcost_reduction_ninetyfive_cal),
                    'updated_at' => date('Y-m-d H:i:s') 
                      );
                  $res=$this->db->update_batch('cost_saving_processing', $costsaving_processing,'id',$costid);
                  }
                }else{
                $data['message'] = "Give Process Name";
                $data['data'] = "Give Proper data";
                $data['status'] = false;
              }
            }
        }
        if(($update_after_cost  && $changed_record =="1") || ($res=="1")){
          $cost_saving_history = array(
              'cost_id'=> $request->costid,
              'costcalulation_before'=> json_encode($current_record),
              'costcalulation_after'=> json_encode($updated_record),
              'costprocessing_before'=> json_encode($cost_saving_processing_before),
              'costprocessing_after'=> json_encode($costsaving_processing),
            );
            $this->db->insert('cost_history',$cost_saving_history);      
          }else{
            $data['message'] = "No data updated";
            $data['status'] = false;
          }
        $costdata= $this->cost_model->get_cost_saving($costid);
        $sum_seventy= $this->cost_model->sum_totalcost_reduction_per_seventy($costid);
        $sum_eighty= $this->cost_model->sum_totalcost_reduction_per_eighty($costid);
        $sum_ninety= $this->cost_model->sum_totalcost_reduction_per_ninety($costid);
        $sum_ninetyfive= $this->cost_model->sum_totalcost_reduction_per_ninetyfive($costid);
        $data['message'] = "Updated successfully.";
        $data['data'] = "Cost saving processing Updated successfully.";
        $data['status'] = true;
        $data['cost'] = $costdata;
        $data['cost_cal_id'] = $costid;
        $data['sum_seventy'] = $sum_seventy;
        $data['sum_eighty'] = $sum_eighty;
        $data['sum_ninety'] = $sum_ninety;
        $data['sum_ninetyfive'] = $sum_ninetyfive;
        echo json_encode($data);
        exit();
    }catch (Exception $e) {
      $data['message'] = $e->getMessage();
      $data['status'] = false;
      $data['error'] = true;
      echo json_encode($data);
      }
    }
    public function percentage_check($str)
  {
      if (!preg_match('/^([0-9]{1,2}|100)$/', $str)) {
          $this->form_validation->set_message('percentage_check', 'The {field} field must be a percentage between 0 to 100%');
          return FALSE;
      } else {
          return TRUE;
      }
  }
}