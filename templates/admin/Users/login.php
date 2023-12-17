<?= $this->element('admin/head');?>
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4"><?= __("Welcome to Dashboard, Login"); ?></h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
              <?= $this->Form->create(null,['type' => 'post', 'id' => 'form-login', 'class'=>'tm-login-form blk-center__box']) ?>
                  <div class="form-group">
                    <label for="username"><?= __("Username"); ?></label>
                    <?= $this->Form->control('loginId', [
                      "placeholder" => "ID",
                      'label' => false,
                      'class'=>'form-control validate',
                      'type'=>"text",
                      'autoSetCustomValidity' => false,
                    ]) ?>
                    
                  </div>
                  <div class="form-group mt-3">
                    <label for="password"><?= __("Password"); ?></label>
                    <?= $this->Form->control('password', [
                      'label' => false,
                      'type'=>"password",
                      'class' => 'form-control',
                      'placeholder'=>"password",
                      'class'=>"form-control",
                    ]) ?>
                   
                  </div>
                  <?= $this->Flash->render() ?>
                  <div class="form-group mt-4">
                    <?= $this->Form->button('Login', ['type' => 'submit', 'class' => 'btn btn-primary btn-block text-uppercase js-submit', 'value' => 'Login']); ?>
                  </div>

                  <p class="blk-center__txt"><a href=<?= $this->Url->build([
                    'controller' => 'Users',
                    'action' => 'forgotPassword'
                ]) ?> class="mt-5 btn btn-primary btn-block text-uppercase"><?= __("Forgot your password?"); ?></a></p>
                  <?= $this->Form->end() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<?= $this->element('admin/footer');?>
