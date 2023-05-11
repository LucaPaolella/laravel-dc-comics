import axios from 'axios';

confermaCancellazione()

function confermaCancellazione() {
    if (confirm("Sei sicuro di voler eliminare l'elemento?")) {
        eseguiEliminazione();
    } else {
        return;
    }
}

eseguiEliminazione()

function eseguiEliminazione() {
    axios.delete(URL_DEL_SERVER)
        .then(function (response) {
            console.log('Elemento eliminato con successo!');
        })
        .catch(function (error) {
            console.error('Si è verificato un errore durante l\'eliminazione:', error);
        });
}