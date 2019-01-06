
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/cssforapp.css">
        <link rel="stylesheet" href="">
        <script type='text/javascript' src="../js/javascriptforapp.js"></script>
    </head>
    <body style="background-color: #e0e0d1;">

        <div style="boarder: 2px solid black;">
            <form action="../Controller/ControllerToSaveData.php" id="myForm"class="w3-container w3-card-4 w3-light-grey" >
                <table>
                    <tr><td>
                            <input class="w3-input w3-border"  type="text"type="text" name="working_on" id="a" placeholder="type what are you doing">

                        </td><td>
                            <select  name="category" onchange="getval(this);">
                                <option value="select">select category</option>


                                <option value="Personal" >Personal</option>
                                <option value="Work">Work</option>
                                <option value="Meeting">Meeting</option>
                                <option value="Refreshment">Refreshment</option>


                            </select>
                        </td>
                    </tr>
                </table>
                <input type="hidden" id="time" name="time_elapsed" value="00">


            </form>
            </br>

            <div class="container" id="ta1" style="visibility: hidden">
                <div>  
                    <table style="margin-left:-250px"><tr>
                            <th>  
                                <button id= "startPause" onclick="startPause()"><b id="start">Start</b></button></th>
                            <th><h1><p id="output">0:00:00:00</p></h1></th>


                            <th><button onclick="get_total_time()" id="reset"><b id="reset">Stop</b</button></th>
                        </tr>
                    </table>
                </div>
            </div>
            </br>
            <table style="margin-top: 100px;">
                <tr>
                    <th>Working on</th>
                    <th>Category</th>
                    <th>Duration</th>
                    <th>Date</th>
                </tr>
                <?php foreach ($data as $post): ?>  
                    <tr>
                        <td><?php echo $post[0]; ?></td>
                        <td><?php echo $post[1]; ?></td>
                        <td><?php echo $post[2]; ?></td>
                        <td><?php echo $post[3]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </body>
</html>

