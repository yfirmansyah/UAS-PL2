<?php 
error_reporting(error_reporting() & ~E_NOTICE)
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Beranda</title>
</head>
<body>
<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="<?php echo base64_encode('buku'); ?>">BUKU</a>&nbsp;&nbsp;
            <a href="<?php echo base64_encode('peminjaman'); ?>">PEMINJAMAN</a>&nbsp;&nbsp;
            <a href="<?php echo base64_encode('anggota'); ?>">ANGGOTA</a>
        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
            <?php
                $id_menu = base64_decode($_GET["id"]);
                if($id_menu=='buku')
                {
                    include('buku.php');
                }
                elseif($id_menu=='peminjaman')
                {
                    include('peminjaman.php');
                }
                elseif($id_menu=='anggota')
                {
                    include('anggota.php');
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>