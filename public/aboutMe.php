<div class="row container-fluid">

    <div class="span4">

        <img id="profile_pic" src="img/ali.jpg" alt="Ali Mashreghi" class="img-circle img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">

    </div>
    
    <div class="span8">

        <p style="margin:15px;">
            <H1><font size=5><b>Ali Mashreghi</b></font><br/></H1>
            I have been a computer science PhD student at University of Victoria since 2016. My supervisor is <a href="http://webhome.cs.uvic.ca/~val/" target="_blank"> Dr. Valerie King.</a> I received my MSc degree in computer science from Sharif University of Technology in 2014, under supervision of <a href="http://sharif.edu/~zarei/" target="_blank">Dr. Alireza Zarei</a>. I got my bachelor's degree in computer engineering at Ferdowsi University of Mashhad in 2012.
        </p>
    </div>
    
    
</div>

<hr> <!-- to separate bio from interests -->

<div class="row container-fluid">
    <div class="col-sm-4 btn-group-vertical" style="max-width: 400px;">
        <p> I am generally interested in theoretical computer science. In particular, however, my interests include but are not limited to:
        </p>
        
        <button id="distButton" type="button" class="btn btn-info" style="text-align:left;" data-toggle="collapse" data-target="#distComp" aria-expanded="true" onclick="toggleArrow('distButton')">&#x25B9; Distributed Computing </button>
        
        <!--                            <li class="btn" data-toggle="collapse" data-target="#distComp" aria-expanded="true">&#9659; Distributed Computing</li>-->
        
        <div id="distComp" class="collapse" aria-expanded="true">
            A distributed system is a model in which components located on networked computers communicate and coordinate their actions by passing messages. The components interact with each other in order to achieve a common goal. <a href="https://en.wikipedia.org/wiki/Distributed_computing" target="_blank">[Wikipedia page]</a>
        </div>
        
        
        <button id="randButton" type="button" class="btn btn-info" style="text-align:left;" data-toggle="collapse" data-target="#randAlg" onclick="toggleArrow('randButton')">&#x25B9; Randomized Algorithms </button>
        
        <div id="randAlg" class="collapse">
            A randomized algorithm is an algorithm that employs a degree of randomness as part of its logic. The algorithm typically uses uniformly random bits as an auxiliary input to guide its behavior, in the hope of achieving good performance in the "average case" over all possible choices of random bits. <a href="https://en.wikipedia.org/wiki/Randomized_algorithm" target="_blank">[Wikipedia page]</a>
        </div>
        
        <button id="appButton" type="button" class="btn btn-info" style="text-align:left;" data-toggle="collapse" data-target="#approxAlg" onclick="toggleArrow('appButton')"> &#x25B9; Approximation Algorithms </button>
        
        <div id="approxAlg" class="collapse">
            Approximation algorithms are efficient algorithms that find approximate solutions to NP-hard optimization problems with provable guarantees on the distance of the returned solution to the optimal one. <a href="https://en.wikipedia.org/wiki/Approximation_algorithm" target="_blank">[Wikipedia page]</a>
        </div>
        
        <button id="compButton" type="button" class="btn btn-info" style="text-align:left;" data-toggle="collapse" data-target="#compGeom" onclick="toggleArrow('compButton')"> &#x25B9; Computational Geometry </button>
        
        
        <div id="compGeom" class="collapse">
            The primary goal of research in (combinatorial) computational geometry is to develop efficient algorithms and data structures for solving problems stated in terms of basic geometrical objects: points, line segments, polygons, polyhedra, etc. <a href="https://en.wikipedia.org/wiki/Computational_geometry" target="_blank">[Wikipedia page]</a>
            
        </div>
        
    </div> <!-- column ends -->
    
    <div class="col-sm-8">
        <p>
        These are some great textbooks that I stronlgy recommend to anyone who wants to gain a deeper knowledge about these areas of computer science.
        </p>

        <figure style="display: inline-block;">
            <img id="dist_book" src="img/dist.jpg" alt="Distributed Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
            <figcaption style="text-align:center;">
                <a href="https://www.amazon.ca/Distributed-Computing-Locality-Sensitive-David-Peleg/dp/0898714648" target="_black">Amazon link</a>
            </figcaption>
        </figure>
        <figure style="display: inline-block;">
            <img id="rand_book" src="img/rand.jpg" alt="Randomized Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">

            <figcaption style="text-align:center;">
                <a href="https://www.amazon.ca/Probability-Computing-Randomized-Algorithms-Probabilistic/dp/0521835402/ref=sr_1_1?s=books&ie=UTF8&qid=1499839119&sr=1-1&keywords=mitzenmacher+book" target="_black">Amazon link</a>
            </figcaption>
        </figure>
        <figure style="display: inline-block;">
            <img id="approx_book" src="img/aprox.jpg" alt="Approximation Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
            <figcaption style="text-align:center;">
                <a href="https://www.amazon.ca/Approximation-Algorithms-Vijay-V-Vazirani/dp/3540653678" target="_black">Amazon link</a>
            </figcaption>
        </figure>
        <figure style="display: inline-block;">
            <img id="geom_book" src="img/geom.jpg" alt="Geometry Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
            <figcaption style="text-align:center;">
                <a href="https://www.amazon.ca/Computational-Geometry-Applications-Mark-Berg/dp/3642096816/ref=sr_1_1?s=books&ie=UTF8&qid=1499839139&sr=1-1&keywords=de+berg+book+geometry" target="_black">Amazon link</a>
            </figcaption>
        </figure>
    </div>

   <!--  <div class="col-sm-2">
        <figure style="display: inline-block;">
            <img id="dist_book" src="img/dist.jpg" alt="Distributed Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
                <figcaption style="text-align:center;">
                    <a href="https://www.amazon.ca/Distributed-Computing-Locality-Sensitive-David-Peleg/dp/0898714648" target="_black">Amazon link</a>
                </figcaption>
                </figure>
    </div>
    <div class="col-sm-2">
        <figure style="display: inline-block;">
            <img id="rand_book" src="img/rand.jpg" alt="Randomized Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
                
                <figcaption style="text-align:center;">
                    <a href="https://www.amazon.ca/Probability-Computing-Randomized-Algorithms-Probabilistic/dp/0521835402/ref=sr_1_1?s=books&ie=UTF8&qid=1499839119&sr=1-1&keywords=mitzenmacher+book" target="_black">Amazon link</a>
                </figcaption>
                </figure>
    </div>
    <div class="col-sm-2">
        <figure style="display: inline-block;">
            <img id="approx_book" src="img/aprox.jpg" alt="Approximation Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
                <figcaption style="text-align:center;">
                    <a href="https://www.amazon.ca/Approximation-Algorithms-Vijay-V-Vazirani/dp/3540653678" target="_black">Amazon link</a>
                </figcaption>
                </figure>
    </div>
    <div class="col-sm-2">
        <figure style="display: inline-block;">
            <img id="geom_book" src="img/geom.jpg" alt="Geometry Book" class="img-rounded img-responsive" style="float:left; width:147px; height:150px; margin: 5px;">
                <figcaption style="text-align:center;">
                    <a href="https://www.amazon.ca/Computational-Geometry-Applications-Mark-Berg/dp/3642096816/ref=sr_1_1?s=books&ie=UTF8&qid=1499839139&sr=1-1&keywords=de+berg+book+geometry" target="_black">Amazon link</a>
                </figcaption>
                </figure>
            </div> -->
</div> <!-- row ends -->
