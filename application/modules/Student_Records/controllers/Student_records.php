<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student_records extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login/Login_model');
		$this->load->model('Student_Records/Student_model', 'student');
		$this->load->model('Assessment/Assessment_model', 'assessment');
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
				'usr' => $this->Login_model->get_user_info(),
				'stud_info' => $this->student->get_student_info(),
			);

			$this->template->load($data, null, 'Index', 'Student_Records');
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
				'usr' => $this->Login_model->get_user_info(),
				'stud_info' => $this->student->get_student_info($stud_id),
				'gdn_info' => $this->student->get_student_gdn_info($stud_id),
				'fees' => $this->student->get_assessment_info($stud_id),
			);

			$this->template->load($data, null, 'Student_record', 'Student_Records');
		}
	}

	public function Enroll_student()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{
			$data = array(
				'title' => 'Student\'s Record',
				'usr' => $this->Login_model->get_user_info(),
				'course' => $this->assessment->get_courses(),
				'semester' => $this->assessment->get_semester(),
				'fees' => $this->assessment->get_fees(),
				'scheme' => $this->assessment->get_payment_scheme(),
			);

			$this->template->load($data, null, 'Enroll_student', 'Student_Records');
		}
	}

	public function Auth_student_enrollment()
	{
		if ($this->session->userdata('user_type') != 'Admin')
		{
			redirect(site_url());
		}
		else
		{			
			if ($this->student->enroll_student())
			{
				redirect(site_url('admin/student_rcrd'));
			}
			else
			{
				redirect(site_url('admin/student_rcrd/enroll'));
			}
		}
	}

	public function Get_fee_amount()
	{
		$fee = $this->input->get('id');
		$result = $this->assessment->get_fees($fee);

		if ($result)
		{
			echo $result;
		}
	}

	public function Get_payment_scheme()
	{
		if ($this->input->is_ajax_request()) {
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
		    		$upon = 2500;
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
	        $frst_hlf = array('June', 'July', 'August', 'September', 'October');
	        $scnd_hlf = array('November', 'December', 'January', 'February', 'March');

	        if ($totalFees > 0)
		    	{
		    		$upon = 2500;
		    		$payment = ($totalFees - $upon) / 4;

	    			$html  = '<fieldset>';
		        $html .= '<legend>Payables for the whole term</legend>';
		        $html .= '<table class="table table-condensed">';
		        $html .= '<tbody>';
		        switch($semester->semester)
		        {
		        	case '1st':
		        		for ($i = 0; $i < count($frst_hlf); $i++)
		        		{		        			
					        $html .= '<tr>';
		        			$html .= '<td><input type="hidden" name="pymnt_for[]" value="'.$frst_hlf[$i].'" /><strong>Payment for the Month of '.$frst_hlf[$i].'</strong></td>';
		        			$html .= '<td><input type="hidden" name="pymnt_amnt[]" value="'.$payment.'" />Php '.number_format($payment, 2).'</td>';
					        $html .= '</tr>';
		        		}
		        	break;
		        	case '2nd':
		        		for ($i = 0; $i < count($scnd_hlf); $i++)
		        		{
		        			$html .= '<tr>';
		        			$html .= '<td><input type="hidden" name="pymnt_for[]" value="'.$scnd_hlf[$i].'" /><strong>Payment for the Month of '.$scnd_hlf[$i].'</strong></td>';
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
}

/* End of file Student_records.php */
/* Location: ./application/modules/Student_Records/controllers/Student_records.php */