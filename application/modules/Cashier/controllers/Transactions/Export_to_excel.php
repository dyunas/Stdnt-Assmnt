<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_to_excel extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cashier/Transactions/Transactions_model', 'transactions');
	}

	public function Export_daily_transaction()
	{
		if ($this->session->userdata('user_type') != 'Cashier')
		{
			redirect(site_url());
		}
		else
		{
			$trans_dte = $this->input->get('date');

			$date = explode('/', $trans_dte);

			$dte_name = $date[0].$date[1].$date[2];

			$trans = $this->transactions->get_daily_transactions($trans_dte);

			$this->load->library('excel');

			$column = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T'];

			$objPHPExcel = new PHPExcel();
			$objPHPExcel->setActiveSheetIndex(0);
			$objPHPExcel->getActiveSheet()->setTitle('Transactions');

	    $defStyle = array('alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, 'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, 'font'  => array('bold'  => false, 'color' => array('rgb' => '000000'), 'size'  => 10)));
	    $objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray($defStyle);

	    $styleArray = array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN )));

			$rowCount = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

			$header = array('Date', 'Receipt', 'Student', 'Cashier', 'Fee', 'Amount Paid');

			// $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':H'.$rowCount)->applyFromArray($styleOuterHeader);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount)->applyFromArray($styleArray);
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$rowCount, date('M d, Y', strtotime($trans_dte)).' Transactions');
			$objPHPExcel->getActiveSheet()->mergeCells('A'.$rowCount.':F'.$rowCount);
			$rowCount++;

			for ($i = 0; $i < count($header); $i++)
			{
				// $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':H'.$rowCount)->applyFromArray($styleCategory);
				$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount)->applyFromArray($styleArray);
				$objPHPExcel->getActiveSheet()->setCellValue($column[$i].$rowCount, $header[$i]);
				$objPHPExcel->getActiveSheet()->getColumnDimension($column[$i])->setAutoSize(true);
			}
			$rowCount++;

			$total_amt = 0;
			foreach($trans as $row)
			{
				// $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount)->applyFromArray($styleCategory);
				$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount)->applyFromArray($styleArray);
				$objPHPExcel->getActiveSheet()->setCellValue($column[0].$rowCount, $row->trans_date);
				$objPHPExcel->getActiveSheet()->setCellValue($column[1].$rowCount, $row->trans_receipt_no);
				$objPHPExcel->getActiveSheet()->setCellValue($column[2].$rowCount, $row->stud_name);
				$objPHPExcel->getActiveSheet()->setCellValue($column[3].$rowCount, $row->fname.' '.$row->lname);
				$objPHPExcel->getActiveSheet()->setCellValue($column[4].$rowCount, $row->trans_name);
				$objPHPExcel->getActiveSheet()->setCellValue($column[5].$rowCount, $row->trans_amount);
				$objPHPExcel->getActiveSheet()->getStyle($column[5].$rowCount)->getNumberFormat()->setFormatCode('#,##0.00');
				$total_amt += $row->trans_amount;
				$rowCount++;
			}

			// $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount)->applyFromArray($styleFooter);
			$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':F'.$rowCount)->applyFromArray($styleArray);
			$objPHPExcel->getActiveSheet()->setCellValue($column[0].$rowCount, 'TOTAL:');
			$objPHPExcel->getActiveSheet()->setCellValue($column[5].$rowCount, $total_amt);
			$objPHPExcel->getActiveSheet()->getStyle($column[5].$rowCount)->getNumberFormat()->setFormatCode('#,##0.00');

			$filename='daily_transactions'.$dte_name.'.xlsx'; //save our workbook as this file name
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
			header('Cache-Control: max-age=0');
			            
			//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
			//if you want to save it as .XLSX Excel 2007 format
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');  
			//force user to download the Excel file without writing it to server's HD
			$objWriter->save('php://output');
		}
	}
}

/* End of file Export_to_excel.php */
/* Location: ./application/modules/Cashier/controllers/Transactions/Export_to_excel.php */