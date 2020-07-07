<?php $v->layout("_theme", ["title" => "Usuários"]); ?>

<div class="create">
    <div class="form_ajax" style="display: none"></div>
    <form class="form" name="gallery" action="<?= $router->route("form.create"); ?>" method="post"
          enctype="multipart/form-data">
        <label>
            <input type="text" name="first_name" placeholder="Nome:"/>
        </label>
        <label>
            <input type="text" name="last_name" placeholder="Sobrenome:"/>
        </label>
        <button>Cadastrar Usuário</button>
    </form>
</div>

<section class="users">
    <?php
    if(!empty($users)):
        foreach ($users as $user):
            $v->insert("user",["user"=>$user]);
        endforeach;
    endif;
    ?>
</section>

<?php $v->start("js"); ?>
<script>
    $(function(){
alert('Oi');
    });
</script>
<?php $v->end(); ?>
