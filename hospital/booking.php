<?php
    include 'header.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="nav.css">
    </head>
    <style>
        th {
            text-align: left;
        }
    </style>
    <body>
        <form method="post" name="booking" action="book.php">
            <table cellpadding="2px" cellspacing="5px" align="center">
                <tr>
                    <th>Department</th>
                    <td>
                        <select name="department" required>
                            <option>---SELECT---</option>
                            <option value="cardiology">Cardiology</option>
                            <option value="neurology">Neurology</option>
                            <option value="orthopedics">Orthopedics</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input type="date" name="date">
                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>
                        <input type="time" name="time">
                    </td>
                </tr>
                <tr>
                    <th>Token No:</th>
                    <td>
                        
                        <i>Token number for online appointment starts from 25 always</i>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
    include 'footer.php';
?>