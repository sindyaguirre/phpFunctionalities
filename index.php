<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Functionalities PHP</title>

        <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

    </head>
    <body>
        <h1>PHP Functionalities</h1>
        <div class="container theme-showcase" role="main">
            <form class="" name="formWordInvert" action="actions/reponse.php" method="post" >
                <div id="wordInvert" class="row" >
                    <div class="form-group">
                        <!--campo tarefa-->
                        <div class="col-md-4 col-xd-4 col-xs-6">
                            <h3>Question 1:</h3>
                            <h4>Invert words from a text:</h4>
                            <input type="hidden" name="action" value="revertSentence"><br>
                            <input type="text" name="wordInvert" value="I want to work at Hogarth"><br>
                            <input type="submit" name="buttom" value="Submit"><br>
                        </div>
                    </div>
                </div>
            </form>
            <form class="" name="formInsert" action="actions/reponse.php" method="post" >
                <div id="insert" class="row" >
                    <div class="form-group">
                        <!--campo tarefa-->
                        <div class="col-md-4 col-xd-4 col-xs-6">
                            <h3>Question 2:</h3>
                            <h4>
                                Register person:
                            </h4>
                            <info>
                                <i>
                                    this registration form will be redirected to a page containing the result of a back-end function to enter data into the bank currently.
                                </i>
                            </info>
                            <input type="hidden" name="action" value="insertUser"><br>
                            <input type="text" name="name" value="Maria"><br>
                            <input type="text" name="phone" value="(51)987678987"><br>
                            <input type="submit" name="buttom" value="Submit"><br>
                        </div>
                    </div>
                </div>
            </form>
            <form class="" name="formResponse" action="#" method="post" >
                <div id="" class="row" >
                    <div class="form-group">
                        <!--campo tarefa-->
                        <div class="col-md-4 col-xd-4 col-xs-6">
                            <h3>Question 3:</h3>
                            <h4>Response:</h4>
                            <span>
                                As in the previous question, I would use the PDO class to assemble the function and insert the data into the database.
                                data. The PDO increases productivity by providing security to the applications, and abstraction of which database is being used, ie when changing the database will not pose major problems to the application.
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <form class="" name="formInsert" action="#" method="post" >
                <div id="" class="row" >
                    <div class="form-group">
                        <!--campo tarefa-->
                        <div class="col-md-4 col-xd-4 col-xs-6">
                            <h3>Question 4:</h3>
                            <h4>Response:</h4>
                            <span>
                                <img src="img/img1.png">
                            </span>
                        </div>
                            <input type="hidden" name="action" value="listerTables"><br>
                            <a href="uploads/pegasus.sql" target="_blanck" >Download sql</a>

                    </div>
                </div>

            </form>
            <form class="" name="formQuantPalindSubstr" action="actions/reponse.php" method="post" >
                <div id="quantPalindSubstr" class="row" >
                    <div class="form-group">
                        <!--campo tarefa-->
                        <div class="col-md-4 col-xd-4 col-xs-6">
                            <h3>Question 5:</h3>
                            <h4>Return quantity palindromes substrings:</h4>
                            <input type="hidden" name="action" value="quantPalindSubstr"><br>
                            <input type="text" name="wordInvert" value="AABBAA, ABBA, AA, BB, A, B"><br>
                            <input type="submit" name="buttom" value="Submit"><br>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </body>
</html>
