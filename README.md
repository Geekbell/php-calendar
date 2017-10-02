# php-calendar
Calendar written in PHP. Give the class a date and it will generate a full calendar.

I use this for my own development purposes and am publishing the base code that I use to make changes from there. I will add features as I deem necessary.

If you are using this code and need help, feel free to contact me.

Example:

    <?php

    //Include the calendar class in your code
    include 'functions/php-calendar/calendar.php';

    //Create a new instance of the calendar object
    $calendar = new calendar;

    //Create a date object with the current date or any date
    $date = mktime();

    //Call the showCalendar function to display the date. 
    echo $calendar->showCalendar($date);

    ?>
