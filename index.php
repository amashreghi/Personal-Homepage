<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    
                                        <script src="assets/js/mainScript.js"></script>
                    
                    <title>Ali Mashreghi</title>
                    
                    <style type="text/css">
                        
                        
                        div.tab{
                            overflow: hidden;
                            border: 1px solid #ccc;
                            background-color: #f1f1f1;
                        }
                    
                    .tabcontent{
                        display: none;
                        /*padding: 6px 12px;*/
                        /*border: 1px solid #ccc;*/
                        border: none;
                        border-top: none;
                    }
                    
                    li {
                        display: list-item;
                        margin-left: 0px;
                        margin: 0px;
                        padding: 0px;
                        
                    }
                    
                        </style>
                    
                    </head>
    
    
    <body>
        
        <div class="container">
            
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#aboutMe">About Me</a></li>
                <li><a data-toggle="tab" href="#resume">Resume</a></li>
                <li><a data-toggle="tab" href="#contact">Contact</a></li>
            </ul>
            
            
            <div class="tab-content">
                
                <!-- This tab shows a brief bio-->
                <div id="aboutMe" class="tab-pane fade in active">
                    <?php
                      include 'aboutMe.html';
                        
                        if (!$link = mysql_connect('localhost', 'root', 'mysql123!@#')) {
                            echo 'Could not connect to mysql';
                            exit;
                        }
                        
                        if (!mysql_select_db('mytestdb', $link)) {
                            echo 'Could not select database';
                            exit;
                        }
                        
                        $sql    = 'SELECT * FROM mytesttable';
                        $result = mysql_query($sql, $link);
                        
                        if (!$result) {
                            echo "DB Error, could not query the database\n";
                            echo 'MySQL Error: ' . mysql_error();
                            exit;
                        }
                        
                        while ($row = mysql_fetch_assoc($result)) {
                            echo $row['studentnumber'];
                        }
                        
                        mysql_free_result($result);
                    ?>
                </div> <!-- aboutMe ends -->
                
                
                <div id="resume" class="tab-pane fade">
                </div> <!-- resume ends -->
                
                <div id="contact" class="tab-pane fade">
                </div> <!-- contact ends -->

            </div> <!-- tab-content ends -->
            
        </div> <!-- container ends -->
        
        <!--
         
         
         <hr>
         
         <b><font size="5"> Research Interests</font></b> </br></br>
         
         
         <ul>
         <li> Distributed Computing</li>
         <li> Algorithmic Graph Theory </li>
         <li> Approximation Algorithms</li>
         <li> Randomized Algorithms</li>
         <li> Computational Geometry</li>
         </ul>
         
         <b><font size="5"> Publications </font></b> </br></br>
         
         <b><font size="4"> Conferences </font></b> </br>
         
         <ul>
         <li>
         Ali Mashreghi and Valerie King </br>
         <a href="http://dl.acm.org/citation.cfm?id=3007775">Time-communication trade-offs for minimum spanning tree construction.</a></br>
         Proceedings of the 18th International Conference on Distributed Computing and Networking. ACM, 2017.
         </li>
         
         </ul>
         
         
         <b><font size="4"> Journals </font></b> </br>
         
         <ul>
         <li>
         Ali Mashreghi and Alireza Zarei </br>
         <a href="http://link.springer.com/article/10.1007/s00224-015-9615-7">When Diameter Matters: Parameterized Approximation Algorithms for Bounded Diameter Minimum Steiner Tree Problem.</a></br>
         Theory of Computing Systems 58.2 (2016): 287-303.
         </li>
         </br>
         <li>
         Ali Mashreghi and Hadi Sadoghi Yazdi </br>
         <a href="http://www.sciencedirect.com/science/article/pii/S0377042713006547">A recursive algorithm for optimizing differentiation.</a></br>
         Journal of Computational and Applied Mathematics 263 (2014): 1-13.
         </li>
         
         </ul>
         </br>
         
         <b><font size="5"> Theses </font></b> </br>
         <ul>
         <li>
         MSc Thesis </br>
         Ali Mashreghi, Approximation Algorithms for Minimum Steiner Tree Problem </br>
         </li>
         </ul>
         
         <hr>
         
         <b><font size="5"> Contact Information </font></b> </br></br>
         
         Department of Computer Science (Office 642c),</br>
         University of Victoria,</br>
         Victoria,</br>
         Canada</br></br>
         
         You can email me at the following address: </br>
         <img src="assets/img/email.png" alt="My email" style="width:262px;height:25px;border:10" > </br></br>
         
         Last Update: Feburary 24, 2017
         
         -->
    </body>
</html>
