
<html>
<head>
 <title>Print Laporan Bulanan</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1></h1>
                        <h1 align="center">Laporan Pembukuan Administrasi Keuangan</h1>
                         <br/>
                          <table border="1" width="100%" height="82%" style="border-collapse:collapse; table-layout:fixed;" align="center">
                              <tr>
                                  <td rowspan="2" colspan="2" width="29%" height="10%" style="word-wrap:break-word;" align="center">LAPORAN BULANAN</td>
                                  <td width="20%" style="padding-left:10px;">ID Laporan Bulanan</td>
                                  <td align="center" width="3%"> : </td>
                                  <td colspan="5" style="padding-left:10px;"> <?php echo $idlap;?></td>
                              </tr>
                              <tr>
                                  <td style="padding-left:10px;"> Bulan </td>
                                  <td align="center"> : </td>
                                  <td colspan="5" style="padding-left:10px;"><?php echo $bulan;?></td>
                              </tr>
                              <tr>
                                <td colspan="9" rowspan="10" valign="top" style="padding-left:5px;">
                                <p>
                                  Sumber Data : <br/>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Data Laporan Bulanan<br/>
                                      <br/>
                                  <br>
                                  <b>Perhitungan Laporan</b>
                                  <br/>
                                  <br/>
                                      <table border="1" width="100%" height="20%" style="border-collapse:collapse; table-layout:fixed;font-size:12px;">
                                        <tr align="center">
                                          <td width="5%">No.</td>
                                          <td style="word-wrap:break-word;" width="35%">Bulan</td>
                                          <td style="word-wrap:break-word;" width="65%">Pemasukan</td>
                                          <td style="word-wrap:break-word;" width="65%">Pengeluaran</td>


                                        </tr>
                                        <tr align="center">
                                          <td width="5%">1.</td>
                                          <td style="word-wrap:break-word;" width="35%">Total Pembayaran Siswa</td>
                                          <td style="word-wrap:break-word;" width="65%"><?php echo $pembayaranmhs;?></td>

                                        </tr>
                                        <tr align="center">
                                          <td width="5%">2.</td>
                                          <td style="word-wrap:break-word;" width="35%">Total Pemasukan Sekolah</td>
                                          <td style="word-wrap:break-word;" width="65%"><?php echo $pemasukanins;?></td>

                                        </tr>
                                        <tr align="center">
                                          <td bgcolor="red" colspan="2" style="word-wrap:break-word;" width="35%">Total Pemasukan </td>
                                          <td style="word-wrap:break-word;" width="65%"><?php echo $pemasukanins;?></td>

                                        </tr>
                                        <tr align="center">
                                          <td width="5%">1.</td>
                                          <td style="word-wrap:break-word;" width="35%">Total Pengeluaran</td>
                                          <td style="word-wrap:break-word;" width="65%"><?php echo $pengeluaran;?></td>

                                        </tr>
                                        <tr align="center">
                                          <td colspan="2"> Profit / Loss </td>
                                          <td ></td>
                                          <td></td>
                                        </tr>
                                      </table>
                                  <br/>
                              </tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr></tr>
                              <tr>
                                <td colspan="5" align="center" width="35%">Disusun Oleh</td>
                                <td colspan="4" align="center">Disahkan Oleh</td>
                              </tr>
                              <tr>
                                <td align="center"  colspan="2">Nama / Jabatan</td>
                                <td align="center" >Tanggal</td>
                                <td align="center" colspan="2">Tanda Tangan</td>
                                <td colspan="2" align="center">Nama / Jabatan</td>
                                <td align="center">Tanggal</td>
                                <td align="center">Tanda Tangan</td>
                              </tr>
                              <tr>
                                <td height="7%" colspan="2"></td>
                                <td></td>
                                <td colspan="2"></td>
                                <td colspan="2"></td>
                                <td></td>
                                <td></td>
                              </tr>

    </table>
    <table width="97%" height="5%">
      <tr>
        <td align="right">
          Indeks A.
        </td>
      </tr>
    </table>
     <script>
  window.load = print_d();
  function print_d(){
   window.print();
  }
 </script>
</body>
</html>  <span style="font-family: Times New Roman;"><span style="white-space: normal;">
</span></span>
