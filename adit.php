<?php
function getFeedbackData() {
    return [
        ['name' => 'John Doe', 'email' => 'john@example.com', 'message' => 'Great website!'],
        ['name' => 'Jane Doe', 'email' => 'jane@example.com', 'message' => 'I love the design!']
    ];
}

$feedbacks = getFeedbackData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="adit.css">
</head>
<body>
    <header>
        <div class="logo">Adit</div>
        <nav>
            <a href="adit.html">Home</a>
        </nav>
    </header>
    <section id="feedbacks">
        <h1>Feedbacks</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php foreach ($feedbacks as $feedback) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($feedback['name']); ?></td>
                    <td><?php echo htmlspecialchars($feedback['email']); ?></td>
                    <td><?php echo htmlspecialchars($feedback['message']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</body>
</html>
