<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1 id="about">about.me</h1>
<hr />

<?php if ($db) : ?>

<div class="container-fluid bg-1 text-center">
  <h3>Who Am I?</h3>
  <img id="img-aboutme"width="200px" height="200px"src="img/img1.jpg">
    <br>  
    <h3>  
          <i class="fa fa-heart-o" aria-hidden="true"></i>
          I am daughter  I'm a wife  I am a woman I'm a developer 
          <i class="fa fa-laptop" aria-hidden="true"></i>
          <br>
          
    </h3>
</div>

<div class="container-fluid">
    <div class="row box-contact">
        <div class="col-lg-6">
            
            <div class="wrapper">
           <h3 >Contact me</h3>
            <br>
            <p id="contact">
                <i class="fa fa-user" aria-hidden="true"></i> 
                Elizabeth Fortunato
            </p>
            <p id="contact">
                <i class="fa fa-envelope" aria-hidden="true"></i> 
                  elizabethcnfortunato@gmail.com
            </p>
            <p id="contact">
                <i class="fa fa-linkedin" aria-hidden="true"> </i>
                <a id="link"href="https://www.linkedin.com/in/elizabeth-fortunato/">            
                      linkedin.com/in/elizabeth-fortunato
                </a>
            </p>
            <p id="contact">
                <i class="fa fa-github" aria-hidden="true"></i> 
                <a id="link" href="https://github.com/elizabethcnfortunato">github.com/elizabethcnfortunato</a>
            </p>
            </div>
        </div>
        <div class="col-lg-6 col-right">
            <h3>Skills</h3>
            
            <div class="wrapper">
                            <br><br>
                    <div class="skill">
                        <p>HTML5</p>
                        <div class="skill-bar skill1 wow slideInLeft animated">
                            <span class="skill-count1">75%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <p>CSS3</p>
                        <div class="skill-bar skill2 wow slideInLeft animated">
                             <span class="skill-count2">65%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <p>JQUERY</p>
                        <div class="skill-bar skill3 wow slideInLeft animated">
                            <span class="skill-count3">65%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <p>JAVASCRIP</p>
                        <div class="skill-bar skill4 wow slideInLeft animated">
                            <span class="skill-count4">65%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <p>PHP</p>
                        <div class="skill-bar skill5 wow slideInLeft animated">
                            <span class="skill-count5">65%</span>
                        </div>
                    </div>
                    <div class="skill">
                        <p>BOOSTRAP</p>
                        <div class="skill-bar skill6 wow slideInLeft animated">
                            <span class="skill-count6">65%</span>
                        </div>
                    </div>
                </div><!-- end of /.coloumn -->
        </div>
    </div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>


<?php include(FOOTER_TEMPLATE); ?>