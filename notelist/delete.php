<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удалить запись</title>
</head>
<body>
<?php 
    require_once('viewer.php');
?>  

<script>
    const notes = document.querySelectorAll('.record');

    notes.forEach(note => {
        note.addEventListener('click', () => {
            id = note.firstElementChild.textContent;
            
            fetch('delete_record.php?id=' + id, {
        method: 'DELETE'
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        alert(data); 
        location.reload();
    })
    .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
    });
        })
    });
</script>
</body>
</html>
