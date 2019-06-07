<!-- //  shablon dlia task list -->

<div>
<ul>

<h3>Showing Tasks <?php print count($tasks['items'])?></h3>
<?php foreach($tasks['items'] as $task){   ?>

    <li>
    <input type="checkbox" <?php print ($task['status']=="done")? "checked": null;  ?> >
    <a href="" style="text-decoration:none; color:black; cursor:default;">
    <?php print $task['title'] ?>    
    </a>
    <small>
    <?php print $task['created']
    // history date format,today, yesterday, this week, this year
    ?>
    </small>
    </li>    

<?php } ?>

</ul>
<hr>
<a href=""><</a>
<?php for($p=1; $p<=$tasks['total_pages'];$p++){?>
<a href="?page=<?php print $p?>"><?php 
if($tasks['current_page']==$p){
    print '['.$p.']';
}else{
    print $p;
}

?></a>

<?php } ?>
<a href="">></a>


</div>