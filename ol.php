<?php
include 'connection.php';

if (isset($_GET['index_no'])) {
    $index_no = $_GET['index_no'];

    $sql = "SELECT * FROM ol_result WHERE index_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $index_no);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>O/L Examination Results</title>
                <link rel="stylesheet" href="style.css">
            </head>

            <body>
                <div class="result-card">
                    <h2>O/L Examination Results</h2>
                    <h4>Department of Examinations</h4>

                    <div class="info-section">
                        <p><strong>Full Name:</strong><span><?php echo htmlspecialchars($row['name']); ?></span></p>
                        <p><strong>Index Number:</strong><span><?php echo htmlspecialchars($row['index_no']); ?></span></p>
                        <p><strong>NIC Number:</strong><span><?php echo htmlspecialchars($row['nic_no']); ?></span></p>
                        <p><strong>Year:</strong><span>2024</span></p>
                    </div>

                    <div class="subjects-section">
                        <h3>Subjects and Grades</h3>
                        <p><strong>Religion</strong><span><?php echo htmlspecialchars($row['religion']); ?></span></p>
                        <p><strong>Language & Litt</strong><span><?php echo htmlspecialchars($row['language']); ?></span></p>
                        <p><strong>English Language</strong><span><?php echo htmlspecialchars($row['english']); ?></span></p>
                        <p><strong>Mathematics</strong><span><?php echo htmlspecialchars($row['maths']); ?></span></p>
                        <p><strong>History</strong><span><?php echo htmlspecialchars($row['history']); ?></span></p>
                        <p><strong>Science</strong><span><?php echo htmlspecialchars($row['science']); ?></span></p>
                        <p><strong>B1</strong><span><?php echo htmlspecialchars($row['b1']); ?></span></p>
                        <p><strong>B2</strong><span><?php echo htmlspecialchars($row['b2']); ?></span></p>
                        <p><strong>B3</strong><span><?php echo htmlspecialchars($row['b3']); ?></span></p>
                    </div>
                </div>
            </body>

            </html>
            <?php
        } else {
            echo "<p style='text-align: center; color: red;'>No O/L results found for Index Number " . htmlspecialchars($index_no) . "</p>";
        }
    } else {
        echo "<p style='text-align: center; color: red;'>Error executing query.</p>";
    }

    $stmt->close();
} else {
    echo "<p style='text-align: center; color: red;'>Index Number not provided.</p>";
}

$conn->close();
?>
