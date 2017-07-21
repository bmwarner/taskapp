<!--<h2><?php //echo $title; ?></h2>-->
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Task</strong></td>
        <td><strong>Status</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($task as $task_item): ?>
        <tr>
            <td><?php echo $task_item['title']; ?></td>
            <td><?php echo $task_item['status']; ?></td>
            <td>
                <a href="<?php echo site_url('task/'.$task_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('task/edit/'.$task_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('task/delete/'.$task_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
