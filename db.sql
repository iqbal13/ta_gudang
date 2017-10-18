<!DOCTYPE html>
<html lang="id" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<meta name="referrer" content="origin-when-crossorigin">
<title>Ekspor: ta_gudang - Adminer</title>
<link rel="stylesheet" type="text/css" href="adminer.php?file=default.css&amp;version=4.3.0">
<script type="text/javascript" src="adminer.php?file=functions.js&amp;version=4.3.0"></script>
<link rel="shortcut icon" type="image/x-icon" href="adminer.php?file=favicon.ico&amp;version=4.3.0">
<link rel="apple-touch-icon" href="adminer.php?file=favicon.ico&amp;version=4.3.0">

<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = 'You are offline.';
</script>

<div id="help" class="jush-sql jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
<p id="breadcrumb"><a href="adminer.php">MySQL</a> &raquo; <a href='adminer.php?username=root' accesskey='1' title='Alt+Shift+1'>Server</a> &raquo; <a href="adminer.php?username=root&amp;db=ta_gudang">ta_gudang</a> &raquo; Ekspor
<h2>Ekspor: ta_gudang</h2>
<div id='ajaxstatus' class='jsonly hidden'></div>

<form action="" method="post">
<table cellspacing="0">
<tr><th>Hasil<td><label><input type='radio' name='output' value='text' checked>buka</label><label><input type='radio' name='output' value='file'>simpan</label><label><input type='radio' name='output' value='gz'>gzip</label>
<tr><th>Format<td><label><input type='radio' name='format' value='sql' checked>SQL</label><label><input type='radio' name='format' value='csv'>CSV,</label><label><input type='radio' name='format' value='csv;'>CSV;</label><label><input type='radio' name='format' value='tsv'>TSV</label>
<tr><th>Basis data<td><select name='db_style'><option selected><option>USE<option>DROP+CREATE<option>CREATE</select><label><input type='checkbox' name='routines' value='1' checked>Rutin</label><label><input type='checkbox' name='events' value='1' checked>Even</label><tr><th>Tabel<td><select name='table_style'><option><option selected>DROP+CREATE<option>CREATE</select><label><input type='checkbox' name='auto_increment' value='1'>Inkrementasi Otomatis</label><label><input type='checkbox' name='triggers' value='1' checked>Pemicu</label><tr><th>Data<td><select name='data_style'><option><option>TRUNCATE+INSERT<option selected>INSERT<option>INSERT+UPDATE</select></table>
<p><input type="submit" value="Ekspor">
<input type="hidden" name="token" value="210324:25178">

