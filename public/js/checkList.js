import axios from 'axios';

function updateCheck(bookId) {
    console.log('sending request');
    axios.post('/check-list', { id: bookId });
}

export default updateCheck;
