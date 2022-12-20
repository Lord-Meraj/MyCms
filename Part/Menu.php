<div class="sidebar">
        <header class="sidebar_header">
            <p>Meraj CMS</p>
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
            <a>
                <span>
                    <i class="fa <?php echo htmlentities($result->IconClass) ?>"></i>
                    <span>
                        <?php  echo htmlentities($result->Title) ?>
                    </span>
                </span>
                </a>
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
            </button> -->
            <a>
                <span>
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYzAqKERFeE4h-K3vnOWQSWJmxRTKTApVjEg&usqp=CAU">
                    <span>Profile</span>
                </span>
        </a>
            <a>
                <span>
                    <i class="fa fa-bars"></i>
                    <span>More</span>
                </span>
        </a>
        </nav>
    </div>