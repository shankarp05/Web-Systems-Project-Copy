<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Home - InSync</title>
   <link rel="stylesheet" href="resources/personalCalendar.css" />
   <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
   <script defer src="scripts/calendar.js"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


</head>

<body>
   <div class="sections">
      <section>
         <?php
         ini_set('display_errors', 1);
         ini_set('display_startup_errors', 1);
         error_reporting(E_ALL);
         include("includes/nav.inc.php");
         include("includes/redirect.php");
         
         ?>
      </section>

      <main>
         <h1>Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</h1>

         <div id="user-events-section">
            <h2>Your Events</h2>
            <ul id="user-events-list">

            </ul>
           
         </div>

      </main>



      <section id="calendar-section">
         <p>Here is your upcoming schedule:</p>
         <div id="calendar"></div>


         <div class="event-hover-class"></div>

      </section>

   </div>

</body>

</html>