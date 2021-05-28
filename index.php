<?php
if( isset($_GET['u']) )
{
    $blob_url = $_GET['u'];
    // example: https://github.com/Noah1001000/IR-Map/blob/master/IRMap.html
    
    $raw_url = $blob_url;
    $raw_url = str_replace('https://github.com/','https://raw.githubusercontent.com/',$raw_url);
    $raw_url = str_replace('/blob/','/',$raw_url);
    // example: https://raw.githubusercontent.com/Noah1001000/IR-Map/master/IRMap.html
    
    $base_url = $raw_url;
    // example: https://raw.githubusercontent.com/Noah1001000/IR-Map/master/IRMap.html
    
    $s = file_get_contents( $raw_url );
    
    echo '<base href="'.$base_url.'">';
    
    echo $s;
}
else
{
    ?>
    
    <form action="" method="get">
        <input autofocus="" size="100" type="text" name="u" placeholder="type here HTML file blob url in github">
        <br>
        <input type="submit">
    </form>
    
    <?php
}