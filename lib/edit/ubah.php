<?php 
require '../function/function.php';

// cek tombol submit sudah ditekan belum
if ( isset($_POST["submit"]) ) {
    if( ubah($_POST) > 0 ) {
     echo "
         <script>
             alert('data berhasil di ubah');
             document.location.href = '../../index.php';
         </script>
     ";
    } else {
     echo "
     <script>
         alert('data gagal di ubah');
         document.location.href = '../../index.php';
     </script>
 ";
    }
}

?>