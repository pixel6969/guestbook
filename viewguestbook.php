<!DOCTYPE html>
<html>
  <head>
    <title>Guestbook Entries</title>
  </head>
  <body>
    <h1>Guestbook Entries</h1>
    <?php
      // Open the guestbook file for reading
      $file = fopen('guestbook.txt', 'r');

      // Loop through the entries and display them
      while (!feof($file)) {
        $entry = fgets($file);
        if ($entry) {
          $parts = explode('|', $entry);
          echo "<p><strong>Name:</strong> $parts[0]</p>";
          echo "<p><strong>Email:</strong> $parts[1]</p>";
          echo "<p><strong>Message:</strong> $parts[2]</p>";
          echo "<hr>";
        }
      }

      // Close the guestbook file
      fclose($file);
    ?>
  </body>
</html>
