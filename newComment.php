<form class="my-2 text-center" method="post" action="submit-newComment.php" >
                                                         <!-- "1" -->
    <input type="hidden" name="id" value =  "<?php print($_GET['id']); ?>" />
    <div>
        <textarea name="commentText"   cols="30" rows="10"></textarea>
    </div>

    <div>
        <input type="submit" class="submitKala py-2 px-3 my-3 mx-auto" name="submitComment" value=" ثبت نظر ">
    </div>
</form>
