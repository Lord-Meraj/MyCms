<?php
use LDAP\Result;

require_once 'dbconfig.php';
?>



<html lang="en">

<head>
    <title style="color: brown">Sidebar 6</title>
    <meta name="author" content="Zaur">
    <meta descryption content="Presentation of website">
    <meta name="keywords" content="technology, cyber security, software">
    <meta http-equiv="refresh" content="100">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="src/lib/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="src/lib/node_modules/bootstrap/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <div class="sidebar">
        <header class="sidebar_header">
            <p>CMS</p>
            <i class="fa fa-instagram"></i>
        </header>
        <nav class="sidebar_menu">
            <?php

            $sql = "SELECT * FROM Menu";
            $query = $conn->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);

            $id = 1;
            if ($query->rowCount() > 0) {
                foreach ($results as $result) {
            ?>
            <button>
                <span>
                    <i class="fa <?php echo htmlentities($result->IconClass) ?>"></i>
                    <span>
                        <?php echo htmlentities($result->Title) ?>
                    </span>
                </span>
            </button>
            <?php
                    $id++;
                }
            }
            ?>
            <!-- <button>
                <span>
                    <i class="fa fa-search"></i>
                    <span>Search</span>
                </span>
            </button>
            <button>
                <span>
                    <i class="fa fa-compass"></i>
                    <span>Explore</span>
                </span>
            </button>
            <button>
                <span>
                    <i class="fa fa-location-arrow">
                        <span>13</span>
                    </i>
                    <span>Messages</span>
                </span>
            </button>
            <button>
                <span>
                    <i class="fa fa-heart">
                        <em></em>
                    </i>
                    <span>Notifications</span>
                </span>
            </button>
            <button>
                <span>
                    <i class="fa fa-plus"></i>
                    <span>Create</span>
                </span>
            </button>
            <button>
                <span>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYzAqKERFeE4h-K3vnOWQSWJmxRTKTApVjEg&usqp=CAU">
                    <span>Profile</span>
                </span>
            </button> -->
            <button>
                <span>
                    <i class="fa fa-bars"></i>
                    <span>More</span>
                </span>
            </button>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>

</html>