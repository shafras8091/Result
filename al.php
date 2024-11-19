<?php
include 'connection.php';

if (isset($_GET['index_no'])) {
    $index_no = $_GET['index_no'];

    // Prepare the SQL query for A/L results
    $sql = "SELECT * FROM al_result WHERE index_no = ?";
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
                <title>A/L Examination Results</title>
                <link rel="stylesheet" href="style.css">
            </head>

            <body>
                <div class="result-card">
                    <h2>A/L Examination Results</h2>
                    <h4>Department of Examinations</h4>
                    <div class="info-section">
                        <p><strong>Full Name:</strong><span><?php echo htmlspecialchars($row['name']); ?></span></p>
                        <p><strong>Index Number:</strong><span><?php echo htmlspecialchars($row['index_no']); ?></span></p>
                        <p><strong>District Rank:</strong><span><?php echo htmlspecialchars($row['district_rank']); ?></span></p>
                        <p><strong>Island Rank:</strong><span><?php echo htmlspecialchars($row['island_rank']); ?></span></p>
                        <p><strong>Z-Score:</strong><span><?php echo htmlspecialchars($row['z_score']); ?></span></p>
                        <p><strong>Year:</strong><span>2024</span></p>
                    </div>
                    <div class="subjects-section">
                        <h3>Subjects and Grades</h3>
                        <p><strong>Political Science</strong><span><?php echo htmlspecialchars($row['political']); ?></span></p>
                        <p><strong>Geography</strong><span><?php echo htmlspecialchars($row['geography']); ?></span></p>
                        <p><strong>ICT</strong><span><?php echo htmlspecialchars($row['ict']); ?></span></p>
                        <p><strong>General English</strong><span><?php echo htmlspecialchars($row['genaral_english']); ?></span></p>
                        <p><strong>General Knowledge</strong><span><?php echo htmlspecialchars($row['genaral_knowladge']); ?></span></p>
                    </div>
                </div>
            </body>

            </html>
<?php
        } else {
            echo "<p style='text-align: center; color: red;'>No A/L results found for Index Number " . htmlspecialchars($index_no) . "</p>";
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