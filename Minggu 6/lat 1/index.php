<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
	<style type="text/css">
	input, select {
	  	width: 100%;
	  	padding: 12px 20px;
	  	margin: 10px 0;
	  	box-sizing: border-box;
	}

	</style>
</head>

<body>
	<div style="width: 500px; margin: 0 auto; margin-top: 80px">
    <form action="proses.php" method="post">
        <label>NIM:</label>
        <input type="text" name="nim">

        <label>Program Studi</label>
        <select name="prodi">
            <option value="Teknik Informatika S1">Teknik Informatika S1</option>
            <option value="Sistem Informasi S1">Sistem Informasi S1</option>
            <option value="Teknik Informatika D3">Teknik Informatika D3</option>
        </select>

        <label>Nilai Tugas:</label>
        <input type="text" name="nilai_tugas">

        <label>Nilai UTS:</label>
        <input type="text" name="nilai_uts">

        <label>Nilai UAS:</label>
        <input type="text" name="nilai_uas">

        <label>Catatan Khusus</label>
        <div>
            <input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%<br>
            <input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas<br>
            <input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas<br>
        </div>
        <button type="submit" name="kirim">Submit</button>
    </form>
</body>

</html>