<!DOCTYPE html>
<html>
<head>
    <title>Student Certificates</title>


    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border-color: transparent transparent #fff #fff;
            margin: 50px auto;
            border-width: 4px;
            transition: background-color 0.3s ease; /* Transition effect */
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            border-color: transparent ;
            margin: 50px auto;
            border-width: 4px;
            align-items: center;
            text-align: center;
        }
        
        th {
            background-color: lavender;
            color:black;
        }
        
        .edit-button, .approval-button {
            background-color: black;
            color: rgb(248, 247, 247);
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 1em;
            border-width: 4px;
        }
        
        .edit-button:hover, .approval-button:hover {
            background-color: #45a049;
        }
        
        .logout {
            position: fixed;
            top: 10px;
            right: 1vw;
            padding: 10px 20px;
            background-color: black;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
        }

        .change {
            position: absolute;
            top: 10px;
            left: 1vw;
            padding: 10px 20px;
            background-color: black;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 10px;
            border: none;
            box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
        }

        .tableform1  {
            width: 1480px;
            background: white;
            margin: 50px auto;
            box-shadow: 0 20px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 20px;
            border-width: 4px;
            position: absolute;
        }

        .tableform1 .title1 {
            font-size: 16px;
            font-weight: 900;
            margin-bottom: 25px;
            text-transform: uppercase;
            text-align: center;
        }

        .tableform1 .form {
            width: 100%;
        }

        table tr:nth-child(odd) {
            background-color: #f1f1f1; /* Color for odd rows */
        }

        table tr:nth-child(even) {
            background-color: #ffffff; /* Color for even rows */
        }

        table tr:hover {
            background-color: #cccccc;
        }

        @media (max-width: 1500px) {
            .tableform1 {
                background-color: #f1f1f1; /* Fixed background color */
                transition: none !important; /* Disable transition */
            }   
        } 

    .search-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }

    .search-box {
        position: relative;
        margin-left: 20px;
    }

    .search-box input[type="text"] {
        padding: 10px 40px 10px 10px;
        width: 200px;
    }

    .search-box input[type="text"]::placeholder {
        color: #999;
    }

    .search-box .search-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #999;
        cursor: pointer;
    }
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: rgb(197, 36, 205); /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 10px 10px 10px 36px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 35px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  position: relative;
  top: 0;
  left: 0;
  font-size: 20px;
  cursor: pointer;
  background-color: white;
  color: rgb(197, 36, 205);
  padding: 10px 15px;
  border: none;
  
}

.openbtn:hover {
  background-color: rgb(197, 36, 205);
  color:white
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s; /* If you want a transition effect */
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.profile-icon {
        text-align: center;
        font-size: 24px;
        margin-bottom: 10px;
        margin-left:35px;

        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid black;
        color: black;
        filter: grayscale(100%);
    }
    
    

    </style>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="profile-icon">&#x1F464;</div>
        <a class="buttons1" href="all_office.php">All</a>

        <a class="buttons1" href="pending_staff.php">Pending</a>
        <a class="buttons1" href="rej_staff.php">Rejected</a>
        <a class="buttons1" href="aproved_staff.php">Approved</a>
        <a class="buttons1" href="staff_pass.php">Change Password</a>
        <a class="buttons1" href="logout.php">Logout</a>

    </div>
    <div id="main">

<button class="openbtn" onclick="openNav()">&#9776;</button>

    <div class="tableform1">
        <div class="title1">
            <h1>Students Requests</h1>
            <form id="searchForm">
                <div class="search-container">
                    <div class="search-box">
                        <input type="text" name="search1" placeholder="Search 1">
                        <span class="search-icon">&#128269;</span>
                    </div>
                   
                </div>
            </form>
        </div>
        
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>USN</th>
                <th>GENDER</th>
                <th>Father's Name</th>
                <th>Branch</th>
                <th>Certificate Type</th>
                <th>Studying Year</th>
                <th>Reason</th>
                <th>Edit</th>
                <th>Approval</th>
            </tr>
            <!-- Add table rows dynamically here -->
        </table>
    </div>
    
    <script>
  function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
  }

  function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
  }
  
      
        var searchForm = document.getElementById('searchForm');
        searchForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Access the search input values
            var search1Input = searchForm.elements['search1'];
            var search1Value = search1Input.value;
            console.log(search1Value);
            search1Input.value = '';
        });
    </script>
</body>
</html>
