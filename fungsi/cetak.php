

<?php 
 function Redirect($url) {
        flush(); // Flush the buffer
        ob_flush();
        header('location: index.php?hal=laporan'); // Rewrite the header
        die;
    }
         header('Content-type: application/vnd-ms-excel');
         header('Content-Disposition: attachment;filename=LaporanPenjualanTokoLaris.xls');
          ?>