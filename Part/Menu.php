<div class="sidebar">
    <header class="sidebar_header">
        <p class="text-end">Meraj CMS</p>
        <i class="fa fa-instagram"></i>
    </header>
    <nav class="sidebar_menu">
        <?php

        $sql = "SELECT * FROM Menu ORDER BY SortOrder";
        $query = $conn->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $id = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
        ?>
                <a href="<?php echo htmlentities($result->Link) ?>">
                    <span>
                        <i class="fa <?php echo htmlentities($result->IconClass) ?>"></i>
                        <span>
                            <?php echo htmlentities($result->Title) ?>
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
                <img src="/MYCMS/src/images/User.jpg">
                <?php
                if (isset($_COOKIE["Userlogin"])) {
                    echo $_COOKIE["Userlogin"];
                }else{
                   echo "<span>Profile</span>";
                }
                ?>
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