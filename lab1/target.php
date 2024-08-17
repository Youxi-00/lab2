<pre>
<?php
if (!empty($_POST['firstname'])) {

    echo "<h1>"  .   $_POST['firstname'] . "</h1>";
    echo "<h1>"  .   $_POST['lastname'] . "</h1>";
    echo "<h1>"  .   $_POST['email'] . "</h1>";
    echo "<hr />";
    
    print_r($_POST);
    exit;
}
?>
</pre>