<table cellspacing="0">
<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables' checked onclick='formCheck(this, /^tables\[/);'>Tabel</label><th style='text-align: right;'><label class='block'>Data<input type='checkbox' id='check-data' checked onclick='formCheck(this, /^data\[/);'></label></thead>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='barang' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">barang</label><td align='right'><label class='block'><span id='Rows-barang'></span><input type='checkbox' name='data[]' value='barang' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-data&#039;);"></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='barang_keluar' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">barang_keluar</label><td align='right'><label class='block'><span id='Rows-barang_keluar'></span><input type='checkbox' name='data[]' value='barang_keluar' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-data&#039;);"></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='barang_masuk' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">barang_masuk</label><td align='right'><label class='block'><span id='Rows-barang_masuk'></span><input type='checkbox' name='data[]' value='barang_masuk' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-data&#039;);"></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='users' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">users</label><td align='right'><label class='block'><span id='Rows-users'></span><input type='checkbox' name='data[]' value='users' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-data&#039;);"></label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='buatgrafik' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">buatgrafik</label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='v_barangkeluar' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">v_barangkeluar</label>
<tr><td><label class='block'><input type='checkbox' name='tables[]' value='v_barangmasuk' checked onclick="checkboxClick(event, this); formUncheck(&#039;check-tables&#039;);">v_barangmasuk</label>
<script type='text/javascript'>ajaxSetHtml('adminer.php?username=root&db=ta_gudang&script=db');</script>
</table>
</form>
<p><a href='adminer.php?username=root&amp;db=ta_gudang&amp;dump=barang%25'>barang</a> <a href='adminer.php?username=root&amp;db=ta_gudang&amp;dump=v%25'>v</a></div>

<form action='' method='post'>
<div id='lang'>Bahasa: <select name='lang' onchange="this.form.submit();"><option value="en">English<option value="ar">العربية<option value="bg">Български<option value="bn">বাংলা<option value="bs">Bosanski<option value="ca">Català<option value="cs">Čeština<option value="da">Dansk<option value="de">Deutsch<option value="el">Ελληνικά<option value="es">Español<option value="et">Eesti<option value="fa">فارسی<option value="fi">Suomi<option value="fr">Français<option value="gl">Galego<option value="hu">Magyar<option value="id" selected>Bahasa Indonesia<option value="it">Italiano<option value="ja">日本語<option value="ko">한국어<option value="lt">Lietuvių<option value="nl">Nederlands<option value="no">Norsk<option value="pl">Polski<option value="pt">Português<option value="pt-br">Português (Brazil)<option value="ro">Limba Română<option value="ru">Русский язык<option value="sk">Slovenčina<option value="sl">Slovenski<option value="sr">Српски<option value="ta">த‌மிழ்<option value="th">ภาษาไทย<option value="tr">Türkçe<option value="uk">Українська<option value="vi">Tiếng Việt<option value="zh">简体中文<option value="zh-tw">繁體中文</select> <input type='submit' value='Gunakan' class='hidden'>
<input type='hidden' name='token' value='940734:855408'>
</div>
</form>
<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Keluar" id="logout">
<input type="hidden" name="token" value="210324:25178">
</p>
</form>
<div id="menu">
<h1>
<a href='https://www.adminer.org/' target='_blank' id='h1'>Adminer</a> <span class="version">4.3.0</span>
<a href="https://www.adminer.org/#download" target="_blank" id="version"></a>
</h1>
<script type="text/javascript" src="adminer.php?file=jush.js&amp;version=4.3.0"></script>
<script type="text/javascript">
var jushLinks = { sql: [ 'adminer.php?username=root&db=ta_gudang&table=$&', /\b(barang|barang_keluar|barang_masuk|buatgrafik|users|v_barangkeluar|v_barangmasuk)\b/g ] };
jushLinks.bac = jushLinks.sql;
jushLinks.bra = jushLinks.sql;
jushLinks.sqlite_quo = jushLinks.sql;
jushLinks.mssql_bra = jushLinks.sql;
bodyLoad('5.5');
</script>
<form action="">
<p id="dbs">
<input type="hidden" name="username" value="root"><span title='basis data'>DB</span>: <select name='db' onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'><option value=""><option>a09<option>airtel<option>akane_admin<option>angularcode_customer<option>angularcode_task<option>anri_jdih<option>apilaravel1<option>appdb<option>bank_soal<option>batemuri<option>belajarcron<option>belajarpartisi<option>candralab-map<option>catetduit<option>chat_realtime<option>ci_monitoring<option>dataemis<option>dataindonesia<option>datakemenag<option>db_cilumen<option>db_mahasiswa<option>db_penjualan<option>db_simantra_web<option>dbcrud_dekstop<option>dbkecamatan<option>dbkecamatan2<option>dbkemenag2<option>dbschool<option>dta<option>dupak<option>dwitri<option>edata<option>edokumenb<option>eksperimen<option>eksperimenapi<option>eksperimenskripsi<option>empakemenag<option>helpdesk<option>hotel_db<option>image_test<option>information_schema<option>integrasidata<option>integrasidatakemenag<option>ionicapi<option>java<option>js_crud<option>jul<option>julismantravel<option>kma_siskohat<option>larasosmed<option>laravel_datatable54<option>laravel_employee<option>laravel_multiauth<option>lerendev<option>listrindo<option>localbrand<option>lrv_est<option>lrv_warehouse<option>maps_json<option>mobil<option>mysql<option>ngci<option>onlineshop<option>ots_sistem<option>penjualan<option>performance_schema<option>perpusapi<option>phpmyadmin<option>pln<option>quran<option>simpak<option>sipenyaluran<option>sosmed<option>stara<option selected>ta_gudang<option>ta_medis<option>ta_warehouse<option>ta_wedding<option>tesjson<option>test<option>ujian-online<option>ujicoba<option>was_220<option>was_beta<option>was_db<option>wasila<option>wepos_free</select><input type='submit' value='Gunakan' class='hidden'>
<input type="hidden" name="dump" value=""></p></form>
<p class='links'><a href='adminer.php?username=root&amp;db=ta_gudang&amp;sql='>Perintah SQL</a>
<a href='adminer.php?username=root&amp;db=ta_gudang&amp;import='>Impor</a>
<a href='adminer.php?username=root&amp;db=ta_gudang&amp;dump=' id='dump' class='active '>Ekspor</a>
<a href="adminer.php?username=root&amp;db=ta_gudang&amp;create=">Buat tabel</a>
<ul id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=barang" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=barang" class='structure' title='Lihat struktur'>barang</a>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=barang_keluar" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=barang_keluar" class='structure' title='Lihat struktur'>barang_keluar</a>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=barang_masuk" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=barang_masuk" class='structure' title='Lihat struktur'>barang_masuk</a>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=buatgrafik" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=buatgrafik" class='view' title='Lihat struktur'>buatgrafik</a>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=users" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=users" class='structure' title='Lihat struktur'>users</a>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=v_barangkeluar" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=v_barangkeluar" class='view' title='Lihat struktur'>v_barangkeluar</a>
<li><a href="adminer.php?username=root&amp;db=ta_gudang&amp;select=v_barangmasuk" class='select'>pilih</a> <a href="adminer.php?username=root&amp;db=ta_gudang&amp;table=v_barangmasuk" class='view' title='Lihat struktur'>v_barangmasuk</a>
</ul>
</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
