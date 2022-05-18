

<html>

<?php
get_header();
?>



  <!-- <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <title>Hello I'm Kurt</title>
  <link rel="stylesheet" href="\style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="node_modules\@fortawesome\fontawesome-free\css\fontawesome.min.css"
    />
  </head> -->


<body>
  <div class="screen">
    <div class="mainbg">
      <div class="backerbox">
         <div class="textbox">
           <h2>
                Welcome To The Rabbit Hole!
            </h2>
             <p>Definition of rabbit hole <br> : one in which the pursuit of something (such as an answer or solution) leads to other questions, problems, or pursuits</p>
          </div>
        </div>
    </div>
 </div>



    <div class="container">
   <div class="row">



<?php 

$homepagePosts = new WP_Query(array(
  'posts_per_page' => 4
));
while($homepagePosts->have_posts()){
  $homepagePosts->the_post(); ?>

<div class='blogbox col-sm-6'>
  <div class="calloutimg"><a href="<?php the_permalink();?>">
<?php echo the_post_thumbnail(); ?>
</a>
</div>
<div class="callouttext">
  <h1>
<?php the_title(); ?>
</h1>
<?php the_excerpt(); ?>
</div>
</div>


  <?php
}
   
  
?>

</div>
  </div>



 
    <!-- <div class="container">
      <div class="row">
        <div class="col post m-3">
          <h3>Why would anyone read my shit...</h3>
          <p>
            First of all my name is kurt, very nice to meet you.....First of all
            my name is kurt, very nice to meet you.....First of all my name is
            kurt,
          </p>
          <img
            src="blog.jpg"
            class="img-fluid img-thumbnail"
            alt="My wife and I."
          />
        </div>
        <div class="col post m-3">
          <h3>Apoclypse ready rollers!</h3>
          <p>
            The sun sets on a lonsome road thru the desert. A single driver
            slowly sloloms thru the broken, burned and zombie flesh covered
            empty cars...
          </p>
          <img
            src="blog2.jpg"
            class="img-fluid img-thumbnail"
            alt="My wife and I."
          />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="card col m-3">
          <div
            class="bg-image hover-overlay ripple"
            data-mdb-ripple-color="light"
          >
            <img src="blog2.jpg" class="img-fluid" />
            <a href="">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.15)"
              ></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
            <a href="" class="btn btn-primary">Button</a>
          </div>
        </div>

        <div class="card col m-3">
          <div
            class="bg-image hover-overlay ripple"
            data-mdb-ripple-color="light"
          >
            <img src="blog2.jpg" class="img-fluid" />
            <a href="">
              <div
                class="mask"
                style="background-color: rgba(251, 251, 251, 0.15)"
              ></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the
              bulk of the card's content.
            </p>
            <a href="" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
    </div> -->
  </body>
</html>
