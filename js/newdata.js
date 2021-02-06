//Code from Mindy McAdams from the University of Florida

// Select form
const osInputForm = document.querySelector('#osInputForm');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const osInputFormDiv = document.querySelector('#osformdiv');
// show the DIV if it is hidden
osInputFormDiv.style.display = 'block';


// event handler
osInputForm.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(osInputForm);
    // FETCH
    fetch('enter_action.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        osInputForm.style.display = 'none';
        response_content.innerHTML =
        `<p class='announce'>${data}</p><a class='btn btn-success btn-lg text-center' href='new_entry.php' role='button'>Enter More Data</a>`
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end ON SUBMIT
