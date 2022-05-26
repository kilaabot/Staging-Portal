<?php
require "../fpdf/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=micomyk_lmsportal','micomyk_portallm','lmsadmin1234');



class myPDF extends FPDF{
    
    function header (){
        $this->Image('../fpdf/logo-dswd-pdf.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'MONTHLY ACCOMPLISHMENT REPORT',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'DEPARMENT OF SOCIAL WELFARE AND DEVELOPMENT',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',7);
        $this->Cell(15,20,'Training',1,0,'C');
        $this->Cell(15,20,'Objectives',1,0,'C');
        $this->Cell(15,20,'Date',1,0,'C');
        $this->Cell(15,20,'Venue',1,0,'C'); //vertically merged cell
        $this->Cell(120,5,'Number of Participants',1,0,'C'); //vertically merged cell
        $this->Cell(8,20,'Total',1,0,'C'); //normal height, but occupy 4 columns (horizontally merged)
        $this->Cell(25,10,'Sectors Representative',1,0,'C'); //normal height, but occupy 4 columns (horizontally merged)
        $this->Cell(30,10,'Evaluation Results',1,0,'C'); //vertically merged cell
        $this->Cell(20,10,'Fund/Resources Utilized',1,0,'C'); //vertically merged cell
        $this->Cell(20,20,'Remarks',1,0,'C'); //vertically merged cell
        $this->Cell(0,5,'',0,1,'C'); //dummy line ending, height=5(normal row height) width=09 should be invisible
       
        //second line(row)
        $this->Cell(60,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(30,5,'DSWD',1,0,'C'); //dummy cell to align next cell, should be invisible
        $this->Cell(30,5,'Intermediaries',1,0,'C');
        $this->Cell(30,5,'Stakeholders',1,0,'C');
        $this->Cell(30,5,'Beneficiaries',1,0,'C');
        $this->Cell(0,5,'',0,1); //dummy line ending, height=5(normal row height) width=09 should be invisible
       
        // DSWD
        $this->Cell(60,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(7.5,5,'FO',1,0,'C'); 
        $this->Cell(7.5,5,'CO',1,0,'C');
        $this->Cell(7.5,5,'C&T',1,0,'C');
        $this->Cell(7.5,5,'IP',1,0,'C');

        $this->SetFont('Times','B',6);
        $this->Cell(5,5,'LGU',1,0,'C');
        $this->Cell(5,5,'NGA',1,0,'C');
        $this->Cell(5,5,'NGO',1,0,'C');
        $this->Cell(5,5,'PO',1,0,'C');
        $this->Cell(5,5,'V.T',1,0,'C');
        $this->Cell(5,5,'IP',1,0,'C');

        $this->Cell(6,5,'A.D',1,0,'C'); 
        $this->Cell(6,5,'R.G',1,0,'C');
        $this->Cell(6,5,'BS',1,0,'C');
        $this->Cell(6,5,'M.I',1,0,'C');
        $this->Cell(6,5,'IP',1,0,'C');

        $this->Cell(6,5,'GR',1,0,'C'); 
        $this->Cell(6,5,'YT',1,0,'C');
        $this->Cell(6,5,'PR',1,0,'C');
        $this->Cell(6,5,'OT',1,0,'C');
        $this->Cell(6,5,'IP',1,0,'C');

        $this->Cell(8,5,'',0,0,'C'); //dummy cell to align next cell, should be invisible
        $this->Cell(6.3,5,'IP',1,0,'C');
        $this->Cell(6.3,5,'SR.C',1,0,'C');
        $this->Cell(6.2,5,'PWD',1,0,'C');
        $this->Cell(6.1,5,'SOl.P',1,0,'C');

        $this->Cell(0.2,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(5.9,5,'POR',1,0,'C');
        $this->Cell(6,5,'FAIR',1,0,'C');
        $this->Cell(6,5,'SAT',1,0,'C');
        $this->Cell(6,5,'VS',1,0,'C');
        $this->Cell(6,5,'EXCL',1,0,'C');

        $this->Cell(0.1,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(9.9,10,'INTRL',1,0,'C');
        $this->Cell(9.9,10,'EXTRL',1,0,'C');

        $this->Cell(0,5,'',0,1); //dummy line ending, height=5(normal row height) width=09 should be invisible


        // DSWD
        $this->SetFont('Times','B',4);
        $this->Cell(60,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(3.8,5,'M',1,0,'C');  
        $this->Cell(3.7,5,'F',1,0,'C');

        $this->Cell(3.8,5,'M',1,0,'C');
        $this->Cell(3.7,5,'F',1,0,'C');

        $this->Cell(3.8,5,'M',1,0,'C');
        $this->Cell(3.7,5,'F',1,0,'C'); 

        $this->Cell(3.8,5,'M',1,0,'C');
        $this->Cell(3.7,5,'F',1,0,'C');

        // Intermediaries 
        $this->Cell(0.10,5,'',0,0,'C'); 
        $this->Cell(2.4,5,'M',1,0,'C'); //LGU
        $this->Cell(2.5,5,'F',1,0,'C');

        $this->Cell(2.5,5,'M',1,0,'C'); //NGA
        $this->Cell(2.5,5,'F',1,0,'C');

        $this->Cell(2.5,5,'M',1,0,'C'); //NGO
        $this->Cell(2.5,5,'F',1,0,'C'); 

        $this->Cell(2.5,5,'M',1,0,'C'); //PO
        $this->Cell(2.5,5,'F',1,0,'C');

        $this->Cell(2.5,5,'M',1,0,'C'); //V.T
        $this->Cell(2.5,5,'F',1,0,'C');

        $this->Cell(2.5,5,'M',1,0,'C'); //IP
        $this->Cell(2.5,5,'F',1,0,'C');

        // Stakeholders
        $this->Cell(0.10,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(2.95,5,'M',1,0,'C'); 
        $this->Cell(2.95,5,'F',1,0,'C');

        $this->Cell(3,5,'M',1,0,'C'); 
        $this->Cell(3,5,'F',1,0,'C');

        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C'); 

        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');

        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');

        // Beneficiaries
        $this->Cell(0.10,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(2.95,5,'M',1,0,'C'); 
        $this->Cell(2.95,5,'F',1,0,'C');
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C'); 
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');

        // Sector Representative
        $this->Cell(8,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(3.1,5,'M',1,0,'C'); 
        $this->Cell(3.2,5,'F',1,0,'C');
        $this->Cell(3.1,5,'M',1,0,'C');
        $this->Cell(3.1,5,'F',1,0,'C');
        $this->Cell(3.1,5,'M',1,0,'C');
        $this->Cell(3.1,5,'F',1,0,'C'); 
        $this->Cell(3.1,5,'M',1,0,'C');
        $this->Cell(3.1,5,'F',1,0,'C');

        $this->Cell(0.10,5,'',0,0); //dummy cell to align next cell, should be invisible
        $this->Cell(3,5,'M',1,0,'C'); 
        $this->Cell(3,5,'F',1,0,'C');
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C'); 
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');
        $this->Cell(3,5,'M',1,0,'C');
        $this->Cell(3,5,'F',1,0,'C');
        $this->Ln();
    }
    
    function viewTable($db){
    $this->SetFont('Times','',5.5);
    $stmt = $db->query('select * from monthly');
    while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(15,10,$data->activity,1,0,'C');

        $this->Cell(15,10,$data->objectives,1,0,'C');

        $this->Cell(15,10,$data->daterange,1,0,'C');

        $this->Cell(15,10,$data->venue,1,0,'C');

        // DSWD
        $this->Cell(3.8,10,$data->dswd_fo_m,1,0,'C');
        $this->Cell(3.7,10,$data->dswd_fo_f,1,0,'C');

        $this->Cell(3.8,10,$data->dswd_co_m,1,0,'C');
        $this->Cell(3.7,10,$data->dswd_co_f,1,0,'C');

        $this->Cell(3.8,10,$data->dswd_cntr_m,1,0,'C');
        $this->Cell(3.7,10,$data->dswd_cntr_f,1,0,'C');

        $this->Cell(3.8,10,$data->dswd_ip_m,1,0,'C');
        $this->Cell(3.7,10,$data->dswd_ip_f,1,0,'C');

        // Intermediaries
        $this->Cell(2.5,10,$data->interm_lgu_m,1,0,'C'); 
        $this->Cell(2.5,10,$data->interm_lgu_f,1,0,'C');

        $this->Cell(2.5,10,$data->interm_nga_m,1,0,'C');
        $this->Cell(2.5,10,$data->interm_nga_f,1,0,'C');

        $this->Cell(2.5,10,$data->interm_ngo_m,1,0,'C');
        $this->Cell(2.5,10,$data->interm_ngo_f,1,0,'C');

        $this->Cell(2.5,10,$data->interm_po_m,1,0,'C');
        $this->Cell(2.5,10,$data->interm_po_f,1,0,'C');

        $this->Cell(2.5,10,$data->interm_vltr_m,1,0,'C');
        $this->Cell(2.5,10,$data->interm_vltr_f,1,0,'C');

        $this->Cell(2.5,10,$data->interm_ip_m,1,0,'C');
        $this->Cell(2.5,10,$data->interm_ip_f,1,0,'C');

        // Stakeholders
        $this->Cell(3,10,$data->stakeh_acdm_m,1,0,'C');
        $this->Cell(3,10,$data->stakeh_acdm_f,1,0,'C');

        $this->Cell(3,10,$data->stakeh_rlgs_m,1,0,'C');
        $this->Cell(3,10,$data->stakeh_rlgs_f,1,0,'C');

        $this->Cell(3,10,$data->stakeh_buss_m,1,0,'C');
        $this->Cell(3,10,$data->stakeh_buss_f,1,0,'C');

        $this->Cell(3,10,$data->stakeh_mdia_m,1,0,'C');
        $this->Cell(3,10,$data->stakeh_mdia_f,1,0,'C');

        $this->Cell(3,10,$data->stakeh_ip_m,1,0,'C');
        $this->Cell(3,10,$data->stakeh_ip_f,1,0,'C');

        // Beneficiaries
        $this->Cell(3,10,$data->benefic_gen_m,1,0,'C');
        $this->Cell(3,10,$data->benefic_gen_f,1,0,'C');

        $this->Cell(3,10,$data->benefic_yth_m,1,0,'C');
        $this->Cell(3,10,$data->benefic_yth_f,1,0,'C');

        $this->Cell(3,10,$data->benefic_prnt_m,1,0,'C');
        $this->Cell(3,10,$data->benefic_prnt_f,1,0,'C');

        $this->Cell(3,10,$data->benefic_oth_m,1,0,'C');
        $this->Cell(3,10,$data->benefic_oth_f,1,0,'C');

        $this->Cell(3,10,$data->benefic_ip_m,1,0,'C');
        $this->Cell(3,10,$data->benefic_ip_f,1,0,'C');

        // Total
        $this->Cell(8,10,$data->total,1,0,'C');

        // Sectors Representative
        $this->Cell(3.1,10,$data->sector_ip_m,1,0,'C');
        $this->Cell(3.2,10,$data->sector_ip_f,1,0,'C');

        $this->Cell(3.1,10,$data->sector_snr_m,1,0,'C');
        $this->Cell(3.1,10,$data->sector_snr_f,1,0,'C');

        $this->Cell(3.1,10,$data->sector_pwd_m,1,0,'C');
        $this->Cell(3.1,10,$data->sector_pwd_f,1,0,'C');

        $this->Cell(3.1,10,$data->sector_solp_m,1,0,'C');
        $this->Cell(3.1,10,$data->sector_solp_f,1,0,'C');

        // Evaluation Results
        $this->Cell(3.1,10,$data->eval_por_m,1,0,'C');
        $this->Cell(3,10,$data->eval_por_f,1,0,'C');

        $this->Cell(3,10,$data->eval_fair_m,1,0,'C');
        $this->Cell(3,10,$data->eval_fair_f,1,0,'C');

        $this->Cell(3,10,$data->eval_sati_m,1,0,'C');
        $this->Cell(3,10,$data->eval_sati_f,1,0,'C');

        $this->Cell(3,10,$data->eval_vs_m,1,0,'C');
        $this->Cell(3,10,$data->eval_vs_f,1,0,'C');

        $this->Cell(3,10,$data->eval_excl_m,1,0,'C');
        $this->Cell(3,10,$data->eval_excl_f,1,0,'C');

        // Fund Resources Utilized
        $this->Cell(10,10,$data->fund_inter,1,0,'C');
        $this->Cell(9.96,10,$data->fund_exter,1,0,'C');

        $this->Cell(20,10,$data->remarks,1,0,'C');




        $this->Ln();

        }

    }  
} 

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();

?>