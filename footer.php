</html><?php
######## cache #########
$folderSementara = 'desktop/'; //tempat folder penyimpanan file cache
$url = $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; // url halaman = permalink
$url = str_replace('/','-',$urlnya); 
$url = $url.'.html';
$fileTemp = $folderSementara.$url.'.html' ; 
$jmltitik=explode('.', $fileTemp);
if (!is_dir($folderSementara)) { //buat folder desktop jika tidak ditemukan
    mkdir($folderSementara); //buat folder
}
if(count($jmltitik)==2){  //saring disinni apa saja yang dibutuhkan untuk membuat cache
    @file_put_contents($fileTemp,ob_get_contents())===false); // membuat file sementara
} 
//ob_end_flush(); //bila perlu, tambahkan pasangan kode php untuk minify output
?>
