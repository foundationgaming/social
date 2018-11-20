<?php include("article.php") ?>
<h1>Add Article</h1>
<form action="" method="POST">
    <div class="fullrow">
        <label for="title">Title</label>
        <input type="text" id="title">
    </div>
    <div class="fullrow">
        <label for="subtitle">Subtitle</label>
        <input type="text" id="subtitle">
    </div>
    <div class="fullrow">
        <label for="summary">Summary</label>
        <input type="text" id="summary">
    </div>
    <div class="fullrow">
        <label for="artile">Content</label>
        <textarea name="article" id="article" cols="30" rows="10"></textarea>
    </div>
    <div class="buttons">
        <input type="button" name="cancel" class="button" value="Cancel">
        <input type="button" name="submit" class="button" value="Submit">
    </div>
</form>