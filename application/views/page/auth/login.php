<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Login
                </div>
                <div class="card-body">
                    <?= form_open('login', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">Email</label>
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value'
						=> $input->email, 'class' => 'form-control', 'placeholder' =>
						'Masukkan alamat email', 'required' => true]) ?>
                        <?= form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', [
							'class' => 'form-control',
							'placeholder' => 'Masukkan Password',
							'required' => true
						]) ?>
                        <?= form_error('password') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <?= form_close() ?>
                    </form>
                </div>
            </div>
        </div>
</main>