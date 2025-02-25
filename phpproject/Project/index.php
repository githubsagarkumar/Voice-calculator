<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced PHP Calculator with Voice Commands</title>
    <link rel="stylesheet" href="theme.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="calculator">
        <h2>Advanced PHP Calculator with Voice Commands</h2>
        
        <!-- Basic Calculator Form -->
        <form action="calculator.php" method="POST">
            <input type="text" name="expression" id="expression" placeholder="Enter expression or use voice command" required>
            <button type="button" onclick="startVoiceCommand()">🎤</button>
            <button type="submit">Calculate</button>
        </form>
        
        <!-- Result Display -->
        <?php
        if (isset($_GET['result'])) {
            echo "<div class='result'>Result: " . htmlspecialchars($_GET['result']) . "</div>";
        }
        ?>

        <!-- Graph Plotting Form -->
        <form id="graph-form">
            <h3>Graph Plotting</h3>
            <input type="text" id="function" placeholder="Enter function (e.g., sin(x), x^2)" required>
            <input type="number" id="rangeStart" placeholder="Range start (e.g., -10)" required>
            <input type="number" id="rangeEnd" placeholder="Range end (e.g., 10)" required>
            <button type="button" onclick="plotGraph()">Plot Graph</button>
        </form>
        
        <!-- Canvas for Graph Plot -->
        <canvas id="graphCanvas" width="400" height="400"></canvas>

        <!-- Display Calculation History -->
        <!-- <div class="history">
            <h3>History</h3>
            <?php include 'history.php'; ?>
        </div> -->
        <form action="history.php" method="GET" style="text-align: center; margin-top: 20px;">
            <button type="submit">History</button>
        </form>

        <!-- Button to Navigate to Converter -->
        <form action="converter.php" method="GET" style="text-align: center; margin-top: 20px;">
            <button type="submit">Go to Currency Converter</button>
        </form>
    </div>
</body>
</html>
