<?php
session_start();
include('../config/config.php');

require '../import/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx']; 

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {

            $activity        = $row['0'];
            $objectives      = $row['1'];
            $daterange       = $row['2'];
            $venue           = $row['3'];
            $dswd_fo_m       = $row['4'];
            $dswd_fo_f       = $row['5'];
            $dswd_co_m       = $row['6'];
            $dswd_co_f       = $row['7'];
            $dswd_cntr_m     = $row['8'];
            $dswd_cntr_f     = $row['9'];
            $dswd_ip_m       = $row['10'];
            $dswd_ip_f       = $row['11'];
            $interm_lgu_m    = $row['12'];
            $interm_lgu_f    = $row['13'];
            $interm_nga_m    = $row['14'];
            $interm_nga_f    = $row['15'];
            $interm_ngo_m    = $row['16'];
            $interm_ngo_f    = $row['17'];
            $interm_po_m     = $row['18'];
            $interm_po_f     = $row['19'];
            $interm_vltr_m   = $row['20'];
            $interm_vltr_f   = $row['21'];
            $interm_ip_m     = $row['22'];
            $interm_ip_f     = $row['23'];
            $stakeh_acdm_m   = $row['24'];
            $stakeh_acdm_f   = $row['25'];
            $stakeh_rlgs_m   = $row['26'];
            $stakeh_rlgs_f   = $row['27'];
            $stakeh_buss_m   = $row['28'];
            $stakeh_buss_f   = $row['29'];
            $stakeh_mdia_m   = $row['30'];
            $stakeh_mdia_f   = $row['31'];
            $stakeh_ip_m     = $row['32'];
            $stakeh_ip_f     = $row['33'];
            $benefic_gen_m   = $row['34'];
            $benefic_gen_f   = $row['35'];
            $benefic_yth_m   = $row['36'];
            $benefic_yth_f   = $row['37'];
            $benefic_prnt_m  = $row['38'];
            $benefic_prnt_f  = $row['39'];
            $benefic_oth_m   = $row['40'];
            $benefic_oth_f   = $row['41'];
            $benefic_ip_m    = $row['42'];
            $benefic_ip_f    = $row['43'];
            $total           = $row['44'];
            $sector_ip_m     = $row['45'];
            $sector_ip_f     = $row['46'];
            $sector_snr_m    = $row['47'];
            $sector_snr_f    = $row['48'];
            $sector_pwd_m    = $row['49'];
            $sector_pwd_f    = $row['50'];
            $sector_solp_m   = $row['51'];
            $sector_solp_f   = $row['52'];
            $eval_por_m      = $row['53'];
            $eval_por_f      = $row['54'];
            $eval_fair_m     = $row['55'];
            $eval_fair_f     = $row['56'];
            $eval_sati_m     = $row['57'];
            $eval_sati_f     = $row['58'];
            $eval_vs_m       = $row['59'];
            $eval_vs_f       = $row['60'];
            $eval_excl_m     = $row['61'];
            $eval_excl_f     = $row['62'];
            $fund_inter      = $row['63'];
            $fund_exter      = $row['64'];
            $remarks         = $row['65'];

                $studentQuery = "INSERT INTO students (activity, objectives, daterange, venue, dswd_fo_m, dswd_fo_f, dswd_co_m, dswd_co_f, dswd_cntr_m, dswd_cntr_f, dswd_ip_m, dswd_ip_f, interm_lgu_m, interm_lgu_f, interm_nga_m, interm_nga_f, interm_ngo_m, interm_ngo_f, interm_po_m, interm_po_f, interm_vltr_m, interm_vltr_f, interm_ip_m, interm_ip_f, stakeh_acdm_m, stakeh_acdm_f, stakeh_rlgs_m, stakeh_rlgs_f, stakeh_buss_m, stakeh_buss_f, stakeh_mdia_m, stakeh_mdia_f, stakeh_ip_m, stakeh_ip_f, benefic_gen_m, benefic_gen_f, benefic_yth_m, benefic_yth_f, benefic_prnt_m, benefic_prnt_f, benefic_oth_m, benefic_oth_f, benefic_ip_m, benefic_ip_f, total, sector_ip_m, sector_ip_f, sector_snr_m, sector_snr_f, sector_pwd_m, sector_pwd_f, sector_solp_m, sector_solp_f, eval_por_m, eval_por_f, eval_fair_m, eval_fair_f, eval_sati_m, eval_sati_f, eval_vs_m, eval_vs_f, eval_excl_m, eval_excl_f, fund_inter, fund_exter, remarks) 

                   VALUES            ( '$activity',
                                      '$objectives',
                                      '$daterange',
                                      '$venue',
                                      '$dswd_fo_m',
                                      '$dswd_fo_f',
                                      '$dswd_co_m',
                                      '$dswd_co_f',
                                      '$dswd_cntr_m',
                                      '$dswd_cntr_f',
                                      '$dswd_ip_m',
                                      '$dswd_ip_f',
                                      '$interm_lgu_m',
                                      '$interm_lgu_f',
                                      '$interm_nga_m',
                                      '$interm_nga_f',
                                      '$interm_ngo_m',
                                      '$interm_ngo_f',
                                      '$interm_po_m',
                                      '$interm_po_f',
                                      '$interm_vltr_m',
                                      '$interm_vltr_f',
                                      '$interm_ip_m',
                                      '$interm_ip_f',
                                      '$stakeh_acdm_m',
                                      '$stakeh_acdm_f',
                                      '$stakeh_rlgs_m',
                                      '$stakeh_rlgs_f',
                                      '$stakeh_buss_m',
                                      '$stakeh_buss_f',
                                      '$stakeh_mdia_m',
                                      '$stakeh_mdia_f',
                                      '$stakeh_ip_m',
                                      '$stakeh_ip_f',
                                      '$benefic_gen_m',
                                      '$benefic_gen_f',
                                      '$benefic_yth_m',
                                      '$benefic_yth_f',
                                      '$benefic_prnt_m',
                                      '$benefic_prnt_f',
                                      '$benefic_oth_m',
                                      '$benefic_oth_f',
                                      '$benefic_ip_m',
                                      '$benefic_ip_f',
                                      '$total',
                                      '$sector_ip_m',
                                      '$sector_ip_f',
                                      '$sector_snr_m',
                                      '$sector_snr_f',
                                      '$sector_pwd_m',
                                      '$sector_pwd_f',
                                      '$sector_solp_m',
                                      '$sector_solp_f',
                                      '$eval_por_m',
                                      '$eval_por_f',
                                      '$eval_fair_m',
                                      '$eval_fair_f',
                                      '$eval_sati_m',
                                      '$eval_sati_f',
                                      '$eval_vs_m',
                                      '$eval_vs_f',
                                      '$eval_excl_m',
                                      '$eval_excl_f',
                                      '$fund_inter',
                                      '$fund_exter',
                                      '$remarks')";

                $result = mysqli_query($conn, $monthlyQuery);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: ../test_import.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: ../test_import.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: ../test_import.php');
        exit(0);
    }
}
?>