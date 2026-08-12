```php
<?php
$teamMembers = [
    [
        "name" => "Jyke Rafael A. Deala",
        "role" => "Leader",
        "course" => "BS Information Technology",
        "age" => 20,
        "image" => "https://i.postimg.cc/yYhN8RRy/28a24211-eeb2-4d32-a0c0-5b60f5649762.jpg"
    ],
    [
        "name" => "Christer Pocio",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 21,
        "image" => "https://i.postimg.cc/0NnXfP4X/767585470-1242298784644459-1486630913767364914-n.png"
    ],
    [
        "name" => "Christian Miguel Cervantes",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 22,
        "image" => "https://i.postimg.cc/6Qfgmd8v/762583872-1994637177870382-6215065930480461417-n.jpg"
    ],
    [
        "name" => "James Gonzalo",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 21,
        "image" => "https://i.postimg.cc/NFNM4qxD/764496924-853353531044316-1639608256169851540-n.jpg"
    ],
    [
        "name" => "Christian Pañoso",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 22,
        "image" => "https://i.postimg.cc/Kv7Y8TTp/0e2151a5-d822-4532-8b4b-6c60d5452698.jpg"
    ],
    [
        "name" => "Jayrome Mondido",
        "role" => "Member",
        "course" => "BS Information Technology",
        "age" => 21,
        "image" => "https://i.postimg.cc/Y0tGRxBC/691145477-2024579041492455-669069451531532742-n.jpg"
    ],
		[
				"name" => "Ma. Dianah Sophia Romasanta",
				"role" => "Member",
				"course" => "BS Information Technology",
				"age" => 21,
				"image" => ""
		]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Team Profile | Group 1</title>

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
            min-height: 100vh;
        }

        header {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        header h1 {
            margin-bottom: 10px;
            font-size: 36px;
        }

        header p {
            font-size: 18px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
        }

        .controls {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        #searchBox {
            width: 100%;
            max-width: 500px;
            padding: 14px 18px;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
        }

        #searchBox:focus {
            border-color: #2c3e50;
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
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-7px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
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
            margin-bottom: 12px;
            font-size: 21px;
        }

        .info p {
            margin: 7px 0;
            font-size: 15px;
        }

        .role {
            display: inline-block;
            background: #2c3e50;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .view-btn {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background: #2c3e50;
            color: white;
            cursor: pointer;
            font-size: 14px;
        }

        .view-btn:hover {
            background: #1a252f;
        }

        .no-result {
            display: none;
            text-align: center;
            width: 100%;
            font-size: 18px;
            color: #777;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            background: #2c3e50;
            color: white;
            padding: 18px;
            margin-top: 40px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65);
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-content {
            background: white;
            width: 100%;
            max-width: 450px;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            position: relative;
            animation: showModal 0.3s ease;
        }

        @keyframes showModal {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .close {
            position: absolute;
            right: 18px;
            top: 10px;
            font-size: 28px;
            cursor: pointer;
            color: #555;
        }

        .close:hover {
            color: black;
        }

        #modalImage {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        #modalName {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 28px;
            }

            .container {
                width: 94%;
            }

            .card {
                width: 100%;
                max-width: 330px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>Team Profile</h1>
    <p>Group 1 | SYSINTG - System Integration & Architecture 1</p>
</header>

<div class="container">

    <div class="controls">
        <input
            type="text"
            id="searchBox"
            placeholder="Search team member..."
            onkeyup="searchMembers()"
        >
    </div>

    <div class="team" id="teamContainer">

        <?php foreach ($teamMembers as $member): ?>

            <div class="card" data-name="<?php echo strtolower($member['name']); ?>">

                <img
                    src="<?php echo htmlspecialchars($member['image']); ?>"
                    alt="<?php echo htmlspecialchars($member['name']); ?>"
                >

                <div class="info">

                    <span class="role">
                        <?php echo htmlspecialchars($member['role']); ?>
                    </span>

                    <h2>
                        <?php echo htmlspecialchars($member['name']); ?>
                    </h2>

                    <p>
                        <strong>Course:</strong>
                        <?php echo htmlspecialchars($member['course']); ?>
                    </p>

                    <p>
                        <strong>Age:</strong>
                        <?php echo htmlspecialchars($member['age']); ?>
                    </p>

                    <button
                        class="view-btn"
                        onclick="showProfile(
                            '<?php echo htmlspecialchars($member['name'], ENT_QUOTES); ?>',
                            '<?php echo htmlspecialchars($member['role'], ENT_QUOTES); ?>',
                            '<?php echo htmlspecialchars($member['course'], ENT_QUOTES); ?>',
                            '<?php echo htmlspecialchars($member['age'], ENT_QUOTES); ?>',
                            '<?php echo htmlspecialchars($member['image'], ENT_QUOTES); ?>'
                        )"
                    >
                        View Profile
                    </button>

                </div>
            </div>

        <?php endforeach; ?>

        <p class="no-result" id="noResult">
            No team member found.
        </p>

    </div>
</div>

<div class="modal" id="profileModal">

    <div class="modal-content">

        <span class="close" onclick="closeProfile()">&times;</span>

        <img id="modalImage" src="" alt="Profile Picture">

        <h2 id="modalName"></h2>

        <p>
            <strong>Role:</strong>
            <span id="modalRole"></span>
        </p>

        <p>
            <strong>Course:</strong>
            <span id="modalCourse"></span>
        </p>

        <p>
            <strong>Age:</strong>
            <span id="modalAge"></span>
        </p>

    </div>
</div>

<footer>
    Group 1 | SYSINTG - System Integration & Architecture 1
</footer>

<script>

    function searchMembers() {

        const searchInput = document
            .getElementById("searchBox")
            .value
            .toLowerCase();

        const cards = document.querySelectorAll(".card");
        const noResult = document.getElementById("noResult");

        let found = false;

        cards.forEach(function(card) {

            const name = card.getAttribute("data-name");

            if (name.includes(searchInput)) {
                card.style.display = "block";
                found = true;
            } else {
                card.style.display = "none";
            }

        });

        if (found) {
            noResult.style.display = "none";
        } else {
            noResult.style.display = "block";
        }
    }


    function showProfile(name, role, course, age, image) {

        document.getElementById("modalName").textContent = name;
        document.getElementById("modalRole").textContent = role;
        document.getElementById("modalCourse").textContent = course;
        document.getElementById("modalAge").textContent = age;
        document.getElementById("modalImage").src = image;

        document.getElementById("profileModal").style.display = "flex";
    }


    function closeProfile() {
        document.getElementById("profileModal").style.display = "none";
    }


    window.onclick = function(event) {

        const modal = document.getElementById("profileModal");

        if (event.target === modal) {
            closeProfile();
        }

    };

</script>

</body>
</html>
```
