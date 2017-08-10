<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-center">
              <h3>S'inscire à la Newsletter</h3>
              <?= $this->Form->create(false, array("url" => $this->Url->build(array("controller" => "newsletter", "action" => "add"), array('fullBase' => true)))); ?>
              <?= $this->Form->control("mail", array("label" => "", "class" => "control-form", "style" => "margin:10px", "placeholder" => "Votre adresse mail")); ?>
              <?= $this->Form->button("submit", array("class" => "btn btn-success")); ?>
              <?= $this->Form->end(); ?>
                <!--<ul class="list-inline text-center">
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>-->
                <p class="copyright text-muted">Copyright &copy; Mon Incroyable Blog 2017</p>
            </div>
        </div>
    </div>
</footer>
