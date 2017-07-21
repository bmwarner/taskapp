<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('task/edit/'.$task_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Task</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $task_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Status</label></td>
            <td>
                <select name="status">
                <option value="In Progress" <?php if($task_item['status']=="In Progress") echo 'selected="selected"'; ?> >In Progress</option>
                <option value="Completed" <?php if($task_item['status']=="Completed") echo 'selected="selected"'; ?> >Completed</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit task" /></td>
        </tr>
    </table>
</form>
