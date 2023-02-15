const deleteFormEl = document.querySelectorAll('form.d-inline-block');

deleteFormEl.forEach((formEl) => {
    formEl.addEventListener('submit', function(event){
        // Stoppo momentaneamente il submit ul form
        event.preventDefault();
        //Attraverso un attributo custom prendo il nome dell'elemento
        const elName = formEl.getAttribute('data-element-name');
        //setto un messaggio per il pop up
        const confirm = window.confirm(`Are you sure you want to delete ${elName}`);

        //Se confermo il pop Up verrà effettuato il submit
        if (confirm) {
            this.submit();
        }
    })
});