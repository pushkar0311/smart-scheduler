<?php 
include('config_mysqli.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Darko Bunic"/>
    <meta name="description" content="Drag and drop table content with JavaScript"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>Timetable</title>
    <link rel="stylesheet" href="style2.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="redips-drag-min.js"></script>
    <script type="text/javascript" src="script2.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #000000;
        }

        .main_container {
            background-image: url('https://wallpapercave.com/wp/wp3269174.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
           
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        #redips-drag {
            display: flex;
            justify-content: space-between;
            width: 80%;
        }

        #left,
        #right {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        #message {
            margin-top: 20px;
            text-align: center;
        }

        .button_container {
            margin-top: 20px;
            text-align: center;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="main_container">
        <div id="redips-drag">
            <div id="left">
                <table id="table1">
                    <colgroup>
                        <col width="190"/>
                    </colgroup>
                    <tbody>
                        <?php subjects() ?>
                        <tr><td class="redips-trash" title="Trash">Trash</td></tr>
                    </tbody>
                </table>
            </div><!-- left container -->
            
            <!-- right container -->
            <div id="right">
                <table id="table2">
                    <colgroup>
                        <col width="50"/>
                        <col width="100"/>
                        <col width="100"/>
                        <col width="100"/>
                        <col width="100"/>
                        <col width="100"/>
                    </colgroup>
                    <tbody>
                        <tr>
                            <td class="redips-mark blank">
                                <input id="week" type="checkbox" title="Apply school subjects to the week" checked/>
                                <input id="report" type="checkbox" title="Show subject report"/>
                            </td>
                            <td class="redips-mark dark">Monday</td>
                            <td class="redips-mark dark">Tuesday</td>
                            <td class="redips-mark dark">Wednesday</td>
                            <td class="redips-mark dark">Thursday</td>
                            <td class="redips-mark dark">Friday</td>
                        </tr>

                        <?php timetable('08:00', 1) ?>
                        <?php timetable('09:00', 2) ?>
                        <?php timetable('10:00', 3) ?>
                        <?php timetable('11:00', 4) ?>
                        <?php timetable('12:00', 5) ?>
                        <tr>
                            <td class="redips-mark dark">13:00</td>
                            <td class="redips-mark lunch" colspan="5">Lunch</td>
                        </tr>
                        <?php timetable('14:00', 7) ?>
                        <?php timetable('15:00', 8) ?>
                        <?php timetable('16:00', 9) ?>
                    </tbody>
                </table>
            </div><!-- right container -->
        </div><!-- drag container -->
        <br/>
        <div id="message">Drag school subjects to the timetable (clone subjects with SHIFT key)</div>
        <div class="button_container">
            <input type="button" value="Save" class="button" onclick="redips.save()" title="Save timetable"/>
        </div>
    </div><!-- main container -->
</body>
</html>
