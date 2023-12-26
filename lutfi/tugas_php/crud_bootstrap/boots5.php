<?php
// Sample menu items
$menuItems = [
    ['url' => 'index.php', 'label' => 'Buku'],
    ['url' => 'penerbit.php', 'label' => 'Penerbit'],
    ['url' => 'pengarang.php', 'label' => 'Pengarang'],
    ['url' => 'katalog.php', 'label' => 'Katalog'],
];

// Function to generate sidebar items
function generateSidebarItems($menuItems)
{
    foreach ($menuItems as $menuItem) {
        echo '<a href="' .
            $menuItem['url'] .
            '" class="list-group-item list-group-item-action bg-dark text-white">' .
            $menuItem['label'] .
            '</a>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-d3lzmEOy8BCK5LGM3JLu04SxfU4F8+BYrqmTz7k17PpbxF/jd8i8zAK2MPmkFV9D" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-hBeKCMF2BQ8Tqfok6FhXQ5L/ScQ4M7aLWrEz7PEl0aAXw/SFvvdKIhDg3IdcznMI" crossorigin="anonymous"></script>
    <style>
        /* Custom styles for the sidebar */
        body {
            padding-top: 56px; /* Adjust the body padding to account for the fixed navbar height */
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding-top: 56px; /* Adjust padding to align content with the navbar */
            z-index: 1;
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* White text color */
        }

        .sidebar a {
            padding: 8px 16px;
            text-decoration: none;
            font-size: 16px;
            color: #ffffff; /* White text color for links */
            display: block;
        }

        .sidebar a:hover {
            background-color: #52575C; /* Darker background color on hover */
        }

        .main-content {
            margin-left: 250px; /* Adjust margin to match sidebar width */
            padding: 16px;
        }
    </style>
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-dark text-white" id="sidebar-wrapper">
            <div class="sidebar-heading">Your Logo/Brand</div>
            <div class="list-group list-group-flush">
                <?php generateSidebarItems($menuItems); ?>
            </div>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- Add more navigation items as needed -->
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <!-- Your content goes here -->
                <a href="add.php" class="btn btn-primary mb-3">Add New Buku</a>
                <table class="table table-bordered">
                    <!-- Your table content goes here -->
                </table>
            </div>

        </div>

    </div>

</body>

</html>
