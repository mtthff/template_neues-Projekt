"use strict";

let editIcon = document.querySelectorAll('.editEintrag');
editIcon.forEach(function (element) {
    element.addEventListener('click', async function () {
        let idEintrag = element.dataset.id;

        let response = await fetch('ajax/get_temp.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify({ idEintrag }),
        });

        if (response.ok) {
            let result = await response.json()
            // console.log(result);

            let myModal = new bootstrap.Modal(document.getElementById('editModal'));
            
            document.querySelector('#id').value = result.id;
            
            myModal.show();
        }

    });
}); 
