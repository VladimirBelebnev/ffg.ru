try {
    document.querySelector('#basic-user-avatar-form input[type="submit"]').value = 'Обновить фотографию';

    let input = document.querySelector('#basic-user-avatar-form input[type="file"]');
    let newInput = input.cloneNode(true);
    input.parentNode.replaceChild(newInput, input);

    document.querySelector('#basic-user-avatar-form').reset();

    document.querySelector('#basic-user-avatar-form .description').style.display = 'none';
} catch (error) {
    console.log(error);
}

try {
    document.querySelector('#basic-user-avatar-form label').innerHTML = 'Удалить фотографию';
} catch (error) {
    console.log(error);
}