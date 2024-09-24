function editComplaint(complaintNumber) {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);

            document.getElementById("comno").value = data.comno;
            document.getElementById("category").value = data.category;
            document.getElementById("complaint_details").value = data.complaintdetials;
        }
    };

    var url = "get_complaint_details.php?comno=" + complaintNumber;

    xhr.open("GET", url, true);
    xhr.send();
}
