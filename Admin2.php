<?php
    $req=$_POST['select'];
    echo '<script>
    function redirect()
    {
    document.location.href="'.$req.'";
    }
    redirect()
    </script>'
?>