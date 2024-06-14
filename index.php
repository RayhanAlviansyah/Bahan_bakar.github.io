<?php
include 'proses.php';
if (isset($_POST['kirim'])) {
    $beli = new beli();
    $beli->setharga(15420, 16130, 18310, 16510);
    $beli->jumlah = ($_POST ['jumlah']);
    $beli->jenis = ($_POST['jenis']);
    echo $beli->cetakpembeli();

}

?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <center>
    <form action="" method ="POST">
        <td>
            <label> masukan jumlah liter</label>
            <input type="number" name="jumlah" id="jumlah"><br>
            <label>Pilih Jenis Bahan Bakar</label>
            <select name="jenis" id="jenis">
                <option disable selected> --- pilih jenis --- </option>
                <option value="SSuper">Shell Super</option>
                <option value="SVpower">Shell V Power</option>
                <option value="SVpowerDiesel">Shell V Power Diesel</option>
                <option value="SVpowerNitro">Shell V Power Nitro</option>
            </select>
            <input type="submit" name="kirim" id="kirim">
        </td>
    </form>
    </center>
</body>
</html>