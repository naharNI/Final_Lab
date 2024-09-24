function complaintForm() {
    var hasError = false;

    if (document.getElementById('category').value == '') {
        alert('Please Select a Category');
        hasError = true;
    }

    if (document.getElementById('complaint_details').value == '') {
        alert('Please Write Some Details');
        hasError = true;
    }

    if (!hasError) {
        editComplaint(document.getElementById('comno').value);
    }

    return !hasError;
}


