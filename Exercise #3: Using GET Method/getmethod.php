<?php

$member = isset($_GET['member']) ? $_GET['member'] : "all";

$team = [
    "Jyke" => [
        "name" => "Jyke Rafael A. Deala",
        "role" => "Leader",
        "course" => "BS Information Technology",
        "age" => 20,
        "image" => "Jyke.jpg"
    ],
    "Pocio" => [
        "name" => "Christer Pocio",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 21,
        "image" => "Pocio.png"
    ],
    "Christian" => [
        "name" => "Christian Miguel Cervantes",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 22,
        "image" => "Christian.jpg"
    ],
    "James" => [
        "name" => "James Gonzalo",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 21,
        "image" => "James.jpg"
    ],
    "Pans" => [
        "name" => "Christian Pañoso",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 22,
        "image" => "Pans.jpg"
    ],
    "Jayrome" => [
        "name" => "Jayrome Mondido",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 21,
        "image" => "Jayrome.jpg"
    ],
	"Dianah" => [
		"name" => "Dianah Romasanta",
		"role" => "Member",
		"course" => "BS Information Technology",
		"age" => 20,
		"image" => "Dianah.jpg"
	]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #333;
        }

        header {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 30px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .get-box {
            text-align: center;
            padding: 20px;
            background: white;
        }

        .get-box a {
            display: inline-block;
            margin: 5px;
            padding: 10px 15px;
            background: #2c3e50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .get-box a:hover {
            background: #34495e;
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }

        .card {
            width: 280px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .info {
            padding: 20px;
        }

        .info h2 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .info p {
            margin: 6px 0;
        }

        footer {
            text-align: center;
            background: #2c3e50;
            color: white;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header>
    <h1>Team Profile</h1>
    <p>Group 1</p>
</header>

<div class="get-box">
    <h3>View Team Member</h3>

    <a href="index.php?member=all">All Members</a>
    <a href="index.php?member=Jyke">Jyke</a>
    <a href="index.php?member=Pocio">Pocio</a>
    <a href="index.php?member=Christian">Christian</a>
    <a href="index.php?member=James">James</a>
    <a href="index.php?member=Pans">Pans</a>
    <a href="index.php?member=Jayrome">Jayrome</a>
	<a href="index.php?member=Dianah">Dianah</a>
</div>

<div class="container">
    <div class="team">

        <?php

        if ($member == "all") {

            foreach ($team as $person) {
        ?>

                <div class="card">
                    <img src="<?php echo $person['image']; ?>" alt="<?php echo $person['name']; ?>">

                    <div class="info">
                        <h2><?php echo $person['name']; ?></h2>
                        <p><strong>Role:</strong> <?php echo $person['role']; ?></p>
                        <p><strong>Course:</strong> <?php echo $person['course']; ?></p>
                        <p><strong>Age:</strong> <?php echo $person['age']; ?></p>
                    </div>
                </div>

        <?php
            }

        } elseif (isset($team[$member])) {

            $person = $team[$member];
        ?>

            <div class="card">
                <img src="<?php echo $person['image']; ?>" alt="<?php echo $person['name']; ?>">

                <div class="info">
                    <h2><?php echo $person['name']; ?></h2>
                    <p><strong>Role:</strong> <?php echo $person['role']; ?></p>
                    <p><strong>Course:</strong> <?php echo $person['course']; ?></p>
                    <p><strong>Age:</strong> <?php echo $person['age']; ?></p>
                </div>
            </div>

        <?php
        } else {
            echo "<h2>Member not found.</h2>";
        }

        ?>

    </div>
</div>

<footer>
    Group 1 | SYSINTG - System Integration & Architecture 1
</footer>

</body>
</html>
