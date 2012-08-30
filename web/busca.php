<?php
$input_text = $_POST['input_text'];
$url_base = 'https://twitter.com/search.json?q=';

$result = file_get_contents($url_base . $input_text);

$json = json_decode($result);

//var_dump($json);
//die;


$results = $json->results;
//var_dump($results);exit;
if(empty($results)){
    echo "<h2>Sem Resultados</h2>";exit;
}
?>

<h2>Resultados</h2>

<div class="twitter" >
    <?php
    foreach ($results as $twitt):
        ?>
        <img class="user" src="<?php print $twitt->profile_image_url;?>">
        <?php print $twitt->from_user_name ?>
        <?php print $twitt->text ?><br/>
        <?php
    endforeach;
    ?>
</div>