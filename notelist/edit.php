<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать запись</title>
</head>
<body>
<?php
    require('viewer.php');
?>; 

<script>
    const notes = document.querySelectorAll('.record');
    const doc = document.querySelector('body');

notes.forEach(note => {
    note.addEventListener('click', () => {
        id = note.firstElementChild.textContent;
        fetch("form_edit.php?id=" + id)
                .then(response => response.text())
                .then(data => {
                    doc.innerHTML = data;
                })
                .catch(error => console.error('Ошибка:', error));
    })
});

</script>
</body>
</html>
