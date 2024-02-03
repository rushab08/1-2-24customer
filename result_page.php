<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Submission Result</h2>
        <ul class="list-group">
            <li class="list-group-item">Category: <?php echo htmlspecialchars($_GET['category']); ?></li>
            <li class="list-group-item">Sub Category: <?php echo htmlspecialchars($_GET['subcategory']); ?></li>
            <li class="list-group-item">Quantity: <?php echo htmlspecialchars($_GET['quantity']); ?></li>
            <li class="list-group-item">Budget: <?php echo htmlspecialchars($_GET['budget']); ?></li>
            <li class="list-group-item">Estimated Date: <?php echo htmlspecialchars($_GET['date']); ?></li>
        </ul>
    </div>
</body>
</html>
