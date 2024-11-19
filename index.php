<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Results</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleFormSubmit() {
            const examination = document.getElementById('examination').value;
            const indexNo = document.getElementById('index-number').value.trim();
            const card = document.getElementById('result-card');
            const cardBody = document.getElementById('result-card-body');

            if (examination && indexNo) {
                const url = examination === 'ol' ? `ol.php?index_no=${encodeURIComponent(indexNo)}` : `al.php?index_no=${encodeURIComponent(indexNo)}`;

                fetch(url)
                    .then(response => {
                        if (!response.ok) throw new Error('Network response was not ok');
                        return response.text();
                    })
                    .then(data => {
                        cardBody.innerHTML = data;
                        card.style.display = 'block';
                    })
                    .catch(error => {
                        alert('Error fetching results. Please try again later.');
                    });
            } else {
                alert("Please enter an Index Number and select an examination to view results.");
            }
        }

        function moveUp() {
            const object = document.getElementById("frm_hold");
            object.style.transform = "translateY(-125px)"; // Moves object 100px upwards
        }
    </script>
</head>

<body>
    <!-- Video Background -->
    <video autoplay muted loop id="background-video">
        <source src="./background.mp4" type="video/mp4">
    </video>

    <div class="form-body">
        <div class="form-holder" id="frm_hold">
            <h3>View Examination Results</h3>
            <p>Department of Examinations</p>
            <form onsubmit="handleFormSubmit(); return false;">
                <div class="mb-3">
                    <input class="form-control" id="index-number" type="text" placeholder="Index No" required>
                </div>
                <div class="mb-3">
                    <select id="examination" class="form-select" required>
                        <option selected disabled value="">Select Examination</option>
                        <option value="ol">GCE O/L Examination</option>
                        <option value="al">GCE A/L Examination</option>
                    </select>
                </div>
                <div class="form-button">               

                    <div class="form-button">
                        <button type="submit" class="btn btn-primary" onclick="moveUp()">Show Result</button>
                    </div>

                </div>
            </form>
            <div class="card" id="result-card">
                <div class="card-body" id="result-card-body">
                    <!-- Dynamic content will be inserted here -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>