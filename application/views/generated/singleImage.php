<h1><?=$content['main']['title'];?></h1>

<?if(is_object($content['main']['file'])):?>
 <img id="file" src="<?=$content['main']['file']->original->fullpath;?>" width="<?=$content['main']['file']->original->width;?>" height="<?=$content['main']['file']->original->height;?>" alt="<?=$content['main']['file']->original->filename;?>" />
<?endif;?>

<p class="singleIPE2"> <?=$content['main']['singleIPE2'];?></p>

<p class="singleIPE3"> <?=$content['main']['singleIPE3'];?></p>

<p class="singleIPE4"> <?=$content['main']['singleIPE4'];?></p>

<p class="singleIPE5"> <?=$content['main']['singleIPE5'];?></p>

