<html>

<head>
    <title>CPSC 304 PHP/Oracle Demonstration</title>
</head>

<body>

    <h2>Insert New program in to Program Table</h2>

    <form method="POST" action="project.php">
        <input type="hidden" id="insertProgramQueryRequest" name="insertProgramQueryRequest">
        Title: <input type="text" name="insTitle"> <br /><br />
        Day: <input type="text" name="insDay"> <br /><br />

        <p><input type="submit" value="Insert" name="insertProgramSubmit"></p>

    </form>

    <hr />

    <h2>Insert new episode to Episode Table</h2>

    <form method="POST" action="project.php">
        <input type="hidden" id="insertEpisodeQueryRequest" name="insertEpisodeQueryRequest">
        Episode Title: <input type="text" name="insEpTitle"> <br /><br />
        Program Title: <input type="text" name="insProgTitle"> <br /><br />
        Released Date: <input type="text" name="insRD"> <br /><br />
        Streaming Time: <input type="text" name="insST"> <br /><br />

        <p><input type="submit" value="Insert" name="insertEpisodeSubmit"></p>

    </form>

    <hr />

    <h2>Delete Program from Program Table</h2>

    <form method="POST" action="project.php">
        <input type="hidden" id="deleteProgramQueryRequest" name="deleteProgramQueryRequest">
        Title: <input type="text" name="delTitle"> <br /><br />

        <p><input type="submit" value="Delete" name="deleteProgramSubmit"></p>
    </form>

    <hr />

    <h2>Delete Episode</h2>
    <form method="POST" action="project.php">
        <input type="hidden" id="deleteEpisodeQueryRequest" name="deleteEpisodeQueryRequest">
        Episode Title: <input type="text" name="delEpTitle"> <br /><br />
        Program Title: <input type="text" name="delProgTitle"> <br /><br />

        <p><input type="submit" value="Delete" name="deleteEpisodeSubmit"></p>
    </form>

    <hr />

    <h2>Update Episodes and Day it played</h2>
    <form method="POST" action="project.php">
        <input type="hidden" id="updateProgramQueryRequest" name="updateProgramQueryRequest">
        Episodes = <input type="text" name="newEp"> <br /><br />
        Day Played = <input type="text" name="newDay"> <br /><br />
        Program Title = <input type="text" name="programTitle"> <br /><br />


        <input type="submit" value="Update" name="updateSubmit"></p>
    </form>

    <hr />

    <h2>Display Number Of Program in Each dayPlayed in Program2</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="dayPlayCountRequest" name="dayPlayCountRequest">
        <input type="submit" name="dayPlayCount"></p>
    </form>

    <hr />

    <h2>Display dayPlayed in which programs' average episodes is more than 5 in Program2</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="dayPlayCountWithAvgEpiMoreFiveRequest" name="dayPlayCountWithAvgEpiMoreFiveRequest">
        <input type="submit" name="dayPlayCountWithAvgEpiMoreFive"></p>
    </form>

    <hr />

    <h2>Display program title in dayPlayed which have at least one program with more than 6 episodes in Program2</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="programInDayPlayedWithMaxEpMoreSixRequest" name="programInDayPlayedWithMaxEpMoreSixRequest">
        <input type="submit" name="programInDayPlayedWithMaxEpMoreSix"></p>
    </form>

    <hr />

    <h2>Display Episode Title in all the programs in Contain_Episode</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="programEpiTitleInAllProgramRequest" name="programEpiTitleInAllProgramRequest">
        <input type="submit" name="programEpiTitleInAllProgram"></p>
    </form>

    <hr />

    <h2>Display Program and Episode Title with longest streaming time in Contain_Episode</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="programProAndEpiTitleLongestStreamingTimeRequest" name="programProAndEpiTitleLongestStreamingTimeRequest">
        <input type="submit" name="programProAndEpiTitleLongestStreamingTime"></p>
    </form>

    <hr />

    <!-- 영우 html 파트 -->

    <!-- 1. Episode를 가장 많이 가진 프로그램 타이틀 출력 -->
    <h2>Display Program title which program have Maximum Episodes</h2>
    <form method="get" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" name="printProgramTitlewithMaxEpisode">
        <input type="submit" name="simpleSubmitBtn"></p>
    </form>
    <hr />

    <!-- 2. 5개 초과 episode 수를 가진 프로그램의 title과 episode 출력 -->
    <h2>Display Program Title and Episodes # with more than 5 episodes</h2>
    <form method="get" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" name="printProgramTitleAndEpisodeNoExceed5">
        <!--name으로 통신함-->
        <input type="submit" name="simpleSubmitBtn"></p>
    </form>

    <hr />

    <!-- 3. 프로그램 타이틀과 에피소드 타이틀에 맞는 레코드의 출시일과 재생 시간 갱신 -->
    <h2>Update Release date and Streaming Time</h2>
    <form method="post" action="project.php">
        <input type="hidden" name="updateReleaseDateAndStreamingTime">
        <!--통신용-->

        Program Title: <input type="text" name="selectProgramTitle1"> <br /><br />
        Episode Title: <input type="text" name="selectEpisodeTitle1"> <br /><br />
        Released Date: <input type="text" name="newReleaseDate"> <br /><br />
        Streaming Time: <input type="text" name="newStreamingTime"> <br /><br />

        <p><input type="submit" value="Update it!!" name="updateBtn"></p>
    </form>

    <hr />

    <!-- 4. 프로그램 타이틀과 에피소드 타이틀을 입력하면, 상영일과 재생 시간 출력 -->
    <h2>Display Airdate and Running Time</h2>
    <form method="get" action="project.php">
        Program Title: <input type="text" name="selectProgramTitle2"> <br /><br />
        Episode Title: <input type="text" name="selectEpisodeTitle2"> <br /><br />

        <!--refresh page when submitted-->
        <input type="hidden" name="printDayPlayedAndStreamingTime">
        <!-- name으로 통신함 -->
        <input type="submit" value="Print" name="simplePrintBtn"></p>
    </form>

    <hr />

    <!-- 5. 프로그램 타이틀을 입력하면, 예산 출력 -->
    <h2>Display Estimated Budget</h2>
    <form method="get" action="project.php">
        Program Title: <input type="text" name="selectProgramTitle3"> <br /><br />

        <!--refresh page when submitted-->
        <input type="hidden" name="printEstimatedBudget">
        <!-- name으로 통신함 -->
        <input type="submit" value="Print" name="simplePrintBtn"></p>
    </form>

    <hr />
    <h2>Display every tuple in Program1</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="display1Request" name="display1Request">
        <input type="submit" name="display1Table"></p>
    </form>

    <hr />

    <h2>Display every tuple in Program2</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="display2Request" name="display2Request">
        <input type="submit" name="display2Table"></p>
    </form>

    <hr />

    <h2>Display every tuple in Contain_Episode</h2>
    <form method="GET" action="project.php">
        <!--refresh page when submitted-->
        <input type="hidden" id="display3Request" name="display3Request">
        <input type="submit" name="display3Table"></p>
    </form>

    <hr />
    <!-- 영우 html 파트 끝 -->


    <!-- PHP 코드 시작 -->
    <?php
    //this tells the system that it's no longer just parsing html; it's now parsing PHP

    $success = True; //keep track of errors so it redirects the page only if there are no errors
    $db_conn = NULL; // edit the login credentials in connectToDB()
    $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

    function debugAlertMessage($message)
    {
        global $show_debug_alert_messages;

        if ($show_debug_alert_messages) {
            echo "<script type='text/javascript'>alert('" . $message . "');</script>";
        }
    }

    function executePlainSQL($cmdstr)
    { //takes a plain (no bound variables) SQL command and executes it
        //echo "<br>running ".$cmdstr."<br>";
        global $db_conn, $success;

        $statement = OCIParse($db_conn, $cmdstr);
        //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

        if (!$statement) {
            echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
            $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
            echo htmlentities($e['message']);
            $success = False;
        }

        $r = OCIExecute($statement, OCI_DEFAULT);
        if (!$r) {
            echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
            $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
            echo htmlentities($e['message']);
            $success = False;
        }

        return $statement;
    }

    function executeBoundSQL($cmdstr, $list)
    {
        /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

        global $db_conn, $success;
        $statement = OCIParse($db_conn, $cmdstr);

        if (!$statement) {
            echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
            $e = OCI_Error($db_conn);
            echo htmlentities($e['message']);
            $success = False;
        }

        foreach ($list as $tuple) {
            foreach ($tuple as $bind => $val) {
                //echo $val;
                //echo "<br>".$bind."<br>";
                OCIBindByName($statement, $bind, $val);
                unset($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                echo htmlentities($e['message']);
                echo "<br>";
                $success = False;
            }
        }
    }


    function connectToDB()
    {
        global $db_conn;

        // Your username is ora_(CWL_ID) and the password is a(student number). For example,
        // ora_platypus is the username and a12345678 is the password.
        $db_conn = OCILogon("ora_jlee52", "a43029743", "dbhost.students.cs.ubc.ca:1522/stu");

        if ($db_conn) {
            debugAlertMessage("Database is Connected");
            return true;
        } else {
            debugAlertMessage("Cannot connect to Database");
            $e = OCI_Error(); // For OCILogon errors pass no handle
            echo htmlentities($e['message']);
            return false;
        }
    }

    function disconnectFromDB()
    {
        global $db_conn;

        debugAlertMessage("Disconnect from Database");
        OCILogoff($db_conn);
    }

    function handleUpdateProgramRequest()
    {
        global $db_conn;
        $new_ep = $_POST['newEp'];
        $new_day = $_POST['newDay'];
        $title = $_POST['programTitle'];

        executePlainSQL("UPDATE Program2 SET Episodes='" . $new_ep . "', dayPlayed = '" . $new_day . "' WHERE Title = '" . $title . "'");
        OCICommit($db_conn);
    }

    function handleInsertProgramRequest()
    {
        global $db_conn;

        $tuple = array(
            ":bind1" => $_POST['insTitle'],
            ":bind2" => $_POST['insDay']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Program2 values (:bind1, 0, :bind2)", $alltuples);
        OCICommit($db_conn);
    }

    function handleInsertEpisodeRequest()
    {
        global $db_conn;

        $tuple = array(
            ":bind1" => $_POST['insEpTitle'],
            ":bind2" => $_POST['insProgTitle'],
            ":bind3" => $_POST['insRD'],
            ":bind4" => $_POST['insST']
        );

        $alltuples = array(
            $tuple
        );

        executeBoundSQL("insert into Contain_Episode values (:bind1, :bind2, :bind3, :bind4)", $alltuples);

        OCICommit($db_conn);
    }

    function handleDeleteProgramRequest()
    {
        global $db_conn;

        $title = $_POST['delTitle'];

        executePlainSQL("DELETE FROM Program2 WHERE Title = '" . $title . "'");
        OCICommit($db_conn);
    }

    function handleDeleteEpisodeRequest()
    {
        global $db_conn;

        $et = $_POST['delEpTitle'];
        $pt = $_POST['delProgTitle'];

        executePlainSQL("DELETE FROM Contain_Episode WHERE Title = '" . $et . "' AND ProgramTitle = '" . $pt . "'");
        OCICommit($db_conn);
    }


    function handleDayPlayCountRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT  dayPlayed, COUNT(*) FROM Program2 GROUP BY dayPlayed");

        echo "<br>Retrieved data from table Program2:<br>";
        echo "<table>";
        echo "<tr><th>dayPlayed</th><th>NumberOfProgram</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>"; //or just use "echo $row[0]"
        }

        echo "</table>";
    }

    function handleDayPlayCountWithAvgEpiMoreFiveRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT dayPlayed
                                       FROM Program2
                                       GROUP BY dayPlayed
                                       Having AVG(Episodes) > 5");

        echo "<br>Retrieved data from table Program2:<br>";
        echo "<table>";
        echo "<tr><th>dayPlayed</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td></tr>";
        }

        echo "</table>";
    }

    function handleProgramInDayPlayedWithMaxEpMoreSixRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT P.title
                                       FROM Program2 P
                                       WHERE P.dayPlayed
                                       IN
                                       (SELECT dayPlayed FROM Program2 GROUP BY dayPlayed HAVING MAX(Episodes) > 6)");

        echo "<br>Retrieved data from table Program2:<br>";
        echo "<table>";
        echo "<tr><th>Program Title</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td></tr>";
        }

        echo "</table>";
    }

    function handleProgramEpiTitleInAllProgramRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT DISTINCT CE.Title FROM Contain_Episode CE
                                       WHERE NOT EXISTS (
                                               SELECT p.Title FROM Program2 p
                                               MINUS
                                               SELECT CE2.ProgramTitle FROM Contain_Episode CE2 WHERE CE2.Title = CE.Title
                                           )");

        echo "<br>Retrieved data from table Contain_Episode, :<br>";
        echo "<table>";
        echo "<tr><th>Episode Title</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td></tr>";
        }

        echo "</table>";
    }

    function handleProgramProAndEpiTitleLongestStreamingTimeRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT C.ProgramTitle, C.Title
                                       FROM Contain_Episode C
                                       WHERE C.StreamingTime = (SELECT MAX(StreamingTime) FROM Contain_Episode)");

        echo "<br>Retrieved data from table Contain_Episode, :<br>";
        echo "<table>";
        echo "<tr><th>Program Title</th><th>Episode Title</th></tr>";
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        }

        echo "</table>";
    }


    // 영우 PHP 파트

    // 1. Episode를 가장 많이 가진 프로그램 타이틀 출력
    function handlePrintProgramTitlewithMaxEpisodeRequest()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT Title
                                    FROM Program2
                                    WHERE Episodes = (SELECT MAX(Episodes) FROM Program2)");

        echo "<br>Retrieved data from Program2 table:<br>";
        echo "<table>";
        echo "<tr><th>Title</th>";
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td></tr>";
        }

        echo "</table>";
    }

    // 2. 5개 초과 episode 수를 가진 프로그램의 title과 episode 출력
    function handlePrintProgramTitleAndEpisodeNoExceed5Request()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT Title, Episodes
                                    FROM Program2
                                    WHERE Episodes > 5");

        echo "<br>Retrieved data from Program2 table, :<br>";
        echo "<table>";
        echo "<tr><th>Program Title</th><th>Episodes</th></tr>";
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
        }
        echo "</table>";
    }

    // 3. 프로그램 타이틀과 에피소드 타이틀에 맞는 레코드의 출시일과 재생 시간 갱신
    function handleUpdateReleaseDateAndStreamingTime()
    {
        global $db_conn;

        $pt = $_POST["selectProgramTitle1"];
        $et = $_POST["selectEpisodeTitle1"];
        $rd = $_POST["newReleaseDate"];
        $st = $_POST["newStreamingTime"];

        executePlainSQL("UPDATE Contain_Episode 
                         SET ReleasedDate = '" . $rd . "', StreamingTime = '" . $st . "' WHERE Title= '" . $et . "' AND ProgramTitle = '" . $pt . "'");
        OCICommit($db_conn);
    }

    // 4. 프로그램 타이틀과 에피소드 타이틀을 입력하면, 상영일과 재생 시간 출력
    function handlePrintDayPlayedAndStreamingTimeRequest()
    {
        global $db_conn;

        $pt = $_GET['selectProgramTitle2'];
        $et = $_GET['selectEpisodeTitle2'];

        $result = executePlainSQL("SELECT CE.StreamingTime, P.dayPlayed
                                    FROM Program2 P, Contain_Episode CE
                                    WHERE P.Title = '" . $pt . "' AND CE.Title = '" . $et . "' AND CE.ProgramTitle = '" . $pt . "'");

        echo "<br>Retrieved data from table, Contain_Episode and Program2, :<br>";
        echo "<table>";
        echo "<tr><th>Streaming Time</th><th>Day Played</th></tr>";
        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr> <td>" . $row[0] . "</td> <td>" . $row[1] . "</td> </tr>";
        }

        echo "</table>";
    }

    // 5. 프로그램 타이틀을 입력하면, 예산 출력
    function handlePrintEstimatedBudgetRequest()
    {
        global $db_conn;

        $pt = $_GET['selectProgramTitle3'];

        $result = executePlainSQL("SELECT Program1.estimateBudget
                                    FROM Program1, Program2
                                    WHERE Program2.Title = '" . $pt . "' AND Program1.Episodes = Program2.Episodes");

        echo "<br>Retrieved data from table Program 1 and Program2:<br>";
        echo "<table>";
        echo "<tr><th>Estimated Budget</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr> <td>" . $row[0] . "</td> </tr>";
        }

        echo "</table>";
    }

    // 영우 PHP 파트 끝
    function handleDisplay1Request()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT * FROM Program1");

        echo "<table>";
        echo "<tr><th>Episodes</th><th>estimateBudget</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row['EPISODES'] . "</td><td>" . $row['ESTIMATEBUDGET'] . "</td></tr>";
        }

        echo "</table>";
    }

    function handleDisplay2Request()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT * FROM Program2");

        echo "<table>";
        echo "<tr><th>Title</th><th>Episodes</th><th>dayPlayed</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row['TITLE'] . "</td><td>" . $row['EPISODES'] . "</td><td>" . $row['DAYPLAYED'] . "</td></tr>";
        }

        echo "</table>";
    }

    function handleDisplay3Request()
    {
        global $db_conn;

        $result = executePlainSQL("SELECT * FROM Contain_Episode");

        echo "<table>";
        echo "<tr><th>Title</th><th>ProgramTitle</th><th>ReleasedDate</th><th>StreamingTime</th></tr>";

        while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
            echo "<tr><td>" . $row['TITLE'] . "</td><td>" . $row['PROGRAMTITLE'] . "</td><td>" . $row['RELEASEDDATE'] . "</td><td>" . $row['STREAMINGTIME'] . "</td></tr>";
        }

        echo "</table>";
    }

    // HANDLE ALL POST ROUTES
    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handlePOSTRequest()
    {
        if (connectToDB()) {
            if (array_key_exists('insertProgramQueryRequest', $_POST)) {
                handleInsertProgramRequest();
            } else if (array_key_exists('insertEpisodeQueryRequest', $_POST)) {
                handleInsertEpisodeRequest();
            } else if (array_key_exists('deleteProgramQueryRequest', $_POST)) {
                handleDeleteProgramRequest();
            } else if (array_key_exists('deleteEpisodeQueryRequest', $_POST)) {
                handleDeleteEpisodeRequest();
            } else if (array_key_exists('updateProgramQueryRequest', $_POST)) {
                handleUpdateProgramRequest();
            } else if (array_key_exists("updateReleaseDateAndStreamingTime", $_POST)) { //3. 
                handleUpdateReleaseDateAndStreamingTime();
            }
            disconnectFromDB();
        }
    }

    // HANDLE ALL GET ROUTES
    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handleGETRequest()
    {
        if (connectToDB()) {
            if (array_key_exists('dayPlayCount', $_GET)) {
                handleDayPlayCountRequest();
            } else if (array_key_exists('dayPlayCountWithAvgEpiMoreFive', $_GET)) {
                handleDayPlayCountWithAvgEpiMoreFiveRequest();
            } else if (array_key_exists('programInDayPlayedWithMaxEpMoreSix', $_GET)) {
                handleProgramInDayPlayedWithMaxEpMoreSixRequest();
            } else if (array_key_exists('programEpiTitleInAllProgram', $_GET)) {
                handleProgramEpiTitleInAllProgramRequest();
            } else if (array_key_exists('programProAndEpiTitleLongestStreamingTime', $_GET)) {
                handleProgramProAndEpiTitleLongestStreamingTimeRequest();
            } else if (array_key_exists('printProgramTitlewithMaxEpisode', $_GET)) { //1.
                handlePrintProgramTitlewithMaxEpisodeRequest();
            } else if (array_key_exists('printProgramTitleAndEpisodeNoExceed5', $_GET)) { //2. 
                handlePrintProgramTitleAndEpisodeNoExceed5Request();
            } else if (array_key_exists('printDayPlayedAndStreamingTime', $_GET)) { //4. 
                handlePrintDayPlayedAndStreamingTimeRequest();
            } else if (array_key_exists('printEstimatedBudget', $_GET)) { //5. 
                handlePrintEstimatedBudgetRequest();
            } else if (array_key_exists('display1Table', $_GET)) {
                handleDisplay1Request();;
            } else if (array_key_exists('display2Table', $_GET)) {
                handleDisplay2Request();
            } else if (array_key_exists('display3Table', $_GET)) {
                handleDisplay3Request();
            }
            disconnectFromDB();
        }
    }

    if (
        isset($_POST['insertProgramSubmit'])
        || isset($_POST['insertEpisodeSubmit'])
        || isset($_POST['deleteProgramSubmit'])
        || isset($_POST['deleteEpisodeSubmit'])
        || isset($_POST['updateSubmit'])
        || isset($_POST['updateReleaseDateAndStreamingTime']) //3. 
    ) {
        handlePOSTRequest();
    } else if (
        isset($_GET['dayPlayCountRequest'])
        || isset($_GET['dayPlayCountWithAvgEpiMoreFiveRequest'])
        || isset($_GET['programInDayPlayedWithMaxEpMoreSixRequest'])
        || isset($_GET['programEpiTitleInAllProgramRequest'])
        || isset($_GET['programProAndEpiTitleLongestStreamingTimeRequest'])
        || isset($_GET['printProgramTitlewithMaxEpisode']) //1. 
        || isset($_GET['printProgramTitleAndEpisodeNoExceed5']) //2. name으로 통신함
        || isset($_GET['printDayPlayedAndStreamingTime']) //4. 
        || isset($_GET['printEstimatedBudget']) //5. 
        || isset($_GET['display1Request'])
        || isset($_GET['display2Request'])
        || isset($_GET['display3Request'])
    ) {
        handleGETRequest();
    }
    ?>
    <!-- PHP 코드 끝 -->

</body>

</html>