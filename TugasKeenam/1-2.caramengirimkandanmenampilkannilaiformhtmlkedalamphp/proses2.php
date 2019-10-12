<?php 
/*menggunakan variabel %_post pada saat pembuatan form  menggunakan atribut method=post, 
namun hasil yang di tampilkan sama dengan variabel %_get*/
    echo $_POST['nama']; //mengakses nilai form dari atribut yang ada di dalam form html
    echo "<br/>"; //menampilkan enter
    echo $_POST['email'];//mengakses nilai form dari atribut yang ada di dalam form html
?>