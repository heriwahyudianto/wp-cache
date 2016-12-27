# wp-cache
Cara membuat cache wordpress

Why perlu cache statis?
 1. karena query database lemot
 2. karena apache lemot 
 3. karena WP ada jutaan baris kode, bikin lemot
 bila dihantam ratusan ribu request
 3. karena nginx lebih cepat render file statis

dengan file statis html, tidak perlu load WP, database, apache. 

Yang diperlukan:
  1. bedakan theme untuk smartphone dan desktop. jangan pakai responsive.
  2. cara mendeteksi apakah file cache sudah ada.
  3. hapus cache ketika ada update di database, plugin, tema, atau widget.
