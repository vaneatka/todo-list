<!-- //  shablon dlia task list -->

<div>
<ul>

<h3>Showing Tasks <?php print count($tasks)?></h3>
<?php foreach($tasks as $task){   ?>

    <li>
    <input type="checkbox" <?php print ($task['status']=="done")? "checked": null;  ?> >
    <?php print $task['title'] ?>
    <small>
    <?php print $task['created']
    // history date format,today, yesterday, this week, this year
    ?>
    </small>
    </li>    

<?php } ?>

</ul>


</div>