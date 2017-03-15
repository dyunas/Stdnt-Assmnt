<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_records extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin/Student_Records/Student_model', 'student');
		$this->load->model('Admin/Assessment/Assessment_model', 'assessment');
		$this->load->model('Cashier/Student_Records/Student_records_model', 'stud_assessment');
	}

	public function Index()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student\'s Record',
				'usr' => $this->login->get_user_info(),
				'stud_info' => $this->student->get_student_info(),
			);

			$this->template->load($data, null, 'Index', 'Admin/Student_Records');
		}
	}

	public function View_record($stud_id)
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student\'s Record',
				'usr' => $this->login->get_user_info(),
				'stud_info' => $this->student->get_student_info($stud_id),
				'gdn_info' => $this->student->get_student_gdn_info($stud_id),
				'fees' => $this->assessment->get_fees(),
				'scheme' => $this->assessment->get_payment_scheme()
			);

			$this->template->load($data, null, 'Student_record', 'Admin/Student_Records');
		}
	}

	public function Get_fee_amount()
	{
		if ($this->input->is_ajax_request())
		{
			$fee = $this->input->get('id');
			$result = $this->assessment->get_fees($fee);

			if ($result)
			{
				echo $result;
			}
		}
		else
		{
			exit('No direct script access allowed');
		}
	}

	public function Get_payment_scheme()
	{
		if ($this->input->is_ajax_request())
		{
		  $scheme = $this->input->get('scheme');
		  $totalFees = $this->input->get('totalFees');

		  switch ($scheme) 
		  {
		    case 'CSHPYMNT':
		      if ($totalFees > 0)
		    	{
	    			$html  = '<fieldset>';
		        $html .= '<legend>Payables for the whole term</legend>';
		        $html .= '<table class="table table-condensed">';
		        $html .= '<tbody>';
		        $html .= '<tr>';
		        $html .= '<td><strong>Upon Enrollment:</strong></td>';
		        $html .= '<td style="text-align: right;"><input type="hidden" name="upon" value="'.$totalFees.'" /> Php '.number_format($totalFees, 2).'</td>';
		        $html .= '</tr>';
		        $html .= '</tbody>';
		        $html .= '</table>';
		        $html .= '<fieldset>';
		      }
		      else
		      {
		        $html  = '<table>';
		        $html .= '<tbody>';
		        $html .= '<tr>';
		        $html .= '<td colspan="2"><h3>No data to show. Please check student assessment.</h3></td>';
		        $html .= '</tr>';
		        $html .= '</tbody>';
		        $html .= '</table>';
		      }

	        echo $html;
	      break;
		    case 'INSTLMNT':
		    	if ($totalFees > 0)
		    	{
		    		$upon = 1500;
		    		$payment = ($totalFees - $upon) / 3;

	    			$html  = '<fieldset>';
		        $html .= '<legend>Payables for the whole term</legend>';
		        $html .= '<table class="table table-condensed">';
		        $html .= '<tbody>';
		        $html .= '<tr>';
		        $html .= '<td><strong>Upon Enrollment:</strong></td>';
		        $html .= '<td style="text-align: right;"><input type="hidden" name="upon" value="'.$upon.'" /> Php '.number_format($upon, 2).'</td>';
		        $html .= '</tr>';
		        $html .= '<tr>';
		        $html .= '<td><strong>Prelim Payment:</strong></td>';
		        $html .= '<td style="text-align: right;"><input type="hidden" name="prelim" value="'.$payment.'" /> Php '.number_format($payment, 2).'</td>';
		        $html .= '</tr>';
		        $html .= '<tr>';
		        $html .= '<td><strong>Mid-term Payment:</strong></td>';
		        $html .= '<td style="text-align: right;"><input type="hidden" name="midterm" value="'.$payment.'" /> Php '.number_format($payment, 2).'</td>';
		        $html .= '</tr>';
		        $html .= '<tr>';
		        $html .= '<td><strong>Finals Payment:</strong></td>';
		        $html .= '<td style="text-align: right;"><input type="hidden" name="finals" value="'.$payment.'" /> Php '.number_format($payment, 2).'</td>';
		        $html .= '</tr>';
		        $html .= '</tbody>';
		        $html .= '</table>';
		        $html .= '<fieldset>';
		      }
		      else
		      {
		        $html  = '<table>';
		        $html .= '<tbody>';
		        $html .= '<tr>';
		        $html .= '<td colspan="2"><h3>No data to show. Please check student assessment.</h3></td>';
		        $html .= '</tr>';
		        $html .= '</tbody>';
		        $html .= '</table>';
		      }

	        echo $html;
        break;
		    case 'MNTHLY':
	        $semester = $this->assessment->get_semester();
	        $frst_hlf = array('June', 'July', 'August', 'September', 'Finals');
	        $scnd_hlf = array('November', 'December', 'January', 'February', 'Finals');

	        if ($totalFees > 0)
		    	{
		    		$upon = 1500;
		    		$payment = ($totalFees - $upon) / 5;

	    			$html  = '<fieldset>';
		        $html .= '<legend>Payables for the whole term</legend>';
		        $html .= '<table class="table table-condensed">';
		        $html .= '<tbody>';
		        switch($semester->semester)
		        {
		        	case '1st':
				        $html .= '<tr>';
	        			$html .= '<td><input type="hidden" name="pymnt_for[]" value="upon" /><strong>Total Payment upon enrollment</strong></td>';
	        			$html .= '<td><input type="hidden" name="pymnt_amnt[]" value="'.$upon.'" />Php '.number_format($upon, 2).'</td>';
				        $html .= '</tr>';
		        		for ($i = 0; $i < count($frst_hlf); $i++)
		        		{		        			
					        $html .= '<tr>';
		        			$html .= '<td><input type="hidden" name="pymnt_for[]" value="'.$frst_hlf[$i].'" /><strong>Payment before the end of '.$frst_hlf[$i].'</strong></td>';
		        			$html .= '<td><input type="hidden" name="pymnt_amnt[]" value="'.$payment.'" />Php '.number_format($payment, 2).'</td>';
					        $html .= '</tr>';
		        		}
		        	break;
		        	case '2nd':
		        		$html .= '<tr>';
	        			$html .= '<td><input type="hidden" name="pymnt_for[]" value="upon" /><strong>Total Payment upon enrollment</strong></td>';
	        			$html .= '<td><input type="hidden" name="pymnt_amnt[]" value="'.$upon.'" />Php '.number_format($upon, 2).'</td>';
				        $html .= '</tr>';
		        		for ($i = 0; $i < count($scnd_hlf); $i++)
		        		{
		        			$html .= '<tr>';
		        			$html .= '<td><input type="hidden" name="pymnt_for[]" value="'.$scnd_hlf[$i].'" /><strong>Payment before the end of '.$scnd_hlf[$i].'</strong></td>';
		        			$html .= '<td><input type="hidden" name="pymnt_amnt[]" value="'.$payment.'" />Php '.number_format($payment, 2).'</td>';
					        $html .= '</tr>';
		        		}
		        	break;
		        }
		        $html .= '</tbody>';
		        $html .= '</table>';
		        $html .= '<fieldset>';
		      }
		      else
		      {
		        $html  = '<table>';
		        $html .= '<tbody>';
		        $html .= '<tr>';
		        $html .= '<td colspan="2"><h3>No data to show. Please check student assessment.</h3></td>';
		        $html .= '</tr>';
		        $html .= '</tbody>';
		        $html .= '</table>';
		      }

		      echo $html;
	        break;
		    default:
		    	//
		    	;
			}
		}
		else
		{
			exit('No direct script access allowed');
		}
	}

	public function Get_student_assessment_info()
	{
		if ($this->input->is_ajax_request())
		{
			$stud_id = $this->input->get('studID');

			$data = array(
				'stud_info' => $this->student->get_student_info($stud_id),
				'course' => $this->assessment->get_courses(),
				'semester' => $this->assessment->get_semester(),
				'fees' => $this->assessment->get_fees(),
				'scheme' => $this->assessment->get_payment_scheme(),
				);

			return $result = $this->load->view('Student_Records/Update_student_assessment_view', $data);
		}
		else
		{
			exit('No direct script access allowed');
		}
	}

	public function Update_student_assessment($stud_id)
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			if ($this->student->update_student_assessment($stud_id))
			{
				redirect(site_url('admin/student_rcrd/view/'.$stud_id));
			}
			else
			{
				redirect(site_url('admin/student_rcrd/view/'.$stud_id));
			}
		}
	}
}

/* End of file Student_records.php */
/* Location: ./application/modules/Student_Records/controllers/Student_records.php */